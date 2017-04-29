$.post( "functions.php",
        {
            select: "true"
        },
 function( data ) {
    var json = $.parseJSON(data);
    
    for (var i=0;i<json.length;++i)
        {
            $('tbody').append(
            '<tr data-toggle="collapse" data-target="#demo'+i+'">'+
                '<td>'+json[i].id+'</td>'+
                '<td>'+json[i].name+'</td>'+
                '<td>'+json[i].location+'</td>'+
                '<td class="text-success">'+
                  '<a href="#">'+
                    '<span class="glyphicon glyphicon-plus-sign"></span>'+
                  '</a>'+
                '</td>'+
            '</tr>'+
            '<tr >'+
                '<td colspan="6" class="hiddenRow">'+
                '<div class="accordian-body collapse" id="demo'+i+'"><b>Manufacture:</b> '+json[i].manufacture+'<br><b>Model:</b> '+json[i].model+'<br><b>Manage IP:</b> '+json[i].ip+'<br><b>Loggin type:</b> '+json[i].type+''+
                '</div></td>'+
            '</tr>');
        }
});

$( "#insertForm" ).submit(function( event ) {
  event.preventDefault();
  var $form = $( this ),
    name = $form.find( "input[name='name']" ).val(),
    manufacture = $form.find( "input[name='manufacture']" ).val(),
    model = $form.find( "input[name='model']" ).val(),
    location = $form.find( "input[name='location']" ).val(),
    ip = $form.find( "input[name='ip']" ).val(),
    type = $form.find( "select[name='type']" ).val(),
    insert = "true",
    url = $form.attr( "action" );
  var posting = $.post( url, { name: name, manufacture: manufacture, model: model, location: location, ip: ip, type: type, insert: insert} );
 
  posting.done(function( data ) {
    if(data = 'success'){
      $("#name").val('');
      $("#manufacture").val('');
      $("#model").val('');
      $("#location").val('');
      $("#ip").val('');
      $("#type").val('SSH');
      alert_insert_success();
    }
    
  });
});
function alert_insert_success(){
      $(document).ready(function(){
      var types = [BootstrapDialog.TYPE_SUCCESS];                  
        $.each(types, function(index, type){
            BootstrapDialog.show({
                type: type,
                title: 'SUCCESS',
                message: 'Your device has been stored!',
            });     
        });
        });
    }

var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(58.8855556, 25.5572222),
          zoom: 8
        });
        geocoder = new google.maps.Geocoder();
        //var mark = "true";
        //$.post( "functions.php", { mark: mark} );
        downloadUrl('functions.php?marker=true',
         function(data) {
          var xml = data.responseXML;
          var markers = xml.documentElement.getElementsByTagName('marker');
          Array.prototype.forEach.call(markers, function(markerElem) {        
            var id = markerElem.getAttribute('id');
            var name = markerElem.getAttribute('name');
            var address = markerElem.getAttribute('address');
            var count = markerElem.getAttribute('count');
            var infoWindow = new google.maps.InfoWindow;
              
            geocoder.geocode( {address:address}, function(results, status) { 
              if (status == google.maps.GeocoderStatus.OK) 
              {
                if(count > 1)
                {
                  var Latlng = new google.maps.LatLng(results[0].geometry.location.lat() + (Math.random() -.5) / 20000,results[0].geometry.location.lng() + (Math.random() -.5) / 20000);
                  var marker = new google.maps.Marker({
                    map: map,
                    position: Latlng
                  }); 
                }
                else
                {
                  var Latlng = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
                  var marker = new google.maps.Marker({
                    map: map,
                    position: Latlng
                  }); 
                }
                                                
              } 
              else 
              {
                alert('Geocode was not successful for the following reason: ' + status);
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

function alert_login(){
        $(document).ready(function(){
            var types = [BootstrapDialog.TYPE_DANGER];                  
        $.each(types, function(index, type){
            BootstrapDialog.show({
                type: type,
                title: 'Warning',
                message: 'Your Username or Password is incorect',
            });     
        });
        });
    }