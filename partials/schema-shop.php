<?php
function schema_shop($logo_shop, $name, $descr, $x, $y){ ?>
<div class="schema-wrapper">  
  <div class="schema">
    <div class="map-point" style="top: <?= $y ?>; left: <?= $x ?>;">
      <div class="map-point-overlay">
        <i></i>
        <div class="map-point-brend">
          <img src="<?= $logo_shop ?>">
        </div>
        <div class="map-point-brend-info">
          <div class="map-point-name">
            <?= $name ?>
          </div>
          <div class="map-point-position">
            <?= $descr ?>
          </div>
        </div>
      </div>
    </div>
    <img src="assets/images/schema.jpg" class="img-schema">
  </div>

  <div class="zoomer">
    <a href="#" class="button-marker with-label"><i class="icon-print"></i><span>распечатать</span></a><a href="#" class="button-marker with-label"><i class="icon-phone"></i><span>отправить на телефон</span></a><a href="#" class="button-marker"><i class="icon-zoom-up"></i></a><a href="#" class="button-marker"><i class="icon-zoom-down"></i></a>
  </div>
</div>
<?php } ?>