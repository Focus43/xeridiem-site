<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */

$selectorID = sprintf('masthead-%s', $this->controller->bID);
$imageList  = $fileListObj->getPage();
$imageObj   = $imageList[0]; /** @var FlexryFile $imageObj */
if($imageObj instanceof FlexryFile): ?>

<a class="link-grid-item" href="<?php echo Page::getByID($imageObj->getAttribute('link'))->getCollectionPath(); ?>">
    <img src="<?php echo $imageObj->thumbnailImgSrc(); ?>" alt="" />
    <h3><?php echo $imageObj->getTitle(); ?></h3>
    <span><?php echo $imageObj->getDescription(); ?></span>
</a>

<?php endif; ?>