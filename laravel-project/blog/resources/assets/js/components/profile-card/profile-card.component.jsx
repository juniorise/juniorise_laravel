import React from 'react';

const ProfileCard = ({rep,name,major,imageSrc}) => (
    <div className="card">
        <img className="card-img-top" src={imageSrc} alt="Card image cap"/>
        <div className="card-header">{rep} reputations</div>
        <div className="card-body">
            <h5 className="card-title">{name}</h5>
            <h6 className="card-subtitle mb-2 text-muted">{major}</h6>
            <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a className="btn btn-primary">Edit your profile</a>
        </div>
    </div>
);

export default ProfileCard;