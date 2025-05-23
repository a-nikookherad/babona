@extends("admin.layouts.main")
@push("breadcrumb")
    <!--begin::آیتم-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <!--end::آیتم-->

    <!--begin::آیتم-->
    <li class="breadcrumb-item text-muted">
        <a href="{{route("production.products.list")}}"
           class="text-muted text-hover-primary">لیست محصولات</a>
    </li>
    <!--end::آیتم-->
    <!--begin::آیتم-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <!--end::آیتم-->

    <!--begin::آیتم-->
    <li class="breadcrumb-item text-muted">
        <a href="{{route("production.products.create")}}"
           class="text-muted text-hover-primary">افزودن محصول</a>
    </li>
    <!--end::آیتم-->
@endpush
@section("content")

    <!--begin::Form-->
    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row " enctype="multipart/form-data"
          data-kt-redirect="{{route("production.products.list")}}" action="{{route("production.products.store")}}">
    @csrf
    <!--begin::کناری column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2 class="required">تصویر شاخص</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <!--begin::Image input placeholder-->
                    <style>.image-input-placeholder {
                            background-image: url('{{asset("admin/media/svg/files/blank-image.svg")}}');
                        }

                        [data-theme="dark"] .image-input-placeholder {
                            background-image: url('{{asset("admin/media/svg/files/blank-image-dark.svg")}}');
                        }</style>
                    <!--end::Image input placeholder-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                         data-kt-image-input="true">
                        <!--begin::نمایش existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::نمایش existing avatar-->
                        <!--begin::Tags-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                               data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="file" id="image-input" name="thumbnail" accept=".png, .jpg, .jpeg" required/>
                            <input type="hidden" name="avatar_remove"/>
                            <!--end::Inputs-->
                        </label>
                        <!--end::Tags-->
                        <!--begin::انصراف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="انصراف avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                        <!--end::انصراف-->
                        <!--begin::حذف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف آواتار">
															<i class="bi bi-x fs-2"></i>
														</span>
                        <!--end::حذف-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">تصویر بندانگشتی محصول را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و
                        *.jpeg پذیرفته می شوند
                    </div>
                    <!--end::توضیحات-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::وضعیت-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>وضعیت</h2>
                    </div>
                    <!--end::کارت title-->
                    <!--begin::کارت toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                    </div>
                    <!--begin::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                            data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select">
                        <option></option>
                        <option value="{!!\Production\Production::$upcoming!!}"
                                selected="selected">{!!\Production\Production::$mapStatus[\Production\Production::$upcoming]!!}</option>
                        <option
                            value="{{\Production\Production::$waiting}}">{{\Production\Production::$mapStatus[\Production\Production::$waiting]}}</option>
                        <option
                            value="{{\Production\Production::$published}}">{{\Production\Production::$mapStatus[\Production\Production::$published]}}</option>
                        <option
                            value="{{\Production\Production::$archive}}">{{\Production\Production::$mapStatus[\Production\Production::$archive]}}</option>
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">وضعیت محصول را تنظیم کنید.</div>
                    <!--end::توضیحات-->
                    <!--begin::تاریخpicker-->
                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">انتخاب publishing
                            date و time</label>
                        <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                               placeholder="انتخاب تاریخ & زمان"/>
                    </div>
                    <!--end::تاریخpicker-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::وضعیت-->
            <!--begin::دسته بندی & tags-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>جزییات محصول</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <!--begin::Tags-->
                    <label class="form-label required">دسته بندی ها</label>
                    <!--end::Tags-->
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2" data-control="select2" data-placeholder="انتخاب " required
                            data-allow-clear="false" {{--multiple="multiple"--}} name="category_id">
                        <option></option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->fa_name}}</option>
                        @endforeach
                        {{--                        <option value="ساعت">ساعت</option>
                                                <option value="هدست">هدست</option>
                                                <option value="کفش">کفش</option>
                                                <option value="دوربین">دوربین</option>
                                                <option value="پیراهن">پیراهن</option>
                                                <option value="چراغ مطالعه">چراغ مطالعه</option>
                                                <option value="کیف">کیف</option>
                                                <option value="شراب ها">شراب ها</option>--}}
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7 mb-7">محصول را به یک دسته اضافه کنید.</div>
                    <!--end::توضیحات-->
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <a href="{{route("production.categories.create")}}"
                       class="btn btn-light-primary btn-sm mb-10">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                        <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11" y="18" width="12" height="2"
                                                                  rx="1" transform="rotate(-90 11 18)"
                                                                  fill="currentColor"/>
															<rect x="6" y="11" width="12" height="2" rx="1"
                                                                  fill="currentColor"/>
														</svg>
													</span>
                        <!--end::Svg Icon-->ساخت دسته بندی</a>
                    <!--end::Button-->
                    <!--begin::Input group-->
                    <!--begin::Tags-->
                    <label class="form-label d-block">برچسب ها</label>
                    <!--end::Tags-->
                    <!--begin::Input-->
                    <input id="kt_ecommerce_add_product_tags" name="tags"
                           class="form-control mb-2" value=""/>
                    <!--end::Input-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">افزودن برچسب محصول</div>
                    <!--end::توضیحات-->
                    <!--end::Input group-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::دسته بندی & tags-->
            <!--begin::هفتهly sales-->
        {{--<div class="card card-flush py-4">
            <!--begin::کارت header-->
            <div class="card-header">
                <!--begin::کارت title-->
                <div class="card-title">
                    <h2>فروش هفته</h2>
                </div>
                <!--end::کارت title-->
            </div>
            <!--end::کارت header-->
            <!--begin::کارت body-->
            <div class="card-body pt-0">
                <span
                    class="text-muted">اطلاعاتی موجود نیست. پس از انتشار محصول، داده های فروش شروع به ضبط می کنند.</span>
            </div>
            <!--end::کارت body-->
        </div>--}}
        <!--end::هفتهly sales-->
            <!--begin::Template settings-->
        {{--<div class="card card-flush py-4">
            <!--begin::کارت header-->
            <div class="card-header">
                <!--begin::کارت title-->
                <div class="card-title">
                    <h2>قالب محصول</h2>
                </div>
                <!--end::کارت title-->
            </div>
            <!--end::کارت header-->
            <!--begin::کارت body-->
            <div class="card-body pt-0">
                <!--begin::انتخاب store template-->
                <label for="kt_ecommerce_add_product_store_template" class="form-label">انتخاب بک قالب</label>
                <!--end::انتخاب store template-->
                <!--begin::انتخاب2-->
                <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                        data-placeholder="انتخاب " id="kt_ecommerce_add_product_store_template">
                    <option></option>
                    <option value="default" selected="selected">قالب پیش فرض</option>
                    <option value="electronics">الکترونیک</option>
                    <option value="office">اداری</option>
                    <option value="fashion">فشن</option>
                </select>
                <!--end::انتخاب2-->
                <!--begin::توضیحات-->
                <div class="text-muted fs-7">اختصاص دادن یک الگو از موضوع فعلی شما برای تعریف نحوه نمایش یک محصول
                    واحد.
                </div>
                <!--end::توضیحات-->
            </div>
            <!--end::کارت body-->
        </div>--}}
        <!--end::Template settings-->
        </div>
        <!--end::کناری column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                       href="#kt_ecommerce_add_product_general">عمومی</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                       href="#kt_ecommerce_add_product_advanced">پیشرفته</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::عمومی options-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>عمومی</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <x-admin.text-box name="slug" label="نامک محصول" required="1">
                                    نامک محصول مورد نیاز است و باید منحصر به فرد باشد.
                                </x-admin.text-box>

                                <x-admin.text-box name="fa_name" label="نام محصول" required="1">
                                    نام محصول مورد نیاز است و توصیه می شود در قالب "نام مدل برند" باشد.
                                </x-admin.text-box>

                                <x-admin.text-box name="material" label="جنس محصول">
                                    جنس محصول را وارد کنید(برای مثال کتان).
                                </x-admin.text-box>

                                <x-admin.text-box name="style" label="استایل محصول">
                                    استایل محصول را وارد کنید(برای مثال بگ استایل).
                                </x-admin.text-box>

                                <div class="mb-6">
                                    <!--begin::Tags-->
                                    <label class="form-label" for="kt_ecommerce_add_product_brief">توصیف مختصر</label>
                                    <!--end::Tags-->
                                    <!--begin::or-->
                                    <textarea id="kt_ecommerce_add_product_brief"
                                              name="brief" class="w-100 min-h-150px mb-2"></textarea>
                                    <!--end::or-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">توضیح مختصری را برای محصول تنظیم کنید.</div>
                                    <!--end::توضیحات-->
                                </div>

                                <div class="mt-6">
                                    <!--begin::Tags-->
                                    <label class="form-label" for="kt_ecommerce_add_product_description">توضیحات</label>
                                    <!--end::Tags-->
                                    <!--begin::or-->
                                    <textarea id="kt_ecommerce_add_product_description"
                                              name="description" class="w-100 min-h-150px mb-2"></textarea>
                                    <!--end::or-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">برای دید بهتر، توضیحاتی را برای محصول تنظیم کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::عمومی options-->
                        <!--begin::Media-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title required">
                                    <h2>گالری عکس محصول</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row mb-2">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone"
                                         id="dropzone-previews"{{--id="kt_ecommerce_add_product_media"--}}>
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">پرونده ها را اینجا رها کنید
                                                    یا برای بارگذاری کلیک کنید.</h3>
                                                <span
                                                    class="fs-7 fw-semibold text-gray-400">آپلود فایل تا 5 عدد.</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::توضیحات-->
                                <div class="text-muted fs-7">لطفا عکس های مربوط به گالری محصول را انتخاب کنید.</div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::Media-->
                        <!--begin::قیمت گذاری-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>قیمت گذاری</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="required form-label">قیمت پایه</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" name="price" class="form-control mb-2" placeholder="قیمت محصول"
                                           value=""/>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">قیمت محصول را وارد کنید</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Tags-->
                                    <label class="fs-6 fw-semibold mb-2">نوع تخفیف
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="انتخاب a discount type that will be applied to this product"></i></label>
                                    <!--End::Tags-->
                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                         data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::رادیو-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input"
                                                                                           type="radio"
                                                                                           name="discount_option"
                                                                                           value="1" checked="checked"/>
																				</span>
                                                <!--end::رادیو-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
																					<span
                                                                                        class="fs-4 fw-bold text-gray-800 d-block">بدون تخفیف</span>
																				</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::رادیو-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input"
                                                                                           type="radio"
                                                                                           name="discount_option"
                                                                                           value="2"/>
																				</span>
                                                <!--end::رادیو-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
																					<span
                                                                                        class="fs-4 fw-bold text-gray-800 d-block">درصدی</span>
																				</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::رادیو-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input"
                                                                                           type="radio"
                                                                                           name="discount_option"
                                                                                           value="3"/>
																				</span>
                                                <!--end::رادیو-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
																					<span
                                                                                        class="fs-4 fw-bold text-gray-800 d-block">قیمت ثابت</span>
																				</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                    <!--begin::Tags-->
                                    <label class="form-label">درصد تخفیف را تنظیم کنید</label>
                                    <!--end::Tags-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center mb-5">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                            <span class="fw-bold fs-3x"
                                                  id="kt_ecommerce_add_product_discount_label">0</span>
                                        </div>
                                        <div id="kt_ecommerce_add_product_discount_slider"
                                             class="noUi-sm bg-primary"></div>
                                        <input type="hidden" name="discount_percentage" id="discount_percentage" />
                                    </div>
                                    <!--end::Slider-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">درصد تخفیف را برای این محصول تعیین کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                    <!--begin::Tags-->
                                    <label class="form-label">میزان تخفیف را وارد کنید.</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="number" id="kt_discount_value" name="discount" class="form-control mb-2"
                                           placeholder="میزان تخفیف"/>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">میزان تخفیف این محصول را به تومان وارد کنید.
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Tax-->
                            {{--<div class="d-flex flex-wrap gap-5">
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Tags-->
                                    <label class="required form-label">کلاس مالیات</label>
                                    <!--end::Tags-->
                                    <!--begin::انتخاب2-->
                                    <select class="form-select mb-2" name="tax" data-control="select2"
                                            data-hide-search="true" data-placeholder="انتخاب ">
                                        <option></option>
                                        <option value="0">بدون مالیات</option>
                                        <option value="1">ارزش افزوده</option>
--}}{{--                                            <option value="2"></option>--}}{{--
                                    </select>
                                    <!--end::انتخاب2-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">طبقه مالیات محصول را تنظیم کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row w-100 flex-md-root">
                                    <!--begin::Tags-->
                                    <label class="form-label">مقدار (%)</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" value=""/>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">مالیات بر ارزش افزوده محصول را تنظیم کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                            </div>--}}
                            <!--end:Tax-->
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::قیمت گذاری-->
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::Inventory-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>موجودی</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="form-label">کد محصول</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" name="code" class="form-control mb-2"
                                           placeholder="کد را وارد کنید" value=""/>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">کد محصول را وارد کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="form-label">بارکد</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" name="barcode" class="form-control mb-2"
                                           placeholder="شماره بارکد"
                                           value=""/>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">شماره بارکد را وارد کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                {{--<div class="--}}{{--mb-10--}}{{-- fv-row">
                                    <!--begin::Tags-->
                                    <label class="required form-label">تعداد محصول</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <div class="d-flex gap-3">
                                        --}}{{--<input type="number" name="shelf" class="form-control mb-2"
                                               placeholder="در مغازه" value=""/>--}}{{--
                                        <input type="number" name="quantity" class="form-control mb-2"
                                            --}}{{--placeholder="در انبار"--}}{{--/>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">تعداد محصول ورودی به انبار.</div>
                                    <!--end::توضیحات-->
                                </div>--}}
                                <!--end::Input group-->
                                <!--begin::Input group-->
                            {{--<div class="fv-row">
                                <!--begin::Tags-->
                                <label class="form-label">همه چگونه برگشت سفارش می دهد</label>
                                <!--end::Tags-->
                                <!--begin::Input-->
                                <div class="form-check form-check-custom form-check-solid mb-2">
                                    <input class="form-check-input" type="checkbox" value=""/>
                                    <label class="form-check-label">بله</label>
                                </div>
                                <!--end::Input-->
                                <!--begin::توضیحات-->
                                <div class="text-muted fs-7">به مشتریان اجازه دهید محصولاتی را خریداری کنند که
                                    موجودی آنها تمام شده است.
                                </div>
                                <!--end::توضیحات-->
                            </div>--}}
                            <!--end::Input group-->
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::Inventory-->
                        <!--begin::Variations-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>متغیرها</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                    <!--begin::Tags-->
                                    <label class="required form-label">افزودن متغییر های محصول</label>
                                    <!--end::Tags-->
                                    <!--begin::Repeater-->
                                    <div id="kt_ecommerce_add_product_options" class="w-100">
                                        <!--begin::Form group-->
                                        <div class="form-group w-100">
                                            <div data-repeater-list="product_details"
                                                 class="d-flex flex-column gap-3">
                                                <div data-repeater-item=""
                                                     class="form-group d-flex flex-row align-items-center gap-5 w-100">
                                                    <!--begin::انتخاب2-->
                                                    <div class="w-25">
                                                        <select class="form-select" disabled name="color"
                                                                data-placeholder="یک متغییر انتخاب کنبد"
                                                                data-kt-ecommerce-catalog-add-product="product_option">
                                                            <option></option>
                                                            <option value="color" selected>Color</option>
{{--                                                            <option value="size">Size</option>--}}
                                                            {{--                                                            <option value="material">Material</option>--}}
                                                            {{--                                                            <option value="style">Style</option>--}}
                                                        </select>
                                                        <input type="color" class="form-control my-2 mw-100 w-100"
                                                               name="color" placeholder="مقدار"/>
                                                    </div>
                                                    <div class="w-25">
                                                        <select class="form-select" disabled name="size"
                                                                data-placeholder="یک متغییر انتخاب کنبد"
                                                                data-kt-ecommerce-catalog-add-product="product_option">
                                                            <option></option>
{{--                                                            <option value="color">Color</option>--}}
                                                            <option value="size" selected>Size</option>
                                                            {{--                                                            <option value="material">Material</option>--}}
                                                            {{--                                                            <option value="style">Style</option>--}}
                                                        </select>
                                                        <input type="text" class="form-control mw-100 w-100" max="50"
                                                               name="size" placeholder="سایز"/>
                                                    </div>
                                                    <div class="w-25">
                                                        <select class="form-select" disabled name="quantity"
                                                                data-placeholder="یک متغییر انتخاب کنبد"
                                                                data-kt-ecommerce-catalog-add-product="product_option">
                                                            <option></option>
                                                            {{--                                                            <option value="color">Color</option>--}}
                                                            <option value="quantity" selected>quantity</option>
                                                            {{--                                                            <option value="material">Material</option>--}}
                                                            {{--                                                            <option value="style">Style</option>--}}
                                                        </select>
                                                        <input type="number" class="form-control mw-100 w-100"
                                                               name="quantity" placeholder="تعداد"/>
                                                    </div>
                                                    <!--end::انتخاب2-->
                                                    <!--begin::Input-->

                                                    <!--end::Input-->
                                                    <button type="button" data-repeater-delete=""
                                                            class="btn btn-sm btn-icon btn-light-danger">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                                        <span class="svg-icon svg-icon-1">
																							<svg width="24" height="24"
                                                                                                 viewBox="0 0 24 24"
                                                                                                 fill="none"
                                                                                                 xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5"
                                                                                                      x="7.05025"
                                                                                                      y="15.5356"
                                                                                                      width="12"
                                                                                                      height="2" rx="1"
                                                                                                      transform="rotate(-45 7.05025 15.5356)"
                                                                                                      fill="currentColor"/>
																								<rect x="8.46447"
                                                                                                      y="7.05029"
                                                                                                      width="12"
                                                                                                      height="2" rx="1"
                                                                                                      transform="rotate(45 8.46447 7.05029)"
                                                                                                      fill="currentColor"/>
																							</svg>
																						</span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group mt-5 w-100">
                                            <button type="button" data-repeater-create=""
                                                    class="btn btn-sm btn-light-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.5" x="11" y="18"
                                                                                          width="12" height="2" rx="1"
                                                                                          transform="rotate(-90 11 18)"
                                                                                          fill="currentColor"/>
																					<rect x="6" y="11" width="12"
                                                                                          height="2" rx="1"
                                                                                          fill="currentColor"/>
																				</svg>
																			</span>
                                                <!--end::Svg Icon-->Add another variation
                                            </button>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::Variations-->
                        <!--begin::حمل دریایی-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>حمل دریایی</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox"
                                               id="kt_ecommerce_add_product_shipping_checkbox" value="1"/>
                                        <label class="form-check-label">این محصول فیزیکی می باشد</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">تنظیم کنید که آیا محصول یک کالای فیزیکی یا دیجیتالی
                                        است. محصولات فیزیکی ممکن است نیاز به حمل و نقل داشته باشند.
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::حمل دریایی form-->
                                <div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Tags-->
                                        <label class="form-label">وزن</label>
                                        <!--end::Tags-->
                                        <!--begin::or-->
                                        <input type="text" name="weight" class="form-control mb-2"
                                               placeholder="محصولات weight" value=""/>
                                        <!--end::or-->
                                        <!--begin::توضیحات-->
                                        <div class="text-muted fs-7">وزن محصول را بر حسب کیلوگرم (کیلوگرم) تنظیم کنید.
                                        </div>
                                        <!--end::توضیحات-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="form-label">ابعاد</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                            <input type="number" name="width" class="form-control mb-2"
                                                   placeholder="Width (w)" value=""/>
                                            <input type="number" name="height" class="form-control mb-2"
                                                   placeholder="Height (h)" value=""/>
                                            <input type="number" name="length" class="form-control mb-2"
                                                   placeholder="Lengtn (l)" value=""/>
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::توضیحات-->
                                        <div class="text-muted fs-7">ابعاد محصول را به سانتی متر (سانتی متر) وارد
                                            کنید.
                                        </div>
                                        <!--end::توضیحات-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::حمل دریایی form-->
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::حمل دریایی-->
                        <!--begin::Meta options-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2> تنظیمات متا</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Tags-->
                                    <label class="form-label">برچسب اَبر عنوان</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" name="meta_tag_title"
                                           placeholder="متا تگ"/>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">یک عنوان متا تگ تنظیم کنید. توصیه می شود کلمات کلیدی
                                        ساده و دقیق باشند.
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Tags-->
                                    <label class="form-label">توضیحات متا تگ</label>
                                    <!--end::Tags-->
                                    <!--begin::or-->
                                    <textarea id="kt_ecommerce_add_product_meta_description"
                                              name="meta_tag_description"
                                              class="w-100 min-h-150px mb-2"></textarea>
                                    <!--end::or-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">برای افزایش رتبه سئو، توضیحات متا تگ را برای محصول
                                        تنظیم کنید.
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Tags-->
                                    <label class="form-label">کلمات کلیدی</label>
                                    <!--end::Tags-->
                                    <!--begin::or-->
                                    <input id="kt_ecommerce_add_product_meta_keywords"
                                           name="meta_tag_keywords" class="form-control mb-2"/>
                                    <!--end::or-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">لیستی از کلمات کلیدی که محصول به آنها مرتبط است تنظیم
                                        کنید. شهریور کلمات کلیدی را با اضافه کردن کاما مرتب کنید
                                        <code>,</code>بین هر کلمه کلیدی.
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::Meta options-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{route("production.products.list")}}" id="kt_ecommerce_add_product_cancel"
                   class="btn btn-light me-5">انصراف</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                    <span class="indicator-label">ذخیره تغییرات</span>
                    <span class="indicator-progress">لطفا صبر کنید...
													<span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
    <!--end::Form-->

@endsection
@push("styles_before")
    <link href="{{asset("admin/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css"/>
@endpush
@push("scripts_before")
    <script>
        var hostUrl = "admin/";
        var productStoreLink = "{{route("production.products.store")}}";
        var whiteList = @php echo json_encode($tags->toArray()); @endphp
    </script>
@endpush
@push("scripts_after")
    <script src="{{asset("admin/plugins/custom/tinymce/tinymce.bundle.js")}}"></script>
    <script src="{{asset("admin/plugins/custom/datatables/datatables.bundle.js")}}"></script>
    <script src="{{asset("admin/plugins/custom/formrepeater/formrepeater.bundle.js")}}"></script>
    <script src="{{asset("admin/js/custom/apps/ecommerce/catalog/save-product.js")}}"></script>
    <script src="{{asset("admin/js/widgets.bundle.js")}}"></script>
    <script src="{{asset("admin/js/custom/widgets.js")}}"></script>
    <script src="{{asset("admin/js/custom/apps/chat/chat.js")}}"></script>
    <script src="{{asset("admin/js/custom/utilities/modals/upgrade-plan.js")}}"></script>
    <script src="{{asset("admin/js/custom/utilities/modals/create-app.js")}}"></script>
    <script src="{{asset("admin/js/custom/utilities/modals/users-search.js")}}"></script>
@endpush
