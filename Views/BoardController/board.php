<?php
    if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
        die('You are not logged in!');
    }

    if(!in_array('ROLE_USER', $_SESSION['role'])) {
        die('You do not have permission to watch this page!');
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/navbar.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/footer.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/257efb6abb.js" crossorigin="anonymous"></script>
    <title>greeneat</title>
</head>
<body>
<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
<div class="container">
    <div class="board">
        <?php foreach($posts as $post): ?>
        <div class="wraper">
            <div class="div1"> <img src="<?= '../Public/img/'.$post->getImage() ?>"></div>
            <div class="div2"> <img src="<?= '../Public/img/'.$post->getImage2() ?>"></div>
            <div class="div3"> <img src="<?= '../Public/img/'.$post->getImage3() ?>"></div>
            <div class="div4"><a href="/?page=description"><?=$post->getName() ?></a> </div>
            <div class="div5"><p><?=$post->getHashtags() ?></p></div>
            <div class="div6"><div class="ic"><i class="fas fa-globe-americas"></i><p><?=$post->getPlace() ?></p></div></div>
            <div class="div6"><div class="ic"><i class="fas fa-clock"></i><p><?=$post->getTime() ?></p></div> </div>
            <div class="div8"><button><i class="fas fa-thumbs-up"></i><p><?=$post->getLikes() ?></p></button></div>
        </div>
        <?php endforeach ?>
        
    </div>
</div>
<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
</body>S
</html>