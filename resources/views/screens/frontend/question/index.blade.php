@extends('layouts.app')
@section('content')
<div class="container-xl mt-4">
    <div class="row">
        <div class="col-xl-3 col-lg-3 category">
            <div class="card">
            <div class="card-header">Choose your desire major</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item category {{ request()->is('questions/computer-science') ? 'bg-primary text-white' : '' }}  "><a class="text-decoration-none {{ request()->is('questions/computer-science') ? 'text-white' : 'text-secondary' }}" href="{{ route('questions') }}/computer-science">Computer Science</a></li>
                    <li class="list-group-item category {{ request()->is('questions/network-telecom') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('questions/network-telecom') ? 'text-white' : 'text-secondary' }}" href="{{ route('questions') }}/network-telecom">Network & Telecom</a></li>
                    <li class="list-group-item category {{ request()->is('questions/architecture') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('questions/architecture') ? 'text-white' : 'text-secondary' }} " href="{{ route('questions') }}/architecture">Architecture</a></li>
                    <li class="list-group-item category {{ request()->is('questions/cvil-engineer') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('questions/cvil-engineer') ? 'text-white' : 'text-secondary' }} " href="{{ route('questions') }}/cvil-engineer">Civil Engineer</a></li>
                    <li class="list-group-item category {{ request()->is('questions/doctor') ? 'bg-primary text-white' : '' }} "><a  class="text-decoration-none {{ request()->is('questions/doctor') ? 'text-white' : 'text-secondary' }}" href="{{ route('questions') }}/doctor">Doctor</a></li>
                    <li class="list-group-item category {{ request()->is('questions/biology-engineer') ? 'bg-primary text-white' : '' }} "><a class="text-decoration-none {{ request()->is('questions/biology-engineer') ? 'text-white' : 'text-secondary' }}" href="{{ route('questions') }}/biology-engineer">Biology Engineering</a></li>
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
            <div class="tab-menu w-100 d-flex justify-content-around mt-2">
                <a class="btn border {{ request()->is('recentshare*') ? 'border-primary text-primary' : 'text-secondary' }} " href="/recentshare">Recent shared</a>
                <a class="btn border  {{ request()->is('questions*') ? 'border-primary text-primary' : 'text-secondary' }}   " href="/questions">Questions</a>
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
                            <span id="emoji-btn" class="emoji-box btn border-right rounded-0">
                                <div id="emoji-choice" class="emoji-picker">
                                    <form action="">
                                        <div class="d-flex justify-content-around align-items-center">
                                            <button class=" border-0">👍</button>
                                            <button class=" border-0">👎</button>
                                            <button class=" border-0">❤️</button>
                                            <button class=" border-0" >👏</button>
                                        </div>
                                    </form>
                                </div>
                                <i class="fas fa-smile text-secondary" aria-hidden="true"></i>
                            </span>
                            <div class="btn p-0 emoji-reaction d-flex justify-content-around align-self-center mx-1">
                                <span class="heart emoji-icon align-self-center text-black">❤️ 10</span>
                            </div>
                            <div class="btn p-0 emoji-reaction d-flex justify-content-around align-self-center mx-1">
                                <span class="heart emoji-icon align-self-center text-black">👏 22</span>
                            </div>
                        </div>
                        <div class="cmt-btn d-flex justify-content-end col-xl-6 col-lg-7 col-md-8 col-7">
                            <div class="btn rounded-0 border border-top-0 border-bottom-0  px-2">
                                <i class="fas fa-comment-alt mr-2" style="font-size: 14px;" aria-hidden="true"></i>
                                <a class="text-decoration-none text-dark" href="#">22 Comments</a>
                            </div>
                            <div class="btn rounded-0 border border-primary text-primary px-2">
                                <a class="text-decoration-none " href="#">Answer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="emoji-choice" class="emoji-picker">
                <form action="">
                    <div class="d-flex justify-content-around align-items-center">
                        <button class=" border-0">👍</button>
                        <button class=" border-0">👎</button>
                        <button class=" border-0">❤️</button>
                        <button class=" border-0" >👏</button>
                    </div>
                </form>
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