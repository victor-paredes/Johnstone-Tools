


<?php
    $text_columns_card_deck_class = 'card_group_' . rand(100, 1000);
    $text_columns_row_count = count(get_sub_field('text_column_content'));

            if (  get_sub_field('card_style') == 'text' && $text_columns_row_count >= 2 ) {
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

<div class="<?php if ( get_sub_field('card_style') == 'text' ) { ?>text_columns_wrap padding_mobile<?php } ?> <?php the_sub_field('css_classes'); ?>">
    <div class="card-deck <?php echo $text_columns_card_deck_class; ?>">


    




        <?php
            while( have_rows('text_column_content') ){ 
                the_row(); 
        ?>
     
                
                <div class="card">
              
                            <?php the_sub_field('column_copy'); ?>
 
                </div> <!-- END .card -->
 
 

        <?php
            } // END while( have_rows('text_column_content') ) 
        ?>





             
                 
        <style>
            <?php if ( get_sub_field('card_style') == 'text' ) { ?>
                .text_columns_wrap {
                    margin-top: 25px;
                    padding-left: 50px;
                    padding-right: 50px;
                }
            <?php } ?>


            .<?php echo $text_columns_card_deck_class; ?> .card {
                background-color: transparent;
                border: initial;
            }
            

            <?php if ( get_sub_field('card_style') == 'pill' ) { ?>
                    .text_columns_wrap {
                        padding: 10px;
                    }
                    .<?php echo $text_columns_card_deck_class; ?> {
                        display: flex;
                        justify-content: space-around;
                        flex-wrap: wrap;
                    }
                    .<?php echo $text_columns_card_deck_class; ?> .card {
                        border: 1px solid #ddd;
                        text-align: center;
                        /* padding: 10px; */
                        transition: .3s;
                    } 
                    .<?php echo $text_columns_card_deck_class; ?> .card:hover{
                        border: 1px solid var(--dark_blue);
                    } 
                    .<?php echo $text_columns_card_deck_class; ?> .card img {
                        margin-bottom: 10px;
                    } 
                    .<?php echo $text_columns_card_deck_class; ?> .card p {
                        margin-bottom: 0;
                    } 
            <?php } ?>

 




            @media screen and (max-width: 576px) {
                .<?php echo $text_columns_card_deck_class; ?> .card:first-child, .<?php echo $text_columns_card_deck_class; ?> .card:last-child {
                    padding: initial;  
                }
            }

            
        </style>
                      
               













    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->
