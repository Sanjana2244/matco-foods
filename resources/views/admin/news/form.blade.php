@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading border bottom">
                    <h4 class="card-title">{{ $news->id ? 'Edit News' : 'Create News' }}</h4>
                </div>
                <div class="card-block">
                    <div class="mrg-top-40">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $news->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" name="title" value="{{ $news->title ?? old('title') }}"
                                                    class="form-control" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="timepicker-input input-icon form-group">
                                                <label>Date:</label>
                                                <i class="ti-time"></i>
                                                <input type="text" name="date" class="form-control"
                                                    value="{{ $news->date ?? old('date') }}" placeholder="Datepicker"
                                                    data-provide="datepicker" data-date-format='yyyy-mm-dd'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description:</label>
                                                <textarea class="form-control" style="height:50px" name="description"
                                                    value=""
                                                    placeholder="description">{{ $news->description ?? old('description') }}</textarea>
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
                                                    <a href="{{ optional($news->file)->url ?? asset('backend-assets/images/pic.png') }}"
                                                        class="gallery-item" data-size="700x500">
                                                        <img class="img-fluid" id="blah"
                                                            src="{{ optional($news->file)->url ?? asset('backend-assets/images/pic.png') }}"
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
                                                    <a href="{{ optional($news->mobileFile)->url ?? asset('backend-assets/images/pic.png') }}"
                                                        class="gallery-item" data-size="700x500">
                                                        <img class="img-fluid" id="mobile_blah"
                                                            src="{{ optional($news->mobileFile)->url ?? asset('backend-assets/images/pic.png') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="checkbox">
                                                <div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_featured" name="is_featured" type="checkbox"
                                                            {{ $news->is_featured ?? old('is_featured') ? 'checked' : '' }}>
                                                        <label for="is_featured">Is Featured</label>
                                                    </div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_active" name="is_active" type="checkbox"
                                                            {{ $news->is_active ?? old('is_active') ? 'checked' : '' }}>
                                                        <label for="is_active">Is Active</label>
                                                    </div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_news" name="is_news" type="checkbox"
                                                            {{ $news->is_news ?? old('is_news') ? 'checked' : '' }}>
                                                        <label for="is_news">Is News</label>
                                                    </div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_event" name="is_event" type="checkbox"
                                                            {{ $news->is_event ?? old('is_event') ? 'checked' : '' }}>
                                                        <label for="is_event">Is Event</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="text-right mrg-top-5">
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
        </script>
    @endsection
