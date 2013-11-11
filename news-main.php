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
      <div class="span9">
        <h5 class="title-button">Новости</h5>
        <div class="news-block full">
        <div class="news-item">
          <div class="slider-img">
            <img src="files/news-main-1-medium.jpg"/> 
          </div>
          <div class="slider-text">
            <div class="slider-info">
              <div class="news-date"><i></i>14.05</div>
              <a href="#" class="button-marker"><i class="icon-map"></i></a>
              <a href="#" class="button-marker"><span>15</span><i class="icon-message"></i></a>
            </div>
            <h2>Charuel приглашает!</h2>
            <p>Charuel – модный бренд женской одежды класса средний - средний плюс, существующий на рынке с 1998 года.</p>
          </div>
        </div>
        <div class="news-item">
          <div class="slider-img">
            <img src="files/news-main-0-medium.jpg"/> 
          </div>
          <div class="slider-text">
            <div class="slider-info">
              <div class="news-date"><i></i>14.05</div>
              <a href="#" class="button-marker"><i class="icon-map"></i></a>
              <a href="#" class="button-marker"><span>15</span><i class="icon-message"></i></a>
            </div>
            <h2>Медовый месяц вашей кожи!</h2>
            <p>Откройте для себя новую гамму Мед и Мюсли БИО, которая более чем на 98% состоит из компонентов натурального происхождения.</p>
          </div>
        </div>
        <div class="news-item">
          <div class="slider-img">
            <img src="files/news-main-1-medium.jpg"/> 
          </div>
          <div class="slider-text">
            <div class="slider-info">
              <div class="news-date"><i></i>14.05</div>
              <a href="#" class="button-marker"><i class="icon-map"></i></a>
              <a href="#" class="button-marker"><span>15</span><i class="icon-message"></i></a>
            </div>
            <h2>Попробуйте новый вкус от BURGER KING</h2>
            <p>Окунитесь в удовольствие, которое Вам подарит новый аромат Ив Роше "Цветок Ландыша". На всякий случай. </p>
          </div>
        </div>
        <div class="news-item">
          <div class="slider-img">
            <img src="files/news-main-0-medium.jpg"/> 
          </div>
          <div class="slider-text">
            <div class="slider-info">
              <div class="news-date"><i></i>14.05</div>
              <a href="#" class="button-marker"><i class="icon-map"></i></a>
              <a href="#" class="button-marker"><span>15</span><i class="icon-message"></i></a>
            </div>
            <h2>Медовый месяц вашей кожи!</h2>
            <p>Откройте для себя новую гамму Мед и Мюсли БИО, которая более чем на 98% состоит из компонентов натурального происхождения.</p>
          </div>
        </div>
        </div>
        <div class="wrapper-paginator clearfix">
          <div class="paginator pull-right">
            <ul>
              <li><a href="#"><i class="icon-prev"></i></a></li><li><a href="#">1</a></li><li><a href="#">2</a></li><li class="active"><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#"><i class="icon-next"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="span3 hidden-phone">

        <div class="calendar">
          <div class="slider-block slider-wrapper" data-width-items="1">
            <a href="#" class="slider-next button-marker"><i class="icon-next"></i></a>
            <a href="#" class="slider-prev unactive button-marker"><i class="icon-prev"></i></a>
            
            <div class="slider-scrolling">
              <div class="slider-item">
                <div class="slider-header">
                  <div class="slider-header-inner">
                    <span>май 2013</span>
                  </div>
                </div>
                <div class="calendar-content">
                  <div class="header-calendar">
                    <span>пн</span>
                    <span>вт</span>
                    <span>ср</span>
                    <span>чт</span>
                    <span>пт</span>
                    <span>сб</span>
                    <span>вс</span>
                  </div>
                  <div class="calendar-dates">
                    <span><a href="#">1</a></span>
                    <span><a href="#" class="active">2</a></span>
                    <span><a href="#">3</a></span>
                    <span><a href="#">4</a></span>
                    <span><a href="#">5</a></span>
                    <span><a href="#">6</a></span>
                    <span><a href="#">7</a></span>
                    <span><a href="#" class="unactive">8</a></span>
                    <span><a href="#">9</a></span>
                    <span><a href="#">10</a></span>
                    <span><a href="#">11</a></span>
                    <span><a href="#">12</a></span>
                    <span><a href="#">13</a></span>
                    <span><a href="#">14</a></span>
                    <span><a href="#">15</a></span>
                    <span><a href="#" class="unactive">16</a></span>
                    <span><a href="#">17</a></span>
                    <span><a href="#">18</a></span>
                    <span><a href="#">19</a></span>
                    <span><a href="#">20</a></span>
                    <span><a href="#">21</a></span>
                    <span><a href="#">22</a></span>
                    <span><a href="#">23</a></span>
                    <span><a href="#">24</a></span>
                    <span><a href="#">25</a></span>
                    <span><a href="#">26</a></span>
                    <span><a href="#">27</a></span>
                    <span><a href="#">28</a></span>
                    <span><a href="#">29</a></span>
                    <span><a href="#">30</a></span>
                    <span><a href="#">31</a></span>
                  </div>
                </div>
              </div>
              <div class="slider-item">
                <div class="slider-header">
                  <div class="slider-header-inner">
                    <span>июнь 2013</span>
                  </div>
                </div>
                <div class="calendar-content">
                  <div class="header-calendar">
                    <span>пн</span>
                    <span>вт</span>
                    <span>ср</span>
                    <span>чт</span>
                    <span>пт</span>
                    <span>сб</span>
                    <span>вс</span>
                  </div>
                  <div class="calendar-dates">
                    <span><a href="#">1</a></span>
                    <span><a href="#" class="active">2</a></span>
                    <span><a href="#">3</a></span>
                    <span><a href="#">4</a></span>
                    <span><a href="#">5</a></span>
                    <span><a href="#">6</a></span>
                    <span><a href="#">7</a></span>
                    <span><a href="#" class="unactive">8</a></span>
                    <span><a href="#">9</a></span>
                    <span><a href="#">10</a></span>
                    <span><a href="#">11</a></span>
                    <span><a href="#">12</a></span>
                    <span><a href="#">13</a></span>
                    <span><a href="#">14</a></span>
                    <span><a href="#">15</a></span>
                    <span><a href="#" class="unactive">16</a></span>
                    <span><a href="#">17</a></span>
                    <span><a href="#">18</a></span>
                    <span><a href="#">19</a></span>
                    <span><a href="#">20</a></span>
                    <span><a href="#">21</a></span>
                    <span><a href="#">22</a></span>
                    <span><a href="#">23</a></span>
                    <span><a href="#">24</a></span>
                    <span><a href="#">25</a></span>
                    <span><a href="#">26</a></span>
                    <span><a href="#">27</a></span>
                    <span><a href="#">28</a></span>
                    <span><a href="#">29</a></span>
                    <span><a href="#">30</a></span>
                    <span><a href="#">31</a></span>
                  </div>
                </div>
              </div>
            </div>
          
          </div>

        </div>
        <div class="title-button blue">
          <div>все новости</div>
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
