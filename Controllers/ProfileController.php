<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//User.php';
require_once __DIR__.'//..//Repository//UserRepository.php';

class ProfileController extends AppController {

    public function getProfileLikes()
    {   
        $email= $_SESSION["id"];
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($email);
        $this->render('profile_likes', ['user' => $user]);
    }

    public function getLiked(){
        
    }

    public function getProfileSettings()
    {   
        $email= $_SESSION["id"];
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($email);
        $this->render('profile_settings', ['user' => $user]);
    }
}