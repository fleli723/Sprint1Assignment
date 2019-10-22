event.preventDefault();
var $ = function(id) {	return document.getElementById(id);	}//end $
	
window.onload = function() {
	//Create event handlers
	$("frmSurvey").reset();			//Clear previous entries in FF
	$("txtEmail").focus();			//Gives the email field the FOCUS on load
	$("txtEmail").onblur = validateEmail;	//If the email field is left then call the 
	$("btnReset").onclick = resetForm;
	$("btnSubmit").onclick = validateForm;		 
}//end window.onload

/* This function validates the email address that the user entered. */
function validateEmail() {
	var ptr = $("txtEmail");
	var err = $("errEmail");
	var emailAddy = ptr.value;
	var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	
	if (emailAddy == "") {
		err.style.visibility = "visible";
		err.title = "Java - This is a required field.";
	}else if (emailAddy != "") {
		if (!emailAddy.match(emailPattern)) {
			err.style.visibility = "visible";
			err.title = "Java - Enter a valid email address such as johndoe123@gmail.com.";
		}else{
			err.style.visibility = "hidden";
		}//end if
	}// end if
	return err.style.visibility == "hidden";
}//end validateEmailAddress

/* This function accepts any number of parameters.  The function returns True if all the conditions are 
true, but does not short-circuit (quit when false is found). All conditions are evaluated.
*/
function noShortCircuitAnd() {
	var result = true;		//The function returns True if all the conditions are true, but does not short-circuit
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
	$("txtEmail").focus();
}//end resetForm

//Validate Grade 
function validateGrade()
{
     var err = $("errGrade");
     var grade = document.frmSurvey.grade;	 
     for (var i=0; i<grade.length; i++) 
	 {
       if (grade[i].checked)
	   {
            err.style.visibility = "hidden";
            break;
		}
		else
		{
			err.style.visibility="visible";
			err.title="java-Please select a grade";
		 
		}
     }
    
}

/*	This function ensures all form fields are valid before submitting the form data.*/
function validateForm() {
	if (noShortCircuitAnd (
			validateEmail(),
			validateGrade()
			)) {  
		return true;   //Go ahead and submit form
	}else {
		alert("Please correct the designated errors and submit again.");
		return false;  //Cancel the form submit
	}//end if
}//end validateForm
