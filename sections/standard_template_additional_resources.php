<div class="container-fluid  my-2 columnsCollectionContainer">
    <div class="container my-3">
        <div class="row">
            <div class="col-md">
                <div class="simple-content-container">







                    <style type="text/css">
                        .contain_js {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            padding: 5px, 30px;
                            margin: 30px;
                            text-align: center;
                        }
                        .addl-resources {
                            display: inline-block;
                            justify-content: center;
                            align-items: center;
                            border-left: 1px solid #fff;
                            width: 25%;
                            height: 90px;
                            padding-top: 12pt;
                            padding-bottom: 5pt;
                            padding-right: 10px;
                            padding-left: 10px;
                            margin: 0pt;
                            text-align: center;
                            background-color: #004990;
                        }
                        a.js {
                            color: #fff;
                            text-decoration: none;
                        }
                    </style>





                    <section class="contain_js">


                        <?php 
                            while( have_rows('resource') ){ 
                                the_row(); 
                        ?>
                            <div class="addl-resources">
                                <p style="font-family: Helvetica, Arial, sans-serif; color: #fff; font-weight: bold; font-size: 14pt;">
                                    <?php the_sub_field('resource_title'); ?>
                                </p>
                            </div>
                                
                        <?php
                            }
                        ?>


                        
                    </section>






                </div>
            </div>
        </div>
    </div>
</div>