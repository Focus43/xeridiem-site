<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $templateHandle; ?>">

    <div id="page-body">
        <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

        <?php Loader::packageElement('theme/masthead', XeridiemPackage::PACKAGE_HANDLE, array('c' => $c)); ?>

        <main>
            <div class="container-fluid">
                <div id="triple-columns" class="flexgrid row padless-grid">
                    <div class="flex-col-sm-6 flex-col-md-4 col-sm-4 background-green">
                        <div class="column-pad">
                            <div class="inner">
                                <?php $a = new Area('Main 1'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-sm-6 flex-col-md-4 col-sm-4 background-blue">
                        <div class="column-pad">
                            <div class="inner">
                                <?php $a = new Area('Main 2'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-sm-12 flex-col-md-4 col-sm-4 background-red">
                        <div class="column-pad">
                            <div class="inner">
                                <?php $a = new Area('Main 3'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="middle-section" class="flexgrid row padless-grid">
                    <div class="flex-col-sm-12 flex-col-md-6 col-sm-6">
                        <div class="column-pad pad-2x"><?php $a = new Area('Main 4'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?></div>
                    </div>
                    <div class="flex-col-sm-12 flex-col-md-6 col-sm-6">
                        <div class="column-pad pad-2x"><?php $a = new Area('Main 5'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?></div>
                    </div>
                </div>

                <div class="row padless-grid">
                    <div class="col-sm-12">
                        <?php $a = new Area('Main 6'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                    </div>
                </div>
            </div>
        </main>
        <?php Loader::packageElement('theme/footer', XeridiemPackage::PACKAGE_HANDLE); ?>
    </div>

<?php Loader::element('footer_required'); ?>
</body>
</html>