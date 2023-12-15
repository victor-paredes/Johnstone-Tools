<div class="col-12 pt-3 text-left <?php the_sub_field('css_classes'); ?>"> <!-- start table -->
			
    <div class=" row table_wrap shadow"><!-- wrap -->

        <img src="https://victorpared.es/js/wp-content/uploads/2023/11/what_is_a2l_refrigerant.jpg">

        <table class="table_noexpand" style="table-layout: <?php the_sub_field('column_layout'); ?>;">



            <?php
                while( have_rows('table_rows') ){ 
                the_row(); 
            ?>
                <tr class="">
 

                    <?php
                        while( have_rows('row_content') ){ 
                        the_row(); 
                    ?>

                        <td class="table_subheader" style="background-color: <?php the_sub_field('bg_color'); ?>; color: <?php the_sub_field('text_color'); ?>; border-color: <?php the_sub_field('border_color'); ?>;">
                            <?php the_sub_field('cell_content'); ?>
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
    .table_wrap img {
        aspect-ratio: initial !important;
        width: 100%;
    }

    @media (max-width: 767px) { 
        .table_wrap * {
            font-size: 10px;
        }
        .table_noexpand { 
            border-radius: 0.25rem;
        } 
        .table_noexpand td { 
            padding: 5px;
        }
    } 
</style>