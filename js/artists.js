// Artists page interactions
// Provides initArtistSearch used by main.js on DOMContentLoaded

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
