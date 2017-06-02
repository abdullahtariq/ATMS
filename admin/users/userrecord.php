<?php 
  
$result = select("users","",$_GET['id']);
 $url_id=$_GET['id'];
// echo mysql_num_rows($result);
$ftnresult=mysqli_fetch_assoc($result);

$agentResult=select("projects","",$_GET['id']);

// $agReport1=mysqli_fetch_assoc($agentResult);

// echo $agReport['others'];
// print_r($agReport1);
// return false;



$continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
$roleINFO= array("CH"=>"Chief","HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor","SF"=>"Staff");
$fundsource=array("RB-10"=>"RB (10 UNA)","2QS"=>"2QSA (Support Account)","10-RC"=>"10 RCR (Cost Recovery)");
?>

<div class="container"> 
	<div class="text-center">
		<h2>User Detail</h2>
	</div>
	<div class="panel-body">
		<div class="col-lg-12">
			<div class="form-group pull-right">
				<div class="row">
					<div class="col-sm-2 col-sm-offset-3">
						<a href="index.php?act=mgupdate&id=<?php echo $ftnresult['user_id'] ; ?>"="bottom" title="Edit">
							<input type="button" value="Edit" id="login-submit"  class="btn btn-primary" ></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
          <!-- <form method="post" action="users/searchDate.php"> -->
          <div class="col-md-1"></div>
          <div class="row ">
               <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                         <label>START DATE</label>
                         <div  class='input-group input-append date' id="dp3" data-date-format="dd-mm-yyyy">
                              <span class="input-group-addon add-on">
                                   <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                              <input  readonly="readonly" data-format="hh:mm:ss" name="search[post_at]" id="strt-dt" type='text' class="form-control span2" />

                         </div>

                    </div>
               </div>
               <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                         <label>END DATE</label>
                         <div class='input-group input-append date' id="dp4" data-date-format="dd-mm-yyyy">
                              <span class="input-group-addon add-on">
                                   <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                              <input readonly="readonly" data-format="hh:mm:ss" type='text' class="form-control span2" id="end-dt" name="search[post_at_to_date]"/>

                         </div>
                    </div>
               </div>
               <div class="search">
               <input type="button" class="btn btn-primary" onclick="showDate(event)" value="Search" name="Search"></div>
              <input type="hidden" id="urlId" name="url_id" value="<?php echo $url_id; ?>">
          </div>
          <!-- </form> -->
          
         
          <div class="down_pdf">
          <button type="button" class="btn btn-primary" onclick="genPDF()">Download</button>
          </div>
           <div id="page">
           
           <div class="col-md-3">
          <h2 class="single">SINGLE USER:</h2>
          </div>
          
         
          
          <div class="table-responsive">
            <table class="table  left-tbl" >
                <thead>
                    <tr class="col-md-6">

                        <th >
                             <span class="N">FIRST NAME</span> <span class="M m-Fst"><?php echo $ftnresult['firstname']?></span><br/>
                             <span class="N">LAST NAME</span> <span class="M m-Lst"><?php echo $ftnresult['lastname']?></span><br/>
                             <span class="N n-hub">HUB</span> <span class="M m-Hub"><?php echo $continents[$ftnresult['continents']];?></span><br/>
                             <span class="N">EMPLOYEE TYPE</span> <span class="M"><?php echo $ftnresult['finanasdata']; ?></span><br/>
                             <span class="N n-srt">CONTRACT START</span> <span class="M"><?php echo $ftnresult['contractstart']; ?></span><br/>
                             <span class="N ">ACTIVE FROM</span> <span class="M m-act"><?php echo $ftnresult['activefrom']; ?></span><br/>
                             <span class="N">EMAIL ADDRESS</span> <span class="M"><?php echo $ftnresult['email']; ?></span><br/>


                        </th>  

                   </tr>
                   <tr class="col-md-6">
                    <?php $date=date_create($ftnresult['lastactivity']); ?>

                    <th >
                        <span class="N">DESK PHONE</span> <span class="M rght-dsk"><?php echo $ftnresult['deskphone']?></span><br/>
                        <span class="N lft-mbl">MOBILE</span> <span class="M rght-mbl"><?php echo $ftnresult['mobile']?></span><br/>
                        <span class="N">ROLE INFO</span> <span class="M lft-role"><?php echo $roleINFO[$ftnresult['inforole']];?></span><br/>
                        <span class="N">CONTRACT TYPE</span> <span class="M lft-type"><?php echo $ftnresult['finanasoption']; ?></span><br/>
                        <span class="N">CONTRACT END</span> <span class="M rght-end"><?php echo $ftnresult['contractend']; ?></span><br/>
                        <span class="N lft-no">IDENTIFICATION NO</span> <span class="M rght-no"><?php echo $ftnresult['identity_no']; ?></span><br/>



                   </th>  


              </tr>
         </thead>
    </table>
</div>

         <!-- <div class="row col-md-6">
         	<div class="form-inline">
         		<h4 class="col-md-4">First Name</h4><h4><?php echo $ftnresult ['firstname'];?></h4>  
         	</div>

         </div>
    -->



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
           while ($agReport=mysqli_fetch_assoc($agentResult)) {


            $totalWork = $totalWork + $agReport['ticketing'];
            $totalTrain = $totalTrain + $agReport['training'];
            $totalMeet = $totalMeet + $agReport['meeting'];
            $totalLeave = $totalLeave + $agReport['leave'];
            $totalOther = $totalOther + $agReport['others'];  
            if ($ftnresult['finanasdata']=='consultants') {
               $totalHr=$agReport['ticketing']+$agReport['training']+
            $agReport['meeting']+$agReport['others'];
            }else{
               $totalHr=$agReport['ticketing']+$agReport['training']+
            $agReport['meeting']+$agReport['leave']+$agReport['others'];
            }
           
            $allday= $allday+$totalHr;
            $perYear=$ftnresult['peryear']/1600*$totalHr;
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
               <td><b><?php echo $totalCost; ?></b></td>


          </tr>

     </table>
</div>
</div>
</div


