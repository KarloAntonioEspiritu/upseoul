<?php
session_start();

echo $_POST['message']."<br>";

$noSpacesTracking = str_replace(' ', 'pot ', $_POST['tracking']);

$trackingExplode = explode('.', $noSpacesTracking);

foreach($trackingExplode as $tracking){
	if(strpos($_POST['message'], $tracking) !== false){
		echo "Verfied tracking: ";
		echo $tracking ."<br>";
	}
	else{ 
		echo "Not Verified tracking: ";
		echo $tracking ."<br>";
	}
}
?>