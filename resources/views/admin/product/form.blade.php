@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading border bottom">
                    <h4 class="card-title">{{ $product->id ? 'Edit Product' : 'Create Product' }}</h4>
                </div>
                <div class="card-block">
                    <div class="mrg-top-40">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <form action="{{ route('admin.products.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" name="title"
                                                    value="{{ $product->title ?? old('title') }}" class="form-control"
                                                    placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Categories: </label>
                                                <select id="selectize-tags-1" name="category_id[]" multiple
                                                    class="item-info">
                                                    <option value="" disabled selected>Select Categories</option>
                                                    @foreach ($categories as $key => $item)
                                                        <option value="{{ $key }}"
                                                            {{ in_array($key, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                            {{ $item }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tagline:</label>
                                                <input type="text" name="tagline"
                                                    value="{{ $product->tagline ?? old('tagline') }}" class="form-control"
                                                    placeholder="Tagline">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description:</label>
                                                <textarea class="form-control" style="height:50px" name="description"
                                                    value=""
                                                    placeholder="description">{{ $product->description ?? old('description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="checkbox">
                                                <div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_featured" name="is_featured" type="checkbox"
                                                            {{ $product->is_featured ?? old('is_featured') ? 'checked' : '' }}>
                                                        <label for="is_featured">Is Featured</label>
                                                    </div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_active" name="is_active" type="checkbox"
                                                            {{ $product->is_active ?? old('is_active') ? 'checked' : '' }}>
                                                        <label for="is_active">Is Active</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="text-right mrg-top-5">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <input type='file' id="imgInp" accept="image/*" name="file" />
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <div class="masonry-grid" style="width: 100px; height:100px">
                                                <figure class="masonry-brick">
                                                    <a href="{{ optional($product->file)->url ?? asset('backend-assets/images/pic.png') }}"
                                                        class="gallery-item" data-size="700x500">
                                                        <img class="img-fluid" id="blah"
                                                            src="{{ optional($product->file)->url ?? asset('backend-assets/images/pic.png') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="checkbox">
                                                <div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_featured" name="is_featured" type="checkbox"
                                                            {{ $product->is_featured ?? old('is_featured') ? 'checked' : '' }}>
                                                        <label for="is_featured">Is Featured</label>
                                                    </div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_active" name="is_active" type="checkbox"
                                                            {{ $product->is_active ?? old('is_active') ? 'checked' : '' }}>
                                                        <label for="is_active">Is Active</label>
                                                    </div>
                                                    @if($product->id)
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="refresh_slug" name="refresh_slug" type="checkbox">
                                                        <label for="refresh_slug">Refresh Slug</label>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
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
    @endsection
    @section('afterScripts')
        <script>
            $('#selectize-tags-1').selectize({
                delimiter: ',',
                persist: false,
                create: function(input) {
                    return {
                        value: input,
                        text: input
                    }
                }
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }
            $("#imgInp").change(function() {
                readURL(this);
            });

        </script>
    @endsection
