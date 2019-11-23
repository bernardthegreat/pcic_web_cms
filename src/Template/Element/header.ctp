<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/pcic/lifter-logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <?php foreach($categories as $category_value=> $menu) { ?>

               <li><a href="#<?php echo $menu['class_name']; ?>"><?php echo $menu['name']; ?></a></li>
               
        

          <?php
              }
          ?>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
</header><!-- #header -->