<?php get_header();
the_post(); ?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="article-title title-page"><?php the_title() ?></div>
            <?php if (has_post_thumbnail()) : ?>
                <div class="article-image">
                    <?php the_post_thumbnail('full') ?>
                </div>
            <?php endif; ?>
            <div class="article-text">
                <?php the_content() ?>
            </div>
        </div>
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>
