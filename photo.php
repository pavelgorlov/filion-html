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
      <?php include "partials/big-slider.php"; ?>
      <?php big_slider('Якитория в филионе', 'assets/images/header-big-image.jpg', 1) ?>
      <ul class="grid-icons in-slider">
        <li><a href="#" class="grid-block active"><i></i>плитка</a></li>
        <li><a href="#" class="grid-gallery"><i></i>галлерея</a></li>
      </ul>
    </div>
  </div>

  <div class="breadcrumbs">
    <div class="container">
      <ul>
        <li><a href="#">Главная</a> <i class="icon-arrow-right-black"></i></li>
        <li><a href="#">Магазины</a> <i class="icon-arrow-right-black"></i></li>
        <li class="last">Zara <i class="icon-arrow-right-black"></i></li>
      </ul>
    </div>
  </div>

  <div class="container main">
    <div class="row">
      <div class="span12">

        <div class="slider-collections slider-wrapper photo-col" data-width-items="0.165">
          <h5 class="title-button">Все фотографии</h5>
          <?php include "partials/small-slider.php"; ?>
          <?php small_slider('fashion', 10, 0, 1, 0, 0) ?>
        </div>

        <div class="slider-collections slider-wrapper photo-col" data-width-items="0.165">
          <h5 class="title-button">Фотографии в ТРЦ</h5>
          <?php small_slider('fashion', 10, 0, 1, 0, 0) ?>
        </div>

        <div class="slider-collections slider-wrapper photo-col" data-width-items="0.165">
          <h5 class="title-button">Акции в ТРЦ</h5>
          <?php small_slider('fashion', 10, 0, 0, 1, 0) ?>
        </div>

        <div class="slider-collections slider-wrapper photo-col" data-width-items="0.165">
          <h5 class="title-button">Праздники</h5>
          <?php small_slider('fashion', 10, 0, 0, 1, 0) ?>
        </div>

        <div class="slider-collections slider-wrapper photo-col" data-width-items="0.165">
          <h5 class="title-button">Праздники</h5>
          <?php small_slider('fashion', 10, 0, 0, 0, 1) ?>
        </div>
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
      <div class="count-shows pull-right">Просмотров: 123 987</div>
    </div>
  </div>
  
  <?php include "partials/footer.php"; ?>
</body>
</html>
