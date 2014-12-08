<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="ccm-ui">
    <div style="padding-bottom:1rem;">
        <?php echo $assetHelper->image('file-instance', 'fileID', 'Choose Image', $controller->fileObject()); ?>
    </div>

    <div style="padding-bottom:1rem;">
        <?php $this->inc('editor_init.php'); ?>
        <div id="ccm-editor-pane">
            <textarea class="advancedEditor ccm-advanced-editor" name="content">
                <?php echo Loader::helper('text')->specialchars($controller->getContentEditMode()); ?>
            </textarea>
        </div>
    </div>
</div>

