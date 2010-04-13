<?php
/**
 * @package WordPress
 * @subpackage constructor
 */
__('Default', 'constructor'); // requeried for correct translation
?>
<div id="container" >
<?php get_constructor_slideshow(true) ?>

<?php if (have_posts()) : $i = 0; ?>
    <div id="posts">
    <?php while (have_posts()) : the_post(); $i++; ?>
        <div <?php post_class(); ?> id="post-<?php the_ID() ?>">
            <div class="title opacity box">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'constructor'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="entry">
            	<?php get_constructor_content() ?>
            </div>
            <div class="footer">
                <div class="links">
                <?php the_time() ?> |
                <?php get_constructor_author('', ' |') ?>
                <?php the_tags(__('Tags', 'constructor') . ': ', ', ', ' |'); ?>
                <?php edit_post_link(__('Edit', 'constructor'), '', ' | '); ?>
                <?php comments_popup_link(__('No Comments &#187;', 'constructor'), __('1 Comment &#187;', 'constructor'), __('% Comments &#187;', 'constructor'), 'comments-link', __('Comments Closed', 'constructor') ); ?></div>
                <div class="line"></div>
            </div>
        </div>
        <?php get_constructor_content_widget($i) ?>
    <?php endwhile; ?>
    </div>
    <div class="navigation">
        <div class="alignleft"><?php next_posts_link(__('<span>&laquo;</span> Older Entries', 'constructor')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries <span>&raquo;</span>', 'constructor')) ?></div>
        <div class="clear">&nbsp;</div>
    </div>
<?php endif; ?>
</div><!-- id='container' -->
<?php get_constructor_sidebar(); ?>
