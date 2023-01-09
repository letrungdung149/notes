@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header"><h5 class="card-title">Categories</h5></div>
            <div class="card-body">
                <div id="collections-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="dt-buttons btn-group flex-wrap">
                                <a class="btn btn-success" href="{{ route('category-create') }}">
                                    Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="collections-table_processing" class="dataTables_processing card"
                             style="display: none;">Đang xử lý...
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="collections-table"
                                   class="table dataTable no-footer dtr-inline dt-checkboxes-select"
                                   style="width: 100%;" aria-describedby="collections-table_info">
                                <thead>
                                <tr>
                                    <th class="sorting">
                                        Name
                                    </th>
                                    <th class="sorting">
                                        Note_id
                                    </th>
                                    <th class="sorting">
                                        Created_at
                                    </th>
                                    <th class="sorting">
                                        Updated_at
                                    </th>
                                    <th class="dt-center noVis sorting_disabled"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->note->name }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td class=" dt-center noVis">
                                        <form action="" class="list-icons">
                                            <a href="/admin/category-edit/{{ $category->id }}"
                                               class="list-icons-item text-primary editor-edit"><i
                                                    class="icon-pencil7"></i></a>
                                            <a href="/admin/category-delete/{{ $category->id }}" type="submit" class="list-icons-item text-danger editor-delete"
                                            >
                                                <i
                                                    class="icon-trash">
                                                </i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
