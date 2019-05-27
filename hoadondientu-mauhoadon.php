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
        <div class="uk-grid-medium" uk-grid="">
            <div class="uk-width-1-3@m">
                <h3 class="title10 c1 uk-position-relative uk-text-uppercase">20+ MẪU HÓA ĐƠN MIỄN PHÍ</h3>
                <p>Ngoài 10 mẫu hóa đơn miễn phí khách hàng có thể tùy biến sử dụng. Hilo còn hỗ trợ khách hàng thiết kế MIỄN PHÍ các mẫu hóa đơn có hình thức đơn giản. Đối với các hóa đơn thiết kế riêng có độ phức tạp cao, xin vui lòng liên hệ với bộ phận tư vấn hóa đơn điện tử của Hilo.</p>
                <a class="uk-button uk-button-default btn2" href="#"><span>đăng ký</span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

                <h3 class="title10 c1 uk-position-relative uk-text-uppercase">35 MẪU HÓA ĐƠN PHONG THỦY</h3>
                <p>Hilo Invoice nay đã có đến 35 mẫu Hóa Đơn Phong Thủy được thiết kế theo từng bản mệnh của chủ doanh nghiệp với ý nghĩa mang lại may mắn và thành công cho doanh nghiệp.</p>
                <a class="uk-button uk-button-default btn2" href="#"><span>xem ngay</span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="uk-width-2-3@m">
                <div class="uk-child-width-1-3@m" uk-grid="masonry: true">
                    <?php
                    $data = array
                    (
                        'imgs/hoadon/AN-THANH.png',
                        'imgs/hoadon/SUỐI-TIÊN.png',
                        'imgs/hoadon/THỜI-TRANG-MOLEZZ.png',
                        'imgs/hoadon/TRUNG-TÂM-Y-TẾ.png',
                        'imgs/hoadon/TRƯỜNG.png',
                        'imgs/hoadon/UHM.png',
                        'imgs/hoadon/VC2.jpg',
                        'imgs/hoadon/VẠN-XUÂN.png',
                        'imgs/hoadon/XUẤT-NHẬP-KHẨU.png',
                    );
                    foreach ($data as $k1 => $v1) { ?>
                        <div>
                            <img src="<?= $v1; ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>