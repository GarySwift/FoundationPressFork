<?php
/*
Template Name: Builder
*/
get_header(); 
?>
<div role="main">
    <article class="main-content">
        <section id="promise-icons">
<div class="row">
            <h3 class="text-center sectionbreak">Our Promise To You</h3>
        </div>
        <div class="row small-up-1 medium-up-2 large-up-4">
            <div class="columns">
                <div class="icons">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/theme/icons/noun_226892_cc.svg" alt="Icon" class="promise-icon" id="icon-quality">
                </div>
                <div class="content">
                    <h4>Quality<br>Guarenteed</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis et eos similique! Maiores voluptatibus sapiente odio, quia?</p>
                </div>
            </div>
            <div class="columns">
                <div class="icons">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/theme/icons/noun_6020_cc.svg" alt="Icon" class="promise-icon" id="icon-service">
                </div>
                <div class="content">
                    <h4>Friendly<br>Service</h4>
                    <p>Nihil suscipit voluptates molestiae corporis. Asperiores ratione soluta, delectus nisi molestiae incidunt debitis laboriosam fugiat.</p>
                </div>
            </div>            
            <div class="columns">
                <div class="icons">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/theme/icons/wallet_thin_noun_565768_cc.svg" alt="Icon" class="promise-icon" id="icon-value">
                </div>
                <div class="content">
                    <h4>Value<br>For Money</h4>
                    <p>Quibusdam voluptates suscipit sed aut delectus reprehenderit, perspiciatis iste debitis praesentium consequatur similique tempore.</p>
                </div>
            </div>
            <div class="columns">
                <div class="icons">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/theme/icons/noun_537972_cc.svg" alt="Icon" class="promise-icon" id="icon-realiability">
                </div>
                <div class="content">
                    <h4>Realiable <br>&amp; Trustworthy</h4>
                    <p>Nostrum vero voluptates, similique sapiente nam deleniti obcaecati laboriosam repellendus, nisi animi sequi distinctio eius.</p>
                </div>
            </div>
        </div>            
        </section>
        
        <section>
        <h3 class="text-center sectionbreak">Featured Services</h3>
            <?php if ( have_rows('blocks') ) : ?>
            <div class="row small-up-1 medium-up-2 large-up-2 image-blocks-content-in-corner">
                <?php while( have_rows('blocks') ) : the_row(); ?>
                    <div class="columns block">
                        <?php if ( get_sub_field('image') ) : ?>
                            <?php $image = get_sub_field('image'); ?>
                            <div class="wrapper" <?php echo ' style="max-width:'.($image['sizes']['large']).'px"' ?>>
                                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                <div class="corner-content">
                                    <?php if ( get_sub_field('header') ) : ?>
                                        <h5><?php the_sub_field('header'); ?></h5>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('content') ) : ?>
                                        <div class="entry-content"><?php echo get_sub_field('content'); ?></div>
                                    <?php endif; ?>                        
                                </div>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        </section>
    </article>
</div>
<?php get_footer();