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

                    <!-- Mobile controls moved to left side -->
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


    <script>
        // Force RTL/LTR setup immediately
        document.documentElement.setAttribute('dir', 'rtl');
        document.documentElement.setAttribute('lang', 'he');
        document.documentElement.classList.add('rtl', 'hebrew');

        function toggleLanguageDropdown() {
            const dropdown = document.querySelector('.language-dropdown');
            dropdown.classList.toggle('active');
        }

        function toggleMobileMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.mobile-menu-overlay');
            const hamburger = document.querySelector('.hamburger-menu');

            mobileMenu.classList.toggle('active');
            overlay.classList.toggle('active');
            hamburger.classList.toggle('active');

            // Prevent body scroll when menu is open
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }

        function closeMobileMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.mobile-menu-overlay');
            const hamburger = document.querySelector('.hamburger-menu');

            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            hamburger.classList.remove('active');
            document.body.style.overflow = '';
        }

        function switchLanguage(lang, direction) {
            // Update document attributes
            document.documentElement.setAttribute('dir', direction);
            document.documentElement.setAttribute('lang', lang);

            // Update body classes
            document.body.classList.remove('rtl', 'ltr', 'hebrew', 'english');

            if (direction === 'rtl') {
                document.body.classList.add('rtl', 'hebrew');
                document.documentElement.classList.add('rtl', 'hebrew');
                document.documentElement.classList.remove('ltr', 'english');
            } else {
                document.body.classList.add('ltr', 'english');
                document.documentElement.classList.add('ltr', 'english');
                document.documentElement.classList.remove('rtl', 'hebrew');
            }

            console.log('Language switched to:', lang, 'Direction:', direction);
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function (event) {
            const dropdown = document.querySelector('.language-dropdown');
            const isClickInside = dropdown.contains(event.target);

            if (!isClickInside && dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
            }
        });

        // Handle language selection
        document.addEventListener('DOMContentLoaded', function () {
            const languageOptions = document.querySelectorAll('.language-option');
            const dropdownBtn = document.querySelector('.language-dropdown-btn span');

            languageOptions.forEach(option => {
                option.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove active class from all options
                    languageOptions.forEach(opt => opt.classList.remove('active'));

                    // Add active class to clicked option
                    this.classList.add('active');

                    // Update button text
                    const selectedLang = this.textContent;
                    dropdownBtn.textContent = selectedLang;

                    // Switch language direction
                    if (selectedLang === 'עברית') {
                        switchLanguage('he', 'rtl');
                    } else if (selectedLang === 'English') {
                        switchLanguage('en', 'ltr');
                    }

                    // Close dropdown
                    document.querySelector('.language-dropdown').classList.remove('active');
                });
            });

            // Navigation dropdown functionality for mobile/touch devices
            const menuItems = document.querySelectorAll('.menu-item-has-children > a');

            menuItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    // On mobile, prevent default and toggle dropdown
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        const submenu = parent.querySelector('.sub-menu');

                        // Close other open dropdowns
                        document.querySelectorAll('.menu-item-has-children').forEach(menuItem => {
                            if (menuItem !== parent) {
                                menuItem.classList.remove('active');
                            }
                        });

                        // Toggle current dropdown
                        parent.classList.toggle('active');
                    }
                });
            });

            // Mobile menu dropdown functionality
            const mobileMenuItems = document.querySelectorAll('.mobile-nav .menu-item-has-children > a');

            mobileMenuItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const parent = this.parentElement;

                    // Close other open dropdowns
                    document.querySelectorAll('.mobile-nav .menu-item-has-children').forEach(menuItem => {
                        if (menuItem !== parent) {
                            menuItem.classList.remove('active');
                        }
                    });

                    // Toggle current dropdown
                    parent.classList.toggle('active');
                });
            });

            // Close nav dropdowns when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.main-nav')) {
                    document.querySelectorAll('.menu-item-has-children').forEach(menuItem => {
                        menuItem.classList.remove('active');
                    });
                }
            });

            // Close mobile menu when clicking outside or on overlay
            document.addEventListener('click', function (e) {
                if (e.target.classList.contains('mobile-menu-overlay')) {
                    closeMobileMenu();
                }
            });

            // Close mobile menu on window resize if screen becomes larger
            window.addEventListener('resize', function () {
                if (window.innerWidth > 768) {
                    closeMobileMenu();
                }
            });
        });
    </script>