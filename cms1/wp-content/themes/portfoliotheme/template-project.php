<?php
/*
 * Template Name: Projects template
 */
get_header(); ?>
<?php
$loop = new WP_Query(array(
  'post_type' => 'Project',
  'posts_per_page' => 10
));

if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
    get_template_part('content-projects', get_post_format());
endwhile; endif;
?>

<?php get_footer(); ?>