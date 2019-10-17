<?php
/****************************************************************
* This class is used to contruct the main Home HTML page used   *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
* @author Tim Bubla <tbubl928@uwsp.edu>                         *
* @FileName: index.php                                          *
*                                                               *
* Changelog:                                                    *
* 20190926 - Tim Bubla      - Code Adapted for UWSP Assignment  *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("../models/Template.php");
$page = new Template("Home page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/header.css'>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");
print "<div id='main'>
			<div id='pageDescription'>
				<p><h2>CNMT-310 Sprint 1</h2>
				<p></p>
				<p>This Page has not been created yet</p>
				
				
			</div>
		</div><!-- end main -->\n";
include_once("footer.php");		
print $page->getBottomHTML();
?>