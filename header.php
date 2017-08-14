<?php
function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  
  <title>Environmental Partnership, Inc.<?php if ($PageTitle != "") { echo " | " . $PageTitle; } ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Remedi Creative">
  
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link href='//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="inc/epi2012.css" type="text/css" media="screen,print">
  
  <script type="text/javascript" src="inc/jquery-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
    });
  </script>
  <!--[if lt IE 8 ]>
  <script type="text/javascript" src="inc/IE8.js"></script>
  <![endif]-->
  <!--[if lt IE 7 ]>
  <script type="text/javascript" src="inc/dd_belatedpng.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
  <![endif]-->
</head>
<body>

<div id="outer-wrap">
  <div id="wrap">
    <a href="."><img src="images/logo.jpg" alt="Environmental Partnership, Inc." id="logo"></a>
    
    <ul id="menu">
      <li><a href=".">home</a></li>
      <li><a href="services.php">services</a></li>
      <li><a href="contact.php">contact</a></li>
    </ul>
    
    <div style="clear: both;"></div>
    