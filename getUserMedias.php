<?php
error_reporting(-1);

require_once 'vendor/autoload.php';
require_once 'vendor/raiym/instagram-php-scraper/src/InstagramScraper.php';

use InstagramScraper\Instagram;

header('Access-Control-Allow-Origin: *');
try {
//	$medias = Instagram::getMedias('kevin', 1497);
//	echo json_encode($medias[1497]);

$medias = Instagram::getMedias($_GET["username"], 150);
	echo json_encode($medias) ;
	//$media = Instagram::getMediaByCode('BL0k1EXhElI');
    //echo json_encode($media);

} catch (\Exception $ex) {
    print_r($ex);
}
