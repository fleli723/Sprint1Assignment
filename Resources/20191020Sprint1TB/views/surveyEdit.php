<?php
/****************************************************************
* This class is used to contruct the Survey HTML page used      *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
* @author Tim Bubla <tbubl928@uwsp.edu>                         *
* @FileName: survey.php                                         *
*                                                               *
* Changelog:                                                    *
* 20190926 - Tim Bubla      - Code Adapted for UWSP Assignment  *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("models/Template.php");
$page = new Template("Survey page");
$page->addHeadElement("<script type='text/javascript' src='scripts/jsFormValidator.js'></script>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/header.css'>");
$page->addHeadElement("<script type='text/javascript' src='scripts/survey.js'></script>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");
if($_POST<>"") {		//If there is data in the POST
	extract($_POST);	//Extract the POST data and make it available to the page	
	//print_r($_POST);	//used for testing purposes, uncomment to print the $POST array on the top of the view page
}//end if
print"
<div id='main'>
				<div id='pageDescription'>
					<p><h2>Survey Page</h2><p>
					<form class='formStyle' name='frmSurvey' id='frmSurvey' method ='post' action='.'>
					<input type='hidden' name='action' value='surveySaveNew'>
					<input type='hidden' name='insertTime' value="; print date('Y-m-d H:i:s'); 
					print" readonly='readonly'>
					
					
						<fieldset>
							<legend><b>Email Address</b></legend>
								<div id = 'input-content'>";
									echo $email = (isset($email))?$email:''; 
									print "<label for='txtEmail'><span class='required'>* </span>Email:</label>
									<input type='text' name='email' id='txtEmail' tabindex='1' size='50' value='"; echo $email; print "' placeholder='Please enter a valid email address'>
									<img src='images/error.gif' name='errEmail' id='errEmail'
										width='14' height='14' alt='Error icon' 
										style='visibility:"; 
										echo (isset($errors['email']))?"visible;": "hidden;"; 
										print "' 'title='"; echo(isset($errors['email'])) ? $errors['email']:""; print" 
										>
								</div>								
					<br>
						</fieldset><br>
						<fieldset>
							<legend><b><span class='required'>* </span>Majors:</b> (select all that apply)</legend>
								<div id = 'input-content'>
									
									<input type='checkbox' id='chkMajor1' name='major[0]' value='CIS-AppDev'"; 
											 if (isset($major[0]) && $major[0] == 'CIS-AppDev') echo 'checked'; print ">
										<label class='flowlabel' for='chkMajor1'>CIS-AppDev</label>
									
									<input type='checkbox' id='chkMajor2' name='major[1]' value='CIS-Networking'"; 
											 if (isset($major[1]) && $major[1] == 'CIS-Networking') echo 'checked'; print ">
										<label class='flowlabel' for='chkMajor2'>CIS-Networking</label>
										
									<input type='checkbox' id='chkMajor3' name='major[2]' value='WDMD'";
											  if (isset($major[2]) && $major[2] == 'WDMD') echo 'checked'; print ">
										<label class='flowlabel' for='chkMajor3'>WDMD</label>
										
									<input type='checkbox' id='chkMajor4' name='major[3]' value='WD'"; 
											  if (isset($major[3]) && $major[3] == 'WD') echo 'checked'; print ">
										<label class='flowlabel' for='chkMajor4'>WD</label>
										
									<input type='checkbox' id='chkMajor5' name='major[4]' value='HTI'"; 
											 if (isset($major[4]) && $major[4] == 'HTI') echo 'checked'; print ">
										<label class='flowlabel' for='chkMajor5'>HTI</label>
										
									<input type='checkbox' id='chkMajor6' name='major[5]' value='Other'"; 
											 if (isset($major[5]) && $major[5] == 'Other') echo 'checked'; print ">
										<label class='flowlabel' for='chkMajor6'>Other</label>&nbsp;&nbsp;&nbsp;
									<img src='images/error.gif' name='errMajor' id='errMajor'
										width='14' height='14' alt='Error icon' 
										style='visibility:"; echo(isset($errors['major']))?"visible;": "hidden;"; print"
										'title='";echo (isset($errors['major'])) ? $errors['major']:""; print"										>
								</div>	
						</fieldset><br>
						<fieldset>
							<legend><b><span class='required'>* </span>CNMT-310 Expected Grade: </b>(select one)</legend>
								<div id = 'input-content'>";
								 echo $grade = (isset($grade))?$grade:""; 
									print "<input type='radio' name='grade' id='rdoGradeA' tabindex='8' value='A'";
											 if($grade=="A") echo "checked='checked'"; print ">
											<label class='flowlabel' for='rdoGradeA'>A</label>
									<input type='radio' name='grade' id='rdoGradeB' tabindex='9' value='B'";
											if($grade=='B') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoGradeB'>B</label>
									<input type='radio' name='grade' id='rdoGradeC' tabindex='10' value='C'";
											if($grade=='C') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoGradeC'>C</label>
									<input type='radio' name='grade' id='rdoGradeD' tabindex='11' value='D'";
											if($grade=='D') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoGradeD'>D</label>		
									<input type='radio' name='grade' id='rdoGradeF' tabindex='12' value='F'";
											if($grade=='F') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoGradeF'>F</label>&nbsp;&nbsp;&nbsp;		
									<img src='images/error.gif' name='errGrade' id='errGrade'	
										width='14' height='14' alt='Error icon' 
										style='visibility:"; echo (isset($errors['grade']))?'visible;': 'hidden;'; print "'
										title='"; echo (isset($errors['grade'])) ? $errors['grade']:''; print "' 
										>
								</div>	
								
								
						</fieldset><br>
						<fieldset>
							<legend> <b><span class='required'>* </span>Favorite Pizza Topping: </b>(select one)</legend>
								<div id = 'input-content'>";
								
								
								print  $pizzaTopping = (isset($pizzaTopping))?$pizzaTopping:''; print "
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingSausage' tabindex='8' value='Sausage'";
											if($pizzaTopping=='Sausage') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingSausage'>Sausage</label>
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingPepperoni' tabindex='9' value='Pepperoni'";
											 if($pizzaTopping=='Pepperoni') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingPepperoni'>Pepperoni</label>
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingBacon' tabindex='10' value='Bacon'";
											 if($pizzaTopping=='Bacon') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingBacon'>Bacon</label>
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingGreenPeppers' tabindex='11' value='Green Peppers'";
											 if($pizzaTopping=='Green Peppers') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingGreenPeppers'>Green Peppers</label>		
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingJalepeno' tabindex='12' value='Jalepeno'";
											 if($pizzaTopping=='Jalepeno') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingJalepeno'>Jalepeno</label>	
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingMushrooms' tabindex='12' value='Mushrooms'";
											 if($pizzaTopping=='Mushrooms') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingMushrooms'>Mushrooms</label>	
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingBlackOlives' tabindex='12' value='Black Olives'";
											 if($pizzaTopping=='Black Olives') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingBlackOlives'>Black Olives</label>	
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingOnions' tabindex='12' value='Onions'";
											 if($pizzaTopping=='Onions') echo 'checked="checked"'; print ">
											<label class='flowlabel' for='rdoPizzaToppingOnions'>Onions</label>			
									&nbsp;&nbsp;&nbsp;
									<img src='images/error.gif' name='errPizzaTopping' id='errPizzaTopping'	
										width='14' height='14' alt='Error icon' 
										style='visibility:"; echo (isset($errors['pizzaTopping']))?'visible;': 'hidden;'; print "'
										title='"; echo (isset($errors['pizzaTopping'])) ? $errors['pizzaTopping']:''; print "' 
										>
						</fieldset><br><br>
						<div class='buttons'>
							<button type='submit' class='buttonStyle' id='btnSubmit' name='btnSubmit'><img src='images/user-save.png' alt='Submit'  tabindex='29' onclick = validateForm_C>Submit</button>
							<button type='reset' class='buttonStyle' id='btnReset' name='btnReset'><img src='images/undo.gif' alt='Reset'tabindex='30' >Reset</button>
							<button type='submit' class='buttonStyle' id='btnCancel' name='btnCancel'><img src='images/cancel.png' alt='Cancel' height='15' width='15' tabindex='31'>Cancel</button>
						</div>	
					</form>
				</div>
			</div><!-- end main --> ";

include_once("footer.php");	
print $page->getBottomHTML();
