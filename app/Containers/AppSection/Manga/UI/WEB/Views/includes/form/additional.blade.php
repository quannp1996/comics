<div class="card card-primary card-outline card-tabs">
    <div class="card-header">
        <h4>Thông tin bổ sung</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="status">Tác giả: &nbsp;</label>
            <input type="text" class="form-control" value="" name="author">
        </div>
        <div class="form-group">
            <label for="status">Danh Mục: &nbsp;</label>
            <select name="categories[]" class="form-control select2" multiple id="categories">
                <option value="">-- Chọn Danh Mục --</option>
                @foreach ($categories ?? [] as $category)
                    <option value="{{ $category->id }}">{{ $category->desc->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="status">Tag: &nbsp;</label>
            <select name="tags[]" class="form-control select2" multiple id="tags">
                <option value="">-- Chọn Tag --</option>
                @foreach ($tags ?? [] as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->desc->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="status">Trạng thái: &nbsp;</label>
            <input type="hidden" name="status" id="0">
            <input type="checkbox" name="status" value="1"
                {{ old('status', @$manga->status) == 1 ? 'checked' : '' }} data-bootstrap-switch>
        </div>
        <div class="form-group">
            <label for="is_hot">Nổi bật: &nbsp;</label>
            <input type="hidden" name="is_hot" id="0">
            <input type="checkbox" name="is_hot" value="1"
                {{ old('is_hot', @$manga->is_hot) == 1 ? 'checked' : '' }} data-bootstrap-switch>
        </div>
    </div>
</div>
<div class="card card-success card-outline card-tabs">
    <div class="card-header">
        <h4>
            <i class="fa fa-camera"></i>
            Thông tin Hình Ảnh
        </h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="avatar">Hình Ảnh: </label>
            <input type="file" name="avatar" class="form-control">
            @if (!empty($manga->avatar))
                <img src="" class="img-fluid" alt="">
            @endif
        </div>
    </div>
</div>
<div class="card card-success card-outline card-tabs">
    <div class="card-header">
        <h4>Thông tin Đọc</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="status">Số lượt đọc: &nbsp;</label>
            <span>{{ !empty($manga) ? (int) $manga->views : '--Đang cập nhật--' }}</span>
        </div>
        <div class="form-group">
            <label for="status">Số Chương: &nbsp;</label>
            <span>{{ !empty($manga) ? $manga->chapters_count : '--Đang cập nhật--' }}</span>
        </div>
    </div>
</div>

<div class="card card-danger card-outline card-tabs">
    <div class="card-header">
        <h4>Thông tin Clone</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="status">Website Clone: &nbsp;</label>
            <span>{{ !empty($manga) && !empty($manga->website_clone) ? $manga->website_clone : '--Đang cập nhật--' }}</span>
        </div>
        <div class="form-group">
            <label for="status">URL Clone: &nbsp;</label>
            <span>{{ !empty($manga) && !empty($manga->url_clone) ? $manga->url_clone : '--Đang cập nhật--' }}</span>
        </div>
        <div class="form-group">
            <label for="status">Thời gian Clone: &nbsp;</label>
            <span>{{ !empty($manga) && !empty($manga->time_clone) ? $manga->time_clone->format('d/m/Y H:i:s') : '--Đang cập nhật--' }}</span>
        </div>
    </div>
</div>
