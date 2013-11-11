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
      <div class="text-content search-result clearfix">
        <div class="span12">
          <form class="big-search-form">
            <input type="text" placeholder="Введите поисковой запрос">
              <div class="input dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Категории <i class="icon-arrow-down-black"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#"><i class="icon-world"></i>Весь сайт</a></li>
                  <li><a href="#"><i class="icon-flag"></i>Объекты</a></li>
                  <li><a href="#"><i class="icon-thunder"></i>Новости</a></li>
                </ul>
              </div>
            <button class="grey">Найти <i class="icon-search-white"></i></button>
          </form>
          <h2>По запросу "ЗАРА" найдено</h2>
          <h3>Бренды</h3>
          <ol>
            <li>
              <h4>Заголовок</h4>
              <p>ZARA – бренд, хорошо известный по всему миру. Магазины ZARA есть почти в каждой столице и в большинстве крупных городов мира. Границы государств не мешают распространению глобальной моды. ZARA – это воплощение самых свежих и оригинальных дизайнерских идей в повседневной жизни. Коллекции ZARA – это возможность приобрести стильные вещи...</p>
              <p><a href="#"><i class="icon-map"></i> Показать на карте</a></p>
            </li>
            <li>
              <h4>Заголовок</h4>
              <p>ZARA – бренд, хорошо известный по всему миру. Магазины ZARA есть почти в каждой столице и в большинстве крупных городов мира. Границы государств не мешают распространению глобальной моды. ZARA – это воплощение самых свежих и оригинальных дизайнерских идей в повседневной жизни. Коллекции ZARA – это возможность приобрести стильные вещи...</p>
              <p><a href="#"><i class="icon-map"></i> Показать на карте</a></p>
            </li>
          </ol>

          <h3>Станицы</h3>
          <ol>
            <li>
              <h4>Заголовок станицы</h4>
              <p><span class="search-word">ZARA</span> – бренд, хорошо известный по всему миру. Магазины ZARA есть почти в каждой столице и в большинстве крупных городов мира. Границы государств не мешают распространению глобальной моды. ZARA – это воплощение самых свежих и оригинальных дизайнерских идей в повседневной жизни. Коллекции ZARA – это возможность приобрести стильные вещи...</p>
            </li>
            <li>
              <h4>Заголовок станицы</h4>
              <p><span class="search-word">ZARA</span> – бренд, хорошо известный по всему миру. Магазины ZARA есть почти в каждой столице и в большинстве крупных городов мира. Границы государств не мешают распространению глобальной моды. ZARA – это воплощение самых свежих и оригинальных дизайнерских идей в повседневной жизни. Коллекции ZARA – это возможность приобрести стильные вещи...</p>
            </li>
            <li>
              <h4>Заголовок станицы</h4>
              <p><span class="search-word">ZARA</span> – бренд, хорошо известный по всему миру. Магазины ZARA есть почти в каждой столице и в большинстве крупных городов мира. Границы государств не мешают распространению глобальной моды. ZARA – это воплощение самых свежих и оригинальных дизайнерских идей в повседневной жизни. Коллекции ZARA – это возможность приобрести стильные вещи...</p>
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
