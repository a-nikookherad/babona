@extends("admin.layouts.main")

@section("content")
    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
        <!--begin::کناری column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>تصویر شاخص</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <!--begin::نمایش existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media//stock/ecommerce/78.gif)"></div>
                        <!--end::نمایش existing avatar-->
                        <!--begin::Tags-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Tags-->
                        <!--begin::انصراف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="انصراف avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                        <!--end::انصراف-->
                        <!--begin::حذف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف آواتار">
															<i class="bi bi-x fs-2"></i>
														</span>
                        <!--end::حذف-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">تصویر بندانگشتی محصول را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند</div>
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
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select">
                        <option></option>
                        <option value="published" selected="selected">منتشر شده</option>
                        <option value="ذخیره شده">ذخیره شده</option>
                        <option value="scheduled">در انتظار</option>
                        <option value="inactive">غیرفعال</option>
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">وضعیت محصول را تنظیم کنید.</div>
                    <!--end::توضیحات-->
                    <!--begin::تاریخpicker-->
                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">انتخاب publishing date و time</label>
                        <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="انتخاب تاریخ & time" />
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
                        <h2>محصولات جزییات</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <!--begin::Tags-->
                    <label class="form-label">دسته بندی ها</label>
                    <!--end::Tags-->
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2" data-control="select2" data-placeholder="انتخاب " data-allow-clear="true" multiple="multiple">
                        <option></option>
                        <option value="کامپیوترها">کامپیوترها</option>
                        <option value="ساعت">ساعت</option>
                        <option value="هدست">هدست</option>
                        <option value="کفش">کفش</option>
                        <option value="دوربین">دوربین</option>
                        <option value="پیراهن">پیراهن</option>
                        <option value="چراغ مطالعه">چراغ مطالعه</option>
                        <option value="کیف">کیف</option>
                        <option value="شراب ها">شراب ها</option>
                        <option value="Sوals">Sوals</option>
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7 mb-7">محصول را به یک دسته اضافه کنید.</div>
                    <!--end::توضیحات-->
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                        <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
															<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
                        <!--end::Svg Icon-->ساخت دسته بندی</a>
                    <!--end::Button-->
                    <!--begin::Input group-->
                    <!--begin::Tags-->
                    <label class="form-label d-block">برچسب ها</label>
                    <!--end::Tags-->
                    <!--begin::Input-->
                    <input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="new, trending, sale" />
                    <!--end::Input-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">افزودن برچسب محصول</div>
                    <!--end::توضیحات-->
                    <!--end::Input group-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::دسته بندی & tags-->
            <!--begin::کارت widget 6-->
            <div class="card card-flush">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::واحد پول-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::واحد پول-->
                            <!--begin::مقدار-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">2,420</span>
                            <!--end::مقدار-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
                                <!--end::Svg Icon-->2.6%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">میانگین فروش روزانه</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::کارت body-->
                <div class="card-body d-flex align-items-end px-0 pb-0">
                    <!--begin::Chart-->
                    <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::کارت widget 6-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
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
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_store_template">
                        <option></option>
                        <option value="default" selected="selected">قالب پیش فرض</option>
                        <option value="electronics">الکترونیک</option>
                        <option value="office">اداری</option>
                        <option value="fashion">فشن</option>
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">اختصاص دادن یک الگو از موضوع فعلی شما برای تعریف نحوه نمایش یک محصول واحد.</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Template settings-->
        </div>
        <!--end::کناری column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">عمومی</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">پیشرفته</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_reviews">نظرات</a>
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
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="required form-label">محصولات نام</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" name="product_name" class="form-control mb-2" placeholder="نام محصول" value="محصول نمونه" />
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">نام محصول مورد نیاز است و توصیه می شود منحصر به فرد باشد.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Tags-->
                                    <label class="form-label">توضیحات</label>
                                    <!--end::Tags-->
                                    <!--begin::or-->
                                    <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>
                                    <!--end::or-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">برای دید بهتر، توضیحاتی را برای محصول تنظیم کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::کارت header-->
                        </div>
                        <!--end::عمومی options-->
                        <!--begin::Media-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>رسانه</h2>
                                </div>
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row mb-2">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="kt_ecommerce_add_product_media">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">پرونده ها را اینجا رها کنید یا برای بارگذاری کلیک کنید.</h3>
                                                <span class="fs-7 fw-semibold text-gray-400">اپلود فایل بیش از 10 تا</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::توضیحات-->
                                <div class="text-muted fs-7">گالری رسانه محصول را تنظیم کنید.</div>
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
                                    <input type="text" name="price" class="form-control mb-2" placeholder="قیمت محصول" value="199.99" />
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
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="انتخاب a discount type that will be applied to this product"></i></label>
                                    <!--End::Tags-->
                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::رادیو-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="1" />
																				</span>
                                                <!--end::رادیو-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">بدون تخفیف</span>
																				</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::رادیو-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="2" checked="checked" />
																				</span>
                                                <!--end::رادیو-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">درصدی</span>
																				</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::رادیو-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="3" />
																				</span>
                                                <!--end::رادیو-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">قیمت ثابت</span>
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
                                <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                    <!--begin::Tags-->
                                    <label class="form-label">درصد تخفیف را تنظیم کنید</label>
                                    <!--end::Tags-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center mb-5">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                            <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                        </div>
                                        <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                    </div>
                                    <!--end::Slider-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">درصد تخفیف را برای اعمال این محصول تعیین کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                    <!--begin::Tags-->
                                    <label class="form-label">ثابت قیمت با تخفیف</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="قیمت تخفیف" />
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">قیمت محصول با تخفیف را تعیین کنید. محصول با قیمت ثابت تعیین شده کاهش می یابد</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Tax-->
                                <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Tags-->
                                        <label class="required form-label">کلاس مالیات</label>
                                        <!--end::Tags-->
                                        <!--begin::انتخاب2-->
                                        <select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="انتخاب ">
                                            <option></option>
                                            <option value="0">Tax رایگان</option>
                                            <option value="1" selected="selected">Taxable Goods</option>
                                            <option value="2">دانلودable محصولات</option>
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
                                        <input type="text" class="form-control mb-2" value="35" />
                                        <!--end::Input-->
                                        <!--begin::توضیحات-->
                                        <div class="text-muted fs-7">مالیات بر ارزش افزوده محصول را تنظیم کنید.</div>
                                        <!--end::توضیحات-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
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
                                    <label class="required form-label">کد محصول</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" name="sku" class="form-control mb-2" placeholder="کد محصول را وارد کنید" value="011985001" />
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">کد محصول را وارد کنید</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="required form-label">بارکد</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" name="sku" class="form-control mb-2" placeholder="شماره بارکد" value="45874521458" />
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">شماره بارکد را وارد کنید</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="required form-label">تعداد</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <div class="d-flex gap-3">
                                        <input type="number" name="shelf" class="form-control mb-2" placeholder="روی طبقه" value="24" />
                                        <input type="number" name="warehouse" class="form-control mb-2" placeholder="در انبار" />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">مقدار محصول را وارد کنید</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Tags-->
                                    <label class="form-label">همه چگونه برگشت سفارش می دهد</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <label class="form-check-label">بله</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">به مشتریان اجازه دهید محصولاتی را خریداری کنند که موجودی آنها تمام شده است.</div>
                                    <!--end::توضیحات-->
                                </div>
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
                                    <label class="form-label">افزودن محصول متغیرها</label>
                                    <!--end::Tags-->
                                    <!--begin::Repeater-->
                                    <div id="kt_ecommerce_add_product_options">
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                    <!--begin::انتخاب2-->
                                                    <div class="w-100 w-md-200px">
                                                        <select class="form-select" name="product_option" data-placeholder="یک متغییر انتخاب کنبد" data-kt-ecommerce-catalog-add-product="product_option">
                                                            <option></option>
                                                            <option value="color">Color</option>
                                                            <option value="size">Size</option>
                                                            <option value="material">Material</option>
                                                            <option value="style">Style</option>
                                                        </select>
                                                    </div>
                                                    <!--end::انتخاب2-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="متغیر" />
                                                    <!--end::Input-->
                                                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                                        <span class="svg-icon svg-icon-1">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																								<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																							</svg>
																						</span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group mt-5">
                                            <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																					<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																				</svg>
																			</span>
                                                <!--end::Svg Icon-->Add another variation</button>
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
                                        <input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" checked="checked" />
                                        <label class="form-check-label">این محصول فیزیکی می باشد</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">تنظیم کنید که آیا محصول یک کالای فیزیکی یا دیجیتالی است. محصولات فیزیکی ممکن است نیاز به حمل و نقل داشته باشند.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::حمل دریایی form-->
                                <div id="kt_ecommerce_add_product_shipping" class="mt-10">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Tags-->
                                        <label class="form-label">وزن</label>
                                        <!--end::Tags-->
                                        <!--begin::or-->
                                        <input type="text" name="weight" class="form-control mb-2" placeholder="محصولات weight" value="4.3" />
                                        <!--end::or-->
                                        <!--begin::توضیحات-->
                                        <div class="text-muted fs-7">وزن محصول را بر حسب کیلوگرم (کیلوگرم) تنظیم کنید.</div>
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
                                            <input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="12" />
                                            <input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="4" />
                                            <input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="8.5" />
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::توضیحات-->
                                        <div class="text-muted fs-7">ابعاد محصول را به سانتی متر (سانتی متر) وارد کنید.</div>
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
                                    <label class="form-label">برچسب متا تایتل</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" name="meta_title" placeholder="نام متا تگ" />
                                    <!--end::Input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">یک عنوان متا تگ تنظیم کنید. توصیه می شود کلمات کلیدی ساده و دقیق باشند.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Tags-->
                                    <label class="form-label">توضیحات متا تگ</label>
                                    <!--end::Tags-->
                                    <!--begin::or-->
                                    <div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
                                    <!--end::or-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">برای افزایش رتبه سئو، توضیحات متا تگ را برای محصول تنظیم کنید.</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Tags-->
                                    <label class="form-label">کلمات کلیدی</label>
                                    <!--end::Tags-->
                                    <!--begin::or-->
                                    <input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
                                    <!--end::or-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">لیستی از کلمات کلیدی که محصول به آنها مرتبط است تنظیم کنید. شهریور کلمات کلیدی را با اضافه کردن کاما مرتب کنید
                                        <code>,</code>between each keyword.</div>
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
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_reviews" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::نظرات-->
                        <div class="card card-flush py-4">
                            <!--begin::کارت header-->
                            <div class="card-header">
                                <!--begin::کارت title-->
                                <div class="card-title">
                                    <h2>مشتری نظرات</h2>
                                </div>
                                <!--end::کارت title-->
                                <!--begin::کارت toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::رتبه بندی label-->
                                    <span class="fw-bold me-5">رتبه بندی:</span>
                                    <!--end::رتبه بندی label-->
                                    <!--begin::Overall rating-->
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																				</svg>
																			</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																				</svg>
																			</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																				</svg>
																			</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label checked">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																				</svg>
																			</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="rating-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																				</svg>
																			</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Overall rating-->
                                </div>
                                <!--end::کارت toolbar-->
                            </div>
                            <!--end::کارت header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table table-row-dashed fs-6 gy-5 my-0" id="kt_ecommerce_add_product_reviews">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_add_product_reviews .form-check-input" value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-125px">رتبه بندی</th>
                                        <th class="min-w-175px">مشتری</th>
                                        <th class="min-w-175px">نظر</th>
                                        <th class="min-w-100px text-end fs-7">تاریخ</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <div class="symbol-label bg-light-danger">
                                                        <span class="text-danger">M</span>
                                                    </div>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">میلاد مرادی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">من این طرح را دوست دارم</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">امروز</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-1.jpg)"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">جلالی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">محصول خوب برای خارج از منزل یا داخل خانه</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">day ago</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-4">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-5.jpg)"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">محسن برومند</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">کیفیت فوق العاده با مواد عالی استفاده شده، اما می تواند راحت تر باشد</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">11:20 PM</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-25.jpg)"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">احمد موسوی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">این بهترین محصولی است که تا به حال استفاده کرده ام.</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">2 روز قبل</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-3">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <div class="symbol-label bg-light-warning">
                                                        <span class="text-warning">C</span>
                                                    </div>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">میکائیل کرمانی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">I thought it was just average, I prefer other brوs</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">تیر 25</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-9.jpg)"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">محمد رصایی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">زیبا ساخته شده است. کاملا ارزشش رو داشت.</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">تیر 24</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-4">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <div class="symbol-label bg-light-danger">
                                                        <span class="text-danger">O</span>
                                                    </div>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">امید وحیدی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">ارزش عالی برای پول حمل دریایی می تواند سریعتر باشد.</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">تیر 13</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <div class="symbol-label bg-light-primary">
                                                        <span class="text-primary">N</span>
                                                    </div>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">محسن برومند</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">کیفیت عالی، من آن را برای تولد پسرم گرفتم و او آن را دوست داشت!</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">اردیبهشت 25</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-23.jpg)"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">علی کاربر</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">من این را برای کریسمس سال گذشته گرفتم، و هنوز هم بهترین محصولی است که تا به حال استفاده کرده ام!</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">فروردین 15</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <div class="symbol-label bg-light-danger">
                                                        <span class="text-danger">E</span>
                                                    </div>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">الهام بارانی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">Was skeptical at first, but after using it for 3 months, I'm hooked! Will definately buy another!</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">فروردین 3</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-4">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-12.jpg)"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">آنا کوهی</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">محصول عالی، حیف که من فروش را از دست دادم.</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">اسفند 17</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <div class="symbol-label bg-light-info">
                                                        <span class="text-info">A</span>
                                                    </div>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">رابرت دو</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">این را در فروش گرفتم! تصمیم همیشه!</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">اسفند 12</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                            <!--end::Checkbox-->
                                        </td>
                                        <td data-order="rating-5">
                                            <!--begin::rating-->
                                            <div class="rating">
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <div class="rating-label checked">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
																							</svg>
																						</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::rating-->
                                        </td>
                                        <td>
                                            <a href="../../demo1/dist/apps/inbox/reply.html" class="d-flex text-dark text-gray-800 text-hover-primary">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-13.jpg)"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::نام-->
                                                <span class="fw-bold">جواد مولای</span>
                                                <!--end::نام-->
                                            </a>
                                        </td>
                                        <td class="text-gray-600 fw-bold">فعال است! خرید قالب! کلا ارزشش رو داره</td>
                                        <td class="text-end">
                                            <span class="fw-semibold text-muted">اسفند 11</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::کارت body-->
                        </div>
                        <!--end::نظرات-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">انصراف</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                    <span class="indicator-label">ذخیره تغییرات</span>
                    <span class="indicator-progress">لطفا صبر کنید...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>

@endsection
