<?php 
/**
* This model contains the details for a review
*
*/
class Review {

    public $title;
    public $author;
    public $rating;
    public $content;

    public function __construct($author, $title, $content, $rating) {
        $this->title = $title;
        $this->author = $author;
        $this->rating = $rating;
        $this->content = $content;
        return $this;
    }
}
?>
