<?php
function small_slider($type, $count, $with_logo, $hidden_descr, $count_info, $video_item){ ?>
<div class="slider-collections-nav">
  <a href="#" class="slider-next button-marker"><i class="icon-next"></i></a><a href="#" class="slider-prev unactive button-marker"><i class="icon-prev"></i></a>
</div>
<div class="slider-collections-content">
  <div class="slider-scrolling clearfix">
    <?php for($i=0;$i<$count;$i++){ ?>
    <!--
      add class "new" or "select" to fashion item
    -->
    <div class="slider-item slider-collections-item <?php if($with_logo) { ?> with-logo <?php } ?>">
      <i class="new-icon"></i>
      <div class="slider-item-inner">
        <div class="slider-collections-img">
          <?php if($count_info == 1) { ?>
            <div class="count-info">
              153 фото
            </div>
          <?php } ?>

          <?php if($video_item == 1) { ?>
            <i class="video-icon"></i>
          <?php } ?>
          <img src="files/<?= $type.'-'.$i ?>.png" class="shop-img"/>  
          <div class="collection-info">Коллекция Осень-зима 2013</div>
        </div>
        <?php if($hidden_descr != 1) { ?>
        <div class="name-collection">
          <div class="name-collection-inner">
            <a href="#">
              <?php if($with_logo) { ?>
                <img src="files/<?= $type.'-logo-'.$i ?>.png">
              <?php } else { ?>
                Распродажа <br>летней коллекции 2013
              <?php } ?>
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<?php } ?>