<?php
/*
Template Name: A2L Equipment
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
				<h1 class="text-light mt-5 mb-4"><strong>Equipment</strong></h1>
				
					<h2 class="text-light">Technology Transition Rule: </h2>

					<p class="lead text-light text-1rem mb-4">
					The Environmental Protection Agency has issued a new rule restricting the use of High GWP refrigerants (HFCs) in HVAC and Refrigerant Equipment. This means that the current refrigerant is being phased out and replaced with two new more globally friendly substitutes. Along with the new refrigerant changes your equipment will also experience a change. Most important of the changes is there is a no sell-through date, for all regions, of current R-410A HVAC equipment. Additionally, are three important aspects that you will need to know about this new rule. 
</p>

					<p class="text-light text-1rem mb-4">
					There are three important aspects of the new Technology Transition Rule:
</p>	

					<ol>
						<li class="text-light">
							Refrigerant Changes-Low GWP Systems and A2L Refrigerant
						</li>	
						<li class="text-light">
							Categories-Products, Systems, Components 
						</li>
						<li class="text-light">
							Equipment Mitigation Requirements-No sell through R410A systems
						</li>
					</ol>
				
				











				<!-- <p class="mb-2"><span class="badge badge-warning mr-2">NEW</span> <a href="about.html#inventory" class="text-light">Compliance for Existing Inventory →</a></p>
				<p class="mb-4"><span class="badge badge-warning mr-2">NEW</span> <a href="https://web.archive.org/web/20220811051637/https://go.bluevolt.com/johnstonecontractor/s/coursedetail/386741/supplier-webinar-recording--coleman-2023-seer2-information" class="text-light" rel="noopener" target="_blank">Coleman Webinar Recording →</a></p>
				<a href="#" id="scrollToMap" class="btn btn-lg btn-light btn-rounded text-lightblue font-weight-bolder" role="button">Find your region</a> -->




			</div>
			<div class="col-12 col-lg-6 mt-lg-5 mb-lg-3 pt-lg-5 pb-lg-2">
				<div class="embed-responsive embed-responsive-16by9 mt-5">
					<iframe class="embed-responsive-item" src="https://web.archive.org/web/20220811051637if_/https://www.youtube.com/embed/AOECX5zu7OE?rel=0" title="2023 Energy Efficiency Regulations" allowfullscreen="" data-ruffle-polyfilled=""></iframe>
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


<style>
	.bg-darkblue-img {
    background: #062655 url(https://seer2.com/img/bg-contractor-installing-thermostat.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
/* .text-light, .text-light * {
	color: #fff !important;
} */
	</style>


<?php

the_content();

// get_template_part( 'parts/js_footer' );

wp_footer();

