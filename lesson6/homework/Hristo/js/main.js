$(document).ready(function(){

    var animating = false;

    $('.circles .circle').click(function(){

        if( $('.topCarousel img:visible').index() != $(this).index() ){

            var current = $('.topCarousel img:visible').index();
            var target = $(this).index();

            if( $('.topCarousel img:visible').index() < $(this).index() ) {

                animateFromRight( current , target );

            }
            else {

                animateFromLeft( current , target );

            }

        }

    });

    function autoChange() {

        index = $('.topCarousel img:visible').index();
        if(index == 2) {
            animateFromLeft( index , 0 )
            index = 0;
        }
        else
        {
            animateFromRight( index , index+1 )
        }

    }

    $('.topCarousel img').click( autoChange );

    setInterval( autoChange, 5000 );

    function animateFromRight( current , target ) {

        if( animating == false ) {

            animating = true;
            $('.topCarousel img').eq(current).animate({left: "-100%"}, 1000, function () {
                $(this).css({display: "none"});
                animating = false;
            });
            $('.topCarousel img').eq(target).css({display: "block", left: "100%"});
            $('.topCarousel img').eq(target).animate({left: "0%"}, 1000);
            $('.circle').css({ background: "none" });
            $('.circles .circle').eq(target).css({ background: "grey" });

        }
    }

    function animateFromLeft( current , target ) {

        if( animating == false ) {

            animating = true;
            $('.topCarousel img').eq(current).animate({left: "100%"}, 1000, function () {
                $(this).css({display: "none"});
                animating = false;
            });
            $('.topCarousel img').eq(target).css({display: "block", left: "-100%"});
            $('.topCarousel img').eq(target).animate({left: "0%"}, 1000);
        
            $('.circle').css({ background: "none" });
            $('.circles .circle').eq(target).css({ background: "grey" });
        }
    }

    $(".circle").mouseover( function(){

        $(this).css({ background: "grey" });

    });

    $(".circle").mouseout( function(){

        $(this).css({ background: "none" });

    });
});
