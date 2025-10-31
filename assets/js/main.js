/**
 * Nizkei Teva Theme JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile Menu Toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');
    
    if (mobileMenuToggle && mainNavigation) {
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            mainNavigation.classList.toggle('is-open');
            document.body.classList.toggle('menu-open');
        });
    }
    
    // Search Toggle
    const searchToggle = document.querySelector('.search-toggle');
    
    if (searchToggle) {
        searchToggle.addEventListener('click', function() {
            // Add search functionality here
            console.log('Search clicked');
        });
    }
    
    // Hero Dots Navigation
    const heroDots = document.querySelectorAll('.hero-dots .dot');
    
    heroDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            // Remove active class from all dots
            heroDots.forEach(d => d.classList.remove('active'));
            // Add active class to clicked dot
            this.classList.add('active');
            // Add slide change functionality here
            console.log(`Slide ${index + 1} selected`);
        });
    });
    
    // Hero Control Button
    const controlBtn = document.querySelector('.control-btn');
    let isPlaying = false;
    
    if (controlBtn) {
        controlBtn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (isPlaying) {
                icon.className = 'fas fa-play';
                isPlaying = false;
            } else {
                icon.className = 'fas fa-pause';
                isPlaying = true;
            }
        });
    }
    
    // Service Cards Hover Effect
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('click', function() {
            // Add service card click functionality
            console.log('Service card clicked');
        });
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
    
    // Header Scroll Effect
    let lastScrollTop = 0;
    const header = document.querySelector('.site-header');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down
            header.classList.add('header-hidden');
        } else {
            // Scrolling up
            header.classList.remove('header-hidden');
        }
        
        lastScrollTop = scrollTop;
    });
    
});