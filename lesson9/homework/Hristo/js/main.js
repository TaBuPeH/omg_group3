$(document).ready(function(){

    var animating = false;

    $('.circles .circle').click(function(){

        if( $('.gallery img:visible').index() != $(this).index() ){

            var current = $('.gallery img:visible').index();
            var target = $(this).index();

            if( $('.gallery img:visible').index() < $(this).index() ) {

                animateFromRight( current , target );

            }
            else {

                animateFromLeft( current , target );

            }

        }

    });

    function autoChange() {

        index = $('.gallery img:visible').index();
        if(index == 2) {
            animateFromLeft( index , 0 )
            index = 0;
        }
        else
        {
            animateFromRight( index , index+1 )
        }

    }


    $('.gallery img').click( autoChange);



    setInterval( autoChange, 5000 )

    function animateFromRight( current , target ) {

        if( animating == false ) {

            animating = true;
            $('.gallery img').eq(current).animate({left: "-100%"}, 1000, function () {
                $(this).css({display: "none"});
                animating = false;
            });
            $('.gallery img').eq(target).css({display: "block", left: "100%"});
            $('.gallery img').eq(target).animate({left: "0%"}, 1000);
            $('.circle').css({ background: "none" });
            $('.circles .circle').eq(target).css({ background: "grey" });

        }
    }

    function animateFromLeft( current , target ) {

        if( animating == false ) {

            animating = true;
            $('.gallery img').eq(current).animate({left: "100%"}, 1000, function () {
                $(this).css({display: "none"});
                animating = false;
            });
            $('.gallery img').eq(target).css({display: "block", left: "-100%"});
            $('.gallery img').eq(target).animate({left: "0%"}, 1000);
            $('.circles div').eq(target).addClass("current");
            $('.circle').css({ background: "none" });
            $('.circles .circle').eq(target).css({ background: "grey" });

        }

    }

});
