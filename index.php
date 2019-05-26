<?php include "header.php"; ?>
<?php include "slider_home.php"; ?>
<div class="uk-grid-collapse uk-child-width-1-3@m block1" uk-grid uk-height-match="target: > div > .box2">
    <?php
    $item = array
    (
        array(
            'src' => 'imgs/tvan-ready.png',
            'desc' => 'Tax Value Added Network: là chứng nhận có yêu cầu rất khắt khe của Bộ Tài Chính cho phép kết nối dữ liệu với Tổng Cục Thuế. Hilo là một trong số 9 đơn vị đạt được thỏa thuận này.',
        ),
        array(
            'src' => 'imgs/tvan-ready.png',
            'desc' => 'HĐĐT cung cấp bởi các đơn vị có T-VAN sẽ đảm bảo kết nối được với dữ liệu của cơ quan thuế từ năm 2020 theo Nghị định 119/NĐ-CP. Các đơn vị không có T-VAN không đảm bảo được điều này.',
        ),
        array(
            'src' => 'imgs/10-years.png',
            'desc' => 'Là thời gian tối thiểu mà Hilo Invoice cam kết sẽ đảm bảo hoạt động ổn định và duy trì dữ liệu hóa đơn điện tử cho dù chỉ có 1 khách hàng sử dụng dịch vụ.',
        ),
    );
    foreach ($item as $k1 => $v1) { ?>
        <div>
            <div class="uk-padding box2">
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <img src="<?= $v1['src']; ?>" alt="">
                    </div>
                    <div class="uk-width-expand">
                        <p class="uk-text-justify"><?= $v1['desc']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<div class="uk-container">
    <div class="uk-section">
        <div class="uk-child-width-1-4@m uk-grid-small" uk-grid uk-scrollspy="target: > div; cls: uk-animation-fade; repeat: true; delay: 500;">
            <?php
            $item = array
            (
                array(
                    'src' => '<i class="fa fa-heart" aria-hidden="true"></i>',
                    'title' => 'Tận tâm & Chuyên nghiệp',
                    'txt_list' => array(
                        'Hỗ trợ thủ tục đăng ký với Cơ quan thuế',
                        'Hỗ trợ tích hợp với các Phần mềm đang sử dụng',
                        'Hỗ trợ trong suốt thời gian sử dụng',
                    ),
                ),
                array(
                    'src' => '<i class="fa fa-diamond" aria-hidden="true"></i>',
                    'title' => 'Tiết kiệm chi phí',
                    'txt_list' => array(
                        'Tiết kiệm 40-80% so với Hóa đơn giấy',
                        'Tiết kiệm chi phí quản lý và vận hành doanh nghiệp',
                        'Giảm thiểu rủi ro khi sử dụng hóa đơn',
                    ),
                ),
                array(
                    'src' => '<i class="fa fa-shield" aria-hidden="true"></i>',
                    'title' => 'An toàn & Bảo mật',
                    'txt_list' => array(
                        'Hệ thống bảo mật đa lớp, đa luồng',
                        'Ứng dụng mã hóa dữ liệu cao cấp',
                        'Cơ chế sao lưu dữ liệu tức thời',
                        'Lưu trữ không thời hạn hóa đơn',
                    ),
                ),
                array(
                    'src' => '<i class="fa fa-rocket" aria-hidden="true"></i>',
                    'title' => 'Dễ dàng & Linh hoạt',
                    'txt_list' => array(
                        'Giao diện sử dụng thân thiện, rõ ràng',
                        'Dễ dàng làm quen và sử dụng thành thạo',
                        'Linh hoạt xử lý những vấn đề phát sinh như hóa đơn giấy',
                    ),
                ),
            );
            foreach ($item as $k1 => $v1) { ?>
                <div>
                    <div class="uk-text-center box3">
                        <?= $v1['src']; ?>
                    </div>
                    <h3 class="title1 uk-text-center"><?= $v1['title']; ?></h3>
                    <ul class="uk-list uk-list-bullet list1">
                        <?php foreach ($v1['txt_list'] as $k2 => $v2) { ?>
                            <li><?= $v2; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="uk-section-xsmall">
        <h2 class="title2 uk-text-center">HÓA ĐƠN ĐIỆN TỬ HILO-INVOICE</h2>
        <div uk-grid>
            <div class="uk-width-2-3@m">
                <h5 class="title3">Hãy đăng ký sử dụng hóa đơn điện tử Hilo Invoice để:</h5>
                <?php
                $item = array
                (
                    '– Xử lý, nhập thông tin của khách hàng, thông tin hàng hóa, đơn giá, thành tiền… một cách nhanh chóng',
                    '– Sở hữu trong mình nhiều ưu điểm vượt trội và tính năng nổi bật, hóa đơn điện tử Hilo Invoice đáp ứng được toàn bộ các tình huống phát hành hóa đơn tương tự như hóa đơn giấy',
                    '– Phát hành hóa đơn điện tử chỉ với một vài click chuột',
                    '– Thay vì cách gửi phiền phức như hóa đơn giấy, bạn có thể gửi hóa đơn đến khách hàng qua tin nhắn, email',
                    '– Không tốn tiền cho việc in ấn, vận chuyển hóa đơn giấy. Bạn chỉ cần ở văn phòng và phát hành hóa đơn điện tử đơn giản',
                    '– Hóa đơn điện tử Hilo Invoice có giá trị pháp lý như hóa đơn giấy và được các Cục Thuế khuyến khích sử dụng',
                    '– Khả năng tính hợp dữ liệu cao với phần mềm quản lý doanh nghiệp, bán hàng, kế toán, ERP…',
                    'Nổi bật với tính bảo mật, quản lý và lưu trữ an toàn dữ liệu hóa đơn – Hóa đơn điện tử Hilo Invoice chính là sự lựa chọn tối ưu nhất trên thị trường hóa đơn điện tử hiện nay.',
                );
                foreach ($item as $k1 => $v1) { ?>
                    <p class="desc1"><?= $v1; ?></p>
                <?php } ?>
                <h5 class="title3">Hãy liên hệ ngay với Hilo Invoice theo hotline <b>1900 29 29 62</b> để được tư vấn trực tiếp.</h5>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-margin">
                    <iframe src="https://www.youtube-nocookie.com/embed/YE7VzlLtp-4?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="560" height="315" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                </div>
                <div class="uk-margin">
                    <iframe src="https://www.youtube-nocookie.com/embed/YE7VzlLtp-4?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="560" height="315" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section block2" id="counter">
    <div class="uk-child-width-1-4@m" uk-grid>
        <?php
        $item = array
        (
            array(
                'number' => '4500',
                'desc' => 'Khách hàng',
            ),
            array(
                'number' => '15000000',
                'desc' => 'Hóa đơn đã phát hành',
            ),
            array(
                'number' => '30',
                'desc' => 'Nhân viên',
            ),
            array(
                'number' => '20',
                'desc' => 'Đối tác liên kết',
            ),
        );
        foreach ($item as $k1 => $v1) { ?>
            <div>
                <div class="uk-text-center">
                    <span class='counter-value' data-count="<?= $v1['number']; ?>">0</span>
                    <p class="desc2"><?= $v1['desc']; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <script>
        var a = 0;
        $(window).scroll(function() {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                // $this.text(this.countNum);
                                $this.text(numeral(this.countNum).format('0,0'));
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }

        });
    </script>
</div>
<div class="uk-container">
    <div class="uk-section-small">
        <h2 class="title2 uk-text-center">TÍNH NĂNG NỔI BẬT</h2>
        <div class="uk-child-width-1-3@m" uk-grid>
            <?php
            $data = array
            (
                array(
                    'title' => 'HỆ THỐNG NỀN TẢNG',
                    'list_txt' => array(
                        'Hệ thống phần mềm hoạt động trên nền tảng online, sử dụng phiên bản website tiện lợi, thân thiện cho người dùng.',
                        'Giao diện trực quan, dễ dàng sử dụng, quản lý theo danh mục.',
                        'Hệ thống hỗ trợ lưu trữ online và offline. Đặc biệt, Hilo-Invoice luôn có 1 server chính để lưu trữ dữ liệu và 1 server để backup dữ liệu nhằm tránh rủi ro và đảm bảo hệ thống luôn được ổn định.',
                        'Có sẵn kho mẫu hóa đơn đa dạng, do đó khách hàng có thể chủ động lựa chọn mẫu hóa đơn hoặc sử dụng dịch vụ thiết kế mẫu hóa đơn theo yêu cầu riêng của doanh nghiệp.',
                    ),
                ),
            );
            foreach ($data as $k1 => $v1) { ?>
                <div>
                    <h3 class="title4 uk-text-uppercase uk-text-center"><?= $v1['title']; ?></h3>
                    <ul class="uk-list">
                        <?php foreach ($v1['list_txt'] as $k2 => $v2) { ?>
                            <li>
                                <?= $v2; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>