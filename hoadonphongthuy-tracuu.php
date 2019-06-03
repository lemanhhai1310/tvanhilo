<?php $page = ""; ?>
<?php include "header.php"; ?>
<?php
$data = array
(
    array(
        'src' => 'imgs/bg1.jpg',
        'title' => 'MẪU HÓA ĐƠN PHONG THỦY HILO GIỚI THIỆU',
        'sub' => array(
            'giới thiệu',
            'tra cứu',
            'kim',
            'mộc',
            'thổ',
            'thủy',
            'hỏa',
        ),
    ),
);
foreach ($data as $k1 => $v1) { ?>
    <?php include "block1.php"; ?>
<?php } ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-overflow-auto">
            <table></table>

        </div>
    </div>
</div>
<?php include "footer.php"; ?>