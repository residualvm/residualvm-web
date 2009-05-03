<?php

function sidebar_start () {
  
    global $file_root;

?>
<td class="menus">
<?php

   $g = new htmlmenu("Main Menu", "menu-main");
    
    $g->add("Home", $file_root);
    $g->add("Screenshots", $file_root."/screenshots.php");
    $g->add("Forums", "http://residual.scummvm.org");
    $g->add("Downloads", $file_root."/downloads.php");

    $g->done();

    $g = new htmlmenu("Documentation", "menu-docs");
    $g->add("FAQ", $file_root."/faq.php");
    $g->add("Documentation", $file_root."/documentation.php");
    $g->add("Compatibility", $file_root."/compatibility.php");
    $g->add("Wiki", "http://apps.sourceforge.net/mediawiki/residual/");
    $g->add("Credits", $file_root."/credits.php");
    
    $g->done();

    $g = new htmlmenu("Development", "menu-sf");

    $g->add("SF.net Project Home", "http://sourceforge.net/projects/residual/");
//    $g->add("Bug Tracker", "http://sourceforge.net/tracker/?group_id=37116&amp;atid=418820");
//    $g->add("Feature Requests", "http://sourceforge.net/tracker/?group_id=37116&amp;atid=418823");
    $g->add("Patch Tracker", "http://sourceforge.net/tracker/?group_id=259881&atid=1127293");
    $g->add("Subversion Tree", "http://residual.svn.sourceforge.net/viewvc/residual/residual/trunk/");
//    $g->add("Buildbot", "http://buildbot.scummvm.org/");
    $g->done();

    $g = new htmlmenu("Miscellaneous", "menu-misc");

    $g->add("Demos", $file_root."/demos.php");
    $g->add("Contact", $file_root."/contact.php");
    $g->add("Links", $file_root."/links.php");
    
    $g->done();
}

function sidebar_end ()
{
?>

</td>

<?php
}

?>
