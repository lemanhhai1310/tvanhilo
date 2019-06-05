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
                'color' => '#f57014',
                'icon' => '<i class="iconsmind-Starfish"></i>',
            ),
            array(
                'txt' => 'tra cứu',
                'color' => '#f57014',
                'icon' => '<i class="iconsmind-Search-People"></i>',
            ),
            array(
                'txt' => 'kim',
                'color' => 'rgb(153,153,153)',
                'icon' => '<i class="iconsmind-Coin"></i>',
            ),
            array(
                'txt' => 'mộc',
                'color' => 'rgb(39,174,96)',
                'icon' => '<i class="iconsmind-Leafs"></i>',
            ),
            array(
                'txt' => 'thổ',
                'color' => 'rgb(246,185,59)',
                'icon' => '<i class="iconsmind-Globe"></i>',
            ),
            array(
                'txt' => 'thủy',
                'color' => 'rgb(52,152,219)',
                'icon' => '<i class="iconsmind-Drop"></i>',
            ),
            array(
                'txt' => 'hỏa',
                'color' => 'rgb(254,70,65)',
                'icon' => '<i class="iconsmind-Fire-Flame"></i>',
            ),
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