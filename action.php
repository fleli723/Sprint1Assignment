<?php

require_once("Template.php");

$page = new Template("Survey Page");
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
			
print		'<div class="content">
			<h2 class="action"> Thank you for submitting your answers! </h2>
			</div>';

print $page->getBottomSection();

?>