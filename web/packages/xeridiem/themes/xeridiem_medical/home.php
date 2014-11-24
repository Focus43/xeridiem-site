<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body>

    <div id="page-body">
        <?php Loader::packageElement('theme/header', XeridiemPackage::PACKAGE_HANDLE); ?>

        <section id="masthead">
            <?php
            $a = new Area('Masthead'); /* @var $a Area */ //$a->setAreaGridMaximumColumns(12);
            $a->setBlockLimit(1);
            $a->display($c);
            ?>
        </section>

        <main>
            <div class="container-fluid">
                <div id="triple-columns" class="row padless-grid">
                    <div class="col-sm-4 background-green">
                        <div class="inner">
                            <?php
                            $a = new Area('Main 1'); /* @var $a Area */ //$a->setAreaGridMaximumColumns(12);
                            $a->display($c);
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4 background-blue">
                        <div class="inner">
                            <?php
                            $a = new Area('Main 2'); /* @var $a Area */
                            $a->display($c);
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4 background-red">
                        <?php
                        $a = new Area('Main 3'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="middle-section" class="row">
                    <div class="col-sm-6">
                        <?php
                        $a = new Area('Main 4'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                    <div class="col-sm-6">
                        <?php
                        $a = new Area('Main 5'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row padless-grid">
                    <div class="col-sm-12">
                        <div class="parallax tabular">
                            <div class="layer backdrop"></div>
                            <div class="cellular">
                                <div class="inner">
                                    <p>Lean Manufacturing Outsourcing</p>
                                    <a class="btn btn-danger btn-lg">Get A Quote <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <?php
                            //$a = new Area('Main 6'); /* @var $a Area */
                            //$a->display($c);
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