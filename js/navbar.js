$(".tabbar ul li a").click(function (e) {
    let link = $(this),
        li = link.parent();
    setActive(li.parent(), li);
    return false;
});

function setActive(nav, li, div) {
    $("#fifteen_day").addClass("show");
    $("#fifteen_day").removeClass("hide");
    nav.find("li").removeClass("active");
    li.addClass("active");
    nav.css("--x", li.position().left + li.outerWidth() / 2 + "px");
}