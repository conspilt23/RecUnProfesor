$(document).ready(function(){
    const search = $('.search');
    const buttonSearch = $('#search-R');

    $('#clearBar').click( () => {
        $('#searchBar').val('');
    });

    buttonSearch.click( () => {
        $('.search-parent').fadeIn(250);
        $('#Login-fondo').fadeIn(230).addClass('fondo-login-activated');
        $('body').css({overflow: 'hidden'});
        setTimeout(function(){
            search.addClass('active');
        }, 220);
        $(document).keydown(function(TAB) {
            if (TAB.keyCode == 9) { 
                 TAB.preventDefault(); 
            }
        });
    })

    function closeSearch() {
        $('body').css({overflow: 'inherit'});
        $('.search-parent').fadeOut(250);
        $('#Login-fondo').fadeOut(230).removeClass('fondo-login-activated');
        setTimeout(function(){
            search.removeClass('active');
        }, 20);
        $(document).unbind('keydown');
    }

    $(document).keyup( (esc) => {if(esc.keyCode == 27 && $('#Login-fondo').hasClass('fondo-login-activated')){
        closeSearch();
    }});

    $('.closeSearch, #Login-fondo').click( () => {
        closeSearch();
    });
});