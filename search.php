<?php

require_once("Template.php");

$page = new Template("Search Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->addHeadElement("<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print 	'<div class="topbar">
			<h1> CNMT 310 Sprint 1 Assignment</h1>
			<ul class="nav">
				<li><a href="http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/index.php">Home</a></li>
				<li><a href="http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/survey.php">Survey</a></li>
				<li><a href="http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/privacy.php">Privacy Policy</a></li>
				<li><a href="http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/search.php">Search</a></li>
			</ul>
		</div>';

print	'<form name="myForm" method="post" action="testform.php" onsubmit="return validateForm()">

			<span>Search</span>
			<input type="text" id="SearchBar" name="Search_Bar_Name" placeholder="Title or Artist Name">
			<br>
			<input type="submit" value="Submit" id="Btnsubmit">
		</form>';

print $page->getBottomSection();

?>