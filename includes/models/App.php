<?php 
/**
* This model contains the details for an iTunes store app
*
*/
class App {

    public $appID;
    public $price;
    public $currency;
    public $releaseDate;
    public $averageUserRating;
    public $userRatingCount;
    public $sellerName;
    public $sellerUrl;
    public $version;
    public $reviews;

    public function __construct($appID, $averageUserRating, $userRatingCount, $currency, $price, $sellerName, $releaseDate) {
        $this->appID = $appID;
        $this->averageUserRating = $averageUserRating;
        $this->userRatingCount = $userRatingCount;
        $this->currency = $currency;
        $this->price = $price;
        $this->sellerName = $sellerName;
        $this->releaseDate = $releaseDate;
        return $this;
    }
    
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }
    
    public function getVersion() {
        return $this->version;
    }
    
    public function setSellerUrl($urlString) {
        $this->sellerUrl = $urlString;
        return $this;
    }
    
    public function getSellerUrl() {
        return $this->sellerUrl;
    }
    
    public function setReviews($reviewArray) {
        $this->reviews = $reviewArray;
        return $this;
    }
    
    public function getReviews() {
        return $this->reviews;
    }
}
?>
