@props([
    "name"=>"name",
    "label"=>"default",
    "required"=>0,
])

<!--begin::Input group-->
<div class="mb-10 fv-row">
    <!--begin::Tags-->
    <label class="{{$required?"required":""}} form-label">{{$label}}</label>
    <!--end::Tags-->
    <!--begin::Input-->
    <input type="text" name="{{$name}}" {{$required?"required":""}} class="form-control mb-2 @error($name) is-invalid @enderror"
           placeholder="{{$label}}" value=""/>
    <!--end::Input-->
@if ($slot->isNotEmpty())
    <!--begin::توضیحات-->
        <div class="text-muted fs-7">
            {{$slot}}
        </div>
        <!--end::توضیحات-->
@endif
<!--end::Input group-->
    @error($name)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

