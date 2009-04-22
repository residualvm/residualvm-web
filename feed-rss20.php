<?php
$file_root = ".";

// load specific libraries
require($file_root."/include/"."util.php");
require($file_root."/include/"."news.php");

header("Content-Type: text/xml; charset=UTF-8");
echo "<?xml version='1.0' encoding='UTF-8' ?>\n";
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel>
        <title>Residual news</title>
        <link>http://residual.sourceforge.net/</link>
        <description>Residual is a cross-platform interpreter which allows you to play LucasArts' LUA-based 3D adventures: Grim Fandango and Escape from Monkey Island.</description>
        <language>en</language>

<?php

// Fetch news (only show the first 5 records)
$news = list_latest_news(5);

// Display news items
while (list($key,$item) = each($news)) {
  $news_url = "http://residual.sourceforge.net/?shownews=archive#".date("Y-m-d",$item["date"]);
  $news_url2 = "http://residual.sourceforge.net/?shownews=".$item["filename"];
  echo "\t\t<item>\n";
  echo "\t\t\t<title>".$item["title"]."</title>\n";
  echo "\t\t\t<description><![CDATA[\n".$item["body"]."\n\t\t\t]]></description>\n";
  echo "\t\t\t<pubDate>".date("r",$item["date"])."</pubDate>\n";
  if ($item["author"] != "")
    echo "\t\t\t<author>nospam@residual.org (".$item["author"].")</author>\n";
  echo "\t\t\t<guid isPermaLink='true'>".$news_url."</guid>\n";
  echo "\t\t\t<link>".$news_url2."</link>\n";
  echo "\t\t</item>\n";
} // end of news loop
?>

  </channel>
</rss>
