$( document ).ready(function() {
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
});
