<?php
// This is the custom markup created for the header of this site

add_action( 'tha_head_top', 'ccg_meta' );
function ccg_meta() {
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // YOU PROBABLY WON'T NEED TO EDIT THE TITLE
    ?>
    <?php $pageTitle = wp_title('', false); // the second parameter is for display ?>
    <title>
      <?php
        echo $pageTitle; 
        if (!strpos($pageTitle, '|')) {
          echo ' | ';
          bloginfo('name');
        } 
      ?>
    </title>


    <?php //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ?>
    <?php // FAVICON AND TOUCH ICON CAN BE EDITED HERE IF NEEDED ?>
    <!-- favicon -->
    <?php $fav = get_site_icon_url(); ?>
    <link href="<?php echo $fav; ?>" rel="shortcut icon">
    <link rel="apple-touch-icon" href="<?php echo $fav; ?>" /> 


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
} 


//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// FONTS
add_action( 'tha_head_bottom', 'ccg_fonts' );
function ccg_fonts() {
    ?>
    <!-- fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet">

    <?php
}


//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// BEFORE HEADER (.wrap div)
add_action( 'tha_header_before', 'ccg_header_html_start' );
function ccg_header_html_start() {
    // this particular .wrap div is closed in the footer
    ?>
    <div class="wrap">
    <?php
}


//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// HEADER TOP (the header HTML, including nav)
add_action( 'tha_header_top', 'ccg_header_html_top' );
function ccg_header_html_top() {
    ?>

    <div class="page-top">
        <div class="container">
            <header class="header">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'main-menu-left', 'menu_class' => 'nav nav-left', 'container' => false, 
                            //'walker' => new CCG_Walker() // use when necessary -- defined in /partials/nav.php
                        )
                    ); 
                ?>
                <div class="logo">
                    <a href="/">
                        <?php if (has_custom_logo()): ?>
                            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            ?>
                            <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php get_bloginfo( 'name' ) ?>">
                        <?php else: // A HARD-CODED LOGO  ?>
                            <img src="/wp-content/themes/ciro2021/assets/img/logo-white.png" alt="Cutting In & Rolling Out logo" />
                        <?php endif; ?>
                    </a>
                </div>
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'main-menu-right', 'menu_class' => 'nav nav-left', 'container' => false, 
                            //'walker' => new CCG_Walker() // use when necessary -- defined in /partials/nav.php
                        )
                    ); 
                ?>
            </header>
            <div class="main-copy">
                <h1>Let Us Make Your Home Feel <strong>New Again.</strong></h1>
                <a class="btn btn-secondary" href="#contact"><span>Get Your</span> <strong>Free Estimate</strong></a>
            </div>
        </div>
    </div>

    <?php
}


// HEADER BOTTOM 
add_action( 'tha_header_bottom', 'ccg_header_html_bottom' );
function ccg_header_html_bottom() {

}


// AFTER HEADER
add_action( 'tha_header_after', 'ccg_header_html_end' );
function ccg_header_html_end() {

}