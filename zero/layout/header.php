	
<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner navbar-inner-oc">
        <div class="container-fluid">
            <a class="brand brand-oc hidden-phone" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->fullname, true, array('context' => context_course::instance(SITEID)));
                ?>
            </a>
			<a class="brand visible-phone" href="<?php echo $CFG->wwwroot;?>" style="padding-left:12px;"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
	<div class="container-fluid" id="logo-oc">
		<img class="hidden-phone" id="zero-uwi-logo" title='University of the West Indies, Open Campus' src='<?php echo $CFG->wwwroot; ?>/theme/zero/pix/zero/logo-uwi-trans-<?php echo $PAGE->theme->settings->campus; ?>.png'.png' height="72"/>
		<img class="visible-phone" id="zero-uwi-logo" title='University of the West Indies, Open Campus' src='<?php echo $CFG->wwwroot; ?>/theme/zero/pix/zero/logo-uwi-trans-<?php echo $PAGE->theme->settings->campus; ?>.png'.png' style="width:90%;padding:5px 12px;"/>

	</div>