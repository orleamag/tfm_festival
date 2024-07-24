$(".checkout__open").click(function(){
    $(".checkout__view").css({"display": "block"});
    $(".container").css({"overflow": "hidden"});
});

$(".checkout__close").click(function(){
    $(".checkout__view").css({"display": "none"});
    $(".container").css({"overflow": ""});
});

$(".term_condition").click(function() {  
    if($("#radio_active").is(':checked')) {  
        $(".disabled__link").css({"pointer-events": "all"});
        $(".disabled__link").css({"opacity": "1"}); 
    } else {  
        $(".disabled__link").css({"pointer-events": ""});
        $(".disabled__link").css({"opacity": ""});
    }  
});

$(".disabled__link").click(function(){
    $(".paid__checked").css({"display": "flex"});
});

$(".checked__close").click(function(){
    const origin=window.location.origin;
    const path = window.location.pathname.split("/").slice(0,-1).join('/');
    window.location.replace(`${origin}${path}/index.php`);
});