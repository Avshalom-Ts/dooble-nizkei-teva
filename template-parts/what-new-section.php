<?php
/**
 * Template part for displaying the what's new section
 *
 * @package nizkei-teva
 */
?>

<section class="what-new-section">
    <!-- Title section + all news button -->
    <div class="what-new-title-container">
        <h2 class="section-title">מה חדש בקנט?</h2>
        <button class="all-news-button">
            <span>לכל החדשות</span>
            <svg class="cta-arrow" viewBox="0 0 24 24" fill="currentColor">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
            </svg>
        </button>
    </div>

    <div class="what-new-content-container">
        <div class="what-new-content-right">
            <div class="featured-article">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain.png"
                    alt="לורם איפסום דולור סיט אמט קונסקטור" class="featured-image">
                <div class="featured-overlay">
                    <span class="featured-date">22.08.20</span>
                    <h3 class="featured-title">לורם איפסום דולור סיט אמט קונסקטור</h3>
                    <p class="featured-excerpt">לורם איפסום דולור סיט אמט קונסקטור אדיפיסינג אלית קולהע צופרט בלוטה
                    </p>
                    <a href="#" class="read-more">קרא עוד</a>
                </div>
            </div>
        </div>

        <div class="what-new-content-left">
            <div class="news-list">
                <article class="news-item">
                    <div class="news-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clouds.png" alt="clouds">
                    </div>
                    <div class="news-content">
                        <span class="news-date">22.08.20</span>
                        <h4 class="news-title">נופש קליל ברקיעא סוסס לטיק</h4>
                        <p class="news-excerpt">לורם איפסום דולור סיט אמט קונסקטור אדיפיסינג אלית סדולל היטוניו
                            לוטהו טלמיד</p>
                        <a href="#" class="news-read-more">קרא עוד</a>
                    </div>
                </article>

                <article class="news-item">
                    <div class="news-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bananas.png" alt="bananas">
                    </div>
                    <div class="news-content">
                        <span class="news-date">22.08.20</span>
                        <h4 class="news-title">נילו מנכו סוביס לורם ערק יוחי</h4>
                        <p class="news-excerpt">לורם איפסום דולור סיט אמט קונסקטור אדיפיסינג אלית סדולל היטוניו
                            לוטהו טלמיד</p>
                        <a href="#" class="news-read-more">קרא עוד</a>
                    </div>
                </article>

                <article class="news-item">
                    <div class="news-thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cows.png" alt="cows">
                    </div>
                    <div class="news-content">
                        <span class="news-date">22.08.20</span>
                        <h4 class="news-title">קומיסט סוציס קורהע בליפסי</h4>
                        <p class="news-excerpt">לורם איפסום דולור סיט אמט קונסקטור אדיפיסינג אלית סדולל היטוניו
                            לוטהו טלמיד</p>
                        <a href="#" class="news-read-more">קרא עוד</a>
                    </div>
                </article>
            </div>
        </div>

        <div class="all-news-button-container">
            <button class="all-news-button">
                <span>לכל החדשות</span>
                <svg class="cta-arrow" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                </svg>
            </button>
        </div>

    </div>

</section>