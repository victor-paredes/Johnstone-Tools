<div class="pills_wrapper">






    <?php
        while( have_rows('pills_repeater') ){ 
            the_row(); 
    ?>


        <div class="pill_card_wrapper">
        <div class="pill_card">
            <div class="pill_image_wrapper">
                <img src="<?php echo get_sub_field('pill_image'); ?>">
            </div>
            <div class="pill_copy">
            <div class="pill_label">
                <?php echo get_sub_field('pill_label'); ?>
            </div>
            </div>
        </div>
        </div>


    <?php
        } // END while( have_rows('copy') )
    ?>

 





</div>


 
<style>
.pills_wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr; 
  grid-gap: 20px;
}
.pill_card_wrapper {
  padding: 10px;
  border: 1px solid #ddd;
  background-color: #fff;
  color: #fff;
  border-radius: .25rem;
  transition: .3s;
}
.pill_card_wrapper:hover {
  border-color: #bbb;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
}
.pill_image_wrapper {
  text-align: center;
}
.pill_image_wrapper img {
    height: 100px;
}
.pill_copy {
  text-align: center;
  color: #000;
}


</style>