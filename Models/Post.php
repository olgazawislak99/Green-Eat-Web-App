<?php


class Post{
    private $name;
    private $image;
    private $image2;
    private $image3;
    private $place;
    private $time;
    private $hashtags;
    private $description;
    
    public function __construct(
        string $name, string $hashtags, string $image, string $image2, string $image3, string $place, string $time, string $description){
            $this->name=$name;
            $this->image=$image;
            $this->place=$place;
            $this->time=$time;
            $this->hashtags=$hashtags;
            $this->image2=$image2;
            $this->image3=$image3;
            $this->description=$description;      
        
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

    public function getDescription()
    {
        return $this->description;
    }
}