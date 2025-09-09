<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $primaryschools = [
                    // [
                    //     'id' => 'APPANNAPET',
                    //     'name' => 'APPANNAPET',
                    //     'year' => '1970',
                    //     'image' => 'public/assets/images/church/appannapet.jpg',
                    //     'place' => 'Yellapur, Hasanparthy, Warangal',
                    //     'address' => 'Our Lady of Peace Church,Appannapet - Vill, Peddapalli - P.O.',
                    //     'principal' => 'Our Lady of Peace',
                    //     'managed_by' => '1. Andugulapalli
                    //                         Patron : St. Anthony <br>
                    //                         2. Basanthnagar
                    //                         Patron : Our Lady of Velankanni<br>
                    //                         3. Nimmanapalli
                    //                         Patron : St. Francis Xavier<br>
                    //                         4. Peddapalli
                    //                         Patrons : Jesus - Mary - Joseph',
                    //     'telephone' => '08728 - 221320',
                    //     'history' => 'The Parish of Appannapet with the surrounding area was once a part of Kazipet Parish. It came under Karimnagar Parish, when it was formed into a Parish in 1966. It is located on the Karimnagar- Godavarikhani main Road about 120 kms away from Warangal City, going via Karimnagar Town. In the year 1942, four catholic families and three non-christian families came from Patibandla and Jangalapalli of Guntur District to a village called Nimmanapalli, about 4 kms from Peddapalli. In 1943, some more catholic families from Patibandla, Phirangipuram and Mellavagu of Guntur Dt. came and purchased about 250 acres of land near the old village of Appannapeta, 3 kms from Peddapalli towards Ramagundam. Fr. Pazzaglini, PIME, and Fr. Lino Dal Balcon, PIME, from Kazipet visited these new settlements of Catholic families. Eventually, these villages came under the jurisdiction of Karimnagar Parish, which was erected on 01-07-1966. Since then, Fr.G.Tirinzoni,PIME, as the Parish Priest of Karimnagar, used to visit them regularly.
                    //                     Catholics in Appannapet Village : 34'
                    // ],
                ]

                ?>

                <?php foreach ($primaryschools as $school): ?>
                    <div class="card my-4">
                        <div class="row no-gutters align-items-stretch" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom"
                            data-aos-duration="1000">
                            <!-- Image -->
                            <div class="col-lg-3 col-md-12">
                                <img src="<?= base_url($school['image']) ?>" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="<?= $school['name'] ?>">
                            </div>

                            <!-- Info -->
                            <div class="col-lg-3 col-md-12">
                                <div class="card-body">
                                    <div class="row apoicons">
                                        <h5 class="card-title text-center"><?= $school['name'] ?> (<?= $school['year'] ?>)</h5>
                                        <hr>

                                        <!-- Formed On -->
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0">
                                                    <img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>">
                                                </div>
                                                <div class="col-9"><span class="fw-bold">Formed on</span><br><?= $school['year'] ?></div>
                                            </div>
                                        </div>

                                        <!-- Place -->
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0">
                                                    <img class="img-fluid" src="<?= base_url('public/assets/images/icons/church-icon.jpg') ?>">
                                                </div>
                                                <div class="col-9"><span class="fw-bold">Place</span><br><?= $school['place'] ?></div>
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-12 col-sm-6 mb-3">
                                            <div class="row text-secondary">
                                                <div class="col-3 pr-0">
                                                    <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                                </div>
                                                <div class="col-9">
                                                    <span class="fw-bold">Address</span><br><?= $school['address'] ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Principal -->
                                        <div class="col-12 col-sm-6 mb-3">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0">
                                                    <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                                </div>
                                                <div class="col-9">
                                                    <span class="fw-bold">Patron</span><br><?= $school['principal'] ?>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Telephone -->
                                        <div class="col-12 col-sm-6 mb-3">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0">
                                                    <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                                </div>
                                                <div class="col-9">
                                                    <span class="fw-bold">Telephone</span><br><?= $school['telephone'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="text-center mt-3">
                                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#<?= $school['id'] ?>Modal">
                                            View History <i class="bi bi-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Managed By -->
                            <div class="col-6 col-md-12 col-sm-6 mb-3">
                                <div class="row text-secondary align-items-center">
                                    <div class="col-3 pr-0">
                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/managment-icon2.jpg') ?>">
                                    </div>
                                    <div class="col-9" style="word-break: break-word;">
                                        <span class="fw-bold">Sub-stations:</span><br><?= $school['managed_by'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- History Modal -->
                    <div class="modal fade" id="<?= $school['id'] ?>Modal" tabindex="-1" aria-labelledby="<?= $school['id'] ?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="<?= $school['id'] ?>Label"><?= $school['name'] ?> (<?= $school['year'] ?>) - History</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><?= nl2br($school['history']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


                <div class="card mb-4" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom"
                    data-aos-duration="2000">
                    <div class="row no-gutters align-items-stretch" id="schoolCard">
                        <!-- Image Side -->
                        <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                            <img src="<?= base_url('public/assets/images/church/dummychurch.jpg') ?>" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                        </div>

                        <!-- Info Side -->
                        <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                            <div class="card-body">
                                <div class="row apoicons">
                                    <h5 class="card-title text-center">APPANNAPET</h5>
                                    <hr>
                                    <!-- Info items (shortened for brevity) -->
                                    <div class="col-sm-6 mb-3">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0"><img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>"></div>
                                            <div class="col-9"><span class="fw-bold">Formed on</span><br>1990</div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Address</span><br>
                                                Bishop Beretta High School Fatimanagar, Warangal - 506 004
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/managment-icon2.jpg') ?>">
                                            </div>
                                            <!-- <div class="col-3 pr-0 text-center fs-4">
                                                <i class="fas fa-building custom-icon"></i>
                                            </div> -->
                                            <div class="col-9" style="word-break: break-word;">
                                                <span class="fw-bold">Patron</span><br>
                                                Warangal Diocese Educational Society
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Telephone</span><br>-(0870) 2459153
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center apodir">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Sub-stations</span><br>
                                                1. Andugulapalli
                                                Patron : St. Anthony

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add other info items here -->
                                </div>

                                <!-- View History Button -->
                                <div class="text-center">
                                    <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#bishopBerettaHistory" aria-expanded="false" aria-controls="bishopBerettaHistory">
                                        View History <i class="bi bi-arrow-right ms-1"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="collapse mt-3" id="bishopBerettaHistory">
                            <div class="card card-body ">
                                <!-- <h5 class="text-primary  border-primary fw-bold">BISHOP BERETTA E.M. HIGH SCHOOL (1990) - History</h5> -->
                                <h5 class="text-primary fw-bold text-center">APPANNAPET (1970)</h5>
                                <p>
                                    The Parish of Appannapet with the surrounding area was once a part of Kazipet Parish. It came under Karimnagar Parish,
                                    when it was formed into a Parish in 1966. It is located on the Karimnagar- Godavarikhani main Road about 120 kms away
                                    from Warangal City, going via Karimnagar Town. In the year 1942, four catholic families and three non-christian families
                                    came from Patibandla and Jangalapalli of Guntur District to a village called Nimmanapalli, about 4 kms from Peddapalli.
                                    In 1943, some more catholic families from Patibandla, Phirangipuram and Mellavagu of Guntur Dt. came and purchased about 250
                                    acres of land near the old village of Appannapeta, 3 kms from Peddapalli towards Ramagundam. Fr. Pazzaglini, PIME, and Fr.
                                    Lino Dal Balcon, PIME, from Kazipet visited these new settlements of Catholic families. Eventually, these villages came under
                                    the jurisdiction of Karimnagar Parish, which was erected on 01-07-1966. Since then, Fr.G.Tirinzoni,PIME, as the Parish Priest
                                    of Karimnagar, used to visit them regularly.
                                    Catholics in Appannapet Village : 34
                                </p>
                                <h5>Sub-stations:
                                </h5>
                                <ol style="list-style-type: decimal;">
                                    <li>
                                        <strong>Andugulapalli</strong>
                                        Patron: St. Anthony
                                    </li>
                                    <li>
                                        <strong>Basanthnagar</strong>
                                        Patron: Our Lady of Velankanni
                                    </li>
                                    <li>
                                        <strong>Nimmanapalli</strong>
                                        Patron: St. Francis Xavier
                                    </li>
                                    <li>
                                        <strong>Peddapalli</strong>
                                        Patrons: Jesus - Mary - Joseph
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- History Modal -->

                <!-- Collapsible History Content -->
                <!-- <div class="collapse mt-3" id="bishopBerettaHistory">
                    <div class="card card-body border-primary">
                        <h5 class="text-primary fw-bold">BISHOP BERETTA E.M. HIGH SCHOOL (1990) - History</h5>
                        <p>
                            Bishop Beretta School (E.M.) was started by Most Rev. Thumma Bala at Fatimanagar in 1990.
                            The primary aim is to provide education in English Medium to the Diocesan Catholic Children
                            at an affordable cost. It was named so in recognition of the valuable services for 33 years
                            of late Rt. Rev. Alphonsus Beretta, the first Bishop of Warangal.
                        </p>
                        <p>
                            It began in the residential quarters on the roadside at Fatimanagar. Later, the school was shifted
                            in 1995 to the new building, which was built beside the B.Ed. College. It was blessed and inaugurated
                            by Most Rev. Thumma Bala on 18th September 1995. The school was up-graded into high school.
                        </p>
                        <p>
                            Owing to the growing strength, a separate building for Kindergarten was built in 2000 in memory of
                            late Fr. Massimo, Milan, financially helped by his parents, Erika Bignetti & Piero Cappretti, Venegono
                            Superiore, Italy through the instrumentality of Fr. T.Augustine, the then H.M. & Correspondent.
                        </p>
                        <p>
                            Due to the increasing demand, a third section was opened in June 2001.
                        </p>
                    </div>
                </div> -->







                <!-- 
                <div class="card mb-4" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom"
                    data-aos-duration="2000">
                    <div class="row no-gutters align-items-stretch" id="schoolCard">
                        
                        <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                            <img src="<?= base_url('public/assets/images/education/BISHOP-BERETTA-E_M-HIGHS-CHOOL.jpg') ?>"
                                class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                        </div>

                       
                        <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                            <div class="card-body">

                            
                                <div class="row apoicons" id="initialContent">
                                    <h5 class="card-title text-center">APPANNAPET</h5>
                                    <hr>

                                    <div class="col-sm-6 mb-3">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9"><span class="fw-bold">Formed on</span><br>1990</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Address</span><br>
                                                Bishop Beretta High School Fatimanagar, Warangal - 506 004
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/managment-icon2.jpg') ?>">
                                            </div>
                                            <div class="col-9" style="word-break: break-word;">
                                                <span class="fw-bold">Patron</span><br>
                                                Warangal Diocese Educational Society
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Telephone</span><br>-(0870) 2459153
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center apodir">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Sub-stations</span><br>
                                                1. Andugulapalli<br>
                                                Patron: St. Anthony
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="card card-body border-primary mt-3 d-none" id="historyContent">
                                    <h5 class="text-primary fw-bold">BISHOP BERETTA E.M. HIGH SCHOOL (1990) - History</h5>
                                    <p>
                                        Bishop Beretta School (E.M.) was started by Most Rev. Thumma Bala at Fatimanagar in 1990.
                                        The primary aim is to provide education in English Medium to the Diocesan Catholic Children
                                        at an affordable cost. It was named so in recognition of the valuable services for 33 years
                                        of late Rt. Rev. Alphonsus Beretta, the first Bishop of Warangal.
                                    </p>
                                    <p>
                                        It began in the residential quarters on the roadside at Fatimanagar. Later, the school was shifted
                                        in 1995 to the new building, which was built beside the B.Ed. College. It was blessed and inaugurated
                                        by Most Rev. Thumma Bala on 18th September 1995. The school was up-graded into high school.
                                    </p>
                                    <p>
                                        Owing to the growing strength, a separate building for Kindergarten was built in 2000 in memory of
                                        late Fr. Massimo, Milan, financially helped by his parents, Erika Bignetti & Piero Cappretti,
                                        Venegono Superiore, Italy through the instrumentality of Fr. T.Augustine, the then H.M. & Correspondent.
                                    </p>
                                    <p>
                                        Due to the increasing demand, a third section was opened in June 2001.
                                    </p>
                                </div>

                              
                                <div class="text-center mt-3">
                                    <button class="btn btn-outline-primary btn-sm" id="toggleHistoryBtn">
                                        View History <i class="bi bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->




                <div class="card mb-4" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom"
                    data-aos-duration="2000">
                    <div class="row no-gutters align-items-stretch" id="schoolCard">
                        <!-- Image Side -->
                        <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                            <img src="<?= base_url('public/assets/images/church/dummychurch2.jpg') ?>"
                                class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                        </div>

                        <!-- Info Side -->
                        <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                            <div class="card-body">

                                <!-- Initial Info Content -->
                                <div class="row apoicons" id="initialContent">
                                    <h5 class="card-title text-center">APPANNAPET</h5>
                                    <hr>

                                    <div class="col-sm-6 mb-3">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9"><span class="fw-bold">Formed on</span><br>1990</div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Address</span><br>
                                                Bishop Beretta High School Fatimanagar, Warangal - 506 004
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/managment-icon2.jpg') ?>">
                                            </div>
                                            <div class="col-9" style="word-break: break-word;">
                                                <span class="fw-bold">Patron</span><br>
                                                Warangal Diocese Educational Society
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Telephone</span><br>-(0870) 2459153
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-4">
                                        <div class="row text-secondary align-items-center apodir">
                                            <div class="col-3 pr-0">
                                                <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                            </div>
                                            <div class="col-9">
                                                <span class="fw-bold">Sub-stations</span><br>
                                                1. Andugulapalli<br>
                                                Patron: St. Anthony
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- History Content (Initially Hidden) -->
                                <div class="card card-body border-primary mt-3 d-none" id="historyContent">
                                    <h5 class="text-primary fw-bold text-center">APPANNAPET (1970)</h5>
                                    <p>
                                        The Parish of Appannapet with the surrounding area was once a part of Kazipet Parish. It came under Karimnagar Parish,
                                        when it was formed into a Parish in 1966. It is located on the Karimnagar- Godavarikhani main Road about 120 kms away
                                        from Warangal City, going via Karimnagar Town. In the year 1942, four catholic families and three non-christian families
                                        came from Patibandla and Jangalapalli of Guntur District to a village called Nimmanapalli, about 4 kms from Peddapalli.
                                        In 1943, some more catholic families from Patibandla, Phirangipuram and Mellavagu of Guntur Dt. came and purchased about 250
                                        acres of land near the old village of Appannapeta, 3 kms from Peddapalli towards Ramagundam. Fr. Pazzaglini, PIME, and Fr.
                                        Lino Dal Balcon, PIME, from Kazipet visited these new settlements of Catholic families. Eventually, these villages came under
                                        the jurisdiction of Karimnagar Parish, which was erected on 01-07-1966. Since then, Fr.G.Tirinzoni,PIME, as the Parish Priest
                                        of Karimnagar, used to visit them regularly.
                                        Catholics in Appannapet Village : 34
                                    </p>
                                    <h5>Sub-stations:
                                    </h5>
                                    <ol style="list-style-type: decimal;">
                                        <li>
                                            <strong>Andugulapalli</strong>
                                            Patron: St. Anthony
                                        </li>
                                        <li>
                                            <strong>Basanthnagar</strong>
                                            Patron: Our Lady of Velankanni
                                        </li>
                                        <li>
                                            <strong>Nimmanapalli</strong>
                                            Patron: St. Francis Xavier
                                        </li>
                                        <li>
                                            <strong>Peddapalli</strong>
                                            Patrons: Jesus - Mary - Joseph
                                        </li>
                                    </ol>


                                    <!-- Close History Button -->
                                    <div class="text-center mt-3">
                                        <button class="btn btn-outline-secondary btn-sm" id="closeHistoryBtn">
                                            Close History <i class="bi bi-x ms-1"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Toggle Button -->
                                <div class="text-center mt-3" id="historyBtnContainer">
                                    <button class="btn btn-outline-primary btn-sm" id="toggleHistoryBtn">
                                        View History <i class="bi bi-arrow-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- 
<script>
    document.getElementById("toggleHistoryBtn").addEventListener("click", function() {
        document.getElementById("initialContent").classList.add("d-none");
        document.getElementById("historyContent").classList.remove("d-none");
        this.classList.add("d-none"); // Hide the button itself
    });
</script> -->


<script>
    const viewBtn = document.getElementById("toggleHistoryBtn");
    const closeBtn = document.getElementById("closeHistoryBtn");
    const initialContent = document.getElementById("initialContent");
    const historyContent = document.getElementById("historyContent");
    const historyBtnContainer = document.getElementById("historyBtnContainer");

    viewBtn.addEventListener("click", function() {
        initialContent.classList.add("d-none");
        historyContent.classList.remove("d-none");
        historyBtnContainer.classList.add("d-none");
    });

    closeBtn.addEventListener("click", function() {
        historyContent.classList.add("d-none");
        initialContent.classList.remove("d-none");
        historyBtnContainer.classList.remove("d-none");
    });
</script>


<?= view('layouts/footer') ?>