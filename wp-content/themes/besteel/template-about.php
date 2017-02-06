<?php /* Template Name: À propos */ ?>
<?php get_header(); ?>


<?php if (get_field('photoText_display')): ?>
    <section class="photoText">
        <div class="wrapper wrapper--big">
            <h2 class="hidden"><?php _e('Introduction', 'blue'); ?></h2>
            <figure class="photoText__image">
                <?php $photoText_image = get_field('photoText_image'); ?>
                <img src="<?php echo($photoText_image['sizes']['product']); ?>" alt="<?php echo($photoText_image['alt']); ?>" />
            </figure>
            <div class="photoText__text content">
                <?php echo(get_field('photoText_text')); ?>
            </div>

        </div>
    </section>
<?php endif; ?>

<?php if (get_field('quote_display')): ?>
    <?php $quote_image =  get_field('quote_image'); ?>
    <div class="quote" style="background-image: url('<?php echo($quote_image['sizes']['slider']); ?>')">
        <div class="wrapper wrapper--big">
            <div class="quote__content">

                <h2 class="quote__title <?php if(!get_field('quote_title')): ?>hidden<?php endif; ?>"><?php echo(get_field('quote_title') ? get_field('quote_title') : __('Citation', 'blue') ); ?></h2>

                <div class="quote__text content">
                    <?php echo(get_field('quote_text')); ?>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (get_field('gallery_display')): ?>
    <div class="gallery" >
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

<?php get_footer(); ?>
