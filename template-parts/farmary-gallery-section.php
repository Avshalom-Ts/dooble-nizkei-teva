<?php
/**
 * Template part for displaying the farmary gallery section
 *
 * @package nizkei-teva
 */
?>

<section class="farmary-gallery-section">
    <div class="farmary-gallery-section-title-container">
        <div class="gallery-section-content">
            <h2 class="section-title">הגלרייה החקלאית</h2>
            <p class="gallery-subtitle">תחרות "הגלריה החקלאית" של קנט חושפת לציבור הרחב את תרומתה הגדולה של החקלאות
                לפיתוחה של המדינה ואת יופיים המרהיב של החקלאות, הטבי והנוף בישראל.</p>
            <button class="cta-button">
                <span>
                    לצפייה בגלריה
                </span>
                <svg class="cta-arrow" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                </svg>
            </button>
        </div>
    </div>

    <div class="farmary-gallery-photos-container">
        <div class="farmary-gallery-photo-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alon-rows.jpg" alt="צילום אשר נון"
                class="farmary-gallery-photo" />
            <p class="photo-caption">צילום: אשר נון</p>
        </div>

        <div class="farmary-gallery-photo-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spraying.png" alt="צילום ברכיהו"
                class="farmary-gallery-photo" />
            <p class="photo-caption">צילום: ברכיהו</p>
        </div>
    </div>

</section>