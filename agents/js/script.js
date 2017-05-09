
var zone = "05:30"; 


$(document).ready(function(event) {
  


   $('#myalert').hide();
   $('#Myalert').hide();



 $.ajax({
   url: 'process.php',
   type: 'POST',
   data: 'type=fetch',
   async: false,
   success: function(response){
    json_events = response;
  }
});
 
 $('#calendar').fullCalendar({
   events: JSON.parse(json_events),
       
   dayClick: function(date,jsEvent,view) {
    $('.fc-day').removeClass('bgcolor');

		      //alert('Clicked on: ' + date.format());
          var crntdate=date.format("YYYY-MM-DD[T]HH:MM:SS");
		      console.log(crntdate);
          
          $('#storeddate').val(crntdate);
		     // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
          console.log(view);
         // console.log(jsEvent);
		     // alert('Current view: ' + view.name);
         // change the day's background color just for fun

         $(this).addClass("bgcolor");
         $('.modal-bt').trigger('click');
         document.getElementById('form-wrap').style.display="block";

       },
       eventRender: function(event, element) {
    element.find(".fc-event-title").remove();
    element.find(".fc-event-time").remove();
    var new_description =   
          ' Hours: ' + event.ticketing + '<br/>'
        + 'Meeting Hours: ' + event.meeting + '<br/>'
        + 'Leaves: ' + event.leave + '<br/>'
        + 'Others:' + event.others + '<br/>'
    ;
    element.append(new_description);
},
 
        // eventClick:function (event, jsEvent, view) {
        //     document.getElementById('form-wrap').style.display="block";
        //      // console.log(event);
        //      //    var newdt=event.start._d;
        //      //    var enddt=new Date(newdt);
        //      //   // console.log(enddt);
        //      //   var DAY=enddt.toDateString();
        //      //   $('.dt').html(DAY);
        //      //   $('.tc').html(event.ticketing);
        //      //   $('.me').html(event.meeting);
        //      //   $('.le').html(event.leave);
        //      //   $('.ot').html(event.others);
                
        //      },


            header: {
             left: 'prev,next today',
             right: 'title'
           },
           defaultView: 'basicWeek',
           firstDay: 1,
         });
 
 

});


function submitform(event) {
 
  var drp=document.getElementById('leaves');
  // console.log(drp.value);
  var ticket=document.getElementById('tick');
  // console.log(ticket);
 
  var start=document.getElementById('storeddate').value;
if (start=="") {
      var myDate = new Date();

var year = myDate.getFullYear();

var month = myDate.getMonth() + 1;
if(month <= 9){
    month = '0'+month;
}
var day= myDate.getDate();
if(day <= 9){
    day = '0'+day;
}
var prettyDate = year +'-'+ month +'-'+ day;
       start=prettyDate+"T00:05:00";
       


document.getElementById('storeddate').value=start;
console.log(start);
}
  var meet=document.getElementById('meet');
  var other=document.getElementById('other');

  if (drp.value=='8') {
      var staticvalue={ticketing:"0", meeting:"0",leave:"8", others:"0",strtdate:start,type:"new",zone:zone};
      // console.log(staticvalue);
      var newOBJ=staticvalue;
  }else{
      var formvalue =$('#form-wrap').serialize();
       // console.log(formvalue);
      var newOBJ=formvalue+"&type=new"+"&zone="+zone;
  }
  $.ajax({
   url:"process.php",
   type:"POST",
   data:newOBJ,
   dataType:'json',
    success: function(response){
         console.log(response.status);
         if (response.status=='failed') {
             $('#Myalert').show();
             $('#form-wrap')[0].reset();
             
         }else{
             eventid = response.eventid;
             $('#form-wrap')[0].reset();
          
             var event = { id:eventid, 
                     start:response.start,
                     ticketing:response.ticketing,
                     meeting:response.meeting,
                     leave:response.leave,
                     others:response.others
                     };
        // console.log(event);
      
        $('#calendar').fullCalendar('renderEvent',event);
         $('#myalert').show();
        
      }

      },
      error: function(e){
        console.log(e.responseText);

      }
 });
   // $('#calendar').fullCalendar('updateEvent',event);
}
/*-----------------
 plugin 
-------------------*/
 function hidmsg() {
              document.getElementById('Myalert').style.display='none';
            } 


function sucess() {
           document.getElementById('myalert').style.display='none';
         }
  