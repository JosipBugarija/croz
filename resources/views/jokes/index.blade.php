@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body card-table">
                    <a class="btn btn-default table-action-btn" href="{{ route('jokes.create') }}">
                        <i class="fa fa-plus mr-1"></i> New joke
                    </a>

                    <table class="ajax-table twelve table table-hover box" data-search="true">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th data-field="category.name">Category</th>
                                <th data-field="content" data-sortable=true>Joke</th>
                                <th data-field="likes" data-sortable=true>Likes</th>
                                <th data-field="dislikes" data-sortable=true>Dislikes</th>
                                <th data-field="" data-sortable=true>Difference</th>
                                <th data-field="actions" data-formatter=actionsFormatter>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('javascript')
    <script>
        $('.ajax-table').bootstrapTable({
            url: '{{ url('jokes') }}',
            sortOrder: 'desc',
            sidePagination: 'server',
            pagination: true,
            pagnationLoop: true,
            pageList: [10],
            paginationVAlign: 'bottom',
            paginationHAlign: 'right',
            silentSort: false,
            columns:[{
                formatter: function(value,row,index) {
                    var page = $('.ajax-table').bootstrapTable('getOptions').pageNumber;

                    return ((page - 1) * 10) + index + 1;
                }
            }, {}, {
                class: 'text-pre-wrap'
            }, {}, {}, {
                formatter: function(value,row) {
                    return row.likes - row.dislikes;
                }
            }, {
                class: 'actions-column',
                formatter: function(value,row) {
                    return "<i class='fa like-btn text-secondary ml-1 fa-thumbs-up' data-id='" + row.id + "' data-like='true'></i>" +
                           "<i class='fa like-btn text-danger ml-3 mr-1 fa-thumbs-down' data-id='" + row.id + "' data-like='false'></i>";
                }
            }],
            onLoadSuccess: function () {
                $('.pagination-detail').addClass('d-none d-sm-block');

                $(".like-btn").click(function() {
                    $.post("{{ url('jokes') }}/" + $(this).data('id'), {
                        like: $(this).data('like'),
                        _method: 'PUT',
                        _token: '{{csrf_token()}}'
                    }).done(function() {
                        $('.ajax-table').bootstrapTable('refresh');
                    });
                });
            },
            queryParams: function(params) {
                var _params = {
                    page: params.offset > 0 ? ((params.offset / 10) + 1) : 1,
                    search: params.search,
                    sort: params.sort,
                    order: params.order
                };
                return _params;
            }
        });

        $('.fixed-table-toolbar').addClass('row');
        $('.fixed-table-toolbar .search').addClass('col-lg-4 col-md-6 col-sm-8 col-xs-12');
    </script>
@stop