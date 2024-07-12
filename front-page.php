<?php get_header() ?>

<header> 
    <h1> <?php the_field('home__header_title'); ?> </h1>
    <p> <?php the_field('home__header_subtitle'); ?> 

     
</header>
<body
style="background-image: url('<?php the_field('home__header_wallpaper'); ?>')">


    <?php if(have_rows('home__header_animaux')) : ?>
        <?php while (the_repeater_field('home__header_animaux')) : ?>


        <?php the_sub_field('name'); ?>
        <img src="<?php the_sub_field('picture'); ?>" class="image-reduite"/> 


        <?php endwhile; ?>
        <?php else : ?>
            <p> Aucun nouvel animal aujourd'hui </p>
    <?php endif; ?>   



















        </body>

<?php get_footer() ?>