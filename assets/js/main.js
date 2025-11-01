/**
 * Nizkei Teva Theme JavaScript
 */

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
    if (dropdown) {
        const isClickInside = dropdown.contains(event.target);

        if (!isClickInside && dropdown.classList.contains('active')) {
            dropdown.classList.remove('active');
        }
    }
});

document.addEventListener('DOMContentLoaded', function() {
    
    // Language selection functionality
    const languageOptions = document.querySelectorAll('.language-option');
    const dropdownBtn = document.querySelector('.language-dropdown-btn span');

    if (languageOptions.length > 0 && dropdownBtn) {
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
    }

    // Navigation dropdown functionality for mobile/touch devices
    const menuItems = document.querySelectorAll('.menu-item-has-children > a');

    menuItems.forEach(item => {
        item.addEventListener('click', function (e) {
            // On mobile, prevent default and toggle dropdown
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const parent = this.parentElement;

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

    // Smooth Scrolling for Anchor Links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Footer dropdown functionality for mobile
    initFooterDropdown();
    
});

function initFooterDropdown() {
    const footerLinksSection = document.querySelector('.footer-links-columns');
    const footerTitle = document.querySelector('.footer-links-columns .footer-title');
    
    if (footerTitle && footerLinksSection) {
        footerTitle.addEventListener('click', function() {
            footerLinksSection.classList.toggle('active');
        });
        
        // Close dropdown when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (!footerLinksSection.contains(e.target)) {
                footerLinksSection.classList.remove('active');
            }
        });
    }
}