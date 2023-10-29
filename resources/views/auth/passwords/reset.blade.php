@extends('layouts.master_auth_project')
@section('content')
    <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card bg-pattern">

            <div class="card-body p-4">

                <div class="text-center w-75 m-auto">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="22">
                                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="22">
                                            </span>
                        </a>
                    </div>
                </div>
                <br><br><br>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">ایمیل / پست الکترونیک</label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">رمز / گذرواژه</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="رمز / گذرواژه جدید خود را وارد کنید ..." name="password" required autocomplete="new-password">


                            @error('password')
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">تایید رمز / گذرواژه</label>
                        <div class="input-group input-group-merge">
                            <input name="password_confirmation" type="password" id="password_confirmation" placeholder="رمز / گذرواژه جدید خود را وارد کنید ..." class="form-control @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
                            @error('password_confirmation')
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit"> وارد شوید </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                رمز / گذرواژه خود را وارد کردید؟
                            </a>
                        @endif
                    </div>

                </form>



            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">رمز/ گذرواژه خود را فراموش کردید ؟</a></p>
                <p class="text-white-50"> حساب کاربری ندارید ؟ <a href="{{ route('register') }}" class="text-white ms-1"><b>ثبت نام کتید  </b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
@endsection
