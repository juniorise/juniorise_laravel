import React,{ useState } from 'react';
import './homepage.styles.scss';
import ProfileCardPic from '../../assets/profile-card.png';

import CategoriesCard from '../../components/categories-card/categories-card.component';
import CustomButton from '../../components/custom-button/custom-button.component';
import QuestionInputForm from '../../components/question-input-form/question-input-form.component';
import SharePost from '../../components/share-post/share-post.component';
import ProfileCard from '../../components/profile-card/profile-card.component';

const underlineStyle = {
    textDecoration: 'underline',
    marginLeft: '4px'
};

const Homepage = () => {
    const [links,setLink] = useState([
        {
            id: 1,
            name: "Recent shared",
            className: "btn border"
        },
        {
            id: 2,
            name: "Questions",
            className: "btn border"
        }
    ]);
    const [activeTabs,setTab] = useState(1);
    const handleClick = id => {
        setTab(id);
    };
    return (
    <div>
        <div className="container-fluid bg-secondary py-3 mt-2">
            <p className="text-center text-light mb-0">Sharing is caring - By sharing your experience as a senior,you will help hundred of students.
                <a className="text-white font-weight-bold" href="#" style={underlineStyle}>How?</a>
            </p>
        </div>
        <div className="container-xl mt-4">
            <div className="row">
                <div className="col-xl-3 col-lg-3">
                    <CategoriesCard/>
                    <input className="border w-100 p-2 my-3" style={{outline: 'none'}} type="text" placeholder="Search for a major"/>
                    <CustomButton className="btn btn-primary rounded-0">Search</CustomButton>
                </div>
                <div className="col-xl-6 col-lg-6">
                    <QuestionInputForm/>
                    <div className="tab-menu w-100 d-flex justify-content-around mt-2">
                        {
                            links.map(link => (
                                <a 
                                    key={link.id}
                                    onClick={() => handleClick(link.id)} 
                                    className={link.className + (link.id === activeTabs ? " border-primary text-primary" : " text-secondary")} 
                                    href="#">
                                        {link.name}
                                </a>
                            ))
                        }
                    </div>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?"/>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?"/>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?"/>
                    <SharePost question="What to do after graduate from high school and want to study Computer Science?"/>
                </div>
                <div className="col-xl-3 col-lg-3">
                    <ProfileCard rep="20k" name="Sok San" major="Computer Science" imageSrc={ProfileCardPic}/>
                </div>
            </div>
            
        </div>
    
    </div>
    )
};

export default Homepage;