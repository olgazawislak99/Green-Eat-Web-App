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
        
        ');
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();

        $post = $stmt->fetch(PDO::FETCH_ASSOC);

        if($post == false) {
            return null;
        }

        return new Post(
            $post['Restaurantname'],
            $post['RestaurantHashtags'],
            $post['RestaurantImage1'],
            $post['RestaurantImage2'],
            $post['Restaurantcol'],
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
                $post['RestaurantImage1'],
                $post['RestaurantImage2'],
                $post['Restaurantcol'],
                $post['AddressCity'],
                $post['date'],
                $post['RestaurantDescription']
            );
        }

        return $result;
    }
}