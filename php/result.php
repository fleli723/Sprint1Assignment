<?php

require_once("../classes/Template.php");
require_once("const.php");

$page = new Template("Action Page");
$page->addHeadElement('<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

print 	'<div class="topbar">
			<h1> CNMT 310 Sprint 1 Assignment</h1>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>		
				<li><a href="survey.php">Survey</a></li>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="search.php">Search</a></li>
			</ul>
		</div>';
		
				//change this information to const.php
				$localhost = "ppcmbm2018.accountsupportmysql.com";
				$username = "cnmtclassadmin";
				$password = "1040EZ-2018";
				$dbname = "cnmt201915";
				$con = new mysqli($localhost, $username, $password, $dbname);
				//change this information to const.php

				if( $con->connect_error){
				die('Error: ' . $con->connect_error);} 
				$sql = "SELECT * FROM albums";
				if( isset($_GET['search']) ){
					$results = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
					$sql = "SELECT * FROM albums 
					WHERE albumArtist LIKE '%$results%' or AlbumTitle LIKE '%$results%'";
				}//end if
				$result = $con->query($sql);
				echo "<table id='t01' >";
				echo "<caption><h2>Search Results:</h2></caption>";
				echo '<thead>';
				echo '<tr>
					<th width="75px">ID#</th>
					<th width="200px">Album Artist</th>
					<th width="300px">Album Title</th>
					</tr></thead><tbody>';
				echo "<tbody>";
				while($row = $result->fetch_assoc()){
					?>
					<tr>
					<td width="75px"><?php echo $row['albumId']; ?></td>
					<td width="200px"><?php echo $row['albumArtist']; ?></td>
					<td width="300px"><?php echo $row['albumTitle']; ?></td>
					</tr>
				<?php
				}
				echo "</tbody>";
				echo "</table><br>";
				if (mysqli_num_rows($result)==0) { 
					echo "No results match your query";
				}//end if
				
		
print $page->getBottomSection();

?>