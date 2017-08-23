jQuery(document).ready(function(){
    $ = jQuery;
    function go_to( ele, especial ){
    	var este = $('#'+ele);
    	if( !este.length ){ return; };
    	var to = especial ? este.offset().top : este.offset().top;
    	$('body,html').stop().animate({
    		scrollTop : to
    	});
    };
    $('.menu-button').on('click', function(){
        $('body, html').addClass('staticBody');
        $('.shadow-layer').addClass('showLayer');
        $('.second-menu').addClass('secondOpen');
        $('.main-content').addClass('moveContent');
        $('nav').addClass('staticNav');
    })
    $('.shadow-layer, .button-close').on('click', function(){
        $('body, html').removeClass('staticBody');
        $('nav').removeClass('staticNav');
        $('.main-content').removeClass('moveContent');
        $('.shadow-layer').removeClass('showLayer');
        $('.second-menu').removeClass('secondOpen');
    })
    $('.search-button').on('click', function(){
        $('.form-search').toggleClass('show-search');
        $('.form-search input').focus();
    })
    $('.slide-up').on('click', function(){
        go_to('main-content');
    })
    $(window).bind('scroll', function(){
		var scroller = $(this).scrollTop();
        if(scroller >400){
            $('.slide-up').addClass('slide-up-visible');
        }else{
            $('.slide-up').removeClass('slide-up-visible');
        }
	});
});
