<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage MiljobronTheme
 * @since MiljobronTheme 1.0
 */
?>
<?php wp_head()?> 
<meta charset="utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<?php get_header()?>

<div>
    <?php while(have_posts()): the_post();?>
    <?php the_content(__('Continue Reading'));?>
    <?php endwhile;?>
</div>
<?php get_sidebar()?>
<?php get_footer()?>

