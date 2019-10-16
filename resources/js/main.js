$(document).ready(function(){
    $(".hero-text").animate({left: '100px', top: '100px'}, 1500);
    $('.heart').click(function (e) {
        e.preventDefault();
        if($(this).find('i').attr('class') == 'fa fa-heart'){
            $(this).find('i').attr('class' , 'fa fa-heart-o');
        } else {
            $(this).find('i').attr('class' , 'fa fa-heart');
        }
    });
    $('.like').click(function (e) { 
        e.preventDefault();
        if($(this).find('i').attr('class') == 'fa fa-thumbs-up'){
            $(this).find('i').attr('class' , 'fa fa-thumbs-o-up');
        } else {
            $(this).find('i').attr('class' , 'fa fa-thumbs-up');
        }
    });
    $('.cart').click(function (e) { 
        e.preventDefault();
        if($(this).find('i').attr('class') == 'fa fa-shopping-cart'){
            $(this).find('i').attr('class' , 'fal fa-shopping-cart');
        } else {
            $(this).find('i').attr('class' , 'fa fa-shopping-cart');
        }
    });
});
