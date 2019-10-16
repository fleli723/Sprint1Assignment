<?php

require_once("Template.php");

$page = new Template("Search Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->addHeadElement("<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();


//print "<!DOCTYPE html>\n";
//print "<html>\n";
//print "\n";
//print "<head>\n";
//print "    <meta charset=\"UTF-8\">\n";
//print "    <title>Sprint1_Survey</title>\n";
//print "    <script src=\"../scripts/jsFormValidator.js\"></script>\n";
//print "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/style.css\" />\n";
//print "</head>\n";
//print "\n";
//print "<body>\n";

//print "<ul>\n";
//print "        <li><a href=\"../views/home.php\">Home</a></li>\n";
//print "        <li><a href=\"../views/survey.php\">Survey</a></li>\n";
//print "        <li><a href=\"../views/privacy.php\">Privacy</a></li>\n";
//print "		<li><a href=\"../views/search.php\">Search</a></li>		\n";
//print "    </ul>\n";
//print "    <br>\n";
//print "	\n";
print "<div class=\"topbar\">
			<h1> CNMT 310 Assignment 1 </h1>
			<ul class=\"nav\">
				<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/index.php\">Home</a></li>
				<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/survey.php\">Survey</a></li>
				<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/privacy.php\">Privacy Policy</a></li>
				<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/search.php\">Search</a></li>
			</ul>
		</div>";

print "<form \n";
print "\n";
print "    <form name=\"myForm\" method=\"post\" action=\"testform.php\" onsubmit=\"return validateForm()\">\n";
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
