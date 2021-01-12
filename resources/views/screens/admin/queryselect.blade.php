@extends('layouts.admin')

@section('content')
<div class="content-query-select">
    <div class="side-bar">
        <div class="bar">
            <ul class="list">
                <li class="list-item"><a class="link" href="dashboard">Dashboard</a></li>
                <li class="list-item"><a class="link" href="manage-post">Manage Post</a></li>
                <li class="list-item"><a class="link" href="user-account">User Account</a></li>
            </ul> <!--! list-->
        </div> <!--! bar-->
        <div class="version">
            <p>V.1.2.0</p>
        </div> <!--! version-->
    </div> <!--! side-bar-->

    <div class="main">
        <p class="title">All user list</p>
        <div class="query">
            <form action="">
                <input type="text" name="query" id="query" placeholder="Write query here... eg, show tables;">
                <button type="submit">Execute Query</button>
            </form>
        </div> <!--! query-->
        <div class="table">
            <div class="table-name">
                <p class="name">name</p>
                <p class="email">email</p>
                <p class="school">school</p>
                <p class="major">major</p>
                <p class="uid">uid</p>
            </div> <!--! table-name-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 16:06:22</p>
                    <p class="email">node</p>
                    <p class="school">delete</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 2 - Name xyz</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">
                    <p class="name">2002-03-04 13:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 3 - Name xyz</p>
                </div> <!--! data-holder-2-->
            </div> <!--!data-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 11:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 4 - Name xyz</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">
                    <p class="name">2002-03-04 10:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 2 - Name xyz</p>
                </div> <!--! data-holder-2-->
            </div> <!--!data-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 08:06:22</p>
                    <p class="email">node</p>
                    <p class="school">delete</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 2 - test</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">
                    <p class="name">2002-03-04 07:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Testname</p>
                </div> <!--! data-holder-2-->
            </div> <!--!data-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 06:06:22</p>
                    <p class="email">node</p>
                    <p class="school">delete</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 2 - duty abc</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">
                    <p class="name">2002-03-04 05:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">New entry for module 6</p>
                </div> <!--! data-holder-2-->
            </div> <!--!data-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 04:06:22</p>
                    <p class="email">node</p>
                    <p class="school">upload</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">New entry for module 8</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">
                    <p class="name">2002-03-04 02:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">User qwer adds entry for module 7</p>
                </div> <!--! data-holder-2-->
            </div> <!--!data-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 04:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 4 - Name xyz</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">
                    <p class="name">2002-03-04 10:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 2 - Name xyz</p>
                </div> <!--! data-holder-2-->
            </div> <!--!data-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 08:06:22</p>
                    <p class="email">node</p>
                    <p class="school">delete</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 2 - test</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">
                    <p class="name">2002-03-04 07:06:22</p>
                    <p class="email">node</p>
                    <p class="school">update</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Testname</p>
                </div> <!--! data-holder-2-->
            </div> <!--!data-->
            <!-- TODO to use more copy div class name "data" -->
            <div class="data">
                <div class="data-holder-1">
                    <p class="name">2002-03-04 06:06:22</p>
                    <p class="email">node</p>
                    <p class="school">delete</p>
                    <p class="major">node/11/edit</p>
                    <p class="uid">Module 2 - duty abc</p>
                </div> <!--! data-holder-1-->
                <div class="data-holder-2">

                </div> <!--! data-holder-2-->
            </div> <!--!data-->

        </div> <!--! table-->
    </div> <!--! main-->
</div> <!--! content-query-select-->

@endsection
