<header class="header <?php echo basename($_SERVER['PHP_SELF']) === 'index.php' || basename($_SERVER['PHP_SELF']) === 'exhibitions-details.php' ? 'header-home' : 'header-other'; ?>">
    <div class="container header-container">
        <!-- Left Navigation -->
        <nav class="nav-left">
            <a href="<?php echo BASE_URL . 'artist-details.php'; ?>" class="nav-link">Artist</a>
            <a href="<?php echo BASE_URL . 'exhibitions.php'; ?>" class="nav-link">Exhibitions</a>
        </nav>

        <!-- Centered Logo -->
        <a href="<?php echo BASE_URL; ?>" class="logo">Painter's Studio</a>

        <!-- Right Navigation -->
        <nav class="nav-right">
            <a href="#" class="nav-link">Collect</a>
            <a href="#" class="nav-link">Bookshop</a>
            <a href="<?php echo BASE_URL . 'artist-details.php'; ?>" class="user-icon" aria-label="Account">
                <svg
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5">
                    <circle cx="8" cy="6" r="3" />
                    <path d="M2 14c0-3.314 2.686-6 6-6s6 2.686 6 6" />
                </svg>
            </a>
        </nav>

        <button class="mobile-menu-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>