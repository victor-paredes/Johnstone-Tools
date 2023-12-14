<div class="col-12 pt-3 text-left"> <!-- start table -->
			
    <div class=" row table_wrap shadow"><!-- wrap -->


        <?php the_sub_field('table_intro'); ?>

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

                        <td class="table_subheader" style="background-color: <?php the_sub_field('bg_color'); ?>; color: <?php the_sub_field('text_color'); ?>;">
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
    }
    .table_header {
        background-color: #041e46;
        color: #fff;
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