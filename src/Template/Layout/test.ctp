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
  <?= $this->Html->css('/css/owl.carousel/owl.carousel.css') ?>
  <?= $this->Html->css('/css/owl.carousel/main.css') ?>
  
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>

</head>

<body>
     <?= $this->Flash->render() ?>
   
     <?= $this->fetch('content') ?>
    
    
</body>
    

  <?= $this->Html->script('owl.carousel/jquery.min.js') ?>
  <?= $this->Html->script('owl.carousel/owl.carousel.js') ?>
  <?= $this->Html->script('owl.carousel/main.js') ?>

</html>