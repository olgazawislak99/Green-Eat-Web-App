<?php


class Post {
    private $name;
    private $hashtags;
    private $image1;
    private $image2;
    private $image3;
    private $place;
    private $time;

    public function __construct(string $name, string $hashtags, string $image1, string $image2, string $image3, string $place, string $time){
        $this->name=$name;
        $this->hashtags=$hashtags;
        $this->image1=$image1;
        $this->image2=$image2;
        $this->image3=$image3;
        $this->place=$place;
        $this->time=$time;
    }
  
    public function getName(): string
    {
        return $this->name;
    }

    public function getHashtags()
    {
        return $this->hashtags;
    }

    public function getImage1():string
    {
        return $this->image1;
    }

    public function getImage2()
    {
        return $this->image2;
    }
 
    public function getImage3()
    {
        return $this->image3;
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