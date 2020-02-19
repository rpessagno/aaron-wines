<div class="shop">

    <div class="shop-items">

      <?php if( have_rows('current_releases', $pageID) ) { ?>
      <?php while ( have_rows('current_releases', $pageID) ) { the_row(); ?>

      <?php
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $price = get_sub_field('price');
        $link = get_sub_field('link');
        $detail_image = get_sub_field('detail_image');
        $sku = get_sub_field('sku');
      ?>
      
      <div class="shop-item">
        <a href="<?php echo $link; ?>"><img src="<?php echo $detail_image; ?>" class="shop-item-img"></a>
        <h2 class="shop-item-title text"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
        <?php if ($subtitle) { ?><h3 class="shop-item-subtitle text"><?php echo $subtitle; ?></h3><?php } ?>
        <p class="shop-item-price text"><?php echo $price; ?></p>
        <div class="cart">
          <div v65remotejs="addToCartForm" productsku="<?php echo $sku; ?>"></div>
        </div>
      </div>

      <?php } ?>
      <?php } ?>

    </div>
  
</div>
