import React from 'react';
import './logo.styles.scss';

import { withRouter } from 'react-router-dom';


const Logo = ({history}) => (
    <div className="logo col-auto mx-3 align-self-center position-relative">
        <a className="text-white text-center font-weight-bold" onClick={() => history.push('/recentShare')} href="#">Juniorise</a>
        <span className="hat-icon position-absolute">
            <i className="fas fa-graduation-cap text-white"></i>
        </span>
    </div>
);

export default withRouter(Logo);