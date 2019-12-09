<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//Post.php';
require_once __DIR__.'//..//Models//Description.php';


class DescriptionController extends AppController {

    public function getDescription()
    {   
        $desc1 = new Description("Sisi Restaurant&Wine", 'jhfgweygfewyfgiwyegf', 'sisi1.jpg', 'Kraków', '1h ago');

        $data = [$desc1];
        $this->render('description', ['descriptions' => $data]);
    }
}