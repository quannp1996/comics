<div class="card">
    <div class="card-body">
        <form action="{{ route('admin_categories_list') }}" method="GET">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label>Trạng thái:</label>
                                <select class="select2" name="status"
                                    style="width: 100%;">
                                    <option value="">-- Chọn trạng thái --</option>
                                    @foreach ($listStatus as $value => $lable)
                                        <option value="{{ $value }}"> {{ $lable }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Thể loại:</label>
                                <select class="select2" name="type"
                                    style="width: 100%;">
                                    <option value="">-- Chọn thể loại --</option>
                                    @foreach ($listTypes as $value => $lable)
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
                                placeholder="Tiêu đề" value="">
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary rounded-0" type="submit">
                <i class="fa fa-search"></i>
                Tìm kiếm
            </button>
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
