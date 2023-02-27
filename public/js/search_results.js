//For the filters
function getFilter(career, textBox, targetInput){
  $(career).each(function () {
    $(this).on("click", (e) => {
        $(textBox).html(e.currentTarget.innerHTML);
       // $(targetInput).html(e.currentTarget.innerText);
        if(e.currentTarget.innerText === 'Virtual'){
          $(targetInput).val('Virtual');
        } else if (e.currentTarget.innerText === 'Semipresencial'){
          $(targetInput).val('SEM');
        } else if (e.currentTarget.innerText === 'Presencial'){
          $(targetInput).val('PRE');
        } else if (e.currentTarget.innerText === 'Laboratorio'){
          $(targetInput).val('LAB');
        } else if (e.currentTarget.innerText === 'Teoría'){
          $(targetInput).val('TEO');
        } else if (e.currentTarget.innerText === 'Cualquiera'){
          $(targetInput).val('');
        } else {
          $(targetInput).val(e.currentTarget.innerText);
        }
    });
  });
}






$.urlParam = function(name){
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return results ? results[1] : null;
}

var modality = $.urlParam('modality');
var schedule = $.urlParam('schedule');

var originalClassTypeText = $('#class_type').text();
var originalHourTypeText = $('#hour_type').text();


if (modality !== null) {
  if (modality !== '') {
    $('.settings_class #modalt').css({
      backgroundColor: '#fc6045'
    });
    
    $('.settings_class #modalt .first_i, .settings_class #modalt .last_i, .settings_class #modalt .name').css({
      color: '#fff'
    });
    
    switch (modality) {
      case 'PRE':
        $('#class_type').text('Modalidad elegida: Presencial');
        break;
      case 'TEO':
        $('#class_type').text('Modalidad elegida: Teoría');
        break;
      case 'LAB':
        $('#class_type').text('Modalidad elegida: Laboratorio');
        break;
      case 'SEM':
        $('#class_type').text('Modalidad elegida: Semipresencial');
        break;
      default:
        $('#class_type').text('Modalidad elegida: ' + modality);
    }
  } else {
    $('.settings_class #modalt').css({
      backgroundColor: '#fc6045'
    });
    
    $('.settings_class #modalt .first_i, .settings_class #modalt .last_i, .settings_class #modalt .name').css({
      color: '#fff'
    });
    
    $('#class_type').text('Cualquier modalidad.');
  }
} else {
  $('#class_type').text(originalClassTypeText);
}


if (schedule !== null) {
  if (schedule !== '') {
    $('.settings_class #schedult').css({
      backgroundColor: '#fc6045'
    });
    
    $('.settings_class #schedult .first_i, .settings_class #schedult .last_i, .settings_class #schedult .name').css({
      color: '#fff'
    });
    
    schedule = decodeURIComponent(schedule);
    var matches = schedule.match(/(\d+):(\d+)/);
    if (matches) {
      var hour = matches[1];
      var minutes = matches[2];
      $('#hour_type').text('Hora de inicio elegida: ' + hour + ':' + minutes);
    } else {
      $('#hour_type').text(originalHourTypeText);
    }
  } else {
    $('.settings_class #schedult').css({
      backgroundColor: '#fc6045'
    });
    
    $('.settings_class #schedult .first_i, .settings_class #schedult .last_i, .settings_class #schedult .name').css({
      color: '#fff'
    });
    
    $('#hour_type').text('Cualquier hora.');
  }
} else {
  $('#hour_type').text(originalHourTypeText);
}

function openCustomSelect(dropDown, menu) {
  $(dropDown).on("click", function () {
      $(menu).slideToggle(200);
      $(dropDown).toggleClass("active").addClass("ve");
      $(dropDown).css({ pointerEvents: "none" });
      setTimeout(function () {
          $(dropDown).css({ pointerEvents: "all" });
      }, 350);
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


$('.settings_class .modality').on('click', () => {
  $('.filter_background').fadeIn(250);
  $('.filter_back').fadeIn(250).css({display: 'flex'});
});

$('.filter_background').on('click', () => {
  $('.filter_background').fadeOut(250);
  $('.filter_back').fadeOut(250);

});

openCustomSelect('#modality_filter', '#modality_option');
openCustomSelect('#schedule_filter', '#schedule_option');
detectClickOutsideBx('#modality_filter', '#modality_filter .car', '#modality_option');
detectClickOutsideBx('#schedule_filter', '#schedule_filter .car', '#schedule_option');
getFilter('.modali', '#modality_filter','#modality_selected');
getFilter('.schedul', '#schedule_filter','#schedule_selected');


//Ajax for the results and filters

