<?php get_header(); ?>

<div class="frontpage-main-slide main-mmm">
    <div class="pc-main"><?php
                            echo do_shortcode('[smartslider3 slider="4"]');
                            ?></div>
    <div class="sp-main"><?php
                            echo do_shortcode('[smartslider3 slider="5"]');
                            ?></div>

</div>


<div class="doron">
    <a href="<?php echo home_url(); ?>#tube">名古屋グリーンの魅力が詰まったプロモーションMOVIEはこちら</a>
</div>

<div class="sub-ban2">
    <div class="sb2-btns">
        <div class="sb2-btn">
            <a href="https://ngtc.jp/school/system/#tennis">テニススクール<span>&#9655</span> </a>
        </div>
        <div class="sb2-btn">
            <a href="https://ngtc.jp/club/system/#club">会員制テニスクラブ<span>&#9655</span></a>
        </div>

        <div class="sb2-btn">
            <a href="https://ngtc.jp/tournament/about/#tournament">テニス大会<span>&#9655</span></a>
        </div>

        <div class="sb2-btn">
            <a href="https://ngtc.jp/rental/system/#rental">レンタルコート<span>&#9655</span></a>
        </div>
    </div>
</div>

<!--タブ-->
<div class="frontpage-topic-main">
    <div class="topic_top">
        <h2>最新情報</h2>
        <p>-TOPIC-</p>
    </div>
    <div class="tabs">
        <input id="subete" type="radio" name="tab_item" checked>
        <label class="tab_item" for="subete">すべて</label>


        <input id="school" type="radio" name="tab_item">
        <label class="tab_item" for="school">スクール</label>

        <input id="all" type="radio" name="tab_item">
        <label class="tab_item" for="all">クラブ</label>

        <input id="design" type="radio" name="tab_item">
        <label class="tab_item" for="design">大会</label>


        <input id="programming" type="radio" name="tab_item">
        <label class="tab_item" for="programming">レンタル</label>


        <div class="tab_content" id="subete_content">

            <?php
            $arg = array(
                'posts_per_page' => 4, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'club,general,tournament,school' // 表示したいカテゴリーのスラッグを指定
            );
            $posts = get_posts($arg);
            if ($posts) : ?>

                <?php
                foreach ($posts as $post) :
                    setup_postdata($post); ?>
                    <div class="coulumn">
                        <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                            <div class="topic_meta">
                                <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                                <?php the_category(); ?>
                                <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            <?php
            endif;
            wp_reset_postdata();
            ?>

        </div>



        <div class="tab_content" id="all_content">

            <?php
            $arg = array(
                'posts_per_page' => 4, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'club' // 表示したいカテゴリーのスラッグを指定
            );
            $posts = get_posts($arg);
            if ($posts) : ?>

                <?php
                foreach ($posts as $post) :
                    setup_postdata($post); ?>
                    <div class="coulumn">
                        <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                            <div class="topic_meta">
                                <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                                <?php the_category(); ?>
                                <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            <?php
            endif;
            wp_reset_postdata();
            ?>

        </div>
        <div class="tab_content" id="programming_content">

            <?php
            $arg = array(
                'posts_per_page' => 4, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'general' // 表示したいカテゴリーのスラッグを指定
            );
            $posts = get_posts($arg);
            if ($posts) : ?>

                <?php
                foreach ($posts as $post) :
                    setup_postdata($post); ?>
                    <div class="coulumn">
                        <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                            <div class="topic_meta">
                                <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                                <?php the_category(); ?>
                                <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            <?php
            endif;
            wp_reset_postdata();
            ?>

        </div>
        <div class="tab_content" id="design_content">

            <?php
            $arg = array(
                'posts_per_page' => 4, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'tournament' // 表示したいカテゴリーのスラッグを指定
            );
            $posts = get_posts($arg);
            if ($posts) : ?>

                <?php
                foreach ($posts as $post) :
                    setup_postdata($post); ?>
                    <div class="coulumn">
                        <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                            <div class="topic_meta">
                                <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                                <?php the_category(); ?>
                                <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>




        <div class="tab_content" id="school_content">

            <?php
            $arg = array(
                'posts_per_page' => 4, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'school' // 表示したいカテゴリーのスラッグを指定
            );
            $posts = get_posts($arg);
            if ($posts) : ?>

                <?php
                foreach ($posts as $post) :
                    setup_postdata($post); ?>
                    <div class="coulumn">
                        <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                            <div class="topic_meta">
                                <time class="topic_time" datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                                <?php the_category(); ?>
                                <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="topic_list"><a href="<?php bloginfo('url') ?>/topic">Topic一覧<span>&gt;</span></a></div>


    </div>



</div>



<div class="frontpage-sub-banner">
    <div class="sub-banner-content">
        <div id="tube" class="movie">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wsK-MM5I_YQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="frontpage-sub-banner-about">
            <p>当クラブは、大自然に囲まれた全２６面（砂入り人工芝コート２４面・ハードコート２面）の空間で、一日中、心ゆくまでテニスを満喫していただける愛知県豊田市のテニスクラブです。</p>

            <p><span class="frontpage-sub-banner-about2">会員のお客様には、ライフスタイルに合わせたゆったりテニスをお楽しみいただけます。</span></p>
            <p><span class="frontpage-sub-banner-about3">スクールでは、大人から子供まで幅広くテニスの魅力をしていただけるよう、おひとりおひとりに合わせ、無理なく楽しく続けられるレッスンを目指しております。</span></p>
            <p><span class="frontpage-sub-banner-about4">テニス大会では、一つでも多くの試合をしていただけるよう、運営を心がけております。</span> </p>
            <p><span class="frontpage-sub-banner-about5">レンタルコートも、インドア・アウトドアコート（ナイターもございます）にて随時承っております。</span> この広々とした空間で、スタッフ一同、皆様のご来場を心よりお待ちしております。 </p>
        </div>

    </div>
</div>












<div class="instagram">
    <div class="instagram_container">
        <div class="instagram_top ">
            <h2>Instagram更新中!</h2>
            <p>&#9660;最新情報・キャンペーン</p>
            <p>&#9660;大会結果</p>
            <p>&#9660;名古屋グリーンテニスの魅力を発信中！！</p>

        </div>

        <div class="instagram_img">
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>

        </div>
        <div class="insta-follow">
            <a href="https://www.instagram.com/nagoyagreentennisclub/ ">＃インスタグラムをフォロー<span>&gt;</span> </a>
        </div>
    </div>
</div>








<div class="access">
    <div class="access-con">

        <div class="access-top">
            <div class="access-txt">
                <div class="access-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                </div>
                <h2>名古屋グリーンテニスクラブ</h2>
                <p>〒470-0352</p>
                <p>愛知県豊田市篠原町山訳７４−１</p>
                <div class="access-txt-y">
                    <p>お問い合わせはこちらから</p>
                    <p id="atyp">TEL.0565-48-1121</p>
                </div>
                <p>[平日]9時～22時</p>
                <p>[日・祝]8時～18時</p>
                <p>12/31～1/2はお休み</p>
            </div>
            <div class="access-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13048.922527189405!2d137.1155021!3d35.1508685!3m2!1i1024!2i768!4f1!3m3!1m2!1s0x0%3A0x219ca229f0b43933!2z5ZCN5Y-k5bGL44Kw44Oq44O844Oz44OG44OL44K544Kv44Op44OW!5e0!3m2!1sja!2sjp!4v1648369009596!5m2!1sja!2sjp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="access-bot">

            <div class="access-bot-top">
                <h2>車でお越しの方</h2>
            </div>
            <div class="access-bot-txt">
                <p>豊田方面からの場合、大井橋を目印に、155号線を北へ約３分です。</p>
                <p>名古屋方面からの場合、猿投グリーンロードを八草インターで降り、
                    155号線を南へ約４分です。</p>
            </div>

            <div class="access-bot-top">
                <h2>電車をご利用の方</h2>
            </div>
            <div class="access-bot-txt">
                <p>名鉄をご利用の場合、名鉄豊田線三好ヶ丘駅を下車。
                    タクシーで約10分です。</p>
                <p>愛知環状鉄道をご利用の場合篠原駅を下車。
                    徒歩で約10分です。</p>
            </div>



        </div>
    </div>
</div>




<?php get_footer(); ?>