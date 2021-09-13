@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-lg-5" style="padding-top: 50px;">
                <div class="text-center">
                    <img src="{{ asset('images/logo-black.png') }}" class="my-4" height="120" width="130" alt="rc logo">
                </div>

                <div class="card">
                    {{--                    <div class="card-header">{{ __('Login') }}</div>--}}


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                       autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary form-control">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>

                            <hr class="m-0 p-0">


                            <div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
