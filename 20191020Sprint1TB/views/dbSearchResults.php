<?php
/****************************************************************
* This class is used to contruct the Results HTML page used     *
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
extract($_POST);?>
<div id='main'>
			<div id='pageDescription'>
			<form class='formStyle' name="frmSearchResults" id="searchResults" method ='Post' action='.'>
				<input type='hidden' name='action' value='dbSearch'>
				<?php
				$localhost = "ppcmbm2018.accountsupportmysql.com";
				$username = "cnmtclassadmin";
				$password = "1040EZ-2018";
				$dbname = "cnmt201915";
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
				?>
				<br><br><div class='buttons'>
					<button type='submit' class='buttonStyle' id='btnSubmit' name='btnSubmit'><img src='../images/user-save.png' alt='Search Again'>&nbsp;Search Again</button>
				</div>	
			</form>
				</div>
			</div><!-- end main --> 
<?php
include_once("footer.php");	
print $page->getBottomHTML();
?>