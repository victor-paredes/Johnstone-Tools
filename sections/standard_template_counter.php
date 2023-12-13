


<div class="col-12 pt-3" style="
     background-color: <?php the_sub_field('background_color'); ?>;
     border-radius: .25rem;
     <?php if(the_sub_field('background_image')) {
        echo 'background-image: url(' . the_sub_field('background_image') . ';' 
        } ?> 
     ">

    <?php the_sub_field('counter_copy'); ?>

    <div id="countDown" class="row justify-content-center text-light text-center">
        <div class="col-4 col-md-3 col-lg-2 px-1 px-md-3">
            <div class="bg-light border-radius-sm shadow" style="border-radius: .25rem;">
                <span class="days d-block text-darkblue text-4rem font-weight-bold countdown_class">&nbsp;</span>
                <strong class="d-block mt-n3 pb-3 text-secondary">Days</strong>
            </div> 
        </div>
        <div class="col-4 col-md-3 col-lg-2 px-1 px-md-3"> 
            <div class="bg-light border-radius-sm shadow" style="border-radius: .25rem;">
                <span class="hours d-block text-darkblue text-4rem font-weight-bold countdown_class">&nbsp;</span>
                <strong class="d-block mt-n3 pb-3 text-secondary">Hours</strong>
            </div>
        </div> 
        <div class="col-4 col-md-3 col-lg-2 px-1 px-md-3">
            <div class="bg-light border-radius-sm shadow" style="border-radius: .25rem;">
                <span class="minutes d-block text-darkblue text-4rem font-weight-bold countdown_class">&nbsp;</span>
                <strong class="d-block mt-n3 pb-3 text-secondary">Minutes</strong>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>

</div>


<script>
    const deadline = "<?php the_sub_field('date') ?>";
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
                    







<style>
    .countdown_class {
        font-size: 2.5rem;
        font-weight: 700!important;
        color: #062655;
    }
</style>













