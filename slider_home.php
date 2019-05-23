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
            </li>
        <?php } ?>
    </ul>
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div>