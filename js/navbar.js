$(document).ready(function() {
    function myFunction() {
        console.log("The document is ready!");
    }

    myFunction();
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

$(document).ready(function(){
	$('.up__arrow').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 400);
	});
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.up__arrow').slideDown(150);
		} else {
			$('.up__arrow').slideUp(150);
		}
	});

});