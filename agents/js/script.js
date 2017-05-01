
var zone = "05:30"; 

$(document).ready(function(event) {
$('.selectpicker').selectpicker({
      size: 5,
      width : '100%'

  });

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
		      //console.log(crntdate);
          $('#storeddate').val(crntdate);
		     // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
         // console.log(view);
         // console.log(jsEvent);
		     // alert('Current view: ' + view.name);
         // change the day's background color just for fun

         $(this).addClass("bgcolor");

       },
       eventClick:function (event, jsEvent, view) {

           // alert(event.meeting);
           
           var newdt=event.start._d;
           var enddt=new Date(newdt);
              // console.log(enddt);
              var DAY=enddt.toDateString();
              $('.dt').html(DAY);
              $('.tc').html(event.ticketing);
              $('.me').html(event.meeting);
              $('.le').html(event.leave);
              $('.ot').html(event.others);
              $('.modal-bt').trigger('click');
            },


            header: {
             left: 'prev,next today',
             right: 'title'
           },
           editable: true,
           droppable: true,
           weekends: false,
         });

});


function submitform(event) {


  var drp=document.getElementById('leaves');
  console.log(drp.value);
  var ticket=document.getElementById('tick');
  console.log(ticket);
  var start=document.getElementById('storeddate').value;

  var meet=document.getElementById('meet');
  var other=document.getElementById('other');

  if (drp.value=='8') {
    var staticvalue={ticketing:"0", meeting:"0",leave:"8", others:"0",strtdate:start,type:"new",zone:zone};
  console.log(staticvalue);
    var newOBJ=staticvalue;
  }else{
    var formvalue =$('#form-wrap').serialize();
  console.log(formvalue);
    var newOBJ=formvalue+"&type=new"+"&zone="+zone;
  }
  $.ajax({
   url:"process.php",
   type:"POST",
   data:newOBJ,
   dataType:'json',
   success: function(response){
     event.id = response.eventid;
     $('#calendar').fullCalendar('updateEvent',event);
   },
   error: function(e){
     console.log(e.responseText);
   }
 });

}
/*-----------------
 plugin 
-------------------*/
