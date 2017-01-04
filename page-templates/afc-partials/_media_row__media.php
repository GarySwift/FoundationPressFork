<?php 
if($media_type === 'image') {
    include( '_text_and_image__image.php' );
}
elseif($media_type === 'images') {
    include( '_media_row__thumbs.php' );
}
elseif($media_type === 'video') {
    // include( '_media_row__thumbs.php' );
    include( 'video.php' );
} 
elseif($media_type === 'slider') {
    include( 'media-row-partials/_media_row__slider.php' );
} 
elseif($media_type === 'map') {
    include( 'media-row-partials/_media_row__map.php' );
}            
?>
<?php if($media_notes): ?>
    <div class="media-notes" style="background-color: rgba(0, 0, 0, 0.1);font-style: italic;font-size: 80%;padding: 15px 10px 1px 10px;margin-bottom: 20px;"><?php echo $media_notes; ?></div>
<?php endif; ?>