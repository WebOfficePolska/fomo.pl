<?php $__env->startSection('content'); ?>
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php echo esc_html__('Oops! That page can&rsquo;t be found.', THEME_TD); ?></h1>
        </header><!-- .page-header -->
        <div class="page-content">
            <p><?php echo e(esc_html__('It looks like nothing was found at this location. Maybe try one of the links below or a search?', THEME_TD)); ?></p>
            <?php echo get_search_form(false); ?>

            <?php (the_widget('WP_Widget_Recent_Posts')); ?>
            <div class="widget widget_categories">
                <h2 class="widget-title"><?php echo e(esc_html__('Most Used Categories', THEME_TD)); ?></h2>
                <ul>
                    <?php echo wp_list_categories([
                        'orderby' => 'count',
                        'order' => 'DESC',
                        'show_count' => 1,
                        'title_li' => '',
                        'number' => 10,
                        'echo' => false
                    ]); ?>

                </ul>
            </div><!-- .widget -->
            <?php (the_widget('WP_Widget_Archives', 'dropdown=1', 'after_title=</h2>'.archive_content_message())); ?>
            <?php (the_widget('WP_Widget_Tag_Cloud')); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/mamezi/themosis/htdocs/content/themes/my-theme/views/errors/404.blade.php ENDPATH**/ ?>