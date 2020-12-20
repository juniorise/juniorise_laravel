import React from 'react';

const CustomButton = ({children,iconSrc,...props}) => (
    <div className="btn border d-flex justify-content-around" {...props}>
        {iconSrc ? <i className={`${iconSrc} mr-2`} style={{fontSize: '14px'}}></i> : ""}
        <a >{children}</a>
    </div>
);

export default CustomButton;