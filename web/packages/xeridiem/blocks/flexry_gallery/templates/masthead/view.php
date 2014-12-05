<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */

$selectorID = sprintf('masthead-%s', $this->controller->bID);
$imageList  = $fileListObj->getPage();
?>

<div id="<?php echo $selectorID; ?>" class="flexry-masthead">
    <?php foreach($imageList AS $index => $flexryFile): /** @var FlexryFile $flexryFile */ ?>
        <div class="node <?php echo ($index == 0) ? 'active': ''; ?>" style="background-image:url('<?php echo $flexryFile->fullImgSrc(); ?>');">
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
    <a class="arrow arrow-left"><i class="fa fa-angle-left"></i></a>
    <a class="arrow arrow-right"><i class="fa fa-angle-right"></i></a>
    <div class="markers">
        <?php for($i = 0; $i < count($imageList); $i++): ?>
            <a class="marker"><i class="fa fa-circle-o <?php echo ($i == 0) ? 'fa-circle': ''; ?>"></i></a>
        <?php endfor; ?>
    </div>
</div>

<script type="text/javascript">
    (function( _stack ){
        _stack.push(function(){
            $('#<?php echo $selectorID; ?>').mastheadSlider(<?php echo Loader::helper('json')->encode($settingsData); ?>);
        });
        window._flexry = _stack;
    }( window._flexry || [] ));
</script>