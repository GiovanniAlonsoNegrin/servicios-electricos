$( document ).ready(function() {
    //BUTTON SCROLL SECTION
    //Show button
    $(window).scroll(function() {
        let scroll = $(window).scrollTop();
        if(scroll >= 50) {
            $('#scrollButton').removeClass('hidden');
        } else {
            $('#scrollButton').addClass('hidden')
        }
    });
    //Action button
    $('#scrollButton').on('click', function (){
        $('html, body').animate({
            scrollTop: 0
        }, 2000);
    })
    //END BUTTON SCROLL SECTION
    //NAV BAR STICKY SECTION
    // $(window).scroll(function() {
    //     let scroll = $(window).scrollTop();
    //     if(scroll >= 90) {
    //         $('#navBar').addClass('sticky top-0');
    //     } else {
    //         $('#navBar').removeClass('sticky top-0');
    //     }
    // });
    //END NAVBAR SECTION
    //MENU SECTION
    //normal menu
    $('#profileButton').on('click', function (){
        $('#myProfile').removeClass('hidden');
    });
    $( document ).on('click', function (e){
        let menu = $('#profileButton');

        if (!menu.is(e.target) && menu.has(e.target).length === 0){
            $('#myProfile').addClass('hidden');
        }
    })
    //mobile menu
    $('#menuButtonMobile').on('click', function (){
        $('#mobile-menu').removeClass('hidden');
    });
    $( document ).on('click', function (e){
        let menu = $('#menuButtonMobile');

        if (!menu.is(e.target) && menu.has(e.target).length === 0){
            $('#mobile-menu').addClass('hidden');
        }
    })
    //END MENU SECTION

    //START SECTION
    $('#isos').animate({
        opacity: "100",
    }, 20000);
    //END START SECTION

    //SERVICES SECTION
    $('#boxOne').on('mouseenter', function(){
        $('#boxOne').animate({
            marginTop: "-=10",
        }, 300)
    });
    $('#boxOne').on('mouseleave', function(){
        $('#boxOne').animate({
            marginTop: "+=10",
        }, 300)
    });

    // $('#boxTwo').on('mouseenter', function(){
    //     $('#boxTwo').animate({
    //         marginTop: "-=10",
    //     }, 300)
    // });
    // $('#boxTwo').on('mouseleave', function(){
    //     $('#boxTwo').animate({
    //         marginTop: "+=10",
    //     }, 300)
    // });
    //END SERVICES SECTION
});


