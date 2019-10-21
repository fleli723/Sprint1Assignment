<?php
/****************************************************************
* This class is used to contruct the SurveyResults page used    *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
* @author Tim Bubla <tbubl928@uwsp.edu>                         *
* @FileName: results.php                                        *
*                                                               *
* Changelog:                                                    *
* 20190926 - Tim Bubla      - Code Adapted for UWSP Assignment  *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("models/Template.php");
$page = new Template("Survey Results page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/header.css'>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");
extract($_POST);
print "<div id='main'>
			<div id='pageDescription'>
				<p><h2>Survey Results Page</h2>
				<h3>Your email address is: "; print $email;print"</h3>";
				if (count($major) == 1) {
					print "<h3>Your major is: ";
				}else{
					print "<h3>Your majors are: ";
				}//end if
				$last = count($major) - 1;
				foreach($major as $index => $value) {
					if($index == $last) {
						echo $value . '.';
					}else{
						echo $value . ', ';
					}//end if
				}//end foreach
				print"</h3>
				<h3>You expect to earn a "; print $grade;print" in your CNMT-310 Class.</h3>
				<h3>"; print $pizzaTopping;print" is your favorite Pizza Topping.</h3><br><hr>";
				
				
				$localhost = "ppcmbm2018.accountsupportmysql.com";
				$username = "cnmtclassadmin";
				$password = "1040EZ-2018";
				$dbname = "cnmt201915";
				
				//Connection
				$mysqli = new mysqli($localhost, $username, $password, $dbname);
				
				// Check connection
				if($mysqli === false){
					die("ERROR: Could not connect. " . $mysqli->connect_error);
				}//endif
				 
				//Consistency check for the major checboxes
				$major1 = (isset($major[0])) ? true : false;				
				$major2 = (isset($major[1])) ? true : false;
				$major3 = (isset($major[2])) ? true : false;
				$major4 = (isset($major[3])) ? true : false;
				$major5 = (isset($major[4])) ? true : false;
				$major6 = (isset($major[5])) ? true : false;
				
				//Get the IP address of the Client
				if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
					$clientIP = $_SERVER['HTTP_CLIENT_IP'];
				} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
					$clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
				} else {
					$clientIP = $_SERVER['REMOTE_ADDR'];
				}//endif
				
				$sql = "INSERT into surveys (email, major1, major2, major3, major4, major5, major6, grade, pizzaTopping, insertTime, clientIP) VALUES
					(?,?,?,?,?,?,?,?,?,?,?)";
					
				if($stmt = $mysqli->prepare($sql)){
					// Bind variables to the prepared statement as parameters
					$stmt->bind_param("sssssssssss", $email, $major1, $major2, $major3, $major4, $major5, $major6, $grade, $pizzaTopping, $insertTime, $clientIP);
					
					// Attempt to execute the prepared statement
					if($stmt->execute()){
						echo "Records inserted successfully.";
					} else{
						echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
					}//endif
				} else{
					echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
				}//endif
				 
				// Close statement
				$stmt->close();
				 
				// Close connection
				$mysqli->close();
				
			print "</div>
		</div><!-- end main -->\n";
include_once("footer.php");	
print $page->getBottomHTML();
?>