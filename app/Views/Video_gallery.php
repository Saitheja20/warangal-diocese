
<head>
<link rel="stylesheet" href="http://localhost/diocese/public/assets/css/video.css">

<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>


</head>
<body class="bg-light">

<div class="container py-5">
    <div class="videogallery">
    <h2 class="text_center title">Video Galaxy</title>
    </div>
  <div class="row g-4">

    <!-- Card 1 with Thumbnail -->
    <div class="col-md-4 col-sm-6">
      <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1">
        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg" alt="Video Thumbnail">
        <div class="p-3">
          <h6 class="fw-bold mb-1">Big Buck Bunny</h6>
          <p class="text-muted mb-0">AI-enhanced animation clip</p>
        </div>
      </div>
    </div>

        <!-- Card 1 with Thumbnail -->
    <div class="col-md-4 col-sm-6">
      <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1">
        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg" alt="Video Thumbnail">
        <div class="p-3">
          <h6 class="fw-bold mb-1">Big Buck Bunny</h6>
          <p class="text-muted mb-0">AI-enhanced animation clip</p>
        </div>
      </div>
    </div>

        <!-- Card 1 with Thumbnail -->
    <div class="col-md-4 col-sm-6">
      <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1">
        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg" alt="Video Thumbnail">
        <div class="p-3">
          <h6 class="fw-bold mb-1">Big Buck Bunny</h6>
          <p class="text-muted mb-0">AI-enhanced animation clip</p>
        </div>
      </div>
    </div>
        <!-- Card 1 with Thumbnail -->
    <div class="col-md-4 col-sm-6">
      <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1">
        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg" alt="Video Thumbnail">
        <div class="p-3">
          <h6 class="fw-bold mb-1">Big Buck Bunny</h6>
          <p class="text-muted mb-0">AI-enhanced animation clip</p>
        </div>
      </div>
    </div>
        <!-- Card 1 with Thumbnail -->
    <div class="col-md-4 col-sm-6">
      <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1">
        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg" alt="Video Thumbnail">
        <div class="p-3">
          <h6 class="fw-bold mb-1">Big Buck Bunny</h6>
          <p class="text-muted mb-0">AI-enhanced animation clip</p>
        </div>
      </div>
    </div>


    <!-- Card 2 Without Thumbnail (Video Directly in Card) -->
    <div class="col-md-4 col-sm-6">
      <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-yt="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
        <video muted autoplay loop playsinline>
          <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        </video>
        <div class="p-3">
          <h6 class="fw-bold mb-1">Nature Scene</h6>
          <p class="text-muted mb-0">AI upscaled HD forest video</p>
        </div>
      </div>
    </div>

   
    <!-- Card 3 With Thumbnail -->
    <div class="col-md-4 col-sm-6">
      <div class="video-card" data-bs-toggle="modal" data-bs-target="#videoModal" data-yt="https://www.youtube.com/embed/a3ICNMQW7Ok?autoplay=1">
        <img src="https://i.postimg.cc/Pr0jwT8K/ai-video-thumb.jpg" alt="Video Thumbnail">
        <div class="p-3">
          <h6 class="fw-bold mb-1">AI Future</h6>
          <p class="text-muted mb-0">Artificial Intelligence vision video</p>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-header border-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="ratio ratio-16x9">
        <iframe id="videoFrame" src="" title="AI Video Player" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const videoModal = document.getElementById('videoModal');
  const videoFrame = document.getElementById('videoFrame');

  videoModal.addEventListener('show.bs.modal', e => {
    const trigger = e.relatedTarget;
    videoFrame.src = trigger.getAttribute('data-yt');
  });

  videoModal.addEventListener('hidden.bs.modal', () => {
    videoFrame.src = '';
  });
</script>



<?= view('layouts/footer') ?>
</body>
</html>
