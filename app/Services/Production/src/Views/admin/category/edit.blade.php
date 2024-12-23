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

    <!--begin::آیتم-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <!--end::آیتم-->

    <!--begin::آیتم-->
    <li class="breadcrumb-item text-muted">
        <a href="{{route("production.categories.edit",["id"=>$category->id])}}"
           class="text-muted text-hover-primary">ویرایش دسته بندی</a>
    </li>
    <!--end::آیتم-->
@endpush

@section("content")
    <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
          data-kt-redirect="{{route("production.categories.list")}}"
          action="{{route("production.categories.update",["id"=>$category])}}"
          enctype="multipart/form-data" method="post">
    @csrf
    @method('PUT')
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
                    <!--begin::Image input placeholder-->
                    @php
                        $path="admin/media/svg/files/blank-image.svg";
                            if($category->thumbnail){
                                $path=$category->thumbnail->relative_path."/".$category->thumbnail->file_name.".".$category->thumbnail->extension;
                            }
                    @endphp
                    <style>.image-input-placeholder {
                            background-image: url({{asset($path)}});
                        }

                        [data-theme= "dark" ] .image-input-placeholder {
                            background-image: url({{asset("admin/media/svg/files/blank-image-dark.svg")}});
                        }</style>
                    <!--end::Image input placeholder-->
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                         data-kt-image-input="true">
                        <!--begin::نمایش existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::نمایش existing avatar-->
                        <!--begin::Tags-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                               data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                            <!--begin::Icon-->
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--end::Icon-->
                            <!--begin::Inputs-->
                            <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg"/>
                            <input type="hidden" name="thumbnail_remove"/>
                            <!--end::Inputs-->
                        </label>
                        <!--end::Tags-->
                        <!--begin::انصراف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="انصراف آواتار">
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
                    <div class="text-muted fs-7">تصویر کوچک دسته را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و
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
                        <div class="rounded-circle bg-success w-15px h-15px"
                             id="kt_ecommerce_add_category_status"></div>
                    </div>
                    <!--begin::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2" name="status" required="required" data-control="select2"
                            data-hide-search="true"
                            data-placeholder="انتخاب " id="kt_ecommerce_add_category_status_select">
                        <option></option>
                        <option value="published" @if($category->status=="published") {{"selected"}} @endif>منتشر شده
                        </option>
                        <option value="waiting" @if($category->status=="waiting") {{"selected"}} @endif>در انتظار
                        </option>
                        <option value="archive" @if($category->status=="archive") {{"selected"}} @endif>آرشیو</option>
                    </select>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">وضعیت دسته را تنظیم کنید.</div>
                    <!--end::توضیحات-->
                    <!--begin::تاریخpicker-->
                {{--           <div class="d-none mt-10">
                               <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">انتخاب publishing
                                   date و time</label>
                               <input class="form-control" id="kt_ecommerce_add_category_status_datepicker"
                                      placeholder="انتخاب تاریخ & time"/>
                           </div>--}}
                <!--end::تاریخpicker-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::وضعیت-->

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
                        <label class="required form-label">نامک دسته بندی</label>
                        <!--end::Tags-->
                        <!--begin::Input-->
                        <input type="text" name="slug" class="form-control mb-2" placeholder="نامک دسته"
                               required="required"
                               value="{{$category->slug}}"/>
                        <!--end::Input-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">نام دسته مورد نیاز با حروف لاتین است.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Tags-->
                        <label class="required form-label">نام دسته بندی</label>
                        <!--end::Tags-->
                        <!--begin::Input-->
                        <input type="text" name="fa_name" class="form-control mb-2" placeholder="نام محصول"
                               value="{{$category->fa_name}}"/>
                        <!--end::Input-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">نام دسته مورد نیاز است و توصیه می شود منحصر به فرد باشد.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::کارت body-->
                    <div class="mb-10 fv-row">
                        <!--begin::Tags-->
                        <label class="required form-label">دسته بندی والد</label>
                        <!--end::Tags-->

                        <!--begin::Input-->
                        <select class="form-select " name="parent_id" data-control="select2" data-hide-search="false"
                            {{-- data-placeholder="انتخاب کنید"--}}>
                            <option value="">بدون انتخاب</option>
                            @foreach($categories as $cat)
                                @if(!$cat["fa_name"])
                                    @continue
                                @endif
                                <option
                                    value="{{$cat["id"]}}" @if($cat["id"]==$category->parent_id){{"selected"}}@endif>{{$cat["fa_name"]}}</option>
                            @endforeach
                        </select>
                        <!--end::Input-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">اگر این دسته زیر مجموعه است لطفا نام دسته والد را انتخاب کنید.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::کارت body-->

                    <!--begin::Input group-->
                    <div>
                        <!--begin::Tags-->
                        <label class="form-label">توضیحات</label>
                        <!--end::Tags-->
                        <!--begin::or-->
                        <textarea name="description" id="category_description" class="w-100"
                                  rows="6">{{$category->description}}</textarea>
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

            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{route("production.categories.list")}}" id="kt_ecommerce_add_product_cancel"
                   class="btn btn-light me-5">انصراف</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
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
@endsection
