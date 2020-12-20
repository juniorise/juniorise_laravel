import React from 'react';
import './emoji-reaction.styles.scss';

const EmojiReaction = ({emojiSrc,emojiType,counter}) => (
    <div className="btn p-0 emoji-reaction d-flex justify-content-around align-self-center mx-1">
        <span className={`${emojiType} emoji-icon align-self-center text-black `}>{emojiSrc} {counter}</span>
    </div>
);

export default EmojiReaction;