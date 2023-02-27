$(document).ready(function () {
    //jQuery
    //$('#showForm').on('click', () => {});


    $('#form_filter').on('keydown', (e) => {
        if (e.key == 'Enter') { 
          e.preventDefault(); 
        }
      });


    function openCustomSelect(dropDown, menu) {
        $(dropDown).on("click", function () {
            $(menu).slideToggle(200);
            $(dropDown).toggleClass("active").addClass("ve");
            $(dropDown).css({ pointerEvents: "none" });
            setTimeout(function () {
                $(dropDown).css({ pointerEvents: "all" });
            }, 350);
            if ($(dropDown).hasClass("active")) {
                $(".fondo-select-responsive").fadeIn(250).addClass("activ");
            } else {
                $(".fondo-select-responsive").fadeOut(250).removeClass("activ");
            }
        });
    }

    function detectClickOutsideBx(
        textbox,
        car,
        menu,
        search_content,
        search_input
    ) {
        $(window).click((clickOutsideBx) => {
            if (
                !clickOutsideBx.target.matches(textbox) &
                !clickOutsideBx.target.matches(car) &
                !clickOutsideBx.target.matches(search_content) &
                !clickOutsideBx.target.matches(search_input)
            ) {
                let textBox = $(textbox);
                let t;
                for (t = 0; t < textBox.length; t++) {
                    let textB = textBox[t];
                    if (textB.classList.contains("active")) {
                        $(".fondo-select-responsive")
                            .fadeOut(300)
                            .removeClass("activ");
                        setTimeout(function () {
                            $(menu).slideUp(250);
                            $(textbox).removeClass("active");
                            $(textbox).removeClass("ve");
                        }, 100);
                    }
                }
            }
        });
    }

    function getTheCurrentValue(contentValue, textBox, value_selected) {
        $(contentValue).each(function () {
            $(this).on("click", (e) => {
                $(textBox).html(e.currentTarget.innerHTML);
                $(value_selected).val(e.currentTarget.innerText);
            });
        });
    }
    openCustomSelect("#schedule_filter", "#schedule_option");
    openCustomSelect("#modality_filter", "#modality_option");
    getTheCurrentValue(".modali", "#modality_filter", "#teacher_selected");
    getTheCurrentValue(".schedul", "#schedule_filter", "#quarter_selected");
    detectClickOutsideBx(
        "#schedule_filter",
        "#schedule_filter .car",
        "#schedule_option",
        "#search_period_cont",
        "#search_period"
    );
    detectClickOutsideBx(
        "#modality_filter",
        "#modality_filter .car",
        "#modality_option",
        "#search_teacher_content",
        "#search_teacher"
    );

    $("#showForm").on("click", () => {
        $(".filter_background").fadeIn(250);
        $(".filter_back").fadeIn(250).css({ display: "block" });
    });

    $(".filter_background").on("click", () => {
        $(".filter_background").fadeOut(250);
        $(".filter_back").fadeOut(250);
    });

    $(".search").keydown((e) => {
        if (e.keyCode == 13) {
            e.preventDefault();
            return false;
        }
    });

    function searchParameter(
        search_bar,
        options,
        container_option,
        notFound,
        container_option_hiden
    ) {
        $(document).on("keyup", search_bar, function () {
            let allContent = $(container_option).length;
            let value = $(search_bar)
                .val()
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "")
                .trim()
                .toUpperCase();
            $(container_option).each(function () {
                let search = $(this)
                    .text()
                    .normalize("NFD")
                    .replace(/[\u0300-\u036f]/g, "")
                    .trim()
                    .toUpperCase();

                if (!value) {
                    $(options).css({ height: "250px" });
                } else {
                    $(options).css({
                        height: "max-content",
                        maxHeight: "250px",
                    });
                }

                if (search.indexOf(value) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            if ($(container_option_hiden).length == allContent) {
                $(notFound).show();
            } else {
                $(notFound).hide();
            }
        });
    }
    $("#the_teachers").delegate(".modali", "click", function (e) {
        $("#modality_filter").html(e.currentTarget.innerHTML);
        $("#teacher_selected").val(e.currentTarget.innerText);
    });

    searchParameter(
        "#search_period",
        "#schedule_option",
        ".schedul",
        "#sch_not_f",
        ".schedul:hidden"
    );

    function updateColor(
        value,
        roundSlider,
        status,
        no_rate,
        low_rate,
        medium_rate,
        high_rate
    ) {
        roundSlider.container.removeClass("no-rate");
        roundSlider.container.removeClass("low-rate");
        roundSlider.container.removeClass("medium-rate");
        roundSlider.container.removeClass("high-rate");
        if (value >= 0 && value <= 25) {
            roundSlider.container.addClass("no-rate");
            $(status).text(no_rate);
        } else if (value >= 26 && value <= 50) {
            roundSlider.container.addClass("low-rate");
            $(status).text(low_rate);
        } else if (value >= 51 && value <= 78) {
            roundSlider.container.addClass("medium-rate");
            $(status).text(medium_rate);
        } else if (value >= 79 && value <= 100) {
            roundSlider.container.addClass("high-rate");
            $(status).text(high_rate);
        }
    }

    $("#explaining_rate").roundSlider({
        radius: 100,
        width: 5,
        handleSize: 22,
        max: 100,
        min: 0,
        value: 0,
        sliderType: "min-range",
        drag: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_1",
                "No explica bien",
                "Explica regular",
                "Explica bien",
                "Explica muy bien"
            );
        },
        change: function () {
            let value = this.getValue();
            updateColor(value, this);
            updateColor(
                value,
                this,
                "#condition_1",
                "No explica bien",
                "Explica regular",
                "Explica bien",
                "Explica muy bien"
            );
        },
    });

    $("#evaluation_rate").roundSlider({
        radius: 100,
        width: 5,
        handleSize: 22,
        max: 100,
        min: 0,
        value: 0,
        sliderType: "min-range",
        drag: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_2",
                "Muy mal",
                "Mal",
                "Regular",
                "Excelente"
            );
        },
        change: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_2",
                "Muy mal",
                "Mal",
                "Regular",
                "Excelente"
            );
        },
    });

    $("#class_again_rate").roundSlider({
        radius: 100,
        width: 5,
        handleSize: 22,
        max: 100,
        min: 0,
        value: 0,
        sliderType: "min-range",
        drag: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_3",
                "Nunca",
                "Poco probable",
                "Tal vez",
                "Por supuesto"
            );
        },
        change: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_3",
                "Nunca",
                "Poco probable",
                "Tal vez",
                "Por supuesto"
            );
        },
    });

    $("#puntuality_rate").roundSlider({
        radius: 100,
        width: 5,
        handleSize: 22,
        max: 100,
        min: 0,
        value: 0,
        sliderType: "min-range",
        drag: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_4",
                "Nunca fue puntual",
                "Poco puntual",
                "Medianamente puntual",
                "Muy puntual"
            );
        },
        change: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_4",
                "Nunca fue puntual",
                "Poco puntual",
                "Medianamente puntual",
                "Muy puntual"
            );
        },
    });

    $("#general_rate").roundSlider({
        radius: 100,
        width: 5,
        handleSize: 22,
        max: 100,
        min: 0,
        value: 0,
        sliderType: "min-range",
        drag: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_5",
                "Baja",
                "Media baja",
                "Media",
                "Alta"
            );
        },
        change: function () {
            let value = this.getValue();
            updateColor(
                value,
                this,
                "#condition_5",
                "Baja",
                "Media baja",
                "Media",
                "Alta"
            );
        },
    });



    const formTeacher = $('#form_filter');
    const errorSlider = $('#error_slider');
    let errorMessageShown = false;
    
    // Agregar el evento "submit" al formulario
    formTeacher.on('submit', function(event) {
    
        // Verificar si los valores de los elementos roundSlider son iguales a cero
        let rates = $('#explaining_rate .rs-handle').css('background-color') === 'rgb(72, 255, 201)' ||
            $('#evaluation_rate .rs-handle').css('background-color') === 'rgb(72, 255, 201)' ||
            $('#class_again_rate .rs-handle').css('background-color') === 'rgb(72, 255, 201)' ||
            $('#puntuality_rate .rs-handle').css('background-color') === 'rgb(72, 255, 201)'||
            $('#general_rate .rs-handle').css('background-color') === 'rgb(72, 255, 201)';
    
        let teacher_input = $('#teacher_selected').val() === '';
        let quarter_input = $('#quarter_selected').val() === '';

        if (rates || teacher_input || quarter_input) {
            let rates_message = `<li id="rate_message">Por favor, debes girar o insertar un valor en los sliders de calificaciones.</li>`;
            let teacher_message = `<li id="teacher_message">Por favor, verifica que hayas seleccionado al docente que deseas calificar.</li>`;
            let quarter_message =  `<li id="quarter_message">Por favor, selecciona el último cuatrimestre que cursaste con el docente en cuestión.</li>`;

            let rates_m = rates ? rates_message : '';
            let teacher_m = teacher_input ? teacher_message : '';
            let quarter_m = quarter_input ? quarter_message : '';
            $('#rate_message').html(rates_m).toggle(rates);
$('#teacher_message').html(teacher_m).toggle(teacher_input);
$('#quarter_message').html(quarter_m).toggle(quarter_input);
            
            event.preventDefault();
            if (!errorMessageShown) {
                errorSlider.html(`<div style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: initial;"><div icondescription="describes the close button" role="status" class="cds--toast-notification cds--toast-notification--error"><svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" class="cds--toast-notification__icon"><path d="M10,1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9S15,1,10,1z M13.5,14.5l-8-8l1-1l8,8L13.5,14.5z"></path><path d="M13.5,14.5l-8-8l1-1l8,8L13.5,14.5z" data-icon-path="inner-path" opacity="0"></path><title>error icon</title></svg><div class="cds--toast-notification__details"><div class="cds--toast-notification__title">Hubo un problema al publicar tu opinión</div><div class="cds--toast-notification__subtitle"><span>Revisa lo siguiente: <ul>`+rates_m+teacher_m+quarter_m+`</ul></span></div></div></div></div>`);
                errorMessageShown = true;
            }
        } else{
        errorMessageShown = false;
        errorSlider.empty();
        $('#submit_button').prop('disabled', true).css({pointerEvents: 'none', opacity: '.5'});
    
    }
});

    var timerId;
    $(document).on("keyup", "#search_teacher", function () {
        $("#loader").fadeIn(250);
        clearTimeout(timerId);
        let value = $(this).val();
        if (!$.trim(value)) {
            $("#loader").fadeOut(100);
            return;
        }

        let self = this;
        timerId = setTimeout(function () {
            let value = $(self).val();
            $.ajax({
                url: "/the-current-teacher",
                method: "POST",
                data: {
                    search_teacher: value,
                    _token: $('input[name="_token"]').val(),
                },
                success: function (data) {
                    $("#the_teachers").empty();
                    if (data.length > 0) {
                        for (let x = 0; x < data.length; x++) {
                            let content =
                                `<div class="career modali" effect="ripple"><i class="fa-solid fa-chalkboard-user"></i><span class="car">` +
                                data[x].name +
                                `</span></div>`;
                            $(content).appendTo("#the_teachers");
                        }
                    } else {
                        $("#the_teachers").append(
                            '<div class="notFound found_t" id="t_notF" aria-disabled="true"><div class="icon-not-found"><i class="fa-solid fa-exclamation"></i></div>Ningun profesor coincide con ese nombre</div>'
                        );
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                },
            });
        }, 800);
    });
    $(document).on("blur", "#search_teacher", function () {
        clearTimeout(timerId);
    });

    $(document).ajaxComplete(function () {
        $("#loader").fadeOut(100);
    });
});
