<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $templateHandle; ?>">

    <div id="page-body">
        <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

        <?php Loader::packageElement('theme/masthead', XeridiemPackage::PACKAGE_HANDLE, array('c' => $c)); ?>

        <main>
            <div class="container-fluid">
                <div id="triple-columns" class="row padless-grid">
                    <div class="col-sm-4 background-green">
                        <div class="column-pad"><?php $a = new Area('Main 1'); $a->display($c); ?></div>
                    </div>
                    <div class="col-sm-4 background-blue">
                        <div class="column-pad"><?php $a = new Area('Main 2'); $a->display($c); ?></div>
                    </div>
                    <div class="col-sm-4 background-red">
                        <div class="column-pad"><?php $a = new Area('Main 3'); $a->display($c); ?></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div id="middle-section" class="row">
                    <div class="col-sm-6">
                        <div class="column-pad"><?php $a = new Area('Main 4'); $a->display($c); ?></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="column-pad"><?php $a = new Area('Main 5'); $a->display($c); ?></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row padless-grid">
                    <div class="col-sm-12">
                        <?php $a = new Area('Main 6'); $a->display($c); ?>
                    </div>
                </div>
            </div>
        </main>
        <?php Loader::packageElement('theme/footer', XeridiemPackage::PACKAGE_HANDLE); ?>
    </div>

<?php Loader::element('footer_required'); ?>
</body>
</html>