<?php
$localhost = "ppcmbm2018.accountsupportmysql.com";
				$username = "cnmtclassadmin";
				$password = "1040EZ-2018";
				$dbname = "cnmt201915";
				$con = new mysqli($localhost, $username, $password, $dbname);

				if( $con->connect_error){
				die('Error: ' . $con->connect_error);} 
?>