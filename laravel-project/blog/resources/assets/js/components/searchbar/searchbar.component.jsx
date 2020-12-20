import React from 'react';
import './searchbar.styles.scss';

const SearchBar = ({...props}) => (
    <div className="input-group">
        <input className="border-0 col-xl-6 col-md-5 bg-secondary text-white shadow-none searchbar" {...props}/>
        <div className="input-group-prepend">
            <span className=" search-btn bg-secondary input-group-text border-0">
                <i className="fas fa-search text-white "></i>
            </span>
        </div>
    </div>
);

export default SearchBar;