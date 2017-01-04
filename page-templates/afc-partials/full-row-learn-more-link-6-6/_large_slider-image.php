<?php
if($image): ?>
    <div class="image-wrapper">
    <img class="text-center" 
    <?php /* data-interchange="[<?php echo $image['sizes']['fd-med']; ?>, (default)], [<?php echo $image['sizes']['fd-med']; ?>, (large)]" */?>
        src="<?php echo $image['url']; ?>"
        alt="<?php echo $image['alt']; ?>" />
    </div>
<?php endif; ?>