<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/map.css"/>
    <link rel="Stylesheet" type="text/css" href="../Public/css/profile_settings.css"/>
    <link rel="Stylesheet" type="text/css" href="../Public/css/profile_likes.css"/>
    <link rel="Stylesheet" type="text/css" href="../Public/css/navbar.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/footer.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/257efb6abb.js" crossorigin="anonymous"></script>
    <title>greeneat</title>
</head>
<body>
<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
<div class="container">
    <?php foreach($users as $user): ?>
    <div class="profile">
        <img src="../Public/img/profile_pic.png">
        <p><?=$user->getName() ?> <?=$user->getSurname() ?></p>
        <p><?= $user->getEmail()?></p>
        <button>140 LIKED</button>
        <a href="/?page=profile_settings"><i class="fas fa-cog"></i><p>settings</p></a>
    </div>
    <?php endforeach ?>
    
    <div class="board">
        <div class="title">
            <p>Your favourite places:</p>
        </div>
        <div class="wraper">
            <button>Sisi Restaurant&Wine</button>
            <button><i class="fas fa-thumbs-down"></i></button>
        </div>
        <div class="wraper">
            <button>Sisi Restaurant&Wine</button>
            <button><i class="fas fa-thumbs-down"></i></button>
        </div>
        <div class="wraper">
            <button>Sisi Restaurant&Wine</button>
            <button><i class="fas fa-thumbs-down"></i></button>
        </div>
    </div>
</div>
<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
</body>
</html>