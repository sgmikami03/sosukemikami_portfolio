<?php get_header(); ?>

<main>
    <div class="work-head">
        Blog
    </div>

    <section class="single mycontents">
        <p class="single__head">
            <span><?php print(substr_replace(get_field('月'), '', 4, 2)); ?>年</span>
            <?php the_field('企画種別'); ?>
        </p>

        <h3 class="single__title">
            <span class="single__title_underline"></span>
            <span class="single__title_text"><?php the_title(); ?></span>
        </h3>

        <div class="single__concept">
            <p class="single__concept__title">Concept</p>
            <h4 class="single__concept__text"><?php the_field('コンセプト'); ?></h4>
        </div>

        <div class="single__imgs">
            <?php if (get_field("メイン画像")) : ?>
                <img class="single__imgs__img" src="<?php the_field("メイン画像") ?>" alt="">
            <?php endif; ?>
            <?php if (get_field("画像1")) : ?>
                <img class="single__imgs__img" src="<?php the_field("画像1") ?>" alt="">
            <?php endif; ?>
            <?php if (get_field("画像2")) : ?>
                <img class="single__imgs__img" src="<?php the_field("画像2") ?>" alt="">
            <?php endif; ?>
            <?php if (get_field("画像3")) : ?>
                <img class="single__imgs__img" src="<?php the_field("画像3") ?>" alt="">
            <?php endif; ?>
            <?php if (get_field("画像4")) : ?>
                <img class="single__imgs__img" src="<?php the_field("画像4") ?>" alt="">
            <?php endif; ?>
            <?php if (get_field("画像5")) : ?>
                <img class="single__imgs__img" src="<?php the_field("画像5") ?>" alt="">
            <?php endif; ?>
        </div>

        <p class="single__content">
            <?php
            remove_filter('the_content', 'wpautop');
            the_content();
            ?>
        </p>

        <div class="single__foot">
            <?php if (get_field("logo")) : ?>
                <img class="single__foot__logo" src="<?php the_field("logo") ?>" alt="">
            <?php endif; ?>
            <?php if (get_field("ポスター")) : ?>
                <img  class="single__foot__poster" src="<?php the_field("ポスター") ?>" alt="">
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>