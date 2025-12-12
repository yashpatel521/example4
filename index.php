<?php include 'components/Links.php'; ?>

<link rel="stylesheet" href="css/pages/artists.css" />
<?php include 'components/Header.php'; ?>
<!-- HERO SECTION -->
<section class="hero">
    <img
        src="<?php echo $PAINTINGS[14]['image']; ?>"
        alt="Contemporary Art Exhibition"
        class="hero-image" />
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">Juratan d’Alpharg</h1>
        <p class="hero-subtitle">Creator of Quantum Realism</p>
        <p class="hero-meta">2025 — Montréal</p>
        <a href="./pages/exhibitions.html" class="hero-cta">Find out more</a>
    </div>
</section>

<section class="exhibitions-section">
    <div class="container p-0">
        <div class="exhibitions-grid">
            <article class="exhibition-item">
                <a
                    href="<?php echo BASE_URL ?>exhibitions-details.php"
                    class="exhibition-image-link"
                    aria-label="Beatriz Milhazes – Além do Horizonte">
                    <img
                        src="<?php echo $PAINTINGS[4]['image']; ?>"
                        alt="Beatriz Milhazes exhibition installation view"
                        class="exhibition-image" />
                </a>
                <div class="exhibition-content">
                    <h3 class="exhibition-category">GALLERY EXHIBITION</h3>
                    <div class="exhibition-header">
                        <div class="">
                            <h3 class="exhibition-title">Beatriz Milhazes</h3>
                            <p class="exhibition-subtitle">Além do Horizonte</p>
                            <p class="exhibition-description">
                                In ‘Além do Horizonte’ (Beyond the Horizon), Beatriz
                                Milhazes deepens her evolving enquiry into the aesthetic and
                                affective potential of colour, pattern and ornament.
                            </p>
                            <a
                                href="/pages/exhibitions-details.html"
                                class="exhibition-cta"
                                aria-label="Visit exhibition Beatriz Milhazes">
                                <span class="exhibition-arrow" aria-hidden="true">→</span>
                                <span class="link-underline">Visit exhibition</span>
                            </a>
                        </div>
                        <div class="exhibition-when-where">
                            <span class="exhibition-dates">19 November 2025 – 17 January 2026</span>
                            <span class="exhibition-location">Mason’s Yard, London</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="exhibition-item">
                <a
                    href="#"
                    class="exhibition-image-link"
                    aria-label="Sylvia Snowden – On the Verge">
                    <img
                        src="<?php echo $PAINTINGS[5]['image']; ?>"
                        alt="Sylvia Snowden exhibition installation view"
                        class="exhibition-image" />
                </a>
                <div class="exhibition-content">
                    <h3 class="exhibition-category">GALLERY EXHIBITION</h3>
                    <div class="exhibition-header">
                        <div class="">
                            <h3 class="exhibition-title">Sylvia Snowden</h3>
                            <p class="exhibition-subtitle">On the Verge</p>
                            <p class="exhibition-description">
                                Sylvia Snowden (b. 1942, North Carolina) lives and works in
                                Washington, DC. Over a six-decade-long career, the artist
                                has developed a psychologically charged painting practice
                                that addresses subjects often overlooked by society while
                                pursuing a broader ambition: to capture the essence of the
                                human spirit.
                            </p>
                            <a
                                href="/pages/exhibitions-details.html"
                                class="exhibition-cta"
                                aria-label="Visit exhibition Sylvia Snowden">
                                <span class="exhibition-arrow" aria-hidden="true">→</span>
                                <span class="link-underline">Visit exhibition</span>
                            </a>
                        </div>
                        <div class="exhibition-when-where">
                            <span class="exhibition-dates">6 November – 19 December 2025</span>
                            <span class="exhibition-location">New York</span>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="feature-exhibition">
    <div class="container p-0">
        <div class="feature-exhibition-layout">
            <div class="feature-exhibition-text">
                <div class="">
                    <p class="feature-label">GALLERY EXHIBITION</p>
                    <h2 class="feature-title">Thresholds</h2>
                    <h3 class="feature-curated">Curated by<br />Galuh Sukardi</h3>
                    <p class="feature-meta feature-meta-dates">
                        31 October 2025 – 24 January 2026
                    </p>
                    <p class="feature-meta feature-meta-location">Hong Kong</p>
                </div>
                <div class="">
                    <p class="feature-description">
                        Thresholds brings together the work of nine artists who chart
                        their individual spiritual, political, physical or mythological
                        journeys of transformation. Forming a chorus of unique
                        experiences, all of which are shaped by the crossing of a
                        threshold, the works selected reflect an understanding of the
                        coexistence of light and dark: a dynamic whereby opposite forces
                        are not at odds but in balance.
                    </p>
                    <a
                        href="/pages/exhibitions-details.html"
                        class="feature-cta"
                        aria-label="Visit exhibition Thresholds link-underline">
                        <span class="feature-cta-arrow" aria-hidden="true">→</span>
                        <span class="link-underline">Visit exhibition</span>
                    </a>
                </div>
            </div>
            <div class="feature-exhibition-image-wrap">
                <img
                    src="<?php echo $PAINTINGS[2]['image']; ?>"
                    alt="Thresholds exhibition artwork"
                    class="feature-exhibition-image" />
            </div>
        </div>
    </div>
</section>

<section class="exhibitions-section">
    <div class="container p-0">
        <div class="exhibitions-grid">
            <article class="exhibition-item">
                <a
                    href="/exhibitions-details.php"
                    class="exhibition-image-link"
                    aria-label="Beatriz Milhazes – Além do Horizonte">
                    <img
                        src="<?php echo $PAINTINGS[7]['image']; ?>"
                        alt="Beatriz Milhazes exhibition installation view"
                        class="exhibition-image" />
                </a>
                <div class="exhibition-content">
                    <h3 class="exhibition-category">GALLERY EXHIBITION</h3>
                    <div class="exhibition-header">
                        <div class="">
                            <h3 class="exhibition-title">Enrico David</h3>
                            <p class="exhibition-subtitle">The Soul Drains the Hand</p>
                            <p class="exhibition-description">
                                ‘The Soul Drains the Hand’ marks Enrico David’s debut solo
                                exhibition in Paris, presenting over 20 new works across
                                sculpture, textile and works on paper. The exhibition’s
                                title overturns the well-worn formula of artistic creation:
                                rather than the hand behaving as the channel of the soul, it
                                is the soul that burdens and exhausts the artist’s hand.
                                This inversion resonates with the artist’s ongoing
                                meditation on the porous boundary between inner life and
                                outer form, and on the emotional toll exacted when material
                                is tasked with giving shape to the immaterial.
                            </p>
                            <a
                                href="/pages/exhibitions-details.html"
                                class="exhibition-cta"
                                aria-label="Visit exhibition Beatriz Milhazes">
                                <span class="exhibition-arrow" aria-hidden="true">→</span>
                                <span class="link-underline">Visit exhibition</span>
                            </a>
                        </div>
                        <div class="exhibition-when-where">
                            <span class="exhibition-dates">21 October – 19 December 2025</span>
                            <span class="exhibition-location">Paris</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="exhibition-item">
                <a
                    href="#"
                    class="exhibition-image-link"
                    aria-label="Sylvia Snowden – On the Verge">
                    <img
                        src="<?php echo $PAINTINGS[5]['image']; ?>"
                        alt="Sylvia Snowden exhibition installation view"
                        class="exhibition-image" />
                </a>
                <div class="exhibition-content">
                    <h3 class="exhibition-category">GALLERY EXHIBITION</h3>
                    <div class="exhibition-header">
                        <div class="">
                            <h3 class="exhibition-title">Julie Curtiss</h3>
                            <p class="exhibition-subtitle">Maid in Feathers</p>
                            <p class="exhibition-description">
                                White Cube Seoul presents the first solo exhibition in Korea
                                by Julie Curtiss. Spanning new paintings, sculptures, and
                                monochromatic works on paper, this presentation focuses on
                                themes of motherhood, nature and nurture, embodying the
                                artist’s flair for capturing the mundanity and absurdities
                                of life.
                            </p>
                            <a
                                href="/pages/exhibitions-details.html"
                                class="exhibition-cta"
                                aria-label="Visit exhibition Sylvia Snowden">
                                <span class="exhibition-arrow" aria-hidden="true">→</span>
                                <span class="link-underline">Visit exhibition</span>
                            </a>
                        </div>
                        <div class="exhibition-when-where">
                            <span class="exhibition-dates">5 November 2025 – 10 January 2026</span>
                            <span class="exhibition-location">Seoul</span>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="salon-promo">
    <div class=" ">
        <div class="salon-promo-layout">
            <div class="salon-image-wrap">
                <img
                    src="<?php echo $PAINTINGS[28]['image']; ?>"
                    alt="Doris Salcedo artwork"
                    class="salon-image" />
            </div>
            <div class="salon-panel">
                <div class="salon-panel-content">
                    <p class="salon-label">SALON</p>
                    <h2 class="salon-title">Doris Salcedo</h2>
                    <p class="salon-description">
                        We invite you to explore our current online presentation of
                        secondary market work in our monthly Salon programme. To date,
                        the gallery’s secondary market presentations have included
                        notable artworks by Jean-Michel Basquiat, Alexander Calder,
                        Carmen Herrera and Andy Warhol among others.
                    </p>
                    <a href="#" class="salon-cta" aria-label="Explore online">
                        <span class="salon-cta-arrow" aria-hidden="true">→</span>
                        <span class="link-underline">Explore online</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="book-newin">
    <div class=" ">
        <div class="book-newin-layout">
            <div class="book-newin-image-wrap">
                <img src="<?php echo $PAINTINGS[29]['image']; ?>" alt="Howardena Pindell ‘Howardena’ book cover" class="book-newin-image" />
            </div>
            <div class="book-newin-panel">
                <div class="book-newin-panel-inner">
                    <p class="book-newin-label">NEW IN</p>
                    <h2 class="book-newin-title">Howardena Pindell ‘Howardena’</h2>
                    <p class="book-newin-price">£40</p>
                    <p class="book-newin-description">
                        Published to mark Howardena Pindell’s solo exhibition at White Cube Bermondsey (November 2025 – January 2026), this monograph charts an extensive body of work made between the 1960s and the present day. Lavishly illustrated and offering compelling full-bleed details, ‘Howardena’ offers a discovery of the inimitable life and practice of the groundbreaking African American artist.
                    </p>
                    <a href="#" class="book-newin-cta"><span class="book-newin-cta-arrow">→</span><span class="link-underline">Purchase</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LATEST NEWS -->
<section class="news-section section">
    <div class="container p-0">
        <div class="news-header">
            <h2 class="news-title">Latest News</h2>
            <a href="#" class="news-view-all">
                <span class="news-arrow" aria-hidden="true">→</span>
                <span class="link-underline">View all news</span>
            </a>
        </div>

        <div class="news-grid">
            <?php
            for ($i = 0; $i < 5; $i++) {
            ?>
                <article class="news-card">
                    <a href="#" class="news-image-link">
                        <div class="news-image-wrap">
                            <img
                                class="news-image"
                                src="<?php echo $PAINTINGS[$i]['image']; ?>"
                                alt="Mona Hatoum at Fondazione Prada" />
                        </div>
                    </a>
                    <div class="news-meta">
                        <div class="news-category"><?php echo $PAINTINGS[$i]['category']; ?></div>
                        <h3 class="news-headline">
                            <a href="#"><?php echo $PAINTINGS[$i]['headline']; ?></a>
                        </h3>
                        <p class="news-info">
                            <?php echo $PAINTINGS[$i]['info']; ?>
                        </p>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'components/Footer.php'; ?>