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
        <li><a href="#">Магазины</a> <i class="icon-arrow-right-black"></i></li>
        <li class="last">Zara <i class="icon-arrow-right-black"></i></li>
      </ul>
    </div>
  </div>

  <div class="container main">
    <div class="row">
      <div class="span9 text-content-row">
        <div class="text-content clearfix">
          
          <h2>McDonald’s американская корпорация, крупнейшая в мире сеть ресторанов быстрого питания.</h1>
          <p>McDonald’s — сеть ресторанов быстрого питания.</p>
          <p>Коллекции McDonald’s– это возможность приобрести стильные вещи европейского качества по доступной цене.</p>
          <p>McDonald’s- одежда для современных людей, идущих в ногу со временем, ценящих стиль и индивидуальность.</p>
          <p>В магазинах McDonald’s покупателям представлены женская, мужская и детская линии одежды: всевозможная верхняя одежда, брюки, джинсы, жакеты, джемперы, а также лимитированные коллекции купальников, декоративной косметики и парфюмерии.</p>
        </div>
      </div>

      <div class="span3 brend-descr-row">
         <?php include "partials/shop-info.php"; ?>
          <?php shop_info('McDonalds', '<span>2 этаж, место 32</span><br/><b>(495) 926-75-60</b><br/>
          <a href="#">http://mcdonalds.ru/</a>', 'files/fashion-logo-mc.png', 0) ?>
          <img src="files/food-img-content.png" class="big-right-img">
      </div>
    </div>
  </div>



  <?php include "partials/big-slider.php"; ?>
  
  <?php big_slider('MC Donnalds', 'assets/images/header-big-image.jpg', 0) ?>


  <div class="container"><div class="row"><div class="span12">
    <h5 class="title-button">Расположение на карте</h5>
    <?php include "partials/schema-shop.php"; ?>
    <?php schema_shop('files/fashion-logo-mc.png', 'McDonalds', '<span>2 этаж</span> 32' , '55%', '55%') ?>
  </div></div></div>

  <div class="container main">
    <div class="row">
      <div class="span12">
        <div class="slider-collections slider-wrapper food-coll" data-width-items="0.333">
          <h5 class="title-button">Галерея</h5>
          <?php include "partials/small-slider.php"; ?>
          <?php small_slider('food', 5, 0, 0, 0, 0) ?>
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
