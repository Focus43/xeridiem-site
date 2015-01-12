<footer>
    <div class="container columns">
        <div class="padless-grid">
            <div class="col-sm-6 col-md-3">
                <div class="inner border-green">
                    <?php
                    $a = new GlobalArea('Footer 1'); /* @var $a Area */
                    XeridiemPackage::setAreaDefaultTemplates($a);
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
                    <h5 class="marginless"><i class="fa fa-twitter"></i> &#64;<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_twitter_feed_handle'); ?></h5>
                    <a class="twitter-timeline" href="https://twitter.com/<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_twitter_feed_handle'); ?>" data-widget-id="<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_twitter_widget_id'); ?>" data-tweet-limit="1" data-theme="dark" data-link-color="#419644" data-chrome="noheader nofooter noborders noscrollbar transparent" height="auto" data-height="auto">
                        Tweets by &#64;<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_twitter_feed_handle'); ?>
                    </a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="inner border-red">
                    <h5>Social Media</h5>
                    <a class="btn btn-default social-link" target="_blank" href="<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_social_link_facebook'); ?>"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-default social-link" target="_blank" href="<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_social_link_twitter'); ?>"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-default social-link" target="_blank" href="<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_social_link_youtube'); ?>"><i class="fa fa-youtube-play"></i></a>
                    <a class="btn btn-default social-link" target="_blank" href="<?php echo XeridiemPackage::getPackageConfigObj()->get('theme_social_link_linkedin'); ?>"><i class="fa fa-linkedin"></i></a>
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
                    XeridiemPackage::setAreaDefaultTemplates($a);
                    $a->display($c);
                    ?>
                </div>
                <div class="col-sm-7">
                    <div class="quick-links">
                        <?php
                        $a = new GlobalArea('Footer 6'); /* @var $a Area */
                        XeridiemPackage::setAreaDefaultTemplates($a);
                        $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>