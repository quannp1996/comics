@extends('appSection@base::admin.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin_categories_list') }}" method="GET">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Trạng thái:</label>
                                    <select class="select2" multiple="multiple" name="status" data-placeholder="Any"
                                        style="width: 100%;">
                                        @foreach ($listStatus as $value => $lable)
                                            <option value="{{ $value }}"> {{ $lable }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Sort Order:</label>
                                    <select class="select2" name="sort_order" style="width: 100%;">
                                        <option selected>ASC</option>
                                        <option>DESC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Order By:</label>
                                    <select class="select2" name="sort_by" style="width: 100%;">
                                        <option selected>Title</option>
                                        <option>Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" class="form-control form-control-lg"
                                    placeholder="Type your keywords here" value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary rounded-0" href="{{ route('admin_categories_add_form') }}">
                    <i class="fa fa-plus"></i>
                    Thêm mới
                </a>
                <a class="btn btn-danger rounded-0">
                    <i class="fa fa-redo-alt"></i>
                    Refresh
                </a>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh Mục</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            ID
                        </th>
                        <th style="width: 20%">
                            Tiêu đề
                        </th>
                        <th style="width: 30%">
                            Loại
                        </th>
                        <th>
                            Trạng thái
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%" class="text-center">
                            Hành động
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>
                                {{ $category->id }}
                            </td>
                            <td>
                                <a>
                                    {{ @$category->desc->title }}
                                </a>
                                <br>
                                <small>
                                    Ngày tạo {{ $category->created_at->format('d/m/Y') }}
                                </small>
                            </td>
                            <td>
                                {{ $category->getType() }}
                            </td>
                            <td class="project_progress">
                                {{ $category->getType() }}
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                Không tìm thấy dữ liệu
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('js_bot_all')
    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>
@endpush
