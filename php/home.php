<?php
/****************************************************************
* This class is used to contruct the main Home HTML page used   *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("classes/Template.php");
$page = new Template("Home page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/header.css'>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");?>
<div id='main'>
			<div id='pageDescription'>
				<p><h2>CNMT-310 Sprint 1</h2>
				<p>Tim, Corbin and Filip</p>
				<p>more information comming</p>
				
				
			</div>
		</div><!-- end main -->
<?php
include_once("footer.php");		
print $page->getBottomHTML();
?>