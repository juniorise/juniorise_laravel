import React from 'react';
import './profile.styles.scss';

const Profile = ({name,date,school,major,imgSrc}) => (
    <div className="profile d-flex">
        <img className="profile-pic mr-2 rounded-circle" src={imgSrc} alt=""/>
        <div className="profile-info d-flex flex-column">
            <span>
                <span className="name text-black text-bold">{name}</span>
                <span className="date text-secondary"> - {date}</span>
            </span>
            <span>
                <span className="major text-secondary">Ba, {major} at </span>
                <a className="school text-primary" href="#">{school.toUpperCase()}</a>
            </span>
        </div>
    </div>
);

export default Profile;