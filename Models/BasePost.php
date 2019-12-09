<?php

class BasePost{
    private $name;
    private $image;
    private $place;
    private $time;

    public function __construct(string $name, string $image, string $place, string $time){
        $this->name=$name;
        $this->image=$image;
        $this->place=$place;
        $this->time=$time;
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
}