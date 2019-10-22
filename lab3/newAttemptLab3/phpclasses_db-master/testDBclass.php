<?php

require_once("DB.class.php");
require_once("template/template.php");

$page = new Template("My Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();

$db = new DB();



if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}






$query = "SELECT * FROM bookinfo";

$result = $db->dbCall($query);
if (!$result) {
  //use friendly error messaging, not this:
  print "Error: " . var_dump($db->getDBError());
} else 
{
  
  print $page->getTopSection();
   
  
  
 
  //This foreach loop will work. However I just need to tweek it a bit to make it output the data 
 
  print '<h1>Data from Bookinfo table </h1>';
   print "<table style = 'border: 2px solid black'>";
  
  print "<tr style = 'border: 2px solid black' >
			<th style= 'width: 175px'> Author </th>
			<th style= 'width: 175px'> Book Title </th>
			<th style = 'width: 175px'> ISBN </th>
		</tr>";
  foreach($result as $curRow)
  { 
	  
		  print "<tr> 
				<td>" . $curRow['author'] . "</td>
				<td>" . $curRow['booktitle']. "</td>
				<td>" . $curRow['isbn']. "</td>
				</tr>"; 
	   
	  
 }
  print "</table>";
  

print $page->getBottomSection();
}




