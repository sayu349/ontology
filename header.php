<!doctype html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="合同会社オントロジーのホームページ">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <a class="header-logo" href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/inagaki_office_icon/logo.png" alt="会社ロゴ">
            </a>
            <button class="toggle-menu-button"></button>
            <div class="header-site-menu">
                <nav class="site-menu">
                    <ul>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                            )
                        );
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <?php if (!is_front_page()) : ?>
            <?php if (function_exists('bcn_display')) : ?>
                <div class="breadcrumb">
                    <?php bcn_display(); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>