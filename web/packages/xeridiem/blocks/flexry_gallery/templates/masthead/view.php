<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */

$selectorID = sprintf('masthead-%s', $this->controller->bID);
$imageList  = $fileListObj->getPage();
?>

<div id="<?php echo $selectorID; ?>" class="flexry-masthead">
    <?php foreach($imageList AS $flexryFile): /** @var FlexryFile $flexryFile */ ?>
        <div class="node" style="background-image:url('<?php echo $flexryFile->fullImgSrc(); ?>');">
            <div class="tabular">
                <div class="cellular">
                    <div class="inner-1">
                        <div class="inner-2">
                            <h2><?php echo $flexryFile->getTitle(); ?></h2>
                            <p><?php echo $flexryFile->getDescription(); ?></p>
                            <a class="link-to" href="<?php echo Page::getByID($flexryFile->getAttribute('link'))->getCollectionPath(); ?>">
                                <?php echo $flexryFile->getAttribute('button_text'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    (function( _stack ){
        _stack.push(function(){
            console.log('initd');
        });
        window._flexry = _stack;
    }( window._flexry || [] ));
</script>