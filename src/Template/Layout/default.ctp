<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PCIC</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <?= $this->Html->css('bootstrap.min.css') ?>
  <?= $this->Html->css('font-awesome.min.css') ?>
  <?= $this->Html->css('animate.min.css') ?>
  <?= $this->Html->css('ionicons.min.css') ?>
  <?= $this->Html->css('owl.carousel/owl.carousel.css') ?>
  <?= $this->Html->css('lightbox.min.css') ?>
  <?= $this->Html->css('style.css') ?>
  
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>

</head>

<body>
     <?= $this->Flash->render() ?>
   
     <?= $this->fetch('content') ?>
    
    
</body>
    

  <?= $this->Html->script('owl.carousel/jquery.min.js') ?>
  <?= $this->Html->script('jquery-migrate.min.js') ?>
  <?= $this->Html->script('bootstrap.bundle.min.js') ?>
  <?= $this->Html->script('easing.min.js') ?>
  <?= $this->Html->script('mobile-nav.js') ?>
  <?= $this->Html->script('waypoints.min.js') ?>
  <?= $this->Html->script('counterup.min.js') ?>
  <?= $this->Html->script('owl.carousel/owl.carousel.js') ?>
  <?= $this->Html->script('isotope.pkgd.min.js') ?>
  <?= $this->Html->script('lightbox.min.js') ?>
  <?= $this->Html->script('contactform.js') ?>
  <?= $this->Html->script('wow.min.js') ?>
  <?= $this->Html->script('main.js') ?>


</html>