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

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">نام</label>
                    <input name="name" class="form-control @error('name') is-invalid @enderror " type="text" id="name" placeholder="لطفا نام خود را کنید ..." required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="emailaddress" class="form-label">ایمیل / پست الکترونیک</label>
                    <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress" required placeholder="ایمیل / پست الکترونیک خود را وارد کنید ...">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">رمز / گذرواژه</label>
                    <div class="input-group input-group-merge">
                        <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="رمز / گذرواژه خود را وارد کنید ...">
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
                        <input name="password_confirmation" type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="رمز / گذرواژه خود را وارد کنید ...">
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
                    <button class="btn btn-success" type="submit"> ثبت نام </button>
                </div>

            </form>


        </div> <!-- end card-body -->
    </div>
    <!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-white-50">از قبل حساب دارید ؟   <a href="{{ route('login') }}" class="text-white ms-1"><b> وارد شوید </b></a></p>
    </div> <!-- end col -->
</div>
    <!-- end row -->

</div> <!-- end col -->
@endsection
