@extends("admin.layouts.main")

@section("content")
    <div class="card card-flush">
        <!--begin::کارت header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::کارت title-->
            <div class="card-title">
                <!--begin::جستجو-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                                  height="2" rx="1"
                                                                  transform="rotate(45 17.0365 15.1223)"
                                                                  fill="currentColor"/>
															<path
                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-ecommerce-product-filter="search"
                           class="form-control form-control-solid w-250px ps-14" placeholder="جستجو محصولات"/>
                </div>
                <!--end::جستجو-->
            </div>
            <!--end::کارت title-->
            <!--begin::کارت toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <!--begin::انتخاب2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                            data-placeholder="وضعیت" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">همه</option>
                        <option value="published">منتشر شده</option>
                        <option value="scheduled">در انتظار</option>
                        <option value="inactive">غیرفعال</option>
                    </select>
                    <!--end::انتخاب2-->
                </div>
                <!--begin::Add product-->
                <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">افزودن
                    محصول</a>
                <!--end::Add product-->
            </div>
            <!--end::کارت toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_محصولات_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                   data-kt-check-target="#kt_ecommerce_محصولات_table .form-check-input" value="1"/>
                        </div>
                    </th>
                    <th class="min-w-200px">محصولات</th>
                    <th class="text-end min-w-100px">SKU</th>
                    <th class="text-end min-w-70px">تعداد</th>
                    <th class="text-end min-w-100px">قیمت</th>
                    <th class="text-end min-w-100px">رتبه بندی</th>
                    <th class="text-end min-w-100px">وضعیت</th>
                    <th class="text-end min-w-70px">عملیات</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 1</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02246001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="30">
                        <span class="fw-bold ms-3">30</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">38</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/2.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 2</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01298005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="4">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">4</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">129</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/3.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 3</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03439006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="34">
                        <span class="fw-bold ms-3">34</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">81</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/4.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 4</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01592003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="36">
                        <span class="fw-bold ms-3">36</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">228</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/5.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 5</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04185001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="0">
                        <span class="badge badge-light-danger">فروخته شده</span>
                        <span class="fw-bold text-danger ms-3">0</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">202</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/6.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 6</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04328001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="25">
                        <span class="fw-bold ms-3">25</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">256</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/7.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 7</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01339006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="35">
                        <span class="fw-bold ms-3">35</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">43</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/8.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 8</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03837003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="19">
                        <span class="fw-bold ms-3">19</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">170</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/9.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 9</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02791003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="20">
                        <span class="fw-bold ms-3">20</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">163</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/10.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 10</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01911004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="36">
                        <span class="fw-bold ms-3">36</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">171</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/11.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 11</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02972001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="40">
                        <span class="fw-bold ms-3">40</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">243</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/12.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 12</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01382008</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="19">
                        <span class="fw-bold ms-3">19</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">179</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/13.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 13</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04394002</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="20">
                        <span class="fw-bold ms-3">20</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">57</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/14.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 14</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04923004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="17">
                        <span class="fw-bold ms-3">17</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">230</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/15.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 15</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04851009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="42">
                        <span class="fw-bold ms-3">42</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">214</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/16.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 16</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02443001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="3">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">3</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">138</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/17.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 17</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03841006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="4">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">4</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">244</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/18.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 18</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02755005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="31">
                        <span class="fw-bold ms-3">31</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">80</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/19.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 19</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03215007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="39">
                        <span class="fw-bold ms-3">39</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">251</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/20.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 20</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02580009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="31">
                        <span class="fw-bold ms-3">31</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">292</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/21.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 21</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04448002</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="41">
                        <span class="fw-bold ms-3">41</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">201</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/22.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 22</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02612007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="16">
                        <span class="fw-bold ms-3">16</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">40</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/23.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 23</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01314009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="12">
                        <span class="fw-bold ms-3">12</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">22</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/24.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 24</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02410006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="50">
                        <span class="fw-bold ms-3">50</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">100</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/25.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 25</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04394007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="13">
                        <span class="fw-bold ms-3">13</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">262</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/26.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 26</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01760009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="41">
                        <span class="fw-bold ms-3">41</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">284</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/27.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 27</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02961009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="31">
                        <span class="fw-bold ms-3">31</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">242</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/28.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 28</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02246007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="30">
                        <span class="fw-bold ms-3">30</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">226</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/29.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 29</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03265009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="24">
                        <span class="fw-bold ms-3">24</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">116</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/30.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 30</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03665007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="33">
                        <span class="fw-bold ms-3">33</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">80</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/31.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 31</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01475007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="23">
                        <span class="fw-bold ms-3">23</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">209</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/32.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 32</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02339009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="29">
                        <span class="fw-bold ms-3">29</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">45</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/33.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 33</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04837005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="1">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">1</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">154</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/34.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 34</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02485008</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="5">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">5</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">108</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/35.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 35</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01660009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="24">
                        <span class="fw-bold ms-3">24</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">184</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/36.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 36</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02449009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="12">
                        <span class="fw-bold ms-3">12</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">49</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/37.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 37</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01413004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="27">
                        <span class="fw-bold ms-3">27</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">210</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/38.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 38</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03194001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="31">
                        <span class="fw-bold ms-3">31</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">208</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/39.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 39</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03673009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="39">
                        <span class="fw-bold ms-3">39</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">195</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/40.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 40</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01447003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="19">
                        <span class="fw-bold ms-3">19</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">287</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/41.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 41</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01482005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="6">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">6</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">246</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/42.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 42</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01340004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="46">
                        <span class="fw-bold ms-3">46</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">248</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="منتشر شده">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">منتشر شده</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/43.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 43</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02132008</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="10">
                        <span class="fw-bold ms-3">10</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">19</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/44.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 44</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04218002</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="7">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">7</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">223</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/45.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 45</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04101006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="14">
                        <span class="fw-bold ms-3">14</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">93</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/46.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 46</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">03227005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="42">
                        <span class="fw-bold ms-3">42</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">173</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/47.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 47</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02641003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="41">
                        <span class="fw-bold ms-3">41</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">289</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/48.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 48</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">01407008</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="20">
                        <span class="fw-bold ms-3">20</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">241</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="در انتظار">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">در انتظار</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/49.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 49</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">02540007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="1">
                        <span class="badge badge-light-warning">موجودی کم</span>
                        <span class="fw-bold text-warning ms-3">1</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">206</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1"/>
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::دسته بندی=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                               class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url(assets/media//stock/ecommerce/50.gif);"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">محصولات 50</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::دسته بندی=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bold">04642007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::تعداد=-->
                    <td class="text-end pe-0" data-order="46">
                        <span class="fw-bold ms-3">46</span>
                    </td>
                    <!--end::تعداد=-->
                    <!--begin::قیمت=-->
                    <td class="text-end pe-0">140</td>
                    <!--end::قیمت=-->
                    <!--begin::rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label checked">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                            <div class="rating-label">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                <span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
																			<path
                                                                                d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                                                fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                    </td>
                    <!--end::rating-->
                    <!--begin::وضعیت=-->
                    <td class="text-end pe-0" data-order="غیرفعال">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">غیرفعال</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::وضعیت=-->
                    <!--begin::عملیات=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                           data-kt-menu-placement="bottom-end">عملیات
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                            <!--end::Svg Icon--></a>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                   class="menu-link px-3"></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::عملیات=-->
                </tr>
                <!--end::Table row-->
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::کارت body-->
    </div>

@endsection
