<?php $page = ""; ?>
<?php include "header.php"; ?>
<?php
$data = array
(
    array(
        'src' => 'https://tvanhilo.vn/wp-content/uploads/2019/01/kim-webbg.jpg',
        'title' => 'MẪU HÓA ĐƠN PHONG THỦY MỆNH KIM',
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
        <h1 class="uk-text-center hl-title1">NHẤN VÀO CÁC TAB BÊN DƯỚI ĐỂ XEM PHÂN TÍCH VỀ CÁC NẠP ÂM CỦA MỆNH KIM</h1>
        <div class="uk-flex-center uk-flex uk-margin-medium-bottom" uk-switcher="animation: uk-animation-fade; toggle: > *">
            <?php
            $data = array
            (
                'Bạch Lạp Kim',
                'Kim Lạp Kim',
                'Thoa Xuyến Kim',
                'Kiếm Phong Kim',
                'Hải Trung Kim',
                'Sa Trung Kim',
            );
            foreach ($data as $k1 => $v1) { ?>
                <button class="uk-button uk-button-default hl-btn1" type="button"><?= $v1; ?></button>
            <?php } ?>
        </div>

        <ul class="uk-switcher uk-margin">
            <li>
                <div uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="uk-text-center">
                            <h4 class="hl-title2">Mẫu hóa đơn mệnh Bạch Lạp Kim</h4>
                            <img src="https://tvanhilo.vn/wp-content/uploads/2019/01/kim-bach-lap-kim.jpg" alt="">
                            <h4 class="hl-title2">Mã: PT111</h4>
                        </div>
                    </div>
                    <div class="uk-width-expand@s">
                        <h4 class="hl-title2">Mệnh Bạch Lạp Kim là gì?</h4>
                        <ul class="uk-list uk-list-bullet">
                            <li>Từ “Bạch Lạp” trong Hán văn nghĩa là cây nến trắng, khi đốt, sáp nến chảy ra. Ở đây là dạng Kim loại được nung nóng chảy giống như sáp nến chảy ra khi đốt. Một số sách dịch tử này là kim loại ở chân đỡ, giá cắm nến. Tuy nhiên cách dịch này chưa được sát nghĩa, và chưa chuẩn xác. Chính xác của nạp âm này chính là dạng vật chất kim loại nung chảy, tức là ở thời kỳ quá độ trong quá trình chiết tách kim loại từ tạp chất sang dạng nguyên chất, tinh khiết.</li>
                            <li>Chính vì lẽ đó, khác với các mệnh Kim khác, Bạch Lạp Kim thường không bị khắc bởi mệnh Hỏa mà lại nhờ Hỏa mà càng trở nên cường thịnh</li>
                        </ul>
                        <h4 class="hl-title2">Người mang bản mệnh Bạch Lạp Kim</h4>
                        <ul class="uk-list uk-list-bullet">
                            <li>Canh Thìn: 1940, 2000, 2060</li>
                            <li>Tân Tị: 1941, 2001, 2061</li>
                        </ul>
                        <h4 class="hl-title2">Mệnh Bạch Lạp Kim hợp màu gì?</h4>
                        <ul class="uk-list uk-list-bullet">
                            <li><b>Màu hợp:</b> Kim loại nóng chảy cần Hỏa khí để đẩy mạnh nó trong quá trình nhiệt luyện nên màu đỏ (thuộc Hỏa) cát lợi vô cùng. Ngoài ra, màu trắng, xám (thuộc Kim) tương hòa với bản mệnh cũng là một màu cát lợi.</li>
                            <li><b>Màu khắc:</b> Quá trình luyện kim rất kỵ tạp chất, nên các màu vàng (thuộc Thổ), màu xanh lá cây (thuộc Mộc), đặc biệt là màu xanh nước biển (thuộc Thủy) đều không mang lại may mắn và cát lợi đối với họ.</li>
                        </ul>
                        <p>Tham khảo thêm tại: <a href="#">https://tuvikhoahoc.vn/bach-lap-kim</a></p>
                    </div>
                </div>
                <h2 class="uk-text-center hl-title1 c1">CÁC MẪU HÓA ĐƠN TỐT CHO MỆNH BẠCH LẠP KIM</h2>
            </li>
            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
        </ul>
    </div>
</div>
<?php include "footer.php"; ?>