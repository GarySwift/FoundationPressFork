
<?php 
    // selling_points
    $columns = get_sub_field('point');
 ?>
<?php if($columns): ?>
<section class="module-wrapper">
    <div class="row small-up-1 medium-up-3 large-up-3 selling-points" data-equalizer ><!-- data-equalize-on="medium" -->
        <?php foreach( $columns as $column ): ?>
        <div class="column" > 
            <div class="selling-point">
                <div class="head"><h3 class="subheader"><?php echo $column['header']; ?></h3></div>
                <div class="body" data-equalizer-watch><?php echo $column['content']; ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>


<div class="row" data-equalizer>
  <div class="medium-4 columns">
    <div class="callout panel" data-equalizer-watch>
      <h3>Panel 1</h3>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
    </div>
  </div>
  <div class="medium-4 columns">
    <div class="callout panel" data-equalizer-watch>
      <h3>Panel 2</h3>
      <ul>
         <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
         <li>Aliquam tincidunt mauris eu risus.</li>
         <li>Vestibulum auctor dapibus neque.</li>
      </ul>
    </div>
  </div>
  <div class="medium-4 columns">
    <div class=" callout panel" data-equalizer-watch>
      <h3>Panel 3</h3>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </div>
  </div>
</div>
