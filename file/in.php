<?php

$txt = $_POST[txt];
$a = parse_bb_code($txt);
echo $a;
function parse_bb_code($text)	{
	$text = preg_replace('/\[(\/?)(b|i|u|s)\s*\]/', "<$1$2>", $text);
	
	$text = preg_replace('/\[code\]/', '<pre><code>', $text);
	$text = preg_replace('/\[\/code\]/', '</code></pre>', $text);
	
	$text = preg_replace('/\[(\/?)quote\]/', "<$1blockquote>", $text);
	$text = preg_replace('/\[(\/?)quote(\s*=\s*([\'"]?)([^\'"]+)\3\s*)?\]/', "<$1blockquote>Цитата $4:<br>", $text);
	
	$text = preg_replace('/\[url\](?:http:\/\/)?([a-z0-9-.]+\.\w{2,4})\[\/url\]/', "<a href=\"http://$1\">$1</a>", $text);
	$text = preg_replace('/\[url\s?=\s?([\'"]?)(?:http:\/\/)?([a-z0-9-.]+\.\w{2,4})\1\](.*?)\[\/url\]/', "<a href=\"http://$2\">$3</a>", $text);
	
	$text = preg_replace('/\[img\s*\]([^\]\[]+)\[\/img\]/', "<img src='$1'/>", $text);
	$text = preg_replace('/\[img\s*=\s*([\'"]?)([^\'"\]]+)\1\]/', "<img src='$2'/>", $text);
	
	return $text;
}
?>