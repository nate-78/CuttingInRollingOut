<?php
/**
 * Template Name: Front Page
 *
**/

get_header();
?>

<div id="about">
    <a id="about-us"></a>
    <div class="container">
        <h2>
            <?php the_field('about-heading'); ?>
        </h2>
        <div class="row">
            <?php while (have_rows('info_blocks')): the_row(); ?>
                <div class="col">
                    <?php $img = get_sub_field('icon'); ?>
                    <?php if ($img): ?>
                        <div class="icon">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
                        </div>
                    <?php endif; ?>
                    <h3><?php the_sub_field('heading'); ?></h3>
                    <hr class="short">
                    <?php the_sub_field('copy'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<div id="form">
    <a id="contact"></a>
    <div class="container">
        <div class="row">
            <div class="form-col">
                <div class="form-wrap">
                    <h3><strong>Free</strong> Estimate</h3>
                    <hr class="short">
                    <?php echo do_shortcode('[contact-form-7 id="38" title=""]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <a id="gallery"></a>
    <div class="container">
        <div class="row">
            <div class="col gallery">
                
            </div>
        </div>
    </div>
</div>

<?php
get_footer();