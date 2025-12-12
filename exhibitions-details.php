<?php include 'components/Links.php'; ?>

<link rel="stylesheet" href="css/pages/artists.css" />
<?php include 'components/Header.php'; ?>
<section class="hero hero-detail">
  <img
    src="<?php echo $PAINTINGS[0]['image'] ?>"
    alt="Contemporary Art Exhibition"
    class="hero-image" />
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1 class="hero-title">Beatriz Milhazes</h1>
    <p class="hero-subtitle">Além do Horizonte</p>
    <p class="hero-meta">19 November 2025 – 17 January 2026</p>
  </div>
</section>
<section class="exhibition-info-section">
  <div class="container p-0">
    <div class="exhibition-info-layout">
      <div class="exhibition-info-side">
        <div class="exhibition-info-block">
          <div class="exhibition-info-label">Dates</div>
          <div class="exhibition-info-value">19 November 2025 – 17 January 2026</div>
        </div>
        <div class="exhibition-info-block">
          <div class="exhibition-info-label">Location</div>
          <div class="exhibition-info-value">
            White Cube Mason's Yard<br />
            25–26 Mason's Yard<br />
            London SW1Y 6BU
          </div>
        </div>
        <button type="button" class="exhibition-share" aria-label="Share exhibition">
          <span class="exhibition-share-icon" aria-hidden="true">
            <svg class="fill-current" width="17" height="17" viewBox="0 0 16.73 15.38" fill="#000" xmlns="http://www.w3.org/2000/svg">
              <path d="m14.06,10.03c-.92,0-1.78.48-2.27,1.27l-5.92-2.67c.21-.6.21-1.25,0-1.85l5.92-2.67c.78,1.25,2.43,1.63,3.69.85,1.25-.78,1.63-2.43.85-3.69C15.54,0,13.89-.38,12.64.41c-.78.49-1.25,1.34-1.25,2.26,0,.27.05.53.13.79l-5.92,2.67c-.85-1.43-2.7-1.9-4.12-1.05C.04,5.94-.43,7.78.42,9.21c.85,1.43,2.7,1.9,4.12,1.05.43-.26.79-.62,1.05-1.05l5.92,2.67c-.09.26-.13.54-.13.82,0,1.48,1.2,2.67,2.67,2.67s2.67-1.2,2.67-2.67-1.2-2.67-2.67-2.67h0Z"></path>
            </svg>
          </span>
          <span>Share</span>
        </button>
      </div>
      <div class="exhibition-info-main">
        <p>In 'Além do Horizonte' (Beyond the Horizon), Beatriz Milhazes deepens her evolving enquiry into the aesthetic and affective potential of colour, pattern and ornament. Building on investigations first pursued in her presentation for the 2024 Venice Biennale, the exhibition at Mason’s Yard brings together new paintings, collages and a site-specific installation, drawing upon an expanded archive of textile and decorative sources that trace the psychedelia of mid-20th-century print culture, indigenous Brazilian and European design, ornamental craft traditions, and the accumulated materials of her own studio practice.</p>
        <p>Throughout, Milhazes orchestrates these syncretic idioms into chromatic architectures in which order and exuberance ignite a productive tension, sustaining a sense of simultaneity and interconnectedness.</p>
        <a href="#" class="exhibition-readmore link-underline"><span class="exhibition-readmore-arrow">→</span><span>Read more</span></a>
      </div>
    </div>
  </div>
</section>
<div class="artists-divider"></div>

<section class="container p-0 exhibition_detail_second_section">
  <h1>Featured Works</h1>
  <div class="artwork-image-container">
    <img
      src="<?php echo $PAINTINGS[0]['image'] ?>"
      alt="Atrabiliarios"
      class="artwork-image" />
  </div>
  <div class="artwork-card-details">
    <div class="artwork-card-text">
      <p class="artwork-card-artist">Doris Salcedo</p>
      <p class="artwork-card-title">Atrabiliarios, 1993</p>
    </div>
    <div class="artwork-card-actions">
      <button class="artwork-card-button">+</button>
      <button class="artwork-card-button">Enquire</button>
    </div>
  </div>
</section>

<?php include 'components/Footer.php'; ?>