/* 
 * Name:  Manager Screen Scripts
 * Date: 03 21 2017
 * Author: Manzar Noman
 * Methods: Generate Unique ID No,  
 * 			
 * 
 */

/*-------------------
Function for editable
--------------------     */

function editRow(event){
  var id = event.currentTarget.id;
  var justIdNo = id.split('-')[1];
  window.location = "index.php?act=hmupdate&id="+justIdNo;

}
function showRow(event) {
	
	var showId=event.currentTarget.id;
	var onlyId=showId.split('-')[1];
	window.location="index.php?act=hmv&id="+onlyId;
	}





