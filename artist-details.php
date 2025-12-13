<?php include 'components/Links.php'; ?>

<link rel="stylesheet" href="css/pages/artists.css" />
<link rel="stylesheet" href="css/pages/artist-details.css" />

<?php include 'components/Header.php'; ?>
<main class="artists-page">
    <section class="artist-hero">
        <div class="container artist-hero-inner">
            <div class="artist-hero-text">
                <h1 class="artist-hero-title"><?php echo $ARTIST['name']; ?></h1>
                <div class="artist-hero-meta">
                    <p>
                        Live and work in <?php echo $ARTIST['location']; ?><br /><strong>B.&nbsp;<?php echo $ARTIST['date']; ?></strong>
                    </p>
                </div>
            </div>

            <figure class="artist-hero-figure">
                <img
                    class="artist-hero-image"
                    src="<?php echo $ARTIST['image']; ?>"
                    alt="<?php echo $ARTIST['name']; ?>, <?php echo $ARTIST['date']; ?>" />
                <figcaption class="artist-hero-caption">
                    <p><em><?php echo $ARTIST['name']; ?></em>, <?php echo $ARTIST['date']; ?></p>
                </figcaption>
            </figure>
        </div>
    </section>

    <div class="artists-divider"></div>

    <section class="container artist-bio-section">
        <div class="artist-bio-inner">
            <aside class="artist-bio-sidebar">
                <div class="artist-bio-sidebar-item">
                    <span class="artist-bio-sidebar-icon">↓</span>
                    <span>Download CV</span>
                </div>
                <div class="artist-bio-sidebar-item">
                    <span class="artist-bio-sidebar-icon">↗</span>
                    <span>Share</span>
                </div>
            </aside>

            <div class="artist-bio-content">
                <div class="artist-bio-intro">
                    <p>
                        <?php echo $ARTIST['description']; ?>
                    </p>
                </div>

                <div class="artist-bio-extra" id="artist-bio-extra">
                    <p>
                        <?php echo $ARTIST['biography']; ?>
                    </p>
                </div>

                <button
                    class="artist-bio-toggle"
                    type="button"
                    id="artist-bio-toggle"
                    aria-expanded="false">
                    <span class="artist-bio-toggle-arrow">→</span>
                    <span class="artist-bio-toggle-label">Read full biography</span>
                </button>
            </div>
        </div>
    </section>

    <!-- ARTWORKS SECTION -->
    <section class="artist-artworks-section" id="artist-artworks">
        <div class="container artist-artworks-inner">
            <aside class="artist-artworks-sidebar">
                <h2 class="artist-artworks-title">Artworks</h2>
                <button
                    class="artist-artworks-toggle"
                    type="button"
                    data-artworks-toggle
                    aria-expanded="false">
                    <span class="artist-artworks-toggle-icon">
                        <svg
                            class="fill-current"
                            width="13"
                            height="13"
                            viewBox="0 0 13 13"
                            fill="#000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 0.266602V3.2666H0.5V0.266602H3.5Z"></path>
                            <path d="M8 0.266602V3.24968H5V0.266602H8Z"></path>
                            <path d="M12.5 0.266602V3.24968H9.5V0.266602H12.5Z"></path>
                            <path d="M0.5 4.7666H3.48308V7.7666H0.5V4.7666Z"></path>
                            <path d="M0.5 9.2666H3.5V12.2666H0.5V9.2666Z"></path>
                            <path d="M5 12.2663V9.2832H8V12.2663H5Z"></path>
                            <path d="M9.5 12.2663V9.2832H12.5V12.2663H9.5Z"></path>
                            <path
                                d="M5.01562 4.7793H7.98563V7.74786H5.01562V4.7793Z"></path>
                            <path
                                d="M12.492 4.78418V7.75322H9.52344V4.78418H12.492Z"></path>
                        </svg>
                    </span>
                    <span class="artist-artworks-toggle-label">View all</span>
                </button>
            </aside>

            <div class="artist-artworks-grid is-collapsed" data-artworks-grid>
                <?php
                for ($i = 0; $i < 6; $i++) {
                ?>
                    <article class="artist-artwork-card">
                        <div class="artist-artwork-image-wrap">
                            <img
                                src="<?php echo $PAINTINGS[$i]['image']; ?>"
                                alt="Artwork <?php echo $i + 1; ?>"
                                class="artist-artwork-image" />
                        </div>
                        <div class="artist-artwork-meta">
                            <p class="artist-artwork-title"><?php echo $PAINTINGS[$i]['title']; ?></p>
                            <p class="artist-artwork-caption"><?php echo $PAINTINGS[$i]['description']; ?></p>
                        </div>
                    </article>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- AVAILABLE ARTWORKS SECTION -->
    <section class="artist-available-section" id="available-artworks">
        <div class="container artist-available-inner">
            <aside class="artist-available-sidebar">
                <h2 class="artist-available-title">Available Artworks</h2>
            </aside>

            <div class="artist-available-grid">
                <article class="artist-available-card">
                    <div class="artist-available-image-wrap">
                        <img
                            src="<?php echo $PAINTINGS[9]['image']; ?>"
                            alt="Available artwork 1"
                            class="artist-available-image" />
                    </div>
                    <div class="artist-available-meta">
                        <div class="">
                            <p class="artist-available-artist"><?php echo $ARTIST['name']; ?></p>
                            <p class="artist-available-title-text">
                                <?php echo $PAINTINGS[9]['title']; ?>, <?php echo $PAINTINGS[9]['description']; ?>, <?php echo $PAINTINGS[9]['date']; ?>
                            </p>
                            <p class="artist-available-price">Price upon request</p>
                        </div>
                        <div class="artist-available-actions">
                            <button class="artist-available-plus" type="button">+</button>
                            <button class="artist-available-enquire" type="button">
                                Enquire
                            </button>
                        </div>
                    </div>
                </article>

                <article class="artist-available-card">
                    <div class="artist-available-image-wrap">
                        <img
                            src="<?php echo $PAINTINGS[7]['image']; ?>"
                            alt="Available artwork 2"
                            class="artist-available-image" />
                    </div>
                    <div class="artist-available-meta">
                        <div class="">
                            <p class="artist-available-artist"><?php echo $ARTIST['name']; ?></p>
                            <p class="artist-available-title-text"><?php echo $PAINTINGS[7]['title']; ?>, <?php echo $PAINTINGS[7]['description']; ?>, <?php echo $PAINTINGS[7]['date']; ?></p>
                            <p class="artist-available-price">Price upon request</p>
                        </div>
                        <div class="artist-available-actions">
                            <button class="artist-available-plus" type="button">+</button>
                            <button class="artist-available-enquire" type="button">
                                Enquire
                            </button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- EXHIBITIONS SECTION -->
    <section class="artist-exhibitions-section" id="artist-exhibitions">
        <div class="container artist-exhibitions-inner">
            <aside class="artist-exhibitions-sidebar">
                <h2 class="artist-exhibitions-title">Exhibitions</h2>
                <button
                    class="artist-exhibitions-toggle"
                    type="button"
                    data-exhibitions-toggle
                    aria-expanded="false">
                    <span class="artist-exhibitions-toggle-icon">
                        <svg
                            class="fill-current"
                            width="13"
                            height="13"
                            viewBox="0 0 13 13"
                            fill="#000"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 0.266602V3.2666H0.5V0.266602H3.5Z"></path>
                            <path d="M8 0.266602V3.24968H5V0.266602H8Z"></path>
                            <path d="M12.5 0.266602V3.24968H9.5V0.266602H12.5Z"></path>
                            <path d="M0.5 4.7666H3.48308V7.7666H0.5V4.7666Z"></path>
                            <path d="M0.5 9.2666H3.5V12.2666H0.5V9.2666Z"></path>
                            <path d="M5 12.2663V9.2832H8V12.2663H5Z"></path>
                            <path d="M9.5 12.2663V9.2832H12.5V12.2663H9.5Z"></path>
                            <path
                                d="M5.01562 4.7793H7.98563V7.74786H5.01562V4.7793Z"></path>
                            <path
                                d="M12.492 4.78418V7.75322H9.52344V4.78418H12.492Z"></path>
                        </svg>
                    </span>
                    <span class="artist-exhibitions-toggle-label">View all</span>
                </button>
            </aside>

            <div
                class="artist-exhibitions-grid is-collapsed"
                data-exhibitions-grid>
                <?php
                for ($i = 10; $i < 14; $i++) { ?>
                    <article class="artist-exhibition-card">
                        <div class="artist-exhibition-image-wrap">
                            <img
                                src="<?php echo $PAINTINGS[$i]['image']; ?>"
                                alt="<?php echo $PAINTINGS[$i]['title']; ?>"
                                class="artist-exhibition-image" />
                        </div>
                        <div class="artist-exhibition-meta">
                            <div class="artist-exhibition-left">
                                <p class="artist-exhibition-label"><?php echo $PAINTINGS[$i]['category']; ?></p>
                                <p class="artist-exhibition-title"><?php echo $PAINTINGS[$i]['title']; ?></p>
                                <p class="artist-exhibition-subtitle">
                                    <?php echo $PAINTINGS[$i]['description']; ?>
                                </p>
                            </div>
                            <div class="artist-exhibition-right">
                                <p class="artist-exhibition-dates">
                                    <?php echo $PAINTINGS[$i]['date']; ?>
                                </p>
                                <p class="artist-exhibition-location"><?php echo $PAINTINGS[$i]['location']; ?></p>
                            </div>
                        </div>
                    </article>
                <?php
                }
                ?>

            </div>
        </div>
    </section>

    <!-- MUSEUM EXHIBITIONS SECTION -->
    <section class="artist-museum-section" id="museum">
        <div class="container p-0 artist-museum-inner">
            <aside class="artist-museum-sidebar">
                <h2 class="artist-museum-title">Museum<br />Exhibitions</h2>
                <a href="#" class="artist-museum-link">
                    <span>Find out more</span>
                    <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 8H15M15 8L8 1M15 8L8 15"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </aside>

            <div class="artist-museum-grid">
                <?php
                for ($i = 14; $i < 17; $i++) {
                ?>
                    <article class="artist-museum-card">
                        <div class="artist-museum-card-image">
                            <img
                                src="<?php echo $PAINTINGS[$i]['image']; ?>"
                                alt="<?php echo $PAINTINGS[$i]['title']; ?>" />
                        </div>
                        <div class="artist-museum-card-content">
                            <p class="artist-museum-card-label"><?php echo $PAINTINGS[$i]['category']; ?></p>
                            <h3 class="artist-museum-card-title"><?php echo $PAINTINGS[$i]['title']; ?></h3>
                            <p class="artist-museum-card-meta"><?php echo $PAINTINGS[$i]['description']; ?></p>
                            <p class="artist-museum-card-posted">Posted: <?php echo $PAINTINGS[$i]['date']; ?></p>
                        </div>
                    </article>
                <?php
                }
                ?>



            </div>
        </div>
    </section>



</main>
<?php include 'components/Footer.php'; ?>