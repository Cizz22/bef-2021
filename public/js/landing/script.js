$(document).ready(function(){

    $(window).scroll(function(){
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0}, 1000);
        $('html').css("scrollBehavior", "auto");
    });

}); 