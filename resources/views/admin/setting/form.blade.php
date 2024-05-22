@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-heading border bottom">
                    <h4 class="card-title">{{ $setting->id ? 'Edit Setting' : 'Create Setting' }}</h4>
                </div>
                <div class="card-block">
                    <div class="mrg-top-40">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <form action="{{ route('admin.settings.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $setting->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Key:</label>
                                                <input type="text" name="key"
                                                    value="{{ $setting->key ?? old('key') }}" class="form-control"
                                                    placeholder="Key">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Type:</label>
                                            <select id="selectize-dropdown" name="type">
                                                <option value="" disabled>Select Type...</option>
                                                <option value="{{ mainSlider() }}"
                                                    {{ $setting->type == mainSlider() ? 'selected' : '' }}>
                                                    {{ mainSlider() }}</option>
                                                <option value="{{ productBanner() }}"
                                                    {{ $setting->type == productBanner() ? 'selected' : '' }}>
                                                    {{ productBanner() }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Value:</label>
                                                <textarea class="form-control" style="height:50px" name="value"
                                                    value=""
                                                    placeholder="value">{{ $setting->value ?? old('value') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
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
