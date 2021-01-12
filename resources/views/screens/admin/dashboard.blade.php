@extends('layouts.admin')

@section('content')

<div class="content-dashboard">
<div class="side-bar">
    <div class="bar">
        <ul class="list">
            <li class="list-item link-active"><a class="link" href="dashboard">Dashboard</a></li>
            <li class="list-item"><a class="link" href="manage-post">Manage Post</a></li>
            <li class="list-item"><a class="link" href="user-account">User Account</a></li>
        </ul> <!--! list-->
    </div> <!--! bar-->

    <div class="version">
        <p>V.1.2.0</p>
    </div> <!--! version-->
</div> <!--! side-bar-->

<div class="main">
    <div class="user-board">
        <div class="card-1">
            <div class="user">
                <p class="number">{{$count_user->userAmount}}</p>
                <p class="type">users</p>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div> <!--! card-1-->

        <div class="card-2">
            <div class="user">
                <p class="number">{{$count_post->postAmount}}</p>
                <p class="type">questions</p>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div> <!--! card-2-->

        {{-- <div class="card-3">
            <div class="user">
                <p class="number">10000</p>
                <p class="type">visiters</p>
                <p class="add-on"></p>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div> <!--! card-3--> --}}

    </div> <!--! user-board-->

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
                    {{-- TODO main layout user question answer comment --}}
                    <div class="user-posting">
                        <div class="posted">
                            <div class="profile">

                                    <div class="profile-info">
                                        <img src={{$message->user->profilePath}} alt="profile">
                                        <div class="short-info">
                                            <p class="username"> {{ $message->user->first_name }} {{ $message->user->last_name }} <span class="join-date"> - {{ $message->posted_at->diffForHumans() }} </span></p>
                                            <p class="major">{{$message->user->major}} <a href="#">{{$message->user->school}}</a></p>
                                        </div> <!--! short-info-->
                                    </div> <!--! profile-info-->

                                <div class="delete">
                                    <button type="submit"><a class="btn btn-danger" href="{{ route('deleteDashboard.post',$message->id) }}">Delete</a></button>
                                </div>
                            </div> <!--! profile-->
                            <div class="question">
                                <p class="answer-question">
                                    <span>Answer a question: </span>
                                    {{$message->message}}
                                </p>
                            </div> <!--! question-->
                        </div> <!--! posted-->
                        <div class="reacted-commented"> <!--? reacted -->
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

            <p class="see-more">See more</p>
        </div> <!--! recent-post-->

        <div class="recent-create-account">
            <p class="title">Recent new created  account</p>
            <div class="created-account">
                <div class="account">
                    <div class="user-account">
                         @foreach ($users as $user)

                            <!-- TODO to use more copy whole div with class "posted" -->
                            <div class="posted">
                                <div class="profile">
                                    <div class="profile-info">
                                        <img src="{{$user->profilePath}}" alt="profile">
                                        <div class="short-info">
                                            <p class="username"> {{ $user->first_name }} {{ $user->last_name }} <span class="join-date"> - {{ $user->created_at->diffForHumans() }} </span></p>
                                            <p class="major">BA. {{$user->major}} at <a href="#">{{$user->school}}</a></p>
                                        </div> <!--! short-info-->
                                    </div> <!--! profile-info-->
                                </div> <!--! profile-->
                                <div class="question">
                                    <p class="answer-question">
                                        {{$user->created_at}}
                                    </p>
                                </div> <!--! question-->
                            </div> <!--! posted-->
                        @endforeach
                    </div> <!--! user-account-->
                </div> <!-- !account-->
            </div> <!--! created-account-->
            <p class="see-more">See more</p>
        </div> <!--! recent-create-account-->

    </div> <!--! user-activities-->

    <div class="admin-activities">
        <p class="title">Recent admin activities</p>
        <div class="admin">
            <div class="activities">
                <!-- TODO to use more copy whole div with class "profile-info" -->
                <div class="profile-info">
                    <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                    <div class="short-info">
                        <p class="username">Sok san <span class="modify-date"> - 1 Dec 2020</span></p>
                        <p class="info">Modified user name and password</p>
                    </div> <!--! short-info-->
                </div> <!--! profile-info-->

            </div> <!--! activities-->

        </div> <!--! admin-->

    </div> <!--! admin-activities-->

</div> <!--! main-->

</div> <!--! content-dashboard-->

@endsection
