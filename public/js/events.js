jQuery(function(){

    $.ajax({
      url: ajax_route_events ,
      dataType: "json",
      success: function(calendarEvents) {
          $('#calendar').evoCalendar({
              theme: 'Orange Coral',
              language: 'es',
              calendarEvents: calendarEvents,
              eventHeaderFormat: 'MM d, yyyy',
              firstDayOfWeek: 1,
              todayHighlight: true
          });
      }
  });


    window.addEventListener('resize', function() {
        var width = document.documentElement.clientWidth;
        var calendart = document.querySelector('#calendart');
        var backgroundCalendar = document.querySelector('#background-calendar');
        
        if (width >= 455) {    
          calendart.style.display = 'block';
          fadeInn(calendart, 250);
        } else if (width <= 454) {   
          calendart.style.display = 'none';
          fadeOutt(calendart, 250);
          backgroundCalendar.classList.remove('act');
          
          var ca = document.querySelector('#ca');
          ca.addEventListener('click', function() {
            fadeInn(calendart, 250);
            fadeInn(backgroundCalendar, 250);
            backgroundCalendar.classList.add('act');
          }); 
          
          backgroundCalendar.addEventListener('click', function() {
            fadeOutt(calendart, 250);
            fadeOutt(backgroundCalendar, 250);
            backgroundCalendar.classList.remove('act');
          });
        }
      });
      
      window.addEventListener('load', function() {
        window.dispatchEvent(new Event('resize'));
      });
      
      function fadeInn(element, duration) {
        element.style.opacity = 0;
        element.style.display = 'block';
        
        var start = null;
        function step(timestamp) {
          if (!start) start = timestamp;
          var progress = timestamp - start;
          element.style.opacity = Math.min(progress / duration, 1);
          if (progress < duration) {
            window.requestAnimationFrame(step);
          }
        }
        
        window.requestAnimationFrame(step);
      }
      
      function fadeOutt(element, duration) {
        element.style.opacity = 1;
        
        var start = null;
        function step(timestamp) {
          if (!start) start = timestamp;
          var progress = timestamp - start;
          element.style.opacity = Math.max(1 - progress / duration, 0);
          if (progress < duration) {
            window.requestAnimationFrame(step);
          } else {
            element.style.display = 'none';
          }
        }
        
        window.requestAnimationFrame(step);
      }
      
  
  });