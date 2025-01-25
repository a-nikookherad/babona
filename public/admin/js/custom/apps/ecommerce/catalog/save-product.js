"use strict";

// Class definition
var KTAppEcommerceSaveProduct = function () {

    // var tinymceInstance;
    const initTinyMce = () => {
        const elements = [
            'textarea#kt_ecommerce_add_product_description',
            // 'textarea#kt_ecommerce_add_product_meta_description'
        ]

        elements.forEach(element => {
            let tinyElement = document.querySelector(element);
            if (!tinyElement) {
                return;
            }

            tinymce.init({
                selector: element,
                height: 200,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        })
    }
    // Init quill editor
    const initQuill = () => {
        // Define all elements for quill editor
        const elements = [
            '#kt_ecommerce_add_product_description',
            '#kt_ecommerce_add_product_meta_description'
        ];

        // Loop all elements
        elements.forEach(element => {
            // Get quill element
            let quill = document.querySelector(element);

            // Break if element not found
            if (!quill) {
                return;
            }

            // Init quill --- more info: https://quilljs.com/docs/quickstart/
            quill = new Quill(element, {
                modules: {
                    toolbar: [
                        [{
                            header: [1, 2, 3, 4, 5, 6, false]
                        }],
                        ['bold', 'italic', 'underline'],
                        ['background', 'color', 'font', "link", "size"],
                        ['image', 'list', 'align', 'direction']
                    ]
                },
                // placeholder: 'Type your text here...',
                theme: 'snow' // or 'bubble'
            });
        });
    }

    // Init tagify
    const initTagify = () => {
        // Define all elements for tagify
        const elements = [
            // '#kt_ecommerce_add_product_category',
            '#kt_ecommerce_add_product_tags'
        ];

        // Loop all elements
        elements.forEach(element => {
            // Get tagify element
            const tagify = document.querySelector(element);

            // Break if element not found
            if (!tagify) {
                return;
            }

            // Init tagify --- more info: https://yaireo.github.io/tagify/
            new Tagify(tagify, {
                // whitelist: ["new", "trending", "sale", "discounted", "selling fast", "last 10"],
                whitelist: whiteList,
                dropdown: {
                    maxItems: 10,           // <- mixumum allowed rendered suggestions
                    classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0,             // <- show suggestions on focus
                    closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
                }
            });
        });
    }

    // Init form repeater --- more info: https://github.com/DubFriend/jquery.repeater
    const initFormRepeater = () => {
        $('#kt_ecommerce_add_product_options').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();

                // Init select2 on new repeated items
                initConditionsSelect2();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    }

    // Init condition select2
    const initConditionsSelect2 = () => {
        // Tnit new repeating condition types
        const allConditionTypes = document.querySelectorAll('[data-kt-ecommerce-catalog-add-product="product_option"]');
        allConditionTypes.forEach(type => {
            if ($(type).hasClass("select2-hidden-accessible")) {
                return;
            } else {
                $(type).select2({
                    minimumResultsForSearch: -1
                });
            }
        });
    }


    // Init noUIslider
    const initSlider = () => {
        var slider = document.querySelector("#kt_ecommerce_add_product_discount_slider");
        var value = document.querySelector("#kt_ecommerce_add_product_discount_label");
        var discountPercentage = document.querySelector("#discount_percentage");

        noUiSlider.create(slider, {
            start: [10],
            connect: true,
            range: {
                "min": 1,
                "max": 100
            }
        });

        slider.noUiSlider.on("update", function (values, handle) {
            value.innerHTML = Math.round(values[handle]);
            discountPercentage.value = Math.round(values[handle]);
            if (handle) {
                value.innerHTML = Math.round(values[handle]);
                discountPercentage.value = Math.round(values[handle]);
            }
        });
    }

    const initInputImage = () => {
        // Get a reference to our file input
        document.querySelector('#image-input').addEventListener("change", e => {
            var myForm = document.getElementById('kt_ecommerce_add_product_form')
            var input = document.createElement('input');
            input.type = "file";
            input.name = "thumbnail";
            input.files = e.target.files;
            // console.log(myForm)
            myForm.appendChild(input);

            // Create a new File object
            /*            const myFile = new File(['Hello World!'], e.target.files[0].name, {
                            type: 'image/jpeg',
                            lastModified: new Date(),
                        });

                        // Now let's create a DataTransfer to get a FileList
                        const dataTransfer = new DataTransfer();
                        dataTransfer.items.add(myFile);
                        document.querySelector('#image-input').files = dataTransfer.files;*/
        });
    }

    var myDropzone;

    // Init DropzoneJS --- more info:
    const initDropzone = () => {
        // var myDropzone = new Dropzone("#kt_ecommerce_add_product_media", {
        myDropzone = new Dropzone("#kt_ecommerce_add_product_form", {
            url: productStoreLink, // Set the url for your upload script location
            paramName: "images", // The name that will be used to transfer the file
            maxFiles: 5,
            autoProcessQueue: false,
            // autoQueue: true,
            autoDiscover: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            previewsContainer: '#dropzone-previews',
            acceptedFiles: ".jpg, .jpeg, .png",
            clickable: '#dropzone-previews',
            /*init: function () {
                var myDropzone = this;
                this.element.querySelector("button[type=submit]").addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var oldInput = document.querySelector('#image-input')
                    var input = document.createElement('input');
                    input.type = "file";
                    input.name = "thumbnail";
                    input.files = oldInput.files;
                    // console.log(myDropzone.element)
                    myDropzone.element.prepend(input)
                    console.log(myDropzone.element)

                    // console.log(input.files)
                    /!*                    var myForm = document.getElementById('kt_ecommerce_add_product_form')
                                        var input = document.createElement('input');
                                        input.type = "file";
                                        input.name = "thumbnail";
                                        input.files = e.target.files;
                                        // console.log(myForm)
                                        myForm.appendChild(input);
                                        $(this).closest('form')*!/
                    myDropzone.processQueue();
                    $(this).closest('form').ajaxFormSend(function(data){
                        $('.projects-panel').prepend(Mustache.to_html(window.templates.panelProjects, data.data));
                    });
                });
                this.on("sendingmultiple", function () {
                });
                this.on("successmultiple", function (files, response) {
                });
                this.on("addedfile", function (file) {
                    console.log(file)
                });
                this.on("maxfilesexceeded", function (file) {
                    /!*                    myDropzone.removeFile(file);
                                        noty({
                                            type:'error',
                                            text:'No more files plesase!'
                                        });*!/
                });
            },*/
            accept: function (file, done) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
    }

    // Handle discount options
    const handleDiscount = () => {
        const discountOptions = document.querySelectorAll('input[name="discount_option"]');
        const percentageEl = document.getElementById('kt_ecommerce_add_product_discount_percentage');
        const fixedEl = document.getElementById('kt_ecommerce_add_product_discount_fixed');

        discountOptions.forEach(option => {
            option.addEventListener('change', e => {
                const value = e.target.value;

                switch (value) {
                    case '2': {
                        percentageEl.classList.remove('d-none');
                        fixedEl.classList.add('d-none');
                        break;
                    }
                    case '3': {
                        percentageEl.classList.add('d-none');
                        fixedEl.classList.remove('d-none');
                        break;
                    }
                    default: {
                        percentageEl.classList.add('d-none');
                        fixedEl.classList.add('d-none');
                        break;
                    }
                }
            });
        });
    }

    // Shipping option handler
    const handleShipping = () => {
        const shippingOption = document.getElementById('kt_ecommerce_add_product_shipping_checkbox');
        const shippingForm = document.getElementById('kt_ecommerce_add_product_shipping');

        shippingOption.addEventListener('change', e => {
            const value = e.target.checked;

            if (value) {
                shippingForm.classList.remove('d-none');
            } else {
                shippingForm.classList.add('d-none');
            }
        });
    }

    // Category status handler
    const handleStatus = () => {
        const target = document.getElementById('kt_ecommerce_add_product_status');
        const select = document.getElementById('kt_ecommerce_add_product_status_select');
        const statusClasses = ['bg-success', 'bg-warning', 'bg-danger'];

        $(select).on('change', function (e) {
            const value = e.target.value;

            switch (value) {
                case "published": {
                    target.classList.remove(...statusClasses);
                    target.classList.add('bg-success');
                    hideDatepicker();
                    break;
                }
                case "waiting": {
                    target.classList.remove(...statusClasses);
                    target.classList.add('bg-warning');
                    // showDatepicker();
                    hideDatepicker();
                    break;
                }
                case "archive": {
                    target.classList.remove(...statusClasses);
                    target.classList.add('bg-danger');
                    hideDatepicker();
                    break;
                }
                case "upcoming": {
                    target.classList.remove(...statusClasses);
                    target.classList.add('bg-primary');
                    // showDatepicker();
                    hideDatepicker();
                    break;
                }
                default:
                    break;
            }
        });


        // Handle datepicker
        const datepicker = document.getElementById('kt_ecommerce_add_product_status_datepicker');

        // Init flatpickr --- more info: https://flatpickr.js.org/
        $('#kt_ecommerce_add_product_status_datepicker').flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        const showDatepicker = () => {
            datepicker.parentNode.classList.remove('d-none');
        }

        const hideDatepicker = () => {
            datepicker.parentNode.classList.add('d-none');
        }
    }

    // Condition type handler
    const handleConditions = () => {
        const allConditions = document.querySelectorAll('[name="method"][type="radio"]');
        const conditionMatch = document.querySelector('[data-kt-ecommerce-catalog-add-category="auto-options"]');
        allConditions.forEach(radio => {
            radio.addEventListener('change', e => {
                if (e.target.value === '1') {
                    conditionMatch.classList.remove('d-none');
                } else {
                    conditionMatch.classList.add('d-none');
                }
            });
        })
    }

    // Submit form handler
    const handleSubmit = () => {
        // Define variables
        let validator;

        // Get elements
        const form = document.getElementById('kt_ecommerce_add_product_form');
        const submitButton = document.getElementById('kt_ecommerce_add_product_submit');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'slug': {
                        validators: {
                            notEmpty: {
                                message: 'نامک محصول اجباری می باشد!'
                            }
                        }
                    },
                    'fa_name': {
                        validators: {
                            notEmpty: {
                                message: 'نام فارسی اجباری می باشد!'
                            }
                        }
                    },
                    /*'thumbnail': {
                        validators: {
                            notEmpty: {
                                message: 'بند انگشتی اجباری می باشد!'
                            },
                            file: {
                                extension: 'jpeg,jpg,png,gif',
                                type: 'image/jpeg,image/png,image/gif',
                                message: 'Please select a valid image file (jpeg, jpg, png, gif)',
                            },
                        }
                    },*/
                    /*'category_id': {
                        validators: {
                            notEmpty: {
                                message: 'دسته بندی اجباری می باشد!'
                            }
                        }
                    },*/
                    'price': {
                        validators: {
                            notEmpty: {
                                message: 'قیمت محصول اجباری می باشد!'
                            }
                        }
                    },
                    "images":{
                        validators: {
                            callback: {
                                message: "You must upload at least one file",
                                callback: function () {
                                    return myDropzone.files.length > 0; // Ensure at least one file is added
                                },
                            },
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );


/*        validator.addField("images", {
            validators: {
                callback: {
                    message: "You must upload at least one file",
                    callback: function () {
                        return myDropzone.files.length > 0; // Ensure at least one file is added
                    },
                },
            },
        });*/
        // Handle submit button
        submitButton.addEventListener('click', e => {
            e.preventDefault();

            /*validator.addField("product_details", {
                validators: {
                    notEmpty: {
                        message: 'جزییات محصول اجباری میی باشد'
                    }
                }
            });*/
            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {

                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable submit button whilst loading
                        submitButton.disabled = true;



                        tinymce.triggerSave();

                        const formData = new FormData(form);

                        myDropzone.getAcceptedFiles().forEach((file, index) => {
                            formData.append(`images[${index}]`, file);
                        });

                        fetch(productStoreLink, {
                            method: "POST",
                            headers: {
                                "Accept": "application/json",
                                "Accept-language": "fa",
                            },
                            body: formData,
                        })
                            .then((response) => response.json())
                            .then((data) => {
                                submitButton.removeAttribute('data-kt-indicator');
                                Swal.fire({
                                    text: data.message,
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "اوکی، حله!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        // Enable submit button after loading
                                        submitButton.disabled = false;

                                        // Redirect to customers list page
                                        window.location = form.getAttribute("data-kt-redirect");
                                    }
                                });
                            })
                            .catch((error) => {
                                Swal.fire({
                                    html: error.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "اوکی، الان بررسی میکنم",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            });

                        /*setTimeout(function () {



                        }, 2000);*/
                    } else {
                        Swal.fire({
                            html: "مثل اینکه توی پر کردن فرم مشکلی وجود داره!<br> لطفا فیلدها رو با دقت بررسی کنید!",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "اوکی، الان بررسی میکنم",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        })
    }

    // Public methods
    return {
        init: function () {
            // Init forms
            initTinyMce();
            // initQuill();
            initTagify();
            initSlider();
            initFormRepeater();
            initDropzone();
            // initInputImage();
            initConditionsSelect2();

            // Handle forms
            handleStatus();
            handleConditions();
            handleDiscount();
            // handleShipping();
            handleSubmit();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSaveProduct.init();
});
