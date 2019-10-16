<?php

require_once("template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='hello.js'></script>");//this is how we can also add our css 
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();


print "<!DOCTYPE html>\n";
print "<html>\n";
print "\n";
print "<head>\n";
print "    <meta charset=\"UTF-8\">\n";
print "    <title>Sprint1_Survey</title>\n";
print "    <script src=\"../scripts/jsFormValidator.js\"></script>\n";
print "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\" />\n";
print "</head>\n";
print "\n";
print "<body>\n";
print "    <ul>\n";
print "        <li><a href=\"../views/home.php\">Home</a></li>\n";
print "        <li><a href=\"../views/survey.php\">Survey</a></li>\n";
print "        <li><a href=\"../views/privacy.php\">Privacy</a></li>\n";
print "		<li><a href=\"../views/search.php\">Search</a></li>		\n";
print "    </ul>\n";
print "    <br>\n";
print "	\n";
print "	<form \n";
print "\n";
print "    <form name=\"myForm\" method=\"post\" action=\"testform.php\" onsubmit=\"return validateUserSearch()\">\n";
print "        <span>Search</span>\n";
print "        <input type=\"text\" id=\"SearchBar\" name=\"Search_Bar_Name\" placeholder=\"Title or Artist Name\">\n";
print "        <br>\n";
print "        <input type=\"submit\" value=\"Submit\" id=\"Btnsubmit\">\n";
print "\n";
print "    </form>\n";
print "\n";
print "</body>\n";
print "\n";
print "</html>";




print $page->getBottomSection();
