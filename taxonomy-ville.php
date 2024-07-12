<?php get_header(); ?>
<?php $term = get_queried_object(); ?>

<h1><?php single_term_title(); ?></h1>
<img src="<?php the_field('ville_illustration', $term); ?>" class="custom-image" />


<?php if(have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
     <?php the_field('animal_birthday'); ?>
    </a>
     <div>
          <img src="<?php the_field('photo_de_lanimal'); ?>"" class="custom-image" /> 
     </div>

     <?php endwhile; ?>
<?php endif; ?>
    

<?php get_footer(); ?>