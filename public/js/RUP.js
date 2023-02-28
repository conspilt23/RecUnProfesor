$(document).ready(function () {
    $("#responsive_nav").click(function () {
        $("#le_nav").toggleClass("le-nav-active");
        $("#fondoTransparente").fadeToggle(250);
        $(this).toggleClass("responsive-nav-rotate").attr("disabled", "true");
        setTimeout(function () {
            $("#responsive_nav").attr("disabled", false);
        }, 300);
    });

    $("#fondoTransparente").click(function () {
        $("ul").removeClass("le-nav-active");
        $(this).fadeOut(250);
        $("#responsive_nav").removeClass("responsive-nav-rotate");
    });

    $(".sub-1").click(function () {
        $(".dow-1").toggleClass("fa-chevron-down-rotate");
        $(".menu-desplegable")
            .slideToggle(450)
            .toggleClass("menu-desplegable-active");

        $(this).css({ pointerEvents: "none" });
        setTimeout(function () {
            $(".sub-1").css({ pointerEvents: "all" });
        }, 830);
    });

    $(window).click(function (ClickFuera) {
        if (
            !ClickFuera.target.matches(".sub-1") &
            !ClickFuera.target.matches(".fa-user") &
            !ClickFuera.target.matches(".dow-1") &
            !ClickFuera.target.matches(".register .register1") &
            !ClickFuera.target.matches(".famoo") &
            !ClickFuera.target.matches(".notClose .register1")
        ) {
            var MenuDesplegable = $(".menu-desplegable");
            var i;
            for (i = 0; i < MenuDesplegable.length; i++) {
                var CerrarMenuD = MenuDesplegable[i];
                if (CerrarMenuD.classList.contains("menu-desplegable-active")) {
                    $(".dow-1")
                        .addClass(".fa-chevron-down-rotate-outside")
                        .removeClass("fa-chevron-down-rotate");
                    $(".menu-desplegable")
                        .slideUp(500)
                        .removeClass("menu-desplegable-active");

                    $(AllBo[2]).children(".fa-solid").addClass("fa-flip").css({
                        "--fa-animation-duration": ".450s",
                    });
                    if ($(".fa-chevron-down").hasClass("fa-flip")) {
                        $(".fa-chevron-down").removeClass("fa-flip");

                        setTimeout(function () {
                            $(AllBo[2])
                                .children(".fa-solid")
                                .removeClass("fa-flip");
                        }, 400);
                    }
                }
            }
        }
    });

    $(".sub-2").click(function () {
        $(".down-2").toggleClass("fa-chevron-down-rotate");
        $(".menu-desplegable-2")
            .slideToggle(450)
            .toggleClass("menu-desplegable-2-active");

        $(this).css({ pointerEvents: "none" });
        setTimeout(function () {
            $(".sub-2").css({ pointerEvents: "all" });
        }, 830);
    });

    $(window).click(function (ClickFuera2) {
        if (
            !ClickFuera2.target.matches(".sub-2") &
            !ClickFuera2.target.matches(".fa-screwdriver-wrench") &
            !ClickFuera2.target.matches(".down-2") &
            !ClickFuera2.target.matches(".menu-desplegable-2 ul li a") &
            !ClickFuera2.target.matches(".famoo")
        ) {
            var MenuDesplegable2 = $(".menu-desplegable-2");
            var j;
            for (j = 0; j < MenuDesplegable2.length; j++) {
                var CerrarMenuD2 = MenuDesplegable2[j];
                if (
                    CerrarMenuD2.classList.contains("menu-desplegable-2-active")
                ) {
                    $(".down-2")
                        .addClass(".fa-chevron-down-rotate-outside")
                        .removeClass("fa-chevron-down-rotate");
                    $(".menu-desplegable-2")
                        .slideUp(500)
                        .removeClass("menu-desplegable-2-active");

                    $(AllBo[3]).children(".fa-solid").addClass("fa-flip").css({
                        "--fa-animation-duration": ".450s",
                    });
                    if ($(".fa-chevron-down").hasClass("fa-flip")) {
                        $(".fa-chevron-down").removeClass("fa-flip");

                        setTimeout(function () {
                            $(AllBo[3])
                                .children(".fa-solid")
                                .removeClass("fa-flip");
                        }, 400);
                    }
                }
            }
        }
    });

    //Login
    const removeThings = () =>  {
        $("ul").removeClass("le-nav-active");
        $("#fondoTransparente").fadeOut(250);
        $("#responsive_nav").removeClass("responsive-nav-rotate");
        $("#Login-fondo").fadeIn(230).addClass("fondo-login-activated");
        if ($(".fondo-login").hasClass("fondo-login-activated")) {
            $("body").css({
                overflow: "hidden",
            });

            $(document).keydown(function (TAB) {
                if (TAB.keyCode == 9) {
                    TAB.preventDefault();
                }
            });
        }
    }

    $("#Login, #login_guest").on("click", function () {
        removeThings();
        $("#contenedor-login, .an-form")
            .show()
            .css({ transform: "translateX(0)" })
            .addClass("contenedor-login-actived");
    });

    $('#Account').on("click", () => {
        removeThings();
        $('.an-user').css({transform: 'translateX(0px)'});
    });

    $('.noti-in').on("click", () => {
        removeThings();
        $('.an-user').css({transform: 'translateX(-253px)'});
        $('.an-notifications').fadeIn(200);
        $('#Login-fondo').css({zIndex: '460'});
    });

    $('#return-noti').on("click", () => {
        $('.an-user').css({transform: 'translateX(0px)'});
        $('.an-notifications').fadeOut(200);
        $('#Login-fondo').css({zIndex: '400'});
    });

    $('#close-noti').on("click", () => {
        $("#Login-fondo").fadeOut(330).removeClass("fondo-login-activated");
        $('.an-notifications').fadeOut(200);
        $('#Login-fondo').css({zIndex: '400'});
        $('body').css({overflow: 'inherit'});
    });

    $('#Login-fondo').on("click", () => {
        $('.an-notifications').fadeOut(200);
        $(this).css({zIndex: 'inherit'});
        $('#Login-fondo').css({zIndex: '400'});
    });

    $(window).ready(() => {
        var avatarColor = $('.avatar-picture svg circle').attr('fill');
        $('.an-user, .an-notifications').attr('style', `--avatar_color:${avatarColor}`)
    });

    const cerrar = () => {
        $('.an-user').css({transform: 'translateX(-253px)'});
        $("#Login-fondo").fadeOut(330).removeClass("fondo-login-activated");
        $("#contenedor-login, .an-form")
            .hide()
            .css({ transform: "translateX(0)" })
            .removeClass("contenedor-login-actived");
        $("#contenedor-login1, .an-form-re").hide();
        $("body").css({
            overflow: "inherit",
        });
        $(document).unbind("keydown");
    };
    $(".close").each(function () {
        $(this).click(cerrar);
    });

    $(document).keyup(function (esc) {
        if (
            esc.keyCode == 27 &&
            $("#Login-fondo").hasClass("fondo-login-activated")
        ) {
            $(cerrar);
        }
    });


    const getRecentOpinion  = () => {
        $.ajax({
            url: "/recent-opinions",
            method: "GET",
            success: function(data) {
                    var opinions = data.html;
                    var recentOpinionsContainer = ('#recent-opinions');
                    $(recentOpinionsContainer).empty();
                    $(opinions).appendTo(recentOpinionsContainer);
            }
        });
    }

    let showRecentOpinions = false;
    $(document).on('click', '.shert', () => {
        $('#opinions_show').slideToggle(250).css({display: 'flex'});
        showRecentOpinions = !showRecentOpinions;
        $('.shert').removeAttr('id');
        if(showRecentOpinions) {
            $('.shert').text('Ocultar opiniones recientes');
        } else {
            $('.shert').text('Ver opiniones recientes');
        }
    });

    $(document).on('click', '#show_recent_opinions', () => {
        getRecentOpinion();
    });

    $("#forgot-password").click(function () {

        $('.an-form').fadeOut(400).css({
            transform: "translateX(-25em)",
            transition: "transform .33s cubic-bezier(.12,.27,.17,.71)",
        });

        $("#contenedor-login1").show().fadeIn(500);
        $('.an-form-re').show().fadeIn(700);
    });

    $("#arrow-left").click(function () {
        $("#contenedor-login, .an-form").show().css({
            transform: "translateX(0)",
        });

        $("#contenedor-login1").fadeOut(400).hide();
        $('.an-form-re').fadeOut(200).hide();
    });

    $("body").on("click", "#mostrarEsconder", function () {
        var entrada = $(".contrasena");
        if (entrada.attr("type") === "password") {
            entrada.attr("type", "text");
            $(this).addClass("fa-eye");
            $(this).removeClass("fa-eye-slash");
        } else {
            entrada.attr("type", "password");
            $(this).removeClass("fa-eye");
            $(this).addClass("fa-eye-slash");
        }
    });

    $(window).on('resize', function(){
        if (document.documentElement.clientWidth <= 971) {    
            $("#forgot-password, #Reg").css({
                fontStyle: "italic",
                fontWeight: "700",
            });
        } else {
            $("#forgot-password, #Reg").css({
                fontStyle: "inherit",
                fontWeight: "inherit",
            });
        }     
    }).resize();

    function addBoFa(thiss, fa_X, timeOut) {
        setTimeout(function () {
            $(thiss).children(".fa-solid").addClass(fa_X).css({
                "--fa-animation-duration": ".450s",
            });
            if ($(".fa-chevron-down").hasClass(fa_X)) {
                $(".fa-chevron-down").removeClass(fa_X);
            }
        }, 30);

        setTimeout(function () {
            $(thiss).children(".fa-solid").removeClass(fa_X);
        }, timeOut);
    }

    var AllBo = $(".bo");
    AllBo.each(function () {
        $(this).mouseenter(function () {
            let $this = $(this);
            addBoFa($this, "fa-bounce", 365);
        });
    });

    for (l = 2; l <= AllBo.length; l++) {
        let mid_bo = $(AllBo[l]);
        mid_bo.click(function () {
            let $thiss = $(this);
            addBoFa($thiss, "fa-flip", 450);
        });
    }

    //ripple effect with Vanilla JavaScript...
    document.querySelectorAll('[effect="ripple"]').forEach((element) => {
        element.addEventListener("click", (e) => {
            e = e.touches ? e.touches[0] : e;
            const r = element.getBoundingClientRect(),
                d = Math.sqrt(Math.pow(r.width, 2) + Math.pow(r.height, 2)) * 2;
            element.style.cssText = `--s: 0; --o: 1;`;
            element.offsetTop;
            element.style.cssText = `--t: 1; --o: 0; --d: ${d}; --x:${
                e.clientX - r.left
            }; --y:${e.clientY - r.top};`;
        });
    });

    //Ajax noti
    var button_added = false;
    function getNotifications(){
        $.ajax({
            type: 'GET',
            url: `${noti_route}`,
            success: function(data) {

                $('.notifications_info').empty();
                $('.noti-in').removeAttr('id')
                if(data.length > 0) {
                    var button_all_read = '<a href="javascript:void(0)" class="md-ripples ripples-bg" id="read_all_now">Marcar todo como leído</a>'
                    if (!button_added) {
                        $(button_all_read).appendTo('#read_all_link');
                        button_added = true;
                    }

                    
                    for (let x = 0; x < data.length; x++) {
                        var notificationItem = 
                        `<div class="hasNotifications">
                        <i class="fa-regular `+ data[x].class_icon +` type_not"></i><p>` + data[x].message + `</p>
                        <div class="actions_links">
                        <a href="` + data[x].link + `" class="md-ripples ripples-bg"><i class="fa-regular fa-comments"></i>Ver Comentario</a>
                        <a href="javascript:void(0)" data-id="`+data[x].id +`" id="read_now" class="md-ripples ripples-bg"><i class="fa-solid fa-check"></i> Marcar como leída</a></div>
                        </div>`;
                        $('.notifications_info').append(notificationItem);
                    }
                } else {
                    var notificationItem = `<div class="notification-item">
                    <p>Ninguna notificación por el momento...</p>
                    </div>`;
                    $('.notifications_info').append(notificationItem);
                }
            }
        });   
    }



    $('#noti-info').on("click", () => {
        getNotifications();
    });

    $(document).on("click", "#read_now", function() {
        var $link = $(this);
        var notificationId = $(this).data('id');
        $.ajax({
            method: 'PATCH',
            url: '/notifications/' + notificationId + '/mark-as-read',
            data: {
                _token: $('input[name="_token"]').val(),
            },
            success: function(data) {
                $link.text("Marcada como leída");
                $link.removeAttr("href");
                $link.css({pointerEvents: "none"});
            }
        });
    });


    $(document).on("click", "#read_all_now", function() {
        var $link = $(this);
        $.ajax({
            method: 'PATCH',
            url: '/notifications/mark-all-as-read',
            data: {
                _token: $('input[name="_token"]').val(),
            },
            success: function(data) {
                $link.text("Se ha marcado todas las notificaciones como leídas");
                $link.removeAttr("href");
                $link.removeAttr("id");
                $link.css({pointerEvents: "none"});
            }
        });
    });

    //end ajax noti

    const baner = $('.banerr'),
    close_baner = $('.closs'),
    progress_baner = $('.progress');

    baner.addClass('active');
    progress_baner.addClass('active');

    setTimeout(() => {
        baner.removeClass('active');
    }, 5000);

    close_baner.click(() => {
        baner.removeClass('active');
     });
    $(".prev-form").on("submit", function () {
        $(".prev-button").attr("disabled", "true").val("");
        $(".lds-ellipsis").fadeIn(250);
        $(".prev-a .logout").text("");
    });

    const accept_cookies = $("#acorde");
    const Aviso_cookies = $("#Cookies");

    window.dataLayer = window.dataLayer || [];

    if (!localStorage.getItem("cookies-accepted")) {
        Aviso_cookies.fadeIn(1000).addClass("av-activ");
        $(".le-nav, .botones").css({ pointerEvents: "none" });
    } else {
        dataLayer.push({ event: "Cookies-Accepted" });
    }

    accept_cookies.click(() => {
        Aviso_cookies.fadeOut(250).removeClass("av-activ");
        $(".le-nav, .botones").css({ pointerEvents: "all" });
        localStorage.setItem("cookies-accepted", true);
        dataLayer.push({ event: "Cookies-Accepted" });
    });
 });
