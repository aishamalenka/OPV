<?php 
/* 
Template Name: About
*/

get_header('secondary');?>

?>


<div class="container">


<?php while ( have_posts() ) : the_post(); ?>

			<img src="<?php the_field('featured_image'); ?>" />

			<h2><?php the_title();?></h2>


			<p><?php the_content(); ?></p>
            <a href=""><?php the_field('button'); ?></a>


<?php endwhile;?>


</div>

<?php get_footer();?>