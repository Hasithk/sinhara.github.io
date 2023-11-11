$(document).ready(function(){

$('.navbar-toggler').click(function(){
    $('.navbar-toggler').toggleClass('change');
})
// adding fixed background
$(window).scroll(function(){
    let position = $(this).scrollTop();
    if(position>=77){
        $('.navbar').addClass('navbar-background');
        $('.navbar').addClass('fixed-top');
    }
    else{$('.navbar').removeClass('navbar-background');
    $('.navbar').removeClass('fixed-top');}
})
//smooth scroling
$('.nav-item a').click(function(link){
    link.preventDefault();

    let target= $(this).attr('href');
    $('html, body').stop().animate({
        scrollTop:$(target).offset().top
    },3000);
})

})