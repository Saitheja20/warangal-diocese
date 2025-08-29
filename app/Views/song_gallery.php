<head>
<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/song_gallery.css">

<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

</head>
<body>

<section class="song_gallery">
<div class="container">
    <div class="heading">
  <h2 class="mb-4 text-center">Songs Gallery</h2>
    </div>
  <div class="row g-4">

    <!-- AI Song 1 -->
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="audio-thumbnail" data-bs-toggle="modal" data-bs-target="#audioModal">
        <img src="https://i.postimg.cc/d3mzxD2m/23d2d76f20d0e665e08d7077a1f30c0c.jpg" alt="AI Song 1" />
        <div class="play-overlay"><i class="bi bi-music-note-beamed"></i></div>
        <audio class="song-audio" preload="none">
          <source src="<?= base_url() ?>public/assets/Songs/vlog-beat-background-349853.mp3" type="audio/mpeg" />
        </audio>
        <div class="d-none song-title">AI Song 1 - Neural Beats</div>
      </div>
    </div>

    <!-- AI Song 2 -->
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="audio-thumbnail" data-bs-toggle="modal" data-bs-target="#audioModal">
        <img src="https://i.postimg.cc/FshtJgvP/cross-1448946-640.jpg" alt="AI Song 2" />
        <div class="play-overlay"><i class="bi bi-music-note-beamed"></i></div>
        <audio class="song-audio" preload="none">
          <source src="<?= base_url() ?>public/assets/Songs/emotional.mp3" type="audio/mpeg" />
        </audio>
        <div class="d-none song-title">AI Song 2 - Deep Melody</div>
      </div>
    </div>

    <!-- AI Song 3 -->
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="audio-thumbnail" data-bs-toggle="modal" data-bs-target="#audioModal">
        <img src="https://i.postimg.cc/G3Fw2gW8/360-F-337388655-XX9-BKW77-OEi92-NIft-LUx4-Aczcxu-Yx-LXK.jpg" alt="AI Song 3" />
        <div class="play-overlay"><i class="bi bi-music-note-beamed"></i></div>
        <audio class="song-audio" preload="none">
          <source src="DIOCESE DESIGNS/vlog-beat-background-349853.mp3" type="audio/mpeg" />
        </audio>
        <div class="d-none song-title">AI Song 3 - Future Symphony</div>
      </div>
    </div>


        <!-- AI Song 4 -->
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="audio-thumbnail" data-bs-toggle="modal" data-bs-target="#audioModal">
        <img src="https://i.postimg.cc/XYST0RND/download-4.jpg" alt="AI Song 1" />
        <div class="play-overlay"><i class="bi bi-music-note-beamed"></i></div>
        <audio class="song-audio" preload="none">
          <source src="<?= base_url() ?>public/assets/Songs/vlog-beat-background-349853.mp3" type="audio/mpeg" />
        </audio>
        <div class="d-none song-title">AI Song 1 - Neural Beats</div>
      </div>
    </div>

    <!-- AI Song 5 -->
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="audio-thumbnail" data-bs-toggle="modal" data-bs-target="#audioModal">
        <img src="https://i.postimg.cc/8Prq9pG6/images-6.jpg" alt="AI Song 2" />
        <div class="play-overlay"><i class="bi bi-music-note-beamed"></i></div>
        <audio class="song-audio" preload="none">
          <source src="<?= base_url() ?>public/assets/Songs/emotional.mp3" type="audio/mpeg" />
        </audio>
        <div class="d-none song-title">AI Song 2 - Deep Melody</div>
      </div>
    </div>

    <!-- AI Song 6 -->
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="audio-thumbnail" data-bs-toggle="modal" data-bs-target="#audioModal">
        <img src="https://i.postimg.cc/h4Yk2Jkn/images-7.jpg" alt="AI Song 3" />
        <div class="play-overlay"><i class="bi bi-music-note-beamed"></i></div>
        <audio class="song-audio" preload="none">
          <source src="DIOCESE DESIGNS/vlog-beat-background-349853.mp3" type="audio/mpeg" />
        </audio>
        <div class="d-none song-title">AI Song 3 - Future Symphony</div>
      </div>
    </div>


  </div>
</div>
</section>


<!-- Modal -->
<div class="modal fade" id="audioModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center">
        <img id="modalImg" src="" class="img-fluid rounded mb-3" alt="Thumbnail" />
        <audio id="audioPlayer" controls></audio>
      </div>

      <div class="song-footer text-center" id="modalTitle">AI Song Title</div>
    </div>
  </div>
</div>

<script>
  const audio = document.getElementById("audioPlayer");
  const modalTitle = document.getElementById("modalTitle");
  const modalImg = document.getElementById("modalImg");
  const audioModal = document.getElementById("audioModal");

  document.querySelectorAll(".audio-thumbnail").forEach(thumbnail => {
    thumbnail.addEventListener("click", function () {
      const songAudio = this.querySelector("audio");
      const songTitle = this.querySelector(".song-title").textContent;
      const imgSrc = this.querySelector("img").src;

      modalImg.src = imgSrc;
      modalTitle.textContent = songTitle;
      audio.src = songAudio.querySelector("source").src;
      audio.currentTime = 0;
    });
  });

  audioModal.addEventListener("shown.bs.modal", () => {
    audio.play().catch(err => console.log("Playback error:", err));
  });

  audioModal.addEventListener("hidden.bs.modal", () => {
    audio.pause();
    audio.currentTime = 0;
  });
</script>
<?= view('layouts/footer') ?>
</body>
</html>
