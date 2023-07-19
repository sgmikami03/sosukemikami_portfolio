<?php get_header(); ?>

<main>
    <section class="single mycontents .sec">
        <div class="single__texts">
            <p class="single__texts__text">Works</p>
            <h2 class="single__texts__title"><? the_title(); ?></h2>

            <img src="<? the_post_thumbnail_url(); ?>" alt="">
        </div>

        <div class="single__content">
            <p class="grey-text">
                <? the_field("year") ?><br>
                <? the_field("client") ?>
            </p>

            <?php
            remove_filter('the_content', 'wpautop');
            the_content();
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>