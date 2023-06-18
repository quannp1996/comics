@extends('appSection@base::admin.layouts.index')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <form action="">
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
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Thông tin chung</h4>
                                        </div>
                                        <div class="card-body">
                                            ádas
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
    </section>
@endsection
