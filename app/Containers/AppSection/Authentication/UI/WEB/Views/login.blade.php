@extends('appSection@base::admin.layouts.guest', [
    'bodyClass' => 'login-page',
])
@section('content')
    <div class="login-box">
        
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <strong>Đăng nhập</strong>
                </div>
                <form action="{{ route('admin_submit_login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Ghi nhớ
                                </label>
                            </div>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
