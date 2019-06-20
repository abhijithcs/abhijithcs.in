<?php
define('INCLUDE_CHECK', true);
require 'connect.php';

$name = mysql_real_escape_string($_POST['myname']);
$friend = mysql_real_escape_string($_POST['friend']);
$ans1 = mysql_real_escape_string($_POST['ans1']);
$ans2 = mysql_real_escape_string($_POST['ans2']);
$ans3 = mysql_real_escape_string($_POST['ans3']);
$ans4 = mysql_real_escape_string($_POST['ans4']);
$ans5 = mysql_real_escape_string($_POST['ans5']);
$words = mysql_real_escape_string($_POST['word_tags']);

if($friend == "" && $ans1 == "" && $ans2 == "" && $ans3 == "" && $ans4 == "" && $words == "" && $ans5 == "")
{
	echo ' <script>window.location = "fill.php?name='.$name.'";</script> ';
}
else
{

mysql_query("INSERT INTO RG_entries_alak (name, friend, ans1, ans2, ans3, ans4, ans5, words) VALUES ('{$name}', '{$friend}', '{$ans1}', '{$ans2}', '{$ans3}', '{$ans4}', '{$ans5}', '{$words}')");

echo ' <script>window.location = "thanks.html";</script> ';
}

?>
					