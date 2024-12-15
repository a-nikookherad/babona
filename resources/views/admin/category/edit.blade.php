@extends("admin.layouts.main")

@section("content")
    <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
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
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <!--begin::نمایش existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media//stock/ecommerce/123.gif)"></div>
                        <!--end::نمایش existing avatar-->
                        <!--begin::Tags-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                            <!--begin::Icon-->
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--end::Icon-->
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
                    <div class="text-muted fs-7">تصویر کوچک دسته را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند</div>
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
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                    </div>
                    <!--begin::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_category_status_select">
                        <option></option>
                        <option value="published" selected="selected">منتشر شده</option>
                        <option value="scheduled">در انتظار</option>
                        <option value="unpublished">Unpublished</option>
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">وضعیت دسته را تنظیم کنید.</div>
                    <!--end::توضیحات-->
                    <!--begin::تاریخpicker-->
                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">انتخاب publishing date و time</label>
                        <input class="form-control" id="kt_ecommerce_add_category_status_datepicker" placeholder="انتخاب تاریخ & time" />
                    </div>
                    <!--end::تاریخpicker-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::وضعیت-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>فروشگاه قالب</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::انتخاب store template-->
                    <label for="kt_ecommerce_add_category_store_template" class="form-label">یک قالب فروشگاهی انتخاب کنید</label>
                    <!--end::انتخاب store template-->
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_category_store_template">
                        <option></option>
                        <option value="default" selected="selected">قالب پیش فرض</option>
                        <option value="electronics">الکترونیک</option>
                        <option value="office">اداری</option>
                        <option value="fashion">فشن</option>
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">اختصاص دادن یک الگو از موضوع فعلی شما برای تعریف نحوه نمایش دسته بندی محصولات.</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Template settings-->
        </div>
        <!--end::کناری column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
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
                        <label class="required form-label">دسته بندی نام</label>
                        <!--end::Tags-->
                        <!--begin::Input-->
                        <input type="text" name="category_name" class="form-control mb-2" placeholder="نام محصول" value="کفش" />
                        <!--end::Input-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">نام دسته مورد نیاز است و توصیه می شود منحصر به فرد باشد.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Tags-->
                        <label class="form-label">توضیحات</label>
                        <!--end::Tags-->
                        <!--begin::or-->
                        <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2"></div>
                        <!--end::or-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">برای مشاهده بهتر، یک توضیح برای دسته تنظیم کنید.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت header-->
            </div>
            <!--end::عمومی options-->
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
                        <div id="kt_ecommerce_add_category_meta_description" name="kt_ecommerce_add_category_meta_description" class="min-h-100px mb-2"></div>
                        <!--end::or-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">برای افزایش رتبه سئو، توضیحات متا تگ را برای دسته بندی تنظیم کنید.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Tags-->
                        <label class="form-label">کلمات کلیدی</label>
                        <!--end::Tags-->
                        <!--begin::or-->
                        <input id="kt_ecommerce_add_category_meta_keywords" name="kt_ecommerce_add_category_meta_keywords" class="form-control mb-2" />
                        <!--end::or-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">فهرستی از کلمات کلیدی را تنظیم کنید که مقوله مربوط به آن است. شهریور کلمات کلیدی را با اضافه کردن کاما مرتب کنید
                            <code>,</code>between each keyword.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت header-->
            </div>
            <!--end::Meta options-->
            <!--begin::Automation-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>اتوماسیون</h2>
                    </div>
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Tags-->
                        <label class="form-label mb-5">روش واگذاری محصولات</label>
                        <!--end::Tags-->
                        <!--begin::Methods-->
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="method" type="radio" value="0" id="kt_ecommerce_add_category_automation_0" />
                                <!--end::Input-->
                                <!--begin::Tags-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                    <div class="fw-bold text-gray-800">دستی</div>
                                    <div class="text-gray-600">با انتخاب دستی این دسته در حین ایجاد یا به روز رسانی محصول، محصول را یکی یکی به این دسته اضافه کنید.</div>
                                </label>
                                <!--end::Tags-->
                            </div>
                            <!--end::رادیو-->
                        </div>
                        <!--end::Input row-->
                        <div class='separator separator-dashed my-5'></div>
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="method" type="radio" value="1" id="kt_ecommerce_add_category_automation_1" checked='checked' />
                                <!--end::Input-->
                                <!--begin::Tags-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                    <div class="fw-bold text-gray-800">Automatic</div>
                                    <div class="text-gray-600">محصولات مطابق با شرایط زیر به طور خودکار به این دسته اختصاص داده می شود.</div>
                                </label>
                                <!--end::Tags-->
                            </div>
                            <!--end::رادیو-->
                        </div>
                        <!--end::Input row-->
                        <!--end::Methods-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mt-10" data-kt-ecommerce-catalog-add-category="auto-options">
                        <!--begin::Tags-->
                        <label class="form-label">شروط</label>
                        <!--end::Tags-->
                        <!--begin::Conditions-->
                        <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                            <span>محصولات باید مطابقت داشته باشند::</span>
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="conditions" value="" id="all_conditions" checked="checked" />
                                <label class="form-check-label" for="all_conditions">همه شروط</label>
                            </div>
                            <!--end::رادیو-->
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="conditions" value="" id="any_conditions" />
                                <label class="form-check-label" for="any_conditions">بدون شرط</label>
                            </div>
                            <!--end::رادیو-->
                        </div>
                        <!--end::Conditions-->
                        <!--begin::Repeater-->
                        <div id="kt_ecommerce_add_category_conditions">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="kt_ecommerce_add_category_conditions" class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                        <!--begin::انتخاب2-->
                                        <div class="w-100 w-md-200px">
                                            <select class="form-select" name="condition_type" data-placeholder="انتخاب " data-kt-ecommerce-catalog-add-category="condition_type">
                                                <option></option>
                                                <option value="title">عنوان محصول</option>
                                                <option value="tag" selected="selected">برچسب محصولات</option>
                                                <option value="price">قیمت محصول</option>
                                            </select>
                                        </div>
                                        <!--end::انتخاب2-->
                                        <!--begin::انتخاب2-->
                                        <div class="w-100 w-md-200px">
                                            <select class="form-select" name="condition_equals" data-placeholder="انتخاب " data-kt-ecommerce-catalog-add-category="condition_equals">
                                                <option></option>
                                                <option value="equal" selected="selected">برابر با</option>
                                                <option value="notequal">برابر نباشد با</option>
                                                <option value="greater">بزرگتر از</option>
                                                <option value="less">کوچکتر از</option>
                                                <option value="starts">شروع با</option>
                                                <option value="ends">تمام بشه با</option>
                                            </select>
                                        </div>
                                        <!--end::انتخاب2-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mw-100 w-200px" name="condition_label" placeholder="" />
                                        <!--end::Input-->
                                        <!--begin::Button-->
                                        <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                            <span class="svg-icon svg-icon-2">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																					<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																				</svg>
																			</span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group mt-5">
                                <!--begin::Button-->
                                <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                    <span class="svg-icon svg-icon-2">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->یک شرط دیگر اضافه کنید</button>
                                <!--end::Button-->
                            </div>
                            <!--end::Form group-->
                        </div>
                        <!--end::Repeater-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت header-->
            </div>
            <!--end::Automation-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">انصراف</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
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
