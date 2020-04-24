@extends('admin.partials.master2')
@section('css')
    <link href="{{ URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="">
                    </div>
                </div>
                <div class="container-login100">
                    <div class="wrap-login100 p-4">
                        <form class="login100-form validate-form" action="{{route('admin.login.store')}}" method="post">
                            @csrf
                            @method('post')
                            <span class="login100-form-title">
									Đăng nhập
								</span>
                            @foreach ($errors->all() as $message)
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @endforeach
                            @if(Session('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            @csrf
                            <div class="wrap-input100 validate-input"
                                 data-validate="Valid email is required: ex@abc.xyz">
                                <input class="input100" type="email" name="email" value="{{ old('email') }}"
                                       placeholder="Email" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="password" placeholder="Mật khẩu" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
                            </div>

                            <label class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" name="remember" class="custom-control-input">
                                <span class="custom-control-label"> Nhớ tài khoản </span>
                            </label>

                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Đăng nhập
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->
@endsection
@section('js')
@endsection