<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $templateHandle; ?>">

    <div id="page-body">
        <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

        <?php Loader::packageElement('theme/masthead', XeridiemPackage::PACKAGE_HANDLE, array('c' => $c)); ?>

        <main>
            <div class="container-fluid">
                <div class="row padless-grid">
                    <div class="col-sm-8">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="column-pad pad-2x">
                                        <ul class="list-inline">
                                            <li><button type="button" class="btn btn-hollow-green">Brief</button></li>
                                            <li><button type="button" class="btn btn-hollow-green">Specs</button></li>
                                            <li><button type="button" class="btn btn-hollow-green">Documentation</button></li>
                                        </ul>
                                        <?php $a = new Area('Main 1'); $a->display($c); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 background-gray">
                        <div class="column-pad pad-2x"><?php $a = new Area('Main 2'); $a->display($c); ?></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row padless-grid">
                    <div class="col-sm-12">
                        <?php $a = new Area('Main 3'); $a->display($c); ?>
                    </div>
                </div>
            </div>

            <div id="bottom-grid" class="flexgrid">
                <div class="flex-col-4 background-dark-blue">
                    <div class="column-pad pad-2x"><?php $a = new Area('Main 4'); $a->display($c); ?></div>
                </div>
                <div class="flex-col-8">
                    <?php $a = new Area('Main 5'); $a->display($c); ?>
                </div>
            </div>

        </main>
        <?php Loader::packageElement('theme/footer', XeridiemPackage::PACKAGE_HANDLE); ?>
    </div>

<?php Loader::element('footer_required'); ?>
</body>
</html>