<?php
/*
Template Name: A2L
Template Post Type: landing-page
*/

// echo the_content(); ?>

<?php wp_head(); ?>

<?php 
get_template_part( 'parts/a2l_header' ); ?>


<div class="">




        <div id="COPY_THIS_CONTAINER_TO_BLOOMREACH">


            
        







        <div class="container-fluid bg-darkblue-img mb-n5">
	<div class="container">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-dark pl-0" id="mainNav">
				<a class="navbar-brand" href="index.html"><strong>A2L Countdown</strong> <span id="presentedBy" class="d-block mt-n1">Presented by Johnstone Supply</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
						<ul class="navbar-nav text-right text-lg-center">
							<li class="nav-item px-4 active">
								<a class="nav-link text-light" href="about.html">Equipment</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link text-light" href="support.html">Refrigerant</a>
							</li>
							<li class="nav-item px-4">
								<a class="nav-link text-light" href="support.html">Low Spark Tools</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 mt-lg-5 mb-lg-3 pt-lg-5 pb-lg-2">
				<h1 class="text-light mt-5 mb-4"><strong>Changes are coming to <br class="d-none d-lg-block">your region.</strong></h1>
				<p class="lead text-light text-1rem mb-4">Lorem ipsum...</p>
				<p class="mb-2"><span class="badge badge-warning mr-2">NEW</span> <a href="about.html#inventory" class="text-light">Compliance for Existing Inventory →</a></p>
				<p class="mb-4"><span class="badge badge-warning mr-2">NEW</span> <a href="https://web.archive.org/web/20220811051637/https://go.bluevolt.com/johnstonecontractor/s/coursedetail/386741/supplier-webinar-recording--coleman-2023-seer2-information" class="text-light" rel="noopener" target="_blank">Coleman Webinar Recording →</a></p>
				<a href="#" id="scrollToMap" class="btn btn-lg btn-light btn-rounded text-lightblue font-weight-bolder" role="button">Find your region</a>
			</div>
			<div class="col-12 col-lg-6 mt-lg-5 mb-lg-3 pt-lg-5 pb-lg-2">
				<div class="embed-responsive embed-responsive-16by9 mt-5">
					<iframe class="embed-responsive-item" src="https://web.archive.org/web/20220811051637if_/https://www.youtube.com/embed/AOECX5zu7OE?rel=0" title="2023 Energy Efficiency Regulations" allowfullscreen="" data-ruffle-polyfilled=""></iframe>
				</div>
			</div>
			<div class="col-12 pt-4 mt-3 text-center">
				<h1 class="text-yellow font-weight-bold">Are you ready?</h1>
				<p class="text-light">All HVAC systems must be SEER2 certified in:</p>
				<div id="countDown" class="row justify-content-center text-light">
					<div class="col-4 col-md-3 col-lg-2 px-1 px-md-3">
						<div class="bg-light border-radius-sm shadow">
							<span class="days d-block text-darkblue text-4rem font-weight-bold">143</span>
							<strong class="d-block mt-n3 pb-3 text-secondary" style="color:#5A5B64;">Days</strong>
						</div>
					</div>
					<div class="col-4 col-md-3 col-lg-2 px-1 px-md-3">
						<div class="bg-light border-radius-sm shadow">
							<span class="hours d-block text-darkblue text-4rem font-weight-bold">01</span>
							<strong class="d-block mt-n3 pb-3 text-secondary">Hours</strong>
						</div>
					</div>
					<div class="col-4 col-md-3 col-lg-2 px-1 px-md-3">
						<div class="bg-light border-radius-sm shadow">
							<span class="minutes d-block text-darkblue text-4rem font-weight-bold">42</span>
							<strong class="d-block mt-n3 pb-3 text-secondary">Minutes</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>








COUNTER































            
        </div> <!-- end COPY_THIS_CONTAINER_TO_BLOOMREACH -->


        



</div> <!-- end -->


<br><br><br><br>

<div id="js_tools_wrap">
    <center>
        <button id="copyButton">
            Copy BR Code
        </button>
    </center>
</div>

<script>
    // copy content to clipboard
    document.addEventListener('DOMContentLoaded', function() {
    const copyButton = document.getElementById('copyButton');
    const container = document.getElementById('COPY_THIS_CONTAINER_TO_BLOOMREACH');

    copyButton.addEventListener('click', function() {
        if (container) {
        const htmlContent = container.outerHTML;

        const tempTextArea = document.createElement('textarea');
        tempTextArea.value = htmlContent;

        document.body.appendChild(tempTextArea);
        tempTextArea.select();

        try {
            const success = document.execCommand('copy');
            if (success) {
            console.log('Content and surrounding HTML copied to clipboard');
            alert("😎 Code copied to clipboard!");
            } else {
            console.error('Copying failed');
            }
        } catch (err) {
            console.error('Error copying to clipboard:', err);
        }

        document.body.removeChild(tempTextArea);
        } else {
        console.error('Container element not found');
        }
    });
    });
</script>



<?php

the_content();

// get_template_part( 'parts/js_footer' );

wp_footer();

