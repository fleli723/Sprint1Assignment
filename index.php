<?php

require_once("Template.php");

$page = new Template("Home Page");
$page->addHeadElement("<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print "<div class=\"topbar\">
				<h1> CNMT 310 Assignment 1 </h1>
				<ul class=\"nav\">
					<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/index.php\">Home</a></li>
					<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/survey.php\">Survey</a></li>
					<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/privacy.php\">Privacy Policy</a></li>
					<li><a href=\"http://cnmtsrv2.uwsp.edu/~fleli723/Sprint1Assignment/search.php\">Search</a></li>
				</ul>
			</div>";
			
print		"<div class=\"content\">
			
			<h2> Lorem Ipsum </h2>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eget
			urna non feugiat. Donec vel sem at nisl aliquam lacinia. Duis id iaculis lectus.
			Nam volutpat mauris lacus, vel blandit odio eleifend rhoncus. Phasellus ultrices
			elementum mauris. Etiam mattis urna eget leo cursus gravida. Nunc sed posuere lectus.
			Ut quis placerat nisi. Donec consequat, nulla vel rutrum ultrices, odio quam vehicula mi,
			quis bibendum ligula eros id nisl. </p>
			
			</div>";

print $page->getBottomSection();

?>