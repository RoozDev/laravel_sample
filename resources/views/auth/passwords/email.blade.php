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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <br><br>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">ایمیل / پست الکترونیک</label>
                        <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress"  placeholder="ایمیل / پست الکترونیک خود را وارد کنید ..." value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit"> باز نشانی رمز عبور/ گذرواژه </button>
                    </div>

                </form>

            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-white-50">&nbsp;بازگشت به <a href="{{ route('login') }}" class="text-white ms-1"><b>  &nbsp;ورود </b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
@endsection
