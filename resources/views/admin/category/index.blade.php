@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <div class="page-title">
            <h4>Categories</h4>
        </div>
        <div class="addSlider">
            <a href="/admin/categories/create" class="btn btn-primary">
                <i class="ti-plus pdd-right-5"></i>
                <span>Add Category</span>
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
                                    <th>Name</th>
                                    <th>Products Count</th>
                                    <th>Featured</th>
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
        var table = $('#dTable').DataTable({
            processing: true,
            serverSide: true,
            rowReorder: {
                dataSrc: 'id',
            },
            ajax: {
                url: '{{ route('admin.categories.getList') }}',
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
                    data: 'name',
                    render: function(full, type, data, meta) {
                        return `<div class="info"><span class="title">${data.name}</span></div>`;
                    }
                },
                {
                    data: 'products_count',
                    render: function(full, type, data, meta) {
                        return `<div class="info"><span class="title">${data.products_count}</span></div>`;
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
                    data: 'Actions',
                    render: function(full, type, data, meta) {
                        return `<div class="mrg-top-10">
                                                        <a class="pl-3" href="/admin/categories/${data.id}/edit"><i
                                                                class="ti-pencil"></i></a>
                                                        <a class="pl-3 delete" href="/admin/categories/${data.id}"><i
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
                })
                .then(res => res.json)
                .then(body => {
                    location.reload()
                });
            return false;
        })

        table.on('row-reorder', function(e, diff, edit) {
            var result = 'Reorder started on row: ' + edit.triggerRow.data()['id'] + '<br>';
            let new_order = []
            for (var i = 0, ien = diff.length; i < ien; i++) {
                if (diff[i].oldPosition != -1) {
                    fetch('{{ route('admin.categories.reorder') }}?' + new URLSearchParams({
                        oldData: diff[i].oldData,
                        newPosition: diff[i].newPosition,
                    }));
                }
            }

        });

    </script>
@endsection
