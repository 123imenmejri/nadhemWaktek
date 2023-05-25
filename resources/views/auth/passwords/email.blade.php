@extends('layouts.app')

@section('content')
<div class="rbt-newsletter-area bg-color-white rbt-section-gap">
    <div class="container bg-gradient-5 newsletter-style-1">
        <div class="row row--15 align-items-center">
            <div class="col-lg-12 col-xl-7">
                <div class="inner">
                    <div class="section-title text-center text-xl-start">
                        <span class="subtitle bg-secondary-opacity">Did u forgot your password</span>
                        <h2 class="title"><strong>Reset</strong> Your Password</h2>
                        <p class="description mt--20">check your mail , you'll get a link to reset your password.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-5 mt_lg--30 mt_md--30 mt_sm--30">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" class="newsletter-form-1"  action="{{ route('password.email') }}">
                    @csrf
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">

                        <span class="icon-reverse-wrapper">
                    <span class="btn-text">Reset Link</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
