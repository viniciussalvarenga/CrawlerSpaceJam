<?php

namespace Vinic\SpaceJam\bin;

use Vinic\SpaceJam\PageObject\MainPageObject;


require __DIR__ . "/../vendor/autoload.php";

$MainPageObject = new MainPageObject();
$getTagA = $MainPageObject->getMapResponse()->getMapIterator();
$getSiteMap = $MainPageObject->getResponse($getTagA)->getIterator()->current();

echo "Capturando href para o Site map...".PHP_EOL;
sleep(1);
echo "\"" . $getTagA . "\"";
echo "\nCapturando texto da primeira linha da primeira coluna no Site map...\n";
sleep(1);
foreach ($getSiteMap as $text){
    echo "\"" . trim($text) . "\"";
};





