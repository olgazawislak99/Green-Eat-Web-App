<?php

require_once 'Controllers//BoardController.php';
require_once 'Controllers//SecurityController.php';
require_once 'Controllers//ProfileController.php';
require_once 'Controllers//MapController.php';

class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'board' => [
                'controller' => 'BoardController',
                'action' => 'getLatestPosts'
            ],
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],
            'logout' => [
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],
            'description' => [
                'controller' => 'BoardController',
                'action' => 'getDescription'
            ],
            'map' => [
                'controller' => 'MapController',
                'action' => 'getLatestPosts'
            ],
            'profile_likes' => [
                'controller' => 'ProfileController',
                'action' => 'getProfileData'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}