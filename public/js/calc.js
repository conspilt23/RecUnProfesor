jQuery(function () {
    let dropdowN = $(".textBox");
    let menud = $(".option");

    let dropdowN_pensum = $(".textBox_pensum");
    let menud_pensum = $(".option_pensum");

    function verifyCmpInputs() {
        if (!$("#Career_multiple_pensum").text() == "") {
            if ($("#careerSelected").text()) {
                $("#careerSelected").text("");
            }
            setOpacity();
            $(".dropdown-container_pensum").css({
                display: "flex",
                pointerEvents: "all",
            });
        }
    }

    function verifyCareerInputs() {
        if (!$("#careerSelected").text() == "") {
            removeOpacity();
            if ($("#Career_multiple_pensum").text()) {
                $("#Career_multiple_pensum").text("");
            }
            if ($(".dropdown-container_pensum:visible")) {
                $(".dropdown-container_pensum").css({
                    display: "none",
                    pointerEvents: "none",
                });
            }
        }
    }

    $(".career").each(function () {
        $(this).on("click", (e) => {
            $(".textBox").html(e.currentTarget.innerHTML);
            $("#careerSelected").html(e.currentTarget.innerText);
            verifyCareerInputs();
            getAllCareersPensum();
            defaultContainer();
        });
    });

    function getOneOfBothPensum() {
        $(".career_pensum").each(function () {
            $(this).on("click", (e) => {
                $(".textBox_pensum").html(e.currentTarget.innerHTML);
                $("#careerSelected").html(e.currentTarget.innerText);
                removeOpacity();
                getAllCareersPensum();
                defaultContainer();
            });
        });
    }

    function verifyCareersWithMultiplePensums() {
        if (!$("#multiple_pensum").is(":empty")) {
            $("#multiple_pensum").empty();
        }

        if (!$(".textBox_pensum").is(":empty")) {
            $(".textBox_pensum").empty();
        }

        function extractBothPensums(NewP, OldP) {
            return $(
                `<div class="career_pensum" ><i class="fa-solid fa-angles-up"></i><span class="car_pensum">Pensum actual: ${NewP}</span></div><div class="career_pensum" ><i class="fa-solid fa-angles-down"></i><span class="car_pensum">Pensum antiguo: ${OldP}</span></div>`
            );
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en administración turística y hotelera"
        ) {
            let ATH_pensums = extractBothPensums("ATH11", "ATH7");
            $(ATH_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en administración de empresas"
        ) {
            let ADM_pensums = extractBothPensums("ADM11", "ADM10");
            $(ADM_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en comunicación digital"
        ) {
            let CDG_pensums = extractBothPensums("CDG11", "CDG10");
            $(CDG_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en contabilidad"
        ) {
            let CON_pensums = extractBothPensums("CON11", "CON10");
            $(CON_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en diseño de interiores"
        ) {
            let DIN_pensums = extractBothPensums("DIN11", "DIN10");
            $(DIN_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en diseño gráfico"
        ) {
            let DIN_pensums = extractBothPensums("DIG11", "DIG10");
            $(DIN_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en mercadotecnia"
        ) {
            let MER_pensums = extractBothPensums("MER11", "MER10");
            $(MER_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() ==
            "Licenciatura en negocios internacionales"
        ) {
            let NIN_pensums = extractBothPensums("NIN11", "NIN7");
            $(NIN_pensums).appendTo("#multiple_pensum");
        }

        if (
            $("#Career_multiple_pensum").text() == "Licenciatura en publicidad"
        ) {
            let PUB_pensums = extractBothPensums("PUB11", "PUB10");
            $(PUB_pensums).appendTo("#multiple_pensum");
        }

        getOneOfBothPensum();
    }

    $(".cmp").each(function () {
        $(this).on("click", (e) => {
            $(".textBox").html(e.currentTarget.innerHTML);
            $("#Career_multiple_pensum").html(e.currentTarget.innerText);
            verifyCmpInputs();
            deleteExtraOptions();
            clearAll();
            verifyCareersWithMultiplePensums();
        });
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

    function detectClickOutsideBx(textbox, car, menu) {
        $(window).click((clickOutsideBx) => {
            if (
                !clickOutsideBx.target.matches(textbox) &
                !clickOutsideBx.target.matches(car)
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
                        }, 100);
                    }
                }
            }
        });
    }

    openCustomSelect(dropdowN, menud);
    openCustomSelect(dropdowN_pensum, menud_pensum);
    detectClickOutsideBx(".textBox", ".textBox .car", ".option");
    detectClickOutsideBx(
        ".textBox_pensum",
        ".textBox_pensum .car_pensum",
        ".option_pensum"
    );

    $(window).on("click", (clickOutsideBxSubject) => {
        if (
            !clickOutsideBxSubject.target.matches(".search") &
            !clickOutsideBxSubject.target.matches(".glass") &
            !clickOutsideBxSubject.target.matches(".glass i") &
            !clickOutsideBxSubject.target.matches(".selected") &
            !clickOutsideBxSubject.target.matches(".option-container")
        ) {
            let selected = $(".option-container");
            let s;
            for (s = 0; s < selected.length; s++) {
                let selecteds = selected[s];

                if (selecteds.classList.contains("active")) {
                    $(".fondo-select-responsive-subject")
                        .fadeOut(300)
                        .removeClass("activ");
                    setTimeout(function () {
                        $(selected).slideUp(250);
                        $(selected).removeClass("active");
                    }, 100);
                }
            }
        }
    });

    $(window).on("click", (clickOutsideBxGrade) => {
        if (!clickOutsideBxGrade.target.matches(".selected-grade")) {
            let selected = $(".box-grade");
            let s;
            for (s = 0; s < selected.length; s++) {
                let selecteds = selected[s];

                if (selecteds.classList.contains("active")) {
                    $(".fondo-select-responsive-grade")
                        .fadeOut(300)
                        .removeClass("activ");
                    setTimeout(function () {
                        $(".option-container-grade").slideUp(250);
                        $(selected).removeClass("active");
                    }, 100);
                }
            }
        }
    });

    //Section for the select of a subject

    var i = 2;
    $("#add_calc").click(() => {
        var $delete = $(
            '<div class="delete"><button type="button" class="md-ripples ripples-bg delete-button"><i class="fa-solid fa-circle-xmark delete-i"></i></button></div>'
        );
        let clone = $(".boxes-grades:first").clone(true).css({
            display: "flex",
            opacity: "inherit",
            visibility: "inherit",
        });
        clone.addClass("clo");

        let cloneWithRemovedData = clone.removeData();
        let cloneWihRvDataAndId = cloneWithRemovedData.attr("id", i);
        cloneWihRvDataAndId.appendTo(".boxes-container");

        clone.find(".box-grade").append($delete);

        clone.find(".glass").attr("for", "search_subject_" + i);
        clone.find(".search").attr("id", "search_subject_" + i);
        clone.find(".radio").attr("name", "subject_selection" + i);
        clone.find(".radio-grade").attr("name", "grade_selection" + i);
        clone.find(".selected, .selected-grade").addClass("s_length");

        i++;
    });

    //Delete the cloned element
    $(document).on("click", ".delete-button", (e) => {
        let parent = e.target.parentNode;
        let parent2 = parent.parentNode;
        let parent3 = parent2.parentNode;
        $(`#${parent3.id}`).remove();
    });

    //For the subjects

    $(document).on("click", `.selected`, (e) => {
        let parent1 = e.target.parentNode;
        let parent2 = parent1.parentNode;
        let parent3 = parent2.parentNode;
        $(`#${parent3.id} .option-container`)
            .slideToggle(250)
            .toggleClass("active");
        if ($(`#${parent3.id} .option-container`).hasClass("active")) {
            $(".fondo-select-responsive-subject").fadeIn(250).addClass("activ");
        } else {
            $(".fondo-select-responsive-subject")
                .fadeOut(250)
                .removeClass("activ");
        }

        $("body").on("click", ".option_subject", function () {
            $(`#${parent3.id} .option_subject`).each(function () {
                $(this).on("click", (e) => {
                    $(`#${parent3.id} .info-subject`).html(
                        e.currentTarget.innerText
                    );
                });
            });
        });
    });

    //For the grade (A, B, F, etc...)

    $(document).on("click", `.selected-grade`, (e) => {
        let parent1 = e.target.parentNode;
        let parent2 = parent1.parentNode;
        $(`#${parent2.id} .option-container-grade`).slideToggle(250);
        $(`#${parent2.id} .box-grade`).toggleClass("active");
        if ($(`#${parent2.id} .box-grade`).hasClass("active")) {
            $(".fondo-select-responsive-grade").fadeIn(250).addClass("activ");
        } else {
            $(".fondo-select-responsive-grade")
                .fadeOut(250)
                .removeClass("activ");
        }

        $("body").on("click", ".option_subject-grade", function () {
            $(`#${parent2.id} .option_subject-grade`).each(function () {
                $(this).on("click", (e) => {
                    $(`#${parent2.id} .info-subject-grade`).html(
                        e.currentTarget.innerText
                    );
                });
            });
        });
    });

    //Uncheck options if user exits...

    function UncheckRadioButtons() {
        if ($(".radio:checked")) {
            $(".radio").prop("checked", false);
        }
        if ($(".radio-grade:checked")) {
            $(".radio-grade").prop("checked", false);
        }
    }

    $(window).on("beforeunload", () => {
        UncheckRadioButtons();
    });

    //This is the subject search section

    $(".search").keydown((e) => {
        if (e.keyCode == 13) {
            e.preventDefault();
            return false;
        }
    });

    $(document).on("keyup", ".search", function (e) {
        let parent = e.target.parentNode;
        let parent2 = parent.parentNode;
        let parent3 = parent2.parentNode;
        let parent4 = parent3.parentNode;
        let parent5 = parent4.parentNode;

        let allSubjects = $(`#${parent5.id} .option_subject`).length;
        let value = $(`#${parent5.id} .search`)
            .val()
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .trim()
            .toUpperCase();
        $(`#${parent5.id} .option_subject`).each(function () {
            let search = $(this)
                .text()
                .normalize("NFD")
                .replace(/[\u0300-\u036f]/g, "")
                .trim()
                .toUpperCase();

            if (!value) {
                $(`#${parent5.id} .quarter`).show();
                $(`#${parent5.id} .option-container`).css({ height: "250px" });
            } else {
                $(`#${parent5.id} .quarter`).hide();
                $(`#${parent5.id} .option-container`).css({
                    height: "max-content",
                    maxHeight: "300px",
                });
            }

            if (search.indexOf(value) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        if ($(`#${parent5.id} .option_subject:hidden`).length == allSubjects) {
            $(`#${parent5.id} .notFound`).show();
        } else {
            $(`#${parent5.id} .notFound`).hide();
        }
    });

    //Now, the GPA calculation
    function calcIndex() {
        var danger_academic = "Prueba académica";
        var normal_academic = "Normal";
        var index_credits = [];
        var index_grades = [];
        var sum_credits = 0;

        $(".radio:checked").each(function () {
            index_credits.push(parseInt($(this).val()));

            sum_credits = index_credits.reduce(function (
                previousValue,
                currentValue
            ) {
                return previousValue + currentValue;
            });
        });

        $(".radio-grade:checked").each(function () {
            index_grades.push($(this).val());
        });

        for (let index = 0; index < index_grades.length; index++) {
            if (index_grades[index] == "") {
                sum_credits -= index_credits[index];
                index_grades[index] = "0.1";
                index_credits[index] = "0";
            }
        }

        var total_points = index_credits.reduce(function (r, a, i) {
            return r + a * index_grades[i];
        }, 0);

        var result_index = parseFloat(total_points / sum_credits).toFixed(2);

        var percentage_of_result_index = (result_index * 100) / 4;

        function setValueAndColor(clr, result_index_percent) {
            $(".percent").attr(
                "style",
                `--clr:${clr}; --num:${result_index_percent};`
            );
        }

        $(".span-title").html(result_index);

        if (Math.abs(result_index) < 2) {
            $(".condt").html(danger_academic);
            setValueAndColor("#fa2424", percentage_of_result_index);
        }
        if (Math.abs(result_index) >= 2 && Math.abs(result_index) < 3) {
            setValueAndColor("#ffc107", percentage_of_result_index);
        }
        if (Math.abs(result_index) >= 2) {
            $(".condt").html(normal_academic);
        }
        if (Math.abs(result_index) >= 3) {
            setValueAndColor("#04fc43", percentage_of_result_index);
        }
        if (isNaN(result_index)) {
            $(".span-title").html("N/D");
            $(".condt").html("No definida");
            var empt = 0;
            setValueAndColor("#24FAF7", empt);
        }
    }

    function defaultContainer() {
        if ($(".quarter:hidden")) {
            $(".search").val("");
            $(".quarter").show();
            $(".option-container").css({ height: "250px" });
        }

        if ($(".notFound:visible")) {
            $(".notFound").hide();
        }

        if ($(".option_subject:hidden")) {
            $(".option_subject").show();
        }
    }

    function verify_all_radioButtons() {
        let empty_field = $(".toast");
        let bar_progress = $(".bar-progress");
        let $this_length = $(".s_length").length;
        let radio_checked = $("input[type=radio]:checked").length;
        let IndexContainer = $(".container-index");

        function RemoveWarningBeforeCalc(this_class, other_class) {
            if (this_class.hasClass("active")) {
                this_class.removeClass("active");
            }

            if (other_class.hasClass("active")) {
                other_class.removeClass("active");
            }
        }
        function addWarningBeforeCalc(this_class, other_class) {
            if (!this_class.hasClass("active")) {
                this_class.addClass("active");
                setTimeout(() => {
                    this_class.removeClass("active");
                }, 4000);
            }

            if (!other_class.hasClass("active")) {
                other_class.addClass("active");
                setTimeout(() => {
                    other_class.removeClass("active");
                }, 4000);
            }
        }

        if (radio_checked == $this_length) {
            calcIndex();
            RemoveWarningBeforeCalc(empty_field, bar_progress);
            IndexContainer.fadeIn(80);
            $(".fondo-index").fadeIn(120).addClass("f-index-activ");
            $(".fondo-index").on("click", () => {
                $(".fondo-index").removeClass("f-index-activ");
                $(IndexContainer).fadeOut(120).css({ display: "none" });
                $(".fondo-index").fadeOut(120);
                $(document).unbind("keydown");
                $("body").css({ overflow: "inherit" });
            });

            $(document).on("keydown", function (TAB) {
                if (TAB.key == "TAB") {
                    TAB.preventDefault();
                }
            });

            $(document).keyup((e) => {
                if (e.key === "Escape") {
                    {
                        $(IndexContainer).fadeOut(120).css({ display: "none" });
                        $(".fondo-index").fadeOut(120);
                        $(document).unbind("keydown");
                    }
                }
            });
        } else {
            addWarningBeforeCalc(empty_field, bar_progress);
        }
    }

    $("#ShowIndex").on("click", function () {
        verify_all_radioButtons();
    });

    //Ajax for the careers

    function deleteExtraOptions() {
        let clonedEl = $(".clo");
        if (clonedEl.length != 0) {
            $(".clo").remove();
        }
    }

    function clearAll() {
        deleteExtraOptions();
        $(".subjects").empty();
        $(".info-subject").text("Selecciona una asignatura:");
        $(".info-subject-grade").text("Calificación:");
        UncheckRadioButtons();
    }

    function AjaxCareers(career) {
        $.ajax({
            url: `/pensum`,
            method: "POST",
            data: {
                id: 1,
                _token: $('input[name="_token"]').val(),
                career,
            },
        }).done(function (res) {
            let array = JSON.parse(res);
            console.log(array);
            let lastQuarter;
            for (let x = 0; x < array.length; x++) {

                let content = `
                ${lastQuarter == array[x].quarter ? '' : `<div class="quarter grade-center" aria-disabled="true">${array[x].quarter}</div>`}
                    <div class="option_subject md-ripples ripples-bg-immer-weiss">
                    <label  class="label_selection">${array[x].subject}
                    <input type="radio" name="subject_selection" class="radio" value="${array[x].credits}">
                    </label>
                    </div>`;

                $(content).appendTo(".subjects");

                lastQuarter = array[x].quarter;
            }
        });
    }

    $(document).ajaxStart(function () {
        $(".spinner-charge").show();
        $(".search").prop("disabled", true);
    });

    $(document).ajaxComplete(function () {
        $(".spinner-charge").hide();
        $(".search").prop("disabled", false);
    });

    function setOpacity() {
        if ($("#careerSelected").text() == "") {
            $("#calcForm").css({
                opacity: "0.2",
                pointerEvents: "none",
                transition: "opacity .5s ease",
            });
        }
    }
    setOpacity();

    function removeOpacity() {
        if (!$("#careerSelected").text() == "") {
            $("#calcForm").css({
                opacity: "inherit",
                pointerEvents: "inherit",
            });
        }
    }

    function getAllCareersPensum() {
        removeOpacity();
        let selectedCareer = $("#careerSelected").text();
        clearAll();
        AjaxCareers(selectedCareer);
    }
    $(window).ready(() => {
        if ($("#careerSelected").text()) {
            getAllCareersPensum();
        }

        if ($("#Career_multiple_pensum").text()) {
            $(".dropdown-container_pensum").css({
                display: "flex",
                pointerEvents: "all",
            });
            verifyCareersWithMultiplePensums();
        }
    });
});
