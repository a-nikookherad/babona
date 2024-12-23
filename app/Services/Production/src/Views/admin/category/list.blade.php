@extends("admin.layouts.main")
@push("breadcrumb")
    <!--begin::آیتم-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <!--end::آیتم-->

    <!--begin::آیتم-->
    <li class="breadcrumb-item text-muted">
        <a href="{{route("production.categories.list")}}"
           class="text-muted text-hover-primary">لیست دسته بندی ها</a>
    </li>
    <!--end::آیتم-->
@endpush
@section("content")
    <div dir="rtl">
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
                                                                  fill="currentColor"></rect>
															<path
                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                fill="currentColor"></path>
														</svg>
													</span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-category-filter="search"
                               class="form-control form-control-solid w-250px ps-14" placeholder="جستجو دسته بندی">
                    </div>
                    <!--end::جستجو-->
                </div>
                <!--end::کارت title-->
                <!--begin::کارت toolbar-->
                <div class="card-toolbar">
                    <!--begin::Add customer-->
                    <a href="{{route("production.categories.create")}}" class="btn btn-primary">افزودن
                        دسته
                        بندی</a>
                    <!--end::Add customer-->
                </div>
                <!--end::کارت toolbar-->
            </div>
            <!--end::کارت header-->
            <!--begin::کارت body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <div id="kt_ecommerce_category_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                               id="kt_ecommerce_category_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label=""
                                    style="width: 29.8906px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        {{--<input class="form-check-input" type="checkbox" data-kt-check="true"
                                               data-kt-check-target="#kt_ecommerce_category_table .form-check-input"
                                               value="1">--}}
                                        #
                                    </div>
                                </th>
                                <th class="min-w-350px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table"
                                    rowspan="1" colspan="1" aria-label="دسته بندی: activate to sort column ascending"
                                    style="width: 591.047px;">دسته بندی
                                </th>
                                <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table"
                                    rowspan="1" colspan="1" aria-label="دسته بندی: activate to sort column ascending"
                                    style="width: 200.047px;">وضعیت
                                </th>
                                <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table"
                                    rowspan="1" colspan="1"
                                    aria-label="دسته بندی نوع: activate to sort column ascending"
                                    style="width: 200.219px;">دسته بندی والد
                                </th>
                                <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                    aria-label="عملیات"
                                    style="width: 108.594px;">عملیات
                                </th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->
                            @foreach($categories as $category)
                                <tr class="even">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::دسته بندی=-->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="{{route("production.categories.edit",["id"=>$category->id])}}"
                                               class="symbol symbol-50px">
                                                @php
                                                    if($category->thumbnail){
                                                        $thumbnail=$category->thumbnail;
                                                        $path=config("filesystems.public_storage")."/".$thumbnail->path."/".$thumbnail->full_name;
                                                    }else{
                                                        $path="admin/media/svg/files/blank-image.svg";
                                                    }
                                                @endphp
                                                <span class="symbol-label"
                                                      style="background-image:url({{asset($path)}});"></span>
                                            </a>
                                            <!--end::Thumbnail-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="{{route("production.categories.edit",["id"=>$category->id])}}"
                                                   class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                                   data-kt-ecommerce-category-filter="category_name">{{$category->fa_name}}</a>
                                                <!--end::Title-->
                                                <!--begin::توضیحات-->
                                                <div
                                                    class="text-muted fs-7 fw-bold">{{\Illuminate\Support\Str::limit($category->description,120)}}</div>
                                                <!--end::توضیحات-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::دسته بندی=-->
                                    <!--begin::نوع=-->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">{{$category->status}}</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::نوع=-->
                                    <!--begin::parent=-->
                                    <td>
                                        <!--begin::Badges-->
                                        <div
                                            class="badge badge-light-warning">{{$category->parent->fa_name??"..."}}</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::parent=-->
                                    <!--begin::عملیات=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"></path>
																</svg>
															</span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{route("production.categories.edit",["id"=>$category->id])}}"
                                                   class="menu-link px-3">
                                                    ویرایش
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <form
                                                action="{{route("production.categories.delete",["id"=>$category->id])}}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <div class="menu-item px-3">
                                                    <a href=""
                                                       class="menu-link px-3"
                                                       data-kt-ecommerce-category-filter="delete_row">
                                                        <button class="border-0 btn p-0" type="submit">
                                                            حذف
                                                        </button>
                                                    </a>
                                                </div>
                                            </form>
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
                    </div>
                    <div class="row">
                        <div
                            class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="dataTables_length" id="kt_ecommerce_category_table_length">
                                <label>
                                    <form action="{{route("production.categories.list")}}">
                                        <select name="per_page" onchange="this.form.submit()"
                                                aria-controls="kt_ecommerce_category_table"
                                                class="form-select form-select-sm form-select-solid">
                                            <option value="5" @if(request()->get("per_page")==5){{"selected"}}@endif>5
                                            </option>
                                            <option value="10" @if(request()->get("per_page")==10){{"selected"}}@endif>
                                                10
                                            </option>
                                            <option value="25" @if(request()->get("per_page")==25){{"selected"}}@endif>
                                                25
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
                                {{--<ul class="pagination">
                                    <li class="paginate_button page-item previous @if($categories->currentPage()==1) {{"disabled"}} @endif"
                                        id="kt_ecommerce_category_table_previous"><a
                                            href="{{$categories->previousPageUrl()}}"
                                            aria-controls="kt_ecommerce_category_table"
                                            data-dt-idx="0" tabindex="0"
                                            class="page-link"><i
                                                class="previous"></i></a>
                                    </li>

                                    @for($i=1;($categories->total()/$categories->perPage())>=$i;$i++)
                                        <li class="paginate_button page-item @if($categories->currentPage()==$i){{"active"}}@endif">
                                            <a href="{{$categories->url($i)}}"
                                               aria-controls="kt_ecommerce_category_table"
                                               data-dt-idx="{{$categories->currentPage()}}" tabindex="0"
                                               class="page-link">
                                                {{$i}}
                                            </a>
                                        </li>

                                    @endfor
                                    <li class="paginate_button page-item next @if($categories->currentPage()==$categories->lastPage()) {{"disabled"}} @endif"
                                        id="kt_ecommerce_category_table_next"><a
                                            href="{{$categories->nextPageUrl()}}"
                                            aria-controls="kt_ecommerce_category_table" data-dt-idx="3"
                                            tabindex="0" class="page-link"><i class="next"></i></a>
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::کارت body-->
        </div>
    </div>

@endsection
