
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





                        <div class="section">
                        <input type="radio" name="accordion-1" id="section-1" checked="checked"/>
                        <label for="section-1"><span>Messages</span></label>
                        <div class="content">
                            <ul>
                            <li><i class="fa fa-inbox"></i><span>Inbox</span></li>
                            <li><i class="fa fa-share"></i><span>Sent    </span></li>
                            <li><i class="fa fa-archive"></i><span>Archive</span></li>
                            </ul>
                        </div>
                 
                        
                    



            <?php
                } // END while( have_rows('accordion_content') )
            ?>



        </div>
    </div>
            


</div> <!-- standard_template_product_cards_wrap -->




<style>
    .left-menu {
  background: #222;
  width: 100%;
  /* position: absolute; */
  top: 0;
  bottom: 0;
}

.accordion {
  color: #FFF;
  width: 100%;
}
.accordion .section {
  width: 100%;
}
.accordion .section input[type='radio'] {
  display: none;
}
.accordion .section input[type='radio']:checked + label {
  background: #363636;
}
.accordion .section input[type='radio']:checked + label:before {
  content: " ";
  position: absolute;
  border-left: 3px solid #21CCFC;
  height: 100%;
  left: 0;
}
.accordion .section input[type='radio']:checked ~ .content {
  max-height: 300px;
  opacity: 1;
  z-index: 10;
  overflow-y: auto;
}
.accordion .section label {
  position: relative;
  cursor: pointer;
  padding: 10px 20px;
  display: table;
  background: #222222;
  width: 100%;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  -ms-transition: background 0.3s ease-in-out;
  transition: background 0.3s ease-in-out;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.accordion .section label:before {
  content: " ";
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  height: 1px;
  border-top: 1px solid #363636;
}
.accordion .section label:hover {
  background: #363636;
}
.accordion .section label span {
  display: table-cell;
  vertical-align: middle;
}
.accordion .section:last-of-type {
  border-bottom: 1px solid #363636;
}
.accordion .section .content {
  max-height: 0;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -ms-transition: all 0.4s;
  transition: all 0.4s;
  opacity: 0;
  position: relative;
  overflow-y: hidden;
}

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.accordion {
  font-size: 14px;
}
.accordion .section .content {
  padding: 0 15px;
}
.accordion .section input[type='radio'] {
  display: none;
}
.accordion .section input[type='radio']:checked ~ .content {
  padding: 15px;
}

ul {
  width: 100%;
  padding: 0;
  margin: 0;
  list-style: none;
}
ul li {
  padding: 10px;
}
ul li i {
  font-size: 13px;
  width: 15px;
  margin-right: 15px;
}
ul li:hover {
  cursor: pointer;
}
ul li:hover i {
  color: #21CCFC;
}

</style>


