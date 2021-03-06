<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- <img class="wave" src="<?= base_url(); ?>/img/leftbg.png"> -->
    <?= $this->include('auth/login/content') ?>
    
    <?= $this->renderSection('content') ?>
    <?= $this->include('auth/login/footer') ?>
    
    <script type="text/javascript" src="<?= base_url(); ?>/js/main.js"></script>
</body>

</html>