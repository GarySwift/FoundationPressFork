<?php 
    // product_6_6
    $products = get_sub_field('products');
 ?>        

<?php $count=0; 
foreach( $products as $product ):
    $image = $product['image']; ?>
    <?php if ($count==0): ?>
        <div class="row module-wrapper">
    <?php endif; $count++; ?>

        <div class="product-6 small-12 medium-12 large-6 columns">
            <div class="wrapper">
                <h3 class="subheader"><?php echo $product['header']; ?></h3>
                <div class="prop"><?php echo $product['properties']; ?></div>
                <div class="app"><?php echo $product['applications']; ?></div>
            </div>
        </div>

    <?php if ($count==2): $count=0; ?>
        </div><br>
    <?php endif; ?>
<?php endforeach; ?>
