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

  <div class="container main ">
    <div class="row">
      <div class="span8">
        <div class="text-content clearfix new-item-content">
          <div class="news-item-date">12.10.2013</div>
          <h2>Новая коллекция ZARA в ТРЦ Филион</h2>
          <p>ZARA – бренд, хорошо известный по всему миру. Магазины ZARA есть почти в каждой столице и в большинстве крупных городов мира. Границы государств не мешают распространению глобальной моды. ZARA – это воплощение самых свежих и оригинальных дизайнерских идей в повседневной жизни.</p>
          <p>Коллекции ZARA – это возможность приобрести стильные вещи европейского качества по доступной цене. ZARA - одежда для современных людей, идущих в ногу со временем, ценящих стиль и индивидуальность.</p>
          <p>В магазинах ZARA покупателям представлены женская, мужская и детская линии одежды: всевозможная верхняя одежда, брюки, джинсы, жакеты, джемперы, а также лимитированные коллекции купальников, декоративной косметики и парфюмерии.</p>
          <img src="files/brend-big-banner.png">

          <div class="social-links">
            <img src="files/social-links.png"/>
          </div>
        </div>

        <div class="comments">
          <h5 class="title-button">Комментарии</h5>
          <div class="comments-content">
            <div class="comment-item clearfix">
              <div class="comment-avatar pull-left">
                <img src="files/avatar.png">
              </div>
              <div class="comment-content">
                <strong>Alex Menthas</strong><time>12.09.13</time>
                <div class="message">
                  I like it very much!
                </div>
              </div>
            </div>
            <div class="comment-item clearfix">
              <div class="comment-avatar pull-left">
                <img src="files/avatar.png">
              </div>
              <div class="comment-content">
                <strong>Alex Menthas</strong><time>12.09.13</time>
                <div class="message">
                  I like it very much!
                </div>
              </div>
            </div>
          </div>
          <div class="comment-form">
            <form>
              <textarea placeholder="текст сообщения"></textarea>
              <button class="pull-right grey">Отправить</button>
              <p class="info-to-comment">Возможность оставлять комментарии доступна только авторизованным пользователям</p>
            </form>
          </div>
          <div class="enter-buttons clearfix">
            <a href="#" class="enter-link">Войти</a>
            <div class="social-links pull-right">
              <a href="#" class="t-icon"></a>
              <a href="#" class="f-icon"></a>
              <a href="#" class="vk-icon"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="span4 news-span one-column-new">
        <div class="news-block slider-block slider-wrapper" data-width-items="1">
          <?php include "partials/news.php"; ?>
          <?php news('food', 3) ?>
        </div>
      </div>
    </div>
  </div>

  <?php include "partials/shop-on-map.php"; ?>
  <br><br><br>
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
