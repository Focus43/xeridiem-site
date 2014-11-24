<header>
    <div class="container">
        <div class="row fullheight">
            <div class="col-sm-4 fullheight">
                <div class="tabular">
                    <div class="cellular">
                        <img src="<?php echo XERIDIEM_IMAGE_PATH; ?>logo_white.png" />
                    </div>
                </div>
            </div>
            <div class="col-sm-8 fullheight menu-content">
                <div class="row links">
                    <div class="col-sm-12">
                        <a><i class="fa fa-envelope"></i> info@xeridiem.com</a>
                        <a><i class="fa fa-phone"></i> info@xeridiem.com</a>

                    </div>
                </div>

                <nav class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
                                $blockTypeNav = BlockType::getByHandle('autonav');
                                $blockTypeNav->controller->orderBy      = 'display_asc';
                                $blockTypeNav->controller->displayPages             = 'top';
                                $blockTypeNav->controller->displaySubPages          = 'all';
                                $blockTypeNav->controller->displaySubPageLevels     = 'custom';
                                $blockTypeNav->controller->displaySubPageLevelsNum  = 1;
                                $blockTypeNav->render('templates/xeridiem_nav');
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>