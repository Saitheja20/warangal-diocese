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
<style>
    /* Make cards have a consistent shadow and padding */
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .card-body {
        padding: 1.5rem;
    }

    /* Ensure icons and text are aligned properly */
    .apoicons .row {
        align-items: center;
    }

    .apoicons img {
        max-width: 40px;
        height: auto;
    }

    /* Let image take full height and width in its container */
    .card img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    /* Ensure email breaks cleanly on smaller screens */
    .apoicons .col-9 {
        word-break: break-word;
    }

    /* Add margin between cards */
    .card+.card {
        margin-top: 2rem;
    }

    /* Optional: Make the cards responsive for smaller screens */
    @media (max-width: 767.98px) {
        .card-body {
            padding: 1rem;
        }

        .apoicons img {
            max-width: 30px;
        }

        .apoicons .lead {
            font-size: 1rem;
        }
    }

    /* Typography enhancements */
    .text-brown {
        color: #5d4037;
        /* Replace with theme brown if needed */
    }

    .lead {
        font-size: 1.1rem;
    }

    /* Adjust image padding if needed */
    .card img.img-fluid {
        padding: 0;
        border-radius: 0;
    }
</style>
<!-- STYLES FOR TRANSITION -->
<!-- <style>
    .transition-col {
        transition: all 0.5s ease;
    }

    /* Optional: Smoothly expand the hidden column */
    #historyCol {
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    #historyCol:not(.d-none) {
        opacity: 1;
    }
</style> -->
<style>
    .transition-col {
        transition: all 0.5s ease;
    }

    /* .history-col {
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .history-col.show {
        opacity: 1;
    } */

    .history-col {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease;
        height: 0;
        overflow: hidden;
    }

    .history-col.show {
        opacity: 1;
        visibility: visible;
        height: auto;
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


                        <!-- <div class="academic_inn_head">
                            <h3>ASSISI HIGH SCHOOL</h3>
                            <hr>
                        </div> -->

                        <!-- Card Row 1 -->
                        <!-- <div class="card mb-4">
                            <div class="row no-gutters">
                               
                                <div class="col-lg-4">
                                    <img src="https://mananthavadydiocese.com/uploads/posts/1684397167.png" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                               
                                <div class="col-lg-4 bg-light">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                           
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/est-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Formed on</span><br>1973
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/church-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Place</span><br>Warangal
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/place-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Address</span><br>
                                                        Assisi High School, Assisi Nagar, Mill Colony Warangal - 506 013 Warangal (Dist) – 506015
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Principal/Correspondent</span><br>
                                                        Sr. Moksha Salomon / Sr. A. Celestina
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/mail-icon.jpg">
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span>Email</span><br>
                                                        mountmarycollege1977@gmail.com
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/phone-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Telephone</span><br>-
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                </div> 

                                <div class="col-lg-4 bg-light">
                                    <h4 class="text-center">History</h4>
                                    <hr>
                                    <p>ASSISI HIGH SCHOOL (1973)
                                        Assisinagar and its surrounding area, known as Kasibugga of Mill Colony, was a slum area on the outskirts of Warangal Town, then. To educate the poor children who could not go to any school due to poverty, Bishop A. Beretta requested the then Provincial Baptistina Taverneni to open a school in 1973 at Assisinagar. The school was established with classes I-VII. Subsequently on the public demand, the school was up-graded to class X. It has grant-in-aid till standard VIII.

                                        The institution gives books & uniform to the poor children free of cost. Free education is given to the needy. Besides the school subjects, the students are grounded in value education based upon the principles of the Gospel. Catechism is taught regularly to all the catholic students.</p>
                                </div>
                            </div>
                        </div>  -->




                        <div class="academic_inn_head">
                            <h3>ASSISI HIGH SCHOOL 2</h3>
                            <hr>
                        </div>
                        <!-- Card Row 2 (if needed, just duplicate above and change content) -->
                        <!-- CARD START -->
                        <div class="card mb-4">
                            <div class="row no-gutters align-items-stretch" id="schoolCard">
                                <!-- Image Side -->
                                <div class="col-lg-6 col-md-12 transition-col" id="imageCol">
                                    <img src="https://mananthavadydiocese.com/uploads/posts/1684397167.png" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <!-- Info Side -->
                                <div class="col-lg-6 col-md-12 transition-col" id="infoCol">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                            <!-- Info items (shortened for brevity) -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/est-icon.jpg"></div>
                                                    <div class="col-9"><span>Formed on</span><br>1973</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/church-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Place</span><br>Warangal
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/place-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Address</span><br>
                                                        Assisi High School, Assisi Nagar, Mill Colony Warangal - 506 013 Warangal (Dist) – 506015
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/vicar-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Principal/Correspondent</span><br>
                                                        Sr. Moksha Salomon / Sr. A. Celestina
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/mail-icon.jpg">
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span>Email</span><br>
                                                        mountmarycollege1977@gmail.com
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/phone-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Telephone</span><br>-
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add other info items here -->
                                        </div>

                                        <!-- View History Button -->
                                        <div class="text-right mt-4">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#historyModal">View History</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hidden History Column -->
                                <!-- <div class="col-lg-4 col-md-12 transition-col d-none" id="historyCol">
                                    <div class="p-4">
                                        <h4 class="text-center">History</h4>
                                        <hr>
                                        <p>
                                            ASSISI HIGH SCHOOL (1973)<br>
                                            Assisinagar and its surrounding area, known as Kasibugga of Mill Colony...
                                        </p>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <!-- History Modal -->
                        <div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="historyModalLabel">History</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            ASSISI HIGH SCHOOL (1973)<br>
                                            ASSISI HIGH SCHOOL (1973)
                                            Assisinagar and its surrounding area, known as Kasibugga of Mill Colony, was a slum area on the outskirts of Warangal Town, then. To educate the poor children who could not go to any school due to poverty, Bishop A. Beretta requested the then Provincial Baptistina Taverneni to open a school in 1973 at Assisinagar. The school was established with classes I-VII. Subsequently on the public demand, the school was up-graded to class X. It has grant-in-aid till standard VIII.

                                            The institution gives books & uniform to the poor children free of cost. Free education is given to the needy. Besides the school subjects, the students are grounded in value education based upon the principles of the Gospel. Catechism is taught regularly to all the catholic students.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- CARD END -->
                        <!-- <div class="academic_inn_head">
                            <h3>ASSISI HIGH 3</h3>
                            <hr>
                        </div>
                        <div class="card mb-4 school-card">
                            <div class="row no-gutters align-items-stretch">
                               
                                <div class="col-lg-6 col-md-12 transition-col image-col">
                                    <img src="https://mananthavadydiocese.com/uploads/posts/1684397167.png" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <div class="col-lg-6 col-md-12 transition-col info-col">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                            
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/est-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Formed on</span><br>1973
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>

                                       
                                        <div class="text-right mt-4">
                                            <button class="btn btn-outline-primary btn-sm toggle-history-btn">View History</button>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4 col-md-12 transition-col history-col ">
                                    <div class="p-4">
                                        <h4 class="text-center">History</h4>
                                        <hr>
                                        <p>
                                            ASSISI HIGH SCHOOL (1973)<br>
                                            Assisinagar and its surrounding area, known as Kasibugga of Mill Colony...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="academic_inn_head">
                            <h3>ASSISI HIGH 4</h3>
                            <hr>
                        </div>

                        <div class="card mb-4 school-card">
                            <div class="row no-gutters align-items-stretch">
                              
                                <div class="col-lg-6 col-md-12 transition-col image-col">
                                    <img src="https://mananthavadydiocese.com/uploads/posts/1684397167.png" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                              
                                <div class="col-lg-6 col-md-12 transition-col info-col">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                           
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="https://mananthavadydiocese.com/assets/images/cs/est-icon.jpg">
                                                    </div>
                                                    <div class="col-9">
                                                        <span>Formed on</span><br>1973
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>


                                        <div class="text-right mt-4">
                                            <button class="btn btn-outline-primary btn-sm toggle-history-btn">View History</button>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="col-lg-4 col-md-12 transition-col history-col">
                                    <div class="p-4">
                                        <h4 class="text-center">History</h4>
                                        <hr>
                                        <p>
                                            ASSISI HIGH SCHOOL (1973)<br>
                                            Assisinagar and its surrounding area, known as Kasibugga of Mill Colony...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

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
<!-- JS TO TOGGLE -->
<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".school-card");

  cards.forEach((card) => {
    const btn = card.querySelector(".toggle-history-btn");
    const imageCol = card.querySelector(".image-col");
    const infoCol = card.querySelector(".info-col");
    const historyCol = card.querySelector(".history-col");

    btn.addEventListener("click", () => {
      const isVisible = historyCol.classList.contains("show");

      if (!isVisible) {
        historyCol.classList.add("show");
        imageCol.classList.replace("col-lg-6", "col-lg-4");
        infoCol.classList.replace("col-lg-6", "col-lg-4");
        btn.textContent = "Hide History";
      } else {
        historyCol.classList.remove("show");
        imageCol.classList.replace("col-lg-4", "col-lg-6");
        infoCol.classList.replace("col-lg-4", "col-lg-6");
        btn.textContent = "View History";
      }
    });
  });
});

</script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll(".school-card");

        cards.forEach((card) => {
            const btn = card.querySelector(".toggle-history-btn");
            const imageCol = card.querySelector(".image-col");
            const infoCol = card.querySelector(".info-col");
            const historyCol = card.querySelector(".history-col");

            btn.addEventListener("click", () => {
                const isVisible = historyCol.classList.contains("show");

                if (!isVisible) {
                    historyCol.classList.add("show");
                    imageCol.classList.replace("col-lg-6", "col-lg-4");
                    infoCol.classList.replace("col-lg-6", "col-lg-4");
                    btn.textContent = "Hide History";
                } else {
                    historyCol.classList.remove("show");
                    imageCol.classList.replace("col-lg-4", "col-lg-6");
                    infoCol.classList.replace("col-lg-4", "col-lg-6");
                    btn.textContent = "View History";
                }
            });
        });
    });
</script>

<?= view('layouts/footer') ?>