<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl" lang="he">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('rtl hebrew'); ?>>
    <?php wp_body_open(); ?>


    <header class="main-header">

        <nav class="navbar">

            <div class="navbar-right">

                <div class="right-menu">

                    <div class="nav-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kent-logo.png"
                                alt="<?php bloginfo('name'); ?>" class="kent-logo">
                        </a>
                    </div>

                    <div class="navbar-menu">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'main-nav',
                            'container' => false,
                            'fallback_cb' => 'home_work_fallback_menu',
                            'walker' => new Home_Work_Walker_Nav_Menu(),
                        ));
                        ?>

                    </div>
                </div>

                <div class="left-menu">

                    <div class="language-selector">
                        <div class="language-dropdown">
                            <button class="language-dropdown-btn" onclick="toggleLanguageDropdown()">
                                <span>עברית</span>
                                <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M7 10l5 5 5-5z" />
                                </svg>
                            </button>
                            <ul class="language-dropdown-menu">
                                <li><a href="#" class="language-option active">עברית</a></li>
                                <li><a href="#" class="language-option">English</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mobile-controls">
                        <svg class="search-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>

                        <button class="dark-mode-btn">
                            <span class="dark-mode-icon"></span>
                        </button>

                        <!-- Hamburger Menu Button -->
                        <div class="hamburger-menu" onclick="toggleMobileMenu()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar-left">
                <a href="#" class="union-btn">
                    <span>כניסה לאיזור אישי</span>
                    <span class="union-icon"></span>
                </a>
            </div>
        </nav>

        <!-- Mobile Menu Overlay -->
        <div class="mobile-menu-overlay" onclick="closeMobileMenu()"></div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="mobile-menu-header">
                <div class="nav-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kent-logo.png"
                        alt="<?php bloginfo('name'); ?>" class="kent-logo">
                </div>
                <button class="mobile-menu-close" onclick="closeMobileMenu()">×</button>
            </div>

            <div class="mobile-menu-content">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'mobile-nav',
                    'container' => false,
                    'fallback_cb' => 'home_work_mobile_fallback_menu',
                    'walker' => new Home_Work_Mobile_Walker_Nav_Menu(),
                ));
                ?>
            </div>

            <div class="mobile-union-section">
                <a href="#" class="mobile-union-btn">
                    <span>כניסה לאיזור אישי</span>
                    <span class="union-icon"></span>
                </a>
            </div>
        </div>
    </header>