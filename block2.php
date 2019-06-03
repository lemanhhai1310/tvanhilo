<div class="uk-background-cover block3 uk-section uk-position-relative" style="background-image: url('<?= $v1['src'] ?>')">
    <div class="uk-container">
        <h1 class="uk-text-center title8"><?= $v1['title'] ?></h1>
        <ul class="uk-child-width-auto uk-grid-small uk-flex-center" uk-grid>
            <?php foreach ($v1['sub'] as $k2 => $v2) { ?>
                <li><a class="uk-button uk-button-default btn2 btn3" href="#"><span><?= $v2; ?></span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="uk-position-bottom">
        <?php include "shape-divider.php"; ?>
    </div>
</div>