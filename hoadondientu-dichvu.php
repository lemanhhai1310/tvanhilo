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
        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-2-3@m">
                <h3 class="title10 uk-position-relative uk-text-uppercase">BẢNG GIÁ HÓA ĐƠN ĐIỆN TỬ HILO-INVOICE</h3>
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-striped table1">
                        <thead>
                        <tr>
                            <th>Gói dịch vụ</th>
                            <th>Số lượng hóa đơn</th>
                            <th>Đơn giá</th>
                            <th>Giá gói</th>
                            <th>Ghi chú</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><b>Hilo-500</b></td>
                            <td>500</td>
                            <td>1,500</td>
                            <td><b>750,000</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Hilo-1000</b></td>
                            <td>1,000</td>
                            <td>1,000</td>
                            <td><b>1,000,000</b></td>
                            <td>Miễn phí khởi tạo</td>
                        </tr>
                        <tr>
                            <td><b>Hilo-2000</b></td>
                            <td>2,000</td>
                            <td>750</td>
                            <td><b>1,500,000</b></td>
                            <td>Miễn phí khởi tạo</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <h3 class="title10 c1 uk-position-relative uk-text-uppercase">GIÁ ĐÃ BAO GỒM</h3>
                <ul class="uk-list list3">
                    <li><i class="fa fa-star" aria-hidden="true"></i>MIỄN PHÍ 05 mẫu hóa đơn cơ bản</li>
                    <li><i class="fa fa-star" aria-hidden="true"></i>KHÔNG GIỚI HẠN thời gian sử dụng</li>
                    <li><i class="fa fa-star" aria-hidden="true"></i>10 NĂM lưu trữ và tra cứu dữ liệu hóa đơn</li>
                    <li><i class="fa fa-star" aria-hidden="true"></i>HỖ TRỢ 100% thủ tục đăng ký phát hành hóa đơn trực tuyến</li>
                </ul>
                <h3 class="title10 c1 uk-position-relative uk-text-uppercase">GIÁ CHƯA BAO GỒM</h3>
                <ul class="uk-list list3">
                    <li><i class="fa fa-star-o" aria-hidden="true"></i>Phí khởi tạo và thiết lập: 500,000 VNĐ (chỉ tính lần đầu triển khai, bao gồm: Tạo tài khoản, thiết lập hệ thống lưu trữ, hệ thống tra cứu hóa đơn, duy trì và vận hành máy chủ. Miễn phí đối với gói dịch vụ Hilo-5000 trở lên)</li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i>Thuế VAT 10%</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>