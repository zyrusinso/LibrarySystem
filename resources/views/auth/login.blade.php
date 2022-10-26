@extends('auth.layouts.master')

@section('title')Login | Library
@endsection

@push('css')

@endpush

@section('content')
    <section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form" action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="text-center">
                            <h4>Login</h4>
                            <h6>Welcome back! Log in to your account.</h6>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-email" style="color: #0d6efd !important;"></i></span>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" autocomplete="email" required="" placeholder="Test@gmail.com" value="{{ old('email') }}"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-lock" style="color: #0d6efd !important;"></i></span>
                                <input class="form-control @error('password') is-invalid @enderror"" type="password" name="password" required="" placeholder="*********" autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                                <label for="remember">Remember password</label>
                            </div>
                        </div>
                        <div class="form-group loginBtnMobile">
                            <button class="btn btn-primary btn-block" type="submit" style="background-color: #0d6efd !important; border-color: #0d6efd !important">Sign in</button>
                        </div>
                        <div class="login-social-title">
                            <h5>Notice!</h5>
                        </div>
                        <p>This login is only for administrator and staff<a class="ms-2" href="{{ route('index') }}" style="color:#0d6efd !important">Go back</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

	
    @push('scripts')
    @endpush

@endsection
