var body = document.getElementsByTagName('body')[0],
dark_theme_class = 'Dark',
theme = getCookie('theme'),
Moon_Sun_Button = document.getElementsByClassName("famoo"),
iconPage = document.getElementById('icon-page');

const DarkButton = document.getElementsByClassName("light-Dark"),
Attributes = {style: "--fa-animation-duration: .2s; --fa-beat-fade-opacity: .1; --fa-beat-fade-scale: 1.45;"};



if(theme != '') {
    body.classList.add(theme);
}

if(body.classList.contains(dark_theme_class)){
    for(let BrefButton of Moon_Sun_Button){
        BrefButton.classList.add('fa-sun');
        BrefButton.classList.remove('fa-moon');
    }
        
} else {
    for(let BrefButton of Moon_Sun_Button){
        BrefButton.classList.add('fa-moon');
        BrefButton.classList.remove('fa-sun');
    }
}


document.addEventListener('DOMContentLoaded', function () {

    for(let button of DarkButton){
    $(button).on('click', function () {
        for(let BrefButton of Moon_Sun_Button){ 
            function SendTheAttr(BotonSun, Attributes){
                Object.keys(Attributes).forEach(attr => {
                    BotonSun.setAttribute(attr, Attributes[attr]);
                });
            }
        
        BrefButton.classList.add('fa-beat-fade');
        setTimeout( () => {
            BrefButton.classList.remove("fa-beat-fade");
        }, 400);
        
        BrefButton.classList.add('fa-sun');
        
        if(BrefButton.classList.contains('fa-moon') &&  BrefButton.classList.contains('fa-sun')){
            BrefButton.classList.remove('fa-moon');
        } else {
            BrefButton.classList.add('fa-moon');
        }
        SendTheAttr(BrefButton, Attributes);
        }

        if (body.classList.contains(dark_theme_class)) {
            iconPage.href="/img/RUP Icono.ico";
            body.classList.remove(dark_theme_class);
            setCookie('theme', 'Light');
        }
        else {
            iconPage.href="/img/RUP-Icono-white.ico";
            body.classList.add(dark_theme_class);
            setCookie('theme', 'Dark');
        }

    })};

});

// enregistrement du thème dans le cookie

function setCookie(name, value) {

    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    //console.log(expires)
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
    //console.log(document.cookie)
}




// méthode de récuperation du thème dans le cookie

function getCookie(cname) {

    var theme = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for(var i = 0; i < ca.length; i++) {

        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }

        if (c.indexOf(theme) == 0) {
            return c.substring(theme.length, c.length);
        }
    }
    return "";
}