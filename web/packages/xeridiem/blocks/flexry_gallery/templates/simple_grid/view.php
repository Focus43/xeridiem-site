<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */

$selectorID = sprintf('simple-grid-%s', $this->controller->bID);
$imageList  = $fileListObj->getPage();
?>

<div id="<?php echo $selectorID; ?>" class="simple-grid">
    <?php foreach($imageList AS $index => $flexryFile): /** @var FlexryFile $flexryFile */ ?>
        <a class="node" href="<?php echo Page::getByID($flexryFile->getAttribute('link'))->getCollectionPath(); ?>" style="background-image:url('<?php echo $flexryFile->thumbnailImgSrc(); ?>');">
            <div class="overlay">
                <div class="tabular">
                    <div class="cellular">
                        <h5><?php echo $flexryFile->getTitle(); ?></h5>
                        <p><?php echo $flexryFile->getDescription(); ?></p>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>