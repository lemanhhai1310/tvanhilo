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
        <h2 class="title2 title9 uk-text-center">DỊCH VỤ ĐI KÈM HILO-INVOICE</h2>
        <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match" uk-grid>
            <?php
            $data = array
            (
                array(
                    'title' => 'Dịch vụ tư vấn sử dụng',
                    'sub' => array(
                        'Tư vấn về lựa chọn sử dụng phần mềm phù hợp với mô hình quản lý của công ty',
                        'Tư vấn về sử dụng phần mềm sau bán hàng',
                    ),
                ),
                array(
                    'title' => 'Dịch vụ đào tạo sử dụng',
                    'sub' => array(
                        'Đào tạo trực tiếp tại Doanh nghiệp',
                        'Đào tạo theo yêu cầu của Doanh nghiệp',
                    ),
                ),
                array(
                    'title' => 'Dịch vụ hỗ trợ từ xa',
                    'sub' => array(
                        'Hotline: 1900 29 29 62',
                        'Hỗ trợ điều khiển từ xa qua TeamViewer',
                        'Hỗ trợ qua Email: service@tvanhilo.vn',
                        'Hỗ trợ hỏi đáp qua website: www.tvanhilo.vn',
                        'Hỗ trợ qua Facebook:',
                    ),
                ),
            );
            foreach ($data as $k1 => $v1) { ?>
                <div>
                    <div class="uk-card card2 uk-card-body">
                        <h3 class="title"><?= $v1['title'] ?></h3>
                        <ul class="uk-list uk-list-bullet">
                            <?php foreach ($v1['sub'] as $k2 => $v2) { ?>
                                <li><?= $v2; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>