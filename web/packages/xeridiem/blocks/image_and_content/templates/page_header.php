<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="page-masthead tabular" style="background-image:url('<?php echo is_object($resizedImageObj) ? $resizedImageObj->src : ''; ?>');">
    <div class="cellular">
        <?php echo $content; ?>
    </div>
</div>