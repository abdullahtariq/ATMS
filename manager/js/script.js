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
    
  
  
     var d=new Date();
     var n=d.getTime();
     // console.log(n);
     n = n.toString()
    m=n.substring(9,14)
      // console.log(n)

 	 // console.log(Fname.charAt(0)+Lname.charAt(0)+Cnthub);
    var res=Fname.charAt(0).toUpperCase()+Lname.charAt(0).toUpperCase()+"-"+Cnthub+"-"m;
     

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

           var dropdown='<select class="selectpicker_new" name="finanasoption" >'
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
            document.getElementById('salaryInput').style.display="block";
            
           if (change=='un employee'|| change=='un family contractor') {

           	  document.getElementById('pryear').style.display="block";

           }else if(change=='consultants'){
           	document.getElementById('prhour').style.display="block";

           }
    }



 /*--------------Check email exist in DB through ajax-----------------*/
 
function checkemail(val) {
  // var mailwrapper=document.getElementById('emailwrap');
  // console.log(mailwrapper);
                           // alert('hit');
                           $.ajax({
                             type:"POST",
                             url:"/NEWemp-mns/admin/users/emailvali.php",
                             data:'email='+val,
                             success:function(data) {
                              
                              $("#msg").html(data);
                              if (data=='Email is alrady exist') {
                                var mailwrapper=document.getElementById('emailwrap');
                              mailwrapper.classList.add("has-error");
                              }


                            }
                          })
                         } 
                             

/*--------------END ajax-----------------*/
     

     /*=======================
   Search feilds in records
=========================*/       

function myFunction(event) {
  var role=document.getElementById('yourole').value;
  // console.log(Y);
 // console.log(event.which);
 var input=document.getElementById("mysearch");

 var filter=input.value.toLowerCase();
     // console.log(filter);
    var table=document.getElementById("tblrecord");
    // console.log(table);
    var tr=table.getElementsByTagName("tr");
    


    
  console.log("MANZAR");

     
    for (var i = 0; i < tr.length; i++) {

      var td=tr[i].getElementsByTagName("td");
      if (event.which==8 && filter=='') {
       tr[i].style.display="";
     }
     else if (event.which==13 || event.type=="click" || event.type=="change" ) {
          // debugger;
      if (event.type=="change") {
        // debugger;
          filter=role.toLowerCase();
          console.log(filter);
       }  
       // console.log(td.length -1 );
       var TDLength=td.length;
       // console.log(TDLength);
       //newtd=TD-1;
       if(tr[i].parentNode.nodeName!='THEAD'){
        tr[i].style.display="none";
      }

      if (td) {
             // debugger;
            for (var j = 0; j < TDLength; j++) {
             var updatedtd=td[j];
             console.log(filter);
       // debugger;
             if (updatedtd.innerHTML.toLowerCase().indexOf(filter)>-1) {
// debugger;
                      console.log(filter);
                     updatedtd.parentElement.style.display="";
                     
                   }

                }

              }

     }

   }
 }
      






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

