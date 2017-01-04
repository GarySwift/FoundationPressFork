<?php if(get_field('Video')): ?>
<div class="embed-container">
    <?php
    // get iframe HTML
    $iframe = get_field('Video');

    // use preg_match to find iframe src
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];

    // add extra params to iframe src
    $params = array(
        'controls'    => 0,
        'hd'        => 1,
        'autohide'    => 1
    );

    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);

    // add extra attributes to iframe html
    $attributes = 'frameborder="0"';
    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
    echo $iframe;
    ?>
</div>
<?php endif; ?>