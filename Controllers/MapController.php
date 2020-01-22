<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//Post.php';
require_once __DIR__.'//..//Repository//PostRepository.php';

class MapController extends AppController {

    public function getLatestPosts()
    {   
        $postRepository = new PostRepository();
    
        $data = $postRepository->getPosts();
        $this->render('map', ['posts' => $data]);
    }
}