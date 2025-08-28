
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
 <link rel="stylesheet" href="<?= base_url('public/assets/css/gallery_model.css') ?>">
 <?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>

</head>
<body>

<div class="container">
  <div class="heading">
    <h2>Photo Gallery</h2>

  <h4>Inauguration of Jubilee 2025 in Diocese of Warangal</h4>
  </div>


  <div class="row g-3 justify-content-start">
    <!-- 10 images -->
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 custom-col" data-index="0">
      <figure class="gallery-figure" data-bs-toggle="modal" data-bs-target="#imageModal" data-index="0">
        <img src="https://i.postimg.cc/0QtNHrtR/Jubilee-1.webp" alt="Mountain Vista" class="gallery-img" loading="lazy"
             data-bs-img="https://i.postimg.cc/0QtNHrtR/Jubilee-1.webp" />
        <figcaption class="gallery-title">Mountain Vista</figcaption>
      </figure>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 custom-col" data-index="1">
      <figure class="gallery-figure" data-bs-toggle="modal" data-bs-target="#imageModal" data-index="1">
        <img src="https://i.postimg.cc/0ymb2kND/Jubilee-12.webp" alt="Sunset Beach" class="gallery-img" loading="lazy"
             data-bs-img="https://i.postimg.cc/0ymb2kND/Jubilee-12.webp" />
        <figcaption class="gallery-title">Sunset Beach</figcaption>
      </figure>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 custom-col" data-index="2">
      <figure class="gallery-figure" data-bs-toggle="modal" data-bs-target="#imageModal" data-index="2">
        <img src="https://i.postimg.cc/R0LhKgK0/Jubilee-4.webp" alt="Forest Path" class="gallery-img" loading="lazy"
             data-bs-img="https://i.postimg.cc/R0LhKgK0/Jubilee-4.webp" />
        <figcaption class="gallery-title">Forest Path</figcaption>
      </figure>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 custom-col" data-index="3">
      <figure class="gallery-figure" data-bs-toggle="modal" data-bs-target="#imageModal" data-index="3">
        <img src="https://i.postimg.cc/0ymb2kND/Jubilee-12.webp" alt="Calm Lake" class="gallery-img" loading="lazy"
             data-bs-img="https://i.postimg.cc/0ymb2kND/Jubilee-12.webp" />
        <figcaption class="gallery-title">Calm Lake</figcaption>
      </figure>
    </div>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 custom-col" data-index="4">
      <figure class="gallery-figure" data-bs-toggle="modal" data-bs-target="#imageModal" data-index="4">
        <img src="https://i.postimg.cc/0QtNHrtR/Jubilee-1.webp" alt="Desert Dunes" class="gallery-img" loading="lazy"
             data-bs-img="https://i.postimg.cc/0QtNHrtR/Jubilee-1.webp" />
        <figcaption class="gallery-title">Desert Dunes</figcaption>
      </figure>
    </div>

   

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">

      <button id="autoPlayToggle" type="button" aria-pressed="false" aria-label="Toggle auto play">
        <span> <i class="bi bi-play-fill" id="autoPlayIcon"></i></span>
       
        <span id="autoPlayText">OFF</span>
      </button>

      <div class="modal-header border-0 position-relative">
        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
        <a href="#" target="_blank" class="modal-fullscreen" id="fullscreenLink" title="Open image in new tab" aria-label="Open image in new tab">&#x26F6;</a>
      </div>
      <div class="modal-body p-0 position-relative">
        <span class="modal-nav-arrow modal-nav-prev" role="button" aria-label="Previous Image" tabindex="0">&#10094;</span>
        <span class="modal-nav-arrow modal-nav-next" role="button" aria-label="Next Image" tabindex="0">&#10095;</span>
        <img src="" id="modalImage" class="img-fluid rounded" alt="" />
        <div class="text-white p-3 bg-dark bg-opacity-75 text-center" id="modalTitle" style="font-size:1.2rem;"></div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const galleryFigures = document.querySelectorAll('.gallery-figure');
  const modal = document.getElementById('imageModal');
  const modalImage = document.getElementById('modalImage');
  const modalTitle = document.getElementById('modalTitle');
  const fullscreenLink = document.getElementById('fullscreenLink');
  const prevArrow = document.querySelector('.modal-nav-prev');
  const nextArrow = document.querySelector('.modal-nav-next');
  const autoPlayToggle = document.getElementById('autoPlayToggle');
  const autoPlayIcon = document.getElementById('autoPlayIcon');
  const autoPlayText = document.getElementById('autoPlayText');

  const images = Array.from(galleryFigures).map(fig => {
    const imgEl = fig.querySelector('img');
    return {
      thumbSrc: imgEl.src,
      fullSrc: imgEl.getAttribute('data-bs-img') || imgEl.src,
      alt: imgEl.alt || '',
      title: fig.querySelector('figcaption')?.textContent || '',
    };
  });

  let currentIndex = 0;
  let autoplayInterval = null;
  const autoplayDelay = 4000; // 4 seconds
  let isAutoPlaying = false;

  function preloadImage(src) {
    const img = new Image();
    img.src = src;
  }

  function updateModal(index) {
    if(index < 0) index = images.length -1;
    else if(index >= images.length) index = 0;

    currentIndex = index;
    modalImage.src = images[index].fullSrc;
    modalImage.alt = images[index].alt;
    modalTitle.textContent = images[index].title;
    fullscreenLink.href = images[index].fullSrc;

    // Preload prev/next
    let prevIndex = (index - 1 + images.length) % images.length;
    let nextIndex = (index + 1) % images.length;
    preloadImage(images[prevIndex].fullSrc);
    preloadImage(images[nextIndex].fullSrc);
  }

  function startAutoplay() {
    if (autoplayInterval) clearInterval(autoplayInterval);
    autoplayInterval = setInterval(() => {
      updateModal(currentIndex + 1);
    }, autoplayDelay);
    isAutoPlaying = true;
    updateAutoPlayButton();
  }

  function stopAutoplay() {
    if (autoplayInterval) {
      clearInterval(autoplayInterval);
      autoplayInterval = null;
    }
    isAutoPlaying = false;
    updateAutoPlayButton();
  }

  function updateAutoPlayButton() {
    if(isAutoPlaying) {
      autoPlayIcon.classList.remove('bi-play-fill');
      autoPlayIcon.classList.add('bi-stop-fill');
      autoPlayText.textContent = "Auto Play ON";
      autoPlayToggle.setAttribute('aria-pressed', 'true');
    } else {
      autoPlayIcon.classList.remove('bi-stop-fill');
      autoPlayIcon.classList.add('bi-play-fill');
      autoPlayText.textContent = "Auto Play OFF";
      autoPlayToggle.setAttribute('aria-pressed', 'false');
    }
  }

  autoPlayToggle.addEventListener('click', () => {
    if (isAutoPlaying) {
      stopAutoplay();
    } else {
      startAutoplay();
    }
  });

  galleryFigures.forEach((fig, index) => {
    fig.addEventListener('click', () => {
      updateModal(index);
      stopAutoplay(); // start modal with autoplay off
    });
  });

  prevArrow.addEventListener('click', () => {
    updateModal(currentIndex - 1);
    if(isAutoPlaying) startAutoplay(); // reset interval
  });
  nextArrow.addEventListener('click', () => {
    updateModal(currentIndex + 1);
    if(isAutoPlaying) startAutoplay(); // reset interval
  });

  prevArrow.addEventListener('keydown', e =>{
    if(e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      updateModal(currentIndex - 1);
      if(isAutoPlaying) startAutoplay();
    }
  });
  nextArrow.addEventListener('keydown', e =>{
    if(e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      updateModal(currentIndex + 1);
      if(isAutoPlaying) startAutoplay();
    }
  });

  modal.addEventListener('hidden.bs.modal', () => {
    stopAutoplay();
  });

  updateAutoPlayButton();
</script>

<?= view('layouts/footer') ?>
</body>
