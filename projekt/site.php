<?php

  if(!isset($_SESSION))
    {
      session_start();
    }
    if ($_SESSION['id'] == null) {
      session_destroy();
      header("Location: login.php");
    }

;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>dima.gnw.ee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyBsFiE7YPUalcCyLG4ZXlhTPHx9d4C6A&callback=initMap">
    </script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<style type="text/css">
  td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
}
</style>
<body>
<nav class="navbar navbar-inverse bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="site.php">DevicesMonitoring</a>
    </div>
    <ul id="mainTabs" class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="#map">Device location</a></li>
      <li><a data-toggle="tab" href="#menu2">Device database</a></li>
      <li><a data-toggle="tab" href="#menu3">Add device</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                <strong><?php echo $_SESSION['username'] ?></strong>
                <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
    <ul class="dropdown-menu">
        <li>
            <div class="navbar-login">
            </div>
        </li>
        <li><a href="functions.php?signout=true">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
    </ul>
      	</li>
    </ul>
  </div>
</nav>
<div class="tab-content">
    <div id="map" style="width:85%;height:800px;" class="tab-pane fade in active col-md-offset-1">
    </div>
    <div id="menu2" class="tab-pane fade col-md-offset-1 col-md-10">
      <h3>Device</h3>
      <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Location</th>
              <th>Manufacture</th>
              <th>Model</th>
              <th>Loggin type</th>
              <th>Status</th>
            </tr>
          </thead>
    </table>
    </div>
    <script type="text/javascript">
      
    </script>
    <div id="menu3" class="tab-pane fade col-md-offset-1">
	    <div class="col-xs-12 col-md-8">
	      <h2>Please add divece(SWITCH/ROUTER)</h2>
	    </div>
	    <form action="functions.php" id="insertForm">
		    <div class="form-group col-xs-8 col-md-8">
		  		<label for="name">Name:</label>
		  		<input type="text" placeholder="S1-IPA-OFF-TLL" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group col-xs-8 col-md-8">
		  		<label for="manufacture">Manufacture:</label>
		  		<input type="text" class="form-control" placeholder="Cisco" id="manufacture" name="manufacture" required>
			</div>
			<div class="form-group col-xs-8 col-md-8">
		  		<label for="model">Model:</label>
		  		<input type="text" class="form-control" placeholder="3750G" id="model" name="model" required>
			</div>
			<div class="form-group col-xs-8 col-md-8">
		  		<label for="location">Location:</label>
		  		<input type="text" placeholder="Ädala 4f, Tallinn" id="location" class="form-control" name="location" required>
			</div>
			<div class="form-group col-xs-8 col-md-8">
		  		<label for="ip">Manage IP:</label>
		  		<input type="text" placeholder="172.10.1.173" class="form-control" id="ip" name="ip" required>
			</div>
			<div class="form-group col-xs-8 col-md-8">
		  		<label for="type">Loggin type:</label>
		  		<select class="form-control" id="type" name="type">
				  <option>SSH</option>
				  <option>Telnet</option>
				</select>
			</div>
			<div class="form-group col-xs-8 col-md-8">
	            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
	     </div>
		</form>
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
	 </div>
  </div>
</div>
<script type="text/javascript">
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
    }</script>
</body>
</html>