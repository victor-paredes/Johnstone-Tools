
<div class="<?php the_sub_field('css_classes'); ?>" style="margin-top: 25px;">




  
<div class="accordion">



            <?php
                while( have_rows('accordion_content') ){ 
                    the_row(); 
            ?>


            

     
                
                <div class="" style="background-color: transparent; border: initial;">
              
                            <b><?php the_sub_field('accordion_item'); ?></b>
                            <br>
                            <?php the_sub_field('accordion_item_content'); ?>

                </div> <!-- END .card -->





                       

    <div class="accordion__item" tabindex="1">
      <div class="accordion__title">Title</div>
      <div class="accordion__content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ipsum mauris, laoreet in ipsum          vitae, efficitur dapibus lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus.        Duis tempus quam dolor, sagittis finibus velit auctor sed. Proin a ipsum id leo accumsan              laoreet. Nulla suscipit elit non risus tincidunt, 
      </div>

                        
                    



            <?php
                } // END while( have_rows('accordion_content') )
            ?>


</div>
 
            


</div> <!-- standard_template_product_cards_wrap -->




<style>
 

.accordion {
  width: 100%;
  border: 1px solid #eee;
}

.accordion__item {
  position: relative;
  width: 100%;
  cursor: pointer;
  border-bottom: 1px solid #eee;
  overflow: hidden;
}

.accordion__item:before,
.accordion__item:after {
  content: "";
  width: 15px;
  height: 3px;
  top: 30px;
  background-color: #c7c7c7;
  border-radius: 50px;
  position: absolute;
  transition: all 0.5s ease;
}

.accordion__item:before {
  right: 20px;
  transform: rotate(-45deg);
}

.accordion__item:after {
  right: 30px;
  transform: rotate(45deg);
}

.accordion__item:focus:before {
  transform: rotate(45deg);
}

.accordion__item:focus:after {
  transform: rotate(-45deg);
}

.accordion__item:focus {
  outline: 0;
  cursor: default;
  background: #fafafa;
}

.accordion__title {
  padding: 30px;
}

.accordion__title:hover {
  background: #fafafa;
}

.accordion__item:focus .accordion__title {
  font-weight: 600;
}

.accordion__content {
  border-top: 1px solid #eee;
  margin: 0px 30px;
  visibility: collapse;
  opacity: 0;
  height: 0;
  transform-origin: center center;
  transform: rotate3d(-1, 0, 0, 90deg);
  transition: all 0.3s ease;
}

.accordion__item:focus .accordion__content {
  height: auto;
  padding: 30px 0px;
  margin: 0px 30px;
  visibility: visible;
  transform: rotate3d(0, 0, 0, 0deg);
  opacity: 1;
}

</style>


