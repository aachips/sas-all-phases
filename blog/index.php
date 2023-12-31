<?php include('app/path.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Apple Chip Blog</title>
</head>
<body>
    <?php include('app/includes/header.php'); ?>

     <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="assets/images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user">April Cyr</i>
            &nbsp;
            <i class="far fa-calendar"> PHP Date</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> April Cyr</i>
            &nbsp;
            <i class="far fa-calendar"> PHP Date</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> April Cyr</i>
            &nbsp;
            <i class="far fa-calendar">PHP Date</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> April Cyr</i>
            &nbsp;
            <i class="far fa-calendar">PHP Date</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/image_1.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> April Cyr</i>
            &nbsp;
            <i class="far fa-calendar">PHP Date</i>
          </div>
        </div>


      </div>
    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="assets/images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/image_4.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/image_3.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Awa Melvine</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <?php include('app/includes/footer.php'); ?>
  <!-- // footer -->

  </body>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</html>

