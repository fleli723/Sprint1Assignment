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
require_once("../models/Template.php");
$page = new Template("Survey page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/header.css'>");
$page->addHeadElement("<script type='text/javascript' src='../scripts/survey.js'></script>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");
?>
<div id='main'>
				<div id='pageDescription'>
					<p><h2>Survey Page</h2><p>
					<span class='required'>* </span>Indicates a required entry
					<form class='formStyle' name="frmSurvey" id="survey" method ='post' action='surveyResults.php'>
						<fieldset>
							<legend><b>Email Address</b></legend>
								<div id = 'input-content'>
									<?php $email = (isset($email))?$email:""; ?>
									<label for='txtEmail'><span class="required">* </span>Email:</label>
									<input type='text' name='email' id='txtEmail' tabindex='1' size='50' value='<?php echo $email; ?>' required placeholder='Please enter a valid email address'>
									<img src='../images/error.gif' name='errEmail' id='errEmail'
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['email']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['email'])) ? $errors['email']:""; ?>" 
										>
									<br>
								</div>
								
								
					<br>
						</fieldset><br><br>
						<fieldset>
							<legend><b><span class='required'>* </span>Majors:</b> (select all that apply)</legend>
								<div id = 'input-content'>	
									<label><input type='checkbox' name='major[]' id='chkMajor1' tabindex='2' value='CIS-AppDev'> CIS-AppDev &nbsp;&nbsp;&nbsp;</label>
									<label><input type='checkbox' name='major[]' id='chkMajor2' tabindex='3 'value='CIS-Networking'> CIS-Networking &nbsp;&nbsp;&nbsp;</label>
									<label><input type='checkbox' name='major[]' id='chkMajor3' tabindex='4 'value='WDMD'> WDMD &nbsp;&nbsp;&nbsp;</label>
									<label><input type='checkbox' name='major[]' id='chkMajor4' tabindex='5 'value='WD'> WD &nbsp;&nbsp;</label>
									<label><input type='checkbox' name='major[]' id='chkMajor5' tabindex='6 'value='HTI'> HTI &nbsp;&nbsp;&nbsp;</label>
									<label><input type='checkbox' name='major[]' id='chkMajor6' tabindex='7 'value='Other'> Other &nbsp;&nbsp;&nbsp;</label>
									<img src='../images/error.gif' name='errMajor' id='errMajor'
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['major']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['major'])) ? $errors['major']:""; ?>" 
										>
								</div>	
						</fieldset><br><br>
						<fieldset>
							<legend><b><span class='required'>* </span>CNMT-310 Expected Grade: </b>(select one)</legend>
								<div id = 'input-content'>
									<label><input type='radio' name='grade' id='rdoGrade' value='A+'>A+ &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='A'>A &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='A-'>A- &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='B+'>B+ &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='B'>B &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='B-'>B- &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='C+'>C+ &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='C'>C &nbsp;&nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='C-'>C- &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='D+'>D+ &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='D'>D &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='D-'>D- &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='grade' id='rdoGrade' value='F'>F &nbsp;&nbsp;&nbsp;</label>
									<img src='../images/error.gif' name='errGrade' id='errGrade'
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['grade']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['grade'])) ? $errors['grade']:""; ?>" 
										>
								</div>	
						</fieldset><br><br>
						<fieldset>
							<legend> <b><span class='required'>* </span>Favorite Pizza Topping: </b>(select one)</legend>
								<div id = 'input-content'>
									<label><input type='radio' name='pizzaTopping' value='Sausage'>Sausage &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='pizzaTopping' value='Pepperoni'>Pepperoni &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='pizzaTopping' value='Bacon'>Bacon &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='pizzaTopping' value='Green Peppers'>Green Peppers &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='pizzaTopping' value='Jalepeno'>Jalepeno &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='pizzaTopping' value='Mushrooms'>Mushrooms &nbsp;&nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='pizzaTopping' value='Black Olives'>Black Olives &nbsp;&nbsp;&nbsp;</label>
									<label><input type='radio' name='pizzaTopping' value='Onions'>Onions &nbsp;&nbsp;&nbsp;</label>
								</div>	
						</fieldset><br><br>
						<div class='buttons'>
							<button type='submit' class='buttonStyle' id='btnSubmit' name='btnSsubmit'><img src='../images/user-save.png' alt='Submit'>&nbsp;Submit</button>
							<button type='reset' class='buttonStyle' id='btnReset' name='btnReset'><img src='../images/undo.gif' alt='Reset'>Reset</button>
							<button type='submit' class='buttonStyle' id='btnCancel' name='btnCancel'><img src='../images/cancel.png' alt='Cancel' height='15' width='15'>Cancel</button>
						</div>	
					</form>
				</div>
			</div><!-- end main --> 
<?php
include_once("footer.php");	
print $page->getBottomHTML();
?>