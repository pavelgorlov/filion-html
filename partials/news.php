<?php
  function news($type, $count){ ?>
    
      <div class="slider-header  clearfix">
        <div class="slider-header-inner">
          <span>Новости и акции</span>
          <a href="#" class="slider-next button-marker"><i class="icon-next"></i></a>
          <a href="#" class="slider-prev unactive button-marker"><i class="icon-prev"></i></a>
        </div>
      </div>
      
      <div class="slider-scrolling clearfix">
        <?php     
          for($i=0;$i<$count;$i++){
        ?>
        <div class="slider-item">
          <div class="news-item">
            <div class="slider-img">
              <img src="files/news-<?= $type.'-0' ?>.jpg"/> 
            </div>
            <div class="slider-text">
              <div class="slider-info">
                <div class="news-date"><i></i>14.05</div>
                <a href="#" class="button-marker"><i class="icon-map"></i></a>
                <a href="#" class="button-marker"><span>15</span><i class="icon-message"></i></a>
              </div>
              <h2>Утренняя свежесть от Ив Роше!</h2>
              <p>Окунитесь в удовольствие, которое Вам подарит новый аромат Ив Роше "Цветок Ландыша"</p>
            </div>
          </div>
        </div>

        <div class="slider-item">
          <div class="news-item">
            <div class="slider-img">
              <img src="files/news2-<?= $type.'-0' ?>.jpg"/> 
            </div>
            <div class="slider-text">
              <div class="slider-info">
                <div class="news-date"><i></i>14.05</div>
                <a href="#" class="button-marker grey"><i class="icon-map"></i></a>
                <a href="#" class="button-marker grey"><i class="icon-message"></i></a>
              </div>
              <h2>Коллекция Orby School 2013!</h2>
              <p>Российский производитель детской одежды Orby представляет новую коллекцию школьной формы - готовые решения для создания единого стиля школы. </p>
            </div>
          </div>
        </div>
        <?
          }
        ?>
                
      </div>
<?php } ?>
  
