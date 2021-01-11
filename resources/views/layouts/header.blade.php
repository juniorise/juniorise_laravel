<div class="header container-fluid bg-dark px-0 navbar smart-scroll p-0">
    <div class="row w-100">
        <div class="col-xl-8 col-lg-9 col-md-8 col-6 d-flex">
            <div class="logo col-auto mx-3 align-self-center position-relative">
                <a class="text-white text-center font-weight-bold" href="/recentshare">Juniorise</a>
                <span class="hat-icon position-absolute">
                    <i class="fas fa-graduation-cap text-white"></i>
                </span>
            </div>
            <div class="input-group search-bar">
                <input class="border-0 col-xl-6 col-md-5 bg-secondary text-white shadow-none searchbar"
                    placeholder="Search major,experience..." />
                <div class="input-group-prepend">
                    <span class="search-btn bg-secondary input-group-text border-0">
                        <i class="fas fa-search text-white "></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-4  col-lg-3 col-md-4 col-6 d-flex justify-content-end">
            <div class="sign-in-sign-up d-flex">
                <div class="align-self-center search-btn-container">
                    <span class="search-btn border-0">
                        <i class="fas fa-search text-white "></i>
                    </span>
                </div>
                @guest
                    @if (Route::has('login'))
                        <div class="btn align-self-center text-decoration-none">
                            <a class="text-white" href="/login" id="loginBtn">Login</a>
                        </div>
                    @endif
                    @if (Route::has('register'))
                        <div class="btn btn-light align-self-center  rounded-0 ml-4">
                            <a href="/signup" class="text-dark text-decoration-none" id="signUpBtn">Sign up</a>
                        </div>
                    @endif
                @else
                    <div class="c btn bg-primary align-self-center rounded-0 ml-4">
                        <a class="text-white" href="#" onclick="goBack()">Back</a>
                    </div>
                    <div class="c btn border border-white align-self-center rounded-0 ml-2">
                        <a class="text-white" href="#" id="logoutBtn" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</div>
