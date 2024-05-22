@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading border bottom">
                    <h4 class="card-title">{{ $info->id ? 'Edit Information' : 'Create Information' }}</h4>
                </div>
                <div class="card-block">
                    <div class="mrg-top-40">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <form action="{{ route('admin.info.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $info->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" name="title" value="{{ $info->title ?? old('title') }}"
                                                    class="form-control" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description:</label>
                                                <textarea class="form-control" style="height:50px" name="description"
                                                    value=""
                                                    placeholder="description">{{ $info->description ?? old('description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Link:</label>
                                                <input type="text" name="link" class="form-control"
                                                    value="{{ $info->link ?? old('link') }}" placeholder="Link">
                                            </div>
                                        </div>
                                        <div class="col-6xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>Link Button Text:</label>
                                                <input type="text" name="link_text"
                                                    value="{{ $info->link_text ?? old('link_text') }}"
                                                    class="form-control" placeholder="Link Button Text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <label class="mt-3">Image</label>
                                            <input type='file' id="imgInp" accept="image/*" name="desktop_file" />
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <div class="masonry-grid" style="width: 100px; height:100px">
                                                <figure class="masonry-brick">
                                                    <a href="{{ optional($info->file)->url ?? asset('backend-assets/images/pic.png') }}"
                                                        class="gallery-item" data-size="700x500">
                                                        <img class="img-fluid" id="blah"
                                                            src="{{ optional($info->file)->url ?? asset('backend-assets/images/pic.png') }}"
                                                            alt="pic">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6 d-flex flex-column justify-content-center">
                                            <div class="checkbox">
                                                <div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_active" name="is_active" type="checkbox"
                                                            {{ $info->is_active ?? old('is_active') ? 'checked' : '' }}>
                                                        <label for="is_active">Is Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
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

    </script>
@endsection
