<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
/** @var FlexryFileList $fileListObj */

$selectorID = sprintf('flexryDefault-%s', $this->controller->bID);
$imageList  = $fileListObj->get();

foreach($imageList AS $flexryFile): /** @var FlexryFile $flexryFile */
    echo '<img class="iconic" src="'.$flexryFile->thumbnailImgSrc().'" alt="'.$flexryFile->getTitle().'" />';
endforeach;