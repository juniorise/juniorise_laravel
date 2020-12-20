<div class="header container-fluid bg-dark px-0">
    <div>
        <div class="row w-100">
            <div class="col-xl-8 col-lg-9 col-md-8 d-flex">
                @include('layouts.logo')
                @include('layouts.searchbar')
            </div>
            <div class="col-xl-4 col-lg-3 col-md-4 d-flex justify-content-end">
                <div class="sign-in-sign-up d-flex">
                    @include('layouts.custombtn', ['name' => "Login", 'prop' => "text-white btn align-self-center text-decoration-none"])
                    @include('layouts.custombtn', ['name' => "Sign up", 'prop' => "text-dark btn btn-light align-self-center rounded-0 ml-4"])
                </div>
            </div>
        </div>
    </div>
    {{-- <div>
        <div class="row w-100" style="height: 48px">
            <div class="col-6 d-flex">
                @include('layouts.logo')
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="sign-in-sign-up d-flex">
                    <span class=" search-btn input-group-text bg-transparent border-0">
                        <i class="fas fa-search text-white "></i>
                    </span>
                    @include('layouts.custombtn', ['name' => "Sign up", 'prop' => "text-dark btn btn-light align-self-center  rounded-0 ml-4"])
                </div>
            </div>
        </div>
    </div> --}}
</div>