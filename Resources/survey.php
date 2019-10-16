<?php

require_once("template.php");

$page = new Template("My Page");

$page->addHeadElement("<script src='../js/jsFormValidator.js'></script>");//this is how we can also add our css 
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/style.css'></link>");
$page->finalizeTopSection();
$page->finalizeBottomSection();
print $page->getTopSection();
print "    <ul>\n";
print "        <li><a href=\"../php/index.php\">Home</a></li>\n";
print "        <li><a href=\"../php/survey.php\">Survey</a></li>\n";
print "        <li><a href=\"../php/privacy.php\">Privacy</a></li>\n";
print "		<li><a href=\"../views/search.php\">Search</a></li>		\n";

print "    </ul>\n";
print "    <br>\n";
print "\n";
print "    <form name=\"myForm\" method=\"post\" action=\"testform.php\" onsubmit=\"return validateForm()\">\n";
print "        <span>Email:</span>\n";
print "        <input type=\"email\" name=\"email\" placeholder=\"Email\">\n";
print "        <br>\n";
print "        <p> What is your major?</p>\n";
print "\n";
print "        <input type=\"checkbox\" name=\"majorCheckBox\" class=\"box\"> CIS-Networking\n";
print "        <br>\n";
print "        <input type=\"checkbox\" name=\"majorCheckBox\" class=\"box\"> WDMD\n";
print "        <br>\n";
print "        <input type=\"checkbox\" name=\"majorCheckBox\" class=\"box\"> CIS-AppDev\n";
print "        <br>\n";
print "        <input type=\"checkbox\" name=\"majorCheckBox\" class=\"box\"> WD\n";
print "        <br>\n";
print "        <input type=\"checkbox\" name=\"majorCheckBox\" class=\"box\"> HTI\n";
print "        <br>\n";
print "        <br>\n";
print "        <p>What grade do you expect to recieve in CNMT 310?</p>\n";
print "        <input type=\"radio\" name=\"grade\">A\n";
print "        <br />\n";
print "        <input type=\"radio\" name=\"grade\">B\n";
print "        <br />\n";
print "        <input type=\"radio\" name=\"grade\">C\n";
print "        <br/>\n";
print "        <input type=\"radio\" name=\"grade\">D\n";
print "        <br/>\n";
print "        <input type=\"radio\" name=\"grade\">F\n";
print "        <br/>\n";
print "\n";
print "        <p> What is your favorite pizza topping? </p>\n";
print "        <input type=\"radio\" name=\"pizza_topping\">Pepperoni\n";
print "        <br/>\n";
print "        <input type=\"radio\" name=\"pizza_topping\">Pineapple\n";
print "        <br/>\n";
print "        <input type=\"radio\" name=\"pizza_topping\">Bacon\n";
print "        <br/>\n";
print "        <input type=\"radio\" name=\"pizza_topping\">Dead Fish\n";
print "        <br/>\n";
print "        <input type=\"radio\" name=\"pizza_topping\">Bear Claws\n";
print "        <br/>\n";
print "        <input type=\"radio\" name=\"pizza_topping\">Extra Cheese\n";
print "        <br/>\n";
print "        <br/>\n";
print "\n";
print "        <input type=\"submit\" value=\"Submit\" id=\"Btnsubmit\">\n";
print "\n";
print "    </form>";




print $page->getBottomSection();


