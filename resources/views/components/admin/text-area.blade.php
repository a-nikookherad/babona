@props([
    "name"=>"description",
    "label"=>"توضیحات"
])

<!--begin::Input group-->
<div>

    <!--begin::Tags-->
    <label class="form-label">{{$label}}</label>
    <!--end::Tags-->
    <!--begin::or-->
    <textarea id="add_product_description" name="{{$name}}" class="w-100" rows="6">
    </textarea>
    <!--end::or-->

@if($slot->isNotEmpty())
    <!--begin::توضیحات-->
        <div class="text-muted fs-7">
            {{$slot}}
        </div>
        <!--end::توضیحات-->
    @endif


    @error($name)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<!--end::Input group-->
@push("manual_scripts")
    <script>
        tinymce.init({
            selector: '#add_product_description',
            toolbar: true,
            menubar: false,
            skin: 'oxide-dark',
        });
    </script>
@endpush
