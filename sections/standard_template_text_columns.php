
<?php
    $text_columns_card_deck_class = 'card-' . rand(100, 1000);
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

                </div> <!-- END .card -->

 

        <?php
            } // END while( have_rows('copy') )
        ?>


            
                
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
