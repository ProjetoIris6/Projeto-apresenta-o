
      
      //Google maps API
      
      let map;
      function initMap() {

        var mapOptions = {
           map : new google.maps.Map(
          document.querySelector(".section-report--maps-content"),
          {
            center: { lat: -23.55008995381926, lng: -46.634177474240836 },
            zoom: 90,
            mapTypeId: 'hybrid'
          }
        ) 
        }
        
      }
      map = new google.maps.Map(document.getElementById('map'), mapOptions);
