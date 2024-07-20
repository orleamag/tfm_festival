$(".tabbar ul li a").on('load', function (e) {
    console.log('entro en la func');
    // const disabledClick = [
    //     'award',
    //     'psicology',
    //     'sobrenatural',
    //     'damed',
    //     'slasher',
    //     'horror',
    //     'childrens'];
    // let link = $(this),
    //     li = link.parent(),
    //     showItem = $(li).attr('class');
    // if (disabledClick.includes(showItem)) {
    //     return false;
    // }
    // setActive(li.parent(), li, showItem);
    // return false;
});

$(".tabbar ul li a").click(function (e) {
    const disabledClick = [
        'award',
        'psicology',
        'sobrenatural',
        'damed',
        'slasher',
        'horror',
        'childrens'];
    let link = $(this),
        li = link.parent(),
        showItem = $(li).attr('class');
    if (disabledClick.includes(showItem)) {
        return false;
    }
    setActive(li.parent(), li, showItem);
    return false;
});

function setActive(nav, li, showItem) {
    $('#schedule__calendar ul').each(function () {
        var currentId = $(this).attr('id');
        if (showItem.includes(currentId)) {
            $(this).removeClass('hide').addClass('show');
        }
        else {
            $(this).removeClass('show').addClass('hide');
        }
    });
    $('#director div').each(function () {
        var currentId = $(this).attr('id');
        if (showItem.includes(currentId)) {
            $(this).removeClass('hide').addClass('show');
        }
        else {
            $(this).removeClass('show').addClass('hide');
        }
    });
    $('#category__cards .category__filter').each(function () {
        var currentId = $(this).attr('id');
        if (showItem.includes(currentId)) {
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