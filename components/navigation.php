<!-- BOTTOM NAVIGATION -->
<div class="bottom-nav-container">
    <!-- Hamburger Button -->
    <button class="bottom-nav-toggle" aria-label="Toggle bottom menu">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Menu Modal -->
    <div class="bottom-nav-overlay" style="display: none"></div>
    <div class="bottom-nav-menu" style="display: none">
        <!-- Menu Content -->
        <div class="bottom-nav-content">
            <!-- Primary Navigation (4 items in single row) -->
            <div class="bottom-nav-primary">
                <a href="<?php echo BASE_URL . 'artist-details.php'; ?>" class="bottom-nav-item">Artists</a>
                <a href="<?php echo BASE_URL . 'exhibitions.php'; ?>" class="bottom-nav-item">Exhibitions</a>
                <a href="#" class="bottom-nav-item">Collect</a>
                <a href="#" class="bottom-nav-item">Bookmark</a>
            </div>

            <!-- Account Section -->
            <!-- <div class="bottom-nav-account">
                <svg
                    width="18"
                    height="18"
                    viewBox="0 0 16 16"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5">
                    <circle cx="8" cy="6" r="3" />
                    <path d="M2 14c0-3.314 2.686-6 6-6s6 2.686 6 6" />
                </svg>
                <span>My Account</span>
            </div> -->

            <!-- Toggle / Close Controls -->
            <button class="bottom-nav-more-toggle">
                <span class="bottom-nav-arrow" aria-hidden="true">
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 9L12 15L18 9"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="bottom-nav-close-inline">CLOSE</span>
            </button>

            <!-- Additional Navigation (Hidden by default) -->
            <div class="bottom-nav-extra" style="display: none">
                <div class="bottom-nav-grid bottom-nav-grid-about">
                    <a href="#" class="bottom-nav-item">About</a>
                    <a href="#" class="bottom-nav-item">Locations</a>
                    <a href="#" class="bottom-nav-item">Careers</a>

                    <span class="bottom-nav-item-spacer"></span>
                    <a href="#" class="bottom-nav-item">Sustainability</a>
                    <a href="#" class="bottom-nav-item">Contact</a>
                </div>

                <div class="bottom-nav-grid bottom-nav-grid-news">
                    <a href="#" class="bottom-nav-item">News</a>
                    <a href="#" class="bottom-nav-item">Press Releases</a>
                    <a href="#" class="bottom-nav-item">Events</a>

                    <span class="bottom-nav-item-spacer"></span>
                    <a href="#" class="bottom-nav-item">Museum Exhibitions</a>
                    <span class="bottom-nav-item-spacer"></span>
                </div>

                <!-- Less Toggle Button -->
                <button class="bottom-nav-less-toggle">
                    <span class="bottom-nav-arrow" aria-hidden="true">
                        <svg
                            width="18"
                            height="18"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 15L12 9L6 15"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                    <span class="bottom-nav-close-inline">CLOSE</span>
                </button>
            </div>
        </div>
    </div>
</div>