# This WordPress starter theme uses WP's Gutenberg Editor to handle basic page content.  This is used in place of the page builders we used to create with Advanced Custom Fields.

**This doc will walk you through the theme's structure and provide you with resources for using it effectively.**

## General Notes
This theme is built off of a starter theme created by Bill Erickson:
- https://github.com/billerickson/EA-Starter
- https://www.billerickson.net/gutenberg-starter-themes/

Bill Erickson is a freelance WP developer, and his blog is a great resource, especially for working with Gutenberg themes (https://www.billerickson.net/building-a-gutenberg-website/).

His EA-Starter theme is a fork of the popular Underscores theme, but it’s been set up for Gutenberg, and it also includes additional hooks from Theme Hooks Alliance (https://github.com/zamoose/themehookalliance).  Theme Hooks Alliance is simply a group of developers who have worked to create additional hooks for WordPress.  I haven't familiarized myself with all of the available ones, but there are some that do seem useful, so I've made use of them, as I'll explain a bit later.

## Things That Haven't Changed
This theme differs from our past ones in several ways, but there are still some basic things that haven't changed at all.

### CSS
We are not using SASS, even though a lot of starter themes do.  We're sticking with good old style.css

### No CLI or Node.js
We won't need to rely on a command line to build anything for us. We won't be using Node.js or running anything locally.  We'll make our code edits locally, then push them up via SFTP to check the changes on a development server.

### functions.php is Still the Core of the Theme
While this theme breaks out certain functionality into the /inc and /partials folders, it's all still tied together by functions.php

## Things That Are Different

### No Need to Directly Edit header.php or footer.php
If you open header.php and footer.php you'll see they're filled with Theme Hooks Alliance calls like tha_head_top() and tha_head_bottom(). 

**Do not** edit header.php and footer.php.  Instead, make use of those THA hooks and put your HTML edits inside these two files:
- /partials/header.php 
- /partials/footer.php

Editing the header and footer this way decouples our markup from the other basic things that header and footer need to do -- the kinds of things that don't change project to project.  This should speed up our ability to take a starter theme and get it into production by making HTML insertion much simpler.

### No Need to Create a Generic Page Builder Using ACF Fields
This theme uses the Gutenberg editor from WordPress, which will speed up our ability to create general content pages.  If Creative comes up with some kind of "widget" that is not available in Gutenberg, we can create custom blocks for it (as described below).

## Structure 

### functions.php
Most of the functions for the site have been split up into separate files, so **functions.php** is mostly used to pull those different files together and make sure WordPress loads them.  Those files are categorized under /inc and /partials directories.  You can create your own files under /inc and /partials, but when you do, make sure you give them an **include_once()** entry here in functions.php.

### /inc Files
These files are primarily various helper functions.  The ones prefixed with **ccg_** are ones that I created.  The others came with the theme.  I haven't fully investigated what all of them do, so they may or may not be helpful.

Some of the most important files to keep track of:

- **/inc/enqueue.php:** This file enqueues the scripts and stylesheets for your site.  You'll obviously need to edit this one.
- **/inc/ccg-block-creation.php:** This is the file that will assist you in creating Gutenberg content blocks.  You'll also need ACF installed and activated for this to work.
- **/inc/ccg-custom-options.php:** This file provides the ability to create custom settings in WP Admin (Appearance -> Customize).
- **/inc/ccg-helpers.php:** Just some general helper functions that probably won't need to be edited.  Most of these were also used in the CCG Starter Themes prior to 2020.

### /partials Files
These files are similar to the /inc files, but they are dedicated to handling certain content sections.

Some files to note:

- **/partials/blocks/_____.php:** The files stored here are the ones dedicated to showing the content created by any custom Gutenberg blocks you create.
- **/partials/header.php:** This is where the markup for the header should go.
- **/partials/footer.php:** This is where the markup for the footer should go.
- **/partials/nav.php:** If needed, the site navigation could be built out here.  This can be especially helpful if you need to use a custom WP Nav Walker for the site's navigation.
- **/partials/content.php:** This controls the main content loop used for pages and also sets a page's divs, classes, etc.  You probably won't have to edit it often, but it's important to know about.  If the HTML you're using has a special class on the div used to wrap content, you could add that class here.

## Turning off the Gutenberg Editor for Custom Page Templates
For any theme we develop, there are probably going to be certain page layouts that Gutenberg can't accommodate, even if we built custom blocks for them.  In those cases, we'll create dedicated page templates and use ACF to handle the fields in the back end.  It's best if we completely turn off the Gutenberg editor for those specific templates.  Currently, there's not a setting in ACF that will do this.  However, we can do it by tying into a WordPress hook, and we have a file already setup to do that:
**/inc/disable-editor.php**

At the top of the file, there's an array of page templates defined, so simply add your new page template to the list.  WordPress seems to ignore the hyphens used in file names, so I've been listing each page template twice just to be on the safe side.  Once with the hyphen and once without:

```php
    $excluded_templates = array(
		'frontpage.php',
		'front-page.php',
		'page-product-line.php',
		'pageproductline.php',
		'page-faq.php',
		'pagefaq.php',
		'page-contact.php',
		'pagecontact.php',
		'page-dealers.php',
		'pagedealers.php',
		'page-calculator.php',
		'pagecalculator.php',
		'page-cabinets.php',
		'pagecabinets.php'
	);
```

The only page template in the list by default is for the front page.

### Custom Page Templates
I've left 2 custom page templates in this starter theme that can be deleted or completely edited to suit your needs.  I left them in place simply to show that our old approach of building page templates works just the same in this new theme.  Simply paste your HTML in place and use PHP functions to get whatever data you need from the CMS.

## Gutenberg and Custom Blocks

### Gutenberg
The Gutenberg editor is really powerful, but it's pretty different from what we've used in the past.  They've worked to make it fairly intuitive, but there's still a learning curve. I made a video tutorial for Legacy Cabinets to show them how to use their site.  This is the spot in the video where I start demonstrating Gutenberg, and you might find it useful:
- https://youtu.be/eqMfvshSUoI?t=202

#### Auto-placed Title
One of the potential difficulties with using Gutenberg is that it will automatically show the page's title as part of the content when you're viewing the finished page.  This might be fine for some themes, but most of the sites we design do something special with the page title and show it in some kind of banner.  Because of that, by default, I've disabled the auto-generated page title.  If you need that functionality turned back on, you simply need to make two simple CSS adjustments.

The first is in **style.css**.  Comment out the lines beginning around line 78:

```css
    /**********************************
    TURN OFF PAGE TITLE
    */ 
    .entry-title {
        display: none;
    }
    /**********************************
    */
```

That will allow the title to reappear on finished pages.  But there's one more change you need to make, and that is to turn off a message that I show under the title field in the Gutenberg editor.  To turn that off, edit **/assets/css/editor-style.css**, beginning at line 4.  Just comment out these lines:

```css
    /* (turn off the normal page title) */
    .editor-post-title > div > div::after {
        content: '(This title will not be shown on the finished page -- use the "Page Heading" block below to create a page title)';
        position: relative;
        top: -15px;
        left: 15px;
    }
    .editor-post-title > div.is-selected > div::after {
        content: '';
    }
```

### Custom Blocks
The true way to create custom blocks for Gutenberg is to use React. Luckily, ACF has added block support, which drastically simplifies the process for creating custom blocks.  When I built the Legacy Cabinets site, I only needed to create one custom block, and I've left it in place to serve as an example.  You can keep it and modify it to suit the needs of your site, or you can remove it entirely.  

#### Creating Custom Blocks
There are several steps to creating custom blocks, making them available in Gutenberg, and getting them to show appropriately in the Gutenberg editor.  They are as follows: 
- Register the block with PHP
- Build the block editor with the ACF interface
- Create the output for the block using PHP and HTML
- Make sure the output is styled correctly for frontend and backend using CSS

#### Regsiter the Block with PHP
Edit the **/inc/ccg-block-creation.php** file.  The important part begins at line 16:

```php
	acf_register_block_type( array(
		'name'			=> 'page-heading',
		'title'			=> 'Page Heading',
		'render_template'	=> 'partials/blocks/block-page-heading.php', // location of template code
		'category'		=> 'layout', // The options provided by WP core are: common, formatting, layout, widgets, and embed.
		'icon'			=> 'schedule', // WP dashicons 
		'mode'			=> 'auto', // auto, preview, or edit
		'keywords'		=> array( 'page', 'heading', 'top' ),
		'align'			=> 'full' // left, center, right, wide, full
	));
```

This function can be repeated for as many blocks as you need to create.  The settings should be pretty self explanatory.  You can Google what the different category options mean, though you'll likely use "layout" the most.  The same goes for the mode options.  You can find an appropriate dashicon by visiting https://developer.wordpress.org/resource/dashicons/

**NOTE:** The ACF fields for this particular block are probably already saved in your theme because the code for them is stored at the bottom of this file (/inc/ccg-block-creation).  This code can be removed when you no longer need these example fields or the Page Heading block.

#### Build the Block Editor with ACF
The previous step will create the block and make it available in ACF.  Notice how "Block" is available as an option in the "Rules" section at the bottom of the page.  And our registered block shows up as an option:

<a href="https://lh3.googleusercontent.com/F5O-UC3_3AskQ2teb0pGaEpc9nh6nE21mAKxEnp1LCpn_QGR9bSIwOdRb6Rw6ooDsHrOj3gWNJS-6e_hcK10qwpZXFjpsN12Vy1AWsjC25Rq0CbQgvn6UqsYWeOEuIuD9o22Wz4y5Q=w2400?source=screenshot.guru" target="_blank"> <img src="https://lh3.googleusercontent.com/F5O-UC3_3AskQ2teb0pGaEpc9nh6nE21mAKxEnp1LCpn_QGR9bSIwOdRb6Rw6ooDsHrOj3gWNJS-6e_hcK10qwpZXFjpsN12Vy1AWsjC25Rq0CbQgvn6UqsYWeOEuIuD9o22Wz4y5Q=w600-h315-p-k"  alt="ACF block creation"/> </a>

#### Create the Block's Output Using PHP and HTML
Just like when we create custom fields for a page template, custom blocks need a template as well.  These should be stored in /partials/blocks/, and you can refer to **/partials/blocks/block-page-heading.php** and see that it works just like creating a page template.

The template you create will be used when the finished page is viewed in a browser, but it can also show up in Gutenberg.  If you watched the video I linked to earlier (https://youtu.be/eqMfvshSUoI?t=202) you saw this in action.  If you didn't watch it, I recommend you do so now.  The final step in this process is to get the template to display the way you want it to in both the frontend and backend.

#### Using CSS to Style the Output in the Frontend and Backend
If you've done everything correctly to this point, displaying the template correctly in the frontend is probably already working, since your finished CSS has likely already been copied into **style.css**.  To make the template look good in Gutenberg, copy the relevant CSS from style.css and paste it into the bottom of **/assets/css/editor-style.css**.  This should make your block look very close to the finished product, which helps users when editing and creating pages.

**NOTE:** The CSS for the Page Heading block is currently stored in the editor-style.css stylesheet.  When you no longer need the Page Heading block for reference, feel free to delete lines 18 and following.

#### Further Reading on Custom Block Creation with ACF
- https://www.billerickson.net/building-gutenberg-block-acf/#register-block