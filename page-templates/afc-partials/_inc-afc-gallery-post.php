<?php
/* Start Image Gallery */
if( have_rows('images') ):
    $images = get_field('images');
    if( $images ): ?>
        <ul data-clearing class="clearing-thumbs">
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" data-caption="<?php echo $image['caption']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </li>
        <?php endforeach; ?>

<?php endif; //End if images ?>
        </ul>
<?php
endif; //End if row
/* End Image Gallery */
?>