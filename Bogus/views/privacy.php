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

$page->finalizeBottomHTML();
print $page->getTopHTML();
include_once("banner.php");
include_once("topNavBar1.php");?>
<div id='main'>
				<div id='pageDescription'>
					<p><h2>Privacy Policy</h2></p>
					<p>The University of Wisconsin System Administration (UWSA) recognizes the importance of protecting the privacy of information provided us.</p>
					
					<p><h2>Personal information</h2></p>
					<p>We will use personal information that you provide via e-mail or through other online means only for purposes necessary to serve your needs, 
					such as responding to an inquiry or other request for information. This may involve redirecting your inquiry or comment to another person or 
					department better suited to meeting your needs.<br>
					
					Some webpages at UWSA may collect personal information about visitors and use that information for purposes other than those stated above. 
					Each webpage that collects information will have a separate privacy statement that will tell you how that information is used.</p>
					
					<p><h2>Collected Information</h2></p>
					<p>UWSA monitors network traffic for the purposes of site management and security. We use this information to help diagnose problems and 
					carry out other administrative tasks. We also use statistic information to determine which information is of most interest to users, to 
					identify system problem areas, or to help determine technical requirements. The server log information does not include personal information.</p>
					
					<p><h2>External Websites</h2></p>
					<p>This site contains links to other sites outside of UWSA. UWSA is not responsible for the privacy practices or the content of such websites.</p>
					
					<p><h2>Questions</h2></p>
					<p>If you have any questions about this privacy statement, site practices, or your use of this website, 
					please contact <a href='mailto:Steve.Suehring@uwsp.edu?Subject=Privacy%20Policy' target='_top'>Steve Suehring</a></p>
				</div>
			</div><!-- end main -->
<?php
include_once("footer.php");
print $page->getBottomHTML();
?>