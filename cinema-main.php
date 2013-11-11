<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fillion</title>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-utf8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TODO: add meta-description -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body class="main_page">
  <?php include "partials/header.php"; ?>

  
  <div class="black-area">
    <?php include "partials/labels.php"; ?>
    <div class="container">
      <div class="big-slider-with-banner">
        <?php include "partials/big-slider.php"; ?>
        <?php big_slider('Кинотеатр синема пар в филионе', 'files/cinema-big-banner.png', 1) ?>
      
        <div class="other-banners kino">
          <div class="medium-banner first">
            <div class="banner-wrapper">
              <img src="files/cinema-small-banner.png">
              <div class="title-banner">
                <a href="#" class="title-banner-link">
                  хэппилон – самый большой крытый парк развлечений
                </a>
              </div>
            </div>
          </div>
          <div class="medium-banner second">
            <div class="banner-wrapper">
              <img src="files/cinema-small-banner2.png">
              <div class="title-banner">
                <a href="#" class="title-banner-link">
                  Абонементы в ALEX Fitness со скидкой!
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcrumbs">
    <div class="container">
      <ul>
        <li><a href="#">Главная</a> <i class="icon-arrow-right-black"></i></li>
        <li class="last"><a href="#">Магазины</a> <i class="icon-arrow-right-black"></i></li>
      </ul>
    </div>
  </div>
  <div class="container main">
    <div class="row">
      <div class="shops-content span12 clearfix">
        <?php include "partials/fashion-list.php"; ?>
        <?php fashion_list(5, 'Коллекция Осень-зима 2013', 'cinema') ?>
        
      </div>
    </div>
  </div>

  <div class="bottom-buttons">
    <div class="container">
      <a href="#" class="map-link title-button pull-left">
        <span>Карта сайта</span>
        <i class="icon-arrow-down"></i>
      </a>
      <a href="#" class="faq-link title-button pull-right">
        <i class="icon-question"></i>
        <span>Задать вопрос</span>
        <i class="icon-arrow-right-black"></i>
      </a>
    </div>
  </div>
  
  <?php include "partials/footer.php"; ?>
</body>
</html>
