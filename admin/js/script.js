/*
 * Name:  Manager Screen Scripts
 * Date: 03 21 2017
 * Author: Manzar Noman
 * Methods: Generate Unique ID No,
            Show hide dropdown for financial data,
            email validation using ajax,
            filtering data on grid
 *
 *
 */

 /*-------------------
Function for editable
--------------------     */

function editRow(event){
  var id = event.currentTarget.id;
  var justIdNo = id.split('-')[1];
  window.location = "index.php?act=mgupdate&id="+justIdNo;

}
function showRow(event) {
	
	var showId=event.currentTarget.id;
	var onlyId=showId.split('-')[1];
	window.location="index.php?act=mguv&id="+onlyId;
	}
  function checkbox() {
    // body...
    // console.log(event.currentTarget.id);
console.log(document.getElementById('selct'));
  }