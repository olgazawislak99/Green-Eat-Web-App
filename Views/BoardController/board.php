<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/257efb6abb.js" crossorigin="anonymous"></script>
    <title>greeneat</title>
</head>
<body>
<div class="menu">
    <div class="logo_menu">
           <button> green<b>eat</b></button>
    </div>
    <div class="search">
            <input name="search" type="text" placeholder="search">
    </div>
    <div class="icons">
            <button><i class="fas fa-map-marker-alt"></i></button>
            <button><i class="fas fa-user"></i></button>
            <button><i class="fas fa-sign-out-alt"></i></button>
    </div>
    
</div>
<div class="container">
    <div class="board">
        <?php foreach($posts as $post): ?>
        <div class="wraper">
            <div class="div1"> <img src="<?= '../Public/img/'.$post->getImage() ?>"></div>
            <div class="div2"> <img src="<?= '../Public/img/'.$post->getImage2() ?>"></div>
            <div class="div3"> <img src="<?= '../Public/img/'.$post->getImage3() ?>"></div>
            <div class="div4"><button><?=$post->getName() ?></button> </div>
            <div class="div5"><p><?=$post->getHashtags() ?></p></div>
            <div class="div6"><div class="ic"><i class="fas fa-globe-americas"></i><p><?=$post->getPlace() ?></p></div></div>
            <div class="div6"><div class="ic"><i class="fas fa-clock"></i><p><?=$post->getTime() ?></p></div> </div>
            <div class="div8"><button><i class="fas fa-thumbs-up"></i></button></div>
        </div>
        <?php endforeach ?>
        
    </div>
</div>
<div class="footer">
    <button class="contact"> Contact </button>
    <button><i class="fas fa-map-marker-alt"></i></button>
    <button><i class="fas fa-user"></i></button>
    <button><i class="fas fa-sign-out-alt"></i></button>      
</div>
</body>
</html>