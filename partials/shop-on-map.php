<?php
function shop_on_map($map_place, $info_shop, $logo_shop, $category_show){ ?>
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
      <div class="brend-descr span3">
        <img src="<?= $logo_shop ?>" class="brend-logo-current">
        
        <p class="brend-place"><?= $map_place ?></p>
        <p class="brend-short-info">
          <?= $info_shop ?>
        </p>
        <?php if($category_show) {?>
          <div class="shop-categoty hidden-phone">
            <h5 class="title">Категории:</h5>
            <ul>
              <li><a href="#" class="top-cloth"><i></i>Верхняя одежда</a></li>
              <li><a href="#" class="women-cloth"><i></i>Женская одежда</a></li>
              <li><a href="#" class="men-cloth"><i></i>Мужская одежда</a></li>
            </ul>
          </div>
        <?php } ?>

        <img src="files/qr.png" class="brend-qr">
      </div>

      <div class="span9">
        <?php include "partials/schema-shop.php"; ?>
        <?php schema_shop('Zara Women', '<span>2 этаж</span>в32', '55%', '60%') ?>
      </div>

      <div class="enter-button button-marker yellow">
        <i class="icon-enter"></i>
      </div>
    </div></div>
</div>
<?php } ?>