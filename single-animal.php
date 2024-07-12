<?php get_header() ?>

<h1> <?php the_title (); ?> </h1>

<div>
    <?php the_field('animal_birthday'); ?>
</div>
<div>
    <img src="<?php the_sub_field('picture'); ?>" /> 
</div>
<?php echo get_the_date(); ?>

<?php get_footer() ?>