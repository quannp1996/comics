@extends('appSection@base::admin.layouts.index')
@section('content')
    <form action="{{ route('admin_tags_list') }}">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="title">Tiêu đề: </label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Tiêu đề"
                                value="{{ @$search->title }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="type">Loại từ khóa: </label>
                            <select name="type" id="type" class="form-control">
                                <option value="">-- Chọn Loại --</option>
                                <option value="1" {{ @$search->type == 1 ? 'selected' : '' }}>Truyện Tranh</option>
                                <option value="2" {{ @$search->type == 2 ? 'selected' : '' }}>Tin tức</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="status">Trạng thái: </label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Tất cả --</option>
                                <option value="1" {{ @$search->status == 1 ? 'selected' : '' }}>Ẩn</option>
                                <option value="2" {{ @$search->status == 2 ? 'selected' : '' }}>Hiển thị</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">
                    <i class="fa fa-search"></i>
                    Tìm kiếm
                </button>
                <a class="btn btn-success" data-toggle="modal" data-target="#createModal">
                    <i class="fa fa-plus"></i>
                    Thêm mới
                </a>
                <a href="{{ route('admin_tags_list') }}" class="btn btn-danger">
                    <i class="fa fa-redo-alt"></i>
                    Refresh
                </a>
            </div>
        </div>
    </form>
    <div class="card">
        <div class="card-header">
            <h3>Danh sách từ khóa</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%;">ID</th>
                        <th>Tiêu đề</th>
                        <th>Loại từ khóa</th>
                        <th>Màu sắc</th>
                        <th>Trạng thái</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tags ?? [] as $tag)
                        <tr>
                            <td>
                                {{ $tag->id }}
                            </td>
                            <td>
                                {{ $tag->title }}
                            </td>
                            <td>
                                {{ $tag->getTypeText() }}
                            </td>
                            <td>
                                <span class="badge"
                                    style="background-color: {{ $tag->color }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </td>
                            <td>
                                {!! $tag->getBadgeHtml() !!}
                            </td>
                            <td class="text-center">
                                <a class="btn btn-info btn-sm" href="javascript::;" data-toggle="modal"
                                    data-target="#editModal_{{ $tag->id }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Sửa
                                </a>
                            </td>
                            <div class="modal fade" id="editModal_{{ $tag->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form
                                        action="{{ route('admin_tags_update', [
                                            'id' => $tag->id,
                                        ]) }}"
                                        method="POST">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Sửa từ khóa <strong>
                                                        {{ $tag->title }} </strong></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="title">Tiêu đề: </label>
                                                    <input type="text" class="form-control" name="title" id="title"
                                                        value="{{ $tag->title }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Loại từ khóa: </label>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="">-- Chọn Loại --</option>
                                                        <option value="1" {{ $tag->type == 1 ? 'selected' : '' }}>
                                                            Truyện Tranh
                                                        </option>
                                                        <option value="2" {{ $tag->type == 2 ? 'selected' : '' }}>Tin
                                                            tức</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Trạng thái: </label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="">-- Trạng thái --</option>
                                                        <option value="2" {{ $tag->status == 2 ? 'selected' : '' }}>
                                                            Hiển thị</option>
                                                        <option value="1" {{ $tag->status == 1 ? 'selected' : '' }}>Ẩn
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="color">Màu sắc</label>
                                                    <input type="color" class="form-control" name="color"
                                                        id="color" value="{{ $tag->color }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                Danh sách từ khóa trống
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('admin_tags_store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Thêm mới từ khóa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Tiêu đề: </label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="type">Loại từ khóa: </label>
                            <select name="type" id="type" class="form-control">
                                <option value="">-- Chọn Loại --</option>
                                <option value="1">Truyện Tranh</option>
                                <option value="2">Tin tức</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái: </label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Trạng thái --</option>
                                <option value="2">Hiển thị</option>
                                <option value="">Ẩn</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="color">Màu sắc</label>
                            <input type="color" class="form-control" name="color" id="color">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
