<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/tail.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/shop.tail.php');
    return;
}
?>



<!-- 인덱스 일 때는 안 보이고, 인덱스가 아닐 때 보임 -->
<?php
if (!defined('_INDEX_')) { // index가 아닐 때...
    include G5_THEME_PATH . '/sub.tail.php';
} // sub.tail.php를 뿌려준다는 것
?>


<footer class="footer">
    <ul>
        <li>주소 : <?= $sb_address ?> </li>
        <li>사업자등록번호 : <?= $sb_num ?></li>
        <li>대표전화 :<?= $sb_tel ?> &nbsp; Fax : <?= $sb_fax ?></li>
    </ul>
    <address>
        copyright &copy; <?= $sb_title ?> allright reserved.
    </address>
</footer>


</div>

<!-- <?php
        if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
        }

        if ($config['cf_analytics']) {
            echo $config['cf_analytics'];
        }
?> 

<?
if ($_GET["bo_table"] == "qa") {
    $page_num  = "4";
} else 
    if ($_GET["bo_table"] == "notice") {
    $page_num = "5";
}

?>
-->

<!-- php는 ;을 중요하게 생각함 -->
<script>
    $(function() {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    });
</script>

<script>
    $(function() {
        var num = <?= $page_num ?>
        $('.lnb li').eq(num - 1).addClass('on').siblings().removeClass('on');

        $('.mopen').on('click', function() {
            $('.header .gnb>ul').toggleClass('on')
        });

        $('.mopen').on('click', function() {
            $('.mopen').toggleClass('no')
        });
    });
</script>



<?php
include_once(G5_THEME_PATH . "/tail.sub.php");
