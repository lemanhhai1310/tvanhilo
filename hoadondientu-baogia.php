<?php $page = ""; ?>
<?php include "header.php"; ?>
<?php
$data = array
(
    array(
        'src' => 'imgs/bg.jpg',
        'title' => 'HÓA ĐƠN ĐIỆN TỬ HILO INVOICE',
        'sub' => array(
            'giới thiệu',
            'tính năng',
            'báo giá',
            'dịch vụ',
            'mẫu hóa đơn',
        ),
    ),
);
foreach ($data as $k1 => $v1) { ?>
    <?php include "block1.php"; ?>
<?php } ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-2-3@m">

            </div>
            <div class="uk-width-1-3@m">

            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>