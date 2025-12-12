// ========================================
// WHITECUBE CLONE - MAIN JAVASCRIPT
// ========================================

// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
    initNavigation();
    initScrollEffects();
    initAnimations();
    initNewsletterForm();
    initMobileMenu();
    initArtistSearch();
    initArtistBiographyToggle();
    initArtistArtworksToggle();
    initArtistExhibitionsToggle();
    initAvailableAccountModal();
    initFeaturedFilmVideo();
    initBottomNavigation();
    initArtworkDetailModal();
    initSalonViewAll();
    initVideoPlayer();
    initHomeGalleryVideo();
});

// ========================================
// NAVIGATION
// ========================================

function initNavigation() {
    const header = document.querySelector(".header");
    const navLinks = document.querySelectorAll(".nav-link");

    // Add active class to current page
    const currentPage = window.location.pathname.split("/").pop() || "index.html";
    navLinks.forEach((link) => {
        let linkPage = link.getAttribute("href");
        // Remove ./ prefix if present
        linkPage = linkPage.replace(/^\.\//, "");
        // Remove ../ prefix if present
        linkPage = linkPage.replace(/^\.\.\//, "");

        if (linkPage === currentPage || (currentPage === "" && linkPage === "index.html")) {
            link.classList.add("active");
        }

        // ========================================
        // AVAILABLE ARTWORKS - ACCOUNT MODAL
        // ========================================
        function initAvailableAccountModal() {
            const modal = document.querySelector("[data-available-account-modal]");
            const openBtns = document.querySelectorAll("[data-available-account-modal-open]");
            const closeEls = document.querySelectorAll("[data-available-account-modal-close]");

            if (!modal || openBtns.length === 0) return;

            const open = () => {
                modal.classList.add("is-open");
                document.body.style.overflow = "hidden";
            };

            const close = () => {
                modal.classList.remove("is-open");
                document.body.style.overflow = "";
            };

            openBtns.forEach((btn) => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    open();
                });
            });

            closeEls.forEach((el) => {
                el.addEventListener("click", (e) => {
                    e.preventDefault();
                    close();
                });
            });

            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape" && modal.classList.contains("is-open")) {
                    close();
                }
            });
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth",
                });
            }
        });
    });
}

function initHomeGalleryVideo() {
    const container = document.getElementById("homeVideoContainer");
    const playBtn = document.getElementById("homeVideoPlayBtn");
    const thumb = document.getElementById("homeVideoThumbnail");
    const iframe = document.getElementById("homeVideoIframe");

    if (!container || !playBtn || !thumb || !iframe) return;

    const vimeoUrl =
        "https://player.vimeo.com/video/1142419941?h=711a8620e3&app_id=122963&playsinline=1&autoplay=1&texttrack=en-GB";

    const showVideo = (e) => {
        if (e && e.preventDefault) e.preventDefault();
        if (e && e.stopPropagation) e.stopPropagation();
        iframe.src = vimeoUrl;
        iframe.style.display = "block";
        playBtn.style.display = "none";
        thumb.style.display = "none";
    };

    playBtn.addEventListener("click", showVideo);
    container.addEventListener("click", (e) => {
        if (e.target === playBtn) return;
        if (iframe.style.display !== "block") showVideo(e);
    });
}

// ========================================
// AVAILABLE ARTWORKS - ARTWORK DETAIL MODAL
// ========================================
function initArtworkDetailModal() {
    const modal = document.querySelector("[data-artwork-modal]");
    if (!modal) return;

    const overlayCloseEls = modal.querySelectorAll("[data-artwork-modal-close]");
    const mainImg = modal.querySelector("[data-artwork-main]");
    const cards = document.querySelectorAll(".available-artwork-card, .available-secondary-card");

    if (!mainImg || cards.length === 0) return;

    const open = () => {
        modal.classList.add("is-open");
        document.body.style.overflow = "hidden";
    };

    const close = () => {
        modal.classList.remove("is-open");
        document.body.style.overflow = "";
    };

    cards.forEach((card) => {
        const img = card.querySelector("img");
        if (!img) return;

        img.style.cursor = "pointer";
        img.addEventListener("click", (e) => {
            e.preventDefault();
            open();
        });
    });

    // Thumbnail click -> swap main image
    modal.querySelectorAll("[data-artwork-thumb]").forEach((btn) => {
        btn.addEventListener("click", () => {
            const img = btn.querySelector("img");
            if (!img) return;
            mainImg.src = img.src;
            mainImg.alt = img.alt || "Artwork";

            modal.querySelectorAll(".artwork-detail-thumb").forEach((b) => b.classList.remove("is-active"));
            btn.classList.add("is-active");
        });
    });

    overlayCloseEls.forEach((el) => {
        el.addEventListener("click", (e) => {
            e.preventDefault();
            close();
        });
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && modal.classList.contains("is-open")) {
            close();
        }
    });
}

// ========================================
// ARTISTS PAGE: SEARCH TOGGLE
// ========================================

function initArtistSearch() {
    const toggle = document.querySelector(".artist-search-toggle");
    const bar = document.querySelector(".artist-search-bar");
    const input = document.querySelector(".artist-search-input");
    const closeBtn = document.querySelector(".artist-search-close");

    if (!toggle || !bar) return;

    const close = () => bar.classList.remove("open");

    toggle.addEventListener("click", (e) => {
        e.preventDefault();
        bar.classList.toggle("open");
        if (bar.classList.contains("open") && input) {
            setTimeout(() => input.focus(), 0);
        }
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", (e) => {
            e.preventDefault();
            close();
        });
    }

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") close();
    });

    document.addEventListener("click", (e) => {
        if (!bar.contains(e.target) && !toggle.contains(e.target)) {
            close();
        }
    });
}

// ========================================
// ARTIST BIOGRAPHY TOGGLE
// ========================================

function initArtistBiographyToggle() {
    const bioToggle = document.getElementById("artist-bio-toggle");
    const bioExtra = document.getElementById("artist-bio-extra");

    if (bioToggle && bioExtra) {
        const labelEl = bioToggle.querySelector(".artist-bio-toggle-label");

        bioToggle.addEventListener("click", () => {
            const isOpen = bioExtra.classList.contains("open");

            if (isOpen) {
                bioExtra.classList.remove("open");
                bioExtra.style.maxHeight = "0";
                bioToggle.setAttribute("aria-expanded", "false");
                if (labelEl) labelEl.textContent = "Read full biography";
            } else {
                bioExtra.classList.add("open");
                bioExtra.style.maxHeight = bioExtra.scrollHeight + "px";
                bioToggle.setAttribute("aria-expanded", "true");
                if (labelEl) labelEl.textContent = "Read less";
            }
        });
    }
}

// ========================================
// ARTIST ARTWORKS VIEW-ALL TOGGLE
// ========================================

function initArtistArtworksToggle() {
    const toggle = document.querySelector("[data-artworks-toggle]");
    const grid = document.querySelector("[data-artworks-grid]");

    if (!toggle || !grid) return;

    const labelEl = toggle.querySelector(".artist-artworks-toggle-label");

    toggle.addEventListener("click", () => {
        const isCollapsed = grid.classList.contains("is-collapsed");

        if (isCollapsed) {
            grid.classList.remove("is-collapsed");
            toggle.setAttribute("aria-expanded", "true");
            if (labelEl) labelEl.textContent = "Hide all";
        } else {
            grid.classList.add("is-collapsed");
            toggle.setAttribute("aria-expanded", "false");
            if (labelEl) labelEl.textContent = "View all";
        }
    });
}

// ========================================
// ARTIST EXHIBITIONS VIEW-ALL TOGGLE
// ========================================

function initArtistExhibitionsToggle() {
    const toggle = document.querySelector("[data-exhibitions-toggle]");
    const grid = document.querySelector("[data-exhibitions-grid]");

    if (!toggle || !grid) return;

    const labelEl = toggle.querySelector(".artist-exhibitions-toggle-label");

    toggle.addEventListener("click", () => {
        const isCollapsed = grid.classList.contains("is-collapsed");

        if (isCollapsed) {
            grid.classList.remove("is-collapsed");
            toggle.setAttribute("aria-expanded", "true");
            if (labelEl) labelEl.textContent = "Hide all";
        } else {
            grid.classList.add("is-collapsed");
            toggle.setAttribute("aria-expanded", "false");
            if (labelEl) labelEl.textContent = "View all";
        }
    });
}

// ========================================
// FEATURED FILM VIDEO
// ========================================

function initFeaturedFilmVideo() {
    const videoWrap = document.querySelector(".artist-featured-film-video-wrap");
    const playBtn = document.querySelector(".artist-featured-film-play-btn");
    const thumbnail = document.getElementById("featured-film-thumbnail");
    const iframe = document.getElementById("featured-film-iframe");

    if (!videoWrap || !playBtn || !thumbnail || !iframe) return;

    // Show video when play button is clicked
    const showVideo = (e) => {
        e.preventDefault();
        e.stopPropagation();
        videoWrap.classList.add("video-active");
        thumbnail.style.display = "none";
        playBtn.style.display = "none";
        iframe.style.display = "block";
    };

    playBtn.addEventListener("click", showVideo);
    videoWrap.addEventListener("click", showVideo);
}

// ========================================
// SCROLL EFFECTS
// ========================================

function initScrollEffects() {
    const header = document.querySelector(".header");
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;

        // Add shadow to header on scroll
        if (currentScroll > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }

        lastScroll = currentScroll;
    });

    // Parallax effect for hero image
    const heroImage = document.querySelector(".hero-image");
    if (heroImage) {
        window.addEventListener("scroll", () => {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            heroImage.style.transform = `translateY(${parallax}px)`;
        });
    }
}

// ========================================
// ANIMATIONS
// ========================================

function initAnimations() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-in-up");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe exhibition cards
    const cards = document.querySelectorAll(".exhibition-card");
    cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
        observer.observe(card);
    });

    // Observe sections
    const sections = document.querySelectorAll(".section");
    sections.forEach((section) => {
        observer.observe(section);
    });
}

// ========================================
// MOBILE MENU
// ========================================

function initMobileMenu() {
    const menuToggle = document.querySelector(".mobile-menu-toggle");
    const navLeft = document.querySelector(".nav-left");
    const navRight = document.querySelector(".nav-right");

    if (menuToggle && navLeft && navRight) {
        menuToggle.addEventListener("click", () => {
            navLeft.classList.toggle("active");
            navRight.classList.toggle("active");
            menuToggle.classList.toggle("active");

            // Animate hamburger icon
            const spans = menuToggle.querySelectorAll("span");
            if (menuToggle.classList.contains("active")) {
                spans[0].style.transform = "rotate(45deg) translateY(7px)";
                spans[1].style.opacity = "0";
                spans[2].style.transform = "rotate(-45deg) translateY(-7px)";
            } else {
                spans[0].style.transform = "none";
                spans[1].style.opacity = "1";
                spans[2].style.transform = "none";
            }
        });

        // Close menu when clicking outside
        document.addEventListener("click", (e) => {
            if (!menuToggle.contains(e.target) && !navLeft.contains(e.target) && !navRight.contains(e.target)) {
                navLeft.classList.remove("active");
                navRight.classList.remove("active");
                menuToggle.classList.remove("active");

                const spans = menuToggle.querySelectorAll("span");
                spans[0].style.transform = "none";
                spans[1].style.opacity = "1";
                spans[2].style.transform = "none";
            }
        });
    }
}

// ========================================
// NEWSLETTER FORM
// ========================================

function initNewsletterForm() {
    const form = document.querySelector(".newsletter-form");

    if (form) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const emailInput = form.querySelector(".newsletter-input");
            const email = emailInput.value.trim();

            if (validateEmail(email)) {
                // Simulate form submission
                showNotification("Thank you for subscribing!", "success");
                emailInput.value = "";
            } else {
                showNotification("Please enter a valid email address", "error");
            }
        });
    }
}

// ========================================
// UTILITY FUNCTIONS
// ========================================

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function showNotification(message, type = "success") {
    // Remove existing notification if any
    const existingNotification = document.querySelector(".notification");
    if (existingNotification) {
        existingNotification.remove();
    }

    // Create notification element
    const notification = document.createElement("div");
    notification.className = `notification notification-${type}`;
    notification.textContent = message;

    // Add styles
    Object.assign(notification.style, {
        position: "fixed",
        top: "100px",
        right: "20px",
        padding: "1rem 1.5rem",
        backgroundColor: type === "success" ? "#10b981" : "#ef4444",
        color: "white",
        borderRadius: "4px",
        boxShadow: "0 4px 6px rgba(0, 0, 0, 0.1)",
        zIndex: "9999",
        animation: "slideInRight 0.3s ease",
        fontFamily: "var(--font-primary)",
        fontSize: "0.875rem",
        fontWeight: "500",
    });

    document.body.appendChild(notification);

    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.animation = "slideOutRight 0.3s ease";
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// ========================================
// IMAGE LOADING
// ========================================

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll("img[data-src]");

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute("data-src");
                observer.unobserve(img);
            }
        });
    });

    images.forEach((img) => imageObserver.observe(img));
}

// ========================================
// EXHIBITION CARD INTERACTIONS
// ========================================

function initExhibitionCards() {
    const cards = document.querySelectorAll(".exhibition-card");

    cards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-5px)";
        });

        card.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0)";
        });
    });
}

// Initialize exhibition cards when DOM is ready
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initExhibitionCards);
} else {
    initExhibitionCards();
}

// ========================================
// CUSTOM CURSOR (Optional Enhancement)
// ========================================

function initCustomCursor() {
    const cursor = document.createElement("div");
    cursor.className = "custom-cursor";
    cursor.style.cssText = `
    width: 20px;
    height: 20px;
    border: 2px solid #000;
    border-radius: 50%;
    position: fixed;
    pointer-events: none;
    z-index: 9999;
    transition: transform 0.2s ease;
    display: none;
  `;
    document.body.appendChild(cursor);

    document.addEventListener("mousemove", (e) => {
        cursor.style.display = "block";
        cursor.style.left = e.clientX - 10 + "px";
        cursor.style.top = e.clientY - 10 + "px";
    });

    // Enlarge cursor on hover over interactive elements
    const interactiveElements = document.querySelectorAll("a, button, .exhibition-card");
    interactiveElements.forEach((el) => {
        el.addEventListener("mouseenter", () => {
            cursor.style.transform = "scale(1.5)";
        });
        el.addEventListener("mouseleave", () => {
            cursor.style.transform = "scale(1)";
        });
    });
}

// Uncomment to enable custom cursor
// initCustomCursor();

// ========================================
// PERFORMANCE OPTIMIZATION
// ========================================

// Debounce function for scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Add CSS animations
const style = document.createElement("style");
style.textContent = `
  @keyframes slideInRight {
    from {
      transform: translateX(100%);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }
  
  @keyframes slideOutRight {
    from {
      transform: translateX(0);
      opacity: 1;
    }
    to {
      transform: translateX(100%);
      opacity: 0;
    }
  }
`;
document.head.appendChild(style);

// ========================================
// BOTTOM NAVIGATION
// ========================================

function initBottomNavigation() {
    const toggle = document.querySelector(".bottom-nav-toggle");
    const menu = document.querySelector(".bottom-nav-menu");
    const overlay = document.querySelector(".bottom-nav-overlay");
    const moreToggle = document.querySelector(".bottom-nav-more-toggle");
    const extraContent = document.querySelector(".bottom-nav-extra");
    const inlineCloseButtons = document.querySelectorAll(".bottom-nav-close-inline");

    if (!toggle || !menu) return;

    const closeMenu = () => {
        menu.style.display = "none";
        if (overlay) overlay.style.display = "none";
        toggle.classList.remove("hidden");
        if (extraContent) {
            extraContent.style.display = "none";
        }
        if (moreToggle) {
            moreToggle.style.display = "flex";
        }
    };

    // Toggle menu open/close
    toggle.addEventListener("click", () => {
        const isHidden = menu.style.display === "none";
        if (isHidden) {
            menu.style.display = "block";
            if (overlay) overlay.style.display = "block";
            toggle.classList.add("hidden");
        } else {
            closeMenu();
        }
    });

    // Inline CLOSE labels next to MORE / LESS
    inlineCloseButtons.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            closeMenu();
        });
    });

    // Close menu when clicking overlay
    if (overlay) {
        overlay.addEventListener("click", () => {
            closeMenu();
        });
    }

    // Toggle MORE/LESS
    if (moreToggle && extraContent) {
        moreToggle.addEventListener("click", (e) => {
            e.preventDefault();
            const isHidden = extraContent.style.display === "none";

            if (isHidden) {
                // Show extra content
                extraContent.style.display = "block";
                // Hide MORE button
                moreToggle.style.display = "none";
            } else {
                // Hide extra content
                extraContent.style.display = "none";
                // Show MORE button
                moreToggle.style.display = "flex";
            }
        });
    }

    // Handle LESS button
    const lessToggle = document.querySelector(".bottom-nav-less-toggle");
    if (lessToggle && extraContent) {
        lessToggle.addEventListener("click", (e) => {
            e.preventDefault();
            // Hide extra content
            extraContent.style.display = "none";
            // Show MORE button
            if (moreToggle) {
                moreToggle.style.display = "flex";
            }
        });
    }

    // Close menu when clicking on a navigation item
    const navItems = document.querySelectorAll(".bottom-nav-item");
    navItems.forEach((item) => {
        item.addEventListener("click", () => {
            closeMenu();
        });
    });
}

// ========================================
// AVAILABLE ARTWORKS - ACCOUNT MODAL (global)
// ========================================
function initAvailableAccountModal() {
    const modal = document.querySelector("[data-available-account-modal]");
    const openBtns = document.querySelectorAll("[data-available-account-modal-open]");
    const closeEls = document.querySelectorAll("[data-available-account-modal-close]");

    if (!modal || openBtns.length === 0) return;

    const open = () => {
        modal.classList.add("is-open");
        document.body.style.overflow = "hidden";
    };

    const close = () => {
        modal.classList.remove("is-open");
        document.body.style.overflow = "";
    };

    openBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            open();
        });
    });

    closeEls.forEach((el) => {
        el.addEventListener("click", (e) => {
            e.preventDefault();
            close();
        });
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && modal.classList.contains("is-open")) {
            close();
        }
    });
}

// ========================================
// SALON - VIEW ALL FUNCTIONALITY
// ========================================
function initSalonViewAll() {
    const viewAllBtn = document.getElementById("viewAllBtn");
    const hiddenCard = document.getElementById("hiddenCard");

    if (!viewAllBtn || !hiddenCard) return;

    viewAllBtn.addEventListener("click", function () {
        const isHidden = hiddenCard.style.display === "none";

        if (isHidden) {
            hiddenCard.style.display = "block";
            viewAllBtn.innerHTML = `
              <svg class="fill-current" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.5 0.266602V3.2666H0.5V0.266602H3.5Z" fill="#000"></path>
                <path d="M8 0.266602V3.24968H5V0.266602H8Z" fill="#000"></path>
                <path d="M12.5 0.266602V3.24968H9.5V0.266602H12.5Z" fill="#000"></path>
                <path d="M0.5 4.7666H3.48308V7.7666H0.5V4.7666Z" fill="#000"></path>
                <path d="M0.5 9.2666H3.5V12.2666H0.5V9.2666Z" fill="#000"></path>
                <path d="M5 12.2663V9.2832H8V12.2663H5Z" fill="#000"></path>
                <path d="M9.5 12.2663V9.2832H12.5V12.2663H9.5Z" fill="#000"></path>
                <path d="M5.01562 4.7793H7.98563V7.74786H5.01562V4.7793Z" fill="#000"></path>
                <path d="M12.492 4.78418V7.75322H9.52344V4.78418H12.492Z" fill="#000"></path>
              </svg>
              Show less`;
            viewAllBtn.setAttribute("aria-expanded", "true");
        } else {
            hiddenCard.style.display = "none";
            viewAllBtn.innerHTML = `
              <svg class="fill-current" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.5 0.266602V3.2666H0.5V0.266602H3.5Z" fill="#000"></path>
                <path d="M8 0.266602V3.24968H5V0.266602H8Z" fill="#000"></path>
                <path d="M12.5 0.266602V3.24968H9.5V0.266602H12.5Z" fill="#000"></path>
                <path d="M0.5 4.7666H3.48308V7.7666H0.5V4.7666Z" fill="#000"></path>
                <path d="M0.5 9.2666H3.5V12.2666H0.5V9.2666Z" fill="#000"></path>
                <path d="M5 12.2663V9.2832H8V12.2663H5Z" fill="#000"></path>
                <path d="M9.5 12.2663V9.2832H12.5V12.2663H9.5Z" fill="#000"></path>
                <path d="M5.01562 4.7793H7.98563V7.74786H5.01562V4.7793Z" fill="#000"></path>
                <path d="M12.492 4.78418V7.75322H9.52344V4.78418H12.492Z" fill="#000"></path>
              </svg>
              View all`;
            viewAllBtn.setAttribute("aria-expanded", "false");
        }
    });
}

// ========================================
// VIDEO PLAYER FUNCTIONALITY
// ========================================
function initVideoPlayer() {
    const videoContainer = document.getElementById("videoContainer");
    const videoPlayButton = document.getElementById("videoPlayButton");
    const videoIframe = document.getElementById("videoIframe");

    if (!videoContainer || !videoPlayButton || !videoIframe) return;

    let isPlaying = false;

    videoPlayButton.addEventListener("click", function () {
        if (!isPlaying) {
            // Show video and hide play button
            videoIframe.src =
                "https://player.vimeo.com/video/1120787520?h=3ee33a6df5&app_id=122963&playsinline=1&autoplay=1&texttrack=en-x-autogen";
            videoIframe.style.display = "block";
            videoPlayButton.style.display = "none";
            isPlaying = true;
        } else {
            // Hide video and show play button
            videoIframe.src = "";
            videoIframe.style.display = "none";
            videoPlayButton.style.display = "flex";
            isPlaying = false;
        }
    });
}
