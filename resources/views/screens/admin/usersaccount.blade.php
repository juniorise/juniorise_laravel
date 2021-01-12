@extends('layouts.admin')
@section('content')
<div class="content-user-account">
    <div class="side-bar">
        <div class="bar">
            <ul class="list">
                <li class="list-item"><a class="link" href="/admin/dashboard">Dashboard</a></li>
                <li class="list-item"><a class="link" href="/admin/manage-post">Manage Post</a></li>
                <li class="list-item link-active"><a class="link" href="/admin/user-account">User Account</a></li>
            </ul> <!--! list-->
        </div> <!--! bar-->
        <div class="version">
            <p>V.1.2.0</p>
        </div> <!--! version-->
    </div> <!--! side-bar-->

    <div class="main">
        <div class="user-container">
            <p class="title">All user list</p>
            <div class="search-bar">
                <form method="GET" action="/admin/user-account/search" role="search">
                    @csrf
                    <input type="text" placeholder="Search user" name="keyword" value="{{ old('keyword') }}">
                    <button type="submit" class="btn btn-primary rounded-0 mt-2">Search</button>
                </form>
            </div> <!--!search-button-->
            @if(isset($users) AND count($users) > 0)
            <div class="user-list">
                @foreach ($users as $user)
                <div class="list">
                    <div class="profile-info">
                        <div class="img">
                            <img src="{{ isset($user->profilePath) ? $user->profilePath : asset('/assets/recentshare/profile.png') }}" alt="profile">
                        </div>
                        <div class="short-info">
                            <p class="username">{{ $user->first_name." ".$user->last_name }}<span class="modify-date"> -  Update at {{ $user->updated_at }}</span></p>
                            <p class="major">{{ $user->major }} <a href="#"></a></p>
                        </div> <!--! short-info-->
                    </div> <!--! profile-info-->
                    <div class="view-profile">
                        <a href="/admin/user-account/{{$user->id}}">View profile</a>
                    </div>
                </div> <!--! list-->
                @endforeach
            </div> <!--! user-list-->
            @endif
        </div> <!--! user-container-->
        @if(isset($current_user) AND $current_user != null)
        @php
            $_profilePath = isset($current_user->profilePath) ? $current_user->profilePath : asset('/assets/recentshare/profile.png');
            $_reputation = isset($current_user->reputation) ? $current_user->reputation : 0;
            $_first_name = isset($current_user->first_name) ? $current_user->first_name : "";
            $_last_name = isset($current_user->last_name) ? $current_user->last_name : "";
            $_email = isset($current_user->email) ? $current_user->email : "No email is provided";
            $_gender = isset($current_user->gender) ? $current_user->gender : "Unknown";
            $_major = isset($current_user->major) ? $current_user->major : "Unknown major";
            $_description = isset($current_user->description) ? $current_user->description : "No description provide";
            $_school = isset($current_user->school) ? $current_user->school : "Unknown school";
            $_update_at = isset($current_user->update_at) ? $current_user->update_at : "Unknown";
            $_create_at = isset($current_user->create_at) ? $current_user->create_at : "Unknown";
        @endphp
        <div class="small-detail">
            <div class="profile-card">
                <div class="card">
                    <img class="card-img-top p-4" src="{{ $_profilePath }}" alt="Card image cap"/>
                    <div class="card-header">{{ $_reputation }} reputations</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$_first_name." ".$_last_name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $_major." at ".$_school }}</h6>
                        <p class="card-text mb-2">{{ $_description }}</p>
                        <p class="card-text mb-2 text-muted">Email: {{ $_email }}</p>
                        <p class="card-text mb-2 text-muted">Gender: {{ $_gender }}</p>
                        <p class="card-text mb-2 text-muted">Update at: {{ $_update_at }}</p>
                        <p class="card-text mb-2 text-muted">Create at: {{ $_create_at }}</p>
                    </div>
                </div>
            </div>
        </div> <!--! small-detail-->
        @endif
    </div> <!--! main-->
</div> <!--! content-user-account-->
@endsection