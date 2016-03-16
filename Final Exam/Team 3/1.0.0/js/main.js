/**
 * Created by Zerzolar on 12.3.2016 г..
 */

$(document).ready( function(){

    $('#login-form').hide();
    $('#sign-in-form').hide();
    $('#darker-bg').hide();

    $('#login-button').click(function(){
        $('#darker-bg').show();
        $('#login-form').css({top : '-40'});
        $('#login-form').show();
        $('#login-form').animate({top:"30%"}, 400);
    });

    $('#sign-in-button').click(function(){
        $('#darker-bg').show();
        $('#sign-in-form').css({top : '-50'});
        $('#sign-in-form').show();
        $('#sign-in-form').animate({top:"30%"}, 400);
    });

    $('#darker-bg').click(function(){
        $('#darker-bg').hide();
        $('#login-form').stop(true,true).css({top:"-40%"});
        $('#login-form').hide();
        $('#sign-in-form').stop(true,true).css({top:"-50%"});
        $('#sign-in-form').hide();
    });

    $(window).keydown(function(event){
        if(event.keyCode == 27){
            $('#darker-bg').hide();
            $('#login-form').stop(true,true).css({top:"-40%"});
            $('#sign-in-form').stop(true,true).css({top:"-50%"});
            $('#sign-in-form').hide();
        }
    });

    $('.log-in-link').click(function(){
        $('#sign-in-form').css({top:"-50%"});
        $('#sign-in-form').hide();
        $('#login-form').css({top:"30%"});
        $('#login-form').show();
    });

    $('.sign-in-link').click(function(){
        $('#login-form').css({top:"-40%"});
        $('#login-form').hide();
        $('#sign-in-form').css({top:"30%"});
        $('#sign-in-form').show();
    });

    //side jokes

    $('.terms-and-policies-link').click(function(){
        alert("Just kidding.... go on :D");
    });

    $('#forgotten-password').click(function(){
        alert("That's your problem :P");
    });


    //sign in validations

    $('.username').on("keyup", function(event){

        //alert("sth");

        $.ajax({
            url: "/php/signInValidations.php",
            type: "POST",
            data: { username: event},
            success: function(response) {
               $('.img').html(response);
                alert("yeswe");
            },
            error:function(err){
                console.log(err);
            }
        });

    });

});