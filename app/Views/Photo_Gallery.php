<head>
<link rel="stylesheet" href="http://localhost/diocese/public/assets/css/gallery_main.css">

<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
</head>
<body>
  <div class="container py-5 ">
    <div class="photogallery">
    <h2 class="text_center title">Photo Galaxy</title>
    </div>
          <div class="row g-3 justify-content-start">
            <div class="col-12 col-md-6 col-lg-4">
              <figure>
             <a href="<?= base_url('gallery/gallery_1') ?>" target="_blank" rel="noopener noreferrer">
          <img src="https://i.postimg.cc/0QtNHrtR/Jubilee-1.webp" alt="Image 1">
          </a>
          <figcaption>Inauguration of Jubilee 2025 in Diocese of Warangal</figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <figure>
          <a href="https://picsum.photos/800/600?random=2" target="_blank" rel="noopener noreferrer" tabindex="-1">
            <img src="https://i.postimg.cc/0ymb2kND/Jubilee-12.webp" alt="Image 2" />
          </a>
          <figcaption>BFCT Children and College Students Seminar</figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <figure>
          <a href="https://picsum.photos/800/600?random=3" target="_blank" rel="noopener noreferrer" tabindex="-1">
            <img src="https://i.postimg.cc/QxvF39jj/Jubilee-3.webp" alt="Image 3" />
          </a>
          <figcaption>Blessing of Father Colombo Institute of Medical Sciences</figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <figure>
          <a href="https://picsum.photos/800/600?random=4" target="_blank" rel="noopener noreferrer" tabindex="-1">
            <img src="https://i.postimg.cc/hj4jrV11/Jubilee-2.webp" alt="Image 4" />
          </a>
          <figcaption>Decennial Celebrations</figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <figure>
          <a href="https://picsum.photos/800/600?random=5" target="_blank" rel="noopener noreferrer" tabindex="-1">
            <img src="https://i.postimg.cc/R0LhKgK0/Jubilee-4.webp" alt="Image 5" />
          </a>
          <figcaption>Fatima Feast-2024</figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <figure>
          <a href="https://picsum.photos/800/600?random=6" target="_blank" rel="noopener noreferrer" tabindex="-1">
            <img src="https://i.postimg.cc/1zQ48kgT/Jubilee-5.webp" alt="Image 6" />
          </a>
          <figcaption>Christmas 2020</figcaption>
        </figure>
      </div>
     
      <div class="col-12 col-md-6 col-lg-4">
        <figure>
          <a href="https://picsum.photos/800/600?random=20" target="_blank" rel="noopener noreferrer" tabindex="-1">
            <img src="https://i.postimg.cc/1zQ48kgT/Jubilee-5.webp" alt="Image 20" />
          </a>
          <figcaption>Banjara Mission</figcaption>
        </figure>
      </div>
    </div>
  </div>
  
<?= view('layouts/footer') ?>
</body>
</html>
