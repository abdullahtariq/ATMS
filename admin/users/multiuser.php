     <link rel="stylesheet" href="../../css/bootstrap.min-3.css" />
     <link href="../fonts/font-awesome.min.css" rel="stylesheet"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css"/>
     <link rel="stylesheet" type="text/css" href="../../css/datepicker.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="../../css/style.css">
     <script src="../../js/jquery-1.8.2.min.js"></script>
     <script src="../js/script.js"></script>
     <script  src="../../js/html2canvas.js"></script>
     <script  src="../../js/jspdf.min.js"></script>
     <script  src="../../js/common-script.js"></script>
    
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="../../js/validator.js"></script>
 <?php

include '../footer.php';
 include '../methods/cmethods.php';
 $id=$_GET['id'];
 $currentUserIds = explode(",", $id);
 $empty_array=array();
 for ($i=0; $i < count($currentUserIds) ; $i++) {
   if(isset($_GET['date'])){
     $totalSingleArray = getProjectsDate($currentUserIds[$i]);
     array_push($empty_array,$totalSingleArray);
   }else{
     $totalSingleArray = getProjects($currentUserIds[$i]);
     array_push($empty_array,$totalSingleArray);
   }
 }
   // print_r($empty_array);?>
<div class="container">    
<div class="row">
  <div class="col-md-3 col-sm-12" > 
                    
              
              <select onchange="hubfil(event)" id="hubs" class="selectpicker drp" name="continents" >
                <option value="Asia">Asia</option>
                <option value="Europe">Europe</option>
                <option value="America" >America</option>
                <option value="Africa">Africa</option>
                <option value="HQ">HQ</option>
              </select>
            </div>


 <div class="down_pdf">
  <button type="button" class="btn btn-primary" onclick="genPDF()">Download</button>
</div>
</div>
<!-- Start Search Date      -->

    <div class="row ">
      <div class="col-sm-2"></div>
      <form  role="form" action="#" method="POST" enctype="multipart/form-data">
       <div class="col-md-4 col-sm-12">
        <div class="form-group">
         <label>START DATE</label>
         <div class='input-group input-append date' id="dp4" data-date-format="dd-mm-yyyy">
          <span class="input-group-addon add-on">
           <span class="glyphicon glyphicon-calendar"></span>
         </span>
         <input readonly="readonly" data-format="hh:mm:ss" type='text' class="form-control span2" id="strt-dt" name="strt-dt"/>
       </div>
     </div>
   </div>
   <div class="col-md-4 col-sm-12">
     <div class="form-group">
      <label>END DATE</label>
      <div class='input-group input-append date' id="dp5" data-date-format="dd-mm-yyyy">
        <span class="input-group-addon add-on">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
        <input required readonly="readonly" data-format="hh:mm:ss" type='text' class="form-control span2" name="end-dt" id="end-dt" />
      </div> 
    </div>
  </div>
  <div class="search">
   <input type="submit" class="btn btn-primary" value="Search" name="Search"></div>
 </form>
</div>
<!-- End Search Date      -->
</div>


 <div id="page">

 	<div class="table-responsive tale-strip-color" id="tabular">
 		<table class="table-striped table table-wrap"   >
 			<thead>
 				<tr class="table-head text-center">
 					<th>Last Name</th>
 					<th>First Name</th>
 					<th>Mobile Number</th>
 					<th>Hub</th>
 					<th>Role Information</th>
 					<th>Employee Type</th>
 					<th>Acting Role</th>
 					<th>Contract Type</th>
 					<th>Contract Start</th>
 					<th>Contract End</th>
 					<th  colspan="6" class="text-center">HOURS</th>
 					<th  colspan="7" class="text-center">COST</th>
 				</tr>
 			</thead>

 			<tr class="tbl-header">
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th class="bg-grey"></th>
 				<th>W</th>
 				<th>T</th>
 				<th>M</th>
 				<th>L</th>
 				<th>O</th>
 				<th>TH</th>
 				<th>W</th>
 				<th>T</th>
 				<th>M</th>
 				<th>L</th>
 				<th>O</th>
 				<th>TC</th>
 			</tr>


<?php


		for ($i=0; $i < count($empty_array); $i++) {
      $check=$empty_array[$i]['ticketing'];
      $check=$empty_array[$i]['training'];
      $check=$empty_array[$i]['leave'];
      $check=$empty_array[$i]['meeting'];

   if (count($check)>0) { ?>
             <tr class="text-center" id="selct">
          <td><?php echo $empty_array[$i]['lastname'];  ?></td>
          <td><?php echo $empty_array[$i]['firstname'];  ?></td>
          <td><?php echo $empty_array[$i]['mobile'];  ?></td>
          <td><?php echo $empty_array[$i]['continents'] ; ?></td>
          <td><?php echo $empty_array[$i]['inforole'];  ?></td>
          <td><?php echo $empty_array[$i]['finanasdata'] ; ?></td>
          <td><?php echo "N/A"  ?></td>
          <td><?php echo $empty_array[$i]['finanasoption'];; ?></td>
          <td><?php echo $empty_array[$i]['contractstart']; ?></td>
          <td><?php echo $empty_array[$i]['contractend']; ?></td>
          <td><?php echo $empty_array[$i]['ticketing']; ?></td>
          <td><?php echo  $empty_array[$i]['training']; ?></td>
          <td><?php echo  $empty_array[$i]['meeting']; ?></td>
          <td><?php echo  $empty_array[$i]['leave']; ?></td>
          <td><?php echo  $empty_array[$i]['others']; ?></td>
          <td><?php echo  $empty_array[$i]['Thours']; ?></td>
          <td><?php echo  $empty_array[$i]['work_c']; ?></td>
          <td><?php echo  $empty_array[$i]['Train_c']; ?></td>
          <td><?php echo  $empty_array[$i]['meet_c']; ?></td>
          <td><?php echo  $empty_array[$i]['leave_c']; ?></td>
          <td><?php echo  $empty_array[$i]['other_c']; ?></td>
          <td>
          <?php if ($empty_array[$i]['finanasdata']=='consultants') {
            echo   $empty_array[$i]['Tcost']-$empty_array[$i]['leave_c'];
          }else{
             echo   $empty_array[$i]['Tcost'];
          }
           ?>
          </td>
        </tr>

<?php }
}

      function getProjectsDate($id){
        include '../../common-sql.php';
        if($_GET['date']){
          $sDate = $_GET['date'];
          $explDate = explode(",",$sDate);
          $format_T =strtotime($explDate[0]);
          $T=date('20y-m-d',$format_T);

          //$from_Date=$_POST['post_at_to_date'];
          $format_F=strtotime($explDate[1]);
          $F=date('20y-m-d',$format_F);
          $query='SELECT * FROM projects WHERE strtdate BETWEEN "'.$T.'" AND "'.$F.'" AND user_id="'.$id.'" ORDER BY strtdate desc';
          $agentResult=mysqli_query($conn,$query);

          $userQuery="SELECT * FROM users WHERE user_id IN ($id) ";
          $userSlct=mysqli_query($conn,$userQuery);
          $u=mysqli_fetch_assoc($userSlct);

          $continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
          $roleINFO= array("CH"=>"Chief","HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor","SF"=>"Staff");

          $Twork=0;
          $Ttrain=0;
          $Tmeet=0;
          $Tleave=0;
          $Tother=0;
          $T_cost=0;
          $Tarray = array();

          while  ($ag=mysqli_fetch_assoc($agentResult))  {

            $f_name=$u['firstname'];
            $l_name=$u['lastname'];
            $mbl=$u['mobile'];
            $hub=$continents[$u['continents']];
            $role=$roleINFO[$u['inforole']];
            $fin_data=$u['finanasdata'];
            $act="N/A";
            $fin_opt=$u['finanasoption'];
            $con_srt=$u['contractstart'];
            $con_end=$u['contractend'];
            $Twork=$Twork+ $ag['ticketing'];
            $Ttrain=$Ttrain+ $ag['training'];
            $Tmeet=$Tmeet+ $ag['meeting'];
            $Tleave=$Tleave+ $ag['leave'];
            $Tother=$Tother+ $ag['others'];
            $Thours=$Twork+$Ttrain+$Tmeet+$Tleave+$Tother;
            $perHC=$u['peryear'];
            if ($u['finanasdata']=='consultants') {

                             $Wcost=$Twork*$perHC;
                             $Trcost=$Ttrain*$perHC;
                             $Mcost=$Tmeet*$perHC;
                             $Ocost=$Tother*$perHC;
                             $Lcost=$perHC*$Tleave;

              $T_cost=$u['peryear']*$Thours;
            }else{
                            $Wcost=$perHC/1600*$Twork;
                            $Trcost=$perHC/1600*$Ttrain;
                            $Mcost=$perHC/1600*$Tmeet;
                            $Ocost=$perHC/1600*$Tother;
                            $Lcost=$perHC/1600*$Tleave;

              $T_cost=$u['peryear']/1600*$Thours;
            }

          }//while-end

          # code...
        if (mysqli_num_rows($agentResult)> 0) {

                $Tarray =array(
                  'ticketing' => $Twork,
                  'training'=> $Ttrain,
                  'meeting'=> $Tmeet,
                  'leave'=> $Tleave,
                  'others'=> $Tother,
                  'Thours'=>$Thours,
                  'work_c' =>$Wcost,
                  'Train_c' =>$Trcost,
                  'meet_c' =>$Mcost,
                  'leave_c' =>$Lcost,
                  'other_c' =>$Ocost,
                  'Tcost' =>$T_cost,
                  'lastname'=>$l_name,
                  'firstname'=>$f_name,
                  'mobile'=>$mbl,
                  'continents'=>$hub,
                  'inforole'=>$role,
                  'finanasdata'=>$fin_data,
                  'acting role'=>$act,
                  'finanasoption'=>$fin_opt,
                  'contractstart'=>$con_srt,
                  'contractend'=>$con_end,

                  );
                return $Tarray;
                # code...


                  }
        }
      }
 			function getProjects($id){
 				include '../../common-sql.php';

 				$query="SELECT * FROM projects WHERE user_id IN ($id) ";
 				$agentResult=mysqli_query($conn,$query);

 				$userQuery="SELECT * FROM users WHERE user_id IN ($id) ";
 				$userSlct=mysqli_query($conn,$userQuery);
 				$u=mysqli_fetch_assoc($userSlct);

        $continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
        $roleINFO= array("CH"=>"Chief","HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor","SF"=>"Staff");

 				$Twork=0;
 				$Ttrain=0;
 				$Tmeet=0;
 				$Tleave=0;
 				$Tother=0;
 				$T_cost=0;
 				$Tarray = array();

 				while  ($ag=mysqli_fetch_assoc($agentResult))  {

 					$f_name=$u['firstname'];
 					$l_name=$u['lastname'];
 					$mbl=$u['mobile'];
 					$hub=$continents[$u['continents']];
 					$role=$roleINFO[$u['inforole']];
 					$fin_data=$u['finanasdata'];
 					$act="N/A";
 					$fin_opt=$u['finanasoption'];
 					$con_srt=$u['contractstart'];
 					$con_end=$u['contractend'];
 					$Twork=$Twork+ $ag['ticketing'];
 					$Ttrain=$Ttrain+ $ag['training'];
 					$Tmeet=$Tmeet+ $ag['meeting'];
 					$Tleave=$Tleave+ $ag['leave'];
 					$Tother=$Tother+ $ag['others'];
 					$Thours=$Twork+$Ttrain+$Tmeet+$Tleave+$Tother;
          $perHC=$u['peryear'];
 					if ($u['finanasdata']=='consultants') {

                           $Wcost=$Twork*$perHC;
                           $Trcost=$Ttrain*$perHC;
                           $Mcost=$Tmeet*$perHC;
                           $Ocost=$Tother*$perHC;
   						             $Lcost=$perHC*$Tleave;

 						$T_cost=$u['peryear']*$Thours;
 					}else{
                          $Wcost=$perHC/1600*$Twork;
                          $Trcost=$perHC/1600*$Ttrain;
                          $Mcost=$perHC/1600*$Tmeet;
                          $Ocost=$perHC/1600*$Tother;
 						              $Lcost=$perHC/1600*$Tleave;

 						$T_cost=$u['peryear']/1600*$Thours;
 					}

 				}//while-end


  # code...
if (mysqli_num_rows($agentResult)> 0) {

 				$Tarray =array(
 					'ticketing' => $Twork,
 					'training'=> $Ttrain,
 					'meeting'=> $Tmeet,
 					'leave'=> $Tleave,
 					'others'=> $Tother,
 					'Thours'=>$Thours,
 					'work_c' =>$Wcost,
 					'Train_c' =>$Trcost,
 					'meet_c' =>$Mcost,
 					'leave_c' =>$Lcost,
 					'other_c' =>$Ocost,
 					'Tcost' =>$T_cost,
 					'lastname'=>$l_name,
 					'firstname'=>$f_name,
 					'mobile'=>$mbl,
 					'continents'=>$hub,
 					'inforole'=>$role,
 					'finanasdata'=>$fin_data,
 					'acting role'=>$act,
 					'finanasoption'=>$fin_opt,
 					'contractstart'=>$con_srt,
 					'contractend'=>$con_end,

 					);
 				return $Tarray;
        # code...


 				  }

 			} ?>
 		</table>
 	</div>
</div>
 </div>
