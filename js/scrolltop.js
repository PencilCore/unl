function scrolltop() {
    $(window).scroll(function(e) {
        if ($(window).scrollTop() > 80 && $(document).height() != $(window).height() + $(window).scrollTop()) {
       	$("#scrolltop").removeClass("to-top-disabled");
        }else {
       	$("#scrolltop").addClass("to-top-disabled");
    	}
    })
};

$(function() {
    $("#scrolltop").click(function(e) {
        $('body,html').animate({
            scrollTop: 0
        },
        600)
    });
    scrolltop()
})