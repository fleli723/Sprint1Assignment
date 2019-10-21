<?php

function validateSurveyData() {
	extract($_REQUEST);
	$errors= array();	//All the error messages in an Array
	
	//Validate E-mail (Make sure it is not blank and a valid E-mail Address.)
	if($email==""){
		$errors['email']= "PHP - E-mail Address is a required field.";
	}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email']= "PHP - Please enter an email address using the following format:&#13;   johnsmith@sample.com";
	}//end if
	
	//Validate Major (Make sure at least one major is selected in the checkbox array.)
	if (!isset($major)) {
			$errors['major'] = "PHP - You must select at least one major.";
	}//end if
	
	//Validate Grade (Make sure a radio button is selected for the grade.)
	if (!isset($grade)) {
			$errors['grade'] = "PHP - Please select a grade.";
	}//end if
	
	//Validate Pizza Topping (Make sure a radio button is selected for the pizza topping.)
	if (!isset($pizzaTopping)) {
			$errors['pizzaTopping'] = "PHP - Please select a pizza Topping.";
	}//end if	
	
	return $errors; //Returns the PHP Validation Errors array to the calling class
}//end validateSurveyData
?> 