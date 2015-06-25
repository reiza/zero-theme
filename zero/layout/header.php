	
<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner navbar-inner-oc">
        <div class="container-fluid">
            <a class="brand brand-oc" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->fullname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
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
	<div class="container-fluid hidden-phone" id="logo-oc">
		<img id="zero-uwi-logo" title='University of the West Indies, Open Campus' src='<?php echo $CFG->wwwroot; ?>/theme/zero/pix/zero/logo-uwi-trans-<?php echo $PAGE->theme->settings->campus; ?>.png'.png' height="72"/>
	</div>


