ping

<?php
            while( have_rows('product_cards_v2') ){ 
                the_row(); 
        ?>









<!-- TABS NAV -->
<ul class="nav nav-tabs" role="tablist">
    <?php
            while( have_rows('tabs') ){ 
                the_row(); 
        ?>


    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="js_tab_0" data-bs-toggle="tab" href="#js_tabpanel_0" role="tab"
            aria-controls="js_tabpanel_0" aria-selected="true">

            <?php if ( get_sub_field('tab_label') ) { ?>
            <h6>
                <?php echo get_sub_field('tab_label'); ?>
            </h6>
            <?php } ?>

        </a>
    </li>

    <?php
            } // END while( have_rows('tabs') )
        ?>


</ul>











<!-- TABS CONTENT -->
<div class="js_product_tabs_content_wrapper tab-content" id="js_tab-content">

    <div class="tab-pane active" id="js_tabpanel_0" role="tabpanel">
        <h3>
            Residential
        </h3>
        <div class="js_product_card_wrapper">
            <?php include 'part_card.php';?>
            <?php include 'part_card.php';?>
            <?php include 'part_card.php';?>
            <?php include 'part_card.php';?>
            <?php include 'part_card.php';?>
        </div>
    </div>

    <div class="tab-pane" id="js_tabpanel_1" role="tabpanel">
        <h3>
            Commercial
        </h3>
        <div class="js_product_card_wrapper">
            <?php include 'part_card.php';?>
            <?php include 'part_card.php';?>
            <?php include 'part_card.php';?>
            <?php include 'part_card.php';?>
        </div>
    </div>

</div>





<?php
            } // END while( have_rows('product_cards_v2') )
        ?>









<script>
// Create a new style element
var style = document.createElement('style');
// Set the CSS styles as a string
style.innerHTML = `




  
<style>
/* JS PRODUCT CARDS variables */
:root {
    --js_product_card_wrapper_grid_columns: 1fr 1fr 1fr 1fr;
    --js_card_image_wrap_padding: 10px;
}



/* cards structure */
.js_product_tabs_content_wrapper h3 {
    margin: 30px 0 !important;
}

.js_product_card_wrapper {
    display: grid;
    grid-template-columns: var(--js_product_card_wrapper_grid_columns);
    grid-gap: 20px;
}

.js_product_card_wrapper h5 {
    margin-bottom: 0;
}


.js_card_image_wrap {
    padding: var(--js_card_image_wrap_padding);
}

.js_card_body ul {
    margin-left: -10;
}

.js_card_body ul li:first-child {
    margin-top: 10;
}

.js_card_body ul li {
    margin-bottom: 10;
}




@media screen and (max-width: 576px) {
    .js_product_card_wrapper {
        grid-template-columns: 1fr !important;
    }
}

@media screen and (max-width: 992px) {
    .js_product_card_wrapper {
        grid-template-columns: 1fr 1fr;
    }
}

@media screen and (min-width: 1200px) {
    /* */
}
</style>
  
  
  
  
  
  
`;

// Append the style element to the head of the document
document.head.appendChild(style);
</script>