<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="parallax" style="background-image:url('<?php echo is_object($resizedImageObj) ? $resizedImageObj->src : ''; ?>');">
    <?php echo $content; ?>
</div>