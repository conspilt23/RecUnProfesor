jQuery(function(){
    var accordion = $('.label');
    var portrait = window.matchMedia("(orientation: portrait)");

    var changeSizeOfTable = function(){
        $(window).on('resize',function() {
            if (document.documentElement.clientWidth <= 1000) {    
                let currentWidth = $(".label").width();
                $('table').css({width: (currentWidth + 300) + 'px'});
                $('.table-scroll').css({maxWidth: currentWidth + 'px', width: ''});
            };
        }).resize();

        $(window).on('resize', function(){
            if (document.documentElement.clientWidth > 1000) {    
                $('table').css({width: 'inherit'});
                $('.table-scroll').css({width: 'inherit', maxWidth: ''});
            };
        }).resize();
    }

    $(portrait).on("change", function(e) {if(e.matches) {changeSizeOfTable();} else {changeSizeOfTable();}});

    $(accordion).each(function(){
        $(this).on('click', () => {
            changeSizeOfTable();
            $(this).parent('.contentBx').toggleClass('active');
            $(this).next('.content').slideToggle(250);
        });
    });
});