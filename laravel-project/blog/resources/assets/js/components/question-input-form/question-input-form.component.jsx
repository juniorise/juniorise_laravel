import React from 'react';
import './question-input-form.styles.scss';
import ProfilePic from '../../assets/profile.png';
import TextareaAutosize from 'react-textarea-autosize';
import CustomButton from '../../components/custom-button/custom-button.component';
import Profile from '../../components/profile/profile.component';

const QuestionInputForm = ({placeholder}) => (
    <div className="d-flex flex-column profile-container">
        <div className="profile-form p-3 d-flex border w-100">
            <Profile name="Sok San" school="niptict" major="Computer Science" imgSrc={ProfilePic} date="01 Dec 2020"/>
        </div>
        <div className="text-area">
            <TextareaAutosize  minRows={1}
            maxRows={5} className="w-100 border-top-0 border-bottom-0 border" placeholder={placeholder}/>
        </div>
        <div className="publish-container w-100 d-flex justify-content-between border">
            <span className="align-self-center">
                <a className="privacy text-primary text-decoration-none" href="#"><i className="fas fa-globe-asia mx-2"></i>Everyone can answer</a>
            </span>
            <CustomButton className="btn btn-primary rounded-0">Publish</CustomButton>
        </div>
    </div>
);

export default QuestionInputForm;