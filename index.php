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
    <section class="service">
        <div class="inner flex">
            <div class="left">
                <h3>news &amp; notice <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice"><i class="xi-plus"></i></a></h3>
                <? echo latest("theme/main_web", "qa", 5, 25); ?>
            </div>
            <div class="center">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div style="width:480px" id="daumRoughmapContainer1667184328209" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1667184328209",
                        "key": "2cauk",
                        // "mapWidth": "640",
                        "mapHeight": "360"
                    }).render();
                </script>
            </div>
            <div class="right">
                <? include_once(G5_THEME_PATH . '/customer.php'); ?>
            </div>
        </div>
    </section>

</main>



<?php
include_once(G5_THEME_PATH . '/tail.php');
