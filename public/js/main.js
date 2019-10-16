
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})

$(function(){
    $('#header-top').data('size','big');
});

// $(window).scroll(function(){
//     if($(document).scrollTop() > 0)
//     {
//         if($('#header-top').data('size') == 'big')
//         {
//             $('#header-top').data('size','small');
//             $('#header-top').stop().animate({
//                 height:'40px'
//             },600);
//         }
//     }
//     else
//     {
//         if($('#header-top').data('size') == 'small')
//         {
//             $('#header-top').data('size','big');
//             $('#header-top').stop().animate({
//                 height:'100px'
//             },600);

//         }  
//     }
// });
