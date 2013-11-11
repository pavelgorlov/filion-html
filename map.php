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
  <div class="black-area with-text">
    <?php include "partials/labels.php"; ?>
    <div class="container">
      <div class="row">
        <div class="span7">
          <h2>Как добраться:</h2>
          <ul class="grid-icons transport clearfix">
            <li><a href="#" class="grid-common active"><i></i>общественным транспортом</a></li>
            <li><a href="#" class="grid-car"><i></i>на автомобиле</a></li>
            <li><a href="#" class="grid-walk"><i></i>пешком</a></li>
          </ul>
        </div>
        <div class="span3">
          <p>Багратионовский проезд, 5 <br/>(м. Фили, м. Багратионовская)</p>
          <p> Телефоны: <br/> +7(495) 231-49-03</p>
        </div>
        <div class="span2">
          <p>ЧАСЫ РАБОТЫ</p>
          <p> с 10:00 до 22:00 <br/>ежедневно</p>
        </div>
      </div>
    </div>
  </div>
  <div class="big-map">
    <img src="files/map.jpg">
  </div>

  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="text-content clearfix">
          <h3>Пешком</h3>
          <ol class="adress">
            <li>от метро Багратионовская (800 м, 10 минут)
              <ol>
                <li>Следуйте 240 м на юго-восток по ул. Барклая в сторону Багратионовский пр-д</li>

                <li>Поверните налево на Багратионовский пр-д.<br/>
                  ТРЦ ФИЛИОН будет справа.</li>
              </ol>
            </li>

            <li>от метро Фили (500 м, 6 минут)
              <ol>
                <li>Следуйте 65 м на северо-запад в сторону Багратионовский пр-д </li>
                <li>Поверните налево на Багратионовский пр-д.
                ТРЦ ФИЛИОН будет слева.</li>
              </ol>
            </li>
          </ol>

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
