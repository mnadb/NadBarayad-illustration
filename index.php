<?php 
/**
 * Index Template
 *
 * @package NadBarayad
 */

?>
<?php get_header();?>

            <?php while(have_posts()) : the_post() ?>
                    <h1><?php the_title() ?></h1>
                    <?php the_content() ?>
                <?php endwhile; ?>

           <p>La passivité, un poison moderne</p>     

<?php get_footer(); ?>