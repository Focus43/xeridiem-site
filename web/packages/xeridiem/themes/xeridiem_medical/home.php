<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body>

    <div id="page-body">
        <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

        <section id="masthead">
            <img src="<?php echo XERIDIEM_IMAGE_PATH; ?>masthead.jpg" />
        </section>

        <main>
            <div class="container-fluid">
                <div id="triple-columns" class="row padless-grid">
                    <div class="col-sm-4 background-green">
                        <?php
                        $a = new Area('Main 1'); /* @var $a Area */ //$a->setAreaGridMaximumColumns(12);
                        $a->display($c);
                        ?>
                    </div>
                    <div class="col-sm-4 background-blue">
                        <?php
                        $a = new Area('Main 2'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                    <div class="col-sm-4 background-red">
                        <?php
                        $a = new Area('Main 3'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                </div>
                <div id="middle-section" class="row">
                    <div class="col-sm-5">
                        <?php
                        $a = new Area('Main 4'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                    <div class="col-sm-7">
                        <?php
                        $a = new Area('Main 5'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="row padless-grid">
                            <div class="col-sm-12">
                        <div class="parallax">
                            <div class="layer backdrop"></div>
                            <?php
                            $a = new Area('Main 6'); /* @var $a Area */
                            $a->display($c);
                            ?>
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