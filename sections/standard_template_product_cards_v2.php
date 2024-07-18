pings

<?php
            while( have_rows('product_cards_v2') ){ 
                the_row(); 
        ?>


<?php echo get_sub_field('test_field'); ?>


<br>pong




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