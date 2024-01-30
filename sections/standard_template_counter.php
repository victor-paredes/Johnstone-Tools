


<div class="counter_wrap col-12 pt-5 pb-4" style="
     background-color: <?php echo get_sub_field('background_color'); ?>;
     border-radius: .25rem;
     background-image: url(<?php echo get_sub_field("background_image") ?>);
     background-size: cover;
     ">
 
    <?php echo get_sub_field('counter_copy'); ?>

    <center>
        <div id="countDown" class="pt-3 row justify-content-center text-light text-center">
            <div class="col-4 col-md-3 col-lg-2 px-1 px-md-3">
                <div class="bg-light border-radius-sm shadow" style="border-radius: .25rem;">
                    <span class="days d-block text-darkblue text-4rem countdown_class">&nbsp;</span>
                    <span class="d-block mt-n2 pb-3 text-secondary">Days</span>
                </div> 
            </div>
            <div class="col-4 col-md-3 col-lg-2 px-1 px-md-3"> 
                <div class="bg-light border-radius-sm shadow" style="border-radius: .25rem;">
                    <span class="hours d-block text-darkblue text-4rem countdown_class">&nbsp;</span>
                    <span class="d-block mt-n2 pb-3 text-secondary">Hours</span>
                </div>
            </div> 
            <div class="col-4 col-md-3 col-lg-2 px-1 px-md-3">
                <div class="bg-light border-radius-sm shadow" style="border-radius: .25rem;">
                    <span class="minutes d-block text-darkblue text-4rem countdown_class">&nbsp;</span>
                    <span class="d-block mt-n2 pb-3 text-secondary">Minutes</span>
                </div>
            </div>
        </div>  
    </center>

    <p>&nbsp;</p>

</div>








<style>
    .countdown_class {
        font-size: 2.5rem;
        font-weight: 700!important;
        color: #062655;
    }

    @media screen and (max-width: 992px) {
        #countDown {
            width: 100% !important;
            padding-top: 0;
        }
    }
</style>







<script>
    const deadline = "<?php echo get_sub_field('date') ?>";
    initializeClock('countDown', deadline);

    function getTimeRemaining(endtime) {
        const total = Date.parse(endtime) - Date.parse(new Date());
        const seconds = Math.floor((total / 1000) % 60);
        const minutes = Math.floor((total / 1000 / 60) % 60);
        const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
        const days = Math.floor(total / (1000 * 60 * 60 * 24));
        return {
            total,
            days,
            hours,
            minutes,
            seconds
        };
    }
    function initializeClock(id, endtime) {
        const clock = document.getElementById(id);
        const daysSpan = clock.querySelector('.days');
        const hoursSpan = clock.querySelector('.hours');
        const minutesSpan = clock.querySelector('.minutes');
        //const secondsSpan = clock.querySelector('.seconds');
        function updateClock() {
            const t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            //secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }
        updateClock();
        const timeinterval = setInterval(updateClock, 1000);

    }
</script>
                    



















