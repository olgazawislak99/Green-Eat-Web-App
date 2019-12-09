<?php

require_once 'BasePost.php';

class Description extends BasePost{

    private $description;

    public function __construct(string $name, string $description, string $image, string $place, string $time){
        parent::__construct($name,$image,$place,$time);
        $this->description=$description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}