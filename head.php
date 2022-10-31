<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/head.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH . '/shop.head.php');
    return;
}
include_once(G5_THEME_PATH . '/doc/assets.php');
include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>

<!-- 팝업  -->
<?php
if (defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">
    <div class="top_slogan">
        <ul class="inner flex">
            <li><?= $sb_slogan ?></li>
            <li>
                <a href="/adm" target="_blank">
                    <i class="xi-bars"></i>
                </a>
            </li>
        </ul>
    </div>
    <header class="header">
        <div class="inner flex">
            <h1>
                <a href="/">
                    <img src="<?php echo G5_THEME_URL ?>/img/logo05.jpg" alt="<?= $sb_title ?>">
                </a>
            </h1>
            <nav class="gnb">
                <?php
                include G5_THEME_PATH . '/doc/nav.php';
                ?>
            </nav>
        </div>
        <div class="mopen">
            <button>mobile btn</button>
        </div>
    </header>


    <!-- 인덱스일 때는 안 보이고, 서브에 들어가면 보이게 해줌 -->
    <?php
    if (!defined('_INDEX_')) { // index가 아닐 때...
        include G5_THEME_PATH . '/sub.head.php';
    } // sub.head.php를 뿌려준다는 것
    ?>