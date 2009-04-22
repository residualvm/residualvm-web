<?php
$file_root = ".";

// load specific libraries
require($file_root."/include/"."util.php");
require($file_root."/include/"."news.php");

header("Content-Type: text/xml; charset=UTF-8");
echo "<?xml version='1.0' encoding='UTF-8' ?>\n";

$uri = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

?>
<feed xml:lang="en" xmlns="http://www.w3.org/2005/Atom">
	<id>http://<?php echo $uri; ?></id>
	<link rel="alternate" type="text/html" href="http://residual.sourceforge.net" />
	<link rel="self" type="application/atom+xml" href="http://<?php echo $uri; ?>" />
	<title type="text">Residual news</title>
	<subtitle type="html"><![CDATA[Residual is a cross-platform interpreter which allows you to play LucasArts' LUA-based 3D adventures: Grim Fandango and Escape from Monkey Island.]]></subtitle>
	<author>
		<name>Residual team</name>
		<uri>http://residual.sourceforge.net/</uri>
	</author>

<?php

// Fetch news (only show the first 5 records)
$news = list_latest_news(5);

// Get date of latest (first) item
$published = date("Y-m-d\Th:i:s\Z", $news[0]["date"] - date("Z", $news[0]["date"]));
echo "<updated>$published</updated>";

// Display news item
while (list($key,$item) = each($news)) {
  $news_date = date("Y-m-d\Th:i:s\Z", $item["date"] - date("Z", $item["date"]));
  $news_url = "http://residual.sourceforge.net/?shownews=archive#".date("Y-m-d", $item["date"]);
  $news_url2 = "residual.sourceforge.net/?shownews=".$item["filename"];
  echo "\t<entry xml:lang='en'>\n";
  echo "\t\t<id>".$news_url."</id>\n";
  echo "\t\t<link rel='alternate' href='".$news_url2."' />";
  echo "\t\t<updated>".$news_date."</updated>\n";
  echo "\t\t<published>".$news_date."</published>\n";
  echo "\t\t<title type='html'>".$item["title"]."</title>\n";

  echo "\t\t<content type='html' xml:base='http://residual.sourceforge.net'><![CDATA[\n\t\t".$item["body"]."\n\t\t]]></content>\n";
  if ($item["author"] != "")
    echo "\t\t<author>\n\t\t\t<name>".$item["author"]."</name>\n\t\t</author>\n";
  echo "\t</entry>\n";
} // end of news loop
?>
</feed>
