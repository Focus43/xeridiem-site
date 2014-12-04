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
            <div class="col-sm-9 col-lg-8 fullheight">
                <div class="row tertiary">
                    <div class="col-sm-12">
                        <ul class="list-inline">
                            <li><a class="email"><i class="fa fa-envelope"></i> info@xeridiem.com</a></li>
                            <li><a class="phone"><i class="fa fa-phone"></i> +1-520-882-7794</a></li>
                            <li>
                                <a class="sociable"><i class="fa fa-facebook"></i></a>
                                <a class="sociable"><i class="fa fa-twitter"></i></a>
                                <a class="sociable"><i class="fa fa-youtube-play"></i></a>
                                <a class="sociable"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <div id="google_translate_element"></div>
                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                    }
                                </script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            </li>
                        </ul>
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