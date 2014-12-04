<header>
    <div class="container">
        <div class="row fullheight">
            <div class="col-sm-3 col-lg-4 fullheight">
                <div class="tabular">
                    <div class="cellular">
                        <a class="logo" href="/">
                            <img src="<?php echo XERIDIEM_IMAGE_PATH; ?>logos/full_white.png" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-lg-8 fullheight menu-content">
                <div class="row links">
                    <div class="col-sm-12">
                        <a class="email inlined"><i class="fa fa-envelope"></i> info@xeridiem.com</a>
                        <a class="phone inlined"><i class="fa fa-phone"></i> +1-520-882-7794</a>
                        <div class="socials inlined">
                            <a><i class="fa fa-facebook"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                            <a><i class="fa fa-youtube-play"></i></a>
                            <a><i class="fa fa-linkedin"></i></a>
                        </div>
                        <a class="langs inlined">ENG <i class="fa fa-angle-down"></i></a>
                    </div>
                </div>

                <nav>
                    <?php
                    $blockTypeNav = BlockType::getByHandle('autonav');
                    $blockTypeNav->controller->orderBy      = 'display_asc';
                    $blockTypeNav->controller->displayPages             = 'top';
                    $blockTypeNav->controller->displaySubPages          = 'all';
                    $blockTypeNav->controller->displaySubPageLevels     = 'custom';
                    $blockTypeNav->controller->displaySubPageLevelsNum  = 1;
                    $blockTypeNav->render('templates/xeridiem_nav');
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>