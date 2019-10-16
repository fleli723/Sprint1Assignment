<?php

require_once("template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='../js/jsFormValidator.js'></script>");//this is how we can also add our css 
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/style.css'></link>");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Some page-specific HTML goes here TESTING TESTING</h1>\n";

print $page->getBottomSection();
