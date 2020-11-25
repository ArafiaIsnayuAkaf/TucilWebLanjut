<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>EXO WE ARE ONE</title>
  </head>
  <body>
     <?= $this->include('auth/index/header') ?>
    <?= $this->include('auth/index/content') ?>
    
    <?= $this->renderSection('content') ?>
    
    <?= $this->include('auth/index/footer') ?>
   
<script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>