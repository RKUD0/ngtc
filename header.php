<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vireport" content="width=divice-width,initial-scale=1">
    <!--キャッシュ無効化
    <meta http-equiv="Cache-Control" content="no-cache">
-->
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/res_style.css?<?php echo file_date(get_template_directory() . '/res_style.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css" type="text/css" media="screen and (max-width:1440px)" />

    <?php
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    wp_enqueue_script('jquery');
    wp_head();
    ?>
    <script src="https://kit.fontawesome.com/00ba366826.js" crossorigin="anonymous"></script>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="header-wrap">
            <div class="header-top">
                大自然に囲まれた全26面コートで心ゆくまでテニスを楽しむことができます！
            </div>
            <div class="header-main">
                <div class="header-logo">
                    <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="NAGOYA GREEN TENNIS CLUB"></h1>
                </div>
                <div class="header-wrap">
                    <div class="header-title">
                        <h1><a href="<?php echo home_url(); ?>">名古屋グリーンテニスクラブ</a></h1>
                    </div>
                    <div class="header-subtitle">
                        <p><a href="<?php echo home_url(); ?>">Nagoya Green Tennis Club</a></p>
                    </div>
                </div>
                <?php /*
                <nav class="header-right">
                    <ul>
                        <li><a href="">お休み・振り替え<br><span> はコチラ</span><i class="fa fa-arrow-circle-o-right "></i></a> </li>
                        <li><a href="">連絡掲示板<br><span> はコチラ</span><i class="fa fa-arrow-circle-o-right "></i></a></li>
                    </ul>
                </nav>
                
                <nav class="header-right">
                    <ul>
                        <li><div class="header-rl"><a href="https://www1.nesty-gcloud.net/ngtcyoyaku/">お休み・振替</a> </div> </li>
                        <li><div class="header-rr"><a href="<?php echo get_page_link( 133 );?>">連絡掲示板</div> </a></li>
                    </ul>
                </nav>
*/ ?>

            </div>


            <section class="sample01 nav_menu">
                <ul>
                    <li class="main-menu1"><a href="<?php echo get_page_link(10); ?>">スクール<br><span>Tennis School</span> </a>
                        <ul>

                            <li><a href="<?php echo get_page_link(65); ?>">システム・料金</a></li>
                            <li><a href="<?php echo get_page_link(119); ?>">スクールの特長</a></li>

                            <li><a href="<?php echo get_page_link(68); ?>">一般スクールクラス表</a></li>

                            <li><a href="<?php echo get_page_link(117); ?>">ジュニアスクール<br>クラス表</a></li>
                            <li><a href="<?php echo get_page_link(174); ?>">ジュニアソフトテニス<br>スクール</a></li>

                            <li><a href="<?php echo get_page_link(70); ?>">時間割</a></li>
                            <li><a href="<?php echo get_page_link(133); ?>">ソフトテニス中止連絡</a></li>
                            <li><a href="<?php echo get_page_link(147); ?>">代行コーチのお知らせ</a></li>
                            <li><a href="https://www1.nesty-gcloud.net/ngtcyoyaku/">振替予約</a></li>



                        </ul>
                    </li>

                    <li class="main-menu2"><a href="<?php echo get_page_link(13); ?>">会員制テニスクラブ<br><span>Member</span> </a>
                        <ul>
                            <li><a href="<?php echo get_page_link(75); ?>">システム・料金</a></li>
                            <li><a href="<?php echo get_page_link(1597); ?>">会員制クラブの特長</a></li>

                        </ul>
                    </li>

                    <li class="main-menu3"><a href="<?php echo get_page_link(15); ?>">テニス大会<br><span>Tournament</span> </a>
                        <ul>
                            <li><a href="<?php echo get_page_link(79); ?>">大会のご案内</a></li>
                            <li><a href="<?php echo get_page_link(77); ?>">大会スケジュール</a></li>

                            <!--
                            <li><a href="<?php echo get_page_link(1460); ?>">大会の特長</a></li>
-->
                            <li><a href="<?php echo get_page_link(133); ?>">中止連絡</a></li>

                        </ul>
                    </li>

                    <li class="main-menu4"><a href="<?php echo get_page_link(17); ?>">レンタルコート<br><span>Rental</span></a>
                        <ul>
                            <li><a href="<?php echo get_page_link(81); ?>">システム・料金</a></li>
                        </ul>
                    </li>

                    <li class="main-menu5"><a href="<?php echo get_page_link(20); ?>">スタッフ紹介<br><span>Staff</span></a>
                        <ul>
                            <li><a href="<?php echo get_page_link(85); ?>">スタッフ紹介</a></li>
                            <!--
                            <li><a href="<?php echo get_page_link(87); ?>">施設紹介</a></li>
-->
                        </ul>
                    </li>

                    <li class="main-menu6"><a href="<?php echo get_page_link(22); ?>">お問い合わせ<br><span>Contact</span></a>
                        <ul>
                            <li><a href="<?php echo get_page_link(107); ?>">体験レッスン</a></li>
                            <li><a href="<?php echo get_page_link(109); ?>">一般大会エントリー</a></li>
                            <li><a href="<?php echo get_page_link(111); ?>">ジュニア大会エントリー</a></li>
                            <li><a href="<?php echo get_page_link(113); ?>">レンタルコート予約</a></li>
                            <li><a href="<?php echo get_page_link(105); ?>">総合お問い合わせ</a></li>

                        </ul>

                    </li>

                </ul>
            </section>
        </div>






        <div class="hum-menu">
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span>
                    <p class="hum-menu-menu"> MENU</p>
                </label>
                <!--ここからメニュー-->
                <div class="menu-content">
                    <details>
                        <summary>スクール</summary>

                        <div class="menu-con menuc1">

                            <ul class="footer-submenu footer-submenu-li1">
                                <li><a href="<?php echo get_page_link(65); ?>">&raquo;システム・料金 </a></li>
                                <li><a href="<?php echo get_page_link(119); ?>">&raquo;スクールの特長</a></li>

                                <li><a href="<?php echo get_page_link(68); ?>">&raquo;一般スクールクラス表</a></li>
                                <li><a href="<?php echo get_page_link(117); ?>">&raquo;ジュニアスクールクラス表</a></li>
                                <li><a href="<?php echo get_page_link(174); ?>">&raquo;ジュニアソフトテニススクール</a></li>

                                <li> <a href="<?php echo get_page_link(70); ?>">&raquo;時間割</a></li>
                                <li><a href="<?php echo get_page_link(133); ?>">&raquo;ソフトテニス中止連絡</a></li>
                                <li><a href="<?php echo get_page_link(147); ?>">&raquo;代行コーチのお知らせ</a></li>
                                <li><a href="https://www1.nesty-gcloud.net/ngtcyoyaku/">&raquo;振替予約</a></li>



                            </ul>


                        </div>
                    </details>

                    <details>
                        <summary>会員制テニスクラブ</summary>

                        <div class="menu-con menuc2">

                            <ul class="footer-submenu footer-submenu-li2">
                                <li><a href="<?php echo get_page_link(75); ?>">&raquo;システム・料金 </a></li>
                                <li><a href="<?php echo get_page_link(1597); ?>">&raquo;会員制クラブの特長</a></li>

                            </ul>


                        </div>
                    </details>

                    <details>
                        <summary>テニス大会</summary>

                        <div class="menu-con menuc3">

                            <ul class="footer-submenu footer-submenu-li3">
                                <li><a href="<?php echo get_page_link(79); ?>">&raquo;大会のご案内</a></li>
                                <li><a href="<?php echo get_page_link(77); ?>">&raquo;大会スケジュール</a></li>

                                <!--
                                <li><a href="<?php echo get_page_link(1460); ?>">&raquo;大会の特長</a></li>
-->

                                <li><a href="<?php echo get_page_link(133); ?>">&raquo;中止連絡</a></li>

                            </ul>


                        </div>
                    </details>
                    <details>
                        <summary>レンタルコート</summary>

                        <div class="menu-con menuc4">

                            <ul class="footer-submenu footer-submenu-li4">
                                <li><a href="<?php echo get_page_link(81); ?>">&raquo;システム・料金 </a></li>
                            </ul>


                        </div>
                    </details>
                    <details>
                        <summary>スタッフ紹介</summary>

                        <div class="menu-con menuc5">

                            <ul class="footer-submenu footer-submenu-li4">
                                <li><a href="<?php echo get_page_link(85); ?>">&raquo;スタッフ紹介 </a></li>
                                <!--
                                <li> <a href="<?php echo get_page_link(87); ?>">&raquo;施設紹介</a></li>
-->
                            </ul>


                        </div>
                    </details>
                    <details>
                        <summary>お問い合わせ</summary>

                        <div class="menu-con menuc6">
                            <ul>
                                <li><a href="<?php echo get_page_link(107); ?>">&raquo;体験レッスン</a></li>
                                <li><a href="<?php echo get_page_link(109); ?>">&raquo;一般大会エントリー</a></li>
                                <li><a href="<?php echo get_page_link(111); ?>">&raquo;ジュニア大会エントリー</a></li>
                                <li><a href="<?php echo get_page_link(113); ?>">&raquo;レンタルコート予約</a></li>
                                <li><a href="<?php echo get_page_link(105); ?>">&raquo;総合お問い合わせ</a></li>

                            </ul>


                        </div>
                    </details>



                </div>
                <!--ここまでメニュー-->
            </div>
        </div>




        <div class="top_banner">
            <div class="top_banner_container">

                <?php /* ?>
            
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/キービジュ.png" alt="NAGOYA GREEN TENNIS CLUB">
                <div class="top-banner-toptxt">
                    <h2>日本最大級！26面コート</h2>
                    <ul>
                        <li>会員制テニスコート</li>
                        <li>テニススクール</li>
                        <li>大会</li>
                        <li>レンタルコート</li>
                    </ul>
                    <p>名古屋グリーテニスクラブでは<br>
                    大自然に囲まれながら皆様のニーズに合わせてテニスをお楽しみ頂けます</p>
                </div>
            </div>
            <?php /*
            <div class="top_banner_btn">
                <ul>
                    <li><a href="<?php echo get_page_link( 113 );?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/レンタルコート予約ボタン.png" alt=""></a></li>
                    <li><a href="<?php echo get_page_link( 79 );?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会エントリーボタン.png" alt=""></a></li>
                    <li><a href="<?php echo get_page_link( 107 );?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/体験レッスンボタン.png" alt=""></a></li>
                </ul>
            </div>
            */ ?>
            </div>


    </header>
</body>