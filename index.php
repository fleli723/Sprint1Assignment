<?php
	
require("models/survey.php");
require("models/search.php");
$lifetime = 60 * 60 * 2;
session_set_cookie_params($lifetime,'/');
session_start();
//main index control
	if(isset($_REQUEST['action']))
		$action = $_REQUEST['action'];
	else //Only used first time controller is accessed
		$action = 'home';
	//end if
	switch($action) {
		case 'home':
			include('views/home.php');
			break;		
		case 'surveyEdit':
			extract($_REQUEST);
			$errors = "";
			//$details = "";
			include('views/surveyEdit.php');
			break;	
		case 'surveySaveNew':		
			switch(true) {
				case isset($_REQUEST['btnSubmit']):
					$errors = validateSurveyData();
					if(count($errors)==0) {
						//insertSurvey();
						include('views/surveyResults.php');	
					} else {
						//$major = $POST['major'];
						include("views/surveyEdit.php");  //Show form again with error markers
					}//end if
					break;
				case isset($_REQUEST['btnCancel']):
					$mbrs = getCompanyList();
					include('views/adminPayrolls.php');
					break;					
			}//end switch
			break;
		case 'privacy':
			include('views/privacy.php');
			break;	
		case 'dbSearch':
			include('views/dbSearch.php');
			break;
		case 'dbSearchResults':
			include('views/dbSearchResults.php');
			break;
			
		default:		//for debugging only
			include('views/pageNotAvail.php');
			break;
	}//end switch
?>
