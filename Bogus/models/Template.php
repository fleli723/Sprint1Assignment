<?php
/****************************************************************
* This template class is used to contruct the HTML pages used   *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
* @author Steve Suehring <steve.suehring@uwsp.edu>              *
* @FileName: Template.php                                       *
*                                                               *
****************************************************************/

class Template {
	//elements
	private $_headSection = ""; //sets html headsection to empty
	private $_title;			//for the page title
	private $_topHTML;			//for the opening html
	private $_bottomHTML;		//for the closing html
	
	/* This function contructs the title of the specific view.*/
	function __construct($title = "Default") {
		$this->_title = $title;
	}//end construct

	/* This function adds the requested html elements to the document head section.*/
	function addHeadElement($include) {
	  $this->_headSection .= $include . "\n";
	} //end function addHeadElement

	/*******************************************************************
	*              Top HTML Header Section                             *
	*******************************************************************/
	/* This function creates the top <HEAD> html or beginning html code */
	function finalizeTopHTML() {
		$returnVal = "";
		$returnVal .= "<!doctype html>\n";
		$returnVal .= "<html lang=\"en\">\n";
		$returnVal .= "<head><title>";
		$returnVal .= $this->_title;
		$returnVal .= "</title>\n";
		$returnVal .= $this->_headSection; 
		$returnVal .= "</head>\n";
		$returnVal .= "<body>\n";
		$returnVal .= "<div id='container'>\n";
		$this->_topHTML = $returnVal;
	} //end finalizeTopHTML
	
	/* This function returns the top <HEAD> html to the calling class.*/
	function getTopHTML() {
		return $this->_topHTML;
	}//end getTopHTML
	
	/*******************************************************************
	*              Bottom </Body> HTML Section                         *
	*******************************************************************/
	/*This function creates the bottom </BODY> html or ending html code*/
	function finalizeBottomHTML() {
		$returnVal = "";
		$returnVal .= "</div>\n"; // Closes Container
		$returnVal .= "</body>\n";
		$returnVal .= "</html>\n";
		$this->_bottomHTML = $returnVal;
	} //end function finalizeBottomSection

	/*This function returns the bottom </BODY> html to the calling class.*/
	function getBottomHTML() {
		return $this->_bottomHTML;
	}//end getBottomSection
} // end Template class
?>
