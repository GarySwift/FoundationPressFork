<div class="row small-up-2 medium-up-4 <?php echo $img_layout_class; ?>">
    <?php foreach( $images as $image ): ?>
    <div class="column">
        <a href="<?php echo $image['url']; ?>">
            <img class="thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
        </a>
    </div>
    <?php endforeach; ?>
</div>    

