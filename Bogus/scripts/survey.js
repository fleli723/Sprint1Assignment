var $ = function(id) {	return document.getElementById(id);	}//end $
	
window.onload = function() {
	//Create event handlers
	$("txtEmail").focus();					//Gives the email field the FOCUS on load
	$("txtEmail").onblur = validateEmail;	//If the email field is left then call the validate function
	$("chkMajor[]").onchange = validateMajor;
	$("rdoGrade").onblur = validateGrade;
	$("rdoPizzaTopping").onblur = validatePizzaTopping;
	$("btnReset").onclick = resetForm;
	$("btnSave").onclick = validateForm;		 
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

/* This function accepts any number of parameters. Most are designated as conditions,
	but they can also be flags. All parameters should evaluate to true/false. 
	The function returns True if all the conditions are true, but does not short-circuit
	(quit when false is found).
	All conditions are evaluated.
*/
function noShortCircuitAnd() {
	var result = true;		//The function returns True if all the conditions are true, but does not short-circuit
							//(quit when false is found).
	
		for (var i=0; i<arguments.length; i++)
			result = result && arguments[i];	
			//go through each argument and AND it with the previous
		return result;
}//end noShortCircuitAnd

/*This function clears all the form error markers and resets the form fields.
*/
function resetForm() {
	//Hide all error markers
	var images = document.getElementsByTagName("img");
	for (var i=0; i<images.length; i++) {
		if(images[i].id.indexOf("err")==0) 
			images[i].style.visibility = "hidden";	
	}//end for
	$("txtEmail").focus();
}//end resetForm

/* This function validates the Majors that the user entered. */
function validateMajor() {
	/* //var checked=false;
	var ptr = $("chkMajor");
	var err = $("errMajor");
	//var elements = document.getElementsByName(ptr);
	for(var i=0; i < ptr.length; i++){
		if(ptr[i].checked) {
			//checked = true;
			err.style.visibility = "hidden";
		}else{
			err.style.visibility = "visible";
			err.title = "Java - You must select at least 1 major.";
	}//end for
	if (!checked) {
		err.style.visibility = "visible";
		err.title = "Java - You must select at least 1 major.";
	}//end if
	return checked; */
	
	/* var ptr = document.getElementsByID("chkMajor");
	var err = $("errMajor");
	var checkedMajors = 0;
	for(var i=0; i < ptr.length; i++){
		if(ptr[i].checked) {
			checkedMajors++;
		}//endif
	}//endfor
	if(checkedMajors > 0) {  
        err.style.visibility = "hidden";
    }else{
		err.style.visibility = "visible";
		err.title = "Java - You must select at least 1 major.";
	}//endfor */
	 
	
	/* var ptr = document.getElementsByID("chkMajor[]");
	var err = $("errMajor");
	var check3 = 0;
	for(i=0;i<ptr.length;i++){
		if(ptr[i].checked){
			err.style.visibility = "hidden";
	}else{
		err.style.visibility = "visible";
		err.title = "Java - You must select at least 1 major.";
    } */
}//end

/* This function determines which radio button in the group specified in the parameter 
	is selected and returns a pointer to that object.*/
var getSelectedRadioButton = function (groupName) {
	var buttons = document.getElementsByName(groupName);
	for (var i=0; i<buttons.length; i++) {
		if (buttons[i].checked) {
			return buttons[i];
		}//end if
	}//end for
}//end getSelectedRadioButton

/* This function validates the Grade that the user entered. */
function validateGrade() {
	var selectedButton = getSelectedRadioButton("favColors");
	if (selectedButton) {
		//do stuff with selected button
	} else {
		//no button selected
	}//end if
}//end

/* This function validates the Pizza Topping that the user entered. */
function validatePizzaTopping() {
	
}//end

/*	This function ensures all form fields are valid before submitting the form data.
*/
function validateForm() {
	if (noShortCircuitAnd (
			validateEmail(),
			validateMajor(),
			validateGrade(),
			validatePizzaTopping() )) {  
		return true;   //Go ahead and submit form
	}else {
		alert("Please correct the designated errors and submit again.");
		return false;  //Cancel the form submit
	}//end if
}//end validateForm