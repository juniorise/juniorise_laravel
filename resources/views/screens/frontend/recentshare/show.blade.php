@extends('layouts.app')
@section('content')
<div class="container-xl mt-4 pt-4">
    <div class="row">
        <div class="col-xl-3 col-lg-3 category">
            <div class="card">
            <div class="card-header">Choose your desire major</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item category {{ request()->is('recentshare/computer-science') ? 'bg-primary text-white' : '' }}  "><a class="text-decoration-none {{ request()->is('recentshare/computer-science') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/computer-science">Computer Science</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/network-telecom') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/network-telecom') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/network-telecom">Network & Telecom</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/architecture') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/architecture') ? 'text-white' : 'text-secondary' }} " href="{{ route('recentshare') }}/architecture">Architecture</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/cvil-engineer') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/cvil-engineer') ? 'text-white' : 'text-secondary' }} " href="{{ route('recentshare') }}/cvil-engineer">Civil Engineer</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/doctor') ? 'bg-primary text-white' : '' }} "><a  class="text-decoration-none {{ request()->is('recentshare/doctor') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/doctor">Doctor</a></li>
                    <li class="list-group-item category {{ request()->is('recentshare/biology-engineer') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('recentshare/biology-engineer') ? 'text-white' : 'text-secondary' }}" href="{{ route('recentshare') }}/biology-engineer">Biology Engineering</a></li>
                </ul>
            </div>
            <input class="border w-100 p-2 my-3" style="outline:none;" type="text" placeholder="Search for a major"/>
            <div class="btn border btn-primary mb-3 rounded-0">
                <a class="text-white text-decoration-none" href="#">Search</a>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="d-flex flex-column profile-container">
                <div class="profile-form p-3 d-flex border w-100">
                    <div class="profile d-flex">
                        <img class="profile-pic mr-2 rounded-circle" src="/assets/recentshare/profile.png" alt=""/>
                        <div class="profile-info d-flex flex-column">
                            <span>
                                <span class="name text-black text-bold">Sok San</span>
                                <span class="date text-secondary"> - 01 Dec 2020</span>
                            </span>
                            <span>
                                <span class="major text-secondary">Ba, Computer Science at </span>
                                <a class="school text-primary" href="#">NIPTICT</a>
                            </span>
                        </div>
                    </div>
                </div>
                <form action="">
                    <div class="text-area">
                        <textarea class="w-100 border-top-0 border-bottom-0 border" placeholder="Ask a question..!" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="publish-container w-100 d-flex justify-content-between border">
                        <span class="align-self-center">
                            <span class="privacy text-secondary text-decoration-none" href="#"><i class="fas fa-globe-asia mx-2"></i>Everyone can answer</span>
                        </span>
                        <input type="submit" class="btn btn-primary rounded-0 text-white text-decoration-none" name="publish" value="Publish">
                    </div>
                </form>
            </div>
            <div class="share-post-container border mt-3">
                <div class="profile-container p-3">
                    <div class="profile d-flex">
                        <img class="profile-pic mr-2 rounded-circle" src="/assets/recentshare/profile.png" alt=""/>
                        <div class="profile-info d-flex flex-column">
                            <span>
                                <span class="name text-black text-bold">Sok San</span>
                                <span class="date text-secondary"> - 01 Dec 2020</span>
                            </span>
                            <span>
                                <span class="major text-secondary">Ba, Computer Science at </span>
                                <a class="school text-primary" href="#">NIPTICT</a>
                            </span>
                        </div>
                    </div>
                    <div class="question-container mt-2">
                        <span class="text-primary">Answer a question: </span>
                        <span class="question">What to do after graduate from high school and want to study Computer Science?</span>
                    </div>
                </div>
                <div class="reaction-cmt border border-left-0 border-bottom-0 border-right-0 w-100">
                    <div class="row">
                        <div class="emoji d-flex col-xl-6 col-lg-5 col-md-4 col-5">
                            <div class="btn p-0 emoji-reaction d-flex justify-content-around align-self-center mx-1">
                                <span class="heart emoji-icon align-self-center text-black"> 10</span>
                            </div>
                            <div class="btn p-0 emoji-reaction d-flex justify-content-around align-self-center mx-1">
                                <span class="heart emoji-icon align-self-center text-black">👏 22</span>
                            </div>
                        </div>
                        <div class="cmt-btn d-flex justify-content-end col-xl-6 col-lg-7 col-md-8 col-7">
                            <div class="btn rounded-0 border border-top-0 border-bottom-0  px-2">
                                <i class="fas fa-comment-alt mr-2" style="font-size: 14px;" aria-hidden="true"></i>
                                <a class="text-decoration-none text-dark" href="/answers">22 Comments</a>
                            </div>
                            <div class="btn rounded-0 border border-primary text-primary px-2">
                                <a class="text-decoration-none " href="/answers">Read Answer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 profile-card">
            <div class="card">
                <img class="card-img-top" src="/assets/recentshare/profile-card.png" alt="Card image cap"/>
                <div class="card-header">20k reputations</div>
                <div class="card-body">
                    <h5 class="card-title">Sok San</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Computer Science</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary rounded-0">Edit your profile</a>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection
