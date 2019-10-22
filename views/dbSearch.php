<?php
/****************************************************************
* This class is used to contruct the main Home HTML page used   *
* for the UWSP Fall 2019 Semester CMNT-310 class. Assignment 1  *
*                                                               *
* @author Tim Bubla <tbubl928@uwsp.edu>                         *
* @FileName: index.php                                          *
*                                                               *
* Changelog:                                                    *
* 20190926 - Tim Bubla      - Code Adapted for UWSP Assignment  *
*                                                               *
*                                                               *
*                                                               *
****************************************************************/
require_once("models/Template.php");
$page = new Template("Search page");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/home.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/topNavBar1.css'>");
$page->addHeadElement("<link rel='stylesheet' type='text/css' href='css/header.css'>");
$page->addHeadElement("<script src='scripts/search.js'></script>");
$page->finalizeTopHTML();
$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php"); ?>
<div id='main'>
			<div id='pageDescription'>
				<p><h2>Search the DB.</h2>
				<span class='required'>* </span>Indicates a required entry
					<form class='formStyle' name="frmSearch" id="frmSearch" method ='Get' action='.'>
					<input type='hidden' name='action' value='dbSearchResults'>
						<fieldset>
							<legend><b>Search String</b></legend>
								<div id = 'input-content'>
									<?php $search = (isset($search))?$search:""; ?>
									<label for='txtSearch'><span class="required">* </span>Search word or phrase:</label>
									<input type='text' name='search' id='txtSearch' tabindex='1' size='50' value='<?php echo $search; ?>' placeholder='Please enter search criteria'>
									<img src='images/error.gif' id='errSearch'
										width='14' height='14' alt='Error icon' 
										style="visibility: <?php echo (isset($errors['search']))?"visible;": "hidden;"; ?>"
										title=" <?php echo (isset($errors['search'])) ? $errors['search']:""; ?>" 
										>
									<br>
								</div>
								
								
					<br>
						</fieldset><br><br>
						<div class='buttons'>
							<button type='submit' class='buttonStyle' id='btnSubmit' name='btnSubmit'><img src='images/user-save.png' alt='Submit'>&nbsp;Submit</button>
							<button type='reset' class='buttonStyle' id='btnReset' name='btnReset'><img src='images/undo.gif' alt='Reset'>Reset</button>
							<button type='submit' class='buttonStyle' id='btnCancel' name='btnCancel'><img src='images/cancel.png' alt='Cancel' height='15' width='15'>Cancel</button>
						</div>	
					</form>
			</div>
</div><!-- end main -->
<?php
include_once("footer.php");		
print $page->getBottomHTML();
?>