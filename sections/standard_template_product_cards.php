
<div class="standard_template_product_cards_wrap">

    <div class="card-deck">

    

   

        
    <?php if( have_rows('standard_template_blocks') ): ?>
    <?php while( have_rows('standard_template_blocks') ): the_row(); ?>

        <?php if( get_row_layout() == 'standard_template_product_cards' ): ?>
            <?php the_sub_field('product_title'); ?>

        <?php else: 
            echo 'none';
        ?>
            

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

                














    </div> <!-- card-deck -->
  
</div> <!-- standard_template_product_cards_wrap -->