<?php
/****************************************************************
* This class is used to contruct the Results HTML page used     *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("classes/Template.php");
$page = new Template("Search Results page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/header.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/searchResultTables.css'>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");
extract($_POST);
print " <div id='main'>
			<div id='pageDescription'>
			<form class='formStyle' name='frmSearchResults' id='searchResults' method ='Post' action='.'>
				<input type='hidden' name='action' value='dbSearch'>";
				
				$localhost = 'cnmtsrv1.uwsp.edu';
				$username = 'bubla_t_admin';
				$password = 'xew56baz';
				$dbname = 'bubla_t';
				
				//Connection
				$con = new mysqli($localhost, $username, $password, $dbname);

				if( $con->connect_error){
				die('Error: ' . $con->connect_error);} 
				$sql = "SELECT * FROM albums";
				if( isset($_GET['search']) ){
					$results = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
					$sql = "SELECT * FROM albums 
					WHERE albumArtist LIKE '%$results%' or AlbumTitle LIKE '%$results%'";
				}//end if
				$result = $con->query($sql);
				print "<table id='t01'>
				 <caption><h2>Search Results:</h2></caption>
				 <thead>
				 <tr>
					<th class ='Col1'>ID#</th>
					<th class ='Col2'>Album Artist</th>
					<th class ='Col3'>Album Title</th>
					<th class ='Col1'>Album Duration</th>
					</tr></thead><tbody>
				 <tbody>";
				  while($row = $result->fetch_assoc()){
					
					print "<tr>
					<th class ='Col1'>"; print $row['albumId']; print"</th>
					<th class ='Col2'>"; print $row['albumArtist']; print"</th>
					<th class ='Col3'>";print $row['albumTitle']; print"</th>
					<th class ='Col1'>";print $row['duration']; print"</th>
					</tr>";
				
				}
				echo "</tbody>";
				echo "</table><br>";
				if (mysqli_num_rows($result)==0) { 
					echo "No results match your query";
				}//end if
			
				print "<br><br><div class='buttons'>
					<button type='submit' class='buttonStyle' id='btnSubmit' name='btnSubmit'><img src='../images/user-save.png' >Search Again</button>
				</div>	
			</form>
				</div>
			</div><!-- end main -->";

include_once("footer.php");	
print $page->getBottomHTML();
