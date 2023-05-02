// const { toSafeInteger } = require("lodash");

(function ($) {
    "use strict";

    $("form.form_validate").each(function () {
        $(this).validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10,
                },
                password: "required",
                repeat_password: {
                    equalTo: "#password_field",
                },
            },
        });
    });

    $("form.ajax_submit").on("submit", function (e) {
        e.preventDefault();
        var has_errors = false,
            form = $(this),
            form_fields = form.find("input"),
            form_message = form.find("textarea"),
            server_result_display = form.find(".server_response");

        // var name = form.find("[name=name]").val(),
        //     email = form.find("[name=email]").val(),
        //     phone = form.find("[name=phone]").val(),
        //     subject = form.find("[name=subject]").val(),
        //     message = form.find("[name=message]").val();

        form_fields.each(function () {
            if ($(this).hasClass("error")) {
                has_errors = true;
            }
        });

        if (form_message.length > 0) {
            if (form_message.hasClass("error")) {
                has_errors = true;
            }
        }

        var datastring = form.serialize();

        // console.log(datastring);

        if (!has_errors) {
            $.ajax({
                type: "POST",
                url: form.attr("action"),
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr(
                        "content"
                    ),
                },
                data: datastring,
                success: function (data) {
                    var response = jQuery.parseJSON(data);
                    // console.log(response);
                    // return;
                    if (response.status == "error") {
                        toastr.error(response.message);
                        server_result_display
                            .empty()
                            .html(
                                '<div class="mb-0 mt-3 alert alert-danger  alert-dismissible">' +
                                    response.errors +
                                    ' <button type="button" class="close" data-bs-dismiss="alert">&times;</button></div>'
                            );
                    } else if (response.status == "success") {
                        toastr.success(response.message, "Success");
                        server_result_display
                            .empty()
                            .html(
                                '<div class="mb-0 mt-3 alert alert-success  alert-dismissible">' +
                                    response.message +
                                    '<button type="button" class="close" data-bs-dismiss="alert">&times;</button></div>'
                            );
                        setTimeout(function () {
                            $("form.ajax_submit .form_alert").fadeOut(500);
                        }, 150);
                        form.trigger("reset");
                    } else if (response.status == "duplicate") {
                        toastr.info(response.message);
                        form.trigger("reset");
                    }
                },
                error: function () {
                    toastr.error("Server Error");
                    server_result_display
                        .empty()
                        .html(
                            '<div class="mb-0 mt-3 alert alert-danger  alert-dismissible">Server error! Please try again...<button type="button" class="close" data-bs-dismiss="alert">&times;</button></div>'
                        );
                },
            });
        }

        return false;
    });
})(jQuery);
