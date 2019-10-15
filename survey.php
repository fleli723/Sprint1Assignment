<?php

require_once("Template.php");

$page = new Template("Survey Page");
$page->addHeadElement("<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">");
$page->addHeadElement("<script src='script.js'></script>");
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
			
			<form name=\"survey\" onsubmit=\"return validateForm();\" action=\"action.php\" method=\"post\">
			
			Email:<br>
			<input type=\"text\" id=\"email\" name=\"email\"><br>
			<br>
			
			<div class=\"formboxes\">
			
				What is your major?<br>
				<input type=\"checkbox\" name=\"major\" value=\"CIS-AppDev\"> CIS-AppDev<br>
				<input type=\"checkbox\" name=\"major\" value=\"CIS-Networking\"> CIS-Networking<br>
				<input type=\"checkbox\" name=\"major\" value=\"WDMD\"> WDMD<br>
				<input type=\"checkbox\" name=\"major\" value=\"WD\"> WD<br>
				<input type=\"checkbox\" name=\"major\" value=\"HTI\"> HTI<br>
				<input type=\"checkbox\" name=\"major\" value=\"Other\"> Other<br>
				<br>
			</div>
			
			<div class=\"formboxes\">
				What grade do you expect to receive in CNMT 310?<br>
				<input type=\"radio\" name=\"grade\" value=\"A\"> A<br>
				<input type=\"radio\" name=\"grade\" value=\"B\"> B<br>
				<input type=\"radio\" name=\"grade\" value=\"C\"> C<br>
				<input type=\"radio\" name=\"grade\" value=\"D\"> D<br>
				<input type=\"radio\" name=\"grade\" value=\"F\"> F<br>
				<br>
			</div>
			
			<div class=\"formboxes\">
				What is your favorite pizza topping?<br>
				<input type=\"radio\" name=\"topping\" value=\"Pepperoni\"> Pepperoni<br>
				<input type=\"radio\" name=\"topping\" value=\"Sausage\"> Sausage<br>
				<input type=\"radio\" name=\"topping\" value=\"Bacon\"> Bacon<br>
				<input type=\"radio\" name=\"topping\" value=\"Mushroom\"> Mushroom<br>
				<input type=\"radio\" name=\"topping\" value=\"Pineapple\"> Pineapple<br>
				<br>
			</div>
			
			<input class=\"button\" type=\"submit\" value=\"Submit\">
			
			</form>
		
			</div>";

print $page->getBottomSection();

