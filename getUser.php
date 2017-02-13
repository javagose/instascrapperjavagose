<?php
error_reporting(-1);

require_once 'vendor/autoload.php';
require_once 'vendor/raiym/instagram-php-scraper/src/InstagramScraper.php';

use InstagramScraper\Instagram;

header('Access-Control-Allow-Origin: *');
	 header("Access-Control-Allow-Credentials: true");
	 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	 header('Access-Control-Max-Age: 1000');
	 header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

try {
//	$medias = Instagram::getMedias('kevin', 1497);
//	echo json_encode($medias[1497]);

$account = Instagram::getAccount($_GET["username"]);
	echo json_encode($account) ;
	//$media = Instagram::getMediaByCode('BL0k1EXhElI');
    //echo json_encode($media);

} catch (\Exception $ex) {
    print_r($ex);
}
