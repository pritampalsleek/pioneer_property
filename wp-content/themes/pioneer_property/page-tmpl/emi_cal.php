<?php

/**
 * Template Name: EMI Calculator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pioneer_property
 */

get_header();

?>


<main>

    <!-- Inner hero section start -->
    <section class="inner_hero wo_hr_line">
        <div class="container-fluid px-0">
            <div class="common_wrapper px-0">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="banner" style="background-image: url(<?php echo $featured_image;?>)">
                            <div class="overlay"></div>
                            <div class="banner-content">
                                <h1><?php echo the_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner hero section end -->


    <!-- emi Section start -->
    <section class="emi_sec py-5">
        <div class="mod-content">
            <div class="mod-body">
                <div class="calculator">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="loan-form">
                                <div class="form-group">
                                    <div class="box">
                                        <label for="loan-amount"> Home Loan Amount </label>
                                        <div class="right">
                                            <p>₹</p>
                                            <input type="text" id="loan-amount-value" value="100000" />
                                        </div>
                                    </div>
                                    <input type="range" id="loan-amount" min="100000" max="20000000" step="10000"
                                        value="500000" />
                                </div>
                                <div class="form-group">
                                    <div class="box">
                                        <label for="loan-term"> Loan Tenure </label>
                                        <div class="right">
                                            <div class="tenure-switch">
                                                <input type="radio" id="tenure-years" name="tenure-type" value="Years"
                                                    checked />
                                                <label for="tenure-years">Yr</label>
                                                <input type="radio" id="tenure-months" name="tenure-type"
                                                    value="Months" />
                                                <label for="tenure-months">Mo</label>
                                            </div>
                                            <input type="text" id="loan-term-value" value="19" />
                                        </div>
                                    </div>

                                    <input type="range" id="loan-term" min="1" max="30" step="1" value="20" />
                                </div>
                                <div class="form-group">
                                    <div class="box">
                                        <label for="interest-rate"> Interest Rate </label>
                                        <div class="right">
                                            <p>%</p>
                                            <input type="text" id="interest-rate-value" value="" />
                                        </div>
                                    </div>
                                    <input type="range" id="interest-rate" min="1" max="20" step="0.1" value="7" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="results" class="results">
                                <h2>Detailed Calculations</h2>
                                <div class="calculation-item">
                                    <div class="label">EMI per Month</div>
                                    <div class="value" id="emi"></div>
                                </div>
                                <div class="calculation-item">
                                    <div class="label">Total Interest Payable</div>
                                    <div class="value" id="total-interest"></div>
                                </div>
                                <div class="calculation-item">
                                    <div class="label">Total Amount Payable</div>
                                    <div class="value" id="total-amount"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- emi section end -->
    </section>



</main>

<?php
get_footer();?>