<?php
error_reporting(-1);

//require_once 'vendor/autoload.php';
require_once 'src/InstagramScraper.php';

use InstagramScraper\Instagram;

try {
//    $medias = Instagram::getMedias('kevin', 1497);
//    echo json_encode($medias[1497]);
    $media = Instagram::getMediaByCode('BL0k1EXhElI');
    echo json_encode($media);
} catch (\Exception $ex) {
    print_r($ex);
}


//echo Media::getIdFromCode('z-arAqi4DP') . '<br/>';
//echo Media::getCodeFromId('936303077400215759_123123');
//echo Media::getLinkFromId('936303077400215759_123123');
//echo shorten(936303077400215759);

//echo json_encode($instagram->getMediaById('936303077400215759_123123123'));