/* 
 * Name:  Manager Screen Scripts
 * Date: 03 21 2017
 * Author: Manzar Noman
 * Methods: Generate Unique ID No,  
 * 			
 * 
 */




/*=======================
   Search feilds in records
=========================*/       

function myFunction(event) {
 
 var input=document.getElementById("mysearch");

 var filter=input.value.toLowerCase();
     // console.log(filter);
    var table=document.getElementById("tblrecord");
    // console.log(table);
    var tr=table.getElementsByTagName("tr");
    


    
    // console.log(tr);

     
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
$(document).ready(function(){

// initialise tooltip
  $('[data-toggle="tooltip"]').tooltip()



});
