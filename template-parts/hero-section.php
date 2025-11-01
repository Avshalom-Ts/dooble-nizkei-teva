<?php
/**
 * Template part for displaying the hero section
 *
 * @package nizkei-teva
 */
?>

<section class="hero-section">
    <div class="hero-image">
        <div class="hero-content">

            <div class="hero-main-content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-logo.png" alt="Hero Logo"
                    class="hero-logo" />
                <h1 class="hero-title">קנט - קרן לביטוחי נזקי טבע בחקלאות בע"מ</h1>
                <h2 class="hero-subtitle">כי לטבע חוקים משלו</h2>
                <p class="hero-description">הן על הפקח שלך ועל היבואה של קנט</p>
                <button class="cta-button">
                    <span>לפרטים נוספים</span>
                    <svg class="cta-arrow" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="hero-pagination">
            <span class="play-button"></span>
            <span class="pagination-dot active"></span>
            <span class="pagination-dot"></span>
            <span class="pagination-dot"></span>
        </div>
    </div>
</section>