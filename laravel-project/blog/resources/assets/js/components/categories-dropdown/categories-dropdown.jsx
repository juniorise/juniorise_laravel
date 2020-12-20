import React, { useState } from 'react';
import { Accordion,Card,Button } from 'react-bootstrap';
import CATEGORIES_DATA from '../../categories.data';
import './categories-dropdown.styles.scss';

const CategoriesDropDown = () => {
    const [links,setLinks] = useState(CATEGORIES_DATA);
    const [activeLink,setactiveLink] = useState(false);

    const handleClick = () => {
        setactiveLink(!activeLink);
    }

    return(
        <div className="categories-dropdown">
                <div className="card">
                <div className="card-header header-categories border-0 d-flex justify-content-between" onClick={() => handleClick()}>Choose your desire major {(activeLink ? (<i className="fas fa-sort-up"></i>) : (<i className="fas fa-sort-down"></i>))}</div>
                    <ul className={`list-group list-group-flush` + (activeLink ? " active" : " deactive")}>
                        {
                            links.map(link =>(
                                <li 
                                    key={ link.id }
                                    className={ link.className }
                                >
                                    {link.name}
                                </li>
                            ))
                        }
                    </ul>
                </div>
        </div>
    )
};

export default CategoriesDropDown;