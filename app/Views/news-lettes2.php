<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>

<section id="news-letters">
    <div class="container">

        <!-- search box -->

        <div class="col-lg-12 mb-5 mt-5">
            <h5 class="font-weight-bold mb-4">Find News-Letters</h5>

            <!-- <div class="row">
                <div class="col-sm-10  position-relative p-1 pl-3 pr-3 mb-2">
                    <span class="position-absolute bg-white pl-2 pr-2" style="left:20px; top:-8px"><small>Search news letters</small></span>
                    <input type="text" id="search_forane" name="search_forane" class="form-control" style="height:48px;" placeholder="Search by name or month or Volume Number or Event Name">
                </div>
                <div class="col-sm-2 p-sm-1 text-right">
                    <button class="btn btn-lg btn-primary" id="search_forane" onkeyup="searchNewsLetter()" style="width:100%">Find</button>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-10 position-relative p-1 pl-3 pr-3 mb-2">
                    <span class="position-absolute bg-white pl-2 pr-2" style="left:20px; top:-8px">
                        <small>Search news letters</small>
                    </span>
                    <input type="text" id="search_forane" name="search_forane"
                        class="form-control" style="height:48px;"
                        placeholder="Search by name or month or Volume Number or Event Name">
                </div>

                <div class="col-sm-2 p-sm-1 text-right">
                    <button class="btn btn-lg btn-primary" onclick="searchNewsLetter()" style="width:100%">Find</button>
                </div>
            </div>


        </div>

        <?php

        $months2025 = [
            // ['month' => 'December', 'image' => 'default.png', 'volume' => 'XLXXXVXXVI', 'pages' => 25],
            // ['month' => 'November', 'image' => 'default.png', 'volume' => 'XLXXXVXXV', 'pages' => 24],
            // ['month' => 'October', 'image' => 'default.png', 'volume' => 'XLXXXVXXIV', 'pages' => 20],
            // ['month' => 'September', 'image' => 'default.png', 'volume' => 'XLXXXVXXIII', 'pages' => 22],
            ['month' => 'August', 'image' => 'august2025-2.png', 'volume' => 'XLXXXVXXII', 'pages' => 23],
            ['month' => 'July', 'image' => 'july2025-3.png', 'volume' => 'XLXXXVXXI', 'pages' => 21],
            ['month' => 'June', 'image' => 'july2025-2.png', 'volume' => 'XLXXXVXX', 'pages' => 20],
            ['month' => 'May', 'image' => 'default.png', 'volume' => 'XLXXXVXIX', 'pages' => 18],
            ['month' => 'April', 'image' => 'default.png', 'volume' => 'XLXXXVXIII', 'pages' => 19],
            ['month' => 'March', 'image' => 'default.png', 'volume' => 'XLXXXVXII', 'pages' => 22],
            ['month' => 'February', 'image' => 'default.png', 'volume' => 'XLXXXVXI', 'pages' => 21],
            ['month' => 'January', 'image' => 'default.png', 'volume' => 'XLXXXVX', 'pages' => 20],
        ];

        foreach ($months2025 as $data):
            $month = $data['month'];
            $image = $data['image'];
            $pdfUrl = base_url("public/assets/pdf/news-letters/2024/Fatima-Vani-{$month}-2025.pdf");
            $imageUrl = base_url("public/assets/images/news-letters/{$image}");
        ?>
            <div class="row" data-aos="fade-up"
                data-aos-anchor-placement="center-bottom"
                data-aos-duration="2000">
                <div class="col-lg-12 col-sm-12 mb-5">
                    <div class="row align-items-center m-0 shadow-lg bg-white">
                        <div class="col-lg-5 p-0">
                            <a href="<?= $pdfUrl ?>" target="_blank">
                                <img src="<?= $imageUrl ?>" class="img-fluid" alt="Parish">
                            </a>
                        </div>
                        <div class="col-lg-7 p-3 p-sm-4 pl-lg-5 pr-lg-5">
                            <a href="<?= $pdfUrl ?> " target="_blank" class="text-body">
                                <h4 class="font-weight-bold mb-2">Fatima Vani <?= $month ?>-2025</h4>
                            </a>

                            <p class="mb-1">
                                <i class="fas fa-map-marker-alt float-left mr-3 text-secondary"></i>
                                <span class="text-secondary">Kazipet, Warangal, Telangana</span>
                            </p>

                            <p class="mb-2">
                                <i class="fa-solid fa-cross"></i> Bishop :
                                <a href="#" target="_blank" class="text-info ml-1">Most. Rev. Udumala Bala</a>
                            </p>

                            <div class="card-group mb-3">
                                <div class="card p-2">
                                    <small class="text-secondary">published</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $month ?> 2025</h6>
                                </div>
                                <div class="card p-2">
                                    <small class="text-secondary">Volume</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $data['volume'] ?></h6>
                                </div>
                                <div class="card p-2">
                                    <small class="text-secondary">No. of pages</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $data['pages'] ?></h6>
                                </div>
                            </div>

                            <a href="<?= $pdfUrl ?>" target="_blank" class="btn btn-primary pl-4 pr-4 round-more">
                                Read More <i class="fas fa-arrow-right float-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


        <?php

        $months2024 = [
            ['month' => 'December', 'image' => 'default.png', 'volume' => 'XLXXXVXXVI', 'pages' => 25],
            ['month' => 'November', 'image' => 'default.png', 'volume' => 'XLXXXVXXV', 'pages' => 24],
            ['month' => 'October', 'image' => 'default.png', 'volume' => 'XLXXXVXXIV', 'pages' => 20],
            ['month' => 'September', 'image' => 'default.png', 'volume' => 'XLXXXVXXIII', 'pages' => 22],
            ['month' => 'August', 'image' => 'default.png', 'volume' => 'XLXXXVXXII', 'pages' => 23],
            ['month' => 'July', 'image' => 'default.png', 'volume' => 'XLXXXVXXI', 'pages' => 21],
            ['month' => 'June', 'image' => 'default.png', 'volume' => 'XLXXXVXX', 'pages' => 20],
            ['month' => 'May', 'image' => 'default.png', 'volume' => 'XLXXXVXIX', 'pages' => 18],
            ['month' => 'April', 'image' => 'default.png', 'volume' => 'XLXXXVXIII', 'pages' => 19],
            ['month' => 'March', 'image' => 'default.png', 'volume' => 'XLXXXVXII', 'pages' => 22],
            ['month' => 'February', 'image' => 'default.png', 'volume' => 'XLXXXVXI', 'pages' => 21],
            ['month' => 'January', 'image' => 'default.png', 'volume' => 'XLXXXVX', 'pages' => 20],
        ];

        foreach ($months2024 as $data):
            $month = $data['month'];
            $image = $data['image'];
            $pdfUrl = base_url("public/assets/pdf/news-letters/2024/Fatima-Vani-{$month}-2024.pdf");
            $imageUrl = base_url("public/assets/images/news-letters/{$image}");
        ?>
            <div class="row" data-aos="fade-up"
                data-aos-anchor-placement="center-bottom"
                data-aos-duration="2000">
                <div class="col-lg-12 col-sm-12 mb-5">
                    <div class="row align-items-center m-0 shadow-lg bg-white">
                        <div class="col-lg-5 p-0">
                            <a href="<?= $pdfUrl ?>" target="_blank">
                                <img src="<?= $imageUrl ?>" class="img-fluid" alt="Parish">
                            </a>
                        </div>
                        <div class="col-lg-7 p-3 p-sm-4 pl-lg-5 pr-lg-5">
                            <a href="<?= $pdfUrl ?> " target="_blank" class="text-body">
                                <h4 class="font-weight-bold mb-2">Fatima Vani <?= $month ?>-2024</h4>
                            </a>

                            <p class="mb-1">
                                <i class="fas fa-map-marker-alt float-left mr-3 text-secondary"></i>
                                <span class="text-secondary">Kazipet, Warangal, Telangana</span>
                            </p>

                            <p class="mb-2">
                                <i class="fa-solid fa-cross"></i> Bishop :
                                <a href="#" target="_blank" class="text-info ml-1">Most. Rev. Udumala Bala</a>
                            </p>

                            <div class="card-group mb-3">
                                <div class="card p-2">
                                    <small class="text-secondary">published</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $month ?> 2024</h6>
                                </div>
                                <div class="card p-2">
                                    <small class="text-secondary">Volume</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $data['volume'] ?></h6>
                                </div>
                                <div class="card p-2">
                                    <small class="text-secondary">No. of pages</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $data['pages'] ?></h6>
                                </div>
                            </div>

                            <a href="<?= $pdfUrl ?>" target="_blank" class="btn btn-primary pl-4 pr-4 round-more">
                                Read More <i class="fas fa-arrow-right float-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>




        <!-- From 2016 to 2023 Dynamic -->
        <?php

        $months = [
            // 2023
            ['month' => 'December', 'year' => 2023, 'volume' => 'XLXXXVXXV', 'pages' => 28, 'image' => 'default.png',],
            ['month' => 'November', 'year' => 2023, 'volume' => 'XLXXXVXXIV', 'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October', 'year' => 2023, 'volume' => 'XLXXXVXXIII', 'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2023, 'volume' => 'XLXXXVXXII', 'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August', 'year' => 2023, 'volume' => 'XLXXXVXXI', 'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July', 'year' => 2023, 'volume' => 'XLXXXVXX', 'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June', 'year' => 2023, 'volume' => 'XLXXXVXIX', 'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May', 'year' => 2023, 'volume' => 'XLXXXVXIII', 'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April', 'year' => 2023, 'volume' => 'XLXXXVXII', 'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March', 'year' => 2023, 'volume' => 'XLXXXVXI', 'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February', 'year' => 2023, 'volume' => 'XLXXXVX', 'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January', 'year' => 2023, 'volume' => 'XLXXXV', 'pages' => 17, 'image' => 'default.png'],

            // 2022
            ['month' => 'December', 'year' => 2022, 'volume' => 'XLXXXIV', 'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November', 'year' => 2022, 'volume' => 'XLXXXIII', 'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October', 'year' => 2022, 'volume' => 'XLXXXII', 'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2022, 'volume' => 'XLXXXI', 'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August', 'year' => 2022, 'volume' => 'XLXXX', 'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July', 'year' => 2022, 'volume' => 'LXXIX', 'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June', 'year' => 2022, 'volume' => 'LXXVIII', 'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May', 'year' => 2022, 'volume' => 'LXXVII', 'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April', 'year' => 2022, 'volume' => 'LXXVI', 'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March', 'year' => 2022, 'volume' => 'LXXV', 'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February', 'year' => 2022, 'volume' => 'LXXIV', 'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January', 'year' => 2022, 'volume' => 'LXXIII', 'pages' => 17, 'image' => 'default.png'],

            // 2021
            ['month' => 'December', 'year' => 2021, 'volume' => 'LXXII', 'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November', 'year' => 2021, 'volume' => 'LXXI', 'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October', 'year' => 2021, 'volume' => 'LXX', 'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2021, 'volume' => 'LXIX', 'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August', 'year' => 2021, 'volume' => 'LXVIII', 'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July', 'year' => 2021, 'volume' => 'LXVII', 'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June', 'year' => 2021, 'volume' => 'LXVI', 'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May', 'year' => 2021, 'volume' => 'LXV', 'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April', 'year' => 2021, 'volume' => 'LXIV', 'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March', 'year' => 2021, 'volume' => 'LXIII', 'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February', 'year' => 2021, 'volume' => 'LXII', 'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January', 'year' => 2021, 'volume' => 'LXI', 'pages' => 17, 'image' => 'default.png'],

            // (repeat pattern down to 2015...)

            // 2020
            ['month' => 'December',  'year' => 2020, 'volume' => 'LX',     'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November',  'year' => 2020, 'volume' => 'LIX',    'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October',   'year' => 2020, 'volume' => 'LVIII',  'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2020, 'volume' => 'LVII',   'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August',    'year' => 2020, 'volume' => 'LVI',    'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July',      'year' => 2020, 'volume' => 'LV',     'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June',      'year' => 2020, 'volume' => 'LIV',    'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May',       'year' => 2020, 'volume' => 'LIII',   'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April',     'year' => 2020, 'volume' => 'LII',    'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March',     'year' => 2020, 'volume' => 'LI',     'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February',  'year' => 2020, 'volume' => 'L',      'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January',   'year' => 2020, 'volume' => 'XLIX',   'pages' => 17, 'image' => 'default.png'],

            // 2019
            ['month' => 'December',  'year' => 2019, 'volume' => 'XLVIII', 'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November',  'year' => 2019, 'volume' => 'XLVII',  'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October',   'year' => 2019, 'volume' => 'XLVI',   'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2019, 'volume' => 'XLV',    'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August',    'year' => 2019, 'volume' => 'XLIV',   'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July',      'year' => 2019, 'volume' => 'XLIII',  'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June',      'year' => 2019, 'volume' => 'XLII',   'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May',       'year' => 2019, 'volume' => 'XLI',    'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April',     'year' => 2019, 'volume' => 'XL',     'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March',     'year' => 2019, 'volume' => 'XXXIX',  'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February',  'year' => 2019, 'volume' => 'XXXVIII', 'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January',   'year' => 2019, 'volume' => 'XXXVII', 'pages' => 17, 'image' => 'default.png'],

            // 2018
            ['month' => 'December',  'year' => 2018, 'volume' => 'XXXVI',  'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November',  'year' => 2018, 'volume' => 'XXXV',   'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October',   'year' => 2018, 'volume' => 'XXXIV',  'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2018, 'volume' => 'XXXIII', 'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August',    'year' => 2018, 'volume' => 'XXXII',  'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July',      'year' => 2018, 'volume' => 'XXXI',   'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June',      'year' => 2018, 'volume' => 'XXX',    'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May',       'year' => 2018, 'volume' => 'XXIX',   'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April',     'year' => 2018, 'volume' => 'XXVIII', 'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March',     'year' => 2018, 'volume' => 'XXVII',  'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February',  'year' => 2018, 'volume' => 'XXVI',   'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January',   'year' => 2018, 'volume' => 'XXV',    'pages' => 17, 'image' => 'default.png'],

            // 2017
            ['month' => 'December',  'year' => 2017, 'volume' => 'XXIV',   'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November',  'year' => 2017, 'volume' => 'XXIII',  'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October',   'year' => 2017, 'volume' => 'XXII',   'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2017, 'volume' => 'XXI',    'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August',    'year' => 2017, 'volume' => 'XX',     'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July',      'year' => 2017, 'volume' => 'XIX',    'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June',      'year' => 2017, 'volume' => 'XVIII',  'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May',       'year' => 2017, 'volume' => 'XVII',   'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April',     'year' => 2017, 'volume' => 'XVI',    'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March',     'year' => 2017, 'volume' => 'XV',     'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February',  'year' => 2017, 'volume' => 'XIV',    'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January',   'year' => 2017, 'volume' => 'XIII',   'pages' => 17, 'image' => 'default.png'],

            // 2016
            ['month' => 'December',  'year' => 2016, 'volume' => 'XII',    'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November',  'year' => 2016, 'volume' => 'XI',     'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October',   'year' => 2016, 'volume' => 'X',      'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2016, 'volume' => 'IX',     'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August',    'year' => 2016, 'volume' => 'VIII',   'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July',      'year' => 2016, 'volume' => 'VII',    'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June',      'year' => 2016, 'volume' => 'VI',     'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May',       'year' => 2016, 'volume' => 'V',      'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April',     'year' => 2016, 'volume' => 'IV',     'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March',     'year' => 2016, 'volume' => 'III',    'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February',  'year' => 2016, 'volume' => 'II',     'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January',   'year' => 2016, 'volume' => 'I',      'pages' => 17, 'image' => 'default.png'],



            // 2015
            ['month' => 'December', 'year' => 2015, 'volume' => 'LI', 'pages' => 28, 'image' => 'default.png'],
            ['month' => 'November', 'year' => 2015, 'volume' => 'L', 'pages' => 27, 'image' => 'default.png'],
            ['month' => 'October', 'year' => 2015, 'volume' => 'XLIX', 'pages' => 26, 'image' => 'default.png'],
            ['month' => 'September', 'year' => 2015, 'volume' => 'XLVIII', 'pages' => 25, 'image' => 'default.png'],
            ['month' => 'August', 'year' => 2015, 'volume' => 'XLVII', 'pages' => 24, 'image' => 'default.png'],
            ['month' => 'July', 'year' => 2015, 'volume' => 'XLVI', 'pages' => 23, 'image' => 'default.png'],
            ['month' => 'June', 'year' => 2015, 'volume' => 'XLV', 'pages' => 22, 'image' => 'default.png'],
            ['month' => 'May', 'year' => 2015, 'volume' => 'XLIV', 'pages' => 21, 'image' => 'default.png'],
            ['month' => 'April', 'year' => 2015, 'volume' => 'XLIII', 'pages' => 20, 'image' => 'default.png'],
            ['month' => 'March', 'year' => 2015, 'volume' => 'XLII', 'pages' => 19, 'image' => 'default.png'],
            ['month' => 'February', 'year' => 2015, 'volume' => 'XLI', 'pages' => 18, 'image' => 'default.png'],
            ['month' => 'January', 'year' => 2015, 'volume' => 'XL', 'pages' => 17, 'image' => 'default.png'],
        ];


        foreach ($months as $data):
            $month = $data['month'];
            $year = $data['year'];
            $image = $data['image'];
            $pdfUrl = base_url("public/assets/pdfs/news-letters/Fatima-Vani-{$month}-{$year}.pdf");
            $imageUrl = base_url("public/assets/images/news-letters/{$image}");
        ?>
            <div class="row" data-aos="fade-up"
                data-aos-anchor-placement="center-bottom"
                data-aos-duration="1000">
                <div class="col-lg-12 col-sm-12 mb-5">
                    <div class="row align-items-center m-0 shadow-lg bg-white">
                        <div class="col-lg-5 p-0">
                            <a href="<?= $pdfUrl ?>" target="_blank">
                                <img src="<?= $imageUrl ?>" class="img-fluid" alt="Parish">
                            </a>
                        </div>
                        <div class="col-lg-7 p-3 p-sm-4 pl-lg-5 pr-lg-5">
                            <a href="<?= $pdfUrl ?> " target="_blank" class="text-body">
                                <h4 class="font-weight-bold mb-2">Fatima Vani <?= $month ?>-<?= $year ?></h4>
                            </a>

                            <p class="mb-1">
                                <i class="fas fa-map-marker-alt float-left mr-3 text-secondary"></i>
                                <span class="text-secondary">Kazipet, Warangal, Telangana</span>
                            </p>

                            <p class="mb-2">
                                <i class="fa-solid fa-cross"></i> Bishop :
                                <a href="#" target="_blank" class="text-info ml-1">Most. Rev. Udumala Bala</a>
                            </p>

                            <div class="card-group mb-3">
                                <div class="card p-2">
                                    <small class="text-secondary">published</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $month ?> 2024</h6>
                                </div>
                                <div class="card p-2">
                                    <small class="text-secondary">Volume</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $data['volume'] ?></h6>
                                </div>
                                <div class="card p-2">
                                    <small class="text-secondary">No. of pages</small>
                                    <h6 class="m-0 mt-1 font-weight-bold"><?= $data['pages'] ?></h6>
                                </div>
                            </div>

                            <a href="<?= $pdfUrl ?>" target="_blank" class="btn btn-primary pl-4 pr-4 round-more">
                                Read More <i class="fas fa-arrow-right float-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>



    </div>
</section>






<!-- searchNewsLetter javascript -->

<!-- <script>
    function searchNewsLetter() {
        const searchValue = document.getElementById("search_forane").value.toLowerCase().trim();

        // Grab all newsletter top-level wrappers
        const newsletters = document.querySelectorAll("#news-letters > .container > .row[data-aos]");

        let foundAny = false;

        newsletters.forEach(newsletter => {
            const text = newsletter.textContent.toLowerCase();
            const isMatch = text.includes(searchValue);

            // Use "" instead of "block" to keep Bootstrap’s flex/grid layout
            newsletter.style.display = isMatch ? "" : "none";

            if (isMatch) foundAny = true;
        });

        // Optional: show alert if nothing is found
        if (!foundAny && searchValue !== "") {
            alert("No results found for: " + searchValue);
        }
    }
</script> -->


<!-- <script>
    function searchNewsLetter() {
        const searchValue = document.getElementById("search_forane").value.toLowerCase().trim();

        // Select the actual blocks that control spacing (col-lg-12 ... mb-5)
        const newsletters = document.querySelectorAll("#news-letters .col-lg-12.mb-5");

        let foundAny = false;

        newsletters.forEach(newsletter => {
            const text = newsletter.textContent.toLowerCase();
            const isMatch = text.includes(searchValue);

            // Toggle the col block (this removes spacing too)
            newsletter.style.display = isMatch ? "" : "none";

            if (isMatch) foundAny = true;
        });
        // Re-initialize AOS so shown elements fade in again
        AOS.refresh();

        if (!foundAny && searchValue !== "") {
            alert("No results found for: " + searchValue);
        }
    }
</script> -->

<script>
    function searchNewsLetter() {
        const searchValue = document.getElementById("search_forane").value.toLowerCase().trim();

        // Only target newsletter blocks, not the search box row
        const newsletters = document.querySelectorAll("#news-letters .row[data-aos] .col-lg-12.mb-5");
        let foundAny = false;

        newsletters.forEach(newsletter => {
            const text = newsletter.textContent.toLowerCase();
            const isMatch = text.includes(searchValue);

            newsletter.style.display = isMatch ? "" : "none";
            if (isMatch) foundAny = true;
        });

        // Refresh AOS so fade-up works again
        AOS.refresh();

        if (!foundAny && searchValue !== "") {
            alert("No results found for: " + searchValue);
        }
    }
</script>





<?= view('layouts/footer') ?>