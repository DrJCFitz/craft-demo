<?php
require_once('/var/www/includes/models/App.php');
require_once('/var/www/includes/models/Review.php');

function getAppDetails($appID, $connection) {
    $appQuerySQL = "SELECT id, appID, averageUserRating, currency";
    $appQuerySQL .= ", price, releaseDate, sellerName, sellerURL";
    $appQuerySQL .= ", userRatingCount, version";
    $appQuerySQL .= " FROM craft_demo.`app`";
    $appQuerySQL .= " WHERE appID = '".$appID."';";
    $appResult = mysqli_query($connection, $appQuerySQL);

    $app = null;
    $rating_floor = 4;
    if ($row = mysqli_fetch_assoc($appResult)) {
        $app = new App($appID, $row['averageUserRating'], $row['userRatingCount'], $row['currency'], $row['price'], $row['sellerName'], $row['releaseDate']);
        
        if ($row['version']) {
            $app->setVersion($row['version']);
        }
        if ($row['sellerURL']) {
            $app->setSellerUrl($row['sellerURL']);
        }
        
        $reviews = array();
        $reviewQuerySQL = "SELECT author, title, content, rating";
        $reviewQuerySQL .= " FROM craft_demo.`reviews`";
        $reviewQuerySQL .= " WHERE app_id = ".$row['id'];
        $reviewQuerySQL .= " AND rating > ".$rating_floor.";";

        $reviewResult = mysqli_query($connection, $reviewQuerySQL);
        while ($reviewRow = mysqli_fetch_assoc($reviewResult)) {
            $review = new Review($reviewRow['author'], 
                                $reviewRow['title'],
                                $reviewRow['content'],
                                $reviewRow['rating']);
            $reviews[] = $review;
        }
        $app->setReviews($reviews);
    }
    return $app;
}
?>