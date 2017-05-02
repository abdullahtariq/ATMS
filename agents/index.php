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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	
</head>


<body>  
<div class="container bd-top">

<div class="content clearfix outline-bottom">
	<div id="external-events" class="data-input  col-md-3 ">
		<form   id="form-wrap">
			<div class="inpt-wrap">
			<div id="myalert"  class="alert alert-success jump" role="alert" collapse>
            <a href="#"   class="close" onclick="sucess()">&times;</a>
            <strong> Detail has been submited sucessfully !</strong>
    </div>
    <div id="Myalert"  class="alert alert-danger jumpalt" role="alert" collapse>
          <a href="#" class="close" onclick="hidmsg()" >&times;</a>
          <strong>Data is already exists</strong>
   </div>
			<div class="form-group" style="display: none;">
					<label for="usr">Start Date</label>
					<input type="text"  id="storeddate" class="form-control" name="strtdate" >
				</div>
				<div class="form-group">
					<label for="usr">Ticketing Hour</label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="tick" name="ticketing" maxlength="1">
				</div>
				<div class="form-group">
					<label for="usr">Meeting Hour</label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="meet" name="meeting" maxlength="1">
				</div>
				<div class="form-group">
					<label for="usr">Leaves</label>
					<select id="leaves" class="selectpicker" name="leave" >
  							<option value="-1">Select</option>
  							<option value="8">Full day</option>
  							<option value="4" >Half day</option>
  						</select>
				</div>
				<div class="form-group">
					<label for="usr">Others</label>
					<input type="text" onkeypress='validate(event)' class="form-control" id="other" name="others" maxlength="1">
				</div>
<button type="button"  onclick="submitform(event)" class="btn btn-primary bot">Submit</button> 
			</div>
                 
			
		</form>
	</div>
	<div id="calendar" class="col-md-9"></div>
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
        
        <table class="table-bordered info-tbl" cellpadding="10" cellspacing="10">
        	<thead>
        		<tr>
        			<th>Date</th>
        			<th>Ticketing Hrs</th>
        			<th>Meeting Hrs</th>
        			<th>Leave Hrs/full</th>
        			<th>Others</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td class="dt"></td>
        			<td class="tc"></td>
        			<td class="me"></td>
        			<td class="le"></td>
        			<td class="ot"></td>

        		</tr>
        	</tbody>
        </table>
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