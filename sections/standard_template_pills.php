<div class="pills_wrapper">






    <?php
        while( have_rows('pills_repeater') ){ 
            the_row(); 
    ?>


        <div class="pill_card_wrapper">

            <?php if ( get_sub_field('pill_link') != '' ) { ?>
              <a class="pill_card" href="<?php echo get_sub_field('pill_link'); ?>" target="_blank">
            <?php } else { ?>
              <div class="pill_card">
            <?php } ?>


                <div class="pill_image_wrapper" style="background-color:<?php echo get_sub_field('pill_image_background'); ?>">
                    <img src="<?php echo get_sub_field('pill_image'); ?>">
                </div>

                <div class="pill_copy">
                    <div class="pill_label">
                        <?php echo get_sub_field('pill_label'); ?>
                    </div>
                </div>
              
                
            <?php if ( get_sub_field('pill_link') != '' ) { ?>
              </a>
            <?php } else { ?>
              </div>
            <?php } ?>

        </div>


    <?php
        } // END while( have_rows('copy') )
    ?>

 

 

 

</div>


 
<style>



.pills_wrapper {
  margin-bottom: 60px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr; 
  grid-gap: 20px;
}
.pill_card_wrapper {
  padding: 10px;
  border: 1px solid #ddd;
  background-color: #fff;
  border-radius: .25rem;
  transition: .4s;
  cursor: pointer;
}
.pill_card_wrapper:hover {
  border-color: #bbb;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
  transition: .15s;
}
.pill_card_wrapper:hover * {
    text-decoration: none !important;
}
.pill_image_wrapper {
    margin-bottom: 10px;
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: .25rem;
}
.pill_image_wrapper img {
    max-width: 100%;
    max-height: 75px;
}
.pill_copy {
  text-align: center;
  color: #000; 
}
.pill_copy a { 
    color: #000; 
}







@media screen and (max-width: 992px) {
  .pills_wrapper {
    grid-template-columns: 1fr 1fr 1fr; 
  }
} 
@media screen and (max-width: 576px) {
  .pills_wrapper {
    grid-template-columns: 1fr 1fr; 
    grid-gap: 10px;
  }
}







</style> 