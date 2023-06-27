@extends('appSection@base::admin.layouts.index')
@section('content')
    @include('appSection@manga::includes.lists.search')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-book"></i>
                Truyện
            </h3>
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
                        <th>
                            Ảnh
                        </th>
                        <th>
                            Tác giả
                        </th>
                        <th>
                            Loại
                        </th>
                        <th>
                            Số bộ truyện
                        </th>
                        <th style="width: 8%" class="text-center">
                            Trạng thái
                        </th>
                        <th style="width: 20%" class="text-center">
                            Hành động
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mangas as $manga)
                        <tr>
                            <td>
                                {{ $manga->id }}
                            </td>
                            <td>
                                {{ @$manga->desc->title }}
                                <br>
                                <small>{{ !empty($manga->created_at) ? $manga->created_at->format('d/m/Y H:i:s'): '-- Đang cập nhật --' }}</small>
                            </td>
                            <td>
                                <img class="img-lg img-bordered" src="{{ $manga->getImageURL() }}" alt="">
                            </td>
                            <td>
                                {{ @$manga->author }}
                            </td>
                            <td>
                                @forelse ($manga->categories as $category)
                                    <p class="text-primary">{{ $category->desc->title }}</p>
                                @empty
                                @endforelse
                            </td>
                            <td>
                                <a href="{{ route('admin_manges_chapter_list', $manga->id) }}">
                                    <span class="badge {{ $manga->chapters_count > 0 ? 'bg-success' : 'bg-danger' }}">{{ $manga->chapters_count}} chương</span>
                                </a>
                            </td>
                            <td class="text-center">
                                {!! $manga->getBadgeHtml() !!}
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-eye">
                                    </i>
                                    Ẩn
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('admin_manges_edit_form', $manga->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Sửa
                                </a>
                                <a class="btn btn-danger btn-sm" data-href="{{ route('admin_manges_delete', $manga->id) }}" href="#" onclick="adminJS.sendRequest(this, 'DELETE')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">
                                Không tìm thấy dữ liệu
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection