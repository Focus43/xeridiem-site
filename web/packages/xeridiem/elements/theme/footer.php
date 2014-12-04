<footer>
    <div class="container columns">
        <div class="row padless-grid">
            <div class="col-sm-6 col-md-3">
                <div class="inner border-green">
                    <?php
                    $a = new GlobalArea('Footer 1'); /* @var $a Area */
                    $a->display($c);
                    ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="inner border-blue">
                    <h5>Recent News</h5>
                    <?php
                    $blockTypeNav = BlockType::getByHandle('page_list');
                    $blockTypeNav->controller->num                  = 1;
                    $blockTypeNav->controller->ctID                 = CollectionType::getByHandle('news')->getCollectionTypeID();
                    $blockTypeNav->controller->cParentID            = 0;
                    $blockTypeNav->controller->orderBy              = 'chrono_desc';
                    $blockTypeNav->controller->rss                  = 0;
                    $blockTypeNav->controller->truncateSummaries    = 1;
                    $blockTypeNav->controller->truncateChars        = 128;
                    $blockTypeNav->render('templates/footer');
                    ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="inner border-purple">
                    <?php
                    $a = new GlobalArea('Footer 3'); /* @var $a Area */
                    $a->display($c);
                    ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="inner border-red">
                    <h5>Social Media</h5>
                    <a class="btn btn-default"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-default"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-default"><i class="fa fa-youtube-play"></i></a>
                    <a class="btn btn-default"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <?php
                    $a = new GlobalArea('Footer 5'); /* @var $a Area */
                    $a->display($c);
                    ?>
                </div>
                <div class="col-sm-7">
                    <div class="quick-links">
                        <?php
                        $a = new GlobalArea('Footer 6'); /* @var $a Area */
                        $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>