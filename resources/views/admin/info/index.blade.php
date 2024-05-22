@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <div class="page-title">
            <h4>Information</h4>
        </div>
        <div class="addSlider">
            <a href="/admin/info/create" class="btn btn-primary">
                <i class="ti-plus pdd-right-5"></i>
                <span>Add Information</span>
            </a>
        </div>
    </div>
    <div id="result"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="table-overflow">
                        <table id="dTable" class="table table-lg table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Active</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('afterScripts')
    <script>
        $(document).ready(function() {
            var table = $('#dTable').DataTable({
                processing: true,
                serverSide: true,
                rowReorder: {
                    dataSrc: 'id',
                },
                ajax: {
                    url: '{{ route('admin.info.getList') }}',
                    type: 'GET',
                    dataType: "JSON",
                    error: function(reason) {
                        return true;
                    }
                },
                order: [
                    [0, "asc"]
                ],
                columns: [{
                        data: 'id',
                        render: function(full, type, data, meta) {
                            return `<div class="checkbox mrg-left-20"><label for="task10">${data.sr_no}</label></div>`;
                        }
                    },
                    {
                        data: 'id',
                        render: function(full, type, data, meta) {
                            let src = '';
                            if (data.file) {
                                src = data.file.url;
                            } else {
                                src = '{{ asset('backend-assets/images/pic.png') }}';
                            }
                            return `<div class="list-info mrg-top-10 mrg-left-20">
                                                                        <img class="thumb-img" src="${src}" alt="${data.title}">
                                                                        </div>`;
                        }
                    },
                    {
                        data: 'title',
                        render: function(full, type, data, meta) {
                            return `<div class="info"><span class="title">${data.title}</span></div>`;
                        }
                    },
                    {
                        data: 'is_active',
                        render: function(full, type, data, meta) {
                            let status = '',
                                active = '';
                            if (data.is_active) {
                                active = "Yes";
                                status = 'online';
                            } else {
                                active = "No";
                                status = 'no-disturb';
                            }
                            return `<div class="relative mrg-top-15"><span class="status ${status}"></span><span class="pdd-left-20">${active}</span></div>`;
                        }
                    },
                    {
                        data: 'Actions',
                        render: function(full, type, data, meta) {
                            return `<div class="mrg-top-10">
                                <a class="pl-3" href="/admin/info/${data.id}/edit"><i
                                        class="ti-pencil"></i></a>
                                <a class="pl-3 delete" href="/admin/info/${data.id}"><i
                                        class="ti-trash"></i></a>
                            </div>`;
                        }
                    },
                ]
            });
            $('#dTable').on('click', 'a.delete', function() {
                fetch(this.href, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    }).then(res => res.json)
                    .then((body) => {
                        location.reload()
                    });
                return false;
            })

            table.on('row-reorder', function(e, diff, edit) {
                for (var i = 0, ien = diff.length; i < ien; i++) {
                    if (diff[i].oldPosition != -1) {
                        fetch('{{ route('admin.info.reorder') }}?' + new URLSearchParams({
                            oldData: diff[i].oldData,
                            newPosition: diff[i].newPosition,
                        }));
                    }
                }

            });
        });

    </script>
@endsection
