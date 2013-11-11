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
  
  <div style="position: relative;">
    <?php include "partials/labels.php"; ?>
  </div> 
  <div class="container" >
    <div class="row">
      <div class="text-content many-column clearfix">
        <div class="span4">
          <h3>Наш адрес</h3>
          <p>Багратионовский проезд, 5 (м. Фили, м. Багратионовская)</p>
          <p><strong>Телефоны:</strong><br><strong>+7(495) 231-49-03</strong></p>
          <p><strong>Пароквка:</strong><br>Круглосуточно, бесплатно – первые 2 часа, далее 100 руб/ч</p>
        </div>
        <div class="span5">
          <h3>Часы работы</h3>
          <p><strong>Часы работы ТРЦ ”Филион”:</strong><br>с 10:00 до 22:00, ежедневно</p>
          <p><strong>Ашан СИТИ:</strong><br>c 8:00 до 23:00<br><i>Обращаем внимание: до 10:00 вход/выход только со стороны м. Багратионовская или через паркинг.</i></p>
          <p><strong>OBI:</strong><br>круглосуточно</p>
          <p><strong>Синема Парк:</strong><br>с 10:00 до 02:00 (воскресенье - четверг)<br>с 10:00 до 4:00 (пятница - суббота)</p>
        </div>
        <div class="span3">
          <h5>Обратная связь</h5>
          <form>
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Телефон">
            <input type="text" placeholder="Электронный адрес">
            <input type="text" placeholder="Тип обращения">
            <input type="text" placeholder="Тема">
            <textarea placeholder="Текст сообщения"></textarea>
            <button>Отправить</button>
          </form>
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
