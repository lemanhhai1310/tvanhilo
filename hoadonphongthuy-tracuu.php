<?php $page = ""; ?>
<?php include "header.php"; ?>
<?php
$data = array
(
    array(
        'src' => 'imgs/bg1.jpg',
        'title' => 'MẪU HÓA ĐƠN PHONG THỦY HILO GIỚI THIỆU',
        'sub' => array(
            array(
                'txt' => 'giới thiệu',
                'color' => '',
                'icon' => '<i class="fa fa-star-o" aria-hidden="true"></i>',
            ),
            array(
                'txt' => 'tra cứu',
                'color' => '',
                'icon' => '<i class="fa fa-search" aria-hidden="true"></i>',
            ),
            array(
                'txt' => 'kim',
                'color' => '',
                'icon' => '<i class="fa fa-search" aria-hidden="true"></i>',
            ),
            'mộc',
            'thổ',
            'thủy',
            'hỏa',
        ),
    ),
);
foreach ($data as $k1 => $v1) { ?>
    <?php include "block2.php"; ?>
<?php } ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-auto@s uk-grid-small uk-margin uk-flex-middle uk-flex-right" uk-grid>
            <div>
                <label class="uk-form-label" for="form-stacked-text"><span uk-icon="search"></span> Tìm theo năm sinh:</label>
            </div>
            <div>
                <input class="uk-input" id="form-stacked-text" type="text" placeholder="Nhập năm sinh">
            </div>
        </div>
        <div class="uk-overflow-auto">
            <table class="uk-table uk-text-center uk-table-striped uk-table-middle hl-table1">
                <thead>
                <tr>
                    <th>Năm sinh</th>
                    <th>Năm âm lịch</th>
                    <th>Tuổi âm lịch</th>
                    <th>Mệnh ngũ hành</th>
                    <th>Mẫu hóa đơn hợp mệnh</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1939</td>
                    <td>Kỷ Mão</td>
                    <td>81</td>
                    <td>Thành Đầu Thổ</td>
                    <td>
                        <a href="#" class="btn2 uk-button uk-button-default">
                            <span>xem</span>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1939</td>
                    <td>Kỷ Mão</td>
                    <td>81</td>
                    <td>Thành Đầu Thổ</td>
                    <td>
                        <a href="#" class="btn2 uk-button uk-button-default">
                            <span>xem</span>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>