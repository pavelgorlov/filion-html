<?php
	
	
//Функция, которая генерит слайдер
//Входные параметры: 
//	– текст слайда, 
//	- путь до картинки
//	- количество слайдов (по умолчанию 3 повторения)

function big_slider($text, $image, $type, $count = 3){ ?>
		
<div class="big-slider slider-wrapper <?php if($type) { ?> without-white-line <?php } ?>" data-width-items="1">
  <div class="white-line-banner"></div>
  <div class="slider-scrolling clearfix">
    
    <?php     
	//Повторяем $count раз
	for($i=0;$i<$count;$i++){
    ?>
  	<div class="slider-item">
      <div class="container">
        <h2>
          <a href="#">
          <?= $text ?></a>
        </h2>
      </div>
      <img src="<?= $image ?>">
    </div>
	<?
	  }
	?>
   
  </div>
  <div class="slider-area">
    <div class="container">
      <div class="slider-nav"></div>
      <span class="play-slide"><i class="icon-slide-play"></i></span>
    </div>
  </div>
</div>

<?	} ?>