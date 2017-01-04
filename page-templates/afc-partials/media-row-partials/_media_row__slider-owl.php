<!-- <div class="row" id="demos">
        <div class="owl-carousel owl-theme">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
            <div class="item"><h4>8</h4></div>
            <div class="item"><h4>9</h4></div>
            <div class="item"><h4>10</h4></div>
            <div class="item"><h4>11</h4></div>
            <div class="item"><h4>12</h4></div>
        </div>
    </div> -->

<?php $slides = get_sub_field('slides');  ?>
<div class="row" id="demos">
    <div class="owl-carousel owl-theme">
        <?php foreach( $slides as $slide ): ?>
            <?php $image = $slide['image']; ?>
            <div class="item">
                <a href="<?php echo $image['url']; ?>">
                    <img class="thumbnail" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div> 


