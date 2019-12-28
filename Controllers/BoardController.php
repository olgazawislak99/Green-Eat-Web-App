<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//Post.php';
require_once __DIR__.'//..//Repository//PostRepository.php';

class BoardController extends AppController {

    public function getLatestPosts()
    {   
        $postRepository = new PostRepository();
    
        $data = $postRepository->getPosts();
        $this->render('board', ['posts' => $data]);
    }

    public function getDescription()
    {   
        
        
        $data = [$desc1];
        $this->render('description', ['descriptions' => $data]);
    }
}