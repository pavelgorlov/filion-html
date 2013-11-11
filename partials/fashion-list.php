<?php
  
function fashion_list($count, $text, $prefix){ 
  for($i=0;$i<$count;$i++){ ?>
<!--
  add class "new" or "select" to fashion item
-->

<div class="fashion-item">
  <i class="new-icon"></i>
  <div class="fashion-item-inner">
    <div class="fashion-item-img">
      <img src="files/<?= $prefix."-".$i ?>.png" class="shop-img"/>
      <div class="fashion-info"><?= $text ?></div>
    </div>
    <div class="name-fashion">
      <div class="name-fashion-inner">
        <a href="#">
          <img src="files/<?= $prefix."-logo-".$i ?>.png"/>
        </a>
      </div>
    </div>
  </div>
</div>

<?  } } ?>
