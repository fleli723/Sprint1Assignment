<?php
/****************************************************************
* This class is used to contruct the Privacy HTML page used     *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
* @author Tim Bubla <tbubl928@uwsp.edu>                         *
* @FileName: privacy.php                                        *
*                                                               *
* Changelog:                                                    *
* 20190926 - Tim Bubla      - Code Adapted for UWSP Assignment  *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("../models/Template.php");
$page = new Template("Privacy page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='../css/header.css'>");
$page->finalizeTopHTML();
$page->finalizeBannerView();
$page->finalizeMenuView();
$page->finalizeFooterView();
$page->finalizeBottomHTML();
print $page->getTopHTML();
print $page->getBannerView();
print $page->getMenuView();
$servername = "mysql:host=ppcmbm2018.accountsupportmysql.com";
$username = "cnmtadmin";
$password = "1008L3-2019";
$dbname = "cnmt201910";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

/* if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close() */
print $page->getFooterView();
print $page->getBottomHTML();
?>