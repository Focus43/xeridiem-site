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
                    <?php
                    $a = new GlobalArea('Footer 2'); /* @var $a Area */
                    $a->display($c);
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
                    <?php
                    $a = new GlobalArea('Footer 4'); /* @var $a Area */
                    $a->display($c);
                    ?>
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