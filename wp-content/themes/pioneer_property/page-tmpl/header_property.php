<?php
/**
 * Template Name: Header Property Pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-files
 *
 * @package Pioneer_property
 */

get_header();
?>

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
                                <li><a href="<?php echo site_url('/property/');?>">Properties For Sale In Kolkata</a>
                                </li>
                                <li><?php echo the_title();?></li>
                            </ul>
                        </div>
                        <div class="banner-content">
                            <h1><?php echo the_title();?></h1>
                            <div class="actions">
                                <ul>
                                    <li><a href="#">Enquire for home loan</a></li>
                                    <li></li>
                                    <li><a href="#">get offer</a></li>
                                </ul>
                            </div>
                            <!-- <p>Last updated: 10-Jul-2024</p> -->
                        </div>
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
        <div class="row" id="property-list">
            <?php
            if(is_page('241')) {
                $args = array(
                    'post_type' => 'property',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'meta_query' => array(
                        array(
                            'key' => 'trending_property', 
                            'value' => '1',
                            'compare' => 'LIKE'
                        )
                    ),
                );
            } elseif(is_page('243')) {
                $args = array(
                    'post_type' => 'property',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
            }
            
            $trn_Property = new WP_Query($args);
            
            if ($trn_Property->have_posts()) {
                while ($trn_Property->have_posts()) {
                    $trn_Property->the_post();
                    ?>
            <div class="col-md-6 mb-4">
                <div class="listing_card">
                    <div class="img_box">
                        <?php $featured_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                        <img src="<?php echo $featured_image; ?>" alt="" />
                    </div>
                    <div class="cont_box">
                        <div class="top">
                            <span class="prop_name"><?php the_title(); ?></span>
                            <?php
                                    $Price = get_field('property_price', $post->ID);
                                    if ($Price) {
                                        $min_price = $Price['min_price'];
                                        $max_price = $Price['max_price'];
            
                                        if ($min_price >= 10000000) {
                                            $min_price_formatted = number_format($min_price / 10000000, 2) . ' cr';
                                        } elseif ($min_price >= 100000) {
                                            $min_price_formatted = number_format($min_price / 100000, 2) . ' lakh';
                                        } elseif ($min_price >= 1000) {
                                            $min_price_formatted = number_format($min_price / 1000, 2) . ' K';
                                        }
            
                                        if ($max_price >= 10000000) {
                                            $max_price_formatted = number_format($max_price / 10000000, 2) . ' cr';
                                        } elseif ($max_price >= 100000) {
                                            $max_price_formatted = number_format($max_price / 100000, 2) . ' lakh';
                                        } elseif ($max_price >= 1000) {
                                            $max_price_formatted = number_format($max_price / 1000, 2) . ' K';
                                        }
                                        ?>
                            <span class="prop_price">
                                ₹ <?php echo $min_price_formatted; ?> - <?php echo $max_price_formatted; ?>
                            </span>
                            <?php } ?>
                        </div>
                        <p class="prop_dev"><?php echo get_field('property_contractor_name', $post->ID); ?></p>
                        <?php $rera_no = get_field('property_rera_no', $post->ID);
                                if ($rera_no) { ?>
                        <span class="prop_rera">RERA No.: <?php echo $rera_no; ?></span>
                        <?php } ?>
                        <?php 
                                $main_loc_value = get_field('main_location');
                                if ($main_loc_value) { ?>
                        <p><i class="fa-solid fa-location-dot me-2"></i><?php echo $main_loc_value; ?></p>
                        <?php } ?>
                        <?php $poss_date = get_field('possession_date', $post->ID);
                                if ($poss_date) { 
                                    $date = DateTime::createFromFormat('d/m/Y', $poss_date);
                                    $formatted_date = $date->format('jS F Y');?>
                        <span class="capsule">Possession Date: <?php echo $formatted_date; ?></span>
                        <?php } ?>
                        <div class="details_box">
                            <?php
                                    if (have_rows('room_specification', $post->ID)) {
                                        while (have_rows('room_specification', $post->ID)) {
                                            the_row();
                                            $capacity = get_sub_field('capacity');
                                            $size = get_sub_field('size');
                                            $price = get_sub_field('price');
                                            ?>
                            <div class="details">
                                <span><?php echo $capacity; ?></span><span><?php echo $size; ?></span><span><?php echo $price; ?></span>
                            </div>
                            <?php } } ?>
                        </div>
                        <div class="button_box d-flex">
                            <a href="<?php the_permalink(); ?>" class="in_btn in_btn_2">view details</a>
                            <a href="#" class="in_btn ms-3"><i class="fa-solid fa-phone"></i>get call back</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php  echo '<button id="load-more" data-page="1" data-url="' . admin_url("admin-ajax.php") . '">Load More</button>'; ?>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- Listing section end -->


<?php
get_footer();?>