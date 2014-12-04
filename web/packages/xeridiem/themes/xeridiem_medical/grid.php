<!DOCTYPE html>
<html lang="<?php echo LANGUAGE; ?>" class="<?php echo $cmsClasses; ?>" style="height:100%;">
<?php Loader::packageElement('theme/head', XeridiemPackage::PACKAGE_HANDLE); ?>

<body class="<?php echo $templateHandle; ?>" style="height:100%;">

    <div id="page-body" style="height:100%;">
        <div class="flexgrid" style="min-height:100%;">
            <div class="flex-col-5 background-dark-blue">
                <div class="flexgrid">
                    <div class="flex-col-12">
                        something
                    </div>
                </div>
                <div class="flexgrid">
                    <div class="flex-col-12">
                        something
                    </div>
                </div>
                <div class="flexgrid">
                    <div class="flex-col-12">
                        something
                    </div>
                </div>
            </div>
            <div class="flex-col-7 background-gray">
                <div class="flexgrid">
                    <div class="flex-col-4">
                        <div class="column-pad">
                            <h2 style="padding:20px 0;">Something in</h2>
                            <p>here yea?</p>
                        </div>
                    </div>
                    <div class="flex-col-4">
                        <div class="column-pad">
                            <h2 style="padding:20px 0;">Something in</h2>
                            <p>here yea?</p>
                        </div>
                    </div>
                    <div class="flex-col-4">
                        <div class="column-pad">
                            <h2 style="padding:20px 0;">Something in</h2>
                            <p>here yea?</p>
                        </div>
                    </div>
                </div>
                <div class="flexgrid">
                    <div class="flex-col-4">
                        <div class="column-pad">
                            <h2 style="padding:20px 0;">Something in</h2>
                            <p>here yea?</p>
                        </div>
                    </div>
                    <div class="flex-col-4">
                        <div class="column-pad">
                            <h2 style="padding:20px 0;">Something in</h2>
                            <p>here yea?</p>
                        </div>
                    </div>
                    <div class="flex-col-4">
                        <div class="column-pad">
                            <h2 style="padding:20px 0;">Something in</h2>
                            <p>here yea?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php Loader::element('footer_required'); ?>
</body>
</html>