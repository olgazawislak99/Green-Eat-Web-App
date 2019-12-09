<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <title>greeneat</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="../Public/img/logo.svg">
    </div>
    <form action="?page=login" method="POST">
    <div class="messages">
            <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
            ?>
        </div>
        <input name="email" type="text" placeholder="johndoe@email.com">
        <input name="password" type="password" placeholder="password">
        <button type="submit">CONTINUE</button>
    </form>
</div>
</body>
</html>