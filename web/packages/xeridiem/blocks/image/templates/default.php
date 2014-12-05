<?php
    $imageHelper  = Loader::helper('image'); /** @var ImageHelper $imageHelper */
    $thumbnailObj = $imageHelper->getThumbnail($controller->getFileObject(), 800, 800);
?>

<img src="<?php echo $thumbnailObj->src ?>" alt="" />