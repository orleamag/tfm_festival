$('li[id^="b-"]').click(function(){
    const liId = $(this).attr('id');
    const liClass = $(this).attr('class');
    if (liClass.includes('selected')){
        $(this).removeClass('selected');
        $(`.seat__selected span:contains(${liId})`).remove();
    }
    else {
        $(this).addClass('selected');
        $('.seat__selected').append(`<span>${liId}</span>`);       
    }
    isShowMessage();
});

function isShowMessage() {
    const  numSpan = $('.seat__selected span').length;
    if(numSpan === 0 ){
        $(".seat__selected p").css({"display": "block"});
    }
    else {
        $(".seat__selected p").css({"display": "none"});
    }
}