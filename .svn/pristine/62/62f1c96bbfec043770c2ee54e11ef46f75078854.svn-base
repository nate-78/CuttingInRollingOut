<?php
/**
 * This template controls the output of the Page Heading Gutenberg Block Type
 */ 
    $bgIsCream = get_field('heading_background_color') == 'cream';
?>

<div class="top-page text-center alignwide <?php if (!$bgIsCream) { echo 'top-page--dark'; } else { echo 'top-page--light'; } ?>">
    <div class="container">
        <h1 class="dm-serif-text italic <?php if ($bgIsCream) { echo 'navy'; } ?>"><?php the_field('title'); ?></h1>
        <?php if (get_field('subtitle_line_1')): ?>
            <h2 class="brown"><?php the_field('subtitle_line_1'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('subtitle_line_2')): ?>
            <h5 class="underline-item"><?php the_field('subtitle_line_2'); ?></h5>
        <?php endif; ?>
        <?php the_field('heading_text'); ?>
    </div><!-- /.container -->
</div><!-- /.top-page -->