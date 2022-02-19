<?php
/**
 * Template Name: Contact Page
 *
 * @package      EAStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

get_header(); ?>

<div class="banner">
    <div class="banner__img">
        <?php
            $bgImg = get_field('top_background_image');
            $bgImg2x = get_field('top_background_image_2x');
        ?>
        <img src="<?php echo $bgImg['url']; ?>" srcset="<?php echo $bgImg2x['url']; ?> 2x" alt="<?php echo $bgImg['alt']; ?>">
    </div>
    <img class='banner__emblem' 
        src="/wp-content/themes/legacy2020-EA/assets/img/legacy-emblem.png" 
        srcset="/wp-content/themes/legacy2020-EA/assets/img/legacy-emblem@2x.png 2x" 
        alt="Legacy Emblem"
    >
</div><!-- /.banner -->

<div class="content">
    <div class="contact-head">
        <div class="container contact-head__container">
            <h1 class="contact-head__headline headline-overlay dm-serif-text"><?php the_field('page_title'); ?></h1>
            <h2 class="brown bold"><?php the_field('sub_title_line_1'); ?></h2>
            <h5 class="underline-item"><?php the_field('sub_title_line_2'); ?></h5>
        </div><!-- /.container -->
    </div><!-- /.contact-head -->

    <div class="contact-form light-bg">
        <div class="container">
            <div class="row contact-form__main-row">
                <div class="col-auto text-center">
                    <div class="contact-form__info">
                        <h2 class="dm-serif-text underline-item">We look forward to <br> hearing from you!</h2>
                        <div>
                            <div class="contact-form__info-item">
                                <div class="contact-form__info-icon">
                                    <img src="/wp-content/themes/legacy2020-EA/assets/img/icons/phone.svg" alt="Phone">
                                </div>
                                <div class="contact-form__info-text">
                                    <em class="playfair-display bold small">Main Number</em>
                                    <p>
                                        <a href="tel:<?php the_field('main_phone_number'); ?>"><?php the_field('main_phone_number'); ?></a>
                                    </p>
                                </div>
                            </div><!-- /.contact-form__info-item -->
                            <div class="contact-form__info-item">
                                <div class="contact-form__info-icon">
                                    <img src="/wp-content/themes/legacy2020-EA/assets/img/icons/location.svg" alt="Location">
                                </div>
                                <div class="contact-form__info-text">
                                    <em class="playfair-display bold small">Corporate location</em>
                                    <p>
                                        <?php echo get_theme_mod('address'); ?>
                                    </p>
                                </div>
                            </div><!-- /.contact-form__info-item -->
                        </div>
                    </div><!-- /.contact-form__info -->
                    <a href="<?php the_field('dealer_locator_link'); ?>" class="btn-main btn-main--mobile-full-width">Find local dealer</a>
                </div><!-- /.col -->
                <div class="col">
                    <div class="contact-form__form">
                        <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-form -->
</div><!-- /.content -->

<?php get_footer(); ?>