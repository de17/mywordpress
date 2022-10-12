<?php
/**
 * Template Name: Home Page
 *
 */

get_header();
?>

<section id="section1" class="section1">
        <div class="inner-container">
            <div class="logo-container" data-aos="fade-in" data-aos-delay="1000">
                <a href="javascript:void(0);" class="left-logo-block">
                    <img src="<?php the_field('left_logo', 'option'); ?>" alt="LTI" class="img-fluid">
                </a>
                <a href="javascript:void(0);" class="right-logo-block">
                    <img src="<?php the_field('right_logo', 'option'); ?>" alt="Syncordis" class="img-fluid">
                </a>
            </div>
            <img src="<?php the_field('logo', 'option'); ?>" alt="Manages certified partner" class="mcp" data-aos="fade-in" data-aos-delay="1000">
        </div>
        <div id="banner-carousel" class="banner-carousel carousel slide carousel-fade" data-aos="zoom-out" data-aos-delay="200">
          <!-- Indicators -->
           <?php if( have_rows('banner') ): ?>
          <ol class="carousel-indicators">
             <?php $b=1;?>
                    <?php while( have_rows('banner') ): the_row(); 
                        if($b==1){ ?>
            <li data-target="#banner-carousel" class=" active" data-slide-to="<?php echo get_row_index(); ?>" ></li>
            <?php } else {?>  
             <li data-target="#banner-carousel" class="" data-slide-to="<?php echo get_row_index(); ?>"></li>
            <?php } 
                    $b++; ?>
                    <?php endwhile; ?>
                    </ol>
                <?php endif; ?> 
          
                <div class="carousel-inner" role="listbox">
                <?php if( have_rows('banner') ): ?>
                    <?php $i=1;?>
                    <?php while( have_rows('banner') ): the_row(); 
                        $slide = get_sub_field('slide');
                        $mob_slide = get_sub_field('mobile_slide');
                        $title = get_sub_field('titile');
                        $sub_title = get_sub_field('sub_title');
                        if($i==1){
                    ?>
                <div class="item active slide0<?php echo get_row_index(); ?>" style="background: url('<?php echo $slide;?>');background-size: cover;
    background-repeat: no-repeat;">
                    <div class="banner-heading animated bannerfade">
                        <h1 class="banner-txt">
                            <?php echo $title;?>
                        </h1>
                            <p><?php echo $sub_title;?></p>
                    </div>
                    <a class="cta-box" href="#section8">Book a Consultation <img src="/wp-content/themes/breakaway/assests/img/icon-cta-arrow.png" alt=" "></a>
                </div>
                <?php } else {?>    
                    <div class="item slide0<?php echo get_row_index(); ?>" style="background: url('<?php echo $slide;?>');background-size: cover;
    background-repeat: no-repeat;">
                    <div class="banner-heading animated bannerfade">
                        <h1 class="banner-txt">
                            <?php echo $title;?>
                        </h1>
                            <p><?php echo $sub_title;?></p>
                    </div>
                    <a class="cta-box" href="#section8">Book a Consultation <img src="/wp-content/themes/breakaway/assests/img/icon-cta-arrow.png" alt=" "></a>
                </div>
                <?php } 
                    $i++; ?>
                    <?php endwhile; ?>
                <?php endif;?>
            </div>
           
          <!-- Wrapper for slides -->
          
        <div class="banner-overlay"></div>
    </section>

    <section id="section2" class="section2 section-breakaway">
        <div class="inner-container">
            <div class="breakaway-block" data-aos="zoom-in" data-aos-delay="300">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="sub-header"><span><?php the_field('heading');?></span><?php the_field('sub_headingh');?></h2>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="atab-block">
                            <p class="para-txt"><?php the_field('short_description');?></p>
                            <div class="atab-list-view" style="display:none;">
                                <p class="para-txt"><?php the_field('description');?></p> <div class="show-more-cta show-less-list">Read Less</div>
                            </div>
                            <div class="show-more-cta show-more-list">Read More</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section3" class="section3 section-upgrade" style="background: url('<?php the_field('background_image');?>'); background-size: cover;
    background-repeat: no-repeat;">
        <div class="inner-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="col-md-2 sub-header" data-aos="fade-up" data-aos-delay="200"><span><?php the_field('section3_heading');?></span><?php the_field('section3_sub_heading');?></h2>
                    <p class="col-md-5 para-txt" data-aos="fade-up" data-aos-delay="400"><?php the_field('description_1');?></p> 
                    <p class="col-md-5 para-txt" data-aos="fade-up" data-aos-delay="400"><?php the_field('description_2');?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="section4" class="section4 section-breakaway-journey" style="background: url('<?php the_field('section_background_image');?>');background-size: initial;background-repeat: no-repeat;background-position: 90% 50%;padding-bottom: 150px;">
        <div class="inner-container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h2 class="sub-header" data-aos="fade-up" data-aos-delay="200"><?php the_field('section4_heading');?> <span><?php the_field('section4_sub_heading');?></span></h2>
                    <p class="para-txt" data-aos="fade-up" data-aos-delay="300"><?php the_field('section4_description');?></p>
                    <h2 class="para-header" data-aos="fade-up" data-aos-delay="400"><?php the_field('services');?></h2>
                    <p class="para-txt" data-aos="fade-up" data-aos-delay="500"><?php the_field('services_content');?></p>
                </div>
            </div>
            <img class="breakaway-journey-mob" src="/wp-content/themes/breakaway/assests/img/breakaway-journey-mob.png">
        </div>
    </section>

    <section id="section5" class="section5 section-360-requirement">
        <div class="inner-container">
            <div class="digital-banking" data-aos="zoom-in" data-aos-delay="100">
                <div class="banking-block" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="para-txt"><span><?php the_field('section5_heading');?></span>,<?php the_field('section5_content');?></p>
                        </div>
                        <div class="col-md-6">
                            <p class="para-txt"><?php the_field('section5_content_description');?></p>
                        </div>
                    </div>
                </div>
                <div class="high-points" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="para-header"><?php the_field('section5_title');?></h4>
                    <div class="row">
                        <?php if( have_rows('points') ): ?>
                            <?php while( have_rows('points') ): the_row(); 
                                $image = get_sub_field('icon');
                                $content = get_sub_field('content');
                                ?>
                                <div class="col-md-4">
                                    <img class="offer-icon" src="<?php echo $image;?>">
                                    <p class="para-txt"><?php echo $content;?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="section5-grid">
                <h2 class="sub-header" data-aos="fade-up" data-aos-delay="300"><span><?php the_field('section6_heading');?></span> <?php the_field('section6_subheading');?></h2>
                <h3 class="para-header" data-aos="fade-up" data-aos-delay="400"><?php the_field('solutiion_title');?></h3>
                <div class="upgrade-grid">
                    <div class="upgrade-offer-grid">
                        <div class="outer-circle-style" data-aos="zoom-in" data-aos-delay="400">
                            <div class="inner-circle-style"></div>
                        </div>
                        <img class="upgrade-offer-img" class="" src="/wp-content/themes/breakaway/assests/img/upgrade-offer-img.png" alt=" ">
                            <?php if( have_rows('solutions') ): ?>
                                <?php $i=1;?>
                                <div class="upgrade-blocks">
                                <?php while( have_rows('solutions') ): the_row(); 
                                    $title = get_sub_field('title');
                                    $points = get_sub_field('points');
                                    $image = get_sub_field('icon');
                                    if($i<=4){
                                    ?>
                                    <div class="upgrade-block  upgrade-block<?php echo get_row_index();?>" data-aos="zoom-in" data-aos-delay="200">
                                        <img class="icon-upgrade icon-upgrade<?php echo get_row_index();?>" src="<?php echo $image;?>" alt=" ">
                                        <div class="upgrade-content upgrade-content<?php echo get_row_index();?>">
                                            <h4 class="para-header"><?php echo $title;?></h4>
                                            <?php echo $points;?>
                                        </div>
                                    </div>
                                    <?php } else {?>
                                        <div class="upgrade-block upgrade-block-right upgrade-block<?php echo get_row_index(); ?>" data-aos="zoom-in" data-aos-delay="200">
                                        <img class="icon-upgrade icon-upgrade<?php echo get_row_index();?>" src="<?php echo $image;?>" alt=" ">
                                        <div class="upgrade-content upgrade-content<?php echo get_row_index();?>">
                                            <h4 class="para-header"><?php echo $title;?></h4>
                                            <?php echo $points;?>
                                        </div>
                                    </div>
                                    <?php } 
                                        $i++;?>
                                <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section6" class="section6 section-breakthrough" style="background-image: url(<?php the_field('section7_background');?>); background-repeat: no-repeat; background-size: cover;">
        <div class="inner-container">
            <h2 class="sub-header" data-aos="fade-up" data-aos-delay="200"><span><?php the_field('section7_heading');?> </span> <?php the_field('section7_sub-heading');?></h2>
            <p class="para-txt section6-para-txt" data-aos="fade-up" data-aos-delay="200"><?php the_field('sectio7_description');?></p>
        </div>
    </section>

    <section id="section7" class="section7 section-insights">
        <div class="inner-container">
            <h2 class="sub-header clr-grey" data-aos="fade-up" data-aos-delay="200"><?php the_field('section8_heading');?></h2>
            <?php
                $featured_posts = get_field('insight');
                if( $featured_posts ): ?>
                    <ul class="insight-tabs" id="insight-tabs" data-aos="fade-up" data-aos-delay="300">
                    <?php foreach( $featured_posts as $featured_post ): 
                        //$permalink = get_permalink( $featured_post->ID );
                        $title = get_the_title( $featured_post->ID );
                        $custom_field = get_field( 'brochure_link', $featured_post->ID );
                        $cat = $post_categories = wp_get_post_categories( $featured_post->ID );
                        $a = $cat[0];
                        $tag = $tags = get_the_tags($featured_post->ID); 
                        ?> 
                        <li class="ins-tab ins-tab01 active"><?php echo get_the_category_by_ID( $a ); ?></li>
                    <?php endforeach; ?>
                    </ul>
                    <div class="insights-content-container" data-aos="fade-up" data-aos-delay="300">
                <div class="ins-content ins-content01">
                    <div class="owl-carousel owl-refresh insights-carousel">
                        <div class="insights-item">
                            <a class="insights-block" href="<?php echo esc_html( $custom_field ); ?>" target="_blank">
                                <div class="insights-img">
                                    <?php echo get_the_post_thumbnail( $featured_post->ID );?>
                                </div>
                                <div class= "insights-info">
                                    <div class="insight-tag">
                                        <?php 
                                            if ($tag != false){
                                            foreach ($tag as $b):
                                            echo $b->name ;
                                            endforeach;}
                                        ?>
                                    </div>
                                    <h4 class="insight-header"><?php echo esc_html( $title ); ?></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                <?php endif; ?>
        </div>
    </section>

    <section id="section8" class="section8 section-form">
        <div class="inner-container">
            <div class="form-container">
                <div class="form-block" >
                    <h2 class="sub-header" data-aos="fade-up" data-aos-delay="200"><span>Ready to breakaway with a bold banking platform?</span></h2>

                    <!-- <p class="sub-header-txt" data-aos="fade-up" data-aos-delay="200">Are you ready for a seamless T24 upgrade?</p> -->
                    <div class="form-grid" data-aos="fade-up" data-aos-delay="300">
                        <?php echo do_shortcode('[contact-form-7 id="117" title="Contact form 1"]');?>
                        
                    </div>
                </div>
                <div class="ty-block" style="display:none;">
                    <div class="sub-header" data-aos="fade-up" data-aos-delay="200">Thank You</div>
                    <p class="sub-header-txt" data-aos="fade-up" data-aos-delay="200">Thank you for writing to us. <br>We have received your request, and will get back to you soon.</p>
                </div>
            </div>
        </div>
    </section>

    <?php
get_footer();