<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1377:561">
    <ul class="uk-slideshow-items">
        <?php
        $item = array
        (
            array(
                'src' => 'imgs/slide/main2.jpg',
                'link_txt' => array(
                    'đăng ký sử dụng',
                    'đăng ký đại lý',
                ),
            ),
            array(
                'src' => 'imgs/slide/phongthuy-main.jpg',
                'link_txt' => array(
                    'xem ngay',
                ),
            ),
            array(
                'src' => 'imgs/slide/slide23.jpg',
                'link_txt' => array(
                    'đăng ký sử dụng',
                    'đăng ký đại lý',
                ),
            ),
        );
        foreach ($item as $k1 => $v1) { ?>
            <li>
                <img src="<?= $v1['src']; ?>" alt="" uk-cover>
                <div class="uk-position-bottom-center box1 uk-text-center uk-margin-large" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom; repeat: true;">
                    <?php foreach ($v1['link_txt'] as $k2 => $v2) { ?>
                        <div class="uk-display-inline-block"><a href="#" class="uk-button btn1 uk-button-secondary"><?= $v2; ?></a></div>
                    <?php } ?>
                </div>
            </li>
        <?php } ?>
    </ul>
    <a class="uk-position-center-left nav_slide_home uk-position-small uk-padding-remove uk-margin-remove" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right nav_slide_home uk-position-small uk-padding-remove uk-margin-remove" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    <ul class="uk-position-bottom dot_slide_home uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>