
<head>
  <?= view('layouts/header') ?>
  <?= view('layouts/header-link') ?>
  <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .header-container {
            background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            border: 1px solid #ffcc80;
            margin-bottom: 30px;
            text-align: center;
        }
        .page-title {
            color: #e65100;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .page-subtitle {
            color: #fd7e14;
            font-weight: 500;
        }
        .communities-table {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .communities-table thead th {
            background-color: #fd7e14;
            color: white;
            font-weight: 600;
            text-align: center;
            padding: 1.2rem;
            font-size: 1.1rem;
            border: none;
        }
        .communities-table tbody tr {
            transition: all 0.3s ease;
        }
        .communities-table tbody tr:hover {
            background-color: #fff3e0;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(253, 126, 20, 0.2);
        }
        .communities-table tbody td {
            padding: 1.2rem;
            font-size: 1.05rem;
            border-color: #ffcc80;
            vertical-align: middle;
        }
        .community-name {
            font-weight: 600;
            color: #e65100;
        }
        .abbreviation {
            background-color: #fd7e14;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        .footer-note {
            text-align: center;
            color: #6c757d;
            margin-top: 30px;
            font-style: italic;
        }
        @media (max-width: 768px) {
            .communities-table thead th,
            .communities-table tbody td {
                padding: 0.8rem;
                font-size: 0.95rem;
            }
            .abbreviation {
                font-size: 0.8rem;
                padding: 0.2rem 0.6rem;
            }
        }
    </style>
</head>
<body>

<section class="sec-pd">
    <div class="container">
        <div class="heading">
            <h4> Religious Priests Communities</h4>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="communities-table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 10%;">S.No</th>
                                <th style="width: 70%;">Religious Community</th>
                                <th style="width: 20%;">Abbreviation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="community-name">Capuchins</td>
                                <td class="text-center"><span class="abbreviation">OFM Cap</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="community-name">Carmelites (Carmelites First Order)</td>
                                <td class="text-center"><span class="abbreviation">O.C.D</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="community-name">Holy Cross Fathers</td>
                                <td class="text-center"><span class="abbreviation">C.S.C</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="community-name">Indian Missionary Society</td>
                                <td class="text-center"><span class="abbreviation">-</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="community-name">Mill Hill Missionaries</td>
                                <td class="text-center"><span class="abbreviation">-</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td class="community-name">Missionaries of St. Francis De Sales</td>
                                <td class="text-center"><span class="abbreviation">MSFS</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td class="community-name">Missionaries of the Poor</td>
                                <td class="text-center"><span class="abbreviation">-</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td class="community-name">Pontificio Instituto Missioni Estere</td>
                                <td class="text-center"><span class="abbreviation">P.I.M.E</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">9</td>
                                <td class="community-name">Salesians of Don Bosco</td>
                                <td class="text-center"><span class="abbreviation">-</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">10</td>
                                <td class="community-name">Society of the Divine Word</td>
                                <td class="text-center"><span class="abbreviation">S.V.D</span></td>
                            </tr>
                            <tr>
                                <td class="text-center">11</td>
                                <td class="community-name">The Society of Jesus</td>
                                <td class="text-center"><span class="abbreviation">S.J</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   </section>
        <!-- <p class="footer-note">
            "Each religious community brings unique charisms and traditions to serve the Church and the world."
        </p> -->
    </div>

  <?= view('layouts/footer') ?>
</body>
</html>