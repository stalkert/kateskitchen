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
    $("#button_left_menu").click(function(){
        $("#recepty").slideToggle(600);
    });
    function windowSize(){
        if($(window).width()>=750){
            $("#navbar").removeClass("nav-stacked");
            $("#title_recepty").removeClass("dysplay_none");
            $("#button_left_menu").addClass("dysplay_none");
            $("#recepty").slideDown(1).removeClass("dysplay_none");
        }else {
            $("#navbar").addClass("nav-stacked");
            $("#title_recepty").addClass("dysplay_none");
            $("#button_left_menu").removeClass("dysplay_none");
            $("#recepty").slideUp(1).addClass("dysplay_none");
        }
    }

});