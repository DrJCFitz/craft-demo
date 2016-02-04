<?php
require_once('craftDemo.params'); // $appID stored here
require_once('craftDB.php');

$findAppKeySQL = "SELECT id FROM craft_demo.`app` WHERE appID = '".$appID."';";
$dbAppKey = mysqli_query($connection, $findAppKeySQL);
if ($appRow = mysqli_fetch_row($dbAppKey)) {
    $appKey = $appRow[0];

    $req = curl_init("http://itunes.apple.com/rss/customerreviews/id=".$appID."/json");
    curl_setopt($req, CURLOPT_RETURNTRANSFER, 1);
    $res = json_decode(curl_exec($req),true);
    $reviewData = $res['feed']['entry'];
    
    $review_limit = 10;
    $accepted_reviews = 0;
    $counter = 1; // first entry is about app itself
    
    while ( $accepted_reviews < $review_limit ) {
        $validAuthorData = (isset($reviewData[$counter]['author']) && $reviewData[$counter]['author']['name']['label']);
        $validRatingData = (isset($reviewData[$counter]['im:rating']) && $reviewData[$counter]['im:rating']['label']);
        $validTitleData = (isset($reviewData[$counter]['title']) && $reviewData[$counter]['title']['label']);
        $validContentData = (isset($reviewData[$counter]['content']) && $reviewData[$counter]['content']['label']);

        if ( $validAuthorData 
            && $validRatingData 
            && $validTitleData 
            && $validContentData ) {

            $insertSQL = "INSERT INTO craft_demo.`reviews`";
            $insertSQL .= " (app_id, author, title, content, rating) VALUES (";
            $insertSQL .= $appKey;
            $insertSQL .= ", '".$reviewData[$counter]['author']['name']['label']."'";
            $insertSQL .= ", '".$reviewData[$counter]['title']['label']."'";
            $insertSQL .= ", '".$reviewData[$counter]['content']['label']."'";
            $insertSQL .= ", ".floatval($reviewData[$counter]['im:rating']['label']).");";

            $success = mysqli_query($connection, $insertSQL);
            
            if ($success) {
                $accepted_reviews++;
            }
        }
        $counter++;
    }
}

?>