$(document).ready(function(){
    $(".small-menu-toogle .btn-primary").click(function(){
        if($("#nav").hasClass("display-menu")){
            $("#nav").removeClass("display-menu"); 
            $(".small-menu-toogle").css('top', '129px');
        }else{
            $("#nav").addClass("display-menu");
            $(".small-menu-toogle").css('top', '112px');
        }
    });
});