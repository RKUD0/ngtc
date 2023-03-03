<h1 class="footer-top"><a href="http://www.ng-tc.com/index.php?tn=index&in=60041&pan=17"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/メルマガバナー.png" alt=""></a></h1>


<h1 class="footer-top"><a href="http://fit-indoor-tennis.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/フィット様バナー.png" alt=""></a></h1>

<footer id="footer">

  <div class="footer-con">
    <nav class="footer-nav">
      <div class="footer-container">
        <div> &#9655 スクール </div>
        <div>
          <ul class="footer-submenu footer-submenu-li1">
            <li><a href="<?php echo get_page_link(65); ?>">システム・料金 </a></li>
            <li><a href="<?php echo get_page_link(119); ?>">スクールの特長</a></li>

            <li><a href="<?php echo get_page_link(68); ?>">一般スクールクラス表</a></li>
            <li><a href="<?php echo get_page_link(117); ?>">ジュニアスクールクラス表</a></li>
            <li><a href="<?php echo get_page_link(174); ?>">ジュニアソフトテニススクール</a></li>

            <li> <a href="<?php echo get_page_link(70); ?>">時間割</a></li>
            <li><a href="<?php echo get_page_link(133); ?>">ソフトテニス中止連絡</a></li>
            <li><a href="<?php echo get_page_link(147); ?>">代行コーチのお知らせ</a></li>
            <li><a href="https://www1.nesty-gcloud.net/ngtcyoyaku/">振替予約</a></li>



          </ul>
        </div>
      </div>

      <div class="footer-container">
        <div>&#9655 会員制テニスクラブ</div>
        <div>
          <ul class="footer-submenu footer-submenu-li2">
            <li><a href="<?php echo get_page_link(75); ?>">システム・料金 </a></li>
            <li><a href="<?php echo get_page_link(1597); ?>">会員制クラブの特長</a></li>

          </ul>
        </div>

      </div>

      <div class="footer-container">

        <div>&#9655 テニス大会</div>
        <div>
          <ul class="footer-submenu footer-submenu-li3">
            <li><a href="<?php echo get_page_link(79); ?>">大会のご案内</a></li>
            <li><a href="<?php echo get_page_link(77); ?>">大会スケジュール</a></li>

            <!--
            <li><a href="<?php echo get_page_link(1460); ?>">大会の特長</a></li>
            -->

            <li><a href="<?php echo get_page_link(133); ?>">中止連絡</a></li>

          </ul>
        </div>

      </div>

      <div class="footer-container">

        <div>&#9655 レンタルコート</div>
        <div>
          <ul class="footer-submenu footer-submenu-li4">
            <li><a href="<?php echo get_page_link(81); ?>">システム・料金 </a></li>
          </ul>
        </div>

      </div>

      <div class="footer-container">

        <div>&#9655 スタッフ紹介 </div>
        <div>
          <ul class="footer-submenu footer-submenu-li4">
            <li><a href="<?php echo get_page_link(85); ?>">スタッフ紹介 </a></li>
            <!--
            <li> <a href="<?php echo get_page_link(87); ?>">施設紹介</a></li>
-->
          </ul>
        </div>

      </div>


      <div class="footer-container">

        <div>&#9655 お問い合わせ </div>
        <ul>
          <li><a href="<?php echo get_page_link(107); ?>">体験レッスン</a></li>
          <li><a href="<?php echo get_page_link(109); ?>">一般大会エントリー</a></li>
          <li><a href="<?php echo get_page_link(111); ?>">ジュニア大会エントリー</a></li>
          <li><a href="<?php echo get_page_link(113); ?>">レンタルコート予約</a></li>
          <li><a href="<?php echo get_page_link(105); ?>">総合お問い合わせ</a></li>

        </ul>



      </div>



    </nav>




  </div>
  <p class="copyright">Copyright &copy; NAGOYA GREEN TENNIS CLUB. All Rights Reserved.</p>
  <div class="fix-rights">
    <div class="fix-right fix-right1">
      <a href="<?php echo get_page_link(107); ?>">
        <p class="frp">体験レッスン<br>コチラ<span>&gt;</span></p>
      </a>
    </div>
    <div class="fix-right fix-right2">
      <a href="<?php echo get_page_link(113); ?>">
        <p class="frp">レンタルコート<br>予約<br>コチラ<span>&gt;</span></p>
      </a>
    </div>
    <div class="fix-right fix-right3">
      <a href="<?php echo get_page_link(109); ?>">
        <p class="frp"> 一般大会<br>エントリー<br>コチラ<span>&gt;</span></p>
      </a>
    </div>
    <div class="fix-right fix-right4">
      <a href="<?php echo get_page_link(111); ?>">
        <p class="frp"> ジュニア<br>大会エントリー<br>コチラ<span>&gt;</span></p>
      </a>
    </div>

  </div>

</footer>
<script>
  const open = document.querySelectorAll('.open a');
  for (let i = 0; i < open.length; i++) {
    open[i].textContent = "〇";
    url = 'https://ngtc.jp/contact/reserverental/';
    open[i].setAttribute('href', url);

  }
</script>

<?php wp_footer(); ?>
</body>

</html>