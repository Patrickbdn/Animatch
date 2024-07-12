<?php get_header(); ?>
<?php $term = get_queried_object(); ?>

<div style="text-align: center;">
    <h1><?php single_term_title(); ?></h1>
</div>
<img src="<?php the_field('ville_illustration', $term); ?>" class="ville" />



<?php if(have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
     <?php the_field('animal_birthday'); ?>
    </a>
     <div>
          <img src="<?php the_field('photo_de_lanimal'); ?>" class="custom-image" /> 
     </div>

     <?php endwhile; ?>
<?php endif; ?>
    

<?php get_footer(); ?>