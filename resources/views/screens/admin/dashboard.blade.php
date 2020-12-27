@extends('layouts.admin')

@section('content')
<div class="content-dashboard">
<div class="side-bar">
    <div class="bar">
        <ul class="list">
            <li class="list-item link-active"><a class="link" href="dashboard">Dashboard</a></li>
            <li class="list-item"><a class="link" href="manage-post">Manage Post</a></li>
            <li class="list-item"><a class="link" href="user-account">User Account</a></li>
            <li class="list-item"><a class="link" href="query-select">Query Select</a></li>
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
                <p class="number">100</p>
                <p class="type">user</p>
                <p class="add-on">+10 new users today</p>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div> <!--! card-1-->

        <div class="card-2">
            <div class="user">
                <p class="number">100</p>
                <p class="type">answers</p>
                <p class="add-on">+10 answers today</p>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div> <!--! card-2-->

        <div class="card-3">
            <div class="user">
                <p class="number">10000</p>
                <p class="type">visiters</p>
                <p class="add-on"></p>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div> <!--! card-3-->

    </div> <!--! user-board-->

    <div class="user-activities">

        <div class="recent-post">
            <p class="title">Recent posts</p>
            <div class="posted-reacted">
                <div class="user-posting">
                    <div class="posted">
                        <div class="profile">
                            <div class="profile-info">
                                <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                                <div class="short-info">
                                    <p class="username">Sok san <span class="join-date"> - 1 Dec 2020</span></p>
                                    <p class="major">BA. Computer Science at <a href="#">NIPTICT</a></p>
                                </div> <!--! short-info-->
                            </div> <!--! profile-info-->
                            <div class="delete">
                                <button type="submit">Delete</button>
                            </div>
                        </div> <!--! profile-->
                        <div class="question">
                            <p class="answer-question">
                                <span>Answer a question: </span>
                                What to do after graduate from high school and want to study Computer Science?
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

                <div class="user-posting">
                    <div class="posted">
                        <div class="profile">
                            <div class="profile-info">
                                <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                                <div class="short-info">
                                    <p class="username">Sok san <span class="join-date"> - 1 Dec 2020</span></p>
                                    <p class="major">BA. Computer Science at <a href="#">NIPTICT</a></p>
                                </div> <!--! short-info-->
                            </div> <!--! profile-info-->
                            <div class="delete">
                                <button type="submit">Delete</button>
                            </div>
                        </div> <!--! profile-->
                        <div class="question">
                            <p class="answer-question">
                                <span>Answer a question: </span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quis
                                corporis harum odit dignissimos? Blanditiis, amet! Deserunt temporibus sit
                                eveniet esse fuga nesciunt ab. Magnam at magni earum non recusandae?
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

            </div> <!--! posted-reacted -->

            <p class="see-more">See more</p>
        </div> <!--! recent-post-->
        <div class="recent-create-account">
            <p class="title">Recent new created  account</p>
            <div class="created-account">
                <div class="account">
                    <div class="user-account">
                        <!-- TODO to use more copy whole div with class "posted" -->
                        <div class="posted">
                            <div class="profile">
                                <div class="profile-info">
                                    <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                                    <div class="short-info">
                                        <p class="username">Sok san <span class="join-date"> - 1 Dec 2020</span></p>
                                        <p class="major">BA. Computer Science at <a href="#">NIPTICT</a></p>
                                    </div> <!--! short-info-->
                                </div> <!--! profile-info-->
                            </div> <!--! profile-->
                            <div class="question">
                                <p class="answer-question">
                                    Created on 12 Dec 2020 - 5:00pm
                                </p>
                            </div> <!--! question-->
                        </div> <!--! posted-->
                        <!-- TODO to use more copy whole div with class "posted" -->
                        <div class="posted">
                            <div class="profile">
                                <div class="profile-info">
                                    <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                                    <div class="short-info">
                                        <p class="username">Sok san <span class="join-date"> - 1 Dec 2020</span></p>
                                        <p class="major">BA. Computer Science at <a href="#">NIPTICT</a></p>
                                    </div> <!--! short-info-->
                                </div> <!--! profile-info-->
                            </div> <!--! profile-->
                            <div class="question">
                                <p class="answer-question">
                                    Created on 12 Dec 2020 - 5:00pm
                                </p>
                            </div> <!--! question-->
                        </div> <!--! posted-->
                        <!-- TODO to use more copy whole div with class "posted" -->
                        <div class="posted">
                            <div class="profile">
                                <div class="profile-info">
                                    <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                                    <div class="short-info">
                                        <p class="username">Sok san <span class="join-date"> - 1 Dec 2020</span></p>
                                        <p class="major">BA. Computer Science at <a href="#">NIPTICT</a></p>
                                    </div> <!--! short-info-->
                                </div> <!--! profile-info-->
                            </div> <!--! profile-->
                            <div class="question">
                                <p class="answer-question">
                                    Created on 12 Dec 2020 - 5:00pm
                                </p>
                            </div> <!--! question-->
                        </div> <!--! posted-->
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
                <!-- TODO to use more copy whole div with class "profile-info" -->
                <div class="profile-info">
                    <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                    <div class="short-info">
                        <p class="username">Sok san <span class="modify-date"> - 1 Dec 2020</span></p>
                        <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et animi,
                            facere voluptas molestias alias placeat quis nemo porro ut accusantium rem officiis
                            ea obcaecati aspernatur molestiae veniam labore quam tempora?</p>
                    </div> <!--! short-info-->
                </div> <!--! profile-info-->
                <!-- TODO to use more copy whole div with class "profile-info" -->
                <div class="profile-info">
                    <img src="https://www.compass-insurance-agency.com/wp-content/uploads/2016/09/girl-education.jpg" alt="profile">
                    <div class="short-info">
                        <p class="username">Sok san <span class="modify-date"> - 1 Dec 2020</span></p>
                        <p class="info">Modified user name and password</p>
                    </div> <!--! short-info-->
                </div> <!--! profile-info-->
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
