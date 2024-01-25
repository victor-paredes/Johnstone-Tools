
<?php
    $text_columns_card_deck_class = 'card_group_' . rand(100, 1000);
    $text_columns_row_count = count(get_sub_field('text_column_content'));

            if ( $text_columns_row_count >= 2 ) {
                echo '
                    <style>
                        .' . $text_columns_card_deck_class . ' .card:first-child {
                            padding-right: 45px;
                        }
                        .' . $text_columns_card_deck_class . ' .card:last-child {
                            padding-left: 45px;
                        }
                    </style>
                ';
            }
?>

<div class="text_columns_wrap padding_mobile <?php the_sub_field('css_classes'); ?>">
    <div class="card-deck <?php echo $text_columns_card_deck_class; ?>">


    




        <?php
            while( have_rows('text_column_content') ){ 
                the_row(); 
        ?>
     
                
                <div class="card" style="background-color: transparent; border: initial;">
              
                            <?php the_sub_field('column_copy'); ?>

                            <br> 
                            <?php the_sub_field('css_classes'); ?><br>
                            Card Style: <?php the_sub_field('card_style'); ?><br>                            
                            Test: <?php the_sub_field('test'); ?><br>
                            

 
                </div> <!-- END .card -->
 
 

        <?php
            } // END while( have_rows('text_column_content') ) 
        ?>


Test: <?php the_sub_field('test'); ?><br>
Card Style: <?php the_sub_field('card_style'); ?><br>


<?php if ( get_sub_field('card_style' == 'pill') ) { ?>
    yes
        <style>
            .<?php echo $text_columns_card_deck_class; ?> * {
                background-color: #ddd !important;
            } 
        </style>
<?php } ?>



             
                 
        <style>
            .text_columns_wrap {
                margin-top: 25px;
                padding-left: 50px;
                padding-right: 50px;
            }

            @media screen and (max-width: 576px) {
                .<?php echo $text_columns_card_deck_class; ?> .card:first-child, .<?php echo $text_columns_card_deck_class; ?> .card:last-child {
                    padding: initial;  
                }
            }

            
        </style>
                      
               













    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->
