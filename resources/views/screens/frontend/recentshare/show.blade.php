@extends('layouts.app')
@section('content')
<div class="container-xl pt-4">
    @if ($message = Session::get('success'))
        <div class="alert alert-success text-center">
            <p class="mb-0">{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-xl-3 col-lg-3 category">
            <div class="card">
            <div class="card-header">Choose your desire major</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item category {{ request()->is('recentshare/computer-science') ? 'bg-primary text-white' : '' }}  "><a class="text-decoration-none {{ request()->is('recentshare/computer-science') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/computer-science">Computer Science</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/network-telecom') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/network-telecom') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/network-telecom">Network & Telecom</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/architecture') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/architecture') ? 'text-white' : 'text-secondary' }} " href="{{ route('recentshare') }}/architecture">Architecture</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/civil-engineer') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/civil-engineer') ? 'text-white' : 'text-secondary' }} " href="{{ route('recentshare') }}/civil-engineer">Civil Engineer</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/doctor') ? 'bg-primary text-white' : '' }} "><a  class="text-decoration-none {{ request()->is('recentshare/doctor') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/doctor">Doctor</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/biology-engineer') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/biology-engineer') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/biology-engineer">Biology Engineering</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="d-flex flex-column profile-container">
                <div class="profile-form p-3 d-flex border w-100">
                    <div class="profile d-flex">
                        @if(Auth::user()->profilePath !== null)
                            <img class="profile-pic mr-2 rounded-circle" src="{{ asset('assets/images') }}/{{ Auth::user()->profilePath }}" alt=""/>
                        @else
                            <img class="profile-pic mr-2 rounded-circle" src="/assets/recentshare/profile.png" alt=""/>
                        @endif
                        <div class="profile-info d-flex flex-column">
                            <span>
                                <span class="name text-black text-bold">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
                            </span>
                            <span>
                                <span class="major text-secondary">Ba, {{ Auth::user()->major }} at </span>
                                @if(Auth::user()->school != null)
                                    <a class="school text-primary" href="#">{{ Auth::user()->school }}</a>
                                @else
                                    <a class="school text-primary" href="#">UNKNOWN</a>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                    @error('post_content')
                        <div class="alert alert-danger mb-0 rounded-0">{{ $message }}</div>
                    @enderror
                    @error('category')
                        <div class="alert alert-danger mb-0 rounded-0">{{ $message }}</div>
                    @enderror
                @endif
                <form action="{{ route('recentshare') }}" method="POST" >
                    @csrf
                    <div class="text-area">
                        <textarea class="w-100 border-top-0 border-bottom-0 border" placeholder="Ask a question..!" name="post_content" id="post_content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="publish-container w-100 d-flex justify-content-between border">
                        <span class="align-self-center">
                        <select class="custom-select select-category rounded-0" name="category">
                            <option selected hidden disabled>Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        </span>
                        <input type="submit" class="btn btn-primary rounded-0 text-white text-decoration-none" name="publish" value="Publish">
                    </div>
                </form>
            </div>
            @foreach($posts as $post)
                <div class="share-post-container border mt-3">
                    <div class="profile-container p-3">
                        <div class="profile d-flex">
                            @if($post->user->profilePath !== null)
                                <img class="profile-pic mr-2 rounded-circle" src="{{ asset('assets/images') }}/{{ $post->user->profilePath }}" alt=""/>
                            @else
                                <img class="profile-pic mr-2 rounded-circle" src="/assets/recentshare/profile.png" alt=""/>
                            @endif
                            <div class="profile-info d-flex flex-column">
                                <span>
                                    <span class="name text-black text-bold">{{ $post->user->first_name }} {{ $post->user->last_name }}</span>
                                    <span class="date text-secondary"> - {{ $post->posted_at->diffForHumans() }}</span>
                                </span>
                                <span>
                                    <span class="major text-secondary">{{ $post->user->major }} at </span>
                                    @if($post->user->school != null)
                                        <a class="school text-primary" href="#">{{ $post->user->school }}</a>
                                    @else
                                        <a class="school text-primary" href="#">UNKNOWN</a>
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="question-container mt-2">
                            <span class="text-primary">Answer a question: </span>
                            <span class="question">{{ $post->message }}</span>
                        </div>
                    </div>
                    <div class="reaction-cmt border border-left-0 border-bottom-0 border-right-0 w-100">
                        <div class="row">
                            <div class="emoji d-flex col-xl-6 col-lg-5 col-md-4 col-5">
                                <div class="reaction-container">
                                    <div class="d-flex">
                                        @foreach(App\Models\React::getAmountReact($post->id) as $react)
                                            <span class="btn border-right rounded-0" style="cursor:auto;">{{ $react->reactEmoji->emojiImage }} {{ $react->reactAmount }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="cmt-btn d-flex justify-content-end col-xl-6 col-lg-7 col-md-8 col-7">
                                <div class="btn rounded-0 border border-top-0 border-bottom-0  px-2 d-flex align-items-center">
                                    <a class="text-decoration-none text-dark" href="{{ route('answers',$post->id) }}"><i class="fas fa-comment-alt mr-2" style="font-size: 14px;" aria-hidden="true"></i>@if ($post->comments->count() !== 0) {{ $post->comments->count() }} @endif</a>
                                </div>
                                <div class="btn rounded-0 border border-primary text-primary px-2">
                                    <a class="text-decoration-none " href="{{ route('answers',$post->id) }}">Read Answer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-xl-3 col-lg-3 profile-card">
            <div class="card">
                @if(Auth::user()->profilePath !== null)
                    <img class="card-img-top" src="{{ asset('assets/images') }}/{{ Auth::user()->profilePath }}" alt=""/>
                @else
                    <img class="card-img-top" src="/assets/recentshare/profile-card.png" alt="Card image cap"/>
                @endif
                <div class="card-header">{{ Auth::user()->reputation }} reputations</div>
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6>
                    <p class="card-text">{{ Auth::user()->description }}</p>
                    <a class="btn btn-primary rounded-0 open_modal">Edit your profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
