@extends('appSection@base::admin.layouts.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{
                !empty($manga) ? route('admin_manges_update', $manga->id) : route('admin_manges_store')
            }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                @include('appSection@manga::includes.form.genaral')
                            </div>
                            <div class="col-sm-5">
                                @include('appSection@manga::includes.form.additional')
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Lưu Thông tin</button>
                        <a href="" class="btn btn-danger">Hủy</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
    