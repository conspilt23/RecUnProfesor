"use strict";
import CalendarEvents from './calendarEvents.json' assert {type: 'json'}
jQuery(function(){

    $('#calendar').evoCalendar({
           theme: 'Orange Coral',
           language: 'es',
           calendarEvents: CalendarEvents,
           eventHeaderFormat: 'MM d, yyyy',
           firstDayOfWeek: 1,
           todayHighlight: true
    });


    $(window).resize(function() {
        if (document.documentElement.clientWidth >= 455) {    
            $('#calendart').fadeIn(250);
        }
    }).resize()
  
    $(window).resize(function() {
        if (document.documentElement.clientWidth <= 454) {   
            $('#ca').on('click', () => {
                $('#calendart').fadeIn(250);
                $('#background-calendar').fadeIn(250).addClass('act');
                
            }); 
            $('#calendart').fadeOut(250);
            $('#background-calendar').fadeOut(250).removeClass('act');
            $('#background-calendar').on('click', () => {
                $('#calendart').fadeOut(250);
                $('#background-calendar').fadeOut(250).removeClass('act');
        
            });
        }
    }).resize()
  
  });