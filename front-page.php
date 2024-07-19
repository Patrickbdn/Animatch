<?php get_header() ?>

<header> 
    <h1 class="titre"> <?php the_field('home__header_title'); ?> </h1>
    <p class="titre"> <?php the_field('home__header_subtitle'); ?> 

     
</header>
<body style="background-image: url('<?php the_field('home__header_wallpaper'); ?>')">


    <?php if(have_rows('home__header_animaux')) : ?>
        <?php while (the_repeater_field('home__header_animaux')) : ?>


        <?php the_sub_field('name'); ?>
        <img src="<?php the_sub_field('picture'); ?>" class="image-reduite"/> 

        <?php $button_group = get_field('bouton');
                    if( $button_group ): ?>
                    <div class="button-container">
                        <a href="<?php echo esc_url( $button_group['lien_du_bouton'] ); ?>" class="button">
                        <?php echo esc_html( $button_group['titre_du_bouton'] ); ?>
                        </a>
                    </div>
                <?php endif; ?>
        <?php endwhile; ?>
        <?php else : ?>
            <p> Aucun nouvel animal aujourd'hui </p>
    <?php endif; ?>   
</body>

<?php get_footer() ?>