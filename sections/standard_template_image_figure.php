
<div class="<?php the_sub_field('css_classes') ?>">
    <?php if ( get_sub_field('link') ) { ?> <a href="<?php the_sub_field('llink'); ?>" target="_blank"> <?php } ?>
        <img style="width: 100%;" src="
                                        <?php 
                                        if ( get_sub_field('image_remote_url') ) { 
                                            the_sub_field('image_remote_url'); 
                                        } else { 
                                            the_sub_field('image_file'); 
                                        } ?>
                                    ">
    <?php if ( get_sub_field('link') ) { ?> </a> <?php } ?>
</div>


 