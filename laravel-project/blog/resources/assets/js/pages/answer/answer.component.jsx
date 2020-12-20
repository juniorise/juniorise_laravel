import React,{ useState } from 'react';
import './answer.styles.scss';

import { Breakpoint } from 'react-socks';

import CategoriesCard from '../../components/categories-card/categories-card.component';
import CustomButton from '../../components/custom-button/custom-button.component';
import QuestionInputForm from '../../components/question-input-form/question-input-form.component';
import QuestionContent from '../../components/question-content/question-content.component';
import CommentSection from '../../components/comment-section/comment-section.component';

const Answer = ({history,commentAmount}) => {
    const [activeLink,setactiveLink] = useState(false);
    const handleClick = () => {
        setactiveLink(!activeLink);
    }
    return (
    <div>
        <div className="container-xl mt-4">
            <div className="row">
                <Breakpoint className="col-xl-3 col-lg-3" m up>
                    <CategoriesCard/>
                    <input className="border w-100 p-2 my-3" style={{outline: 'none'}} type="text" placeholder="Search for a major"/>
                    <CustomButton className="btn btn-primary mb-3 rounded-0">Search</CustomButton>
                </Breakpoint>
                <div className="col-xl-6 col-lg-6 mb-3">
                    <QuestionContent/>
                    <QuestionInputForm placeholder="Write a comments here..."/>
                </div>
                <div className="col-xl-3 col-lg-3">
                    <Breakpoint m up>
                    <div className="comment-title text-center bg-light border rounded-0 px-6 py-3 mb-3">
                        <span>Comments</span>
                     </div>
                     <div className="comment-container">
                        <CommentSection text="Thank senior, I have learn alot from you, see you soon, I am registering!!"/>
                        <CommentSection text="What to do after graduate from high school and want to study Computer Science?"/>
                        <CommentSection text="What to do after graduate from high school and want to study Computer Science?"/>
                     </div>
                    </Breakpoint>
                    <Breakpoint s down>
                    <div className="comment-title text-primary text-center bg-light border rounded-0 px-6 py-3 mb-3" onClick={() => handleClick()}>
                        <span>Comments ({commentAmount})</span>
                     </div>
                     <div className={`comment-container` + (activeLink ? " active" : " deactive")}>
                        <CommentSection text="Thank senior, I have learn alot from you, see you soon, I am registering!!"/>
                        <CommentSection text="What to do after graduate from high school and want to study Computer Science?"/>
                        <CommentSection text="What to do after graduate from high school and want to study Computer Science?"/>
                     </div>
                    </Breakpoint>
                </div>
            </div>
            
        </div>
    
    </div>
    )
};

export default Answer;