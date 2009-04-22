<?php

$categories = array();

function display_categories_list() {
  global $categories;
  global $file_root;

  echo "<table border=0>\n";
  foreach ($categories as $cat) {
    html_nav_item("#cat".$cat->_catnum, $cat->_name);
  }
  echo "</table>\n";
}

function display_categories() {
  global $categories;

  foreach ($categories as $cat) {
    html_subhead_start('<a name="cat'.$cat->_catnum.'"></a><a href="?cat1='.
		       $cat->_catnum .'&amp;cat2=-1">'.$cat->_name.'</a>');

    echo '<div class="par-scr-content-cat'.$cat->_catnum.'">';

    $cat->display();
    echo "<br><br>\n";
    echo "</div>\n";
  }
}

class category {
  var $_name;
  var $_list;
  var $_catnum;

  function category($catnum, $name) {
    global $categories;

    $this->_list = array();
    $this->_name = $name;
    $this->_catnum = $catnum;

    $categories[] = &$this;
  }

  function add($scrnum, $filename, $description) {
    array_push ($this->_list, array("filename" => $filename, "description" => $description,
				    "catnum" => $scrnum));
  }

  function display() {
    global $scrcatnums;
    global $file_root;

    echo "<table border=0>\n";
    foreach($this->_list as $cat) {
      echo "<tr><td class='cat-bullet'><img src='$file_root/images/".$cat['filename'].
      	"' alt=\"\" width=24 height=24></td><td class='cat-link'><a href=\"?cat1=".$this->_catnum."&amp;cat2=".$cat['catnum']."\">".
      	$cat['description'].
      	"</a> <font class='cat-count'>(".count($scrcatnums[$this->_catnum][$cat['catnum']])." shots)</font></td></tr>\n";
    }
    echo "</table>\n";
  }
}

// LEC games
$cat = & new category(0, "LucasArts games");

$cat->add(0, "cat-residual.png", "Grim Fandango");
$cat->add(1, "cat-monkey.png", "Escape From Monkey Island");


?>
