import React,{ useState } from 'react';
import './question.styles.scss';
import ProfileCardPic from '../../assets/profile-card.png';

import { Breakpoint } from 'react-socks';

import CategoriesCard from '../../components/categories-card/categories-card.component';
import CustomButton from '../../components/custom-button/custom-button.component';
import QuestionInputForm from '../../components/question-input-form/question-input-form.component';
import SharePost from '../../components/share-post/share-post.component';
import ProfileCard from '../../components/profile-card/profile-card.component';
import CategoriesDropDown from '../../components/categories-dropdown/categories-dropdown';

const Question = ({history}) => {
    const [links,setLink] = useState([
        {
            id: 1,
            name: "Recent shared",
            className: "btn border",
            linkUrl: "/recentShare"
        },
        {
            id: 2,
            name: "Questions",
            className: "btn border",
            linkUrl: "/question"
        }
    ]);
    const [activeTabs,setTab] = useState(2);
    const handleClick = link => {
        setTab(link.id);
        history.push(link.linkUrl);
    };
    return (
    <div>
        <div className="container-xl mt-4">
            <div className="row">
                <Breakpoint className="col-xl-3 col-lg-3" m up>
                    <CategoriesCard/>
                    <input className="border w-100 p-2 my-3" style={{outline: 'none'}} type="text" placeholder="Search for a major"/>
                    <CustomButton className="btn btn-primary mb-3 rounded-0">Search</CustomButton>
                </Breakpoint>
                <div className="col-xl-6 col-lg-6">
                    <QuestionInputForm placeholder="Ask a question..!"/>
                    <div className="tab-menu w-100 d-flex justify-content-around mt-2">
                        {
                            links.map(link => (
                                <a 
                                    key={link.id}
                                    onClick={() => handleClick(link)} 
                                    className={link.className + (link.id === activeTabs ? " border-primary text-primary" : " text-secondary")} 
                                    href="#">
                                        {link.name}
                                </a>
                            ))
                        }
                    </div>
                    <Breakpoint s down>
                        <CategoriesDropDown></CategoriesDropDown>
                    </Breakpoint>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?" questionTab={1}/>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?" questionTab={1}/>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?" questionTab={1}/>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?" questionTab={1}/>
                </div>
                <div className="col-xl-3 col-lg-3">
                    <Breakpoint l up>
                        <ProfileCard rep="20k" name="Sok San" major="Computer Science" imageSrc={ProfileCardPic}/>
                    </Breakpoint>
                </div>
            </div>
            
        </div>
    
    </div>
    )
};

export default Question;