<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//Post.php';
require_once __DIR__.'//..//Models//Description.php';

class BoardController extends AppController {

    public function getLatestPosts()
    {   
        $post1 = new Post("Sisi Restaurant&Wine", '#no_plastic #paper_bags #eco_straws #waste_sorting', 'sisi1.jpg', 'sisi2.jpg', 'sisi3.jpg', 'Kraków', '1h ago');

        $data = [$post1];
        $this->render('board', ['posts' => $data]);
    }

    public function getDescription()
    {   
        $desc1 = new Description("Sisi Restaurant&Wine", 'jhfgweygfewyfgiwyegf', 'sisi1.jpg', 'Kraków', '1h ago');
        
        $data = [$desc1];
        $this->render('description', ['descriptions' => $data]);
    }
}