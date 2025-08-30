<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>

<style>
  /* 🎨 Root Holy Colors */


  #diocese_curia .card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    height: 100%;
    /* allow full height card */
    display: flex;
    flex-direction: column;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  #diocese_curia .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
  }

  #diocese_curia .card-img-container {
    flex: 7;
    /* 70% of the height */
    overflow: hidden;
  }

  #diocese_curia .card-img-top {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  #diocese_curia .card-body {
    flex: 3;
    /* 30% of the height */
    padding: 1rem;
    background-color: #ffffff;
  }

  #diocese_curia .card-text span {
    display: block;
    font-weight: 600;
    margin-bottom: 0.3rem;
    color: #333;
  }

  #diocese_curia .card-text {
    text-align: left;
    font-size: 1rem;
    color: #555;
  }

  .card {
    transition: 0.3s ease-in-out;
  }

  .card:hover {
    box-shadow: rgba(99, 99, 99, 0.35) 0px 5px 15px;
    transform: translateY(-4px);
  }
</style>
<!-- </head> -->

<!-- <body>
  <div class="container my-4">
    <div class="card p-4">
      <h2 class="heading">DIOCESAN CURIA</h2>
      <p class="sub-text">
        The church’s very own “Mission Control.” 🚀 <br>
        (Except instead of astronauts, we have bishops, chancellors, and secretaries plotting holiness.)
      </p>
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead>
            <tr>
              <th>Sl. No.</th>
              <th>Names</th>
              <th>Designation</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Most Rev. Dr. Udumala Bala</td>
              <td>Bishop</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Fr. Kommareddy Joseph Reddy</td>
              <td>Chancellor cum Procurator</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Fr. Anukiran Gangarapu</td>
              <td>Secretary</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body> -->

<!-- </html> -->



<!-- <section id="diocese_curia">
  <div class="container">
    <div class="row mb-2">
      <div class="col-lg-3 text-center" style="width: 18rem;">
        <div class="card">
          <img class="card-img-top" src="<?= base_url('public/assets/images/bishops/b1.jpg') ?>" alt="Card image cap" height="200px">
          <div class="card-body">
            <p class="card-text"><span class="fw-bold">Name: </span> Most Rev. Dr. Udumala Bala
              <span class="fw-bold">Designation: </span> Bishop
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 text-center" style="width: 18rem;">
        <div class="card">
          <img class="card-img-top" src="<?= base_url('public/assets/images/bishops/b2.jpg') ?>" alt="Card image cap" height="200px">
          <div class="card-body">
            <p class="card-text"><span class="fw-bold">Name: </span> Fr. Kommareddy Joseph Reddy
              <span class="fw-bold">Designation: </span> Chancellor cum Procurator
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 text-center" style="width: 18rem;">
        <div class="card">
          <img class="card-img-top" src="<?= base_url('public/assets/images/bishops/udumula-bala.jpg') ?>" alt="Card image cap" height="200px">
          <div class="card-body">
            <p class="card-text"><span class="fw-bold">Name: </span> Fr. Anukiran Gangarapu
              <span class="fw-bold">Designation: </span> Secretary
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section> -->

<section id="diocese_curia mb-2 mt-2 ">
  <div class="container">
    <h2 class="section-title text-center my-4 fw-bold">Warangal Diocese Curia</h2>
    <div class="row justify-content-center g-4 my-4">

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center">
          <img class="card-img-top" src="<?= base_url('public/assets/images/bishops/udumula-bala.jpg') ?>" alt="Bishop Image">
          <div class="card-body">
            <p class="card-text">
              <span class="fw-bold">Name: </span> Most Rev. Dr. Udumala Bala<br>
              <span class="fw-bold">Designation: </span> Bishop
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center">
          <img class="card-img-top" src="<?= base_url('public/assets/images/bishops/b1.jpg') ?>" alt="Chancellor Image">
          <div class="card-body">
            <p class="card-text">
              <span class="fw-bold">Name: </span> Fr. Kommareddy Joseph Reddy<br>
              <span class="fw-bold">Designation: </span> Chancellor cum Procurator
            </p>

          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center">
          <img class="card-img-top" src="<?= base_url('public/assets/images/bishops/b2.jpg') ?>" alt="Secretary Image">
          <div class="card-body">
            <p class="card-text">
              <span class="fw-bold">Name:</span> Fr. Anukiran Gangarapu
              <span class="fw-bold">Designation:</span> Secretary
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<?= view('layouts/footer') ?>