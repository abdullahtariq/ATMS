<?php
   include 'header.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
   	    <script src="js/jquery.min.js"></script>
	    <script src="js/script.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/cal-form-val.js"></script>
	    <link rel='stylesheet' href='css/style.css' />
	    <link rel='stylesheet' href='css/bootstrap.css' />
	    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
		<script src='fullcalendar/lib/jquery.min.js'></script>
		<script src='fullcalendar/lib/moment.min.js'></script>
		<script src='fullcalendar/fullcalendar.js'></script>
		<script
		src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"
		integrity="sha256-erF9fIMASEVmAWGdOmQi615Bmx0L/vWNixxTNDXS4FQ="
		crossorigin="anonymous"></script>

</head>


<body>
<div class="container bd-top">

<div class="content clearfix outline-bottom">

	<!-- <div class="col-md-1"></div> -->
	<div id="calendar" class="col-md-12"></div>
	</div>

	</div>

	<!-- Modal -->
	<div class="container">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Details</h4>
      </div>
      <div class="modal-body" id="test">
        <div id="external-events" class="data-input">


        <form   id="form-wrap" style="display: none;">
			<div class="inpt-wrap">
			<div id="myalert"  class="alert alert-success jump" role="alert" collapse>
            <a href="#"   class="close" onclick="sucess()">&times;</a>
            <strong> Detail has been submited sucessfully !</strong>
    </div>
    <div id="Myalert"  class="alert alert-danger jumpalt" role="alert" collapse>
          <a href="#" class="close" onclick="hidmsg()" >&times;</a>
          <strong>Data is already exists</strong>
   </div>
			<div class="form-group" style="display: none;" >
					<label for="usr">Date</label>
					<input type="text"  id="storeddate" class="form-control" name="strtdate" >
				</div>
				<div class="form-group">
					<label for="usr">Works hours</label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="tick" name="ticketing" maxlength="1">
				</div>
				<div class="form-group">
					<label for="usr">Training hours</label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="tick" name="training" maxlength="1">
				</div>
				<div class="form-group">
					<label for="usr">Meeting hours</label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="meet" name="meeting" maxlength="1">
				</div>
				<div class="form-group">
					<label for="usr">Leaves  <i>(Max 8 Hours)</i></label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="leaves" name="leave" maxlength="1">

				</div>
				<div class="form-group">
					<label for="usr"><i>Others (Max: 8 Hours)</i></label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="other" name="others" maxlength="1">
				</div>
<button type="button"  onclick="submitform(event)" class="btn btn-primary bot">Submit</button>
			</div>


		</form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg modal-bt" data-toggle="modal" data-target="#myModal" style="display: none;">
  Launch demo modal
</button>
</body>
</html>
