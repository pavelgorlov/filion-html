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

  <div class="top-black-area clearfix">
    <div class="top-labels">
      <div class="parking-label one-label">
        <i></i>
        <span>1500 мест</span>
      </div>
      <div class="schema-label one-label">
        <i></i>
        <span>Схема ТЦ</span>
      </div>
    </div>
    
      <div class="container"><div class="row">
        <div class="shop-filters span6">
          <div class="brend-search">
            <h5 class="title">Поиск по брендам:</h5>
            <form class="search-form mini-form">
              <input type="text" placeholder="Введите первые буквы бренда">
              <button class="search-buttons"><i class="icon-search"></i></button>
            </form>
          </div>
          <div class="brends-alpha">
            <p class="title">Алфавитный поиск:</p>
            <p>
              <a href="#">A</a><a href="#" class="select">Б</a><a href="#">В</a><a href="#">Г</a><a href="#">Д</a><a href="#">Е</a><a href="#">Ж</a><a href="#">З</a><a href="#">И</a><a href="#">К</a><a href="#">Л</a><a href="#">М</a><a href="#">Н</a><a href="#">О</a><a href="#">П</a><a href="#">Р</a><a href="#">С</a><a href="#">Т</a><a href="#">У</a><a href="#">Ф</a><a href="#">Х</a><a href="#">Ц</a><a href="#">Ч</a><a href="#">Э</a><a href="#">Ю</a><a href="#">Я</a>
            </p>
            <p>
              <a href="#">A</a><a href="#">B</a><a href="#">C</a><a href="#">D</a><a href="#">E</a><a href="#">F</a><a href="#">G</a><a href="#">H</a><a href="#">I</a><a href="#">G</a><a href="#">K</a><a href="#">L</a><a href="#">M</a><a href="#">N</a><a href="#">O</a><a href="#">P</a><a href="#">Q</a><a href="#">S</a><a href="#">T</a><a href="#">U</a>
              <a href="#">V</a><a href="#">W</a><a href="#">X</a><a href="#">Y</a><a href="#">Z</a><a href="#">#</a>
            </p>
          </div>
        </div>

        <div class="shop-categoty span6">
          <h5 class="title">Категории:</h5>
          <div class="row">
            <div class="span3">
              <ul>
                <li><a href="#" class="top-cloth"><i></i>Верхняя одежда</a></li>
                <li><a href="#" class="women-cloth"><i></i>Женская одежда</a></li>
                <li><a href="#" class="men-cloth active"><i></i>Мужская одежда</a></li>
                <li><a href="#" class="child-cloth"><i></i>Детские товары</a></li>
                <li><a href="#" class="food"><i></i>Продукты</a></li>
                <li><a href="#" class="bags"><i></i>Сумки и кожгалантерея</a></li>
                <li><a href="#" class="sport"><i></i>Спортивные товары</a></li>
                <li><a href="#" class="beauty"><i></i>Кросота и здоровье</a></li>
                <li><a href="#" class="cosmetics"><i></i>Порфюмерия и косметика</a></li>
              </ul>
            </div>
            <div class="span3">
              <ul>
                <li><a href="#" class="banks"><i></i>Банки</a></li>
                <li><a href="#" class="accessuars"><i></i>Аксессуары и бижутерия</a></li>
                <li><a href="#" class="boots"><i></i>Обувь</a></li>
                <li><a href="#" class="home-things"><i></i>Товары для дома</a></li>
                <li><a href="#" class="flowers"><i></i>Цветы</a></li>
                <li><a href="#" class="presents"><i></i>Подарки и сувениры</a></li>
                <li><a href="#" class="optics"><i></i>Оптика</a></li>
                <li><a href="#" class="animal-things"><i></i>Товары для животных</a></li>
                <li><a href="#" class="swatch"><i></i>Ювелирные украшения и часы</a></li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="grid-icons">
          <li><a href="#" class="grid-block active"><i></i>плитка</a></li>
          <li><a href="#" class="grid-gallery"><i></i>галлерея</a></li>
        </ul>
      </div></div>
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
        <?php fashion_list(12, 'Коллекция Осень-зима 2013', 'fashion') ?>
        
      </div>
    </div>
    <div class="row">
      <div class="span8 news-span">
        <div class="news-block slider-block slider-wrapper" data-width-items="0.5">
          <?php include "partials/news.php"; ?>
          <?php news('main', 3) ?>
        </div>
      </div>
      <?php include "partials/shops-slider.php"; ?>
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
