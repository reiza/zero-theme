<?php
$campus = $PAGE->theme->settings->campus;
$campuses = array(
	'OC' => array(
		'Open Campus',
		'open.uwi.edu'
	),
	'STA' => array(
		'St. Augustine',
		'sta.uwi.edu'
	),
	'MON' => array(
		'Mona',
		'mona.uwi.edu'
	),
	'CAV' => array(
		'Cave Hill',
		'cavehill.uwi.edu'
	));
	
	$displayCampus = $campuses[$campus];

?>
	<footer id="page-footer" class="footer">
		<div class="footer-content"> 
			<div class="container">
				<div class="row-fluid">
			        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
			        <?php
			        echo $html->footnote;
			        echo $OUTPUT->standard_footer_html();
			        ?>
				</div>
			</div>
			<?php if ($campus == 'OC') : ?>
				<div class="container">
					<div class="row-fluid footerblocks">                
						<div class="footer-col span3">
							<div class="footer-col-inner">
								<h2><?php echo
									format_string($SITE->fullname, true, array('context' => context_course::instance(SITEID)));
									?>
								</h2>
								<ul>
									<li><a href="<?php echo $CFG->wwwroot;?>"><i class="fa fa-caret-right"></i>Home</a></li>
									<li><a href="<?php echo $CFG->wwwroot;?>/user/profile.php"><i class="fa fa-caret-right"></i>Profile</a></li>
									<li><a href="<?php echo $CFG->wwwroot;?>/message/index.php"><i class="fa fa-caret-right"></i>Messages</a></li>
								</ul>                    
							</div><!--//footer-col-inner-->
						</div><!--//foooter-col-->
						<div class="footer-col span3">
							<div class="footer-col-inner">
								<h2>Tools</h2>
								<ul>
									<li><a href="http://my.open.uwi.edu/" target="_blank"><i class="fa fa-caret-right"></i>MyOC</a></li>
									<li><a href="http://my.mail.open.uwi.edu/" target="_blank"><i class="fa fa-caret-right"></i>My Email</a></li>
									<li><a href="http://eportfolio.open.uwi.edu/" target="_blank"><i class="fa fa-caret-right"></i>e-Portfolio</a></li>
								</ul>      
							</div><!--//footer-col-inner-->
						</div><!--//foooter-col--> 
						<div class="footer-col span3">
							<div class="footer-col-inner">
								<h2>Help</h2>
								<ul>
									<li><a href="mailto:academic-support@open.uwi.edu" target="_blank"><i class="fa fa-caret-right"></i>Academic Support</a></li>
									<li><a href="http://help.open.uwi.edu/" target="_blank"><i class="fa fa-caret-right"></i>Help Desk</a></li>
									<li><a href="http://requirements.open.uwi.edu" target="_blank"><i class="fa fa-caret-right"></i>Browser Check</a></li>
								</ul>   
							</div><!--//footer-col-inner-->
						</div><!--//foooter-col--> 
						<div class="footer-col span3">
							<div class="footer-col-inner">
								<h2>&nbsp;</h2>
								<div class="row">
									<p class="adr clearfix span12" style="text-align:left;">
										The University of the West Indies<br>
										Open Campus<br>
										Barbados, West Indies<br>
										Tel: (246) 417-4497<br>
										Fax: (246) 421-6753
									</p>
								</div>
							</div><!--//footer-col-inner-->            
						</div><!--//foooter-col-->  
					</div>     
				</div>    
			<?php endif; ?>
	      
		</div>
		<div class="bottom-bar">
			<div class="container">
				<div class="row-fluid ">
					

					<div class="social copyright span6 pull-left">
						&copy; <a href="http://<?php echo $displayCampus[1]; ?>">2014 UWI <?php echo $displayCampus[0]; ?></a>. All Rights Reserved.
					</div>
					
					<div class="social copyright span6 pull-right">
						  
						<map name="Map">
							<area shape="rect" coords="1,2,23,18" href="http://www.uwi.edu/territories/anguilla.htm" alt="Anguilla">
							<area shape="rect" coords="28,2,50,18" href="http://www.uwi.edu/territories/antigua.htm" alt="Antigua">
							<area shape="rect" coords="54,1,77,19" href="http://www.uwi.edu/territories/bahamas.htm" alt="Bahamas">
							<area shape="rect" coords="81,-1,104,19" href="http://www.uwi.edu/territories/barbados.htm" alt="Barbados">
							<area shape="rect" coords="108,1,132,19" href="http://www.uwi.edu/territories/belize.htm" alt="Belize">
							<area shape="rect" coords="136,-1,158,18" href="http://www.uwi.edu/territories/bvi.htm" alt="The British Virgin Islands">
							<area shape="rect" coords="162,-1,185,19" href="http://www.uwi.edu/territories/cayman.htm" alt="The Cayman Islands">
							<area shape="rect" coords="190,1,212,19" href="http://www.uwi.edu/territories/dominica.htm" alt="Dominica">
							<area shape="rect" coords="216,1,239,19" href="http://www.uwi.edu/territories/grenada.htm" alt="Grenada">
							<area shape="rect" coords="243,1,267,19" href="http://www.uwi.edu/territories/jamaica.htm" alt="Jamaica">
							<area shape="rect" coords="271,1,292,19" href="http://www.uwi.edu/territories/montserrat.htm" alt="Montserrat">
							<area shape="rect" coords="297,2,320,20" href="http://www.uwi.edu/territories/st_kitts.htm" alt="St. Kitts">
							<area shape="rect" coords="324,1,347,19" href="http://www.uwi.edu/territories/st_lucia.htm" alt="St. Lucia">
							<area shape="rect" coords="351,-1,374,17" href="http://www.uwi.edu/territories/st_vincent.htm" alt="St. Vincent">
							<area shape="rect" coords="378,1,400,19" href="http://www.uwi.edu/territories/trinidad.htm" alt="The Republic Of Trinidad &amp; Tobago">
							<area shape="rect" coords="404,3,430,19" href="http://www.uwi.edu/territories/turks_and_caicos.htm" alt="Turks &amp; Caicos Islands">
						</map>
						<img class="hidden-phone pull-right" src="<?php echo $CFG->wwwroot; ?>/theme/zero/pix/zero/flags.png" alt="National Flags of the UWI Contributing Countries" usemap="#Map" />							
					</div><!--//social-->
				</div><!--//row-->
			</div><!--//container-->
		</div>
	

	</footer>
