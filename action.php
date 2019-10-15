<?php

require_once("Template.php");

$page = new Template("Survey Page");
$page->addHeadElement("<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print "<div class=\"topbar\">
				<h1> CNMT 310 Assignment 1 </h1>
				<ul class=\"nav\">
					<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Assignment1/PHP/index.php\">Home</a></li>
					<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Assignment1/PHP/survey.php\">Survey</a></li>
					<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Assignment1/PHP/privacy.php\">Privacy Policy</a></li>
				</ul>
			</div>
			
			<div class=\"content\">
			<h2 class=\"action\"> Thank you for submitting your answers! </h2>
			</div>";

print $page->getBottomSection();

?>