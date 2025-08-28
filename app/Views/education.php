<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>

<style>
    #academicTab .btn {
        border-radius: 30px;
        /* pill look */
        font-weight: 500;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    #academicTab .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    #academicTab .btn.active {
        background-color: #0d6efd;
        color: white;
        border-color: #0d6efd;
        font-weight: 600;
    }
</style>


<section class="academic_main" id="academic_tab_main">
    <div class="container acdemic_head">
        <h3>Education Institute</h3>
        <hr>
    </div>

    <div class="container">
        <!-- Row 1: Tab Buttons -->
        <!-- <div class="row text-center mb-4 nav" id="academicTab" role="tablist">
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 nav-item">
        <button class="btn nav-link w-100 active" id="polytechnic-tab" data-bs-toggle="tab"
          data-bs-target="#polytechnic" type="button" role="tab" aria-controls="polytechnic"
          aria-selected="true">Colleges</button>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 nav-item">
        <button class="btn nav-link w-100" id="btech-tab" data-bs-toggle="tab"
          data-bs-target="#btech" type="button" role="tab" aria-controls="btech"
          aria-selected="false">High Schools</button>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 nav-item">
        <button class="btn nav-link w-100" id="mtech-tab" data-bs-toggle="tab"
          data-bs-target="#mtech" type="button" role="tab" aria-controls="mtech"
          aria-selected="false">Upper Primary School</button>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 nav-item">
        <button class="btn nav-link w-100" id="mba-tab" data-bs-toggle="tab"
          data-bs-target="#mba" type="button" role="tab" aria-controls="mba"
          aria-selected="false">Primary School</button>
      </div>
       <div class="col-lg-3 col-md-6 col-sm-6 col-6 nav-item">
        <button class="btn nav-link w-100" id="techschool-tab" data-bs-toggle="tab"
          data-bs-target="#techschool" type="button" role="tab" aria-controls="techschool"
          aria-selected="false">Technical School</button>
      </div>
       <div class="col-lg-3 col-md-6 col-sm-6 col-6 nav-item">
        <button class="btn nav-link w-100" id="traininginstitute-tab" data-bs-toggle="tab"
          data-bs-target="#traininginstitute" type="button" role="tab" aria-controls="traininginstitute"
          aria-selected="false">Training institute</button>
      </div>
    </div> -->

        <!-- Academic Tabs -->
        <div class="row text-center mb-4 g-2 nav" id="academicTab" role="tablist">
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-primary w-100 active" id="polytechnic-tab" data-bs-toggle="tab"
                    data-bs-target="#polytechnic" type="button" role="tab" aria-controls="polytechnic"
                    aria-selected="true">Colleges</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="btech-tab" data-bs-toggle="tab"
                    data-bs-target="#btech" type="button" role="tab" aria-controls="btech"
                    aria-selected="false">High Schools</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="mtech-tab" data-bs-toggle="tab"
                    data-bs-target="#mtech" type="button" role="tab" aria-controls="mtech"
                    aria-selected="false">Upper Primary School</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="mba-tab" data-bs-toggle="tab"
                    data-bs-target="#mba" type="button" role="tab" aria-controls="mba"
                    aria-selected="false">Primary School</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="techschool-tab" data-bs-toggle="tab"
                    data-bs-target="#techschool" type="button" role="tab" aria-controls="techschool"
                    aria-selected="false">Technical School</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="traininginstitute-tab" data-bs-toggle="tab"
                    data-bs-target="#traininginstitute" type="button" role="tab" aria-controls="traininginstitute"
                    aria-selected="false">Training Institute</button>
            </div>
        </div>


        <!-- Row 2: Tab Content -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="academicTabContent">

                    <!-- Polytechnic -->
                    <div class="tab-pane fade show active" id="polytechnic" role="tabpanel" aria-labelledby="polytechnic-tab">
                        <div class="academic_inn_head">
                            <h3>ASSISI HIGH SCHOOL</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="academic_card">
                                    <img src="https://mananthavadydiocese.com/uploads/posts/1684397167.png" class="img-fluid" alt="EEE">

                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="academic_branch">
                                    <div class="row apoicons mt-4 mt-lg-5">




                                        <div class="col-sm-6 mb-4">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/est-icon.jpg"></div>
                                                <div class="col-9"><span class="lead text-brown font-weight-bold">Formed on</span><br>1973</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/church-icon.jpg"></div>
                                                <div class="col-9"><span class="lead text-brown font-weight-bold">Place</span><br>Warangal</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="row text-secondary ">
                                                <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/place-icon.jpg"></div>
                                                <div class="col-9"><span class="lead text-brown font-weight-bold">Address</span><br> Assisi High School
                                                    Assisi Nagar, Mill Colony Warangal
                                                    - 506 013 Warangal (Dist) – 506015 </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4 d-none">
                                            <div class="row text-secondary align-items-center apodir">

                                                <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg"></div>


                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="row text-secondary align-items-center apodir">
                                                <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg"></div>
                                                <div class="col-9"><span class="lead text-brown font-weight-bold">Principal/correspondent</span><br>Sr. Moksha Salomon /
                                                    Sr. A.Celestina</div>


                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/mail-icon.jpg"></div>
                                                <div class="col-9" style="word-break: break-all;"><span class="lead text-brown font-weight-bold">Email</span><br>mountmarycollege1977@gmail.com</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="row text-secondary align-items-center">
                                                <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/phone-icon.jpg"></div>
                                                <div class="col-9"><span class="lead text-brown font-weight-bold">Telephone</span><br>-</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row mt-3">
                            <div class="col-lg-5">
                                <div class="academic_card">

                                    <div class="academic_branch">
                                        <div class="row apoicons mt-4 mt-lg-5">




                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/est-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Formed on</span><br>1973</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/church-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Place</span><br>Warangal</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary ">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/place-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Address</span><br> Assisi High School
                                                        Assisi Nagar, Mill Colony Warangal
                                                        - 506 013 Warangal (Dist) – 506015 </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4 d-none">
                                                <div class="row text-secondary align-items-center apodir">

                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg"></div>


                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Principal/correspondent</span><br>Sr. Moksha Salomon /
                                                        Sr. A.Celestina</div>


                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/mail-icon.jpg"></div>
                                                    <div class="col-9" style="word-break: break-all;"><span class="lead text-brown font-weight-bold">Email</span><br>mountmarycollege1977@gmail.com</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/phone-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Telephone</span><br>-</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="academic_card">
                                    <img src="https://mananthavadydiocese.com/uploads/posts/1684397167.png" class="img-fluid" alt="EEE">
                                </div>

                            </div>
                            <!-- Other BTech cards here... -->
                        </div>
                    </div>

                    <!-- B.Tech -->
                    <div class="tab-pane fade" id="btech" role="tabpanel" aria-labelledby="btech-tab">
                        <div class="academic_inn_head">
                            <h3>B.TECH</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="academic_card">

                                    <div class="academic_branch">
                                        <div class="row apoicons mt-4 mt-lg-5">




                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/est-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Formed on</span><br>1973</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/church-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Place</span><br>Warangal</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary ">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/place-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Address</span><br> Assisi High School
                                                        Assisi Nagar, Mill Colony Warangal
                                                        - 506 013 Warangal (Dist) – 506015 </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4 d-none">
                                                <div class="row text-secondary align-items-center apodir">

                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg"></div>


                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Principal/correspondent</span><br>Sr. Moksha Salomon /
                                                        Sr. A.Celestina</div>


                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/mail-icon.jpg"></div>
                                                    <div class="col-9" style="word-break: break-all;"><span class="lead text-brown font-weight-bold">Email</span><br>mountmarycollege1977@gmail.com</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/phone-icon.jpg"></div>
                                                    <div class="col-9"><span class="lead text-brown font-weight-bold">Telephone</span><br>-</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="academic_card">
                                    <img src="https://mananthavadydiocese.com/uploads/posts/1684397167.png" class="img-fluid" alt="EEE">
                                </div>

                            </div>
                            <!-- Other BTech cards here... -->
                        </div>
                    </div>

                    <!-- M.Tech -->
                    <div class="tab-pane fade" id="mtech" role="tabpanel" aria-labelledby="mtech-tab">
                        <div class="academic_inn_head">
                            <h3>M.TECH</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="academic_card">
                                    <img src="https://bitswgl.ac.in/assets/img/icons/desk.png" class="img-fluid" alt="CSE">
                                    <div class="academic_branch">
                                        <h3>Computer Science and Engineering</h3>
                                        <p><span>Intake</span> - 30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MBA -->
                    <div class="tab-pane fade" id="mba" role="tabpanel" aria-labelledby="mba-tab">
                        <div class="academic_inn_head">
                            <h3>MBA</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="academic_card">
                                    <img src="https://bitswgl.ac.in/assets/img/icons/desk.png" class="img-fluid" alt="MBA">
                                    <div class="academic_branch">
                                        <h3>Master of Business Administration</h3>
                                        <p><span>Intake</span> - 60</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Technical School -->
                    <div class="tab-pane fade" id="techschool" role="tabpanel" aria-labelledby="techschool-tab">
                        <div class="academic_inn_head">
                            <h3>Technical School</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="academic_card">
                                    <img src="https://bitswgl.ac.in/assets/img/icons/desk.png" class="img-fluid" alt="MBA">
                                    <div class="academic_branch">
                                        <h3>Master of Business Administration</h3>
                                        <p><span>Intake</span> - 60</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--training institute -->
                    <div class="tab-pane fade" id="traininginstitute" role="tabpanel" aria-labelledby="traininginstitute-tab">
                        <div class="academic_inn_head">
                            <h3>Training intitute</h3>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="academic_card">
                                    <img src="https://bitswgl.ac.in/assets/img/icons/desk.png" class="img-fluid" alt="MBA">
                                    <div class="academic_branch">
                                        <h3>Training institute</h3>
                                        <p><span>Intake</span> - 60</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- tab-content -->
            </div>
        </div>
    </div>
</section>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll('#academicTab button');

        buttons.forEach(btn => {
            btn.addEventListener('shown.bs.tab', function() {
                buttons.forEach(b => b.classList.remove('btn-primary', 'active'));
                buttons.forEach(b => b.classList.add('btn-outline-primary'));
                this.classList.remove('btn-outline-primary');
                this.classList.add('btn-primary', 'active');
            });
        });
    });
</script>

<?= view('layouts/footer') ?>