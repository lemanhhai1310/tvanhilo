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
<?php include "footer.php"; ?>