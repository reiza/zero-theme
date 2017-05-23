<?php
$campus = $PAGE->theme->settings->campus;
$campuses = array(
	'XCM' => array(
		'',
		'uwi.edu'
	),
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
			

			
				<div class="container" style="padding-top:20px;">
					<div class="row-fluid footerblocks">                
						<div class="footer-col span3">
							<div class="footer-col-inner">
								<div class="row" style="text-align:right;">
									<p class="adr clearfix span12">
										The University of the West Indies<br>
										<?php echo $displayCampus[0]; ?><br>
										Tel: (246) 417-4497<br>
										Fax: (246) 421-6753
									</p>
								</div> 
							</div><!--//footer-col-inner-->
						</div><!--//foooter-col-->
						<div class="footer-col span3">
							<div class="footer-col-inner">
								<ul>
									<li><a href="http://my.uwi.edu/" target="_blank"><i class="fa fa-caret-right"></i>UWI Portal</a></li>
									<li><a href="http://my.mail.open.uwi.edu/" target="_blank"><i class="fa fa-caret-right"></i>My Email</a></li>
									<li><a href="http://eportfolio.tle.courses.open.uwi.edu/auth/oc/index.php" target="_blank"><i class="fa fa-caret-right"></i>e-Portfolio</a></li>
								</ul>   
							</div><!--//footer-col-inner-->
						</div><!--//foooter-col--> 
						<div class="footer-col span3">
							<div class="footer-col-inner">
								<ul>
									<li><a href="mailto:academic-support@open.uwi.edu" target="_blank"><i class="fa fa-caret-right"></i>Academic Support</a></li>
									<li><a href="http://help.open.uwi.edu/" target="_blank"><i class="fa fa-caret-right"></i>Help Desk</a></li>
									<!-- li><a href="http://requirements.open.uwi.edu" target="_blank"><i class="fa fa-caret-right"></i>Browser Check</a></li -->
								</ul>   

							</div><!--//footer-col-inner-->            
						</div><!--//foooter-col-->  
						<div class="footer-col span3">
							<div class="footer-col-inner">
								          
   
							</div><!--//footer-col-inner-->
						</div><!--//foooter-col--> 

					</div>     
				</div>    
			<?php endif; ?>
			<small class="social copyright muted">
			<?php

				$r = get_performance_info();
				$h = substr(gethostname(), 0, 11);
				$l = $h . ' '. $_SERVER['HTTP_HOST'] .' '. time() . ' ' . $r['txt']."\n";
				$f = '/data/tlog/' . $h . '.' . $_SERVER['HTTP_HOST'] . '.log';
				echo $h . ' | ';
				echo number_format($r['memory_total']/1024/1024, 1). 'M/';
				echo number_format($r['memory_peak']/1024/1024, 1). 'M | ';
				echo $r['sessionsize']. ' | ';
				echo $r['dbqueries']. ' | ';
				echo number_format($r['dbtime'], 3). 's/';
				echo number_format($r['realtime'], 3). 's | ';
				echo $r['serverload']. '';
	      
				//error_log($l, 3, $f);

			?>
	      	</small>

		</div>
		<div class="bottom-bar">
			<div class="container">
				<div class="row-fluid ">
					

					<div class="social copyright span6 pull-left">
						
						&copy;<?php echo date('Y'); ?><a href="http://<?php echo $displayCampus[1]; ?>">UWI <?php echo $displayCampus[0]; ?></a>. 
						All Rights Reserved.
						 
					</div>
					
					<div class="social copyright span6 pull-right">
						  
						<map name="Map">

							<area shape="rect" coords="0,8,26,24" href="http://www.uwi.edu/anguilla.asp" target="_blank" alt="Anguilla">
							<area shape="rect" coords="32,8,58,24" href="http://www.uwi.edu/antigua.asp" target="_blank" alt="Antigua and Barbuda">
							<area shape="rect" coords="64,8,90,24" href="http://www.uwi.edu/bahamas.asp" target="_blank" alt="The Bahamas">
							<area shape="rect" coords="96,8,122,24" href="http://www.uwi.edu/barbados.asp" target="_blank" alt="Barbados">
							<area shape="rect" coords="128,8,154,24" href="http://www.uwi.edu/belize.asp" target="_blank" alt="Belize">
							<area shape="rect" coords="160,8,186,24" href="http://www.uwi.edu/bermuda.asp" target="_blank" alt="Bermuda">
							<area shape="rect" coords="192,8,218,24" href="http://www.uwi.edu/bvi.asp" target="_blank" alt="British Virgin Islands">
							<area shape="rect" coords="224,8,250,24" href="http://www.uwi.edu/cayman.asp" target="_blank" alt="Cayman Islands">
							<area shape="rect" coords="256,8,282,24" href="http://www.uwi.edu/dominica.asp" target="_blank" alt="Dominica">
							<area shape="rect" coords="288,8,314,24" href="http://www.uwi.edu/grenada.asp" target="_blank" alt="Grenada">
							<area shape="rect" coords="320,8,346,24" href="http://www.uwi.edu/jamaica.asp" target="_blank" alt="Jamaica">
							<area shape="rect" coords="352,8,378,24" href="http://www.uwi.edu/montserrat.asp" target="_blank" alt="Montserrat">
							<area shape="rect" coords="384,8,410,24" href="http://www.uwi.edu/stkitts.asp" target="_blank" alt="St Kitts and Nevis">
							<area shape="rect" coords="416,8,442,24" href="http://www.uwi.edu/stlucia.asp" target="_blank" alt="St Lucia">
							<area shape="rect" coords="448,8,474,24" href="http://www.uwi.edu/stvincent.asp" target="_blank" alt="St Vincent and the Grenadines">
							<area shape="rect" coords="480,8,506,24" href="http://www.uwi.edu/tt.asp" target="_blank" alt="Trinidad and Tobago">
							<area shape="rect" coords="512,8,538,24" href="http://www.uwi.edu/turks.asp" target="_blank" alt="Turks and Caicos">

						</map>
						
						<img class="pull-right hidden-phone " src="<?php echo $CFG->wwwroot; ?>/theme/zero/pix/zero/flags.png" alt="National Flags of the UWI Contributing Countries" usemap="#Map"/>							
						<img class="visible-phone " src="<?php echo $CFG->wwwroot; ?>/theme/zero/pix/zero/flags.png" alt="National Flags of the UWI Contributing Countries" usemap="#Map" style="width:100%;"/>							
					
					</div><!--//social-->
				</div><!--//row-->
			</div><!--//container-->
		</div>
	

	</footer>
