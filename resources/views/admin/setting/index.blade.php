@extends('admin.layouts.app')
@section('content')
    <div class="d-flex justify-content-between">
        <div class="page-title">
            <h4>Setting</h4>
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
                                    <th>key</th>
                                    <th>Value</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="default-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="key"></h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.settings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id">
                        <input type="hidden" name="key">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Value:</label>
                                    <div id="type"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="text-right mrg-top-5">
                                    <button class="btn btn-default btn-sm" data-dismiss="modal">close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                ajax: {
                    url: '{{ route('admin.settings.getList') }}',
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
                        data: 'key',
                        render: function(full, type, data, meta) {
                            return `<div class="info"><span class="title">${data.key}</span></div>`;
                        }
                    },
                    {
                        data: 'value',
                        render: function(full, type, data, meta) {
                            return `<div class="info"><span class="title">${data.value}</span></div>`;
                        }
                    },
                    {
                        data: 'Actions',
                        render: function(full, type, data, meta) {
                            return `<div class="mrg-top-10">
                            <a id="editSetting" class="pl-3" href="/admin/settings/${data.id}/edit"><i
                                    class="ti-pencil"></i></a>
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

            $('#dTable').on('click', '#editSetting', function(e) {
                fetch(this.href, {
                        method: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    }).then(res => res.json())
                    .then((body) => {
                        $('input[name="id"]').val(body.id);
                        $('input[name="key"]').val(body.key);
                        $("#key").text(body.key);
                        if (body.type == "text_area") {
                            $("#type").html(
                                `<textarea class="form-control" style="height:50px" name="value" placeholder="value">${body.value}</textarea>`
                            )
                        } else {
                            $("#type").html(
                                `<input type="text" class="form-control" name="value" value="${body.value}" placeholder="value" />`
                            )
                        }

                        $('#default-modal').modal('show');
                    });
                return false;
            });
        });

    </script>
@endsection
