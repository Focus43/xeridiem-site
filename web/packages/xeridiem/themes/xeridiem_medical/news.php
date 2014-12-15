<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $templateHandle; ?>">

<div id="page-body">
    <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

    <?php Loader::packageElement('theme/masthead', XeridiemPackage::PACKAGE_HANDLE, array('c' => $c)); ?>

    <main>
        <div class="container-fluid">
            <div id="section-1" class="row padless-grid">
                <!-- ghetto fallback for browsers that don't support Flexbox -->
                <span class="pseudo-column"></span>
                <div class="col-sm-8">
                    <div class="column-pad pad-2x">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <?php $a = new Area('Main 1'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 background-gray">
                    <div class="column-pad pad-2x"><?php $a = new Area('Main 2'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?></div>
                </div>
            </div>

            <div id="section-2" class="row padless-grid">
                <div class="col-sm-12">
                    <?php $a = new Area('Main 3'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                </div>
            </div>
        </div>

    </main>
    <?php Loader::packageElement('theme/footer', XeridiemPackage::PACKAGE_HANDLE); ?>
</div>

<?php Loader::element('footer_required'); ?>
</body>
</html>