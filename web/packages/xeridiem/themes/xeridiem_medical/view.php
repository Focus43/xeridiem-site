<?php
if( !($this->controller instanceof XeridiemPageController) ){
    $pageController = new XeridiemPageController;
    $pageController->attachThemeAssets( $this->controller );
}
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $templateHandle; ?>">

<div id="page-body">
    <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

    <?php Loader::packageElement('theme/masthead', XeridiemPackage::PACKAGE_HANDLE, array('c' => $c)); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="column-pad pad-2x">
                        <?php print $innerContent; ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php Loader::packageElement('theme/footer', XeridiemPackage::PACKAGE_HANDLE); ?>
</div>

<?php Loader::element('footer_required'); ?>
</body>
</html>