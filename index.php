<?php

print_r($_GET);

$sampleSite = !empty($_GET['site']) ? $_GET['site'] : "NoSite";


if($sampleSite != "") {
	setcookie('siteCookie', $sampleSite, time() + (86400 * 30), "/"); // 86400 = 1 day
}

if(!empty($_COOKIE['siteCookie']) && $_COOKIE['siteCookie'] != "") {
	$iAmOn = $_COOKIE['siteCookie'];
	echo $iAmOn.'+++++';
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>This is heading 1 for <?php echo $sampleSite;?></h1>
<h2>This is heading 2 for <?php echo $sampleSite;?></h2>
<h3>This is heading 3 for <?php echo $sampleSite;?></h3>
<h4>This is heading 4 for <?php echo $sampleSite;?></h4>
<h5>This is heading 5 for <?php echo $sampleSite;?></h5>
<h6>This is heading 6 for <?php echo $sampleSite;?></h6>

</body>
</html>