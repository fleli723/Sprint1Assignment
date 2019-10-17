<?php
/****************************************************************
* This class is used to contruct the Results HTML page used     *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
* @author Tim Bubla <tbubl928@uwsp.edu>                         *
* @FileName: results.php                                        *
*                                                               *
* Changelog:                                                    *
* 20190926 - Tim Bubla      - Code Adapted for UWSP Assignment  *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("../models/Template.php");
$page = new Template("Survey Results page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/header.css'>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");
extract($_POST);
print "<div id='main'>
			<div id='pageDescription'>
				<p><h2>Survey Results Page</h2>
				<h3>Your email address is: "; print $email;print"</h3>";
				if (count($major) == 1) {
					print "<h3>Your major is: ";
				}else{
					print "<h3>Your majors are: ";
				}//end if
				$last = count($major) - 1;
				foreach($major as $index => $value) {
					if($index == $last) {
						echo $value . '.';
					}else{
						echo $value . ', ';
					}//end if
				}//end foreach
				print"</h3>
				<h3>You expect to earn a "; print $grade;print" in your CNMT-310 Class.</h3>
				<h3>"; print $pizzaTopping;print" is your favorite Pizza Topping.</h3>
			</div>
		</div><!-- end main -->\n";
include_once("footer.php");	
print $page->getBottomHTML();
?>