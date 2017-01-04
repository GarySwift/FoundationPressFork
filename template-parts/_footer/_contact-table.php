<div class="row" id="contact-links-1">
    <div class="small-12 medium-6 large-6 columns left">
    	<?php if ( get_field('mobile_readable', 'option') ) : ?>
    		Tel: <?php echo get_field('mobile_readable', 'option'); ?>
    	<?php endif; ?>
    </div>
    <div class="small-12 medium-6 large-6 columns right">
        <?php if ( get_field('email', 'option') ) : ?>
            <?php echo get_field('email', 'option'); ?>
        <?php endif; ?>
    </div>
</div>     