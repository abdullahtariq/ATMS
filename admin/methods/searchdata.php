<?php
// echo $_GET['act']; 
?>

<div class="container">
  
<div class="form-inline">
  <div class="form-group col-sm-4">
    <select onchange="myFunction(event)" id="yourole" class="selectpicker" name="inforole">
    <?php
      if ($_GET['act']=='mgu') {?>

          <option value="Chief">Chief</option>
          <option value="Hub Manager">Hub Manager</option>
          <option value="Agent">Agent</option>
          <option value="Hub Supervisor">Hub Supervisor</option>
          <option value="Staff">Staff</option>

    <?php  }elseif($_GET['act']=='hmu') {?>

          <option value="Hub Manager">Hub Manager</option>
          <option value="Agent">Agent</option>
          <option value="Hub Supervisor">Hub Supervisor</option>
          
    <?php }elseif ($_GET['act']=='hubsu') {?>

          <option value="Hub Manager">Hub Manager</option>
          <option value="Agent">Agent</option>
          <option value="Hub Supervisor">Hub Supervisor</option>
         
    <?php }  ?>
  
      
    </select>

  </div>

  <div class="form-group col-sm-7">
    <input  type="text" class="form-control" id="mysearch" onkeyup="myFunction(event)" placeholder="Search">

  </div>
  <div class="form-group">
    <input class="btn btn-primary form-control" id="inptbtn" type="button"  onclick="myFunction(event)" value="Search"> 
  </div>
</div><br><br>
</div>