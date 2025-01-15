"use strict";

// Class definition
var KTSigninGeneral = function () {
    // Elements
    var form;
    var submitButton;
    var validator;

    // Handle form
    var handleValidation = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'username': {
                        validators: {
                            regexp: {///^[^\s@]+@[^\s@]+\.[^\s@]+$/
                                regexp: /0[0-9]{10}|[a-zA-Z0-9]{3,25}\@[a-zA-Z0-9]{3,20}\.[a-zA-Z0-9]{2,10}/,
                                message: 'این مقدار برای نام کاربری صحیح نمی باشد!',
                            },
                            notEmpty: {
                                message: 'نام کاربری اجباری می باشد!'
                            }
                        }
                    },
                    'password': {
                        validators: {
                            regexp: {///^[^\s@]+@[^\s@]+\.[^\s@]+$/
                                regexp: /[a-zA-Z0-9_.-]{7,30}/,
                                message: 'این مقدار برای گذرواژه کافی نمی باشد!',
                            },
                            notEmpty: {
                                message: 'گذرواژه اجباری می باشد!'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',  // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
                }
            }
        );
    }

    var handleSubmitDemo = function (e) {
        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;


                    // Simulate ajax request
                    setTimeout(function () {
                        // Hide loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

                        // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "شما با موفقیت وارد شدید!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (result) {
                            if (result.isConfirmed) {
                                form.querySelector('[name="username"]').value = "";
                                form.querySelector('[name="password"]').value = "";

                                //form.submit(); // submit form
                                var redirectUrl = form.getAttribute('data-kt-redirect-url');
                                if (redirectUrl) {
                                    location.href = redirectUrl;
                                }
                            }
                        });
                    }, 2000);
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }

    var handleSubmitAjax = function (e) {
        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    // Hide loading indication
                    submitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton.disabled = false;

                    // Check axios library docs: https://axios-http.com/docs/intro
                    axios.post(loginUrl, {
                        username: form.querySelector('[name="username"]').value,
                        password: form.querySelector('[name="password"]').value
                    }).then(function (response) {
                        if (response) {
                            form.querySelector('[name="username"]').value = "";
                            form.querySelector('[name="password"]').value = "";

                            const redirectUrl = form.getAttribute('data-kt-redirect-url');

                            if (redirectUrl) {
                                location.href = redirectUrl;
                            }
                        } else {
                            // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "متاسفانه نام کاربری یا گذرواژه شما اشتباه است لطفا دوباره تلاش فرمایید",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "اوکی، متوجه شدم!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    }).catch(function (error) {
                        Swal.fire({
                            text: "کلمه عبور یا نام کاربری اشتباه می باشد!",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "اوکی، متوجه شدم!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    });
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "متاسفانه در پر کردن فیلدها مشکلی رخ داده است لطفا فرم را بررسی کنید.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "اوکی، متوجه شدم!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector('#kt_sign_in_form');
            submitButton = document.querySelector('#kt_sign_in_submit');

            handleValidation();
            //handleSubmitDemo(); // used for demo purposes only, if you use the below ajax version you can uncomment this one
            handleSubmitAjax(); // use for ajax submit
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
