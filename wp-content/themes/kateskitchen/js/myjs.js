/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){
    $("#navbar li").click(function(){
        $("#navbar li").removeClass("active");
        $(this).addClass("active");
        $("#navbar li")
    });
    $('.carousel').carousel({
        interva: "hover"
    });
    $(".button_head_menu").click(function(){
        $("#navbar").addClass("nav-stacked");
    });
    $(window).on('load resize',windowSize);
    function windowSize(){
        if($(window).width()>=768){
            $("#navbar").removeClass("nav-stacked");
        }else {
            $("#navbar").addClass("nav-stacked");
        }
    }

});