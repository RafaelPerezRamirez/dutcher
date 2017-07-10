jQuery(document).ready(function(){
    $ = jQuery;
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
});
