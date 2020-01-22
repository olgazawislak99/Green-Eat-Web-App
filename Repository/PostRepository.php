<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models/Post.php';

class PostRepository extends Repository {

    public function getPost(string $name): ?Post 
    {
        $stmt = $this->database->connect()->prepare('
        Select *
        from Post as p
        inner join Restaurant as r on
        p.idRestaurant=r.idRestaurant
        inner join Address as a on 
        r.idAddress=a.idAddress
        Where RestaurantName = :RestaurantName
        
        ');
        $stmt->bindParam(':RestaurantName', $name, PDO::PARAM_STR);
        $stmt->execute();

        $post = $stmt->fetch(PDO::FETCH_ASSOC);

        if($post == false) {
            return null;
        }

        return new Post(
            $post['RestaurantName'],
            $post['RestaurantHashtags'],
            $post['Image1'],
            $post['Image2'],
            $post['Image3'],
            $post['AddressCity'],
            $post['date'],
            $post['RestaurantDescription']
        
        );
    }

    public function getPosts(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
        Select *
        from Post as p
        inner join Restaurant as r on
        p.idRestaurant=r.idRestaurant
        inner join Address as a on 
        r.idAddress=a.idAddress
        ');
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($posts as $post) {
            
            $result[] = new Post(
                $post['RestaurantName'],
                $post['RestaurantHashtags'],
                $post['Image1'],
                $post['Image2'],
                $post['Image3'],
                $post['AddressCity'],
                $post['date'],
                $post['RestaurantDescription']
            );
        }

        return $result;
    }


}