<h3>Follow Us</h3>
<div class="social-media">
    <?php 
    if(is_array(get_field('link', 'option'))):
        $media = get_field('link', 'option');

        foreach ($media as $link):
        	?>
            <a class="social-media-link" href="<?php echo $link[link]; ?>" title="<?php echo $link[title]; ?>" target="_blank"><i class="fa <?php echo $link[icon]; ?> social-media-icon"></i></a> 
        	<?php
        endforeach;
    endif;
    ?>
</div>