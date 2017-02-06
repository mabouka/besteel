
<?php /* Template Name: Accueil */ ?>
<?php get_header(); ?>
<div class="homeTop">
    <section class="hSlider">
            <h2 class="hidden"><?php _e('Galerie d’image', 'blue'); ?></h2>
            <div class="wrapper">
                <a class="hSlider__prev" href="#prev"><?php _e('Précédent','blue');?></a>
                <a class="hSlider__next" href="#next"><?php _e('Suivant','blue');?></a>
            </div>


            <?php if (get_field('slider')): ?>
            <div class="hSlider__list">
            <?php foreach (get_field('slider') as $slide): ?>
                <figure class="hSlider__item">
                    <img src="<?php echo($slide['image']['sizes']['slider']); ?>" alt="<?php echo($slide['image']['alt']); ?>" />
                </figure>
            <?php endforeach; ?>
            </div>
            <?php endif; ?>
    </section>
    <section class="bigCtaContainer">
        <h2 class="hidden"><?php _e('Nos produits','blue'); ?></h2>
        <div class="">
        <?php foreach (get_field('cta') as $cta): ?>
            <section class="bigCta">
                <h2 class="bigCta__title"><?php echo($cta['title']); ?></h2>
                <?php if ($cta['text']): ?>
                <p class="bigCta__text"><?php echo($cta['text']); ?></p>
                <?php endif; ?>
                <a class="bigCta__link" href="<?php echo(get_permalink( $cta['target']->ID)); ?>">
                    <span class="bigCta__center"><span class="bigCta__label"><?php _e('En savoir plus','blue'); ?></span></span>
                </a>
            </section>
        <?php endforeach; ?>
        </div>
    </section>
    <section class="homeAbout">
        <div class="homeAbout__content">
            <h2 class="homeAbout__title"><?php echo(get_field('about_title')); ?></h2>

            <?php if (get_field('about_text')): ?>
            <div class="homeAbout__text">
                <?php echo(get_field('about_text')); ?>
            </div>
            <?php endif; ?>

            <a class="homeAbout__link btn" href="<?php echo(get_permalink(7)); ?>"><?php _e('Plus d’informations', 'blue'); ?></a>
        </div>
    </section>
<?php /*
    <section class="homeFeature">
        <div class="homeFeature__content">
            <h2 class="hidden"><?php _e('Quelques chiffres ...','blue'); ?></h2>
            <div>
            <?php foreach (get_field('numbers') as $item): ?>
            <p class="homeFeature__item">
                <span class="homeFeature__item__circle"><!--
                --><span class="homeFeature__item__circleText">
                        <strong class="homeFeature__item__number"><?php echo($item['quantity']); ?></strong>
                        <span class="homeFeature__item__unit"><?php echo($item['unit']); ?></span>
                    </span><!--
             --></span>
                <?php if ($item['text']): ?>
                <span class="homeFeature__item__text"><?php echo($item['text']); ?></span>
                <?php endif; ?>
            </p>
            <?php endforeach; ?>
            </div>


        </div>
    </section>
*/ ?>
   <?php if (get_field('gallery_display')): ?>
    <div class="gallery home-gallery" >
        <div class="wrapper wrapper--big">
            <h2 class="hidden"><?php _e('Galerie photos','blue'); ?></h2>
            <a class="gallery__prev" href="#prev"><?php _e('Précédent','blue');?></a>
            <a class="gallery__next" href="#next"><?php _e('Suivant','blue');?></a>

            <div class="gallery__list">
                <?php foreach (get_field('gallery_photos') as $photo): ?>

                <div class="gallery__item">
                    <a class="gallery__link" href="<?php echo($photo['image']['sizes']['large']); ?>"><?php _e('Voir cette image en grand', 'blue'); ?></a>
                    <img class="gallery__img" src="<?php echo($photo['image']['sizes']['galleryItem']); ?>" alt="<?php echo($photo['image']['alt']); ?>" />
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
