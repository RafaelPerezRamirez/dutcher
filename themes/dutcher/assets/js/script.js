jQuery(document).ready(function(){
    $ = jQuery;
    $('.menu-button').on('click', function(){
        $('body').addClass('staticBody');
        $('.shadow-layer').addClass('showLayer');
        $('.second-menu').addClass('secondOpen');
        $('.main-content').addClass('moveContent');
        $('nav').addClass('staticNav');
    })
    $('.shadow-layer').on('click', function(){
        $('body').removeClass('staticBody');
        $('nav').removeClass('staticNav');
        $('.main-content').removeClass('moveContent');
        $('.shadow-layer').removeClass('showLayer');
        $('.second-menu').removeClass('secondOpen');
    })
});
