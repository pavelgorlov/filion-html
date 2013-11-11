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
  
  <div class="top-banners clearfix">
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

    <div class="main-banner">
      <?php include "partials/big-slider.php"; ?>
      <?php big_slider('Главный торгово-развлекательный центр на западе', 'assets/images/header-big-image.jpg', 1) ?>
    </div>

    <div class="other-banners">
      <div class="small-banner bigger">
        <div class="banner-wrapper">
          <img src="assets/images/header-medium-image2.png">
          <div class="title-banner">
            <a href="#" class="title-banner-link">
              Выходные в филлионе
            </a>
          </div>
        </div>
      </div>
      <div class="small-banner smaller">
        <div class="banner-wrapper">
          <img src="assets/images/header-small-image2.png">
          <div class="title-banner">
            <a href="#" class="title-banner-link">
              лето - детям!
            </a>
          </div>
        </div>
      </div>
      <div class="small-banner smaller">
        <div class="banner-wrapper">
          <img src="assets/images/header-small-image.png">
          <div class="title-banner">
            <a href="#" class="title-banner-link">
              Лучший шоппинг
            </a>
          </div>
        </div>
      </div>
      <div class="medium-banner">
        <div class="banner-wrapper">
          <img src="assets/images/header-medium-image.png">
          <div class="title-banner">
            <a href="#" class="title-banner-link">
              Детские праздники в ХЭППИЛОН
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container main">
    <div class="row">
      <div class="span8 news-span">
        <div class="news-block slider-block slider-wrapper" data-width-items="0.5">
          <?php include "partials/news.php"; ?>
          <?php news('main', 3) ?>
        </div>
      </div>
      <?php include "partials/shops-slider.php"; ?>
    </div>  

    <div class="row">
      <div class="brends span14">
        <div class="title-button">бренды</div>
        <div class="brends-alpha">
          <p class="title">Алфавитный поиск:</p>
          <p>
            <a href="#">A</a>
            <a href="#" class="select">Б</a>
            <a href="#">В</a>
            <a href="#">Г</a>
            <a href="#">Д</a>
            <a href="#">Е</a>
            <a href="#">Ж</a>
            <a href="#">З</a>
            <a href="#">И</a>
            <a href="#">К</a>
            <a href="#">Л</a>
            <a href="#">М</a>
            <a href="#">Н</a>
            <a href="#">О</a>
            <a href="#">П</a>
            <a href="#">Р</a>
            <a href="#">С</a>
            <a href="#">Т</a>
            <a href="#">У</a>
            <a href="#">Ф</a>
            <a href="#">Х</a>
            <a href="#">Ц</a>
            <a href="#">Ч</a>
            <a href="#">Э</a>
            <a href="#">Ю</a>
            <a href="#">Я</a>
          </p>
          <p>
            <a href="#">A</a>
            <a href="#">B</a>
            <a href="#">C</a>
            <a href="#">D</a>
            <a href="#">E</a>
            <a href="#">F</a>
            <a href="#">G</a>
            <a href="#">H</a>
            <a href="#">I</a>
            <a href="#">G</a>
            <a href="#">K</a>
            <a href="#">L</a>
            <a href="#">M</a>
            <a href="#">N</a>
            <a href="#">O</a>
            <a href="#">P</a>
            <a href="#">Q</a>
            <a href="#">S</a>
            <a href="#">T</a>
            <a href="#">U</a>
            <a href="#">V</a>
            <a href="#">W</a>
            <a href="#">X</a>
            <a href="#">Y</a>
            <a href="#">Z</a>
            <a href="#">#</a>
          </p>
        </div>
        <div class="brends-wrapper clearfix">
          <div class="span3">
            <div class="row">
            <div class="brends-list">
              <form class="search-form mini-form">
                <input type="text" placeholder="Введите первые буквы бренда">
                <button class="search-buttons"><i class="icon-search"></i></button>
              </form>
              <div class="brend-letter button-marker">
                <a href="#">B</a>
                <i class="arrow-letter"></i>
              </div>
              <ul class="clearfix">
                <ul>
                  <li><a href="#">Baci Lingerie</a></li>
                  <li><a href="#">Balenciaga</a></li>
                  <li><a href="#">Ballantyne</a></li>
                  <li><a href="#">Ballerina</a></li>
                </ul>
                <ul>
                  <li><a href="#">Balmain</a></li>
                  <li><a href="#">Band of Outsiders</a></li>
                  <li><a href="#">Bandolera</a></li>
                  <li><a href="#">Baon</a></li>
                </ul>
                <ul>
                  <li><a href="#">Baci Lingerie</a></li>
                  <li><a href="#">Balenciaga</a></li>
                  <li><a href="#">Ballantyne</a></li>
                </ul>
                <ul>
                  <li><a href="#">Ballerina</a></li>
                  <li><a href="#">Balmain</a></li>
                  <li><a href="#">Band of Outsiders</a></li>
                </ul>
              </ul>

              <a href="#" class="all-brends-link"><span>все бренды</span></a>
            </div>
            </div>
          </div>
          <div class="span9 brends-content">
            <div class="brends-content-inner clearfix">
              <div class="pagination">
                <a href="#" class="button-marker">1</a><a href="#" class="button-marker">2</a><a href="#" class="button-marker select">3</a><a href="#" class="button-marker">4</a><a href="#" class="button-marker">5</a>
              </div>
              
              <h3 class="map-title">1 этаж</h3>
              <?php include "partials/schema-shop.php"; ?>
              <?php schema_shop('files/fashion-logo-0.png', 'Zara Women', '<span>2 этаж</span> 33', '55%', '55%') ?>

              <div class="floor-list">
                <span class="button-marker parent-item">
                  <i class="icon-arrow-down"></i>
                  <a href="#">1 этаж</a>
                  <ul>
                    <li><a href="#" class="active">1 этаж</a></li>
                    <li><a href="#">2 этаж</a></li>
                    <li><a href="#">3 этаж</a></li>
                    <li><a href="#">4 этаж</a></li>
                    <li><a href="#">5 этаж</a></li>
                  </ul>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="span14">
        <div class="tweet-message">
          <div class="button-marker">
            <div class="twitter-big-icon"></div>
            <i class="arrow-letter"></i>
          </div>
          <div class="tweeter-message-content">
            <h3>Look what we saw when we went on The Harry Potter tour! #FILION Spoil Me. It's magical! <a href="#">pic.twitter.com/ofVcsWyshL</a></h3>
            <div class="author">Творческая группа в сети Twitter</div>
            <time>19 ч. тому назад</time>
          </div>
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
