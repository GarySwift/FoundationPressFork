<?php 
    // learn-more-large
    $columns = get_sub_field('slides');
 ?>        

<div class="learn-more block">
<?php foreach( $columns as $column ): 
$image = $column['image']; ?>
    <div class="row slide-row">
        <div class="columns small-12 medium-12 large-6">
        <?php
        if($image): ?>
        <img 
data-interchange="[<?php echo $image['sizes']['medium']; ?>, (default)], [<?php echo $image['sizes']['large']; ?>, (large)]"
         alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        </div>
        <div class="columns small-12 medium-12 large-6">
        <h3 class="subheader"><?php echo $column['header']; ?></h3>
        <h5 class="subheader"><?php echo $column['subheader']; ?></h5>
<div class=""><?php echo $column['content']; ?></div>
<a role="button" href="<?php echo esc_url( home_url( '/' ) )+'/blog/'; ?>" class="button">Learn More</a>
        </div>
    </div>
        <?php endforeach; ?>
</div>