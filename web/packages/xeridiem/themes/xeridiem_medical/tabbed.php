<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $templateHandle; ?>">

    <div id="page-body">
        <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

        <?php Loader::packageElement('theme/masthead', XeridiemPackage::PACKAGE_HANDLE, array('c' => $c)); ?>

        <main>
            <div id="section-1" class="container-fluid">
                <div class="flexgrid row padless-grid">
                    <div class="flex-col-sm-8 flex-justify-start col-sm-8">
                        <div class="column-pad pad-2x">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <ul class="content-tabs list-inline">
                                            <li><button type="button" class="btn btn-hollow-green"><?php $a = new Area('Tab 1'); $a->setBlockLimit(1); $a->display($c); ?></button></li>
                                            <li><button type="button" class="btn btn-hollow-green"><?php $a = new Area('Tab 2'); $a->setBlockLimit(1); $a->display($c); ?></button></li>
                                            <li><button type="button" class="btn btn-hollow-green"><?php $a = new Area('Tab 3'); $a->setBlockLimit(1); $a->display($c); ?></button></li>
                                        </ul>
                                        <div class="content-tab-nodes">
                                            <div class="node">
                                                <?php $a = new Area('Tab 1 Content'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                                            </div>
                                            <div class="node">
                                                <?php $a = new Area('Tab 2 Content'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                                            </div>
                                            <div class="node">
                                                <?php $a = new Area('Tab 3 Content'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-sm-4 flex-justify-start col-sm-4 background-gray">
                        <div class="column-pad pad-2x"><?php $a = new Area('Main 2'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?></div>
                    </div>
                </div>
            </div>

            <div id="section-2" class="container-fluid">
                <div class="row padless-grid">
                    <div class="col-sm-12">
                        <?php $a = new Area('Main 3'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                    </div>
                </div>
            </div>

            <div id="section-3" class="container-fluid">
                <div class="flexgrid row padless-grid">
                    <div class="flex-col-sm-4 flex-justify-start background-dark-blue col-sm-4">
                        <div class="column-pad pad-2x"><?php $a = new Area('Main 4'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?></div>
                    </div>
                    <div class="flex-col-sm-8 col-sm-8">
                        <?php $a = new Area('Main 5'); XeridiemPackage::setAreaDefaultTemplates($a); $a->display($c); ?>
                    </div>
                </div>
            </div>

        </main>
        <?php Loader::packageElement('theme/footer', XeridiemPackage::PACKAGE_HANDLE); ?>
    </div>

<?php Loader::element('footer_required'); ?>
</body>
</html>