<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//Post.php';

class BoardController extends AppController {

    public function getLatestPosts()
    {   
        $post1 = new Post('Sisi Restaurant&Wine', '#no_plastic #paper_bags #eco_straws #waste_sorting', 'sisi1', 'sisi2', 'sisi3', 'Kraków', '1h ago');
        

        $data = [$post1];
        $this->render('board', ['posts' => $data]);
    }
}