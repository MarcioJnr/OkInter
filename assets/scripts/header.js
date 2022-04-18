$(document).ready(() => {
    $('#chevron-img').css('display', 'none');
    
    if (window.innerWidth > 992){
        $('#dropend-link-1').mouseover(() => {
            $('#dropend-menu-1').css('display', 'flex');
        }).mouseleave(() => {
            $('#dropend-menu-1').css('display', 'none');
        });

        $('#dropend-link-2').mouseover(() => {
            $('#dropend-menu-2').css('display', 'flex');
        }).mouseleave(() => {
            $('#dropend-menu-2').css('display', 'none');
        });

        $('#dropend-link-3').mouseover(() => {
            $('#dropend-menu-3').css('display', 'flex');
        }).mouseleave(() => {
            $('#dropend-menu-3').css('display', 'none');
        });

        $('#dropend-link-4').mouseover(() => {
            $('#dropend-menu-4').css('display', 'flex');
        }).mouseleave(() => {
            $('#dropend-menu-4').css('display', 'none');
        });

        $('#dropend-link-5').mouseover(() => {
            $('#dropend-menu-5').css('display', 'flex');
        }).mouseleave(() => {
            $('#dropend-menu-5').css('display', 'none');
        });
    } else {
        $('.nav-link').click(() => {
            if(!$('.nav-link').hasClass('show')) {
                $('.dropdown-menu').css('display', 'none');
            } else {
                $('.dropdown .show').css('display', 'block');
            }
        })

        $('.dropend').click(() => {
            if(!$('.dropend .dropdown').hasClass('show')) {
                $('.dropend .dropdown-menu').css('display', 'none');
            } else {
                $('.dropend .show').css('display', 'block');
            }
        })
    }
});

$('.navbar-toggler').click(() => {
    if($('.navbar-toggler').attr('aria-expanded') == 'true') {
        $('header').css('background', 'white');
        $('header').css('padding-bottom', '2rem');
        $('#logo-img').css('display', 'none');
        $('#chevron-img').css('display', 'block');
        $('#menu path').css('fill', 'black');
        $('h5').css('color', 'black');
    }
})

$('.navbar-toggler').click(() => {
    if($('.navbar-toggler').attr('aria-expanded') == 'false') {
        $('header').css('padding-bottom', '0.25rem');
        $('header').css('background', 'linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%)');
        $('#logo-img').css('display', 'block');
        $('#chevron-img').css('display', 'none');
        $('#menu path').css('fill', '#FF6A2E');
    }
})