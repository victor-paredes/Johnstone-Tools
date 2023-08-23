
<div class="standard_template_product_cards_wrap">
    <div class="card-deck">

    










        <?php
            while( have_rows('product_cards') ){ 
                the_row(); 
        ?>
                
                








                <div class="card">


                    <div align="center" style="min-height:260px">
                        <?php if ( get_sub_field( 'featured' ) == true) { ?>
                            <h4 style="background-color: #1F3962; color: #fff">
                                Featured Product
                            </h4>
                        <?php } ?>

                        <a href="https://www.johnstonesupply.com/product-view?pID=H28-669">
                            <img src="<?php the_sub_field('image_url'); ?>" style="width: 80%" /> 
                        </a>
                    </div>


                    <div class="card-body d-flex flex-column">
                        <h5 class="text-darkblue" style="text-align: center;">
                            <?php the_sub_field('product_title'); ?>
                        </h5>
                        
                        <h6>Quiestest* standard PTAC you can buy</h6>
                        
                        <ul>
                            <li>Up to 15,000 Btus</li>
                            <li>R32 Models (CA Compliant)</li>
                            <li>208/230V &amp; 265V models</li>
                            <li>Electric Heat and Heat Pump, up to 13.0 EER</li>
                            <li>Universal power cords enable properties to select the appropriate heater size</li>
                            <li>Diamonblue Advanced Corrosion Protection®</li>
                            <li>Onboard Controls</li>
                        </ul>
                        
                        <p style="margin:0in 0in 8pt"><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="line-height:107%"></span></span></span></span></span></p>
                        <a class="btn btn-primary mt-auto" href="https://www.johnstonesupply.com/search/go?w=B76-099,%20B76-100,%20B76-101,%20B76-102,%20B76-107,%20B76-108,%20B76-109,%20B76-110,%20B76-103,%20B76-111,%20B76-104,%20B76-112,%20B76-105,%20B76-113,%20B76-106,%20B76-114" role="button" target="_blank">
                            Learn More 
                        </a>
                    </div>


                </div> <!-- END .card -->


















        <?php
            } // END while( have_rows('product_cards') )
        ?>


            
                
            
                    



     

     

                














    </div> <!-- card-deck -->
</div> <!-- standard_template_product_cards_wrap -->