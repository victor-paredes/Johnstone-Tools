
<?php $ad_link = get_sub_field('ad_link'); ?>

<div class="header_image_wrap container">
    <?php if ( $ad_link ) { ?>
        <a href="<?php echo $ad_link; ?>">
    <?php } ?>

        <img src="<?php the_sub_field('ad_image_url'); ?>">
    <?php if ( $ad_link ) { ?>
        </a>
    <?php } ?>
</div>
