@extends('appSection@base::admin.layouts.index')
@section('content')
    @include('appSection@categories::includes.list.search')
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
                                <span class="{{ $category->manages_count == 0 ? 'badge bg-danger' : 'badge bg-success' }}">{{ $category->manages_count }} bộ truyện</span>
                                
                            </td>
                            <td class="project-state">
                                {!! $category->getBadgeHtml() !!}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-eye">
                                    </i>
                                    Ẩn
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('admin_categories_edit_form', $category->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Sửa
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Xóa
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
