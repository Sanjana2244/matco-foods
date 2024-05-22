@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading border bottom">
                    <h4 class="card-title">{{ $categories->id ? 'Edit Category' : 'Create Category' }}</h4>
                </div>
                <div class="card-block">
                    <div class="mrg-top-40">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <form action="{{ route('admin.categories.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $categories->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" name="name" value="{{ $categories->name ?? old('title') }}"
                                                    class="form-control" placeholder="Category Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description:</label>
                                                <textarea class="form-control" style="height:50px" name="description"
                                                    value=""
                                                    placeholder="description">{{ $categories->description ?? old('description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="checkbox">
                                                <div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_featured" name="is_featured" type="checkbox"
                                                            {{ $categories->is_featured ?? old('is_featured') ? 'checked' : '' }}>
                                                        <label for="is_featured">Is Featured</label>
                                                    </div>
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="is_active" name="is_active" type="checkbox"
                                                            {{ $categories->is_active ?? old('is_active') ? 'checked' : '' }}>
                                                        <label for="is_active">Is Active</label>
                                                    </div>
                                                    @if($categories->id)
                                                    <div class="checkbox checkbox-inline checkbox-primary">
                                                        <input id="refresh_slug" name="refresh_slug" type="checkbox">
                                                        <label for="refresh_slug">Refresh Slug</label>
                                                    </div>
                                                    @endif
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
            //

        </script>
    @endsection
