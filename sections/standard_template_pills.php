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
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr; 
        grid-gap: 10px;
    }
    .pill_card_wrapper {
    
    }
    .pill_card_wrapper {
        padding: 10px;
        border: 1px solid #000;
        background-color: #555;
        color: #fff;
        border-radius: .25rem;
    }

</style>