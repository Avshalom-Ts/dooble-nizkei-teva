<?php
/**
 * Template Name: Front Page
 * Description: Custom home page template
 */

get_header(); ?>

<main class="main-content">


    <section class="news-section">
        <div class="news-title-container">
            <span class="play-button"></span>
            <p class="news-section-title">חדשות ועדכונים</p>
            <div class="h-divider"></div>
            <p class="news-section-title">כדי להתעדכן מהתעדכן מקווים אתכם לצפות אלינו בדיגיטל</p>
        </div>
    </section>

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


    <div class="hero-sidebar">
        <div class="sidebar-item menu-title">
            <span class="sidebar-text">שירותים מהירים</span>
            <svg class="cta-arrow" viewBox="0 0 24 24" fill="currentColor">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
            </svg>
        </div>
        <div class="sidebar-links-grid">
            <div class="sidebar-item">
                <span class="sidebar-icon my-policies"></span>
                <span class="sidebar-text">הפוליסות שלי</span>
            </div>
            <div class="sidebar-item">
                <span class="sidebar-icon damage-claims"></span>
                <span class="sidebar-text">הגשת בקשה להודעת נזק</span>
            </div>
            <div class="sidebar-item">
                <span class="sidebar-icon check-status"></span>
                <span class="sidebar-text">בירור סטטוס תביעה</span>
            </div>
            <div class="sidebar-item">
                <span class="sidebar-icon update-profile"></span>
                <span class="sidebar-text">עדכון פרטים אישיים</span>
            </div>
        </div>
    </div>

    <div class="floating-buttons">
        <a href="#" class="floating-btn whatsapp-btn" title="WhatsApp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/watsapp-icon.png" alt="WhatsApp Icon" />
        </a>
        <a href="#contact" class="floating-btn contact-btn" title="צור קשר">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-icon.png" alt="Message Icon" />
        </a>
    </div>

    <section class="gallery-section">

        <div class="gallery-section-title-container">
            <h2 class="section-title">ענפים מבוטחים</h2>
        </div>

        <div class="gallery-container">

            <div class="gallery-card">
                <h3 class="gallery-card-title">01</h3>
                <h4 class="gallery-card-subtitle">ענפי הצומח</h4>
                <div class="gallery-card-image"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/oranges.png');">
                </div>
            </div>

            <div class="gallery-card">
                <h3 class="gallery-card-title">02</h3>
                <h4 class="gallery-card-subtitle">ענפי החי</h4>
                <div class="gallery-card-image"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cow.png');">
                </div>
            </div>

            <div class="gallery-card">
                <h3 class="gallery-card-title">03</h3>
                <h4 class="gallery-card-subtitle">ענפי כלליים</h4>
                <div class="gallery-card-image"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/greenhouse.png');">
                </div>
            </div>

        </div>

    </section>

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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clouds.png"
                                alt="clouds">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bananas.png"
                                alt="bananas">
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

        </div>

    </section>


</main>

<?php get_footer(); ?>