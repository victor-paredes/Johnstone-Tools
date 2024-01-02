
<div class="<?php the_sub_field('css_classes') ?>">
    <a href="<?php if ( get_sub_field('link') ) { the_sub_field('llink'); } ?>">
        <img style="width: 100%;" src="
                                        <?php 
                                        if ( get_sub_field('image_remote_url') ) { 
                                            the_sub_field('image_remote_url'); 
                                        } else { 
                                            the_sub_field('image_file'); 
                                        } ?>
                                    ">
    </a>
</div>


 