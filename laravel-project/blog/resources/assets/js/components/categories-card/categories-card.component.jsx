import React, { useState } from 'react';
import './categories-card.styles.scss';
import CATEGORIES_DATA from '../../categories.data';

const CategoriesCard = () => {
    const [links,setLinks] = useState(CATEGORIES_DATA);
    const [activeLink,setactiveLink] = useState(1);

    const handleClick = id => {
        setactiveLink(id);
    }
    return(
        <div className="card">
        <div className="card-header">Choose your desire major</div>
            <ul className="list-group list-group-flush">
                {
                    links.map(link =>(
                        <li 
                            key={link.id}
                            onClick={()=> handleClick(link.id)}
                            className={link.className + (link.id === activeLink ? " bg-primary text-white" : "") }
                        >
                            {link.name}
                        </li>
                    ))
                }
            </ul>
        </div>
    )
};

export default CategoriesCard;