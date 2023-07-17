<div id="particles-js"></div>

<?php get_header(); ?>

<main>
    <h2>新着記事</h2>

    <section class="mycontents sec sec-works">
        <ul class="">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part("template-parts/blog-part"); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>

        <div class="panav">
            <?php
            $args = array(
                'mid_size' => 1,
                'prev_text' => '＜',
                'next_text' => '＞',
                'screen_reader_text' => ' ',
            );
            the_posts_pagination($args);
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>