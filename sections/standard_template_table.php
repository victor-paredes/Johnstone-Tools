<div class="col-12 pt-3 text-left"> <!-- start table -->
			
    <div class=" row table_wrap shadow"><!-- wrap -->
        <table class="table_noexpand">



            <?php
                while( have_rows('table_rows') ){ 
                the_row(); 
            ?>
                <tr class="">


                    <?php
                        while( have_rows('row_content') ){ 
                        the_row(); 
                    ?>

                        <td class="border-bottom border-right table_subheader" style="background-color: <?php the_sub_field('bg_color'); ?>">
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
        border: solid 1px #dfdfdf;
        border-radius: .25rem;
        padding: 2vw;
    }
    .table_noexpand { 
        border-radius: 0.25rem;
        padding: 0 15px 0 15px;
        width: 100%;
    }
    .table_noexpand td {
        padding: 15px;
    }
    .table_header {
        background-color: #041e46;
        color: #fff;
    }
</style>