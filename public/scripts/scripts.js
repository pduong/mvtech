$(document).ready(function(){
    $(".small-menu-toogle .btn-primary").click(function(){
        if($("#nav").hasClass("display-menu")){
            $("#nav").removeClass("display-menu");            
        }else{
            $("#nav").addClass("display-menu");
        }
    });
});