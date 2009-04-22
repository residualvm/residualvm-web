<?php

/*
 * Links Page
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_page_header('Residual :: Links', array("links.css"));
html_content_begin('Links');


/* Insert a link table entry */
function addLinkEntry($name, $url, $desc) {
	echo '<div class="linkentry">';
	echo '<div class="linkhead">';
	echo '<a href="' . $url . '">' . $name . '</a>';
	echo '</div>';
	echo '<div class="linkbody">';
	echo $desc;
	echo '</div>';
	echo '</div>';
}

?>
  <div class="par-item">
    <div class="par-head">
       Links
    </div>

    <div class="par-intro">
    <br>
	  <img src="images/residual-link.png" width="88" height="31" alt="Residual" style="vertical-align: middle; text-align: left; margin: 5px;">
	  <b>Link to us: </b>
	  If you want to link your site to us: please feel free to use this image.
    <br>
    <br>
    </div>

    <br>

    <div class="par-content">

    <?php html_subhead_start("Libraries &amp; Technologies"); ?>
    <div class="par-subhead-content">
	<p>The following lists some libraries and technologies Residual makes use of
	(depending on which system your run it and which configuration is chosen).</p>

	<div class="linklist">
		<?php
			addLinkEntry('SDL', 'http://www.libsdl.org/',
				'SDL (Simple DirectMedia Layer) is a cross-platform multimedia
				library, and used by the primary backend of Residual.');
			addLinkEntry('MAD', 'http://www.underbit.com/products/mad/',
				'MAD is a high-quality MPEG (MP3) audio decoder.');
			addLinkEntry('Ogg Vorbis', 'http://www.xiph.org/ogg/vorbis/',
				'Ogg Vorbis is a fully open, non-proprietary,
				patent-and-royalty-free, general-purpose compressed audio
				format.');
			addLinkEntry('FLAC', 'http://flac.sourceforge.net/',
				'FLAC stands for Free Lossless Audio Codec. Grossly
				oversimplified, FLAC is similar to MP3, but lossless, meaning
				that audio is compressed in FLAC without any loss in quality.');
			addLinkEntry('libmpeg2', 'http://libmpeg2.sourceforge.net/',
				'libmpeg2 is a free library for decoding mpeg-2 and mpeg-1
				video streams.');
		?>
	</div>
    </div>
  </div>
<?php>

html_content_end();
html_page_footer();

?>
