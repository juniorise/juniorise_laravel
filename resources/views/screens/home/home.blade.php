@extends('layouts.home')

@section('content')
    <div class="container vertical-center">
        <div class="d-flex justify-content-between section-1">
            <div class="left-side w-50">
                <h1 class="font-weight-bold">Don’t make your seniors <span class="text-primary">mistake</span> your mistake!
                </h1>
                <h5>Join us now for our future bright</h5>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter your email"
                            name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter a password"
                            name="password" value="{{ old('password') }}" required autofocus>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-0">Log in</button>
                </form>
            </div>
            <div class="right-side d-flex justify-content-center w-50">
                <img class="w-75" src="{{ asset('assets/home/graduate.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="section-2 d-flex justify-content-between">
                <div class="left-side">
                    <h2 class="font-weight-bold">
                        Upload a<span class="highlight text-white">
                            question to
                        </span>let your senior know your problem
                    </h2>
                </div>
                <div class="right-side w-50">
                    <img class="img-1" class="w-50" src="{{ asset('assets/home/comments0.svg') }}" alt="">
                    <img class="img-2" class="w-50" src="{{ asset('assets/home/comments1.svg') }}" alt="">
                    <img class="img-3" class="w-50" src="{{ asset('assets/home/comments2.svg') }}" alt="">
                    <img class="img-4" class="w-50" src="{{ asset('assets/home/comments3.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-white section-3">
        <div class="useful">
            <div class="circle-icon bg-primary">
                <i class="fas fa-hands-helping"></i>
            </div>
            <h5>Help educator who have struggle</h5>
        </div>
        <div class="useful">
            <div class="circle-icon bg-success">
                <i class="fas fa-star"></i>
            </div>
            <h5>Earn reputation while helping other</h5>
        </div>
        <div class="useful">
            <div class="circle-icon bg-danger">
                <i class="fa fa-heart"></i>
            </div>
            <h5>Keep in touch with educator</h5>
        </div>
        <div class="useful">
            <div class="circle-icon bg-info">
                <i class="fa fa-users"></i>
            </div>
            <h5>Share your experience to everyone</h5>
        </div>
    </div>
    <div style="height: 10vh"></div>
    <div class="bg-light" id="section-4">
        <div class="container">
            <div class="section-4">
                <h1 class="font-weight-bold">Join with us<span class="text-primary"> now!</span></h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="d-flex justify-content-between">
                        <div class="w-50">
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Enter your name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Firstname"
                                name="first_name" value="{{ old('first_name') }}" required autofocus>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" placeholder="Lastname"
                                name="last_name" value="{{ old('last_name') }}" required autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="width: 47px !important;">🎓</div>
                                </div>
                                <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" placeholder="Enter your major, eg. CS student"
                                name="major" value="{{ old('major') }}" required autofocus>
                                @error('major')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="helper" style="width: 24px !important;"></div>
                        <div class="w-50">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" style="width: 47px !important;">✉️</div>
                                    </div>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Enter your email"
                                    name="email" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <small id="emailHelp" class="form-text text-muted">ℹ We'll never share your email with anyone else.</small>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="width: 47px !important;">🔑</div>
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter a password"
                                name="password" value="{{ old('password') }}" required autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="width: 47px !important;">🔓</div>
                                </div>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Enter confirm password"
                                name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <p>By clicking Agree & Join, you agree to the Juniorise User Agreement, Privacy Policy, and Cookie
                        Policy.</p>
                    <button type="submit" class="btn btn-primary rounded-0">{{ __('Register') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
