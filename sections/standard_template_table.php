<div class="standard_template_table_wrap col-12 text-left <?php echo get_sub_field('css_classes'); ?>"> <!-- start table -->
			
    <div class="row table_wrap" style="border: 1px solid #ddd;"><!-- wrap -->



        <table class="table_noexpand" style="table-layout: <?php echo get_sub_field('column_layout'); ?>;">



            <?php
                while( have_rows('table_rows') ){ 
                the_row(); 
            ?>
                <tr class="">
 

                    <?php
                        while( have_rows('row_content') ){ 
                        the_row(); 
                    ?>

                        <td class="table_cell" style="background-color: <?php echo get_sub_field('bg_color'); ?>; color: <?php echo get_sub_field('text_color'); ?>; border-color: <?php echo get_sub_field('border_color'); ?>; text-align: <?php echo get_sub_field('text_align'); ?>; vertical-align: <?php echo get_sub_field('vertical_align'); ?>;">
                            <?php echo get_sub_field('cell_content'); ?>
                        </td>

                    <?php
                        } // END while( have_rows('accordion_content') )
                    ?>  



                </tr>
            <?php
                } // END while( have_rows('accordion_content') )
            ?>
            

        </table>
    </div> <!-- end wrap -->

</div><!-- end table -->





<style>
    .table_wrap {
        /* margin: 0 auto; */
        border-radius: .25rem;
        padding: 10px;
    }
    .table_noexpand { 
        padding: 0 15px 0 15px;
        width: 100%;
    } 
    .table_noexpand td {
        padding: 15px;
        border: 1px solid #eee;
        vertical-align: top;
    }
    .table_header {
        background-color: #041e46;
        color: #fff;
    }
    .table_cell img {
        width: 60%;
        padding-top: 5px;
        padding-bottom: 5px;
    }


    @media (max-width: 576px) {
        .table_cell img {
            width: 75%;
            padding-top: 5px;
            padding-bottom: 0;
        }

    }
    

    @media (max-width: 767px) { 
        .standard_template_table_wrap {
            margin-top: -20px;
        }
        .table_wrap * {
            font-size: 10px; 
        }
        .table_noexpand { 
            border-radius: 0.25rem;
        } 
        .table_noexpand td { 
            padding: 5px;
        }
        .table_cell {
            line-height: 0.85rem !important;
        }
    } 
</style>