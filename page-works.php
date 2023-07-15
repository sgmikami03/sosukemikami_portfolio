<?php get_header(); ?>

<main>

    <section class="mycontents work">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $pre_year = null;
        $args = array(
            'posts_per_page' => 10,
            'paged' => $paged,
            'post_type' => 'work',
            'meta_key' => '月',
            'orderby' => 'meta_value',
            'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        ?>

        <ul class="work-list">
            <?php if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    if (substr_replace(get_field('月'), '', 4, 2) != $pre_year) {
                        echo '<h2 class="page-title page-title_green"><span>' . substr_replace(get_field('月'), '', 4, 2) . '</span></h2>';
                    }
                    get_template_part("template_part/work-part-single", null, $args = array(1));
                    $pre_year = substr_replace(get_field('月'), '', 4, 2);
                }
            } ?>
        </ul>
        <?php wp_reset_postdata(); ?>
    </section>

    <div class="pagenation">
        <?php
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
            $paginate_format = '';
            $paginate_base = add_query_arg('paged', '%#%');
        } else {
            $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
                user_trailingslashit('page/%#%/', 'paged');
            $paginate_base .= '%_%';
        }
        echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $the_query->max_num_pages,
            'mid_size' => 1,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '＜',
            'next_text' => '＞',
        ));
        ?>
    </div>

</main>

<?php get_footer(); ?>