<?php
require_once('craftDemo.params');
require_once('craftDB.php');

$queryParams = array('id'=>$appID);
$queryString = http_build_query($queryParams);
$req = curl_init("http://itunes.apple.com/lookup"."?".$queryString);
curl_setopt($req, CURLOPT_RETURNTRANSFER, 1);
$res = json_decode(curl_exec($req), true, 5);
$responseData = $res['results'][0];

$insertSQL = " INSERT INTO craft_demo.`app` (appID, averageUserRating, currency, price, releaseDate, sellerName";
if ($responseData['sellerUrl']) {
    $insertSQL .= ", sellerURL";
}
if ($responseData['version']) {
    $insertSQL .= ", version";
}
$insertSQL .= ", userRatingCount) VALUES (";
$insertSQL .= "'$appID'";
$insertSQL .= ", ".floatval($responseData['averageUserRating']);
$insertSQL .= ", '".$responseData['currency']."'";
$insertSQL .= ", ".$responseData['price'];
$insertSQL .= ", '".$responseData['releaseDate']."'";
$insertSQL .= ", '".$responseData['sellerName']."'";
if ($responseData['sellerUrl']) {
    $insertSQL .= ", '".$responseData['sellerUrl']."'";
}
if ($responseData['version']) {
    $insertSQL .= ", '".$responseData['version']."'";
}
$insertSQL .= ", ".$responseData['userRatingCount'].");";
$success = $connection->query($insertSQL);

?>