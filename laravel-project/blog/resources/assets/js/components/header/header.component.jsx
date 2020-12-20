import React from 'react';

import Logo from '../logo/logo.component';
import CustomButton from '../custom-button/custom-button.component';
import SearchBar from '../searchbar/searchbar.component';
import { Breakpoint } from 'react-socks';

const Header = () => (
    <div className="header container-fluid bg-dark px-0">
        <Breakpoint m up>
            <div className="row w-100">
                <div className="col-xl-8 col-lg-9 col-md-8 d-flex">
                    <Logo/>
                        <SearchBar type="text" placeholder="Search major,experience..."/>
                </div>
                <div className="col-xl-4  col-lg-3 col-md-4 d-flex justify-content-end">
                    <div className="sign-in-sign-up d-flex">
                        <CustomButton className="text-white btn align-self-center text-decoration-none">Login</CustomButton>
                        <CustomButton className="text-dark btn btn-light align-self-center  rounded-0 ml-4">Sign up</CustomButton>
                    </div>
                </div>
            </div>
        </Breakpoint>
        <Breakpoint s down>
            <div className="row w-100" style={{height: '48px'}}>
                <div className="col-6 d-flex">
                    <Logo/>
                </div>
                <div className="col-6 d-flex justify-content-end">
                    <div className="sign-in-sign-up d-flex">
                        <span className=" search-btn input-group-text bg-transparent border-0">
                            <i className="fas fa-search text-white "></i>
                        </span>
                        <CustomButton className="text-dark btn btn-light align-self-center  rounded-0 ml-4">Sign up</CustomButton>
                    </div>
                </div>
            </div>
        </Breakpoint>
    </div>
);

export default Header;