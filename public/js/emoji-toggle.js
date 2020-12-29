var emojiBtn = $('.emoji-box');
var popup = $('.emoji-picker');
popup.hide();
emojiBtn.on('click',function(e) {
    $(this).find('.emoji-picker').toggle();
});
$(document).mouseup(e => {
    if (!emojiBtn.is(e.target) && emojiBtn.has(e.target).length === 0 || emojiBtn.is(e.target)){
        popup.hide();
    }
});
    