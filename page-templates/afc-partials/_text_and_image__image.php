<?php if($image): ?>
<a href="<?php echo $image['original_image']['url']; ?>" class="image-popup-vertical-fit" title="<?php echo ($image['caption'] ? $image['caption']  : 'Enlarged Image' ); ?>">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</a>   

<script>
	$(document).ready(function() {


});
</script> 
<?php endif; ?>