<?php
function shop_info($name, $info_shop, $logo_shop, $category_show){ ?>
  <div class="brend-descr">
    <div class="brend-descr-logo">
      <img src="<?= $logo_shop ?>" class="brend-logo-current">
    </div>
    
    <div class="brend-descr-content clearfix">    
      <p class="brend-short-info">
        <?= $info_shop ?>
      </p>
      <?php if($category_show) {?>
        <div class="shop-categoty hidden-phone">
          <h5 class="title">Категории:</h5>
          <ul>
            <li><a href="#" class="top-cloth black"><i></i>Верхняя одежда</a></li>
            <li><a href="#" class="women-cloth black"><i></i>Женская одежда</a></li>
            <li><a href="#" class="men-cloth black"><i></i>Мужская одежда</a></li>
          </ul>
        </div>
      <?php } ?>
      
      <div class="enter-button button-marker">
        <i class="icon-enter"></i>
      </div>
      <div class="brend-qr">
        <a href="#"><img src="files/qr.png"></a>
        <div class="qr-popup">
          <i></i>
          <img src="files/qr-brend.png">
        </div>
      </div>
    </div>
  </div>
<?php } ?>