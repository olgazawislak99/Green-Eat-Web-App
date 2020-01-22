<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//User.php';
require_once __DIR__.'//..//Repository//UserRepository.php';

class ProfileController extends AppController {

    public function getProfileData()
    {   
        $email= $_SESSION["id"];
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($email);
        $this->render('profile_likes', ['user' => $user]);
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