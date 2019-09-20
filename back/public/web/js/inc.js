jQuery(document).ready(function( $ ) {

 $('#show').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        speed: 300,
        arrows:false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots:true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                }
            },
            {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
             }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,

                }
            },
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
 $('#gallery-slider').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        infinite: true,
        speed: 1000,
        arrows:true,
        prevArrow: '<button type="button" class="arrow-prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>previous</button>',
        nextArrow: '<button type="button" class="arrow-next">next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>',
        slidesToShow: 7,
        slidesToScroll: 1,
        dots:false,
     responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 6,
                    infinite: true,
                    dots: false,
                }
            },
            {
            breakpoint: 1024,
            settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
            infinite: true,
            dots: false
             }
            },
            {
            breakpoint: 992,
            settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
            infinite: true,
            dots: false
             }
            },
            {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
             }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: false
                }
            }
        ]
    });
});

$('#our-team').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 3000,
    arrows:false,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots:true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 760,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,

            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

$('#assist-slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 300,
    arrows:false,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots:true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 7,
                slidesToScroll: 7,
                infinite: true,
                dots: true,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 7,
                slidesToScroll: 7,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 6,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,

            }
        },
        {
            breakpoint: 481,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }
    ]
});

/**************===================menu-bars===================***************/
$(document).ready(function(){
    $(".menu-bars").click(function(){
        $(".menu").slideToggle();
    });
});
/**************===================video===================***************/
var myVideo = document.getElementById("video1");
function playPause() {
    if (myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
}

let ex = 0;

function extra()
{
    let fex = true;
    if(ex>2)
    {
        ex=0;
        fex=false;
        a = $( $('.extra img')[2] );
    }
    else{
        a = $( $('.extra img')[ex-1] );
    }
    
    b = $( $('.extra img')[ex] );
    if(ex>=0)
    {
        a.removeClass('fadeIn');
        a.addClass('fadeOut');
    }
    setTimeout(function(){
        if(ex>=0 ){
            a.removeClass('active');
        }
        b.addClass('active');
        b.removeClass('fadeOut');
        b.addClass('fadeIn');
    } , 1000);
    if(fex)
    {
        ex++;
    }
    
    setTimeout(extra , 7000);
}

extra();


$('.play-btn').click(function(){
    holder = $(this).parent();
    video = $(holder).children('video');
    if($(this).children('i').hasClass('fa-pause'))
    {
        $('video').trigger('pause');
        video.trigger('pause');
        $('.play-btn').children('i').removeClass('fa-pause');
        $('.play-btn').children('i').addClass('fa-play');
        $(this).children('i').addClass('fa-play');
        $(this).children('i').removeClass('fa-pause');

    }
    else{
        $('video').trigger('pause');
        $('.play-btn').children('i').removeClass('fa-pause');
        $('.play-btn').children('i').addClass('fa-play');
        video.trigger('play');
        $(this).children('i').removeClass('fa-play');
        $(this).children('i').addClass('fa-pause');
    }
});