<?php get_header(); ?>

<h1><?php single_term_title(); ?></h1>


<?php if(have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink(); ?>">
     <?php the_title(); ?>
     <?php the_field('animal_birthday'); ?>
    </a>

     <?php endwhile; ?>
<?php endif; ?>
    

<?php get_footer(); ?>