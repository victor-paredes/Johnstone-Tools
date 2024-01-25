<div class="pills_wrapper">






    <?php
        while( have_rows('pills_repeater') ){ 
            the_row(); 
    ?>

        <div class="">
            <?php echo get_sub_field('pill_label'); ?>
        </div>



    <?php
        } // END while( have_rows('copy') )
    ?>







</div>


 
<style>
    .pills_wrapper {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }
    .pills_wrapper div {
        width: 25%;
    }
</style>