<?php 
include('includes/header.php')
?>

<main>
   
    <!-- FAQ -->
    <div class="container-fluid faq p-0">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-1">FAQs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="accordionFAQ">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What are the Rules? <span class="material-icons" id="faq_arrow">expand_less</span>
                            </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                            <div class="card-body">
                                We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can I use a personal music device while cycling? <span class="material-icons" id="faq_arrow">expand_more</span>
                            </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                            <div class="card-body">
                                Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Can I use a personal music device while running? <span class="material-icons" id="faq_arrow">expand_more</span>
                            </button>
                            </h2>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                            <div class="card-body">
                                During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.
                                <ul class="faq-list">
                                    <li><span class="material-icons">stop_circle</span>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</li>
                                    <li><span class="material-icons">stop_circle</span>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>
                                    <li><span class="material-icons">stop_circle</span>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Do I need to wear a wetsuit? <span class="material-icons" id="faq_arrow">expand_more</span>
                            </button>
                            </h2>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                            <div class="card-body">
                                No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Do I have to use a road or racing bike? <span class="material-icons" id="faq_arrow">expand_more</span>
                            </button>
                            </h2>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFAQ">
                            <div class="card-body">
                                No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.
                                participants only.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php')?>
</main>

    </body>
</html>
