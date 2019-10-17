<?php

require_once("Template.php");

$page = new Template("Search Page");
$page->addHeadElement('<script src="hello.js"></script>');
$page->addHeadElement('<link rel="stylesheet" type="text/css" href="stylesheet.css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print	'
<div class="topbar">
	<h1> CNMT 310 Sprint 1 Assignment</h1>
	<ul class="nav">
		<li><a href="index.php">Home</a></li>		
		<li><a href="survey.php">Survey</a></li>
		<li><a href="privacy.php">Privacy Policy</a></li>
		<li><a href="search.php">Search</a></li>
	</ul>
</div>
';

print	'
<div class="content">
	<form name="myForm" onsubmit="return validateForm();" action="testform.php" method="post">
		
		<span>Search: </span>
		<input type="text" id="SearchBar" name="Search_Bar_Name" placeholder="Title or Artist Name">
		<br>
		<input type="submit" value="Submit" id="Btnsubmit">
		
	</form>
</div>	
';

print $page->getBottomSection();

?>