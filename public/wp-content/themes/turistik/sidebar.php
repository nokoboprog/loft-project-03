<!--sidebar-->
<div class="sidebar">
    <?php if ($tags = get_terms(array('taxonomy' => 'post_tag', 'hide_empty' => 0))) : ?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <?php foreach ($tags as $tag) : ?>
                        <li class="tags-list__item"><a href="<?php echo get_term_link($tag->term_id) ?>"
                                                       class="tags-list__item__link"><?php echo $tag->name ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($categories = get_terms(array('taxonomy' => 'category', 'hide_empty' => 0))) : ?>
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Категории</div>
            <div class="sidebar-item__content">
                <ul class="category-list">
                    <?php foreach ($categories as $cat) : ?>
                        <li class="category-list__item"><a href="<?php echo get_term_link($cat->term_id) ?>"
                                                           class="category-list__item__link"><?php echo $cat->name ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Календарь</div>
        <div class="sidebar-item__content">
            <?php echo get_calendar(); ?>
        </div>
    </div>
</div>
