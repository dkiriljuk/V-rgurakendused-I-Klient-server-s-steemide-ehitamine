
$(document).ready(function() {
    $('#table').DataTable( {
      "autoWidth": "false",
        "ajax": {
            "url": "functions.php?select=true",
            "type": "POST",
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "location" },
            { "data": "manufacture" },
            { "data": "model" },
            { "data": "type" },
            { "data": "state" }
        ]
    } );
} );

setInterval(function() {
    $.get("ping.php");
    return false;
}, 60 * 1000);

setTimeout('window.location.reload();', 120000);




function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: new google.maps.LatLng(58.8855556, 25.5572222),
    zoom: 8
  });
  geocoder = new google.maps.Geocoder();
  downloadUrl('functions.php?marker=true',
    function(data) {
      var xml = data.responseXML;
      var markers = xml.documentElement.getElementsByTagName('marker');
      Array.prototype.forEach.call(markers, function(markerElem) {        
        var id = markerElem.getAttribute('id');
        var name = markerElem.getAttribute('name');
        var address = markerElem.getAttribute('address');
        var count = markerElem.getAttribute('count');
        var state = markerElem.getAttribute('state');
        var infoWindow = new google.maps.InfoWindow;
        var image_green = {
            url: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
        };
        var image_red = {
          url: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
        };
        var markers = 'http://dima.gnw.ee/markers/markergreen.png';
        geocoder.geocode( {address:address}, function(results, status) { 
          if (status == google.maps.GeocoderStatus.OK) 
          {
            if(state == 'dead')
            {
              if(count > 1)
              {
                var Latlng = new google.maps.LatLng(results[0].geometry.location.lat() + (Math.random() -.5) / 20000,results[0].geometry.location.lng() + (Math.random() -.5) / 20000);
                var marker = new google.maps.Marker({
                  map: map,
                  position: Latlng,
                  icon: image_red
                }); 
              }
              else
              {
                var Latlng = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
                var marker = new google.maps.Marker({
                  map: map,
                  position: Latlng,
                  icon: image_red
                }); 
              }                                      
            }  
            else
            {
              if(count > 1)
              {
                var Latlng = new google.maps.LatLng(results[0].geometry.location.lat() + (Math.random() -.5) / 20000,results[0].geometry.location.lng() + (Math.random() -.5) / 20000);
                var marker = new google.maps.Marker({
                  map: map,
                  position: Latlng,
                  icon: image_green
                }); 
              }
              else
              {
                var Latlng = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
                var marker = new google.maps.Marker({
                  map: map,
                  position: Latlng,
                  icon: image_green
                }); 
              }                                   
            }
          }
        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = name
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.textContent = address
        infowincontent.appendChild(text);
                  
        marker.addListener('click', function() {
          map.setZoom(18);
          infoWindow.setContent(infowincontent);
          infoWindow.open(map, marker);
        });
      });
    });
  });
}
      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }
      function doNothing() {}

