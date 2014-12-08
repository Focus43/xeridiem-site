<?php defined('C5_EXECUTE') or die("Access Denied.");

if(is_object($resizedImageObj)): ?>

<a class="link-grid-item" href="<?php echo Page::getByID($controller->fileObject()->getAttribute('link'))->getCollectionPath(); ?>">
    <img src="<?php echo $resizedImageObj->src; ?>" alt="" />
    <?php echo $content; ?>
</a>

<?php endif; ?>