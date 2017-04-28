<?php
 // echo $_GET['act']; 
?>

<div class="container">
  
<div class="form-inline">
  <div class="form-group col-sm-4">
    
    <?php
      if ($_GET['act']=='mgu') {?>
            <select onchange="myFunction(event)" id="yourole" class="selectpicker" name="inforole">
          <option value="Chief">Chief</option>
          <option value="Hub Manager">Hub Manager</option>
          <option value="Agent">Agent</option>
          <option value="Hub Supervisor">Hub Supervisor</option>
          <option value="Staff">Staff</option>
            </select>
    <?php  }elseif($_GET['act']=='hmu') {?>

          <select onchange="myFunction(event)" id="yourole" class="selectpicker" name="inforole">
          <option value="Agent">Agent</option>
          <option value="Hub Supervisor">Hub Supervisor</option>
          </select>
     <?php } ?>
      
    

  </div>

  <div class="form-group col-sm-7">
    <input  type="text" class="form-control" id="mysearch" onkeyup="myFunction(event)" placeholder="Search">

  </div>
  <div class="form-group">
    <input class="btn btn-primary form-control" id="inptbtn" type="button"  onclick="myFunction(event)" value="Search"> 
  </div>
</div><br><br>
</div>