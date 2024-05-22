@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading border bottom">
                    <h4 class="card-title">{{ $slider->id ? 'Edit SLider' : 'Create Slider' }}</h4>
                </div>
                <div class="card-block">
                    <div class="mrg-top-40">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <form action="{{ route('admin.sliders.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $slider->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" name="title"
                                                    value="{{ $slider->title ?? old('title') }}" class="form-control"
                                                    placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Type:</label>
                                            <select id="selectize-dropdown" name="type">
                                                <option value="" disabled>Select Type...</option>
                                                <option value="{{ mainSlider() }}"
                                                    {{ $slider->type == mainSlider() ? 'selected' : '' }}>
                                                    {{ mainSlider() }}</option>
                                                <option value="{{ productBanner() }}"
                                                    {{ $slider->type == productBanner() ? 'selected' : '' }}>
                                                    {{ productBanner() }}</option>
                                                <option value="{{ ContactPageBanner() }}"
                                                    {{ $slider->type == ContactPageBanner() ? 'selected' : '' }}>
                                                    {{ ContactPageBanner() }}</option>
                                                <option value="{{ AboutUsPageBanner() }}"
                                                    {{ $slider->type == AboutUsPageBanner() ? 'selected' : '' }}>
                                                    {{ AboutUsPageBanner() }}</option>
                                                <option value="{{ InvestorRelationsPageBanner() }}"
                                                    {{ $slider->type == InvestorRelationsPageBanner() ? 'selected' : '' }}>
                                                    {{ InvestorRelationsPageBanner() }}</option>
                                                <option value="{{ CareerPageBanner() }}"
                                                    {{ $slider->type == CareerPageBanner() ? 'selected' : '' }}>
                                                    {{ CareerPageBanner() }}</option>
                                                <option value="{{ ProductPageBanner() }}"
                                                    {{ $slider->type == ProductPageBanner() ? 'selected' : '' }}>
                                                    {{ ProductPageBanner() }}</option>
                                                <option value="{{ FalakBanner() }}"
                                                    {{ $slider->type == FalakBanner() ? 'selected' : '' }}>
                                                    {{ FalakBanner() }}</option>
                                                <option value="{{ BasmatiRiceBanner() }}"
                                                    {{ $slider->type == BasmatiRiceBanner() ? 'selected' : '' }}>
                                                    {{ BasmatiRiceBanner() }}</option>
                                                <option value="{{ NonBasmatiRiceBanner() }}"
                                                    {{ $slider->type == NonBasmatiRiceBanner() ? 'selected' : '' }}>
                                                    {{ NonBasmatiRiceBanner() }}</option>
                                                <option value="{{ OrganicRiceBanner() }}"
                                                    {{ $slider->type == OrganicRiceBanner() ? 'selected' : '' }}>
                                                    {{ OrganicRiceBanner() }}</option>
                                                <option value="{{ RiceSyrupBanner() }}"
                                                    {{ $slider->type == RiceSyrupBanner() ? 'selected' : '' }}>
                                                    {{ RiceSyrupBanner() }}</option>
                                                <option value="{{ RiceProtienBanner() }}"
                                                    {{ $slider->type == RiceProtienBanner() ? 'selected' : '' }}>
                                                    {{ RiceProtienBanner() }}</option>
                                                <option value="{{ SolidBanner() }}"
                                                    {{ $slider->type == SolidBanner() ? 'selected' : '' }}>
                                                    {{ SolidBanner() }}</option>

                                                    <option value="{{ DextroseMonohydrateBanner() }}"
                                                    {{ $slider->type == DextroseMonohydrateBanner() ? 'selected' : '' }}>
                                                    {{ DextroseMonohydrateBanner() }}</option>
                                                <option value="{{ OtherLeadingBrandBanner() }}"
                                                    {{ $slider->type == OtherLeadingBrandBanner() ? 'selected' : '' }}>
                                                    {{ OtherLeadingBrandBanner() }}</option>
                                                <option value="{{ PrivateLabellingBanner() }}"
                                                    {{ $slider->type == PrivateLabellingBanner() ? 'selected' : '' }}>
                                                    {{ PrivateLabellingBanner() }}</option>
                                                <option value="{{ SustainabilityPageBanner() }}"
                                                    {{ $slider->type == SustainabilityPageBanner() ? 'selected' : '' }}>
                                                    {{ SustainabilityPageBanner() }}</option>
                                                    <option value="{{ MaizePageBanner() }}"
                                                    {{ $slider->type == MaizePageBanner() ? 'selected' : '' }}>
                                                    {{ MaizePageBanner() }}</option>


                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tagline:</label>
                                                <input type="text" name="tagline"
                                                    value="{{ $slider->tagline ?? old('tagline') }}"
                                                    class="form-control" placeholder="Tagline">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description:</label>
                                                <textarea class="form-control" style="height:50px" name="description"
                                                    value=""
                                                    placeholder="description">{{ $slider->description ?? old('description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Link:</label>
                                                <input type="text" name="link" class="form-control"
                                                    value="{{ $slider->link ?? old('link') }}" placeholder="Link">
                                            </div>
                                        </div>
                                        <div class="col-6xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>Link Button Text:</label>
                                                <input type="text" name="link_text"
                                                    value="{{ $slider->link_text ?? old('link_text') }}"
                                                    class="form-control" placeholder="Link Button Text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <label class="mt-3">Desktop Image</label>
                                            <input type='file' id="imgInp" accept="image/*" name="desktop_file" />
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <div class="masonry-grid" style="width: 100px; height:100px">
                                                <figure class="masonry-brick">
                                                    <a href="{{ optional($slider->file)->url ?? asset('backend-assets/images/pic.png') }}"
                                                        class="gallery-item" data-size="700x500">
                                                        <img class="img-fluid" id="blah"
                                                            src="{{ optional($slider->file)->url ?? asset('backend-assets/images/pic.png') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <label class="mt-3">Mobile Image</label>
                                            <input type='file' id="mobile_imgInp" accept="image/*" name="moblie_file" />
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <div class="masonry-grid" style="width: 100px; height:100px">
                                                <figure class="masonry-brick">
                                                    <a href="{{ optional($slider->mobileFile)->url ?? asset('backend-assets/images/pic.png') }}"
                                                        class="gallery-item" data-size="700x500">
                                                        <img class="img-fluid" id="mobile_blah"
                                                            src="{{ optional($slider->mobileFile)->url ?? asset('backend-assets/images/pic.png') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 d-flex flex-column justify-content-center">
                                            <div class="checkbox">
                                                <div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_featured" name="is_featured" type="checkbox"
                                                            {{ $slider->is_featured ?? old('is_featured') ? 'checked' : '' }}>
                                                        <label for="is_featured">Is Featured</label>
                                                    </div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_active" name="is_active" type="checkbox"
                                                            {{ $slider->is_active ?? old('is_active') ? 'checked' : '' }}>
                                                        <label for="is_active">Is Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="text-right mrg-top-10">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('afterScripts')
    <script>
        function readURL(input, img) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(img).attr('src', e.target.result);
                    $(img).closest('.masonry-brick a').attr('href', e.target.result);
                    $(img).closest('.masonry-brick img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#imgInp").change(function() {
            readURL(this, '#blah');
        });
        $("#mobile_imgInp").change(function() {
            readURL(this, '#mobile_blah');
        });
        $('#selectize-dropdown').selectize({
            create: false,
            sortField: {
                field: 'text',
                direction: 'asc'
            },
            dropdownParent: 'body'
        });
    </script>
@endsection
