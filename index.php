<?php
	
require("classes/survey.php");
require("classes/search.php");
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
			include('php/home.php');
			break;		
		case 'surveyEdit':
			extract($_REQUEST);
			$errors = "";
			//$details = "";
			include('php/surveyEdit.php');
			break;	
		case 'surveySaveNew':		
			switch(true) {
				case isset($_REQUEST['btnSubmit']):
					$errors = validateSurveyData();
					if(count($errors)==0) {
						//insertSurvey();
						include('php/surveyResults.php');	
					} else {
						//$major = $POST['major'];
						include("php/surveyEdit.php");  //Show form again with error markers
					}//end if
					break;
				case isset($_REQUEST['btnCancel']):
					$mbrs = getCompanyList();
					include('php/adminPayrolls.php');
					break;					
			}//end switch
			break;
		case 'privacy':
			include('php/privacy.php');
			break;	
		case 'dbSearch':
			include('php/dbSearch.php');
			break;
		case 'dbSearchResults':
			include('php/dbSearchResults.php');
			break;
			
		default:		//for debugging only
			include('php/pageNotAvail.php');
			break;
	}//end switch
?>
