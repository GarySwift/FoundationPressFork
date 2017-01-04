<div class="text-center">
    <a href="<?php echo $image['original_image']['url']; ?>" class="image-popup-vertical-fit" title="<?php echo ($image['caption'] ? $image['caption']  : 'Enlarged Image' ); ?>">
        <img class="thumbnail" src="<?php echo $image['url']; ?>" alt="<?php echo ($image['caption'] ? $image['caption']  : 'Article Image' ); ?>" />
    </a>
</div>