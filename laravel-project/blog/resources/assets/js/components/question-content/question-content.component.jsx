import React from 'react';
import './question-content.styles.scss';
import ProfilePic from '../../assets/profile.png';
import Profile from '../profile/profile.component';

const QuestionContent = () => (
    <div className="question-content-container border  mb-3 ">
        <div className="profile-container d-flex w-100 p-3 mb-3">
            <Profile name="Sok San" school="niptict" major="Computer Science" imgSrc={ProfilePic} date="01 Dec 2020"/>
        </div>
        <div className="question-text-container px-3 mb-3">
            <div className="text">
                <p>Just Start You can’t go anywhere until you take that first step. 
                    You can’t go forward if you won’t move. You will never learn how to run if you don’t start walking. 
                    You can’t ever learn how to ride a bike unless you’re willing to fall, crash, and even get hurt. So, just start. 
                    The funny thing is, we can always come up with a hundred of reasons why things won’t work out, no matter what venture it is that we choose, even the daily activities like losing weight, or eating healthy,
                    what more if we even dream of becoming a developer — and a self-taught one? And if we try to think of the reasons that maybe — just maybe it can work? Why is it so hard to see things from that perspective? 
                    Simply because it’s against our nature. It goes against our system, our education, our culture. Stop following the crowd, they don’t even know who they are or what they want! We will never know if we don’t try, 
                    we will never see what’s out there if we don’t give it a shot. Anything worth having will come from outside our comfort zone — just like I always say, we gotta do what we gotta do for that dream! Start small. 
                    Take a crash course — there’s a lot of free stuff on the internet. I’ve got a lot of articles, free tools, free tutorials, all in a few clicks — now listen to yourself, what’s your excuse?
                </p>
            </div>
        </div>
        <div className="reaction-container "> 
                <div className="d-flex border-top ">
                    <span className="emoji-box btn border-right rounded-0"><i className="fas fa-smile text-secondary"></i></span>
                    <span className="reaction-emoji btn border-right rounded-0">❤️ 10</span>
                    <span className="reaction-emoji btn border-right rounded-0">👏 22</span>
                    <span className="reaction-emoji btn border-right rounded-0">👍 22</span>
                </div>
        </div>
    </div>
);

export default QuestionContent;