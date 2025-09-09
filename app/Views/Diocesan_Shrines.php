<head>

  <?= view('layouts/header') ?>
  <?= view('layouts/header-link') ?>
  
  <style>
    .shrine-card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 500px;
      width: 500px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 10px;
      text-align: center;
      margin: auto;
    }

    .shrine-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18);
    }

    .shrinesimg {
      width: 200px;
      height: 200px;
      margin-bottom: 20px;
    }

    .shrinesimg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%; /* circle look */
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .content h5 {
      font-size: 1.1rem;
      margin-bottom: 10px;
      color: #444;
    }

    .content h5 strong {
      color: #2c3e50;
    }

    .content p {
      text-align: justify;
      font-size: 0.95rem;
      line-height: 1.7;
      color: #555;
    }

    .heading h4 {
      font-weight: 700;
      margin-bottom: 25px;
      text-align: center;
      color: #2c3e50;
    }
  
  </style>
</head>

<body>
  <section class="sec-pd">
    <div class="container">
      <div class="heading">
        <h4>Diocesan Shrines</h4>
      </div>

      <div class="card shrine-card">
        <!-- Image Top -->
        <div class="shrinesimg">
          <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png" alt="Shrine Image">
        </div>

        <!-- Text Content -->
        <div class="card-body content">
          <h5><strong>Address :</strong> Velankanni Nagar (Diesel Colony)</h5>
          <h5><strong>Patron :</strong> Our Lady of Velankanni</h5>
          <p>
            Velankanni Nagar is 1km from the Kazipet parish church. One acre of land was bought
            by Fr. Lino Dal Balcon. His successor, Fr. Antonello, built a small chapel, which was
            dedicated to Our Lady of Velankanni. It was blessed by Most Rev. Thumma Bala on 5th
            September, 1987. Every first Saturday of the month, and especially on 8th September,
            many devotees gather to honour Our Lady. Thus, the locality is called Velankanni Nagar also.
          </p>
        </div>
      </div>
    </div>
  </section>
  <?= view('layouts/footer') ?>
</body>
</html>



