<?php include 'components/Links.php'; ?>

<link rel="stylesheet" href="css/pages/artists.css" />
<?php include 'components/Header.php'; ?>

<!-- PAGE HEADER -->
<section
  class="section"
  style="margin-top: var(--header-height); padding-top: var(--spacing-3xl)">
  <div class="container">
    <h1 class="text-center mb-md">Exhibitions</h1>
    <p
      class="text-center text-large"
      style="max-width: 800px; margin: 0 auto">
      Discover our current and upcoming exhibitions across our global
      galleries
    </p>
  </div>
</section>

<!-- CURRENT EXHIBITIONS -->
<section class="section">
  <div class="container">
    <h2 class="mb-xl">Current Exhibitions</h2>

    <div class="exhibitions-grid">
      <!-- Exhibition 1 -->
      <?php
      for ($i = 0; $i < count($EXHIBITIONS); $i++) { ?>
        <article class="exhibition-card">
          <div class="exhibition-image-wrapper">
            <img
              src="<?= $EXHIBITIONS[$i]['image'] ?>" alt="<?= $EXHIBITIONS[$i]['artist'] ?>" class="exhibition-image" />
          </div>
          <div class="exhibition-info">
            <h3 class="exhibition-artist"><?= $EXHIBITIONS[$i]['artist'] ?></h3>
            <p class="exhibition-title"><?= $EXHIBITIONS[$i]['title'] ?></p>
            <div class="exhibition-meta">
              <p><?= $EXHIBITIONS[$i]['date'] ?></p>
              <p class="exhibition-location"><?= $EXHIBITIONS[$i]['location'] ?></p>
              <p
                style="
                        margin-top: var(--spacing-sm);
                        color: var(--color-text-secondary);
                      ">
                <?= $EXHIBITIONS[$i]['description'] ?>
              </p>
            </div>
          </div>
        </article>
      <?php
      }
      ?>

    </div>
  </div>
</section>


<?php include 'components/navigation.php'; ?>
<?php include 'components/Footer.php'; ?>