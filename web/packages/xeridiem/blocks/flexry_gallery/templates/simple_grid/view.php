<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */

$selectorID = sprintf('simple-grid-%s', $this->controller->bID);
$imageList  = $fileListObj->getPage();
?>

<div id="<?php echo $selectorID; ?>" class="simple-grid">
    <?php foreach($imageList AS $index => $flexryFile): /** @var FlexryFile $flexryFile */ ?>
        <a class="node" data-src-full="<?php echo $flexryFile->fullImgSrc(); ?>" style="background-image:url('<?php echo $flexryFile->thumbnailImgSrc(); ?>');">
            <div class="overlay">
                <div class="tabular">
                    <div class="cellular">
                        <h5 class="title"><?php echo $flexryFile->getTitle(); ?></h5>
                        <p class="descr"><?php echo $flexryFile->getDescription(); ?></p>
                        <img src="<?php echo $flexryFile->thumbnailImgSrc(); ?>" />
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    (function( _stack ){
        _stack.push(function(){
            <?php echo $lightboxHelper->bindTo($selectorID)->itemTargets('.node')->initOutput(); ?>
        });
        window._flexry = _stack;
    }( window._flexry || [] ));
</script>