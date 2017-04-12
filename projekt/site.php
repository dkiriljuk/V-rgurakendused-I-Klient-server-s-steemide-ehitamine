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
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="site.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="#map">Device location</a></li>
      <li><a data-toggle="tab" href="#menu2">Device database</a></li>
      <li><a data-toggle="tab" href="#menu3">Add device</a></li>
    </ul>
  </div>
</nav>
<div class="tab-content">
    <div id="map" style="width:85%;height:800px;" class="tab-pane fade in active col-md-offset-1">
    </div>
    <script src="site.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyBsFiE7YPUalcCyLG4ZXlhTPHx9d4C6A&callback=initMap" async defer></script>
    <div id="menu2" class="tab-pane fade col-md-offset-1 col-md-10">
      <h3>Device</h3>
      <table class="table" style="border-collapse:collapse;">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Description</th>
                <th>Credit</th>
                <th>Debit</th>
                <th>More</th>
            </tr>
        </thead>
        <tbody>
            <tr data-toggle="collapse" data-target="#demo1">
                <td>1</td>
                <td>05 May 2013</td>
                <td>Credit Account</td>
                <td>$150.00</td>
                <td></td>
                <td class="text-success">
                  <a href="#">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                  </a>
                </td>
            </tr>
            <tr >
                <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="demo1">Demo1</div></td>
            </tr>
            <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                <td>2</td>
                <td>05 May 2013</td>
                <td>Credit Account</td>
                <td>$11.00</td>
                <td></td>
                <td class="text-success">
                  <a href="#">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                  </a>
                </td>
            </tr>
            <tr>
                <td colspan="6" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
            </tr>
            <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                <td>3</td>
                <td>05 May 2013</td>
                <td>Credit Account</td>
                <td>$500.00</td>
                <td></td>
                <td class="text-success">
                  <a href="#">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                  </a>
                </td>
            </tr>
            <tr>
                <td colspan="6"  class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
            </tr>
        </tbody>
    </table>
    </div>
    <div id="menu3" class="tab-pane fade col-md-offset-1">
    <div class="col-10">
      <h2>Please add divece(SWITCH/ROUTER/SERVER)</h2>
    </div>
      <form>
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Text</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-search-input" class="col-2 col-form-label">Search</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-email-input" class="col-2 col-form-label">Email</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-url-input">URL</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-tel-input">Telephone</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-password-input">Password</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="password" data-toggle="password" value="hunter2" id="example-password-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-number-input" class="col-3">Number</label><br>
          <div class="col-xs-3 col-10">
            <input class="form-control" type="number" value="42" id="example-number-input">
          </div>
        </div>
        <div class="form-group row">
          <label>Date and time</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
          </div>
        </div>
        <div class="form-group row">
          <label>Date</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
          </div>
        </div>
        <div class="form-group row">
          <label>Month</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="month" value="2011-08" id="ex2">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-week-input">Week</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-time-input">Time</label><br>
          <div class="col-xs-3">
            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>