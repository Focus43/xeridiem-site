<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var $fileObj FileVersion */
$fileObj        = $controller->fileObject();
/** @var $linkObj Collection */
$collectionObj  = Page::getByID($fileObj->getAttribute('link'));
/** @var $altFileObj FileVersion */
$altFileObj     = $fileObj->getAttribute('alternate');

if(is_object($resizedImageObj)): ?>

<a class="link-grid-item <?php echo ($altFileObj instanceof File) ? 'has-alt' : ''; ?>" href="<?php echo $collectionObj->getCollectionPath(); ?>">
    <?php
        echo '<img class="main-img" alt="" src="' . $resizedImageObj->src . '" />';
        if( $altFileObj instanceof File ){
            echo '<img class="alt-img" alt="" src="' . Loader::helper('image')->getThumbnail($altFileObj, ImageAndContentBlockController::MAX_IMAGE_WIDTH, ImageAndContentBlockController::MAX_IMAGE_HEIGHT, true)->src . '" />';
        }
        echo $content;
    ?>
</a>

<?php endif; ?>