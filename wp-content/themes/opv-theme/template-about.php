<?php 
/* 
Template Name: About
*/

?>

<?php get_header('secondary');?>

<div>

<h1><?php the_title();?></h1>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content();?>

<?php endwhile; endif;?>

</div>

<?php get_footer();?>