
<div class="header_image_wrap container">
    <?php if ( get_sub_field(ad_link) ) { ?>
        <a href="<?php if ( get_sub_field(ad_link) ) { ?>">
    <?php } ?>

        <img src="<?php the_sub_field('ad_image_url'); ?>">
    <?php if ( get_sub_field(ad_link) ) { ?>
        </a>
    <?php } ?>
</div>