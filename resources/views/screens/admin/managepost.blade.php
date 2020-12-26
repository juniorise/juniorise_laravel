<script src="https://kit.fontawesome.com/7670f56296.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../../sass/admin/manage-post/manage-post.css">
@extends('layouts.app')
@section('content')

<div class="content-manage-post">
<div class="side-bar">
    <div class="bar">
        <ul class="list">
            <li class="list-item"><a class="link" href="dashboard.html">Dashboard</a></li>
            <li class="list-item link-active"><a class="link" href="manage-post.html">Manage Post</a></li>
            <li class="list-item"><a class="link" href="user-account.html">User Account</a></li>
            <li class="list-item"><a class="link" href="query-select.html">Query Select</a></li>
            <li class="list-item administrator"><a class="link" href="#">Administrator</a></li>
            <li class="list-item admin-active"><a class="link" href="#">Hong Lyhean</a><button class="out" type="submit">Sign out</button></li>
            <li class="list-item"><a class="link" href="#">Kok Sopanha</a></li>
            <li class="list-item"><a class="link" href="#">Choem Thea</a></li>
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
                <!-- TODO to use more copy whole div with class "user-posting" -->
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
                            <!-- <div class="delete">
                                <button type="submit">Delete</button>
                            </div> -->
                        </div> <!--! profile-->
                        <div class="question">
                            <p class="answer-question">
                                <span>Answer a question: </span>
                                What to do after graduate from high school and want to study Computer Science?
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
                <!-- TODO to use more copy whole div with class "user-posting" -->
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
                <!-- TODO to use more copy whole div with class "user-posting" -->
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
                <!-- TODO to use more copy whole div with class "user-posting" -->
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
                            <!-- <div class="delete">
                                <button type="submit">Delete</button>
                            </div> -->
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
                <!-- TODO to use more copy whole div with class "user-posting" -->
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
                    </div> <!--! reacted commented-->
                </div> <!--! user-posting-->

            </div> <!--! posted-reacted -->
            <p class="see-more">Load more</p>
        </div> <!--!recent-post-->
    </div> <!--! user-activities-->

    <div class="recent-question">
        <p class="title">Recent Questions</p>
        <div class="user">
            <div class="activities">
                <!-- TODO to use more copy whole div with class "user-question" -->
                <div class="user-question">
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
                                What to do after graduate from high school and want to study Computer Science?
                            </p>
                        </div> <!--! question-->
                    </div> <!--! posted-->
                    <div class="approval">
                        <div class = "delete">
                            <p class="ap-de">Delete</p>
                        </div>
                        <div class="duplicate">
                            <p class="ap-du">Duplicate question</p>
                        </div>
                    </div> <!--! delete-->
                </div> <!--! user-question-->
                <!-- TODO to use more copy whole div with class "user-question" -->
                <div class="user-question">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione praesentium iure,
                                assumenda error sapiente ab, ut numquam velit eius sed dolores? Nostrum minus cum
                                dolorum repudiandae repellat corrupti possimus incidunt?
                            </p>
                        </div> <!--! question-->
                    </div> <!--! posted-->
                    <div class="approval">
                        <div class = "delete">
                            <p class="ap-de">Delete</p>
                        </div>
                        <div class="duplicate">
                            <p class="ap-du">Duplicate question</p>
                        </div>
                    </div> <!--! delete-->
                </div> <!--! user-question-->
                <!-- TODO to use more copy whole div with class "user-question" -->
                <div class="user-question">
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
                                What to do after graduate from high school and want to study Computer Science?
                            </p>
                        </div> <!--! question-->
                    </div> <!--! posted-->
                    <div class="approval">
                        <div class = "delete">
                            <p class="ap-de">Delete</p>
                        </div>
                        <div class="duplicate">
                            <p class="ap-du">Duplicate question</p>
                        </div>
                    </div> <!--! delete-->
                </div> <!--! user-question-->

            </div> <!--! activities-->
        </div> <!--! user-->
    </div> <!--! recent-question-->
</div> <!--! main-->
</div> <!--! content-manage-post-->

@endsection
