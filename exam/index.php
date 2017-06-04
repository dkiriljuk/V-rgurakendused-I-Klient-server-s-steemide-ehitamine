<!DOCTYPE html>
<html>
<head>
<title>Dmitri Kiriljuk Grupp AK11</title>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
<title>Komentaari lisamine Vorm</title>
</head>
<body>
<h1>Vorgurakendused I kaugope 2017 kevadsemester</h1>
<h2>Dmitri Kiriljuk AK11</h2>
<div class="container">

<h1>Please enter your comment</h1>
	<div id="wrap">
		<div id="main">
			<div class="row">
				<div class="col-md-5">
					<h3 class="heading">Comments</h3>
				</div>
				<div class="col-md-7">
					<div id="upper_blank"></div>
				</div>
			</div>
		</div>


<div id='form'>
	<div class="row">
		<div class="col-md-12">
			<form action="" method="POST" id="commentform">
				<div id="comment-name" class="form-row">
					<input class="form-control" type = "text" placeholder = "Name (required)" name = "name"  id = "name" required>
				</div>
				<div id="comment-url" class="form-row">
				<div id="comment-message" class="form-row"></br>
					<textarea class="form-control" name = "comment" placeholder = "Message" id = "comment" ></textarea>
				</div></br>
				<input class="btn btn-primary" type="submit" name="dsubmit" id="commentSubmit" value="Submit Comment"></a>
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
</div>
</div>
</body>
<script type="text/javascript">
$( "#commentform" ).submit(function( event ) {
  event.preventDefault();
  var $form = $( this ),
    name = $form.find( "input[name='name']" ).val(),
    comment = $form.find( "textarea[name='comment']" ).val(),
    url = 'db_insert.php';
  var posting = $.post( url, { name: name, comment: comment} );
 
  posting.done(function( data ) {
      alert_insert_success(data);
  });
});
function alert_insert_success(data){
      $(document).ready(function(){
      var types = [BootstrapDialog.TYPE_SUCCESS];                  
        $.each(types, function(index, type){
            BootstrapDialog.show({
                type: type,
                title: 'SUCCESS',
                message: 'Your comment has been stored!'+ data + " comment has been stored",
            });     
        });
        });
    }
</script>
</html>
</body>
</html>