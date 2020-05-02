<?php
define('INCLUDE_CHECK', true);
require 'connect.php';

$query_name = $_GET['name'];
$data = mysql_fetch_array(mysql_query("SELECT fName, lName, nick FROM RG_wingmates_alak WHERE fName='{$query_name}'"));
$fname = $data['fName'];
$nick = $data['nick'];
$lname = $data['lName'];

if($fname == NULL) //()
{
	echo ' <script>window.location = "index.html";</script> ';
}

echo'
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta property="og:image" content="http://alakananda.in/rg/img/icons/'.$fname.'.jpg">
    <title>RG '.$fname.'</title>
    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Give your honest, funny and best opinion about '.$fname.' ';if($nick!==""){echo'\''.$nick.'\'';}echo' '.$lname.' of Alakananda Hostel. An opportunity not to be missed! Write all you want.">
    <meta property="og:title" content="RG '.$fname.' - Alak A4 Wing RG Form">
    <meta property="og:description" content="Give your honest, funny and best opinion about '.$fname.' ';if($nick!==""){echo'\''.$nick.'\'';}echo' '.$lname.' of Alakananda Hostel. An opportunity not to be missed! Write all you want.">


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
	color: #ECF0F1;
  }
  </style>

  <body>
    <div class="container">
	<center>
	<h2>'.$fname.' ';if($nick!==""){echo'<lol>\''.$nick.'\'</lol>';}echo' '.$lname.'</h2>
        <img src="img/icons/'.$fname.'.jpg" width="50%" class="img-rounded img-responsive">
	</center>
	<br>
	<form method="post" action="submit.php">
          <div class="login-form">
            <div class="form-group">
	      <input type="hidden" value="'.$fname.'" name="myname"/>
	      <label>'.$fname.' will be remembered because of?</label>
	      <textarea class="form-control login-field" name="ans1" value=""></textarea>            
            </div>
            <div class="form-group">
	      <label>Any Secrets -or- Incidents -or- Memories that you want to share about '.$fname.'?</label>
	      <textarea class="form-control login-field" name="ans2" value=""></textarea>            
            </div>            
	    <div class="tagsinput-primary">
             <label>The Best Words that describes '.$fname.':</label>
              <input name="word_tags" class="tagsinput" data-role="tagsinput" value=""/>
            </div>
            <div class="form-group">
	      <label>Any memorable quotes and typical stuff that this guy says?</label>
	      <textarea class="form-control login-field" name="ans5" value=""></textarea>            
            </div>            
            <div class="form-group">
	      <label>Anything you want to tell him?</label>
	      <textarea class="form-control login-field" name="ans3" value=""></textarea>            
            </div>
            <div class="form-group">
	      <label>Swear words or abuses if you want to!</label>
	      <textarea class="form-control login-field" name="ans4" value=""></textarea>            
            </div>

            <div class="form-group">
	      <label>Finally, tell him who you are? </label>
              <input type="text" class="form-control login-field" value="" placeholder="'.$fname.' does not mind if you wish to skip it!" name="friend" />
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
	</form>
            <a class="login-link" href="index.html">RG another Person?</a>
          </div>
	<br>
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