@extends('layouts.app')

@section('content')
<div class="container-xl mt-4">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="card">
            <div class="card-header">Choose your desire major</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item category  bg-primary text-white">Computer Science</li>
                    <li class="list-group-item category ">Network & Telecom</li>
                    <li class="list-group-item category ">Architecture</li>
                    <li class="list-group-item category ">Civil Engineer</li>
                    <li class="list-group-item category ">Doctor</li>
                    <li class="list-group-item category ">Biology Engineering</li>
                </ul>
            </div>
            <input class="border w-100 p-2 my-3" style="outline:none;" type="text" placeholder="Search for a major"/>
            <div class="btn border btn-primary mb-3 rounded-0">
                <a class="text-white text-decoration-none" href="#">Search</a>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 mb-3">
            <div class="question-content-container border mb-3">
                <div class="profile-container d-flex w-100 p-3 mb-3">
                    <div class="profile d-flex">
                        <img src="{{ asset('assets/recentShare/profile.png') }}" alt="" class="profile-pic mr-2 rounded-circle">
                        <div class="profile-info d-flex flex-column">
                            <span>
                                <span class="name text-black text-bold">Sok San</span>
                                <span class="date text-secondary">01 Dec 2020</span>
                            </span>
                            <span>
                                <span class="major text-secondary">Ba, Computer Science at</span>
                                <a class="school text-primary" href="#">NIPTICT</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="question-text-container px-3 mb-3">
                    <div class="text">
                        <p>Just Start You can’t go anywhere until you take that first step. You can’t go forward if you won’t move. 
                        You will never learn how to run if you don’t start walking. You can’t ever learn how to ride a bike unless you’re willing to fall, crash, and even get hurt. 
                        So, just start. The funny thing is, we can always come up with a hundred of reasons why things won’t work out, no matter what venture it is that we choose, even the daily activities like losing weight, or eating healthy, 
                        what more if we even dream of becoming a developer — and a self-taught one? And if we try to think of the reasons that maybe — just maybe it can work? Why is it so hard to see things from that perspective? Simply because it’s against our nature. It goes against our system, our education, our culture. Stop following the crowd, 
                        they don’t even know who they are or what they want! We will never know if we don’t try, we will never see what’s out there if we don’t give it a shot. Anything worth having will come from outside our comfort zone — just like I always say, we gotta do what we gotta do for that dream! Start small. Take a crash course — there’s a lot of free stuff on the internet.
                         I’ve got a lot of articles, free tools, free tutorials, all in a few clicks — now listen to yourself, what’s your excuse?
                        </p>
                    </div>
                </div>
                <div class="reaction-container">
                    <div class="d-flex border-top">
                        <span class="emoji-box btn border-right rounded-0">
                            <div class="emoji-picker" style="margin-bottom:-45px;">
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
                        <span class="reaction-emoji btn border-right rounded-0">❤️ 10</span>
                        <span class="reaction-emoji btn border-right rounded-0">👏 22</span>
                        <span class="reaction-emoji btn border-right rounded-0">👍 22</span>
                    </div>
                </div>
            </div>
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
                <div class="text-area">
                    <textarea class="w-100 border-top-0 border-bottom-0 border" placeholder="Ask a question..!" name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="publish-container w-100 d-flex justify-content-between border">
                    <span class="align-self-center">
                        <a class="privacy text-primary text-decoration-none" href="#"><i class="fas fa-globe-asia mx-2"></i>Everyone can answer</a>
                    </span>
                    <div class="btn btn-primary rounded-0">
                            <a class="text-white text-decoration-none" href="#">Publish</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="comment-title text-center bg-light border rounded-0 px-6 py-3 mb-3">
                <span>Comments</span>
            </div>
            <div class="comment-container">
                <div class="comment-section-container mb-3">
                    <div class="comment-content border">
                        <div class="answer-content p-2">
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
                            <div class="answer-text mt-3">
                                <p class="mb-2">Thank senior, I have learn alot from you, see you soon, I am registering!!</p>                            
                            </div>
                        </div>
                        <div class="reaction-container">
                            <div class="d-flex border-top">
                                <span class="emoji-box btn border-right rounded-0">
                                    <i class="fas fa-smile text-secondary" aria-hidden="true"></i>
                                </span>
                                <span class="reaction-comment-emoji btn border-right rounded-0">❤️ 10</span>
                                <span class="reaction-comment-emoji btn border-right rounded-0">👏 22</span>
                                <span class="reaction-comment-emoji btn border-right rounded-0">👍 22</span>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection