import React from 'react';
import './comment-section.styles.scss';
import ProfilePic from '../../assets/profile.png';
import Profile from '../profile/profile.component';

const CommentSection = ({text}) => (
    <div className="comment-section-container mb-3">
        <div className="comment-content border">
            <div className="answer-content p-2">
                <Profile name="Sok San" school="niptict" major="Computer Science" imgSrc={ProfilePic} date="01 Dec 2020"/>
                <div className="answer-text mt-3">
                    <p className="mb-2">{text}</p>
                </div>
            </div>
            <div className="reaction-container"> 
                <div className="d-flex  border-top ">
                    <span className="emoji-box btn  border-right rounded-0"><i className="fas fa-smile text-secondary"></i></span>
                    <span className="reaction-comment-emoji btn  border-right rounded-0">❤️ 10</span>
                    <span className="reaction-comment-emoji btn  border-right rounded-0">👏 22</span>
                    <span className="reaction-comment-emoji btn  border-right rounded-0">👍 22</span>
                </div>
            </div>
        </div>
    </div>
);

export default CommentSection;