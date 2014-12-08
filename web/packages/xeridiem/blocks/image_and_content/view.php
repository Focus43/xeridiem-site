<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="bt-image-and-content">
    <?php if(is_object($resizedImageObj)): ?>
        <img src="<?php echo $resizedImageObj->src;  ?>" alt="" />
    <?php endif; ?>

    <?php echo $content; ?>
</div>