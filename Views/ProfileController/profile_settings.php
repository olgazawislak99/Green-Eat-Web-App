<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/map.css"/>
    <link rel="Stylesheet" type="text/css" href="../Public/css/profile_settings.css"/>
    <link rel="Stylesheet" type="text/css" href="../Public/css/navbar.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/footer.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/257efb6abb.js" crossorigin="anonymous"></script>
    <title>greeneat</title>
</head>
<body>
<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
<div class="container">
    <div class="profile">
        <img src="../Public/img/profile_pic.png">
        <p><?=$user->getName() ?> <?=$user->getSurname() ?></p>
        <p><?= $user->getEmail()?></p>
        <a href="/?page=profile_likes"><p>140 LIKED</p></a>
        <a href="/?page=profile_settings"><p>settings</p></a>
    </div>
    <div class="board">
        <div class="title">
            <p>Settings</p>
        </div>
        <div class="wraper">
            <p>profile picture</p>
            <p>password</p>
            <p>e-mail</p>
            <p>name</p>
            <p>localization</p>
        </div>
    
    </div>
</div>
<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
</body>
</html>