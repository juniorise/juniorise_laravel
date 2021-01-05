@extends('layouts.admin')

@section('content')
<div class="content-manage-post">
<div class="side-bar">
    <div class="bar">
        <ul class="list">
            <li class="list-item"><a class="link" href="dashboard">Dashboard</a></li>
            <li class="list-item link-active"><a class="link" href="manage-post">Manage Post</a></li>
            <li class="list-item"><a class="link" href="user-account">User Account</a></li>
            <li class="list-item"><a class="link" href="query-select">Query Select</a></li>
        </ul> <!--! list-->
    </div> <!--! bar-->
    <div class="version">
        <p>V.1.2.0</p>
    </div> <!--! version-->
</div> <!--! side-bar-->

<div class="main">
    <div class="user-activities">
        <div class="recent-post">
            <p class="title">Recent posts</p>
            <div class="posted-reacted">

                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                @endif
                @foreach ($messages as $message)
                    <!-- TODO to use more copy whole div with class "user-posting" -->
                    <div class="user-posting">
                        <div class="posted">
                            <div class="profile">
                                <div class="profile-info">
                                    <img src={{$message->user->profilePath}} alt="profile">
                                    <div class="short-info">
                                        <p class="username">{{$message->user->first_name}} {{$message->user->last_name}}<span class="join-date"> - {{ $message->posted_at->diffForHumans() }}</span></p>
                                        <p class="major">BA. {{$message->user->major}} at <a href="#">{{$message->user->school}}</a></p>
                                    </div> <!--! short-info-->
                                </div> <!--! profile-info-->
                                <div class="delete">
                                    <button type="submit"><a class="btn btn-danger" href="{{ route('delete.post',$message->id) }}">Delete</a></button>
                                </div>
                            </div> <!--! profile-->
                            <div class="question">
                                <p class="answer-question">
                                    <span>Answer a question: </span>
                                    {{$message->message}}
                                </p>
                            </div> <!--! question-->
                        </div> <!--! posted-->
                        <div class="reacted-commented">
                            <div class="reacted">
                                <p class="i-con"><i class="fas fa-heart"></i><span> 10</span></p>
                                <p class="i-con"><i class="fas fa-sign-language"></i><span> 22</span></p>
                                <p class="i-con"><i class="fas fa-thumbs-up"></i><span> 22</span></p>
                            </div> <!-- ! reacted-->
                            <div class="commented">
                                <p>
                                    <span><i class="fas fa-comment-alt"></i></span>
                                    <span>20</span>
                                    comments
                                </p>
                            </div> <!--! comments--->
                            <div class="read-answer">
                                <p>Read answer</p> <!--! read-answer-->
                            </div>
                        </div> <!--! reacted-->
                    </div> <!--! user-posting-->
                @endforeach
            </div> <!--! posted-reacted -->
            <p class="see-more">Load more</p>
        </div> <!--!recent-post-->
    </div> <!--! user-activities-->

    <div class="recent-question">
        <p class="title">Recent Questions</p>
        <div class="user">
            <div class="activities">
                {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                @endif --}}
                @foreach ($messages as $message)
                <!-- TODO to use more copy whole div with class "user-question" -->
                    <div class="user-question">
                        <div class="posted">
                            <div class="profile">
                                <div class="profile-info">
                                    <img src={{$message->user->profilePath}} alt="profile">
                                    <div class="short-info">
                                        <p class="username">{{$message->user->first_name}} {{$message->user->last_name}}<span class="join-date"> - {{ $message->posted_at->diffForHumans() }}</span></p>
                                        <p class="major">BA. {{$message->user->major}} at <a href="#">{{$message->user->school}}</a></p>
                                    </div> <!--! short-info-->
                                </div> <!--! profile-info-->
                            </div> <!--! profile-->
                            <div class="question">
                                <p class="answer-question">
                                    {{$message->message}}
                                </p>
                            </div> <!--! question-->
                        </div> <!--! posted-->
                        <div class="approval">
                            <div class = "delete">
                                <p class="ap-de"><a style="color: red;" href="{{ route('delete.post',$message->id) }}">Delete</a></p>
                            </div>
                            <div class="duplicate">
                                <p class="ap-du">Duplicate question</p>
                            </div>
                        </div> <!--! delete-->
                    </div> <!--! user-question-->
                @endforeach


            </div> <!--! activities-->
        </div> <!--! user-->
    </div> <!--! recent-question-->
</div> <!--! main-->
</div> <!--! content-manage-post-->

@endsection
