@props([
    "name",
    "label",
])
<!--begin::Media-->
<div class="card card-flush py-4">
    <!--begin::کارت header-->
    <div class="card-header">
        <div class="card-title">
            <h2>{{$label}}</h2>
        </div>
    </div>
    <!--end::کارت header-->
    <!--begin::کارت body-->
    <div class="card-body pt-0">
        <!--begin::Input group-->
        <div class="fv-row mb-2">

            <!--begin::Dropzone-->
            {{--            <div class="dropzone" id="kt_ecommerce_add_product_options">--}}
            <div class="dropzone" id="{{$name}}">
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
                            class="fs-7 fw-semibold text-gray-400">اپلود فایل تا 5 عدد</span>
                    </div>
                    <!--end::Info-->
                </div>
            </div>
            <!--end::Dropzone-->

        </div>
        <!--end::Input group-->
    @if($slot->isNotEmpty())
        <!--begin::توضیحات-->
            <div class="text-muted fs-7"></div>
            <!--end::توضیحات-->
        @endif
    </div>
    <!--end::کارت header-->

    @error($name)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<!--end::Media-->

