<?php
header("Content-Type: text/xml; charset=UTF-8");

$url = "http://nage-warzone.com/doc/rank1.php";
$content = file_get_contents($url);

// แปลง TIS-620 → UTF-8
$content_utf8 = iconv("TIS-620", "UTF-8//IGNORE", $content);

echo $content_utf8;
?>
