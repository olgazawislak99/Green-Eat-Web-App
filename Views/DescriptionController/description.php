<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/description.css"/>
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
    <?php foreach($descriptions as $description): ?>
    <div class="wraper">
        <div class="div9"><p>Gallery</p> </div>
        <div class="div1"><img src="<?= '../Public/img/'.$description->getImage() ?>"></div>
        <div class="div2"> <button><i class="fas fa-arrow-left"></i></button></div>
        <div class="div3"> <button><i class="fas fa-arrow-right"></i></button></div>
        <div class="div4"><p><?=$description->getName() ?></p> </div>
        <div class="div5"><p><?=$description->getDescription() ?></p></div>
        <div class="div6"><div class="ic"><i class="fas fa-globe-americas"></i><p><?=$description->getPlace() ?></p></div></div>
        <div class="div6"><div class="ic"><i class="fas fa-clock"></i><p><?=$description->getTime() ?></p></div> </div>
        <div class="div8"><button><i class="fas fa-thumbs-up"></i></button></div>
        <div class="div9"></div>
    </div>
    <?php endforeach ?>
</div>
<div class="footer">
    <button class="contact"> Contact </button>
    <button><i class="fas fa-map-marker-alt"></i></button>
    <button><i class="fas fa-user"></i></button>
    <button><i class="fas fa-sign-out-alt"></i></button>      
</div>
</body>
</html>