<?php

require_once("template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='../js/jsFormValidator.js'></script>");//this is how we can also add our css 
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/style.css'></link>");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Some page-specific HTML goes here TESTING TESTING</h1>\n";

print "    <ul>\n";
print "        <li><a href=\"../php/index.php\">Home</a></li>\n";
print "        <li><a href=\"../php/survey.php\">Survey</a></li>\n";
print "        <li><a href=\"../php/privacy.php\">Privacy</a></li>\n";
print "		<li><a href=\"../views/search.php\">Search</a></li>		\n";
print "    </ul>\n";
print "    <p> (index.php)There isnt anything specific that needs to be on this page</p>";


print $page->getBottomSection();