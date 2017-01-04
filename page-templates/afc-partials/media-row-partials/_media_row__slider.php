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
    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <?php foreach( $slides as $slide ): ?>
                <?php $image = $slide['image']; ?>
                <li class="orbit-slide">
                    <!-- <a href="<?php //echo $image['url']; ?>"> -->
                        <img class="orbit-image" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <!-- <figcaption class="orbit-caption">Encapsulating</figcaption> -->
                    <!-- </a> -->
                </li>
            <?php endforeach; ?>
        </ul>
        <nav class="orbit-bullets">
            <?php for ($i=0; $i < count($slides); $i++): ?> 
                <button data-slide="<?php echo $i ?>"><span class="show-for-sr"><?php echo $i ?> slide details.</span></button>
            <?php endfor ?> 
        </nav> 
    </div>
</div> 


