@extends('appSection@base::admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form
                action="{{ !empty($category) ? route('admin_categories_update', $category->id) : route('admin_categories_store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="card-header">
                                        <h4>Thông tin chung</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="genaral-information-category-tab" role="tablist">
                                            @foreach ($languages as $language)
                                                <li class="nav-item">
                                                    <a class="nav-link {{ $loop->index == 0 ? 'active' : '' }}"
                                                        id="custom-content-below-home{{ $language['id'] }}-tab"
                                                        data-toggle="pill"
                                                        href="#custom-content-below-home{{ $language['id'] }}"
                                                        role="tab"
                                                        aria-controls="custom-content-below-home{{ $language['id'] }}"
                                                        aria-selected="true">{{ $language['title'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content" id="genaral-information-category-tabContent">
                                            @foreach ($languages as $language)
                                                <div class="{{ $loop->index == 0 ? 'tab-pane fade active show' : 'tab-pane fade' }}"
                                                    id="custom-content-below-home{{ $language['id'] }}" role="tabpanel"
                                                    aria-labelledby="genaral-information-category-tab">
                                                    <fieldset class="border p-2">
                                                        <legend>Nội dung</legend>
                                                        <div class="form-group">
                                                            <label for="categoryTitle{{ $language['id'] }}">Tiêu đề</label>
                                                            <input type="text" class="form-control"
                                                                name="category_description[{{ $language['id'] }}][title]"
                                                                id="categoryTitle{{ $language['id'] }}"
                                                                value="{{ old('category_description.' . $language['id'] . '.title', @$category->desc->title) }}"
                                                                placeholder="Tiêu đề Danh Mục">
                                                            <small
                                                                class="text-danger">{{ @$errors->get('category_description.' . $language['id'] . '.title')[0] }}</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="categoryTitle{{ $language['id'] }}">Mô tả</label>
                                                            <input type="text" class="form-control"
                                                                name="category_description[{{ $language['id'] }}][description]"
                                                                value="{{ old('category_description.' . $language['id'] . '.description', @$category->desc->description) }}"
                                                                id="categoryTitle{{ $language['id'] }}"
                                                                placeholder="Mô tả Danh Mục">
                                                            <small
                                                                class="text-danger">{{ @$errors->get('category_description.' . $language['id'] . '.description')[0] }}</small>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="border p-2">
                                                        <legend>SEO</legend>
                                                        <div class="form-group">
                                                            <label for="categoryTitle{{ $language['id'] }}">Meta
                                                                Keyword</label>
                                                            <input type="text" class="form-control"
                                                                name="category_description[{{ $language['id'] }}][meta_keyword]"
                                                                id="categoryTitle{{ $language['id'] }}"
                                                                value="{{ old('category_description.' . $language['id'] . '.meta_keyword', @$category->desc->meta_keyword) }}"
                                                                placeholder="Mô tả Danh Mục">
                                                            <small
                                                                class="text-danger">{{ @$errors->get('category_description.' . $language['id'] . '.meta_keyword')[0] }}</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="categoryTitle{{ $language['id'] }}">Meta
                                                                Title</label>
                                                            <input type="text" class="form-control"
                                                                name="category_description[{{ $language['id'] }}][meta_title]"
                                                                value="{{ old('category_description.' . $language['id'] . '.meta_title', @$category->desc->meta_title) }}"
                                                                id="categoryTitle{{ $language['id'] }}"
                                                                placeholder="Mô tả Danh Mục">
                                                            <small
                                                                class="text-danger">{{ @$errors->get('category_description.' . $language['id'] . '.meta_title')[0] }}</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="categoryTitle{{ $language['id'] }}">Meta
                                                                Description</label>
                                                            <textarea class="form-control" placeholder="Meta Description"
                                                                name="category_description[{{ $language['id'] }}][meta_description]" id="" cols="20" rows="5">{{ old('category_description.' . $language['id'] . '.meta_description', @$category->desc->meta_description) }}</textarea>
                                                            <small
                                                                class="text-danger">{{ @$errors->get('category_description.' . $language['id'] . '.meta_description')[0] }}</small>
                                                        </div>
                                                    </fieldset>
                                                    <hr>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card card-success card-outline card-tabs">
                                    <div class="card-header">
                                        <h4>Thông tin bổ sung</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="categoryStatus">Loại Danh Mục:</label>&nbsp;&nbsp;&nbsp;
                                            <select name="type" id="type" class="form-control">
                                                <option value="">-- Loại Danh Mục --</option>
                                                @foreach ($listTypes as $key => $type)
                                                    <option value="{{ $key }}"
                                                        {{ $key == old('type', @$category->type) ? 'selected' : '' }}>
                                                        {{ $type }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ @$errors->get('type')[0] }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryStatus">Danh Mục cha:</label>&nbsp;&nbsp;&nbsp;
                                            <select name="pid" id="pid" class="form-control">
                                                <option value="">-- Chọn Danh Mục Cha --</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryStatus">Trạng thái:</label>&nbsp;&nbsp;&nbsp;
                                            <input type="hidden" name="status" id="status" value="0">
                                            <input type="checkbox" name="status" value="2"
                                                {{ old('status', @$category->status) == 2 ? 'checked' : '' }}
                                                data-bootstrap-switch>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryStatus">Danh Mục Nổi bật:</label>&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="is_hot" value="1"
                                                {{ old('status', @$category->is_hot) == 1 ? 'checked' : '' }}
                                                data-bootstrap-switch>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryStatus">Sắp xếp:</label>&nbsp;&nbsp;&nbsp;
                                            <input type="number" class="form-control" name="sort_order"
                                                id="sort_order">
                                        </div>

                                    </div>
                                </div>
                                <div class="card card-danger card-outline card-tabs">
                                    <div class="card-header">
                                        <h4>Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="categoryStatus">Hình ảnh:</label>&nbsp;&nbsp;&nbsp;
                                            <input type="file" name="avatar" class="form-control" id="avatar">
                                            @if (!empty($category->avatar))
                                                <img src="" class="img-fluid" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa"></i>
                            Lưu Thông tin
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa"></i>
                            Hủy
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js_bot_all')
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    @if (!empty($category))
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('fa037a4bac2cb6548e51', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('notification_{{ $category->id }}');
            channel.bind('App\\Ship\\Events\\PusherNoticationCategoriesEvent', function(data) {
                alert(data.message);
            });
        </script>
    @endif
@endpush
