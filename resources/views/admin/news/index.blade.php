@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <div class="page-title">
            <h4>News</h4>
        </div>
        <div class="addSlider">
            <a href="/admin/news/create" class="btn btn-primary">
                <i class="ti-plus pdd-right-5"></i>
                <span>Add News</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="table-overflow">
                        <table id="dTable" class="table table-lg table-hover">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Title</th>
                                    <th>Featured</th>
                                    <th>Active</th>
                                    <th>Date</th>
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
                    url: '{{ route('admin.news.getList') }}',
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
                        data: 'title',
                        render: function(full, type, data, meta) {
                            return `<div class="info"><span class="title">${data.title}</span></div>`;
                        }
                    },
                    {
                        data: 'is_featured',
                        render: function(full, type, data, meta) {
                            let status = '',
                                featured = '';
                            if (data.is_featured) {
                                featured = "Yes";
                                status = 'online';
                            } else {
                                featured = "No";
                                status = 'no-disturb';
                            }
                            return `<div class="relative mrg-top-15"><span class="status ${status}"></span><span class="pdd-left-20">${featured}</span></div>`;
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
                        data: 'date',
                        render: function(full, type, data, meta) {
                            return `<div class="relative mrg-top-15"><span class="pdd-left-20">${data.date}</span></div>`;
                        }
                    },
                    {
                        data: 'Actions',
                        render: function(full, type, data, meta) {
                            return `<div class="mrg-top-10">
                                                        <a class="pl-3" href="/admin/news/${data.id}/edit"><i
                                                                class="ti-pencil"></i></a>
                                                        <a class="pl-3 delete" href="/admin/news/${data.id}"><i
                                                                class="ti-trash"></i></a>
                                                    </div>`;
                        }
                    },
                ],
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
                var result = 'Reorder started on row: ' + edit.triggerRow.data()['id'] + '<br>';
                let new_order = []
                for (var i = 0, ien = diff.length; i < ien; i++) {
                    if (diff[i].oldPosition != -1) {
                        fetch('{{ route('admin.news.reorder') }}?' + new URLSearchParams({
                            oldData: diff[i].oldData,
                            newPosition: diff[i].newPosition,
                        }));
                    }
                }

            });
        });

    </script>
@endsection
