/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){
    $("#navbar li").click(function(){
        $("#navbar li").removeClass("active");
        $(this).addClass("active");
        $("#navbar li")
    });
    $('.carousel').carousel();
});