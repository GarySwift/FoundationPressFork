<?php 
if(is_array(get_field('_link', 'option'))):
    $media = get_field('link', 'option');
    foreach ($media as $link): 
    ?>
        <a class="social-media-link" href="<?php echo $link['link']; ?>" title="<?php echo $link['title']; ?>" target="_blank"><i class="fa <?php echo $link['icon']; ?> social" aria-hidden="true"></i></a> 
	<?php 
    endforeach;
endif;

if(is_array(get_field('link', 'option'))):
						    ?>
<ul>
	<?php
    $media = get_field('link', 'option');
    foreach ($media as $link): 
    ?>
        <li><a class="social-media-link" href="<?php echo $link['link']; ?>" title="<?php echo $link['title']; ?>" target="_blank"><i class="fa <?php echo $link['icon']; ?> social" aria-hidden="true"></i> <?php echo $link['name']; ?></a></li>
	<?php 
    endforeach;
    ?>
    </ul>
    <?php 
endif;	
