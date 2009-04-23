<?php

/*
 * Links to Demo downloads
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_page_header('Residual :: Game Demos');

html_content_begin('Game Demos');

?>
<div class="par-item">
  <div class="par-intro">
  <br>
       <table border=0>
	  <tr><td width="8%">

    <div class="navigation">

    </div>
</td>
<td>
  This page lists links to demos of various games, please contact us if you have a copy of any demo not listed here.<br><br>
</td></tr>
</table>

  <br>

</div>

  <br>
  <br>

  <div class="par-content">

<?php

$LEC_demos = array(
	'Grim Fandango'
		=> array('http://xfer.lfnetwork.com/lucasfiles.com/downloads/51/GFFullDemo.exe', 'grimdemo'),
	'Escape From Monkey Island'
		=> array('ftp://ftp.lucasarts.com/demos/pc/EMI/MonkeyComplete.exe', 'monkeydemo')
	);

function render_demos($title, $demos) {
// render the demo list
echo html_frame_start($title,"90%",2,1,"color4");
echo html_frame_tr(
		   html_frame_td("Demo Name / Download Link").
		   html_frame_td("Game Target"),
		   "color4"

		  );
	$c = 0;
	while (list($name,$array) = each($demos))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
			html_frame_td("<a href=\"$array[0]\">$name</a>").
		    	html_frame_td($array[1]),
	  	        $color
	 	);
		$c++;
	}

echo html_frame_end("&nbsp;");
echo "<p>&nbsp;</p>";
}

echo "<a name='lec'></a>\n";
render_demos("LucasArts Demos", $LEC_demos);

echo "  </div>\n";
echo "</div>\n";

html_content_end();
html_page_footer();

?>
