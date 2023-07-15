<?php get_header(); ?>

<main>
    <section class="hero mycontents">
        <span class="scroll" id="scroll">scroll<span class="bar"></span></span>

        <div>
            <h1 class="title">Sosuke Mikami.com</h1>
            <p class="text">
                Sosuke Mikamiのポートフォリオ
            </p>
        </div>
        <img class="img1 img1-1" src="<?php echo get_template_directory_uri(); ?>/img/hero-img1.png" alt="">
        <img class="img1 img1-2" src="<?php echo get_template_directory_uri(); ?>/img/hero-img2.png" alt="">
        <img class="img2" src="<?php echo get_template_directory_uri(); ?>/img/hero-vector.png" alt="">
    </section>

    <section class="mycontents sec sec-service">
        <div class="sec__texts">
            <h2 class="sec__texts__title">Skill</h2>
            <p class="sec__texts__text">今まではWeb制作を中心におこなっていきました。</p>
        </div>
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-img1.png" alt="">
                <p class="subtitle">web制作</p>
                <h3 class="title">WebProduction</h3>
                <p class="text">ホームページ制作をコーディングまで担当できます。WordPressを用いた業務も可能です。</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-img2.png" alt="">
                <p class="subtitle">webデザイン</p>
                <h3 class="title">WebDesign</h3>
                <p class="text">ホームページの企画立案からデザインまで担当できます。</p>
            </li>
        </ul>
    </section>

    <section class="mycontents sec sec-about">
        <div class="sec__texts">
            <h2 class="sec__texts__title">Profile</h2>
            <p class="sec__texts__text">私のスキルセットや経歴についてです。</p>
        </div>
        <div class="sec-about__content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about-img.png" alt="">
            <dl>
            <dt>名前</dt>
                <dd>三上宗祐</dd>
                <dt>大学</dt>
                <dd>デザイン工学部システムデザイン学科</dd>
                <dt>技術</dt>
                <dd>HTML, CSS, JavaScript, PHP<br>
                    Jquery, WordPress, Figma など</dd>
                <dt>経歴</dt>
                <dd>2021.6-11<br class="br-sp"> 株式会社white canvas<br>
                    2021.11-<br class="br-sp"> 株式会社ミライ工事</dd>
                <dt>その他<br class="br-sp">リンクなど</dt>
                <dd><a href="https://www.wantedly.com/id/sosuke_mikami">Wanteadly</a></dd>
            </dl>
        </div>

        <img class="about-vector1" src="<?php echo get_template_directory_uri(); ?>/img/about-vector1.png" alt="">
        <img class="about-vector2" src="<?php echo get_template_directory_uri(); ?>/img/about-vector2.png" alt="">
    </section>

    <section class="mycontents sec sec-works">
        <div class="sec__texts">
            <h2 class="sec__texts__title">Works</h2>
        </div>

        <ul>
            <li>
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/work-sample-img.png" alt="">
                    <p class="subtitle">法政大学マネジメント研究室 様</p>
                    <h3 class="title">ホームページ開発</h3>
                    <p class="text">HP開発/WordPress</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/work-sample-img.png" alt="">
                    <p class="subtitle">法政大学 デザイン工学研究会 様</p>
                    <h3 class="title">ホームページ開発</h3>
                    <p class="text">HP開発/WordPress</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/work-sample-img.png" alt="">
                    <p class="subtitle">株式会社 ミライ工事 様</p>
                    <h3 class="title">ホームページ開発 企画</h3>
                    <p class="text">HP開発/WordPress</p>
                </a>
            </li>
        </ul>

        <a class="default-btn" href="">View More</a>
    </section>

    <!--<section class="sec sec-contact">
        <div class="contents">
            <img class="contact-img" src="<?php echo get_template_directory_uri(); ?>/img/contact-img.png" alt="">
            <div class="sec__texts">
                <h2 class="sec__texts__title">Contact</h2>
                <p class="sec__texts__text">こちらからお問い合わせいただけます。</p>
            </div>

            <div class="contact-form">
                <?php print(do_shortcode('[contact-form-7 id="6" title="top"]')); ?>
            </div>
        </div>
    </section>-->
</main>

<?php get_footer(); ?>