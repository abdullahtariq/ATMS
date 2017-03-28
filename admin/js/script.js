/* 
 * Name:  Manager Screen Scripts
 * Date: 03 21 2017
 * Author: Manzar Noman
 * Methods: Generate Unique ID No,  
 * 			
 * 
 */

 function generateRandomNumber(){
 	 
 	 var Fname=document.getElementById('Fname').value;
 	 var Lname=document.getElementById('Lname').value;
 	 var Email=document.getElementById('Email').value;
 	 var Dphone=document.getElementById('Dphone').value;
 	 var Cnthub=document.getElementById('Cnthub').value;
 	 // console.log(Fname.charAt(0)+Lname.charAt(0)+Cnthub);
    var res=Fname.charAt(0).toUpperCase()+Lname.charAt(0).toUpperCase()+"-"+Cnthub+"-"+Dphone.substring(0,4);
     

    document.getElementById("Idntnumber").value = res;
    document.getElementById("Idntnumber").focus();
 }
/*-------------------       
 Function for financial data        
 --------------------     */
    
    var contractopt=
    [{
    	'contract':'un employee',
    	'option':'Continuous,Fixed Term,Temporary Appointment'
    }
    ,
    {
          'contract':'un family contractor',
          'option':'UNOPS,ICC'
    }
    ,
    {
    	'contract':'consultants',
    	'option':'Trygin,SSA'
    }];
    function changeOpt(event){
    	var change=document.getElementById('findata').value;
        // console.log(change);


    	for (var i = 0; i<contractopt.length ; i++) {
    		// console.log(contractopt[i].option);
    		
    if (contractopt[i].contract==change) {
    	
    	var optwrap=contractopt[i].option;
    	// console.log(optwrap);
    }

    		 
    	}
           var newopt=optwrap.split(',');
           var selectFin = document.getElementById('selectedFin');

           var dropdown='<select class="selectpicker_new" name="finopt" >'
           for (var i = 0; i < newopt.length; i++) {
           	 if(selectedFin.value && selectedFin.value==newopt[i]){
                dropdown+='<option selected>'+newopt[i]+'</option>';
             }else{
                dropdown+='<option>'+newopt[i]+'</option>';
             }
           	 
           };
           dropdown+='</select>';

           
           document.getElementById('newdrpdown').innerHTML=dropdown;
           $('.selectpicker_new').selectpicker({
    				size: 5,
    				width : '100%'
    			});
           document.getElementById('typefd').style.display = "block";
            document.getElementById('pryear').style.display="none";
            document.getElementById('prhour').style.display="none";
            document.getElementById('Anicome').style.display="none";
            document.getElementById('salaryInput').style.display="block";
            
           if (change=='un employee'|| change=='un family contractor') {

           	  document.getElementById('pryear').style.display="block";
              document.getElementById('Anicome').style.display="block";

           }else if(change=='consultants'){
           	document.getElementById('prhour').style.display="block";
            document.getElementById('Anicome').style.display="block";

           }
    }



  /*   emai validation         */
                   
function checkemail(val) {
                
                $.ajax({
                    type:"POST",
                    url:"common.php",
                    data:'email='+val,
                    success:function(data) {
                      
                      $("#msg").html(data);
                    }
                })
                } 
                             

/*--------------END ajax-----------------*/
             






/*=================================
 Plugin Intializers
==================================*/

$(document).ready(function(){
  













	$('.selectpicker').selectpicker({
		  size: 5,
		  width : '100%'

	});
  // If manager edit is performed
  var hub = document.getElementById('Cnthub');
  if(hub){
    hub = hub.getAttribute('data-value')
    $('#Cnthub').selectpicker('val',hub);
  }
  // /* time to edit*/
  var Role=document.getElementById('urole');
  if (Role) {
    Role = Role.getAttribute('data-value')
    $('#urole').selectpicker('val',Role);
  }
  // /* time to edit*/
  var financial=document.getElementById('findata');
  if (financial) {
    var financials = financial.getAttribute('data-value');
    $('#findata').selectpicker('val',financials);
    if(financials){
      changeOpt();
    }
    
  }
  // /* time to edit*/
  var Fundsource=document.getElementById('fndsource');
  if (Fundsource) {
    Fundsource=Fundsource.getAttribute('data-value');
    $('#fndsource').selectpicker('val',Fundsource);
  }


	// Getting date
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	if(mm < 9){
		mm = "0"+mm;
	}
  	$('#dp3 input').val(dd+"-"+mm+"-"+yyyy);
	$('#dp3').datepicker({
		defaultDate: "11/1/2013",
	});
	
	$('#dp4').datepicker()
	$('#dp5').datepicker()
	
  // initialise tooltip
  $('[data-toggle="tooltip"]').tooltip()
});

