<?php

/*
 * Documentation Page for Residual
 * by Jeremy Newman <jnewman@dracowulf.com>
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_page_header('Residual :: Documentation');

html_content_begin('Residual Documentation');

echo '<div class="par-item">';

$view = $_GET['view'];

if ($view and file_exists($file_root."/docs/".$view.".xml")) {
  echo  '  <div class="par-head">';
  echo display_xml($file_root."/docs/".$view.".xml",'NAME');
  echo  '  </div>';
  echo '  <div class="par-content">';
  // extract the body from the XML file
  $html = display_xml($file_root."/docs/".$view.".xml",'BODY');
  // Now evaluate any PHP code embedded into it, and output the result
  echo eval("?>" . $html . "<?php ");
  echo "<br>";
  echo "  </div>\n";
} else {
?>
  <div class="par-intro">
    <br>
    Click the title of the section of the documentation you want to read.
    <br>
    <br>
  </div>

  <div class="par-content">
  <br>

  <br>
  <br>

  <a href='http://residual.svn.sourceforge.net/viewvc/residual/residual/trunk/README?view=markup'>Residual README</a><br>

  <br>

<?php


  // get list of documentation items
  $docs = get_files($file_root."/docs","xml");
  sort($docs);
    
  // loop and display docs
  $c = 0;
  while (list($key,$item) = each($docs)) {
    $c++;
    list($file,$ext) = split("\.",$item,2);

    echo "<a href='?view=$file'>".display_xml($file_root."/docs/".$item,'NAME')."</a><br>\n";
    echo display_xml($file_root."/docs/".$item,'DESC')."<br><br>\n";
  } // end of docs loop

?>
  <a href='http://apps.sourceforge.net/mediawiki/residual/index.php?title=Datafiles'>Game data files</a><br>
  This page lists games which files exactly are needed by Residual in order to play that game.<br><br>

  <a href='http://apps.sourceforge.net/mediawiki/residual/index.php?title=TODO'>Residual current areas of focus</a><br>
  This page is the current TODO list for Residual.<br><br>



<?php

  echo "  </div>\n";
}

echo "</div>\n";

html_content_end();
html_page_footer();

?>
