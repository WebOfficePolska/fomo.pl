<!doctype html>
<html <?php echo get_language_attributes(); ?>>
<head>
    <meta charset="<?php echo e(get_bloginfo('charset')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php (body_class()); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php echo e(esc_html__('Skip to content', THEME_TD)); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php echo get_custom_logo(); ?>

            <?php if(is_front_page() && is_home()): ?>
                <h1 class="site-title"><a href="<?php echo e(esc_url(home_url('/'))); ?>" rel="home"><?php echo e(get_bloginfo('name')); ?></a></h1>
            <?php else: ?>
                <p class="site-title"><a href="<?php echo e(esc_url( home_url('/'))); ?>" rel="home"><?php echo e(get_bloginfo('name')); ?></a></p>
            <?php endif; ?>

            <?php if(($description = get_bloginfo('description', 'display')) || is_customize_preview()): ?>
                <p class="site-description"><?php echo e($description); ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo e(esc_html__('Primary Menu', THEME_TD)); ?></button>
            <?php echo wp_nav_menu([
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
                'echo' => false
            ]); ?>

        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
        <!-- Sidebar -->
        <?php if(is_active_sidebar('sidebar-1')): ?>
            <aside id="secondary" class="widget-area">
                <?php (dynamic_sidebar('sidebar-1')); ?>
            </aside>
        <?php endif; ?>
        <!-- End sidebar -->
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo e(esc_url(__('https://wordpress.org/', THEME_TD))); ?>">
                <?php echo e(sprintf(esc_html__('Proudly powered by %s', THEME_TD), 'WordPress')); ?>

            </a>
            <span class="sep"> | </span>
            <?php echo sprintf(esc_html__('Theme: %1$s by %2$s.', THEME_TD), 'Themosis', '<a href="https://framework.themosis.com">Themosis Framework</a>'); ?>

        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<?php /**PATH /var/www/mamezi/themosis/htdocs/content/themes/my-theme/views/layouts/main.blade.php ENDPATH**/ ?>