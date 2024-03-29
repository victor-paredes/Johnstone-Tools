
<div class="<?php the_sub_field('css_classes'); ?>">




  


  <div class="accordion">



              <?php
                  while( have_rows('accordion_content') ){ 
                      the_row(); 
              ?>

                <div class="accordion__item" tabindex="1">
                  <div class="accordion__title">
                    <b><?php the_sub_field('accordion_item'); ?></b>
                  </div>
                  <div class="accordion__content">
                    <?php the_sub_field('accordion_item_content'); ?>
                  </div>
                </div>

              <?php
                  } // END while( have_rows('accordion_content') )
              ?>


  </div>

</div>



            







<style>
.accordion {
  width: 100%;
  border-width: 0;
  border-top: 1px solid #eeeeee;
  border-left: 1px solid #eeeeee;
  border-right: 1px solid #eeeeee;
  border-radius: .25rem;
}
 
.accordion__item {
  position: relative;
  width: 100%;
  cursor: pointer;
  border-bottom: 1px solid #eee;
  overflow: hidden;
  border-radius: .25rem;
  transition: all 0.5s ease;
}

.accordion__item:before,
.accordion__item:after {
  content: "";
  width: 15px;
  height: 2px;
  top: 25px;
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
  padding-top: 30px;
  padding-bottom: 30px;
  outline: 0;
  cursor: default;
  background: #003363;
  background-image: url(https://victorpared.es/js/wp-content/uploads/2023/12/blue_bg_dark.jpg);
  background-size: cover;
} 
.accordion__item:focus .accordion__title {
  color: #25aff3;
}
.accordion__item:focus .accordion__content {
  color: #fff;
}
.accordion__item:focus .accordion__content a {
  color: #25aff3 !important;
}

.accordion__title {
  padding: 20px 60px 20px 50px;
  transition: all 0.5s ease;
  line-height: 1.4rem;
} 

/* .accordion__title:hover {
  background: #fafafa;
} */


.accordion__item:focus .accordion__title {
  /* font-weight: 600; */
}

.accordion__content {
  padding: 0 60px 0 50px;
  /* border-top: 1px solid #eee; */
  /* margin: 0px 30px;  */
  visibility: collapse;
  opacity: 0;
  height: 0;
  transform-origin: center center;
  transition: all 0.3s ease;
  font-weight: initial;
  line-height: 1.4rem;
}

.accordion__item:focus .accordion__content {
  height: auto;
  /* padding: 0 0 30px 0; */
  visibility: visible;
  transform: rotate3d(0, 0, 0, 0deg);
  opacity: 1;
}




@media screen and (max-width: 576px) {
  .accordion__title {
    padding: 10px 60px 10px 30px;
  } 
  .accordion__content {
    padding: 0 60px 0 30px;
  }
}
</style>


