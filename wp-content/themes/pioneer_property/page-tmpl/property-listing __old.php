<?php
/**
 * Template Name: Property Listing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-files
 *
 * @package Pioneer_property
 */

get_header();
global $post;

?>


<main>
    <!-- Inner hero section start -->
    <section class="inner_hero">
        <div class="container-fluid px-0">
            <div class="common_wrapper px-0">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <div class="banner" style="background-image: url(<?php echo $featured_image;?>)">
                            <div class="overlay"></div>
                            <div class="breadcrumb">
                                <ul>
                                    <li><a href="#">India Property</a></li>
                                    <li><a href="#">Property in Kolkata</a></li>
                                    <li><a href="#">Properties For Sale In Kolkata</a></li>
                                    <li><a href="#">One Victoria</a></li>
                                </ul>
                            </div>
                            <div class="banner-content">
                                <h1>Kolkata</h1>
                                <div class="actions">
                                    <ul>
                                        <li><a href="#">Enquire for home loan</a></li>
                                        <li></li>
                                        <li><a href="#">get offer</a></li>
                                    </ul>
                                </div>
                                <!-- <p>Last updated: 10-Jul-2024</p> -->
                            </div>
                            <ul class="action_links">
                                <li><a href="#">Trending properties</a></li>
                                <li><a href="#">new launches</a></li>
                                <li><a href="#">rate reckoner</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner hero section end -->

    <!-- Listing section start -->
    <section class="listing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="filter_ul">
                        <li class="filter_li">
                            <div class="select_box">
                                <div class="logo_box">
                                    <img src="<?php echo get_template_directory_uri();?>/images/bed.png" alt="" />
                                </div>
                                <select name="" id="" class="nice_select more_option">
                                    <option value="">Property type</option>
                                    <option value="">Option 2</option>
                                    <option value="">Option 3</option>
                                </select>
                            </div>
                        </li>
                        <li class="filter_li budget">
                            <div class="select_box" id="budget_box">
                                <div class="logo_box">
                                    <img src="<?php echo get_template_directory_uri();?>/images/budget.png" alt="" />
                                </div>
                                <select name="" id="" class="nice_select more_option">
                                    <option value="">Budget</option>
                                    <!-- <option value="">Option 2</option>
                      <option value="">Option 3</option> -->
                                </select>
                            </div>
                            <div class="slider_box">
                                <div class="form-group">
                                    <label for="loan-amount">Amount (INR):
                                        <span id="loan-amount-value">500000</span></label>
                                    <input type="range" id="loan-amount" min="100000" max="10000000" step="10000"
                                        value="500000" />
                                </div>
                            </div>
                        </li>
                        <li class="filter_li">
                            <div class="select_box">
                                <div class="logo_box">
                                    <img src="<?php echo get_template_directory_uri();?>/images/home.png" alt="" />
                                </div>
                                <select name="" id="" class="nice_select more_option">
                                    <option value="">Property status:</option>
                                    <option value="">Option 2</option>
                                    <option value="">Option 3</option>
                                </select>
                            </div>
                        </li>
                        <li class="filter_li">
                            <div class="select_box">
                                <div class="logo_box">
                                    <img src="<?php echo get_template_directory_uri();?>/images/location.png" alt="" />
                                </div>
                                <select name="" id="" class="nice_select more_option">
                                    <option value="">Location/Zone</option>
                                    <option value="">Option 2</option>
                                    <option value="">Option 3</option>
                                </select>
                            </div>
                        </li>
                        <li class="filter_li">
                            <div class="select_box">
                                <div class="logo_box">
                                    <img src="<?php echo get_template_directory_uri();?>/images/filter.png" alt="" />
                                </div>
                                <button id="more_option" class="more_option">
                                    More filter:
                                </button>
                            </div>
                        </li>
                        <span class="span"><span><img src="<?php echo get_template_directory_uri();?>/images/reload.png"
                                    alt="" /></span>reset</span>
                        <div class="more_filter_card">
                            <div class="row">
                                <!-- Project Status -->
                                <div class="col-md-3">
                                    <h5>Project Status</h5>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="new-launch" />
                                        <label class="form-check-label" for="new-launch">New Launch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="under-construction" />
                                        <label class="form-check-label" for="under-construction">Under
                                            Construction</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ready-to-move-in" />
                                        <label class="form-check-label" for="ready-to-move-in">Ready to Move In</label>
                                    </div>
                                </div>
                                <!-- Property Type -->
                                <div class="col-md-3">
                                    <h5>Property Type</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apartments" />
                                        <label class="form-check-label" for="apartments">Apartments</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="villa" />
                                        <label class="form-check-label" for="villa">Villa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="banglow" />
                                        <label class="form-check-label" for="plots">Banglow</label>
                                    </div>
                                </div>
                                <!-- Bathrooms -->
                                <div class="col-md-3">
                                    <h5>Bedrooms</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="bathrooms-1" />
                                        <label class="form-check-label" for="bathrooms-1">1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="bathrooms-2" />
                                        <label class="form-check-label" for="bathrooms-2">2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="bathrooms-3" />
                                        <label class="form-check-label" for="bathrooms-3">3+</label>
                                    </div>
                                </div>
                                <!-- Area (sqft) -->
                                <div class="col-md-3">
                                    <h5>Area (sqft)</h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="min-area" class="form-label min">Minimum</label>
                                                <ul>
                                                    <li>250 sq ft</li>
                                                    <li>250 sq ft</li>
                                                    <li>500 sq ft</li>
                                                    <li>1000 sq ft</li>
                                                    <li>1500 sq ft</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="max-area" class="form-label min">Maximum</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="head_box">
                    <div class="col-md-8">
                        <div class="list_head">
                            <h2>Property for Sale in Kolkata</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select name="" id="" class="areas nice_select short_by">
                            <option value="">Sort by</option>
                            <option value="">Relevance</option>
                            <option value="">Price: Low</option>
                            <option value="">Price: High</option>
                            <option value="">Possession Date</option>
                        </select>
                    </div>
                </div>
            </div>



            <?php 
            if (isset($_GET['location']) && isset($_GET['category']) && isset($_GET['prop_name'])) { 
                $prop_location = sanitize_text_field($_GET['location']);
                $prop_category = sanitize_text_field($_GET['category']);
                $prop_name = sanitize_text_field($_GET['prop_name']);
                ?>

            <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'property',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    if (!empty($prop_location)) {
                        $args['meta_query'][] = array(
                            'key' => 'main_location',
                            'value' => $prop_location,
                            'compare' => '=',
                        );
                    }

                    if (!empty($prop_name)) {
                        $args['s'] = $prop_name;
                    }

                    // if (!empty($prop_name)) {
                    //     $args['meta_query'][] = array(
                    //         'key' => 'property_location',
                    //         'value' => $prop_name,
                    //         'compare' => 'LIKE',
                    //     );
                    // }

                    if (!empty($prop_category)) {
                        $args['tax_query'][] = array(
                            'taxonomy' => 'property-category',
                            'field' => 'slug',
                            'terms' => $prop_category,
                        );
                    }

                    $property_query = new WP_Query($args);

                    if ($property_query->have_posts()) {
                        while ($property_query->have_posts()) {
                            $property_query->the_post();
                            ?>

                <div class="col-md-6 mb-4">
                    <div class="listing_card">
                        <div class="img_box">
                            <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <img src="<?php echo $featured_image;?>" alt="" />
                            <!-- Featured And Sale SHOW Section Start -->
                            <!-- <?php 
                                $prop_tag = get_field('property_tag',$post->ID);
                                if ($prop_tag) {
                                    if (in_array('Featured', $prop_tag)) { ?>
                            <span class="featured"><?php echo 'Featured'; ?></span>
                            <?php }
                                    if (in_array('Sale', $prop_tag)) { ?>
                            <span class="sales"><?php echo 'Sale'; ?></span>
                            <?php }
                                } ?> -->
                            <!-- Featured And Sale SHOW Section End -->
                        </div>
                        <div class="cont_box">
                            <div class="top">
                                <span class="prop_name"><?php the_title();?></span>
                                <?php
                                    $Price = get_field('property_price', $post->ID);
                                    if ($Price) { 
                                        $min_price = $Price['min_price'];
                                        $max_price = $Price['max_price'];

                                        if ($min_price >= 10000000) {
                                            $min_price_formatted = number_format($min_price / 10000000, 2) . ' cr';
                                        } elseif ($min_price >= 100000) {
                                            $min_price_formatted = number_format($min_price / 100000, 2) . ' lakh';
                                        } elseif($min_price >= 1000) {
                                            $min_price_formatted = number_format($min_price / 1000, 2) . ' K';
                                        }

                                        if ($max_price >= 10000000) {
                                            $max_price_formatted = number_format($max_price / 10000000, 2) . ' cr';
                                        } elseif ($max_price >= 100000) {
                                            $max_price_formatted = number_format($max_price / 100000, 2) . ' lakh';
                                        } elseif($max_price >= 1000) {
                                            $max_price_formatted = number_format($max_price / 1000, 2) . ' K';
                                        }
                                        ?>
                                <span class="prop_price">
                                    ₹ <?php if($min_price_formatted) { echo $min_price_formatted; } ?> -
                                    <?php if($max_price_formatted) { echo $max_price_formatted; } ?>
                                </span>
                                <!-- <span class="prop_price">₹56 lakh - 95 lakh</span> -->

                                <?php } ?>
                            </div>
                            <p class="prop_dev"><?php echo get_field('property_contractor_name',$post->ID);?></p>
                            <?php $rera_no = get_field('property_rera_no',$post->ID);
                                if($rera_no){ ?>
                            <span class="prop_rera">RERA No.: <?php echo $rera_no; ?></span>
                            <?php } ?>
                            <?php 
                                $main_loc_value = get_field('main_location');
                                if ($main_loc_value) { ?>
                            <p><i class="fa-solid fa-location-dot me-2"></i><?php echo $main_loc_value; ?></p>
                            <?php } ?>

                            <?php $poss_date = get_field('possession_date',$post->ID);
                            if($poss_date) { 
                                $date = DateTime::createFromFormat('d/m/Y', $poss_date);
                                $formatted_date = $date->format('jS F Y');?>
                            <span class="capsule">Possession Date: <?php echo $formatted_date;?></span>
                            <?php } ?>

                            <div class="details_box">
                                <div class="details">
                                    <span>3BHK + 3T</span><span>2366 sqft</span><span>₹56 lakh</span>
                                </div>
                                <div class="details">
                                    <span>3BHK + 3T</span><span>2366 sqft</span><span>₹56 lakh</span>
                                </div>
                            </div>
                            <div class="button_box d-flex">
                                <a href="<?php the_permalink();?>" class="in_btn in_btn_2">view details</a>
                                <button class="in_btn ms-3"><i class="fa-solid fa-phone"></i>get call back</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } 
                    wp_reset_postdata();
                    
                } else {
                    echo '<p>No properties found.</p>';
                } ?>
            </div>

            <?php } else { ?>

            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'property',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $Property = new WP_Query($args);

                if ($Property->have_posts()) {
                    while ($Property->have_posts()) {
                        $Property->the_post(); ?>

                <div class="col-md-6 mb-4">
                    <div class="listing_card">
                        <div class="img_box">
                            <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <img src="<?php echo $featured_image;?>" alt="" />
                            <!-- Featured And Sale SHOW Section Start -->
                            <!-- <?php 
                                $prop_tag = get_field('property_tag',$post->ID);
                                if ($prop_tag) {
                                    if (in_array('Featured', $prop_tag)) { ?>
                            <span class="featured"><?php echo 'Featured'; ?></span>
                            <?php }
                                    if (in_array('Sale', $prop_tag)) { ?>
                            <span class="sales"><?php echo 'Sale'; ?></span>
                            <?php }
                                } ?> -->
                            <!-- Featured And Sale SHOW Section End -->
                        </div>
                        <div class="cont_box">
                            <div class="top">
                                <span class="prop_name"><?php the_title();?></span>

                                <?php
                                    $Price = get_field('property_price', $post->ID);
                                    if ($Price) { 
                                        $min_price = $Price['min_price'];
                                        $max_price = $Price['max_price'];

                                        if ($min_price >= 10000000) {
                                            $min_price_formatted = number_format($min_price / 10000000, 2) . ' cr';
                                        } elseif ($min_price >= 100000) {
                                            $min_price_formatted = number_format($min_price / 100000, 2) . ' lakh';
                                        } elseif($min_price >= 1000) {
                                            $min_price_formatted = number_format($min_price / 1000, 2) . ' K';
                                        }

                                        if ($max_price >= 10000000) {
                                            $max_price_formatted = number_format($max_price / 10000000, 2) . ' cr';
                                        } elseif ($max_price >= 100000) {
                                            $max_price_formatted = number_format($max_price / 100000, 2) . ' lakh';
                                        } elseif($max_price >= 1000) {
                                            $max_price_formatted = number_format($max_price / 1000, 2) . ' K';
                                        }
                                        ?>
                                <span class="prop_price">
                                    ₹ <?php if($min_price_formatted) { echo $min_price_formatted; } ?> -
                                    <?php if($max_price_formatted) { echo $max_price_formatted; } ?>
                                </span>
                                <!-- <span class="prop_price">₹56 lakh - 95 lakh</span> -->

                                <?php } ?>


                            </div>
                            <p class="prop_dev"><?php echo get_field('property_contractor_name',$post->ID);?></p>
                            <?php $rera_no = get_field('property_rera_no',$post->ID);
                                if($rera_no){ ?>
                            <span class="prop_rera">RERA No.: <?php echo $rera_no; ?></span>
                            <?php } ?>
                            <?php 
                            $property_map_value = get_field('main_location',$post->ID);
                            if($property_map_value) { ?>
                            <p>
                                <i class="fa-solid fa-location-dot me-2"></i><a
                                    href="#"><?php echo $property_map_value;?></a>
                            </p>
                            <?php } ?>
                            <?php $poss_date = get_field('possession_date',$post->ID);
                            if($poss_date) { 
                                $date = DateTime::createFromFormat('d/m/Y', $poss_date);
                                $formatted_date = $date->format('jS F Y');?>
                            <span class="capsule">Possession Date: <?php echo $formatted_date;?></span>
                            <?php } ?>
                            <!-- <div class="details_box">
                                <div class="details">
                                    <span>3BHK + 3T</span><span>2366 sqft</span><span>₹56 lakh</span>
                                </div>
                                <div class="details">
                                    <span>3BHK + 3T</span><span>2366 sqft</span><span>₹56 lakh</span>
                                </div>
                            </div> -->
                            <div class="button_box d-flex">
                                <a href="<?php the_permalink();?>" class="in_btn in_btn_2">view details</a>
                                <button class="in_btn ms-3"><i class="fa-solid fa-phone"></i>get call back</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } 
                wp_reset_postdata(); ?>
            </div>

            <?php } ?>

        </div>
    </section>
    <!-- Listing section end -->
</main>


<!-- Single Card Property -->
<!-- <div class="col-md-6">
    <div class="listing_card">
        <div class="img_box">
            <img src="./images//list_2.png" alt="" />
            <span class="featured">Featured</span>
            <span class="sales">Sales</span>
        </div>
        <div class="cont_box">
            <div class="top">
                <span class="prop_name">One Victoria</span>
                <span class="prop_price">₹56 lakh - 95 lakh</span>
            </div>
            <p>New Town, Kolkata</p>
            <span class="capsule">Possession starts from: Jul'28</span>
            <div class="details_box">
                <div class="details">
                    <span>3BHK + 3T</span><span>2366 sqft</span><span>₹56 lakh</span>
                </div>
                <div class="details">
                    <span>3BHK + 3T</span><span>2366 sqft</span><span>₹56 lakh</span>
                </div>
            </div>
            <div class="button_box d-flex">
                <button class="in_btn">get call back</button>
                <button class="in_btn in_btn_2 ms-3">view details</button>
            </div>
        </div>
    </div>
</div> -->
<!-- Single Card Property -->



<?php
get_footer(); ?>