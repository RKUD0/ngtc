<?php get_header(); ?>


<?php if (is_page('system') && is_parent_slug() === 'school') : ?>
    <div class="topimg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-system.jpg" alt="">
    </div>
    <div class="doron">
        <a href="<?php echo home_url(); ?>#tube">名古屋グリーンの魅力が詰まったプロモーションMOVIEはこちら</a>
    </div>


    <div class="s-sys-wrap">

        <div class="s-cla-top">
            <h2 id="tennis"><span class="scts1">[</span> テニススクール<span class="scts2">]</span></h2>
        </div>
        <div class="sclatoptxt">
            <p>初めての方でも大丈夫！初心者から上級者まで楽しめる。<br>
                あなたにピッタリのレッスンが受けられます。</p>
            <p>経験豊富なコーチがしっかりサポート！あなたのレベルに合わせたレッスンで無理なく上達することができます！</p>
            <p>一般スクールを始め、年齢別となったジュニアスクールもございます。子供から大人までテニスを習いたい全ての方にご満足いただけるスクールです。
            </p>


        </div>

        <div class="s-cla-btns">
            <div class="s-cla-btn2">
                <a href="<?php echo get_page_link(68); ?>">一般スクールクラス表</a>
            </div>
            <div class="s-cla-btn2">
                <a href="<?php echo get_page_link(117); ?>">ジュニアスクールクラス表</a>
            </div>

            <div class="s-cla-btn2">
                <a href="<?php echo get_page_link(70); ?>">時間割</a>
            </div>

        </div>


        <div class="s-sys-cons">
            <div class="s-sys-con">
                <div class="s-sys-top ueyo">
                    <h2>一般スクール料金表</h2>
                </div>
                <h3 class="csc-225">&#9632;入会金</h3>
                <p class="s-sys-fee">5,500円</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new料金表＿大人.png" alt="">
                <p class="s-sys-tax sitanosukima">※料金は税込み表示です。</p>
                <p>※上記の人数は、1面あたりの人数となります。</p>
                <p>&#9733;複数受講割引（２クラス目から）・・・1,500円割引</p>
                <a href="<?php echo get_page_link(68); ?>" class="s-sys-det csc-bottom2">一般スクールクラスの詳細を確認 <span>&gt;</span></a>
            </div>

            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>ジュニアスクール料金表</h2>
                </div>
                <h3 class="csc-225">&#9632;入会金</h3>
                <p class="s-sys-fee">5,500円</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/料金表＿ジュニア.png" alt="">
                <p class="s-sys-tax sitanosukima">※料金は税込み表示です。</p>
                <p>※上記の人数は、1面あたりの人数となります。</p>
                <p>※アドバンス120分クラスへのご入会は、担当コーチの許可が必要となります。</p>
                <p>&#9733;複数受講割引（2クラス目から）・・・Primary 1,000円割引 / Dream～Advance　2,000円割引</p>
                <p class="csc-bottom">&#9733;兄弟割引（2人目から）・・・1,000円割引</p>


            </div>
            <a href="<?php echo get_page_link(117); ?>" class="s-sys-det2">ジュニアスクールクラスの詳細を確認 <span>&gt;</span></a>

            <!--
            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>ジュニア選手クラス料金表</h2>
                </div>

                <h3 class="csc-225">&#9632;入会金</h3>
                <p class="s-sys-fee">11,000円</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ジュニア料金表2.jpg" alt="">
                <p class="s-sys-tax sitanosukima">※料金は税込み表示です。</p>
                <a href="<?php echo get_page_link(117); ?>" class="s-sys-det3">ジュニアスクールクラスの詳細を確認 <span>&gt;</span></a>


            </div>
-->

            <div class="s-sys-con">
                <div class="s-sys-top ue">
                    <h2>ジュニアソフトテニススクール</h2>
                </div>
                <a href="<?php echo get_page_link(174); ?>" class="s-sys-det">ジュニアソフトテニススクールの詳細を確認 <span>&gt;</span></a>


            </div>


            <div class="s-sys-bottom">
                <p>&#9675;スクールの詳細なシステムは<a href="<?php echo get_template_directory_uri(); ?>/assets/img/スクールシステム案内・料金表1.pdf" download="">コチラ</a>のPDFをご確認ください。</p>
                <p>&#9675;スクールオトクシステム（割引）は<a href="<?php echo get_template_directory_uri(); ?>/assets/img/スクールオトクシステム.pdf" download="">コチラ</a>のPDFをご確認ください。</p>
            </div>

            <a href="<?php echo get_page_link(107); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/体験レッスンバナー.png" alt=""></a>

        </div>

    </div>



<?php elseif (is_page('class')) : ?>
    <div class="topimg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-school.jpg" alt="">
    </div>

    <div class="s-sys-wrap">

        <div class="s-cla-top">
            <h2><span class="scts1">[</span> 一般スクールクラス表<span class="scts2">]</span></h2>
            <div class="s-cla-top2">
            </div>
        </div>
        <div class="s-sys-cons">
            <div class="s-cla-btn">
                <a href="<?php echo get_page_link(70); ?>">スクール時間割はコチラ</a>
            </div>
            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>通常クラスレッスン</h2>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/通常レッスンクラス.jpg" alt="">
            </div>

            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>ゲームレッスンクラス</h2>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ゲームレッスンクラス.jpg" alt="">
            </div>
            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>シングルスクラス</h2>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/シングルスクラス表.jpg" alt="">
            </div>

            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>レディースクラス</h2>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/レディースクラス表.jpg" alt="">
            </div>



            <div class="s-sys-bottom">
            </div>

            <a href="<?php echo get_page_link(107); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/体験レッスンバナー.png" alt=""></a>

        </div>

    </div>


<?php elseif (is_page('jrclass')) : ?>
    <div class="topimg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ｍ－junior.jpg" alt="">
    </div>

    <div class="s-sys-wrap">

        <div class="s-cla-top">
            <h2><span class="scts3">[</span> ジュニアスクールクラス表<span class="scts4">]</span></h2>
            <div class="s-cla-top2">
            </div>
        </div>
        <div class="s-sys-cons">
            <div class="s-cla-btn">
                <a href="<?php echo get_page_link(70); ?>">スクール時間割はコチラ</a>
            </div>

            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>ジュニアクラスレッスン</h2>
                </div>
                <table class="jr-class-lesson-table">
                    <tbody>
                        <tr>
                            <td class="bc-lg2 fc-white txt-center">クラス名</td>
                            <td class="bc-lg2 fc-white txt-center">対象年齢</td>
                            <td class="bc-lg2 fc-white txt-center">レッスン時間</td>
                            <td class="bc-lg2 fc-white txt-center">クラスの特徴</td>
                        </tr>
                        <tr>
                            <td>Primary<br>プライマリー</td>
                            <td>4歳～小1</td>
                            <td>60分</td>
                            <td class="txt-left">スポンジボールを使用。<br>コーディネーション能力の開発とともにテニスに必要な基本動作を覚えていきます。</td>
                        </tr>
                        <tr>
                            <td>Dream<br>ドリーム</td>
                            <td>小1～小3</td>
                            <td>90分</td>
                            <td class="txt-left">レッドボールを使用。<br>テニスのルールを覚え、自分たちでラリー・試合ができるようにします。</td>
                        </tr>
                        <tr>
                            <td>Creative<br>クリエイティブ</td>
                            <td>小3～小6</td>
                            <td>90分</td>
                            <td class="txt-left">オレンジボールを使用。<br>試合に必要な様々なショットを覚えていきます。</td>
                        </tr>
                        <tr>
                            <td>Advance<br>アドバンス</td>
                            <td>小6～高3</td>
                            <td>90分～120分</td>
                            <td class="txt-left">グリーン・ノーマルボールを使用。<br>試合に必要なショットのバリエーションを増やすと共にポイントの取り方や戦術も指導していきます。</td>
                        </tr>
                    </tbody>
                </table>
                <!--
                <img class="csc-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/ジュニアクラス表.jpg" alt="">
-->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ジュニアクラスxy.png" alt="">

            </div>

            <div class="s-sys-con psp4">
                <div class="s-sys-top">
                    <h2>「Play+Stay」プログラムについて</h2>
                </div>
                <div class="psp">
                    <div class="psp1 ">
                        <p>名古屋グリーンジュニアプログラムは、お子様の成長段階に合わせて適切なトレーニングが行えるよう、クラスに年齢区分を設け、お子様の年齢・体格テニスレベルに合った道具(ボール・コートサイズなど)を使用することで、最適な練習環境を提供します。<br>この内容は世界基準(ITF国際テニス連盟PLAY+STAY)に基づいたプログラムとなります。</p>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ジュニアplay＆stay.jpg.png" alt="">
            </div>
            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>指導内容「ゲーム ベースド アプローチ」について</h2>
                </div>
                <p>「ゲーム ベースド アプローチ」とは、実際のゲーム(試合)の中で必要不可欠となる技術・戦術・体力メンタルの4つの要素を総合的にトレーニングしていく指導法です。<br><br>子供同士またはコーチとのラリーやゲームを行うなかで、実際のゲームで起こりうる様々な状況を子供自身で解決するための問題解決能力(予測力・判断力・実行力)を養うと同時に、子供自身の考え(アイデア)を引き出します。<br>
                    <br>また早期からゲームを楽しみ競争しながらテニスを学習することで、子供のテニスに対するモチベーションも高めていきます。<br>もちろん、ラリーやゲームの中で必要な基本技術も指導していきます。現在ではテニス先進国のヨーロッパをはじめとした世界各国で成果を上げており、現代のテニスには欠かせない指導法となっています。
                </p>
            </div>

            <div class="s-sys-con">
                <div class="s-sys-top">
                    <h2>レッスンについて</h2>
                </div>
                <p>◎ラケットはできる限りお子様の適正サイズのラケットをご用意ください。</p>
                <p>◎シューズはテニスシューズを使用して下さい。服装はできるだけジャージなどの動きやすい服装で
                    ポケットのあるパンツがあると好ましいです。</p>
                <p>◎アウトドアコートを使用してレッスンを行う場合がございますので、帽子をご用意ください。</p>
                <p>◎レッスン内におきまして、定期的にお子様のプレーを撮影させていただいております。</p>
                <p>撮影した写真・映像はPLAY+STAY研究資料として保管させていただきます。<br>
                    また、当スクールHPやインスタグラム、Facebookへ掲載させていただく場合がございますので、
                    予めご理解ご協力の程、よろしくお願い致します。</p>


            </div>



            <div class="s-sys-bottom">
            </div>

            <a href="<?php echo get_page_link(107); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/体験レッスンバナー.png" alt=""></a>

        </div>

    </div>

<?php elseif (is_page('agenda')) : ?>
    <div class="agenda-wrap">
        <?php the_content() ?>
    </div>


<?php elseif (is_page('softtennis')) : ?>
    <div class="s-sys-wrap">
        <div class="s-cla-top">
            <h2><span class="scts1">[</span>ジュニアソフトテニススクール<span class="scts2">]</span></h2>


        </div>
        <?php the_content() ?>

        <div class="s-sys-cons">

            <a href="<?php echo get_page_link(107); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/体験レッスンバナー.png" alt=""></a>

        </div>

    </div>


<?php elseif (is_page('att3')) : ?>
    <div class="topimg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-system.jpg" alt="">
    </div>

    <div class="s-sys-wrap">

        <div class="s-cla-top">
            <h2><span class="scts1">[</span> スクールの特長<span class="scts2">]</span></h2>
            <div class="s-cla-top2">
            </div>
        </div>
        <div class="s-sys-cons">

            <div class="cre-points">
                <div class="cre-point">
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/①D78_0794.JPG" alt="" loading="eager">
                    </div>
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-4.png" alt="">
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-5.png" alt="">
                    </div>

                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/②D78_0813.JPG" alt="" loading="lazy">
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/②78B_9969.jpg" alt="" loading="eager">
                    </div>
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-6.png" alt="">
                    </div>
                </div>

                <div class="s-sys-con">
                    <div class="s-sys-top">
                        <h2>一般（成人）クラス</h2>
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-7.png" alt="">
                    </div>

                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/③D50_6715.jpg" alt="" loading="lazy">
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/④D78_0643.jpg" alt="" loading="lazy">
                    </div>
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-8.png" alt="">
                    </div>
                </div>


                <div class="cre-point">
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-9.png" alt="">
                    </div>

                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/⑥D78_0783.jpg" alt="" loading="lazy">
                    </div>
                </div>



                <div class="cre-point">
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/⑥DSCF9249.jpg" alt="" loading="lazy">
                    </div>
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-10.png" alt="">
                    </div>
                </div>

                <div class="s-sys-con">
                    <div class="s-sys-top">
                        <h2>キッズ・ジュニアクラス（4歳～高校生）</h2>
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-11.png" alt="">
                    </div>
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/⑦D78_0496.jpg" alt="" loading="lazy">
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/⑧D78_0230.jpg" alt="" loading="lazy">
                    </div>
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-12.png" alt="">
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-13-1.png" alt="">
                    </div>

                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1670581100613.jpg" alt=" " loading="lazy">
                    </div>
                </div>


            </div>
        </div>

    </div>











<?php elseif (is_page('system') && is_parent_slug() === 'club') : ?>
    <div class="topimg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-club.jpg" alt="">
    </div>
    <div class="doron">
        <a href="<?php echo home_url(); ?>#tube">名古屋グリーンの魅力が詰まったプロモーションMOVIEはこちら</a>
    </div>


    <div class=" c-sys-wrap">

        <div id="club" class="c-sys-top">
            <h2><span class="csts1">[</span> クラブ会員制度<span class="csts2">]</span></h2>
            <div class="c-sys-top2">
                <div class="cst2-txt">
                    <p>自分のライフスタイルに合わせ、好きな時にテニスが楽しめる。<br>
                        クラブ会員同士が集う憩いの場です。</p>
                    <p>いつでも予約なしで、気軽にご来場いただけます。</p>
                    <p>一人でみっちり練習したり、会員同士でゲームを楽しんだり、アフターテニスは仲間と楽しいおしゃべりなど、そんな充実した時間を過ごすことができます。</p>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="c-sys-cons">
            <div class="c-sys-con">
                <div>
                    <h2>クラブ会員ご利用時間</h2>
                </div>
                <div class="csc-275 csc-275margin">
                    <div class="csc-w200 ">平日</div>
                    <div>午前9時～午後6時迄</div>
                </div>
                <div class="csc-275 csc-275margin">
                    <div class="csc-w200">土日・休日</div>
                    <div>午前8時～午後6時迄</div>
                </div>
                <div class="csc-275 csc-bold">

                    <p>&#9632;ナイターコートのみ利用できるナイター会員もございます。</p>
                </div>
                <div class="c-sys-top3">
                    <a href="<?php echo get_page_link(149); ?>"><span>&#8594;</span> ナイター会員</a>
                </div>

            </div>

            <div class="c-sys-con">
                <div>
                    <h2>クラブ会員料金表</h2>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/クラブ会員料金表.jpg" alt="">
                <p class="csc-225">※初回お申込み以降、月会費は自動引き落としでお願いいたします。</p>
                <p class="csc-225 csc-275margin">※入会金はご返金いたしかねます。</p>
                <p class="csc-275 csc-bold csc-left">フリーパスポート制:月会費とプレーフィを一括してお支払い頂く方法です。</p>
                <p class="csc-275 csc-bold csc-left">月会費制をご利用の方はご来場ごとにプレーフィが必要となります</p>
                <p class="csc-225 csc-bold csc-left">&#9679;平日 1,100円 (ビジター 1,350円) / 午後3時以降 940円</p>
                <p class="csc-225 csc-275margin csc-bold csc-left">&#9679;土日・祝日 1,650円 (ビジター 3,600円) / 午後3時以降 1,350円</p>
                <p class="csc-275 csc-pink csc-under"> &#9733;月曜日はレディースデー</p>
                <p class="csc-225 csc-pink csc-275margin csc-left">女性のみプレーフィ 800円 (ビジター 1,150円)</p>
                <p class="csc-275 csc-red csc-under"> &#9733;木曜日はサービスデー</p>
                <p class="csc-225 csc-red csc-left">プレーフィ 800円 (ビジター 1,150円)</p>

            </div>
            <div class="c-sys-con">
                <div>
                    <h2>ご利用コート</h2>
                </div>
                <p class="csc-275">専用コートは、オムニコート9面(5・6・9～15番コート)とハードコート2面
                    (7・8番コート)になります。</p>
                <p class="csc-275 csc-bold">尚、短期会員はご利用頂けるコートが限定されます。
                    オムニコート2面(5・6番コート)、ハードコート2面(7・8番コート)のみの
                    ご利用となります。</p>
                <p class="csc-275">※別途サンドグラス会員申込みの場合は全11面のご利用が可能となります。</p>
                <p class="csc-275">当日レンタル用コートに空きがある場合は全会員対象で他12面(16~26
                    番コート・センターコート)のご利用が可能です。(コートの予約は不可となり
                    ます)</p>
            </div>

            <div class="c-sys-con">
                <div>
                    <h2>初回申込み時お持ち物</h2>
                </div>
                <p class="csc-275"> &#9312;申込会員入会金・4ヶ月分月会費・写真2枚(2×2.5cm)</p>
                <p class="csc-275 "> &#9313; 引落口座番号が分かるもの(キャッシュカード又は通帳)</p>
                <p class="csc-275 csc-bottom"> &#9314; 銀行印をお持ちください。</p>
                <p class="csc-275">※初回4ヵ月分会費は現金入金のみとなっております。</p>
                <p class="csc-275">※クレジットカード等はご利用いただけませんのでご了承ください。</p>

            </div>



            <div class="c-sys-bottom">
            </div>


            <a href="<?php echo get_page_link(105); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/-kaiibana.png" alt=""></a>

        </div>

    </div>





<?php elseif (is_page('night') && is_parent_slug() === 'club') : ?>

    <div class=" c-sys-wrap">
        <div class="c-sys-top">
            <h2><span class="csts1">[</span>ナイター会員制度<span class="scts2">]</span></h2>
            <div class="c-sys-top2">
                <div class="cst2-txt">
                    <p>自分のライフスタイルに合わせ、好きな時にテニスが楽しめる。<br>
                        クラブ会員同士が集う憩いの場です。</p>
                    <p>いつでも予約なしで、気軽にご来場いただけます。</p>
                    <p>一人でみっちり練習したり、会員同士でゲームを楽しんだり、アフターテニスは仲間と楽しいおしゃべりなど、そんな充実した時間を過ごすことができます。</p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="c-sys-top4">
            <a href="<?php echo get_page_link(75); ?>"><span>&#8594;</span> クラブ会員</a>
        </div>

        <div class="c-sys-cons">
            <div class="c-sys-con">
                <div>
                    <h2>ナイター会員ご利用時間</h2>
                </div>
                <div class="csc-275 csc-275margin">
                    <div class="csc-w200">月・火・木</div>
                    <div>18時～22時迄 （22時30分閉館）</div>
                </div>
                <div class="csc-275 csc-bottom">
                    <div class="csc-w200">水・金</div>
                    <div>18時～23時迄 （23時30分閉館）</div>
                </div>
                <div class="div">

                </div>
                <p class="csc-275">※スクール休講日及び大会等がある場合はご利用できかねます。<br>
                    毎月、前月の20日前後にHPにてご利用予定表を掲載させて頂いておりますのでご確認ください。</p>
                <p class="csc-275">※ナイター会員制度は都合により廃止になる場合もございますので予めご了承ください。</p>
                <p class="csc-275">※時間内であればいつでもご予約なしでご利用いただけます。</p>
                <p class="csc-275">※ロッカー・お風呂をご利用いただけますが、閉館時間までとなりますので、時間厳守でお願いいたします</p>



            </div>

            <div class="c-sys-con">
                <div>
                    <h2>クラブ会員料金表</h2>
                </div>
                <div class="c-sys-fees">
                    <div class="c-sys-fee">
                        <h3>&#9632;入会金</h3>
                        <p class="c-sys-fee2">5,250円</p>
                    </div>
                    <div class="c-sys-fee">
                        <h3>&#9632;月会費</h3>
                        <p class="c-sys-fee2">4,200円</p>
                    </div>

                    <div class="c-sys-fee">
                        <h3>&#9632;プレーフィ</h3>
                        <p class="c-sys-fee2">無料</p>
                    </div>

                    <div class="c-sys-fee3 csc-225">
                        <p>※レンタルボールは100円でご利用いただけます。</p>
                        <p>※照明代等はかかりませんのでご安心ください。</p>
                    </div>


                </div>

            </div>
            <div class="c-sys-con">
                <div>
                    <h2>ご利用コート</h2>
                </div>
                <p class="csc-275">ナイター会員様専用コートは、オムニコート4面(16～19番コート)、 屋外コートになります。</p>
            </div>

            <div class="c-sys-con">
                <div>
                    <h2>初回申込み時お持ち物</h2>
                </div>
                <p class="csc-275"> &#9312;申込会員入会金・4ヶ月分月会費・写真2枚(2×2.5cm)</p>
                <p class="csc-275 "> &#9313; 引落口座番号が分かるもの(キャッシュカード又は通帳)</p>
                <p class="csc-275 csc-bottom"> &#9314; 銀行印をお持ちください。</p>
                <p class="csc-275">※初回4ヵ月分会費は現金入金のみとなっております。</p>
                <p class="csc-275">※クレジットカード等はご利用いただけませんのでご了承ください。</p>

            </div>



            <div class="c-sys-bottom">
            </div>

            <a href="<?php echo get_page_link(105); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/-kaiibana.png" alt=""></a>

        </div>

    </div>







<?php elseif (is_page('att2')) : ?>
    <div class="topimg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-club.jpg" alt="">
    </div>


    <div class=" c-sys-wrap">
        <div class="c-sys-top csyst2">
            <h2><span class="csts1">[</span>会員制テニスクラブの特長<span class="csts2">]</span></h2>

        </div>
        <div class="csyst2-ex">
            <p>名古屋グリーンテニスクラブにはクラブ会員制度がございます。<br>
                クラブ会員制度とは、<span class="bold under-b">全11面の会員専用コートを会員の方同士で自由に利用できる制度です。</span> <br>
                レンタルコートとは異なり、<span class="bold under-b">会員の方は予約なしで専用コートをご利用いただけます。</span> <br>
                愛知県で会員制テニスクラブをお探しの方は、ぜひ当テニスクラブにお越し下さい。</p>

        </div>
        <div class="csyst2-re">
            <h2 class="">会員制テニスクラブのおすすめポイント</h2>
            <div class="att-border"></div>
            <div class="cre-points">
                <div class="cre-point">
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/クラブ1.JPG" alt="">
                    </div>
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-1.png" alt="">
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-2.png" alt="">
                    </div>

                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/クラブ2.JPG" alt="">
                    </div>
                </div>

                <div class="cre-point">
                    <div class="crp-img ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/クラブ3.JPG" alt="">
                    </div>
                    <div class="crp-img2 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newschollatt-3.png" alt="">
                    </div>
                </div>


            </div>
        </div>

        <div class="csyst2-ta">
            <table>
                <tbody>
                    <tr>
                        <td></td>
                        <td class="bc-lg fc-black">利用可能時間</td>
                        <td class="bc-lg fc-black">面数</td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="bc-black fc-white">通常会員（※）</td>
                        <td>平日 9:00～18:00</td>
                        <td rowspan="2">11面</td>
                    </tr>
                    <tr>
                        <td>休日 8:00～18:00</td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="bc-black fc-white">ナイター会員</td>
                        <td>月・火・木 18:00～22:00</td>
                        <td rowspan="2">4面</td>
                    </tr>
                    <tr>
                        <td>水・金 18:00～23:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" padl50">※通常会員は、正会員・短期会員・平日会員・家族会員・シニア会員となります</div>

        <div class="mtop100 padl50 decoa"><a href="<?php echo get_page_link(75); ?>">クラブ会員制度　システム・料金についてはこちら<span>></span></a> </div>
    </div>












<?php elseif (is_page('schedule')) : ?>
<?php elseif (is_page('feature') && is_parent_slug() === 'tournament') : ?>
<?php elseif (is_page('about') && is_parent_slug() === 'tournament') : ?>

    <div class="t-about">
        <div class="t-abt-top">
            <h2 id="tournament"><span class="tats1">[</span>大会のご案内<span class="tats2">]</span></h2>
            <div class="t-abt-top2">
                <div class="tat2-txt">
                    <p>試合を通じて得る感動が
                        ここにあります。<br>たくさんの試合経験を積むことができる。</p>
                    <p>当クラブでは、一般の選手も参加が可能なテニス大会を定期的に開催しています。大会は、ジュニアと一般で分かれており、さまざまなカテゴリのトーナメントがあります。</p>
                    <p>年齢やレベルなど、自分に合った大会を見つけて参加できるので安心です。また、当クラブではコートの面数が多いので、大規模な大会でも、待ち時間が少ないのが特徴です。</p>
                </div>
            </div>


        </div>
        <div class="t-abt-btns">
            <div class="t-abt-btn">
                <a href="<?php echo get_page_link(109); ?>">一般大会エントリー</a>
            </div>
            <div class="t-abt-btn">
                <a href="<?php echo get_page_link(111); ?>">ジュニア大会エントリー</a>
            </div>

        </div>


        <div class="s-sys-cons">

            <div class="s-sys-con">
                <div class="s-sys-top" id="gen-tour">
                    <h2>一般大会（土日祝開催・中学以上）</h2>
                </div>
                <div class="t-abt-cons">
                    <div class="t-abt-con">
                        <div class="tac-1">
                            男女シングルストーナメント
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS S.pdf" download>日程・大会の詳細</a>
                        </div>


                        <div class="tac-2">
                            <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022FW シングルス1.pdf" download>2023年3月までの日程はこちら</a>
                        </div>

                    </div>

                    <div class="t-abt-con">
                        <div class="tac-1">
                            男女ダブルストーナメント
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS D.pdf" download>日程・大会の詳細</a>
                        </div>


                        <div class="tac-2">
                            <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022FW ダブルス.pdf" download>2023年3月までの日程はこちら</a>
                        </div>

                    </div>
                    <div class="t-abt-con">
                        <div class="tac-1">
                            男子シングルストーナメント
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS MS.pdf" download>日程・大会の詳細</a>
                        </div>
                    </div>

                    <div class="t-abt-con">
                        <div class="tac-1">
                            ナイトマッチ<br>（男子シングルス・ダブルス）
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS N.pdf" download>日程・大会の詳細</a>
                        </div>
                    </div>


                    <div class="t-abt-con">
                        <div class="tac-1">
                            ミックスダブルストーナメント
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS MD.pdf" download>日程・大会の詳細</a>
                        </div>


                        <div class="tac-2">
                            <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022FW ミックスダブルス.pdf" download>2023年3月までの日程はこちら</a>
                        </div>

                    </div>

                    <div class="t-abt-con">
                        <div class="tac-1">
                            団体戦
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS T.pdf" download>日程・大会の詳細</a>
                        </div>


                        <div class="tac-2">
                            <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022FW 団体戦.pdf" download>2023年3月までの日程はこちら</a>
                        </div>

                    </div>



                </div>

            </div>

            <div class="s-sys-con">
                <div class="s-sys-top" id="jr-tour">
                    <h2>ジュニア大会</h2>
                </div>
                <div class="t-abt-cons">
                    <div class="t-abt-con">
                        <div class="tac-1">
                            小学生月例大会
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023 小学生月例開催要項.pdf" download>日程・大会の詳細</a>
                        </div>


                        <div class="tac-2">
                            <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022 小学生月例大会要項 .pdf" download>2023年3月までの日程はこちら</a>
                        </div>

                    </div>

                    <div class="t-abt-con">
                        <div class="tac-1">
                            中学生月例大会
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023 中学生月例開催要項.pdf" download>日程・大会の詳細</a>
                        </div>

                        <div class="tac-2">
                            <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022 中学生月例大会要項 .pdf" download>2023年3月までの日程はこちら</a>
                        </div>

                    </div>

                    <div class="t-abt-con">
                        <div class="tac-1">
                            ビギナーズトーナメント
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023 ビギナー.pdf" download>日程・大会の詳細</a>
                        </div>

                        <div class="tac-2">
                            <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022 ビギナーズトーナメント大会要項 .pdf" download>2023年3月までの日程はこちら</a>
                        </div>

                    </div>
                    <div class="t-abt-con">
                        <div class="tac-1">
                            オレンジボールマッチ
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS OR.pdf" download>日程・大会の詳細</a>
                        </div>


                    </div>
                </div>



                <div class="s-sys-con">
                    <div class="s-sys-top" id="gen-tour2">
                        <h2>平日レディース大会</h2>
                    </div>
                    <div class="t-abt-cons">
                        <div class="t-abt-con">
                            <div class="tac-1">
                                月例レディーストーナメント
                            </div>
                            <div class="tac-2">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2023SS L.pdf" download>日程・大会の詳細</a>
                            </div>
                            <div class="tac-2">
                                <a class="tac-2-a2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2022FW レディース.pdf" download>2023年3月までの日程はこちら</a>
                            </div>


                        </div>



                    </div>


                </div>

                <div class="s-sys-con">
                    <div id="obog" class="s-sys-top">
                        <h2>特別大会（不定期開催）</h2>
                    </div>
                    <div class="t-abt-cons">
                        <div class="t-abt-con">
                            <div class="tac-1">
                                名古屋グリーン小・中学生<br>月例OBOG大会
                            </div>
                            <!--
                        <div class="t-abt-bottom">
                            <a href="https://docs.google.com/forms/d/1Gn19YXcwZ1uOYB3FgGM6B8hcQUSoptpLCT6nOxe8EEM/edit?">男女シングルスエントリーはコチラ</a>
                            <a href="https://docs.google.com/forms/d/1DOOTnIfFbGLJSgQ8izMEuzNZlUQkTaJCSTtwApkBOzY/edit?ts=6242a062#responses">女子ダブルスエントリーはコチラ</a>
                        </div>test
-->

                            <div class="tac-2">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/OBOG大会要項.pdf" download>日程・大会の詳細</a>
                            </div>
                        </div>
                        <!--
                    <div class="t-abt-con">
                        <div class="tac-1">
                            半日で4試合!<br>レベルアップマッチ
                        </div>
                        <div class="tac-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/2022SS 半日で4試合！レベルアップマッチ大会要項.pdf" download>日程・大会の詳細</a>
                        </div>
                    </div>
-->

                    </div>

                </div>
            </div>
        </div>



        <?php
        /*********大会の魅力 ******************************************/
        ?>
    <?php elseif (is_page('att')) : ?>

        <div class="topimg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
        </div>


        <div class="t-about">
            <div class="t-abt-top t-abt-topb">
                <h2 id="tournament"><span class="tats1 tats1-1">[</span>名古屋グリーン主催テニス大会の特長<span class="tats2 tats2-1">]</span></h2>
                <div class="t-abt-top2">
                    <div class="tat2-txt2">
                        <p> 当クラブでは、年間で１５０回以上の大会を実施しています。<br>必ず複数回の試合を行っていただける形式にしていますので、
                            １日で多くの試合をすることができます。</p>
                        <p>大会運営は専属コーチが行いますので、初めて参加される方でも安心してご参加いただけます。</p>
                        <p>自然豊かな広々とした会場で、１日中テニスをご満喫下さい。</p>
                    </div>
                </div>
            </div>
            <div class="att-rec">
                <h2 class="bold f27">こんな方におすすめです</h2>
                <div class="att-border"></div>

                <ul class="att-under">
                    <li>&#10003;1日中テニスを満喫したい！</li>
                    <li>&#10003;色々なタイプの選手、強い選手と対戦してみたい！</li>
                    <li>&#10003;新しいテニス仲間を探したい！</li>
                    <li>&#10003;試合経験が少ないくて不安</li>
                    <li>&#10003;とにかくたくさんの試合がしたい！</li>

                </ul>
            </div>
            <div class="att-all-img2">
                <a href="https://www.instagram.com/nagoyagreentennisclub/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Instagramバナー.png" alt="">
                </a>
            </div>

            <div class="att-ex ">
                <h2 class="f27  bold">当クラブの大会に初めて参加される方へ</h2>
                <div class="att-border"></div>

                <p>（当日の大会の流れをご説明させていただきます）</p>

                <ul class="att-under">
                    <li><a href="">ジュニア大会に初めて参加される方</a></li>
                    <li><a href="">一般大会に初めて参加される方</a></li>

                </ul>
            </div>
            <div class="att-all bold">
                <h2 class="f27">テニス大会一覧表</h2>
                <div class="att-border"></div>

                <div class="att-all-img">
                    <p>横にスクロールしてください</p>
                    <table class="fwlight">
                        <tbody>
                            <tr class="bc-gray fc-white">
                                <td>カテゴリ</td>
                                <td class="sticky bc-gray fc-white">大会名</td>
                                <td>対象の方</td>
                                <td>試合方法（※1）</td>
                                <td>種目</td>
                                <td>平均参加数（最大数）</td>
                            </tr>
                            <tr class="bc-white fc-black">
                                <td rowspan="3" class="bc-black fc-white">ジュニア月例</td>
                                <td class="sticky bc-white fc-black">ビギナーズトーナメント</td>
                                <td>小学生</td>
                                <td rowspan="3">トーナメント敗退後はチャレンジマッチ<br>（平均5試合前後）</td>
                                <td>男女別シングルス</td>
                                <td>40～60名（100名）</td>
                            </tr>
                            <tr class="bc-white fc-black">
                                <td class="sticky bc-white fc-black">小学生月例大会</td>
                                <td>小学生</td>
                                <td>男女別シングルス</td>
                                <td>80～100名（130名）</td>
                            </tr>
                            <tr class="bc-white fc-black">
                                <td class="sticky bc-white fc-black">中学生月例大会</td>
                                <td>中学生（※2）
                                </td>
                                <td>男女別シングルス</td>
                                <td>80～100名（130名）</td>
                            </tr>
                            <tr class="bc-lg fc-black">
                                <td rowspan="4" class="bc-black fc-white">一般月例</td>
                                <td class="sticky bc-lg fc-black">男女シングルストーナメント</td>
                                <td>中学生以上</td>
                                <td rowspan="4">予選リーグ&#8658;<br>順位別トーナメント（平均4試合以上）</td>
                                <td>男女別シングルス</td>
                                <td>50～60名（75名）</td>
                            </tr>
                            <tr class="bc-lg fc-black">
                                <td class="sticky bc-lg fc-black">男女ダブルストーナメント</td>
                                <td>中学生以上</td>
                                <td>男女別ダブルス</td>
                                <td>40～50名（75名）</td>
                            </tr>
                            <tr class="bc-lg fc-black">
                                <td class="sticky bc-lg fc-black">ミックスダブルストーナメント</td>
                                <td>中学生以上</td>
                                <td>男女混合ダブルス</td>
                                <td>40～50組（75組）</td>
                            </tr>
                            <tr class="bc-lg fc-black">
                                <td class="sticky bc-lg fc-black">団体戦</td>
                                <td>中学生以上</td>
                                <td>男女別ダブルス＋混合ダブルス</td>
                                <td>10～20団体（24団体）</td>
                            </tr>
                            <tr class="bc-white fc-black">
                                <td class="bc-black fc-white">平日月例</td>
                                <td class="sticky bc-white fc-black">月例レディーストーナメント</td>
                                <td>中学生以上</td>
                                <td>予選リーグ&#8658;順位別トーナメント（平均4試合以上）</td>
                                <td>女子ダブルス</td>
                                <td>40～50組（75組）</td>
                            </tr>
                            <?php /* ?>
                        <tr class="bc-lg fc-black">
                            <td rowspan="2" class="bc-black fc-white">不定期</td>
                            <td class="sticky bc-lg fc-black">半日4試合！レベアップルマッチ</td>
                            <td>中学生以上</td>
                            <td>予選リーグ&#8658;順位別トーナメント（基本4試合のみ）</td>
                            <td colspan="2" class="ta-center">詳しくは要項をご覧ください</td>
                        </tr>
                        <tr class="bc-lg fc-black">
                            <td class="sticky bc-lg fc-black">小・中学生月例OBOG大会</td>
                            <td colspan="4" class="ta-center">詳しくは要項をご覧ください</td>
                        </tr>
                        <?php */ ?>
                        </tbody>
                    </table>
                </div>
                <div class="f10 fwlight">※1　試合数については参加数によって前後します</div>
                <div class="f10 fwlight">※2　小学生の選手で中学生月例大会に出場する場合、小学生月例大会でベスト8以上に入賞経験がある選手に限ります</div>
            </div>



        </div>


    <?php elseif (is_page('tutorial')) : ?>

        <div class="topimg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
        </div>


        <div class="t-about">

            <div class="att-ex ">
                <p class="under-line">当クラブの大会にはじめて参加される方、および保護者の皆様へ
                </p>



                大会の流れ、進め方をご案内します<br>

                大会日の2日前までに大会エントリー（申込）を行います。
                <ul>
                    <li class="mb15"><a href="https://ngtc.jp/tournament/about/">大会要項ページ</a></li>
                    <li><a href="https://ngtc.jp/contact/genentry/"> 申込フォーム</a></li>
                </ul>
                <h2 class="f27  bold mtop100">検温の実施（7：30～）</h2>
                <div class="att-border"></div>



                ジュニア大会では、混雑を避けるため7：30より正面玄関にて検温を実施致します。<br>
                検温後、正面玄関西側の専用入場口よりご入場ください。
                <div class="tuto-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                </div>
                <h2 class="f27  bold mtop100 mtop100">大会本部にて受付を行います。</h2>
                <div class="att-border"></div>



                当日は可能な限り、選手本人に行なっていただきます。<br>
                分からない場合はスタッフがサポートを行います。<br>
                保護者の方は可能な限り手を出さず、お子さまの頑張りを見守ってください。
                <div class="tuto-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                </div>


                <h2 class="f27  bold mtop100">受付の流れ（8：00～8：30）</h2>
                <div class="att-border"></div>

                <ul>
                    <li> ①自分の名札を取る
                    </li>
                    <div class="tuto-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                    </div>

                    <li> ②エントリー代を渡す
                    </li>
                    <div class="tuto-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                    </div>

                    <li> ③自分の名前、所属先を伝えて番号の抽選をする
                    </li>
                    <div class="tuto-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                    </div>

                    <li> ④名札を渡してドロー表に名札を貼ってもらう
                    </li>
                    <div class="tuto-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                    </div>

                </ul>


                <h2 class="f27  bold mtop100">受付後は8：00からコートでウォーミングアップができます</h2>
                <div class="att-border"></div>



                コートに入れるのは参加選手のみです。<br>
                はじめての選手は勇気を出して、他の選手の練習に声をかけて、混ぜてもらおう！<br>
                試合の前に体を動かしてきちんと準備をする習慣をつけよう！<br>
                <div class="tuto-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                </div>

                <h2 class="f27  bold mtop100"> 大会説明（8：30前後）</h2>
                <div class="att-border"></div>



                大会本部でコーチから大会の説明を行います。<br>
                ルール、試合の進め方やチャレンジマッチなどについて説明をします。<br>
                はじめての選手はできるだけ前の方や声が聞こえやすいところで話を聞こう！<br>
                分からないことがあったらコーチに聞いてみよう！<br>
                <div class="mb15"></div>
                <a href="" download>詳しい試合ルールはこちら⇒PDF</a>
                <div class="mb15"></div>
                <div class="tuto-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/大会魅力2.jpg" alt="">
                </div>
                <h2 class="f27  bold mtop100">試合開始（8：45前後）</h2>
                <div class="att-border"></div>



                トーナメント敗退後はチャレンジマッチ（4ゲーム先取）に参加できます。<br>
                チャレンジマッチに積極的に参加しよう！<br>
                試合経験をたくさん積んでレベルアップしよう！！<br>
                <h2 class="f27  bold mtop100">終了時間について</h2>
                <div class="att-border"></div>



                トーナメントのドロー数は当日の参加数によって変動します。<br>
                閉会式等はありませんので自由解散となります。<br>
                大会は通常15時～17時ごろ終了となります。<br>
                チャレンジマッチは本戦決勝まで並行して実施します。<br>
                試合が終わったコートは参加選手の皆様へ開放をします（17：45まで）



            </div>


        </div>




























    <?php elseif (is_page('about') && is_parent_slug() === 'rental') : ?>
    <?php elseif (is_page('system') && is_parent_slug() === 'rental') : ?>
        <div class="topimg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-rental.jpg" alt="">
        </div>
        <div class="doron">
            <a href="<?php echo home_url(); ?>#tube">名古屋グリーンの魅力が詰まったプロモーションMOVIEはこちら</a>
        </div>

        <div class="r-sys-wrap">

            <div class="r-sys-top ">
                <h2 id="rental">貸出時間</h2>
                <table class="rental-table" cellspacing="0">
                    <tbody>
                        <tr>
                            <td class="bgc-green c-white">平日</td>
                            <td>9:00～18:00</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">ビジターの方</td>
                            <td>8:00～18:00</td>
                        </tr>
                    </tbody>
                </table>
                <!--
            <img class="r450" src="<?php echo get_template_directory_uri(); ?>/assets/img/レンタル①.jpg" alt="">
-->
            </div>
            <div class="r-sys-top ">
                <h2>利用料金</h2>
                <table class="rental-table" cellspacing="0">
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="bgc-gray ">会員・スクール生</td>
                            <td class="bgc-gray ">ビジター</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">平日</td>
                            <td>660円</td>
                            <td>1,320円</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">土日祝日</td>
                            <td>1,320円</td>
                            <td>2,640円</td>
                        </tr>
                    </tbody>
                </table>

                <table class="rental-table" cellspacing="0">
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="bgc-gray ">1日料金</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">平日</td>
                            <td>10,560円</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">土日祝日</td>
                            <td>23,760円</td>
                        </tr>
                    </tbody>
                </table>

                <!--
            <img class="csc-bottom2 r460" src="<?php echo get_template_directory_uri(); ?>/assets/img/料金表1時間.jpg" alt="">
            <img class="r440" src="<?php echo get_template_directory_uri(); ?>/assets/img/1日料金.jpg" alt="">
-->

                <p>※最大で12面ご利用いただけます。(オムニコート12面)</p>
                <p>※レンタルラケット、レンタルボールもございます。</p>
                <p>※ナイター照明4面完備(使用料金、1面1時間あたり550円)</p>
            </div>
            <div class="r-sys-top ">
                <h2>キャンセル料金</h2>

                <table class="rental-table" cellspacing="0">
                    <tbody>
                        <tr>
                            <td colspan="3" class="bgc-gray ">ご利用コート面数1～4面</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="bgc-green c-white">平日</td>
                            <td>前日</td>
                            <td>無料</td>
                        </tr>
                        <tr>
                            <td>当日</td>
                            <td>半額</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="bgc-green c-white">土日祝日</td>
                            <td>前々日</td>
                            <td>無料</td>
                        </tr>
                        <tr>
                            <td>前日</td>
                            <td>半額</td>
                        </tr>
                        <tr>
                            <td>当日</td>
                            <td>全額</td>
                        </tr>
                    </tbody>
                </table>
                <table class="rental-table" cellspacing="0">
                    <tbody>
                        <tr>
                            <td colspan="3" class="bgc-gray ">ご利用コート面数5～12面（平日・個人利用）</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">予約日の1週間前</td>
                            <td>無料</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">1週間から前日</td>
                            <td>半額</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">当日</td>
                            <td>全額</td>
                        </tr>

                    </tbody>
                </table>

                <!--
            <img class="csc-bottom2 r470" src="<?php echo get_template_directory_uri(); ?>/assets/img/レンタル③.jpg" alt="">
            <img class="r480" src="<?php echo get_template_directory_uri(); ?>/assets/img/レンタル④.jpg" alt="">
-->
                <p>※前日のキャンセル受付は18時までとなります。</p>
            </div>
            <div class="r-sys-top csc-bottom">
                <h2>インドアコートのレンタル</h2>


                <table class="rental-table" cellspacing="0">
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="bgc-gray ">18時まで</td>
                            <td class="bgc-gray ">18時以降</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">スクール生・クラブ会員の方</td>
                            <td>2,040円</td>
                            <td>2,720円</td>
                        </tr>
                        <tr>
                            <td class="bgc-green c-white">ビジターの方</td>
                            <td>2,772円</td>
                            <td>3,432円</td>
                        </tr>
                    </tbody>
                </table>
                <!--
            <img class="r490" src="<?php echo get_template_directory_uri(); ?>/assets/img/レンタル⑤.jpg" alt="">
            -->
                <p class="csc-bold">キャンセル料金・・・ 前々日は無料、前日は半額、当日は全額をお支払いただきます。</p>
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/インドアレンタルコート（料金・コート表）.pdf" download="" class="s-sys-det">ご利用可能な時間帯はこちらからご覧ください <span>&gt;</span></a>

            </div>
            <div class="r-sys-top csc-bottom">
                <h2>ナイターコートのレンタル</h2>
                <table class="rental-table" cellspacing="0">

                    <tbody>
                        <tr>
                            <td class="bgc-gray ">会員・スクール生</td>
                            <td class="bgc-gray ">ビジター</td>
                        </tr>
                        <tr>
                            <td>2,112円</td>
                            <td>2,772円</td>
                        </tr>
                    </tbody>
                </table>


                <!--
            <img class="r500" src="<?php echo get_template_directory_uri(); ?>/assets/img/アウトドアレンタル料金表.jpg" alt="">
--> <a href="<?php echo get_template_directory_uri(); ?>/assets/img/アウトドアナイターご案内.pdf" download="" class="s-sys-det">ご利用可能な時間帯はこちらからご覧ください <span>&gt;</span></a>

            </div>

            <div class="r-sys-top csc-bottom">
                <h2>予約受付</h2>
                <p>・前月1日より受付させていただきます。</p>
                <p>・ご予約はお電話または当クラブのホームページからメールにてお申し込みください。</p>
                <p>・利用料金は当日、受付時にフロントにてお支払ください。</p>
                <p>当日、翌日のレンタルのお申し込みは、お電話にて受け付けております。
                    折り返しお電話で申込完了となります。</p>

            </div>
            <a href="<?php echo get_page_link(113); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/レンタルコートバナー.png" alt=""></a>

        </div>















    <?php elseif (is_page('facilities')) : ?>
        <div class="faci-wrap">
            <div class="faci-top">
                <h2>施設紹介</h2>
            </div>
            <h3>準備中...</h3>
        </div>




    <?php elseif (is_page('stuff')) : ?>
        <div class="stuff-wrap">
            <div class="stuff-top">
                <h2>スタッフ紹介</h2>
            </div>

        </div>

        <?php
        $args = array(
            'post_type' => 'staff',
            'posts_per_page' => 30,
            'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
            <div class="staffs">


                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="staff">
                        <div class="staff_name">
                            <h2><?php echo CFS()->get("s_name"); ?></h2>
                        </div>
                        <div class="staff_info">
                            <div class="staff_info_left">
                                <?php if (post_custom('s_img')) : ?>

                                    <div class="staff_img">
                                        <img src="<?php echo CFS()->get("s_img"); ?>" alt="" loading="lazy">
                                    </div>
                                <?php endif ?>

                            </div>

                            <div class="staff_info_right">

                                <?php if (post_custom('s_like')) : ?>
                                    <div class="staff_info_like">
                                        <div class="sil">[趣味]</div>
                                        <div class="sir"><?php echo CFS()->get("s_like"); ?></div>
                                    </div>
                                <?php endif ?>



                                <?php if (post_custom('s_pr')) : ?>
                                    <div class="staff_info_pr">
                                        <div class="sil">[コメント]</div>
                                        <div class="sir"><?php echo CFS()->get("s_pr"); ?></div>
                                    </div>
                                <?php endif ?>






                            </div>
                        </div>
                    </div>
                <?php endwhile;; ?>
            </div>
            <div class="navigation">
                <?php if (function_exists('wp_pagenavi')) : ?>
                    <?php wp_pagenavi(array('query' => $the_query)); ?>
                <?php else : ?>
                <?php endif; ?>
            </div>

        <?php endif;
        wp_reset_postdata()
        ?>


        <?php  ?>














    <?php elseif (is_page('inquiry')) : ?>
        <div class="inq-top">
            <h2>お問い合わせ</h2>
        </div>
        <div class="inq-inq-wrap">
            <?php echo do_shortcode('[contact-form-7 id="126" title="お問い合わせ"]'); ?>
        </div>

    <?php elseif (is_page('lesson')) : ?>
        <div class="topimg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-system.jpg" alt="">
        </div>
        <div class="taiken3-wrap">
            <div class="taiken3-top">
                <p>ご入会を検討されている方は、ぜひ無料体験レッスンをご利用ください！はじめての方から上級者まで、レベル、目的、年齢に合わせたクラスをご用意しています。</p>
                <p>まだラケットをお持ちでない方も安心！</p>
                <p>ラケットは無料で貸し出ししています。</p>


                <div class="bold mtop50">
                    <p> 一般（大人）クラスは2回まで無料で体験できます！</p>
                    <p> ジュニアクラス、ソフトテニスクラスは1回無料で体験できます！</p>


                </div>
            </div>

            <h2 class="mtop50">体験レッスンご予約の流れ</h2>
            <div class="att-border"></div>
            <div class="taiken3-mid">
                <h3>ステップ1</h3>
                <p>下記よりご希望のクラスのレベル、時間割等をご確認ください。</p>
                <a href="<?php echo get_page_link(68); ?>" class="taiken3-btn">一般クラスレベル表はこちら<span>></span></a>
                <a href="<?php echo get_page_link(117); ?>" class="taiken3-btn">ジュニアクラスレベル表はこちら<span>></span></a>
                <a href="<?php echo get_page_link(174); ?>" class="taiken3-btn">ジュニアソフトテニスクラスについて<span>></span></a>
                <a href="<?php echo get_page_link(70); ?>" class="taiken3a-btn mtop50">各クラス時間割表はこちら<span>></span></a>

                <h3>ステップ2</h3>
                <p>本ページの申込フォームより、ご予約ください。</p>
                <a href="#taiken3-j" class="taiken3b-btn ">申込みフォームへ</a>

            </div>


            <h2 class="mtop100">お電話でもご予約いただけます</h2>
            <div class="att-border"></div>
            <p>体験レッスンについて、クラスのレベル、レッスン内容などご不明な点がございましたら、下記フォームまたはお電話からお気軽に問い合わせください</p>

            <div id="taiken3-j" class="taiken-tel taiken3c-btn ">
                <i class="fa-solid fa-phone "></i><a href="tel:" class="">0565-48-1121</a>

            </div>


        </div>

        <div class="inq-inq-wrap">
            <?php echo do_shortcode('[contact-form-7 id="130" title="お試しレッスン"]'); ?>
        </div>


    <?php elseif (is_page('genentry')) : ?>
        <div class="inq-top">
            <h2>一般大会エントリー</h2>
            <div class="inq-top-txt">
                <div class="obogbtn">
                    ※月例OBOG大会のエントリーは別途<a href="<?php echo get_page_link(79); ?>#obog">こちら</a>からお願い致します。

                </div>

            </div>
        </div>
        <div class="inq-inq-wrap">

            <?php echo do_shortcode('[contact-form-7 id="127" title="大会エントリー"]'); ?>
        </div>

    <?php elseif (is_page('jrentry')) : ?>
        <div class="inq-top">
            <h2>ジュニア大会エントリー</h2>
        </div>
        <div class="inq-inq-wrap">
            <?php echo do_shortcode('[contact-form-7 id="128" title="ジュニア大会エントリー"]'); ?>
        </div>

    <?php elseif (is_page('reserverental')) : ?>
        <div class="inq-top">
            <h2>レンタルコート予約</h2>
            <div class="res-top">
                <h3>レンタルコートご予約の優先順について</h3>
                <p>次月レンタルコートのご予約は前月1日の営業開始時間からお電話にて承ります。</p>
                <div class="res-p">
                    <div class="res-span">平日の場合</div>
                    9：00～
                </div>

                <div class="res-p">
                    <div class="res-span">土日祝の場合</div>
                    8：00～
                </div>
                <p>※1月につきましては、1・2日が休館日となるため3日より予約を承ります。</p>

                <p>予約は先着順となります。<br>
                    お電話での予約を優先させていただくため、WEBからのご予約は予約開始日の翌日から有効とさせていただきます。</p>
            </div>
            <div class="res-btn">
                <a href="<?php echo get_page_link(81); ?>">システム/料金はこちら<span>&gt;</span> </a>
            </div>
        </div>
        <div class="inq-inq-wrap">
            <?php echo do_shortcode('[contact-form-7 id="129" title="レンタルコート予約"]'); ?>
        </div>



    <?php elseif (is_page('keijiban')) : ?>
        <div class="keizi-wrap">
            <?php the_content() ?>

        </div>


    <?php elseif (is_page('daiko')) : ?>
        <div class="keizi-wrap">
            <?php the_content() ?>

        </div>



    <?php elseif (is_page('thanks')) : ?>
        <div class="thanks">
            <h2>お問い合わせありがとうございます</h2>
            <p>ご記入していただいた情報は無事に送信されました。</p>
            <a href="<?php echo home_url(); ?>">トップページに戻る</a>

        </div>

    <?php elseif (is_page('test0819')) : ?>
        <div class="topimg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-system.jpg" alt="">
        </div>
        <div class="taiken3-wrap">
            <div class="taiken3-top">
                <p>ご入会を検討されている方は、ぜひ無料体験レッスンをご利用ください！はじめての方から上級者まで、レベル、目的、年齢に合わせたクラスをご用意しています。</p>
                <p>まだラケットをお持ちでない方も安心！</p>
                <p>ラケットは無料で貸し出ししています。</p>


                <div class="bold mtop50">
                    <p> 一般（大人）クラスは2回まで無料で体験できます！</p>
                    <p> ジュニアクラス、ソフトテニスクラスは1回無料で体験できます！</p>


                </div>
            </div>

            <h2 class="mtop50">体験レッスンご予約の流れ</h2>
            <div class="att-border"></div>
            <div class="taiken3-mid">
                <h3>ステップ1</h3>
                <p>下記よりご希望のクラスのレベル、時間割等をご確認ください。</p>
                <a href="<?php echo get_page_link(68); ?>" class="taiken3-btn">一般クラスレベル表はこちら<span>></span></a>
                <a href="<?php echo get_page_link(117); ?>" class="taiken3-btn">ジュニアクラスレベル表はこちら<span>></span></a>
                <a href="<?php echo get_page_link(174); ?>" class="taiken3-btn">ジュニアソフトテニスクラスについて<span>></span></a>
                <a href="<?php echo get_page_link(70); ?>" class="taiken3a-btn mtop50">各クラス時間割表はこちら<span>></span></a>

                <h3>ステップ2</h3>
                <p>本ページの申込フォームより、ご予約ください。</p>
                <a href="#taiken3-j" class="taiken3b-btn ">申込みフォームへ</a>

            </div>


            <h2 class="mtop100">お電話でもご予約いただけます</h2>
            <div class="att-border"></div>
            <p>体験レッスンについて、クラスのレベル、レッスン内容などご不明な点がございましたら、下記フォームまたはお電話からお気軽に問い合わせください</p>

            <div id="taiken3-j" class="taiken-tel taiken3c-btn ">
                <i class="fa-solid fa-phone "></i><a href="tel:" class="">0565-48-1121</a>

            </div>


        </div>

        <div class="inq-inq-wrap">
            <?php echo do_shortcode('[contact-form-7 id="130" title="お試しレッスン"]'); ?>
        </div>

    <?php elseif (is_page('test0820')) : ?>
        <div class="topimg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/m-system.jpg" alt="">
        </div>
        <div class="taiken3-wrap-2">
            <div class="taiken3-top-2">
                <p>ご入会を検討されている方は、ぜひ無料体験レッスンをご利用ください！はじめての方から上級者まで、レベル、目的、年齢に合わせたクラスをご用意しています。</p>
                <p>まだラケットをお持ちでない方も安心！</p>
                <p>ラケットは無料で貸し出ししています。</p>


                <div class="bold mtop50">
                    <p> 一般（大人）クラスは2回まで無料で体験できます！</p>
                    <p> ジュニアクラス、ソフトテニスクラスは1回無料で体験できます！</p>


                </div>
            </div>

            <h2 class="mtop50">体験レッスンご予約の流れ</h2>
            <div class="att-border"></div>
            <div class="taiken3-mid-2">
                <h3>ステップ1</h3>
                <p>下記よりご希望のクラスのレベル、時間割等をご確認ください。</p>
                <a href="" class="taiken3-btn-2">一般クラスレベル表はこちら<span>></span></a>
                <a href="" class="taiken3-btn-2">ジュニアクラスレベル表はこちら<span>></span></a>
                <a href="" class="taiken3-btn-2">ジュニアソフトテニスクラスについて<span>></span></a>
                <a href="" class="taiken3a-btn-2 mtop50">各クラス時間割表はこちら<span>></span></a>

                <h3>ステップ2</h3>
                <p>本ページの申込フォームより、ご予約ください。</p>
                <a href="" class="taiken3b-btn-2 ">申込みフォームへ</a>

            </div>


            <h2 class="mtop100">お電話でもご予約いただけます</h2>
            <div class="att-border"></div>
            <p>体験レッスンについて、クラスのレベル、レッスン内容などご不明な点がございましたら、下記フォームまたはお電話からお気軽に問い合わせください</p>

            <div class="taiken-tel-2 taiken3c-btn-2 ">
                <i class="fa-solid fa-phone "></i><a href="tel:" class="">0565-48-1121</a>

            </div>


        </div>

        <div class="inq-inq-wrap">
            <?php echo do_shortcode('[contact-form-7 id="130" title="お試しレッスン"]'); ?>
        </div>



    <?php elseif (is_page('tournament-schedule')) : ?>
        <div class="ts-wrap">
            <div class="stuff-top">
                <h2>大会スケジュール</h2>
            </div>



            <?php
            $args = array(
                'post_type' => 'tournament-schedule',
                'posts_per_page' => 30,
                'meta_key' => 'ts-day',
                'orderby' => 'meta_value',
                'order' => 'ASC',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
                <div class="tournament-schedules">


                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="tournament-schedule">
                            <div class="ts-day">
                                <?php echo date('Y/m/d', strtotime(CFS()->get('ts-day'))); ?> </div>
                            <div class="ts-grade">
                                <?php
                                $values = CFS()->get('ts-grade');
                                foreach ($values as $key => $label) :
                                ?>
                                    <span><?php echo $label; ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="ts-tournament">
                                <?php
                                $values = CFS()->get('ts-tournament');
                                foreach ($values as $key => $label) :
                                ?>
                                    <span><?php echo $label; ?></span>
                                <?php endforeach; ?>
                            </div>

                        </div>


                    <?php endwhile;; ?>
                </div>

            <?php endif;
            wp_reset_postdata()
            ?>

        </div>
    <?php else : ?>
        <div class="agenda-wrap">
            <?php the_content() ?>
        </div>



    <?php endif; ?>

    <?php get_footer(); ?>