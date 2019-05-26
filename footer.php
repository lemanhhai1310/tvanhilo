<footer id="footer">
    <div class="uk-section-small top">
        <div class="uk-container">
            <div class="uk-child-width-1-4@m uk-grid-small" uk-grid>
                <?php
                $data = array
                (
                    array(
                        'title' => 'GIỚI THIỆU VỀ HILO',
                        'link' => array(
                            'Về HILO',
                            'Khách hàng',
                            'Điều khoản sử dụng',
                            'Tuyển dụng',
                            'Liên hệ',
                        ),
                    ),
                    array(
                        'title' => 'HÓA ĐƠN ĐIỆN TỬ',
                        'link' => array(
                            'Giới thiệu Hilo Invoice',
                            'Báo giá',
                            'Mẫu hóa đơn',
                            'Tính năng',
                            'Dịch vụ',
                        ),
                    ),
                    array(
                        'title' => 'HÓA ĐƠN PHONG THỦY',
                        'link' => array(
                            'Mệnh Kim',
                            'Mệnh Mộc',
                            'Mệnh Thổ',
                            'Mệnh Thủy',
                            'Mệnh Hỏa',
                        ),
                    ),
                );
                foreach ($data as $k1 => $v1) { ?>
                    <div>
                        <h4 class="title7"><?= $v1['title']; ?></h4>
                        <ul class="uk-list uk-list-divider list2">
                            <?php foreach ($v1['link'] as $k2 => $v2) { ?>
                                <li><a href="#"><?= $v2; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <div>
                    <h4 class="title7">VĂN PHÒNG GIAO DỊCH</h4>
                    <address>
                        2/95 Chùa Bộc, Đống Đa, Hà Nội <br>
                        Hotline: 1900 29 29 62 <br>
                        Email: support@tvanhilo.vn
                    </address>
                    <h4 class="title7">CHI NHÁNH TP. HỒ CHÍ MINH</h4>
                    <address>
                        Số 10, Đường C1, Phường 13
                        Quận Tân Bình, TP. Hồ Chí Minh
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall bottom">
        <div class="uk-container">
            <div class="uk-child-width-auto uk-flex uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <p>© 2019 Hóa đơn điện tử HILO. Nhanh chóng - An toàn - Tiết kiệm</p>
                </div>
                <div>
                    <ul class="uk-list uk-child-width-auto uk-grid-small" uk-grid>
                        <li class="uk-margin-remove"><a href="#"><span uk-icon="icon: facebook; ratio: 1"></span></a></li>
                        <li class="uk-margin-remove"><a href="#"><span uk-icon="icon: youtube; ratio: 1"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>
</body>
</html>