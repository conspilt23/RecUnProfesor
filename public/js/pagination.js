$(window).resize(function() {
    if (document.documentElement.clientWidth >= 475) {    
        $('#pagination').fadeIn(250);
    }
}).resize()

$(window).resize(function() {
    if (document.documentElement.clientWidth <= 474) {   
        $('#pa').on('click', () => {
            $('#pagination').fadeIn(250);
            $('#background-pagination').fadeIn(250).addClass('act');
            
        }); 
        $('#pagination').fadeOut(250);
        $('#background-pagination').fadeOut(250).removeClass('act');
        $('#background-pagination').on('click', () => {
            $('#pagination').fadeOut(250);
            $('#background-pagination').fadeOut(250).removeClass('act');
    
        });
    }
}).resize()