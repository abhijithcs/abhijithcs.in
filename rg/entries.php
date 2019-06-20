<?php
define('INCLUDE_CHECK', true);
require 'connect.php';


if($_GET['name'] == NULL)
{
	echo ' <script>window.location = "entries.php?name=Abhijith";</script> ';
}

$fuck = 0;

if($_GET['name'] == "Mohammed")
{
	$fuck = 0;
}

$query_name = $_GET['name'];
if($_GET['name'] == "Mohammed")
{
$query_name = "Mohammed";
}
$data = mysql_fetch_array(mysql_query("SELECT fName, lName, nick FROM wingmates WHERE fName='{$query_name}'"));
$fname = $data['fName'];
$nick = $data['nick'];
$lname = $data['lName'];

if($fname == NULL)
{
	echo ' <script>window.location = "index.html";</script> ';
}

echo'
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Received RGs</title>

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>

  <style>
  body{background-color: #16A085;}
  lol
  {
   	font-weight: bold;
	color: #FFFFFF;
  }
  </style>
  ';
  	$posts = mysql_query("SELECT name FROM entry WHERE name='{$fname}'");
	$count = 0;
	while($post = mysql_fetch_assoc($posts))
	{
		$count++;
	}

  echo'

  <body>
    <div class="container">
	<center>
	<h2>'.$fname.' ';if($nick !== ""){echo'<lol>\''.$nick.'\'</lol>';}echo' '.$lname.'</h2>
	<button class="btn btn-warning btn-lg">'; if($fuck == 1){echo '#ERR';}else{echo $count ; } echo' RGs received.</button><br><br>
      <div class="row">
          <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Select a Person<span class="caret"></span></button>
            <ul role="menu" class="dropdown-menu">
';

  	$query = mysql_query("SELECT fName, lName, nick FROM wingmates WHERE 1");
  	while ($people = mysql_fetch_assoc($query))
  	{
  		$name1 = $people['fName'];
    		$name2 = $people['lName'];
	      	$name3 = $people['nick'];
	     
		$posts = mysql_query("SELECT name FROM entry WHERE name='{$name1}'"); 	
		$count = 0;
		while($post = mysql_fetch_assoc($posts))
		{
			$count++;
		}	       	
		echo'<li><a href="entries.php?name='.$name1.'">'.$name1.' '.$name2.' (<strong>'.$count.'</strong>)</a></li>';  	
  	
  	}
echo'
            </ul>
          </div><!-- /btn-group -->
	</div>
	<br>
	</center>

';

if($fuck == 1)
{
	echo '<center><h4 style="color: #ffffff">1146: Table rgmaxtable.Mohammed.nonexistenttable does not exist.</h4></center>';
}
else{
	$posts = mysql_query("SELECT name, friend, ans1, ans2, ans3, ans4, ans5, words FROM entry WHERE name='{$fname}'");

	while($post = mysql_fetch_assoc($posts))
	{
 		$friend = $post['friend'];
		$ans1 = $post['ans1'];
		$ans2 = $post['ans2'];
		$ans3 = $post['ans3'];
		$ans4 = $post['ans4'];
		$ans5 = $post['ans5'];
		$words = $post['words'];
	echo'
          <div class="login-form">
	'; if($friend !== ""){echo'<button class="btn btn-info btn-lg btn-block">'.$friend.'</button>';}
	
	if($ans1 !== ""){
	echo'
            <div class="form-group">
	      <label>'.$fname.' will be remembered because of?</label>
	      <p style="color:#F39C12; word-wrap: break-word;">'.$ans1.'</p>            
            </div>
	';}
	if($ans2 !== ""){
	echo'
            <div class="form-group">
	      <label>Any Secrets -or- Incidents -or- Memories that you want to share about '.$fname.'?</label>
	      <p style="color:#F39C12; word-wrap: break-word;">'.$ans2.'</p>            
            </div>
	';}
	if($ans5 !== ""){
	echo'
            <div class="form-group">
	      <label>Any memorable quotes and typical stuff that this guy says?</label>
	      <p style="color:#F39C12; word-wrap: break-word;">'.$ans5.'</p>            
            </div>
	';}
	if($ans3 !== ""){
	echo'
            <div class="form-group">
	      <label>Anything you want to tell him?</label>
	      <p style="color:#F39C12; word-wrap: break-word;">'.$ans3.'</p>            
            </div>
	';}
	if($ans4 !== ""){
	echo'
            <div class="form-group">
	      <label>Swear words or abuses if you want to!</label>
	      <p style="color:#F39C12; word-wrap: break-word;">'.$ans4.'</p>            
            </div>
	';}
	if($words !== ""){
	echo'
            <div class="form-group">
	      <label>The Best Words that describes '.$fname.':</label>
	      <p style="color:#F39C12; word-wrap: break-word;">'.$words.'</p>            
            </div>
	';
	}
	echo'
          </div>
	<br>
	';
	}
}//Fuck End.
echo'

    </div>

';
?>

    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>