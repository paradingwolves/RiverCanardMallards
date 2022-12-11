$(document).ready(function(){
    $('.dropdown-toggle').on('click', function(){
        $('.dropdown-menu').show();
    });
    $('main').on('mouseover', function(){
        $('.dropdown-menu').hide();
    });
});