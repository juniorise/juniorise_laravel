@extends('layouts.home_layout')

@section('content')
<div class="container vertical-center">
    <div class="d-flex justify-content-between section-1">      
        <div class="left-side w-50">
            <h1 class="font-weight-bold">Don’t make your seniors <span class="text-primary">mistake</span> your mistake!</h1>
            <h5>Join us now for our future bright</h5>
            <form>
                <div class="form-group">
                  <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary rounded-0">Submit</button>
            </form>
        </div>
        <div class="right-side d-flex justify-content-center w-50">
            <img class="w-75" src="{{ asset('assets/home/graduate.svg') }}" alt="">
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container vertical-center" style="padding: 3em 0 6em;">
        <div class="section-2 d-flex justify-content-between">
            <div class="left-side">
                <h2 class="font-weight-bold">
                    Upload a<span class="highlight text-white"> 
                    question to 
                    </span>let your senior know your problem
                </h2>
            </div>
            <div class="right-side w-50">
                <img class="img-1" class="w-50" src="{{ asset('assets/home/comments.svg') }}" alt="">
                <img class="img-2" class="w-50" src="{{ asset('assets/home/comments.svg') }}" alt="">
                <img class="img-3" class="w-50" src="{{ asset('assets/home/comments.svg') }}" alt="">
                <img class="img-4" class="w-50" src="{{ asset('assets/home/comments.svg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container bg-white section-3">
    <div class="useful">
        <div class="circle-icon bg-primary">
            <i class="fa fa-users"></i>
        </div>
        <h5>Help educator who have struggle</h5>
    </div>
    <div class="useful">
        <div class="circle-icon bg-success">
            <i class="fa fa-users"></i>
        </div>
        <h5>Earn reputation while helping other</h5>
    </div>
    <div class="useful">
        <div class="circle-icon bg-danger">
            <i class="fa fa-users"></i>
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
<div class="bg-light">
    <div class="container">
        <div class="section-4">
            <h1 class="font-weight-bold">Join with us<span class="text-primary"> now!</span></h1>            
            <form>
                <div class="w-50">
                    <div class="form-group">
                        <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>
                <p>By clicking Agree & Join, you agree to the Juniorise User Agreement, Privacy Policy, and Cookie Policy.</p>
                <button type="submit" class="btn btn-primary rounded-0">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
