
<?php if($link_block): ?>
    <a href="<?php echo $link ?>" title="<?php echo $title; ?>" <?php echo $target; ?>>
        <?php include('_call-to-action-block.php') ?>
    </a>
<?php else: ?>
    <?php include('_call-to-action-block.php') ?>
<?php endif; ?>


                           