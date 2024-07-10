$(".tabbar ul li a").click(function (e) {
    let link = $(this),
        li = link.parent(),
        showItem = $(li).attr('class');
    setActive(li.parent(), li, showItem);
    return false;
});

function setActive(nav, li, showItem) {   
    $('#schedule__calendar ul').each(function() {
        var currentId = $(this).attr('id');
        if(showItem.includes(currentId)){
            $(this).removeClass('hide').addClass('show');
        }
        else {
            $(this).removeClass('show').addClass('hide');
        }
    });   
    nav.find("li").removeClass("active");
    li.addClass("active");
    nav.css("--x", li.position().left + li.outerWidth() / 2 + "px");
}