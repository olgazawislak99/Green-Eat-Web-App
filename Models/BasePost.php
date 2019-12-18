<?php

class BasePost{
    private $name;
    private $image;
    private $place;
    private $time;
    private $likes;

    public function __construct(string $name, string $image, string $place, string $time, int $likes){
        $this->name=$name;
        $this->image=$image;
        $this->place=$place;
        $this->time=$time;
        $this->likes=$likes;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPlace()
    {
        return $this->place;
    }
 
    public function getTime()
    {
        return $this->time;
    }

    public function getLikes()
    {
        return $this->likes;
    }
}
