import React from 'react';
import ProfilePic from '../../assets/profile.png';
import Profile from '../profile/profile.component';
import CustomButton from '../custom-button/custom-button.component';
import EmojiReaction from '../emoji-reaction/emoji-reaction.component';
import { Breakpoint } from 'react-socks';
import './share-post.styles.scss';

import { withRouter } from 'react-router-dom';

const SharePost = ({question,questionTab,history}) => (
    <div className="share-post-container border mt-3">
        <div className="profile-container p-3">
            <Profile name="Sok San" school="niptict" major="Computer Science" imgSrc={ProfilePic} date="01 Dec 2020"/>
            <div className="question-container mt-2">
                <span className="text-primary">Answer a question: </span>
                <span className="question">{question}</span>
            </div>
        </div>
        <div className="reaction-cmt border border-left-0 border-bottom-0 border-right-0 w-100">
            <div className="row">
                <div className="emoji d-flex col-xl-6 col-lg-5 col-md-4 col-5">
                    {
                        (questionTab ? (<span className="emoji-box btn border-right rounded-0"><i className="fas fa-smile text-secondary"></i></span>) : "")
                    }
                    <EmojiReaction emojiSrc="❤️" emojiType="heart" counter="10"/>
                    <EmojiReaction emojiSrc="👏" emojiType="heart" counter="22"/>
                </div>
                <div className="cmt-btn d-flex justify-content-end col-xl-6 col-lg-7 col-md-8 col-7">
                    <Breakpoint m up>
                        <CustomButton className="btn rounded-0 border border-top-0 border-bottom-0  px-2" iconSrc="fas fa-comment-alt">22 comments</CustomButton>
                    </Breakpoint>
                    <Breakpoint s down>
                        <CustomButton className="btn rounded-0 border border-top-0 border-bottom-0  px-2" iconSrc="fas fa-comment-alt">22</CustomButton>
                    </Breakpoint>
                    {
                        (questionTab ? (<CustomButton className="btn rounded-0 border border-primary text-primary px-4" onClick={() => history.push('/answer')}>Answer</CustomButton>) : (<CustomButton className="btn rounded-0 border border-primary text-primary px-2" onClick={() => history.push('/answer')}>Read Answer</CustomButton>))
                    }
                    
                </div>
            </div>
        </div>
    </div>
);

export default withRouter(SharePost);
