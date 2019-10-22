var $ = function(id) {	return document.getElementById(id);	}//end $
	
window.onload = function() {
	//Create event handlers
	$("frmSearch").reset();			//Resets Fields for FF Browser
	$("txtSearch").focus();			//Gives the search field the FOCUS on load
	$("txtSearch").onblur = validateSearch;	//If the search field is left then call the 
	$("btnReset").onclick = resetForm;	//Reset Form
	$("btnSubmit").onclick = validateForm;	//Validate the form on Submit	 
}//end window.onload

/* This function validates the email address that the user entered. */
function validateSearch() {
	var ptr = $("txtSearch"); 		//Pointer for the Search Box
	var err = $("errSearch");		//Pointer for the Search Box Error Marker
	if (ptr.value == "") {
		err.style.visibility = "visible";
		err.title = "Java - This is a required field.";
	}else {
		err.style.visibility = "hidden";
	}//end if
	return err.style.visibility == "hidden";
}//end validateEmailAddress

/* This function accepts any number of parameters. The function returns True if all the conditions 
are true, but does not short-circuit (quit when false is found). All conditions are evaluated.*/
function noShortCircuitAnd() {
	var result = true;	//The function returns True if all the conditions are true, but does not short-circuit
				//(quit when false is found).
		for (var i=0; i<arguments.length; i++)
			result = result && arguments[i];	
			//go through each argument and AND it with the previous
		return result;
}//end noShortCircuitAnd

/*This function clears all the form error markers and resets the form fields.*/
function resetForm() {
	//Hide all error markers
	var images = document.getElementsByTagName("img");
	for (var i=0; i<images.length; i++) {
		if(images[i].id.indexOf("err")==0) 
			images[i].style.visibility = "hidden";	
	}//end for
	$("txtSearch").focus();
}//end resetForm

/* This function ensures all form fields are valid before submitting the form data.*/
function validateForm() {
	if (noShortCircuitAnd (
			validateSearch())) {  
		return true;   //Go ahead and submit form
	}else {
		alert("Please correct the designated errors and submit again.");
		return false;  //Cancel the form submit
	}//end if
}//end validateForm
