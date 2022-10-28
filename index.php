<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/index.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/index.php');
    return;
}

include_once(G5_THEME_PATH . '/head.php');
?>

<main>
    <section class="main_visual">
        <div class="main_slide">
            <figure class="itm01">이미지</figure>
            <figure class="itm02">2미지</figure>
            <figure class="itm03">e미지</figure>
        </div>
        <div class="slogan">
            <h2>Passion for Health</h2>
            <p>삼성바이오에피스는 더 많은 환자들에게 고품질의 바이오의약품을 합리적인 가격으로 사용할 수 있는 기회를 제공하기 위해 최선을 다하고 있습니다.</p>
        </div>
    </section>
    <div>
        <? echo latest("theme/main_web", "qa", 5, 25); ?>
        <? echo latest("theme/main_photo", "qa", 5, 25); ?>
    </div>
</main>



<?php
include_once(G5_THEME_PATH . '/tail.php');
