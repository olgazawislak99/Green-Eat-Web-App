<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//User.php';

class ProfileController extends AppController {

    public function getProfileData()
    {   
        $user = new User('johnny@pk.edu.pl', 'admin', 'Johnny', 'Snow');

        $data= [$user];
        $this->render('profile_likes', ['users' => $data]);
    }

    public function getLikes()
    {   
        $desc1 = new Description("Sisi Restaurant&Wine", 'jhfgweygfewyfgiwyegf', 'sisi1.jpg', 'Kraków', '1h ago');
        
        $data = [$desc1];
        $this->render('description', ['descriptions' => $data]);
    }
    
    public function getSettings()
    {   
        $desc1 = new Description("Sisi Restaurant&Wine", 'jhfgweygfewyfgiwyegf', 'sisi1.jpg', 'Kraków', '1h ago');
        
        $data = [$desc1];
        $this->render('description', ['descriptions' => $data]);
    }
}