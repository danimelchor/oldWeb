<?php
  include('include/header.php');

  $title = 'Project Title';
  $imgsrc = 'img/case.jpg';
?>
<div id="home-content">
  <!--<img src="img/home.jpg" id="home-introduction-img" draggable="false" />-->
  <div id="home-introduction-wrapper">
    <div id="home-introduction-img" draggable="false"></div>
    <div id="home-opacity-layer"></div>
    <div id="home-introduction-text">
      <p id="home-introduction-text-title">Welcome to my website!</p>
      <p id="home-introduction-text-p">Hey reader! Welcome to my website. What you are seeing right now is a personal project I decided to work in for fun and as a challenge.</p>
    </div>
    <i class="fas fa-chevron-down" id="home-down-icon"></i>
  </div>
  <div id="home-lib-examples">
    <p id="home-lib-title" >Gallery</p>
    <div id="home-lib-examples-wrapper">
      <?php
      for($i = 0; $i < 3; $i++) {
        echo '<div class="home-lib-examples-item">
                <img src="' . $imgsrc . '" class="home-lib-examples-img"/>
                <div class="home-lib-examples-description">
                  <p class="home-lib-examples-p">' . $title . '</p>
                  <a href="/library.php" class="home-lib-examples-a">See more</a>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>
</div>
<?php include('include/footer.php'); ?>
