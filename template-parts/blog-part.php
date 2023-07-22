<li>
    <a href="<? the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <p class="subtitle"><? the_field("client"); ?></p>
        <h3 class="title"><? the_title(); ?></h3>
        <p class="text"><? the_tags("", "/", "") ?></p>
    </a>
</li>