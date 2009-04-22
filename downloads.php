<?php

/*
 * Downloads Page for Residual
 * by Jeremy Newman <jnewman@dracowulf.com>
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_page_header('Residual :: Downloads', array("downloads.css"));

html_content_begin('Download Residual');

/*
 * Some extra tools
 */
function startDownloadList() {
	echo " <ul class='download-list'>";
}

function endDownloadList() {
	echo "</ul>";
}

function addDownloadSeparator() {
	echo "<li>&nbsp;</li>";
}

function addDownload($image, $linkText, $desc, $url) {
	echo "<li>";
	echo "<img src='images/$image.png' alt='' width=24 height=24 style='vertical-align: middle;' >";
	echo " <a href='$url'>$linkText</a>";
	echo " <span class='download-extras'>$desc</span></li>";
}

?>

  <div class="par-item">
    <div class="par-head">
    Downloads for Residual 
    </div>

    <div class="par-intro">
	<br>

       <table border=0>
	  <tr><td width="35%">

    <div class="navigation">
       Navigation

       <div class="nav-dots">
	  &nbsp;
       </div>

<table border=0>
<?php
  html_nav_item("#SVN", "Subversion Builds");
  html_nav_item("#libs", "Libraries");
?>

</table>
    </div>

</td>
<td>
	For UNSTABLE experimental versions of Residual,
	please see the <a href="#SVN">Subversion Builds</a> section.
</td></tr>
</table>

	<br>
    </div>

	<a name="SVN"></a>
  <div class="par-item">
    <div class="par-head">
       Subversion Builds
    </div>

    <div class="par-content">
    <p>
      <b>WARNING:</b> The following builds are bleeding edge development
      versions made directly from our Subversion (= SVN) source repository.
      That means that they received no proper testing (usually no testing at
      all) and that any number of things may be broken in the them. For
      example, they might corrupt your config file, crash frequently or or
      might not even start. Use them at your own risk!
    </p>
	<p>
	  Snapshot builds:
	</p>

<?php
	startDownloadList();
	
		$size = intval(filesize("downloads/residualwin32.exe")/1024);
		$date = date("F j, Y, g:i a",filemtime("downloads/residualwin32.exe"));
		addDownload("catpl-windows", "Win32 residual Daily Snapshot", "(" . $size ."K exe file, last update: $date)", "http://residual.sourceforge.net/downloads/residualwin32.exe");

		$size = intval(filesize("downloads/residual_debian_i386.deb")/1024);
		$date = date("F j, Y, g:i a",filemtime("downloads/residual_debian_i386.deb"));
		addDownload("catpl-debian", "Debian i386 residual Daily Snapshot", "(" . $size ."K deb file, last update: $date)", "http://residual.sourceforge.net/downloads/residual_debian_i386.deb");

		$size = intval(filesize("downloads/residual_debian_amd64.deb")/1024);
		$date = date("F j, Y, g:i a",filemtime("downloads/residual_debian_amd64.deb"));
		addDownload("catpl-debian", "Debian x86_64 residual Daily Snapshot", "(" . $size ."K deb file, last update: $date)", "http://residual.sourceforge.net/downloads/residual_debian_amd64.deb");

		$size = intval(filesize("downloads/residual_ubuntu_i386.deb")/1024);
		$date = date("F j, Y, g:i a",filemtime("downloads/residual_ubuntu_i386.deb"));
		addDownload("catpl-ubuntu", "Ubuntu i386 residual Daily Snapshot", "(" . $size ."K deb file, last update: $date)", "http://residual.sourceforge.net/downloads/residual_ubuntu_i386.deb");

		$size = intval(filesize("downloads/residual_ubuntu_amd64.deb")/1024);
		$date = date("F j, Y, g:i a",filemtime("downloads/residual_ubuntu_amd64.deb"));
		addDownload("catpl-ubuntu", "Ubuntu x86_64 residual Daily Snapshot", "(" . $size ."K deb file, last update: $date)", "http://residual.sourceforge.net/downloads/residual_ubuntu_amd64.deb");

		$size = intval(filesize("downloads/Residual-MacOSX-Intel.dmg")/1024);
		$date = date("F j, Y, g:i a",filemtime("downloads/Residual-MacOSX-Intel.dmg"));
		addDownload("catpl-macos", "Mac OS X Intel Daily Snapshot", "(" . $size ."K deb file, last update: $date)", "http://residual.sourceforge.net/downloads/Residual-MacOSX-Intel.dmg");

		addDownload("catpl-cpp", "Subversion Instructions", "(for if you wish to retrieve the latest code to compile yourself)", "http://sourceforge.net/scm/?type=svn&group_id=259881");

	endDownloadList();
?>

     </div>
  </div>


  <a name="libs"></a>
  <div class="par-item">
    <div class="par-head">
       Libraries
    </div>

    <br>

    <?php html_subhead_start("Required Libraries"); ?>

    <div class="par-subhead-content">
	<ul>
	  <li><a href="http://www.libsdl.org/download-1.2.php">SDL 1.2.x</a></li>
	</ul>

    </div>

    <?php html_subhead_start("Optional Libraries (Currently not used)"); ?>

    <div class="par-subhead-content">
	<ul>
	  <li><a href="http://www.underbit.com/products/mad/">MAD</a>: MPEG Audio Decoder</li>
	  <li><a href="http://www.xiph.org/vorbis/">Ogg Vorbis</a></li>
	  <li><a href="http://flac.sourceforge.net/">FLAC</a></li>
	</ul>
    </div>
  </div>
<?php

html_content_end();
html_page_footer();

?>
