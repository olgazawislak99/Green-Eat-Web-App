<?php

require_once 'BasePost.php';

class Post extends BasePost{
    private $hashtags;
    private $image2;
    private $image3;

    public function __construct(string $name, string $hashtags, string $image, string $image2, string $image3, string $place, string $time, int $likes){
        parent::__construct($name,$image,$place,$time,$likes);
        $this->hashtags=$hashtags;
        $this->image2=$image2;
        $this->image3=$image3;
        
    }
  
    public function getHashtags()
    {
        return $this->hashtags;
    }

    public function getImage2()
    {
        return $this->image2;
    }
 
    public function getImage3()
    {
        return $this->image3;
    }
}