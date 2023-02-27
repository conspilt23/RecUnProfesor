$(document).ready(function(){
let dropdown = $('.textBox');
let menu = $('.option');

$('.career').each(function(){
    $(this).click((e) => {
        $('.textBox').html(e.currentTarget.innerHTML);
        $('#carrer_selected').val(e.currentTarget.innerText);
    });
});

$(dropdown).on('click', function(){
    if($(menu).is(':hidden')){
        $('.fondo-select-responsive').fadeIn(250).addClass('activ');   
    } else 
    {
        $('.fondo-select-responsive').fadeOut(250).removeClass('activ');   
    }
    $(menu).slideToggle(200);
    $(this).toggleClass('active').addClass('ve');
    $(dropdown).css({pointerEvents: 'none'});
    setTimeout(function () {
    $(dropdown).css({pointerEvents: 'all'});}, 350);
    if($(dropdown).hasClass('active')){
        $('.arriba').fadeOut(50)
    } else {
        setTimeout(function(){
            $('.arriba').fadeIn(350);
        }, 250);
 }
});

    function SeePassword(field, eye_buttom){
        $(eye_buttom).on('click', function(){
            let entrada = $(field);
            if(entrada.attr("type") === "password"){
                entrada.attr("type", "text");
                $(eye_buttom).addClass('fa-eye');
                $(eye_buttom).removeClass('fa-eye-slash');
            } else {
                entrada.attr("type", "password");
                $(eye_buttom).removeClass('fa-eye');
                $(eye_buttom).addClass('fa-eye-slash');
            }

        });
    }
    function SeeInfo(inf_icon, span_title){
        $(inf_icon).on(
            {mouseenter: function() {$(span_title).fadeIn(150).css("display","block");},
             mouseleave: function(){$(span_title).fadeOut(150);}});
    }

    $(window).click((clickOutsideBx) => {
        if(!clickOutsideBx.target.matches('.textBox') & !clickOutsideBx.target.matches('.textBox .car')){
            let textBox = $('.textBox');
            let t;
            for(t = 0; t < textBox.length; t++){
                let textB = textBox[t];
                if(textB.classList.contains('active')){
                    $('.fondo-select-responsive').fadeOut(300).removeClass('activ');
                    setTimeout(function(){
                        $(menu).slideUp(250);
                        $(textBox).removeClass('active');
                    }, 100)
                    setTimeout(function(){
                        $('.arriba').fadeIn(350);
                    }, 270);
                }
            }
        }
    });

    $('#confirm').change( function(){
        if ($(this).is(':checked')){
            $('#submitB').removeAttr('disabled');
        } else {
            $('#submitB').attr('disabled', 'disabled');
        }
    });
    

    SeePassword('.pas2', '.contra2');  
    SeePassword('.pas1', '.contra1');  
    SeeInfo('i.info_user', '.tool-info-user');
    SeeInfo('i.info_career', '.tool-info-career');

});
