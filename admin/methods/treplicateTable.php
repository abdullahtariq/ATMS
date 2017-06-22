<?php
$slct_user='SELECT * FROM users WHERE user_id="'.$id.'"';
$result_user=mysqli_query($conn,$slct_user);
$fetch=mysqli_fetch_assoc($result_user);


?>
<div class="table-responsive tale-strip-color" id="tabular">
 <table class="table-striped table table-wrap"    >
   <thead>
     <tr> <th class="table-head text-center">
       DATE</th>
       <th class="table-head text-center" colspan="6">HOURS</th>

       <th class="table-head text-center">COST</th>

     </tr>
   </thead>
   <tr class="text-center">
    <td class="bg-grey"></td>
    <td><b>WORKS</b></td>
    <td><b>TRAININGS</b></td>
    <td><b>MEETINGS</b></td>
    <td><b>LEAVES</b></td>
    <td><b>OTHERS</b></td>
    <td><b>TOTAL Hours</b></td>
    <td class="bg-grey"></td>


  </tr>

  <?php
  $totalWork = 0;
  $totalTrain= 0;
  $totalMeet = 0;
  $totalLeave= 0;
  $totalOther= 0;
  $allday=0;
  $totalCost=0;
  while ($agReport=mysqli_fetch_assoc($slct)) {
    

    $totalWork = $totalWork + $agReport['ticketing'];
    $totalTrain = $totalTrain + $agReport['training'];
    $totalMeet = $totalMeet + $agReport['meeting'];
    $totalLeave = $totalLeave + $agReport['leave'];
    $totalOther = $totalOther + $agReport['others'];  
    $totalHr=$agReport['ticketing']+$agReport['training']+
    $agReport['meeting']+$agReport['leave']+$agReport['others'];
    $allday= $allday+$totalHr;
             // echo $allday;
    if ($fetch['finanasdata']=='consultants') {

     $perHour=$fetch['peryear'];
     $percost=$perHour*$totalLeave;
     $perYear=$fetch['peryear']*$totalHr;

   }else{
    $perYear=$fetch['peryear']/1600*$totalHr;
  }
  
  $totalCost=$totalCost+$perYear;
  ?>

  
  <tr class="text-center"> 
   <?php
   $date=date_create($agReport['strtdate']);
   ?>
   <td><b class="pull-left"><?php echo date_format($date, 'd-m-Y ');  ?></b></td>
   <td><?php echo $agReport['ticketing']; ?></td>
   <td><?php echo $agReport['training']; ?></td>
   <td><?php echo $agReport['meeting']; ?></td>
   <td><?php echo $agReport['leave']; ?></td>
   <td><?php echo $agReport['others']; ?></td>
   <td><?php echo $totalHr; ?></td>
   <td><?php echo $perYear; ?></td>



 </tr>

 <?php } ?>

 
 <tr class="text-center">
   <td><b class="pull-left">Total:<b></td>
   <td><b><?php echo $totalWork; ?></b></td>
   <td><b><?php echo $totalTrain; ?></b></td>
   <td><b><?php echo $totalMeet; ?></b></td>
   <td><b><?php echo $totalLeave; ?></b></td>
   <td><b><?php echo $totalOther; ?></b></td>
   <td><b><?php echo $allday; ?></b></td>
   <td><b>
     <?php 

     if ($fetch['finanasdata']=='consultants') {
      echo $totalCost-$percost;
    }else{
      echo $totalCost;
    }   ?> 
  </b>
</td>


</tr>

</table>
</div>




