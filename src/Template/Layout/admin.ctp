<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CMS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
    <?= $this->Html->css('admin/bootstrap.min.css') ?>
    <?= $this->Html->css('admin/bootstrap-responsive.min.css') ?>
    <?= $this->Html->css('admin/font-awesome.min.css') ?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <?= $this->Html->css('admin/style.css') ?>
    <?= $this->Html->css('admin/pages/signin.css') ?>
    <?= $this->Html->css('admin/pages/dashboard.css') ?>
    <?= $this->Html->css('admin/jquery.dataTables.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>

<body>

     <?= $this->Flash->render() ?>
     <?php echo $this->element('admin_header'); ?>
     <?= $this->fetch('content') ?>
     <?php echo $this->element('admin_footer'); ?>
</body>

  <?= $this->Html->script('/js/admin/jquery-1.7.2.min.js') ?>
  <?= $this->Html->script('/js/admin/bootstrap.js') ?>
  <?= $this->Html->script('/js/admin/signin.js') ?>
  <?= $this->Html->script('/js/ckeditor.js') ?>
  <?= $this->Html->script('/js/admin/main.js') ?>
  <?= $this->Html->script('/js/admin/data-table/jquery.dataTables.min.js') ?>
  <?= $this->Html->script('/js/admin/data-table/data-table-act.js') ?>


</html>