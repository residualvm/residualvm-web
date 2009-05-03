<?php

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_page_header('Residual :: Contact');

html_content_begin('Contact');

?>
  <div class="par-item">
    <div class="par-intro">
	<p>
	<br>
		<b>Please do not contact the team for questions about using Residual. Instead use the
		<a href="http://residual.scummvm.org">forums</a></b><br><br>
	</p>
    </div>
	<br>

<?php html_subhead_start("IRC channel"); ?>

    <div class="par-subhead-content">
	<p>
		The #residual IRC channel on <a href="http://freenode.net/irc_servers.shtml">irc.freenode.net</a> is also a good
		place to ask questions.
	</p>
	<br>

    </div>	

    <?php html_subhead_start("Forums"); ?>

    <div class="par-subhead-content">
	<p>
	We offer <a href="http://residual.scummvm.org">forum</a>.
	</p>
	<p><b>Don't forget to read <a href="http://residual.scummvm.org/viewtopic.php?t=2">Forum Rules</a> before your first post.</b></p>
	<br>
	
    </div>	

<?php html_subhead_start("Bug reports, patches"); ?>

    <div class="par-subhead-content">
	<p>
	Don't report bugs. Residual is very alpha and we KNOW it doesn't work right.
	</p>
	<p>
	If you have made a modification to the Residual source code and want to see it merged back into the Residual main line,
	you can use our <a href="https://sourceforge.net/tracker/?group_id=259881&atid=1127293">patch tracker</a> for that. 
	</p>
	<br>
    
    </div>	

<?php html_subhead_start("Mailing lists"); ?>

    <div class="par-subhead-content">
	<p>
	There are three Residual related <a href="https://sourceforge.net/mail/?group_id=259881">mailing lists</a>.
	Two of them are for automated content only. The one where you can send emails to yourself is residual-devel.
	</p>
    </div>
  </div>

<?php

html_content_end();
html_page_footer();

?>
