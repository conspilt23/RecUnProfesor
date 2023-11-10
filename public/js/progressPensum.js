jQuery(function(){

    let dropdowN_pensum = $(".textBox_pensum");
    let menud_pensum = $(".option_pensum");
    let dropdowN = $(".textBox");
    let menud = $(".option");

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

    function verifyCmpInputs() {
        if (!$("#Career_multiple_pensum").text() == "") {
            if ($("#careerSelected").text()) {
                $("#careerSelected").text("");
            }
            $(".dropdown-container_pensum").css({
                display: "flex",
                pointerEvents: "all",
            });
        }
    }

    function verifyCareerInputs() {
        if (!$("#careerSelected").text() == "") {

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

        });
    });

    openCustomSelect(dropdowN, menud);
    openCustomSelect(dropdowN_pensum, menud_pensum);
    detectClickOutsideBx(".textBox", ".textBox .car", ".option");
    detectClickOutsideBx(
        ".textBox_pensum",
        ".textBox_pensum .car_pensum",
        ".option_pensum"
    );
    function AjaxCareers(career) {
        $.ajax({
            url: `/showPensum`,
            method: "POST",
            data: {
                _token: $('input[name="_token"]').val(),
                career,
            },
        }).done(function (res) {
            let array = JSON.parse(res);
            let groupedAsignaturas = {}; // Objeto para agrupar las asignaturas por trimestre
            var _token = $('input[name="_token"]').val();
    
            for (let x = 0; x < array.length; x++) {
                const quarter = array[x].quarter;
    
                if (!groupedAsignaturas[quarter]) {
                    groupedAsignaturas[quarter] = []; // Inicializar el grupo del trimestre
                }
    
                groupedAsignaturas[quarter].push(array[x]);
            }
    
            if ('#pen_cont') {
                $('#pen_cont').css({ pointerEvents: 'none' }).fadeOut(150);
                $("#quarters").empty(); // Limpiar el contenedor antes de agregar las tablas
            } else {
                $("#quarters").empty(); // Limpiar el contenedor antes de agregar las tablas
            }

            if($('#button_saver')){
                $('#button_saver').css({display: 'block'});
            }
            
            let selectCounter = 1;
    
            for (const quarter in groupedAsignaturas) {
                let asignaturasContent = `<div class="quarter" style="text-align: center; margin-top: 25px;" aria-disabled="true">${quarter}</div>`;

                
                asignaturasContent += `<div class="table__body" style="margin-top:23px;">`;
                asignaturasContent += `<table><thead><tr><th>Código</th><th>Asignatura</th><th>Créditos</th><th>Pre-requisitos</th><th>Status</th></tr></thead><tbody>`;
    
                for (const asignatura of groupedAsignaturas[quarter]) {
                    const preRequisites = asignatura.pre_requirements.split(',');
                    const hasPreRequisites = preRequisites.length > 0 && preRequisites[0] !== '';
                    let selectName = `select${selectCounter}_`;


                    let creditsValue = ''; // Valor por defecto en el atributo data-credits
                    let preReqString = '';

    // Verificar si hay un porcentaje en los pre-requisitos
    if (hasPreRequisites) {
        const preReqString = asignatura.pre_requirements;
        const percentageMatch = preReqString.match(/(\d+)\s*%/);
        var code_subject;

        if (percentageMatch) {
            const codeMatches = preReqString.match(/[A-Z]{3}\d{3}/g);
            creditsValue = percentageMatch[1]; // Obtener el número antes del %

            
            if (codeMatches) {
                 code_subject = codeMatches[0]; // Tomar el primer código encontrado
            } else {
                code_subject = '';
            }
        } 
    }

    
                    let statusOptions = `<option disabled ${hasPreRequisites ? 'selected' : ''} value>Status:</option>`;

                        statusOptions += `<option value="3"  class="approve-button">Aprobada</option>`;

                        statusOptions += `<option value="1" class="pending-button" ${hasPreRequisites ? '' : 'selected'}>Pendiente</option>`;
                    
                    statusOptions += `<option value="2" class="in_progress">En curso</option>`;
    
                    const selectStatus = `<select class="status-selector" name="${selectName + asignatura.code}" data-code="${asignatura.code}" data-pre="${asignatura.pre_requirements}">${statusOptions}</select>`;
    
                    const trClass = hasPreRequisites ? 'blocked_re' : '';
    
                    asignaturasContent += `<tr class="${trClass}" data-code="${asignatura.code}" data-pre="${creditsValue ? code_subject : asignatura.pre_requirements}" data-credits="${creditsValue ? creditsValue : '0'}"><td>${asignatura.code}</td><td class="subj_name">${asignatura.subject}</td><td class="row_credits">${asignatura.credits}</td><td>${asignatura.pre_requirements}</td><td>${selectStatus}</td></tr>`;

                    selectCounter++;
                }
    
                asignaturasContent += `</tbody></table></div>`;
                $(asignaturasContent).appendTo("#quarters");
        }

        initializeCharts(); //pone los graficos de progreso
  //Lógica de asignaturas con sus códigos
  const allRows = document.querySelectorAll("tr[data-code]");
  const allCreditsPre = document.querySelectorAll("tr[data-credits]");

  
  const allSelects = document.querySelectorAll("select.status-selector");

  function blockDependentRows(row) {
    const rowCode = row.getAttribute("data-code"); //Obteniendo el data-code de la materia donde se cambió el estado
    const rowCredits = row.getAttribute("data-credits");
    // Itera a través de todas las filas
    allRows.forEach((otherRow) => {
      const prereqs = otherRow.getAttribute("data-pre").split(", "); //Buscando otra materia que tenga el valor del data-code en su data-pre

      // Si la fila actual es un prerrequisito para esta fila
      if (prereqs.includes(rowCode)) {
        otherRow.classList.add("blocked_re");
        otherRow.classList.remove("in_progresss", "approved", "pending");
        const select = otherRow.querySelector("select.status-selector");
        select.setAttribute("disabled", "true");
        select.value = '';

        // Llamando a la función recursiva para bloquear las materias dependientes
        blockDependentRows(otherRow);
      }
    });

  }

  function updateDependentRows(row) {
    const rowCode = row.getAttribute("data-code");

    // Iterando a través de todas las materias
    allRows.forEach((otherRow) => {
      const prereqs = otherRow.getAttribute("data-pre").split(", ");//Obteniendo los prerrequistos de una materia

      //Validando que las materias prerrequisito tengan la clase cursed.
      if (prereqs.includes(rowCode)) {
        const allPrereqsCursed = prereqs.every((prereq) => {
          const prereqRow = document.querySelector(
            `tr[data-code="${prereq}"]`
          );
          return prereqRow.classList.contains("approved");
        });
        
        //Booleano en donde se verifica que todos los requisitos estan aprobados
        if (allPrereqsCursed) {
          /*Si la materia que es prerrequisito tiene la clase approved, entonces la materia 
          que depende de esta se le quita la clase blocked_re y se le da la clase approved, desbloqueando el select*/
          otherRow.classList.remove("blocked_re");//Se quita la clase blocked
          otherRow.classList.add("pending");//Se agrega la clase pending, indicando que esa materia está disponible para tomar
          const select = otherRow.querySelector("select.status-selector");
          select.removeAttribute("disabled");
          select.value = "1"
        } else {
          //Caso contrario se mantiene o se vuelve a bloquear la materia cuyo prerrequisito no ha sido aprobado
          otherRow.classList.add("blocked_re");
          otherRow.classList.remove("pending");
          const select = otherRow.querySelector("select.status-selector");
          select.setAttribute("disabled", "true");
          select.value = '';
        }
      }
    });
  }

        //Each inicial para bloquear las materias que tienen prerrequisito
        allRows.forEach((row) => {
            const prereqs = row.getAttribute("data-pre").split(", ");
            const select = row.querySelector("select.status-selector");
    
            // Aplica clases bloqueadas o abiertas según los prerrequisitos
            if (prereqs[0] === "") {
              row.classList.add("pending");
              row.classList.remove("blocked_re");
            } else {
              row.classList.add("blocked_re");
              row.classList.remove("pending");
              select.setAttribute("disabled", "true");
            }
          });

          allCreditsPre.forEach((row) => {
            const creditsValue = parseInt(row.getAttribute("data-credits"));
            const select = row.querySelector("select.status-selector");
    
            if (creditsValue > 0) {
                row.classList.add("blocked_re");
                row.classList.remove("in_progresss", "approved", "pending");
                select.setAttribute("disabled", "true");
                blockDependentRows(row);
            }
        });

            // Función para calcular y actualizar el porcentaje de créditos aprobados
function updateCreditsPercentage() {
    let totalCredits = 0;
    let approvedCredits = 0;
    let subjects = document.getElementsByClassName('subj_name').length; //cantidad de asignaturas de la carrera
    let approved_subjects = document.getElementsByClassName('approved').length; //cantidad de asignaturas aprobadas
    let in_progress_subjects = document.getElementsByClassName('in_progresss').length;
    let blocked_subjects = document.getElementsByClassName('blocked_re').length;
    let pending_subjects = document.getElementsByClassName('pending').length;
    

    // Iterar a través de las filas de asignaturas
    allRows.forEach((row) => {
        const credits = parseInt(row.querySelector(".row_credits").textContent, 10); //recorre todos los "td" de los creditos de asignaturas
        totalCredits += credits;

        if (row.classList.contains("approved")) {
            approvedCredits += credits;
        }
    });

    const percentage = parseFloat((approvedCredits / totalCredits) * 100).toFixed(2);
    let remainingPercentage = (parseFloat(100 - percentage)).toFixed(2);
    let remainingCredits = (totalCredits - approvedCredits);
    let remainingSubjects = (subjects - approved_subjects);
    let percentageApprovedSubjects = parseFloat((approved_subjects / subjects) * 100).toFixed(2);
    let percentageRemainingSubjects = parseFloat((100 - percentageApprovedSubjects)).toFixed(2);
    

    allCreditsPre.forEach((row) => {
        const creditsValue = parseInt(row.getAttribute("data-credits"));
        const select = row.querySelector("select.status-selector");
        const prereqs = row.getAttribute("data-pre").split(", ");
        if (creditsValue > 0 && (percentage >= creditsValue && arePrereqsApproved(prereqs))) {
            row.classList.remove("blocked_re");
            row.classList.add("pending");
            select.removeAttribute("disabled");
            if(row.classList.contains("pending")){
                select.value = '1'
            }
    
            if(row.classList.contains("pending") && (row.classList.contains('approved') || row.classList.contains('in_progresss') )) {
                row.classList.remove("pending");
                select.value = row.classList.contains('approved') ? '3' : '2';
            }
        } else if(creditsValue > 0 && (percentage < creditsValue || !arePrereqsApproved(prereqs))) {
            row.classList.add("blocked_re");
            row.classList.remove("pending", "approved", "in_progresss");
            select.setAttribute("disabled", "true");
            select.value = '';
        }});

    //console.clear();
    //console.log('Porcentaje de créditos aprobados: ' + percentage + '%');
    //console.log('Porcentaje de créditos restantes: ' + remainingPercentage + '%');
    //console.log('Créditos cursados: ' + approvedCredits + ' de ' + totalCredits);
    //console.log('Créditos restantes: ' + (totalCredits - approvedCredits));
    //console.log('Asignaturas aprobadas: ' + approved_subjects + ' de ' + subjects);
    //console.log('--------------------------------------') //separador para cada cambio

    //canvas charts para control de asignaturas
    updateCharts(approved_subjects, in_progress_subjects,blocked_subjects, pending_subjects,percentage,remainingPercentage);
    updateDataCareer(totalCredits, approvedCredits, remainingCredits, percentage, remainingPercentage, subjects, approved_subjects, remainingSubjects, percentageApprovedSubjects, percentageRemainingSubjects, blocked_subjects, in_progress_subjects, pending_subjects);
 
}



          allSelects.forEach((select) => {
            select.addEventListener("change", function () {

              const selectedValue = this.value;
              const row = this.closest("tr");
    
              // Actualiza las clases de la fila en función del valor seleccionado

              row.classList.remove("in_progresss", "approved", "blocked_re");

              if(selectedValue === "3"){
                row.classList.add("approved");
                row.classList.remove("pending", "in_progresss", "blocked_re")
              } else if(selectedValue === "2") {
                row.classList.add("in_progresss");
                row.classList.remove("pending", "approved", "blocked_re")
              } else if(selectedValue === "1"){
                row.classList.add("pending");
                row.classList.remove("in_progresss", "approved", "blocked_re")
              }

    
              // Actualiza las filas dependientes
              updateDependentRows(row);

              if (selectedValue === "1" || selectedValue === "2") {
                /*Si en los select se escoge {Cursando o pendiente} se ejecuta la 
              funcion recursiva para bloquear todas las materias dependientes*/
                blockDependentRows(row);
              }
              
              updateCreditsPercentage();

              
            });
          });

          $('.container-master-doughnut, .container-master-pie').css({display: 'flex'});
          $('.main-final p').css({display: 'none'});
          if (typeof applyUserProgress === 'function') {
            applyUserProgress();
            updateCreditsPercentage();
          }

        });
    }


    function arePrereqsApproved(prereqs) {
        return prereqs.every((prereq) => {
            if (prereq) {
                const prereqRow = document.querySelector(`tr[data-code="${prereq}"]`);
                return prereqRow.classList.contains("approved");
            }
            return true; // Si no hay prerrequisito, considerarlo como aprobado
        });
    }
    
    //logica para el progreso...

    let pieChart;
let doughnutChart;

// Función para inicializar los gráficos
function initializeCharts() {
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Aprobadas', 'En progreso', 'Bloqueadas', 'Pendientes'],
            datasets: [{
                data: [0.1, 0.1, 0.1, 0.1],
                backgroundColor: ['#89F167', '#FFCE56', '#FF6384', '#A3AFF9'],
            }],
        },
        options: {
            responsive: true,
        },
    });

    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    doughnutChart = new Chart(doughnutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Créditos Aprobados (%)', 'Créditos Restantes (%)'],
            datasets: [{
                data: [0.1, 0.1],
                backgroundColor: ['#89F167', '#FFCE56'],
            }],
        },
        options: {
            responsive: true,
        },
    });
}

// Función para actualizar los datos de los gráficos
function updateCharts(approved, inProgress, blocked, pending, approvedPercentage, remainingPercentage) {
    pieChart.data.datasets[0].data = [approved, inProgress, blocked, pending];
    pieChart.update();

    doughnutChart.data.datasets[0].data = [approvedPercentage, remainingPercentage];
    doughnutChart.update();
}




//-------------


//Función de visualizar datos
function updateDataCareer(totalCredits, approvedCredits, remainingCredits, percentage, remainingPercentage, subjects, approved_subjects, remainingSubjects, percentageApprovedSubjects, percentageRemainingSubjects, blocked_subject, in_progress_subjects, pending_subjects){
    document.getElementById("total_credits").textContent = totalCredits;
    document.getElementById("approved_credits").textContent = approvedCredits;
    document.getElementById("remaining_credits").textContent = remainingCredits;
    document.getElementById("percentage_approved_credits").textContent = percentage + '%';
    document.getElementById("remaining_percentage").textContent = remainingPercentage + '%';
    document.getElementById("total_subjects").textContent = subjects;
    document.getElementById('approved_subjects').textContent = approved_subjects;
    document.getElementById("reamining_subjects").textContent = remainingSubjects;
    document.getElementById("percentage_approved_subjects").textContent = percentageApprovedSubjects + '%';
    document.getElementById("percentage_remaining_subjects").textContent = percentageRemainingSubjects + '%';
    document.getElementById('approv_subcj').textContent = approved_subjects;
    document.getElementById("blocked_subjectss").textContent = blocked_subject;
    document.getElementById("in_progress_subjects").textContent = in_progress_subjects;
    document.getElementById("pendings_subjects").textContent = pending_subjects;
}

//----


//Guardar progreso de pensum

var changesBeingSaved = false;
$(document).on('submit', '#saving_changes', function (e) {
    e.preventDefault(); // Evita el envío por defecto del formulario
    var user_id = $('input[name="user_id"]').val();
    var totalRequests = $('select.status-selector').length;
    var completedRequests = 0;
    var shouldContinue = true;
    // Muestra una confirmación al usuario
    var userConfirmed = confirm('¿Estás seguro de que deseas guardar tus cambios? Esto puede llevar algún tiempo y deberías esperar hasta que se complete y no salir del sitio hasta que se complete el guardado, con el objetivo de evitar errores. ¿Deseas continuar?');
if(userConfirmed){
        
    // Deshabilita el botón para evitar clics repetidos
    $("#button_saver").text('Guardando cambios... Sé paciente').css({ opacity: '0.5' }).prop('disabled', true);

    $('select.status-selector').each(function () {
        var select_name = $(this).attr('name');
        var option_value = $(this).val();
        var tr_option = $(this).parent().parent();

        // Realiza las comprobaciones necesarias aquí, utilizando AJAX para enviar una solicitud al controlador
        $.ajax({
            url: '/save-progress', // Reemplaza con la URL correcta
            type: 'POST',
            data: {
                user_id: user_id,
                select_name: select_name,
                option_value: option_value,
                _token: $('input[name="_token"]').val()
            },
            success: function (response, xhr, status, error) {
                // Maneja la respuesta del controlador, muestra un mensaje de éxito o error
                if (response.success) {
                    completedRequests++;
                    //console.log('total request: ' + totalRequests);
                    //console.log('length: ' + completedRequests);
                    $("#button_saver").text('Guardando cambios... Sé paciente: '+ completedRequests +' de ' + totalRequests);
                    if (completedRequests === totalRequests) {
                        // Todas las solicitudes se han completado con éxito
                        $('#status-messages').empty().html('<div class="alert-success"><i class="fa-solid fa-check"></i> Progreso guardado exitosamente.</div>');
                        $("#button_saver").text('Guardar cambios').css({ opacity: '1' }).prop('disabled', false); // Habilita el botón nuevamente
                        changesBeingSaved = false;

                    }


                } else {
                    $('#status-messages').empty().html('<div class="alert-danger"><i class="fa-solid fa-xmark"></i> Hubo un error al guardar tus datos.</div>');
                    console.error(error);
                    console.error(xhr);
                    console.error(status);
                }
            },
            error: function (xhr, status, error) {
                // Maneja errores de AJAX
                $('#status-messages').html('<div class="alert alert-danger">Hubo un error a nivel xhr status error.</div>');
                console.error(error);
                console.error(xhr);
                console.error(status);
            }
        });
    });
}
});

// Coloca el evento beforeunload fuera del bucle each
// Coloca el evento beforeunload fuera del bucle each


// Activa la variable de cambios guardados cuando se inician las solicitudes AJAX
$('select.status-selector').on('change', function () {
    changesBeingSaved = true;
});








//---
    

    
    
    function getAllCareersPensum() {
        let selectedCareer = $("#careerSelected").text();
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

    function getOneOfBothPensum() {
        $(".career_pensum").each(function () {
            $(this).on("click", (e) => {
                $(".textBox_pensum").html(e.currentTarget.innerHTML);
                $("#careerSelected").html(e.currentTarget.innerText);
                getAllCareersPensum();

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
            verifyCareersWithMultiplePensums();
        });
    });

});