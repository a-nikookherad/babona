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
@endpush
@section("content")
    @php
        $statusMap=[
  "waiting"=>"درانتظار",
  "published"=>"منتشرشده",
  "archive"=>"غیرفعال",
];
    @endphp
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
                    <form action="{{route("production.products.list")}}">
                        <!--end::Svg Icon-->
                        <input type="text" name="filter[search]" data-kt-ecommerce-product-filter="search"
                               class="form-control form-control-solid w-250px ps-14" placeholder="جستجو محصولات"/>
                    </form>
                </div>
                <!--end::جستجو-->
            </div>
            <!--end::کارت title-->
            <!--begin::کارت toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <form action="{{route("production.products.list")}}">
                        <!--begin::انتخاب2-->
                        <select name="filter[status]" onchange="this.form.submit()"
                                class="form-select form-select-solid"
                                data-control="select2" data-hide-search="true"
                                {{--data-placeholder="وضعیت"--}} data-kt-ecommerce-product-filter="status">
                            <option>همه</option>
                            <option value="published">منتشر شده</option>
                            <option value="waiting">در انتظار</option>
                            <option value="archive">غیرفعال</option>
                        </select>
                        <!--end::انتخاب2-->
                    </form>
                </div>
                <!--begin::Add product-->
                <a href="{{route("production.products.create")}}" class="btn btn-primary">افزودن
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
                    {{--                    <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                       data-kt-check-target="#kt_ecommerce_محصولات_table .form-check-input" value="1"/>
                                            </div>
                                        </th>--}}
                    <th class="w-10px pe-2">#</th>
                    <th class="min-w-200px">محصولات</th>
                    <th class="text-end min-w-100px">کد</th>
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
                @foreach($products as $product)
                    <tr>
                        <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                {{--                            <input class="form-check-input" type="checkbox" value="1"/>--}}
                                {{$product->id}}
                            </div>
                        </td>
                        <!--end::Checkbox-->
                        <!--begin::دسته بندی=-->
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="{{route("production.products.edit",["id"=>$product->id])}}"
                                   class="symbol symbol-50px">
                                    @php
                                        $thumbnail='assets/media/svg/files/blank-image.svg';
                                        if ($product->thumbnail){
                                            $thumbnail=$product->thumbnail;
                                            $thumbnail=$thumbnail->relative_path.DIRECTORY_SEPARATOR.$thumbnail->file_name.".".$thumbnail->extension;

                                        }
                                    @endphp
                                    <span class="symbol-label"
                                          style="background-image:url({{asset($thumbnail)}});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="{{route("production.products.edit",["id"=>$product->id])}}"
                                       class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                       data-kt-ecommerce-product-filter="product_name">{{$product->fa_name??""}}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <!--end::دسته بندی=-->
                        <!--begin::SKU=-->
                        <td class="text-end pe-0">
                            <span class="fw-bold">{{$product->code}}</span>
                        </td>
                        <!--end::SKU=-->
                        <!--begin::تعداد=-->
                        <td class="text-end pe-0" data-order="30">
                            @php
                                $productQuantity=0;
                                    foreach ($product->storehouses as $storehouse) {
                                        $productQuantity+=$storehouse->quantity;
                                    }
                            @endphp
                            <span class="fw-bold ms-3">{{$productQuantity}}</span>
                        </td>
                        <!--end::تعداد=-->
                        <!--begin::قیمت=-->
                        <td class="text-end pe-0">
                            @php
                                $productPrice=0;
                                    foreach ($product->prices as $price) {
                                        $productPrice+=$price->price;
                                    }
                                    \Illuminate\Support\Number::format($price);
                            @endphp
                        </td>
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
                        <td class="text-end pe-0"
                            data-order="{{$product->status?$statusMap[$product->status]:"تایین نشده"}}">
                            <!--begin::Badges-->
                            <div
                                class="badge badge-light-danger">{{$product->status?$statusMap[$product->status]:"تایین نشده"}}</div>
                            <!--end::Badges-->
                        </td>
                        <!--end::وضعیت=-->
                        <!--begin::عملیات=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                               data-kt-menu-trigger="click"
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
                                    <a href="{{route("production.products.edit",["id"=>$product->id])}}"
                                       class="menu-link px-3">
                                        ویرایش
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{route("production.categories.delete",["id"=>$product->id])}}"
                                       class="menu-link px-3"
                                       data-kt-ecommerce-product-filter="delete_row">حذف</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::عملیات=-->
                    </tr>
                @endforeach
                <!--end::Table row-->

                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::کارت body-->
        <div class="row">
            <div
                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                <div class="dataTables_length" id="kt_ecommerce_category_table_length">
                    <label>
                        <form action="{{route("production.products.list")}}">
                            <select name="per_page" onchange="this.form.submit()"
                                    aria-controls="kt_ecommerce_category_table"
                                    class="form-select form-select-sm form-select-solid">
                                <option value="10" @if(request()->get("per_page")==10){{"selected"}}@endif>
                                    10
                                </option>
                                <option value="25" @if(request()->get("per_page")==25){{"selected"}}@endif>
                                    25
                                </option>
                                <option value="50" @if(request()->get("per_page")==50){{"selected"}}@endif>
                                    50
                                </option>
                            </select>
                        </form>

                    </label>
                </div>
            </div>
            <div
                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                <div class="dataTables_paginate paging_simple_numbers"
                     id="kt_ecommerce_category_table_paginate">
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
