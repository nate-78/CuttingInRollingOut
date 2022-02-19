<?php
/**
 * Template Name: FAQ Page
 *
 * @package      EAStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

get_header(); ?>

<div class="top-page text-center">
    <div class="container">
        <h1 class="dm-serif-text italic navy">Frequently Asked Questions</h1>
        <h2 class="brown">Don’t see the answer to your question below?</h2>
        <h5 class="underline-item">
            <a href="<?php the_field('contact_page_link'); ?>" class="text-link-arrow text-link-arrow--long">
                Feel free to contact us, we would love to hear from you.
            </a>
        </h5>
    </div><!-- /.container -->
</div><!-- /.top-page -->

<div class="content">
    <div class="container">
        <div class="accordion">
            <?php while (have_rows('faqs')): the_row(); ?>
                <div class="accordion__item">
                    <div class="accordion__btn">
                        <h5><?php the_sub_field('question'); ?></h5>
                    </div>
                    <div class="accordion__content">
                        <p>
                            <?php the_sub_field('answer'); ?>
                        </p>
                    </div>
                </div><!-- /.accordion__item -->
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>