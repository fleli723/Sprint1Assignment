<?php
/****************************************************************
* This class is used to contruct the Survey HTML page used      *
* for the UWSP Fall 2019 Semester CMNT-310 class. Sprint 1      *
*                                                               *
*                                                               *      
* @FileName: surveyEdit.php                                     *
*                                                               *
*                                                               *
****************************************************************/
require_once("classes/Template.php");
$page = new Template("Survey page");

$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/header.css'>");
$page->addHeadElement("<script src='js/survey.js'></script>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");
if($_POST<>"") {		//If there is data in the POST
	extract($_POST);	//Extract the POST data and make it available to the page	
	//print_r($_POST);	//used for testing purposes, uncomment to print the $POST array on the top of the view page
}//end if
?>
<div id='main'>
				<div id='pageDescription'>
					<p><h2>Survey Page</h2><p>
					<form class='formStyle' name='frmSurvey' id='frmSurvey' method ='post' action='.'>
					<input type='hidden' name='action' value='surveySaveNew'>
					<input type="hidden" name="insertTime" value="<?php echo date('Y-m-d H:i:s'); ?>">
					
					
						<fieldset>
							<legend><b>Email Address</b></legend>
								<div id = 'input-content'>
									<?php $email = (isset($email))?$email:""; ?>
									<label for='txtEmail'><span class="required">* </span>Email:</label>
									<input type='text' name='email' id='txtEmail'  size='50' value='<?php echo $email; ?>' placeholder='Please enter a valid email address'>&nbsp;&nbsp;&nbsp;
									<img src='images/error.gif' id='errEmail'
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['email']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['email'])) ? $errors['email']:""; ?>" 
										>
								</div>								
					<br>
						</fieldset><br>
						<fieldset>
							<legend><b><span class='required'>* </span>Majors:</b> (select all that apply)</legend>
								
									
									<input type="checkbox" id="chkMajor1" name="major[0]" value="CIS-AppDev" 
											<?php if (isset($major[0]) && $major[0] == "CIS-AppDev") echo "checked"; ?>>
										<label class='flowlabel' for='chkMajor1'>CIS-AppDev</label>
									
									<input type="checkbox" id="chkMajor2" name="major[1]" value="CIS-Networking" 
											<?php if (isset($major[1]) && $major[1] == "CIS-Networking") echo "checked"; ?>>
										<label class='flowlabel' for='chkMajor2'>CIS-Networking</label>
										
									<input type="checkbox" id="chkMajor3" name="major[2]" value="WDMD" 
											<?php if (isset($major[2]) && $major[2] == "WDMD") echo "checked"; ?>>
										<label class='flowlabel' for='chkMajor3'>WDMD</label>
										
									<input type="checkbox" id="chkMajor4" name="major[3]" value="WD" 
											<?php if (isset($major[3]) && $major[3] == "WD") echo "checked"; ?>>
										<label class='flowlabel' for='chkMajor4'>WD</label>
										
									<input type="checkbox" id="chkMajor5" name="major[4]" value="HTI" 
											<?php if (isset($major[4]) && $major[4] == "HTI") echo "checked"; ?>>
										<label class='flowlabel' for='chkMajor5'>HTI</label>
										
									<input type="checkbox" id="chkMajor6" name="major[5]" value="Other" 
											<?php if (isset($major[5]) && $major[5] == "Other") echo "checked"; ?>>
										<label class='flowlabel' for='chkMajor6'>Other</label>&nbsp;&nbsp;&nbsp;
									<img src='images/error.gif'  id='errMajor'
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['major']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['major'])) ? $errors['major']:""; ?>" 
										>
									
						</fieldset><br>
						<fieldset>
							<legend><b><span class='required'>* </span>CNMT-310 Expected Grade: </b>(select one)</legend>
								
								<?php $grade = (isset($grade))?$grade:""; ?>
									<input type='radio' name='grade' id='rdoGradeA'  value='A'
											<?php if($grade=="A") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoGradeA">A</label>
									<input type='radio' name='grade' id='rdoGradeB'  value='B'
											<?php if($grade=="B") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoGradeB">B</label>
									<input type='radio' name='grade' id='rdoGradeC'  value='C'
											<?php if($grade=="C") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoGradeC">C</label>
									<input type='radio' name='grade' id='rdoGradeD'  value='D'
											<?php if($grade=="D") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoGradeD">D</label>		
									<input type='radio' name='grade' id='rdoGradeF'  value='F'
											<?php if($grade=="F") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoGradeF">F</label>&nbsp;&nbsp;&nbsp;		
									<img src="images/error.gif"  id="errGrade"	
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['grade']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['grade'])) ? $errors['grade']:""; ?>" 
										>
									
								
								
						</fieldset><br>
						<fieldset>
							<legend> <b><span class='required'>* </span>Favorite Pizza Topping: </b>(select one)</legend>
								
								
								
								<?php $pizzaTopping = (isset($pizzaTopping))?$pizzaTopping:""; ?>
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingSausage'  value='Sausage'
											<?php if($pizzaTopping=="Sausage") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingSausage">Sausage</label>
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingPepperoni'  value='Pepperoni'
											<?php if($pizzaTopping=="Pepperoni") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingPepperoni">Pepperoni</label>
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingBacon'  value='Bacon'
											<?php if($pizzaTopping=="Bacon") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingBacon">Bacon</label>
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingGreenPeppers'  value='Green Peppers'
											<?php if($pizzaTopping=="Green Peppers") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingGreenPeppers">Green Peppers</label>		
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingJalepeno'  value='Jalepeno'
											<?php if($pizzaTopping=="Jalepeno") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingJalepeno">Jalepeno</label>	
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingMushrooms'  value='Mushrooms'
											<?php if($pizzaTopping=="Mushrooms") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingMushrooms">Mushrooms</label>	
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingBlackOlives'  value='Black Olives'
											<?php if($pizzaTopping=="Black Olives") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingBlackOlives">Black Olives</label>	
									<input type='radio' name='pizzaTopping' id='rdoPizzaToppingOnions'  value='Onions'
											<?php if($pizzaTopping=="Onions") echo "checked='checked'"; ?>>
											<label class='flowlabel' for="rdoPizzaToppingOnions">Onions</label>			
									&nbsp;&nbsp;&nbsp;
									<img src="images/error.gif"  id="errPizzaTopping"	
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['pizzaTopping']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['pizzaTopping'])) ? $errors['pizzaTopping']:""; ?>" 
										>
						</fieldset><br><br>
						<div class='buttons'>
							<button type='submit' class='buttonStyle' id='btnSubmit' name='btnSubmit'><img src='images/user-save.png' alt='Submit'   onclick = validateForm_C>Submit</button>
							<button type='reset' class='buttonStyle' id='btnReset' name='btnReset'><img src='images/undo.gif' alt='Reset' >Reset</button>
						</div>	
					</form>
				</div>
			</div><!-- end main --> 
<?php
include_once("footer.php");	
print $page->getBottomHTML();
?>
