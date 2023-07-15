<li class="blog-contents__list">
    <p class="blog-contents__list__tags"><span>NEWS</span></p>
    <img class="blog-contents__list__thumbnail" src="<?php has_post_thumbnail() ? the_post_thumbnail_url() : print(get_template_directory_uri() . "/img/sample/top-blog-sample.png")?>" alt="">
    <p class="blog-contents__list__title"><a href="<?php the_permalink()?>"><?php the_title() ?></a></p>
    <p class="blog-contents__list__date"><?php the_date() ?></p>
</li>