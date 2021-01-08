@extends('layouts.app')

@section('content')
<div class="container-xl pt-4">
    @if ($message = Session::get('success'))
        <div class="alert alert-success text-center">
            <p class="mb-0">{{ $message }}</p>
        </div>
    @endif
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
            <!-- <div class="container border d-flex align-items-center py-3 mb-2">
                <div><span class="text-primary">Answer to </span>{{ $post->message }}</div>
            </div> -->
            <div class="question-content-container border mb-3">
                <div class="profile-container d-flex w-100 p-3 mb-3">
                    <div class="profile d-flex">
                        <img src="{{ asset('assets/recentshare/profile.png') }}" alt="" class="profile-pic mr-2 rounded-circle">
                        <div class="profile-info d-flex flex-column">
                            <span>
                                <span class="name text-black text-bold">{{ $post->user->first_name }} {{ $post->user->last_name }}</span>
                                <span class="date text-secondary">{{ $post->posted_at->diffForHumans() }}</span>
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
                        <p>{{ $post->message }}</p>
                    </div>
                </div>
                <div class="reaction-container">
                    <div class="d-flex border-top">
                        <span class="emoji-box btn border-right rounded-0">
                            <div class="emoji-picker" style="margin-bottom:-45px;">
                                <form action="{{ route('answers.likePost',$post->id) }}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-around align-items-center">
                                        <input type="submit" class="bg-transparent border-0" name="emoji" value="👍">
                                        <input type="submit" class="bg-transparent border-0" name="emoji" value="👎">
                                        <input type="submit" class="bg-transparent border-0" name="emoji" value="❤️">
                                        <input type="submit" class="bg-transparent border-0" name="emoji" value="👏">
                                    </div>
                                </form>
                            </div>
                            <i class="fas fa-smile text-secondary" aria-hidden="true"></i>
                        </span>
                        <form class="d-flex" action="{{ route('answers.likePost',$post->id) }}" method="POST">
                            @csrf  
                            @foreach($reacts_Post as $react_post)
                                @if( App\Models\React::where('user_id',Auth::user()->id)->exists() && $react_post->reactEmoji->id ===  (App\Models\React::select('reactionEmoji')->where('user_id',Auth::user()->id)->first()->reactionEmoji))
                                    <input class="reaction-emoji bg-primary btn border-right rounded-0" type="submit" name="emoji" value="{{ $react_post->reactEmoji->emojiImage }} {{ $react_post->reactAmount }}">
                                @else
                                    <span class="reaction-emoji btn border-right rounded-0" style="cursor:auto;">{{ $react_post->reactEmoji->emojiImage }} {{ $react_post->reactAmount }}</span>
                                @endif
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column profile-container">
                <div class="profile-form p-3 d-flex border w-100">
                    <div class="profile d-flex">
                        <img class="profile-pic mr-2 rounded-circle" src="/assets/recentshare/profile.png" alt=""/>
                        <div class="profile-info d-flex flex-column">
                            <span>
                                <span class="name text-black text-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                <span class="date text-secondary"> - 01 Dec 2020</span>
                            </span>
                            <span>
                                <span class="major text-secondary">Ba, {{ Auth::user()->major }} at </span>
                                <a class="school text-primary" href="#">NIPTICT</a>
                            </span>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                    @error('comment_content')
                        <div class="alert alert-danger mb-0 rounded-0">{{ $message }}</div>
                    @enderror
                @endif
                <form action="{{ route('answers.comment',$post->id) }}" method="POST">
                    @csrf
                    <div class="text-area">
                        <textarea class="w-100 border-top-0 border-bottom-0 border" placeholder="Answer a question..." name="comment_content" id="comment_content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="publish-container w-100 d-flex justify-content-between border">
                        <span class="align-self-center">
                            <span class="privacy text-dark text-decoration-none"><i class="fas fa-globe-asia mx-2"></i>Everyone can see</span>
                        </span>
                        <input type="submit" class="btn btn-primary rounded-0 text-white text-decoration-none" name="comment" value="Comment">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="comment-title text-center bg-light border rounded-0 px-6 py-3 mb-3">
                <span>Comments</span>
            </div>
            <div class="comment-container">
                @if($post->comments->count() !== 0)
                    @foreach($post->comments as $comment)
                        <div class="comment-section-container mb-3">
                            <div class="comment-content border">
                                <div class="answer-content p-2">
                                    <div class="profile d-flex">
                                        <img class="profile-pic mr-1 rounded-circle" src="/assets/recentshare/profile.png" alt=""/>
                                        <div class="profile-info d-flex flex-column">
                                            <span>
                                                <span class="name text-black text-bold">{{ $comment->user->first_name }} {{ $comment->user->last_name }}</span>
                                                <span class="date text-secondary">{{ $comment->commented_at->diffForHumans() }}</span>
                                            </span>
                                            <span>
                                                <span class="major text-secondary">Ba, {{ $comment->user->major }} at </span>
                                                <a class="school text-primary" href="#">NIPTICT</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="answer-text mt-3">
                                        <p class="mb-2">{{ $comment->message }}</p>                            
                                    </div>
                                </div>
                                <div class="reaction-container">
                                    <div class="d-flex border-top">
                                    <span class="emoji-box btn border-right rounded-0">
                                        <div class="emoji-picker" style="margin-bottom:-45px;">
                                            <form action="{{ route('answers.likeComment',$comment->id) }}" method="POST">
                                                @csrf
                                                <div class="d-flex justify-content-around align-items-center">
                                                    <input type="submit" class="bg-transparent border-0" name="emoji" value="👍">
                                                    <input type="submit" class="bg-transparent border-0" name="emoji" value="👎">
                                                    <input type="submit" class="bg-transparent border-0" name="emoji" value="❤️">
                                                    <input type="submit" class="bg-transparent border-0" name="emoji" value="👏">
                                                </div>
                                            </form>
                                        </div>
                                        <i class="fas fa-smile text-secondary" aria-hidden="true"></i>
                                    </span>
                                        <form class="d-flex" action="{{ route('answers.likeComment',$comment->id) }}" method="POST">
                                            @csrf  
                                            @foreach(App\Models\React_Comment::getAmountReact($comment->id) as $react)
                                                @if(App\Models\React_Comment::existReact($react->reactEmoji->id,$react->comment_id))
                                                    <input class="reaction-comment-emoji bg-primary btn border-right rounded-0" type="submit" name="emoji" value="{{ $react->reactEmoji->emojiImage }} {{ $react->reactAmount }}">
                                                @else
                                                    <span class="btn border-right rounded-0" style="cursor:auto;">{{ $react->reactEmoji->emojiImage }} {{ $react->reactAmount }}</span>
                                                @endif
                                            @endforeach
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div> 
</div>
@endsection