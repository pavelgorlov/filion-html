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
      <div class="span8">
        <div class="text-content clearfix">
          <h2>Кинотеатр «Синема Парк»</h2>
          <p>Кинотеатр «Синема Парк» STARLIGHT открылся в конце мая 2009 года на четвертом этаже нового торгово-развлекательного центра международного уровня «Филион». Центр имеет очень удобное расположение: 3 минуты ходьбы от ст.м. Фили и ст. м. Багратионовская, в непосредственной близости к Кутузовскому проспекту и третьему транспортному кольцу, а также паркинг на 1500 машин.</p>
        </div>
      </div>

      <div class="span4">
         <div class="cinema-info clearfix">
            <img src="files/cinema-logo.png"/>
            <br>
            4 этаж, место 32<br>
            +7 (495) 6-44411<br>
            <div class="pull-left">
              <a href="#">cinemapark.ru</a>
            </div>
            <div class="pull-right">
              <a href="#">Как добраться</a>
            </div>
         </div>
          
      </div>

      <div class="span12 clearfix">
        <div class="big-slider-with-banner">
          <?php include "partials/big-slider.php"; ?>
          <?php big_slider('Начало<br>в кино с 20 августа', 'files/cinema-film-slider.png', 1) ?>
        
          <div class="other-banners kino">
            <div class="medium-banner first">
              <div class="banner-wrapper">
                <img src="files/cinema-small-banner3.png">
                <div class="title-banner">
                  <a href="#" class="title-banner-link">
                    радиак – в кино с 15 августа
                  </a>
                </div>
              </div>
            </div>
            <div class="medium-banner second">
              <div class="banner-wrapper">
                <img src="files/cinema-small-banner4.png">
                <div class="title-banner">
                  <a href="#" class="title-banner-link">
                    главные хиты лета - гадкий я-2!
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h5 class="title-button">Расположение залов</h5>
  </div>

  <div class="black-area">
    <div class="container">
      <div class="cinema-schema">
        <img src="files/cinema-schema.png"/>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="span12 clearfix">
        <div class="slider-collections slider-wrapper food-coll" data-width-items="0.333">
          <h5 class="title-button">Интерьеры</h5>
          <?php include "partials/small-slider.php"; ?>
          <?php small_slider('kino', 5, 0, 0, 0, 0) ?>
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
    </div>
  </div>
  
  <?php include "partials/footer.php"; ?>
</body>
</html>
