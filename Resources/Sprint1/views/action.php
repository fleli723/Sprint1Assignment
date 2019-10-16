<?php

require_once("template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='hello.js'></script>");//this is how we can also add our css 
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();


print "<h1>Thank you for participating in our survey</h1>";


print $page->getBottomSection();
