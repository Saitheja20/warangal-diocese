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

    .custom-icon {
        color: rgb(177, 155, 90);
    }
</style>

<style>
    /* === Modal Styles === */

    .modal-content {
        border-radius: 16px;
        border: none;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);
        background: #ffffff;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .modal-header {
        background: #E8E8E8;
        color: #e60808ff;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        padding: 1rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1.35rem;
        letter-spacing: 0.3px;
        margin: 0;
    }

    .btn-close {
        filter: invert(1);
        opacity: 0.85;
        transition: opacity 0.2s ease-in-out;
    }

    .btn-close:hover {
        opacity: 1;
    }

    .modal-body {
        padding: 1.5rem 2rem;
        font-size: 1rem;
        line-height: 1.7;
        color: #444444;
        background-color: #ffffff;
    }

    .modal-body p {
        margin-bottom: 1.2rem;
        text-align: justify;
        font-size: 1.02rem;
    }

    .modal-body p:first-child {
        font-weight: 400;
        font-size: 1.15rem;
        color: #2c3e50;
        margin-bottom: 1.5rem;
    }

    .modal-footer {
        border-top: 1px solid #eeeeee;
        padding: 1rem 1.5rem;
        background-color: #fafafa;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
    }

    h5 {
        color: rgb(219, 96, 50) !important;
        font-weight: bold;
        margin-top: 1rem;
    }

    @media (max-width: 576px) {
        .modal-dialog {
            margin: 1rem;
        }

        .modal-body {
            font-size: 0.95rem;
            padding: 1rem 1.2rem;
        }

        .modal-title {
            font-size: 1.2rem;
        }
    }
</style>

<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .card-body {
        padding: 1.5rem;
    }


    .apoicons .row {
        align-items: center;
    }

    .apoicons img {
        max-width: 40px;
        height: auto;
    }


    .card img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }


    .apoicons .col-9 {
        word-break: break-word;
    }


    .card+.card {
        margin-top: 2rem;
    }


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

    .text-brown {
        color: #5d4037;

    }

    .lead {
        font-size: 1.1rem;
    }


    .card img.img-fluid {
        padding: 0;
        border-radius: 0;
    }

    /* Academic header and sslm */
    .acdemic_head h2 {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: left;
        color: #2a6b4e;
        /* Bootstrap primary 7cb078    0d6efd*/
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }

    /* .acdemic_head hr {
        text-align: left;
        width: 20rem;
        height: 4px;
        background-color: #0d6efd;
        border: 2px solid red;
        margin: 0 auto 2rem auto;
        border-radius: 2px;
    } */

    .nav-item .btn {
        border-radius: 30px;
        font-weight: 500;
        transition: all 0.3s ease-in-out;
        padding: 0.75rem 1rem;
    }

    .nav-item .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .nav-item .btn.active {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
</style>

<section class="academic_main" id="academic_tab_main">
    <div class="container acdemic_head">
        <h2>Education Institutes</h2>
        <hr>
    </div>

    <div class="container">
        <!-- School Tabs -->
        <div class="row text-center mb-4 g-2 nav" id="academicTab" role="tablist">
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-primary w-100 active" id="polytechnic-tab" data-bs-toggle="tab"
                    data-bs-target="#polytechnic" type="button" role="tab" aria-controls="polytechnic"
                    aria-selected="true">Primary School</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="btech-tab" data-bs-toggle="tab"
                    data-bs-target="#btech" type="button" role="tab" aria-controls="btech"
                    aria-selected="false">Upper Primary School</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="mtech-tab" data-bs-toggle="tab"
                    data-bs-target="#mtech" type="button" role="tab" aria-controls="mtech"
                    aria-selected="false">High Schools</button>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6 nav-item">
                <button class="btn btn-outline-primary w-100" id="mba-tab" data-bs-toggle="tab"
                    data-bs-target="#mba" type="button" role="tab" aria-controls="mba"
                    aria-selected="false" disabled>Colleges</button>
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

                    <!-- Primary Schools -->
                    <div class="tab-pane fade show active" id="polytechnic" role="tabpanel" aria-labelledby="polytechnic-tab">

                        <?php
                        $primaryschools = [
                            [
                                'id' => 'AuxiliumEnglishMediumSchool',
                                'name' => 'Auxilium English Medium School',
                                'year' => '1997',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Yellapur, Hasanparthy, Warangal',
                                'address' => 'H.M. / Correspondent Auxilium English medium school Yellapur P.O., Hasanparthy mdl. Warangal Dt. -506371',
                                'principal' => 'Sr. Phliomena Fernadez',
                                'managed_by' => 'Salesian Sisters of Don Fernandez',
                                'telephone' => '',
                                'history' => 'Auxilium English medium school was started in 1997. The people of Yellapur and neighbouring villages are poor and illiterate. The people of these villages expressed the need for a school to most rev. Thumma Bala. The Bishop invited the Salesian Sisters of Don Bosco to start aschool at Seethampet cross road, Hasanparthy mandal from the academic year 1997-1998. Sr. Ruby kora , F.M.A., the then provincial, made the arrangements to a school. At present, it has kindergarten and classes I & IV and it being up-graded year by year. The school was blessed and integrated by bishop Thumma Bala on 27th july, 1999. Aims at the integral growth of the children after the example of Don Bosco and Mother Mazzarella, the founder and Co-fundress of the Congregation. Method followed is the preventive system of Don bosco, which isan effective means of reaching the goal.'
                            ],
                            [
                                'id' => 'FatimaPrimarySchoolTM',
                                'name' => 'Fatima Primary School (T.M.)',
                                'year' => '1956',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Monugonda, Dharmaram, Warangal',
                                'address' => 'Fatima Primary School Monugonda (P.O.) Via: Dharmaram Warangal Dt. - 506 330',
                                'principal' => 'Sr. D. Catherine, FMM',
                                'managed_by' => 'Franciscan Missionaries of Mary',
                                'telephone' => '(0870) 2844201',
                                'history' => 'Fatima Primary School was established on 11th June 1956 by Franciscan Missionaries of Mary  during the time  of  Most Rev. Alphonsus Beretta. The main purpose of establishing this institution was to impart a quality education and all-round formation  both to catholic and non-catholic poor rural children. There were about 13 Sisters who rendered their services as Heamistresses from 1956 to 2000. About 1497 students  studied in this school so far and 173 of them have been Catholics.'
                            ],
                            [
                                'id' => 'FuscosEnglishMediumSchool',
                                'name' => 'Fusco’s English Medium School',
                                'year' => '1998',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Wardhannapet, Warangal',
                                'address' => 'Fusco’s English Medium School Wardhannapet (P.O.) Warangal Dt. - 506 313',
                                'principal' => 'Sr. Celestina / Sr. Fathima Mary',
                                'managed_by' => 'Sisters of St. John the Baptist',
                                'telephone' => '(08711) 241493',
                                'history' => 'Most. Rev. Thumma Bala has invited the Sisters of St. John the Baptist to Wardhannapet for educational, catechetical and social work, especially women’s development programmes. In view of these objectives, Fusco’s English Medium School was started on June 12th, 1998. Sr. Lucy Kallarackal was the Delegate Superior at that time.'
                            ],
                            [
                                'id' => 'HansonsResidentialSchoolTM',
                                'name' => "Hanson's Residential School (T.M)",
                                'year' => '',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Karunapuram, Peddapendiyal, Warangal',
                                'address' => "Hansen's Residential School, Karunapuram, Peddapendiyal (P.O) Warangal Dt :- 506 051",
                                'principal' => 'Sr. Lilly Mathew, MIMM',
                                'managed_by' => 'The Mationaries of Mary Mediatrix',
                                'telephone' => '',
                                'history' => 'Hanson’s school was established in 1987 by Fr.Augusto Colombo, PIME, to educate the leprosy affected children along with treatment. The School was handed over to the Missionaries of Mary Mediatrix Sisters at Karunapuram, when Sr. Ann Narikattu was the Delegate Superior. About 300 Students have studied in this school till now and 50 of them have been Catholics.'
                            ],
                            [
                                'id' => 'LittleFlowerSchool',
                                'name' => 'Little Flower School',
                                'year' => '2001',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Pasara, Warangal',
                                'address' => 'Little Flower School Pasara (P.O.) Warangal Dt. - 506 347',
                                'principal' => 'Sr. Veronica / Sr. Roset Luka',
                                'managed_by' => 'Missionary Sisters of Mary Help of Christians',
                                'telephone' => '',
                                'history' => 'Little Flower School at Pasara was started on June 11th, 2001 at the invitation of Most.Rev. Thumma Bala by the Regional Superior, Sr. Ivy Joseph. Sr. Rosaline George is the first Headmistress.'
                            ],
                            [
                                'id' => 'MaryMediatrixEMSchool',
                                'name' => 'Mary Mediatrix E.M. School',
                                'year' => '1997',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Suraipally, Manthani, Karimnagar',
                                'address' => 'Mary Mediatrix School Suraipally (Vill), Manthani (P.O.) Karimnagar Dt.- 505 184',
                                'principal' => 'Sr. Valsamma Michael / Sr. Gracy Varghese',
                                'managed_by' => 'Missionaries of Mary Mediatrix',
                                'telephone' => '',
                                'history' => 'Mary Mediatrix School was establised on 12th June 1997. This School was started on the initiative of Most Rev. Thumma Bala, the Bishop of Warangal and the then Regional Superior, Sr. Theresa Thomas. The school building was blessed and inaugurated by Bishop Thumma Bala on 16th January 1997.  The main aim of this institution is to give a sound moral, intellectual, social and physical education.   Fr. M.P. Joseph helped for the construction of the Convent and primary school buildings'
                            ],
                            [
                                'id' => 'MissionSchoolSagaram',
                                'name' => 'Mission School',
                                'year' => '',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Sagaram, Wardhanapet, Warangal',
                                'address' => 'Mission School Sagaram Vill & P.O Wardhanapet (Mdll) Warangal Dt :- 506 313',
                                'principal' => 'Sr. Theresamma',
                                'managed_by' => 'Catechist Sister of St. Ann',
                                'telephone' => '',
                                'history' => 'We’re sorry, but the history of the school is currently unavailable.'
                            ],
                            [
                                'id' => 'SacredHeartEMSchool',
                                'name' => 'Sacred Heart E.M. School',
                                'year' => '1998',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Tharalapally, Kazipet, Warangal',
                                'address' => 'Sacred Heart School Tharalapally (P.O.),Via Kazipet Warangal Dt. - 506 003',
                                'principal' => 'Sr. Vijaya',
                                'managed_by' => 'Sisters of our Lady of Fatima',
                                'telephone' => '',
                                'history' => 'Sacred Heart School was started in the year 1998 at the invitation of  Most Rev. Thumma Bala. Then the Regional Superior was Sr. Florence Fernandes. The purpose was to develop the poor and rural children through good education.The late Rev. Fr. Antonello, PIME,P.P. of Kazipet, was instrumental in purchase of the land and the school building, etc.'
                            ],
                            [
                                'id' => 'BlAlphonsasSchool',
                                'name' => 'Bl. Alphonsa’s School',
                                'year' => '1978',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Reddipuram, Pegadapally, Warangal',
                                'address' => 'Bl. Alphonsa’s School Reddipuram (Vill.), Pegadapally (P.O.) Warangal Dt. - 506 371',
                                'principal' => 'Sr. Fathima',
                                'managed_by' => 'Society of St. Anne, Guntur',
                                'telephone' => '',
                                'history' => 'Bl. Alphonsa’s School was started on 20th June 1978 during the time of  Most  Rev. Alphonsus Beretta and then the  Superior  General Rev. Sr. Margaret Mary. The main purpose of establishing this institution is to give the poor and rural children good academic and religious education with a special reference to the catholic children.'
                            ],
                            [
                                'id' => 'StAlphonsusSchoolTM',
                                'name' => 'St. Alphonsu’s School (T.M)',
                                'year' => '1965',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Ragunathpally, Warangal',
                                'address' => 'St. Alphonsa’s School Ragunathpally, (P.O.) Warangal Dt. - 506 224',
                                'principal' => 'Sr. V. Arogyam',
                                'managed_by' => 'Catechist Sister of St.Ann',
                                'telephone' => '',
                                'history' => 'We’re sorry, but the history of the school is currently unavailable.'
                            ],
                            [
                                'id' => 'StAnnsEMSchool',
                                'name' => 'St. Ann’s (E.M.) School',
                                'year' => '1997',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Mariapuram, Narimetta, Warangal',
                                'address' => 'St. Ann’s English Medium School Mariapuram Vill. Narsapur (P.O.), Narimetta (Mdl.) Warangal Dt. - 506 224',
                                'principal' => 'Sr. Beena / Sr. Celine',
                                'managed_by' => 'Society of St. Anne, Guntur',
                                'telephone' => '',
                                'history' => 'At the request of Mariapuram People and with the support and encouragement of Most Rev. Thumma Bala, then the Superior General, Sr. Ignatius Loyola, of the Society of St. Anne, Guntur, started St. Ann’s English Medium School in 1997 at Mariapuram in Warangal District. The school was blessed and inaugurated by Bishop Thumma Bala on 17th June, 1997.'
                            ],
                            [
                                'id' => 'StFrancisSchool',
                                'name' => 'St. Francis School',
                                'year' => '2002',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Veleru, Madikonda, Warangal',
                                'address' => 'St.Francis School Veleru P.O., Via Madikonda Warangal Dt. - 506 142',
                                'principal' => 'Fr. D. Vijaya Paul Reddy / Sr. Victoria',
                                'managed_by' => 'Warangal Diocesan Society',
                                'telephone' => '(08719) 250970',
                                'history' => 'St. Francis Kindergarten is started for the academic year 2002-03 at Veleru by the Diocese of Warangal in collboration with the Presentation Sisters.  It is co-education from LKG to 2nd grade on experimental basis for 2 to 3 years, then make assessment and proceed accordingly. The purpose of this school is to serve rural and tribal children. Fr. G. Prakash is appointed as its first Correspondent. The purpose of starting this school by the Diocese is to give christian presence first and to reach out to the rural and tribal people.  Educational institution becomes one of the main tools to get in touch with many people. Thus, it becomes a means for evangelisation and service.'
                            ],
                            [
                                'id' => 'StJohnsEMSchool',
                                'name' => 'St. JOHN’S (E.M.) SCHOOL',
                                'year' => '2002',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Dhanasari, Kesamudram, Warangal',
                                'address' => 'St. John’s School Dhanasari (Vill), Kesamudram (Mdl) Warangal Dt. - 506 112',
                                'principal' => 'Fr. T. Pradeep Reddy',
                                'managed_by' => 'Warangal Diocesan Society',
                                'telephone' => '',
                                'history' => 'St. John’s (E.M) Primary School is started for the academic year 2002 - 03 at Dhanasari village, Kesamudram Mandal by the Diocese of Warangal in memory of its Golden Jubilee. It is co-education from LKG to 2nd grade.  Fr. R. Inna is appointed as its first H.M. & Correspondent. The purpose of starting this school by the Diocese is to give christian presence first and to reach out to the rural and tribal people. An educational institution becomes one of the main tools to get in touch with many people. Thus, it becomes a means for evangelisation and service.
                                        Most Rev. Thumma Bala, Bishop of Warangal, blessed and inaugurated the newly constructed school building on 5th December 2002 together with the Presbytery.'
                            ],
                            [
                                'id' => 'StJosephsEMSchool',
                                'name' => 'St. Joseph’s (E.M.) School',
                                'year' => '1997',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Vadlur, Thotappalli, Karimnagar',
                                'address' => 'St. Joseph’s School Vadlur (P.O.) Thotappalli Via Karimnagar Dt. - 505 530',
                                'principal' => 'Sr. Flora',
                                'managed_by' => 'St. Franciscan Sister of Aloysius De Gonzague',
                                'telephone' => '',
                                'history' => 'St. Joseph’s E.M. Primary School was opened in 1998 at Mallakapally by the then Provincial Sr. Bernadette Pinto of  Sisters of St. Joseph of Cluny on the invitation of Most Rev. Thumma Bala.  This school gives academic and moral education to the rural children in an atmosphere of justice, equality, and with a special concern for the poor.'
                            ],
                            [
                                'id' => 'StJosephsTMSchool',
                                'name' => 'St. Joseph’s (T.M.) School',
                                'year' => '1998',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Mallakapally, Kazipet, Warangal',
                                'address' => 'St. Joseph’s Primary School Mallakapally (P.O.) Via Kazipet Warangal Dt. - 506 003',
                                'principal' => 'Rev. Sr. Philomena Peter',
                                'managed_by' => 'Sisters of St. Joseph of Cluny',
                                'telephone' => '',
                                'history' => 'St. Joseph’s T.M. Primary School was opened in 1998 at Mallakapally by the then Provincial Sr. Bernadette Pinto of  Sisters of St. Joseph of Cluny on the invitation of Most Rev. Thumma Bala.  This school gives academic and moral education to the rural children in an atmosphere of justice, equality, and with a special concern for the poor.'
                            ],
                            [
                                'id' => 'StJosephsEMSchoolJyothinagar',
                                'name' => 'St. JOSEPH’S E.M. SCHOOL',
                                'year' => '1999',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Jyothinagar, Husnabad, Karimnagar',
                                'address' => 'St. Joseph’s School Jyothinagar, Husnabad (P.O.) Karimnagar Dt.- 505 417',
                                'principal' => 'Fr. D. Sudhakar',
                                'managed_by' => 'Warangal Diocesan Society',
                                'telephone' => '',
                                'history' => 'The Diocese Warangal established St.Joseph’s E.M School at Husnabad in the year 1999, Looking at the educational needs of the place. First it began in the sheds for about two years. Later, The Diocese of Warangal has constructed a school for the children of the locality. At present we have 20 acres of land in the present site. The school has come up to 5th standard with the strength of 391. The purpose of establishing this school is to give all-round development to the children of the locality and bring them up in their life. Fr.Y.Joji was instrumental in purchase of the land and in starting school here..!!'
                            ],
                            [
                                'id' => 'StMarksTMSchool',
                                'name' => 'St. MARK’S (T.M.) SCHOOL',
                                'year' => '1954',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Gunturupally, Narimetta, Jangaon',
                                'address' => 'St.Mark’s School Gunturupally (Vil) Narimetta (P.O.) Jangaon Via Warangal Dt. - 506 167',
                                'principal' => 'Sr. P. Robert',
                                'managed_by' => 'Catechist Sisters of St. Ann',
                                'telephone' => '',
                                'history' => 'St. Mark’s Primary School was established in the year 1954 by Catechist Sisters of St. Ann at the request of Most Rev. Alphonsus Beretta. The purpose was to educate catholic children of the surrounding catholic villages. Unfortunately, the details are not available.'
                            ],
                            [
                                'id' => 'StMarysEMSchoolRanipuram',
                                'name' => 'St. MARY’S (E.M.) SCHOOL',
                                'year' => '1999',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Ranipuram, Kothapally, Karimnagar',
                                'address' => 'St. Mary’s School Ranipuram (Vill), Kothapally P.O. Karimnagar Dt. - 505 451',
                                'principal' => 'Sr. Sailaja / Sr. Nirmala',
                                'managed_by' => 'Seva Missionary Sisters of our Lady',
                                'telephone' => '',
                                'history' => 'Most Rev. Thumma Bala invited the Sisters of Seva Missionaries of Mary to open their first Convent and a School at Ranipuram. They opened the school in 1999 with the Motto of direct evangelization and also through education.'
                            ],
                            [
                                'id' => 'StTheresasEMSchool',
                                'name' => 'St. THERESA’S E.M. SCHOOL',
                                'year' => '1999',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Atmakur, Warangal',
                                'address' => 'St. Theresa’s School Atmakur (P.O.) Warangal Dt. - 506 342',
                                'principal' => 'Sr. Vimala Mary / Sr. Jane Mary',
                                'managed_by' => 'Sisters of the Adoration of the Blessed Sacrament',
                                'telephone' => '',
                                'history' => 'St. Theresa’s School was started on 13th June, 1999 by the Sisters of the Adorarion of the Blessed Sacrament at the request of Most Rev. Thumma Bala. The purpose of establishing this institution is to impart quality education to the young so as to enable them to find their proper place in the Society. The Sisters lay great emphasis on character formation and cultured behaviour of the children entrusted to them.'
                            ],
                            [
                                'id' => 'StVincentPallottiEMSchool',
                                'name' => 'St. Vincent Pallotti (E.M.) School',
                                'year' => '2002',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Shanigaram, Regulapalli, Karimnagar',
                                'address' => 'St. Vincent Pallotti School Shanigaram, Regulapalli (Vill.) Karimnagar Dist.- 505 528',
                                'principal' => 'Sr. Beena / Sr. Celine',
                                'managed_by' => 'St. Vincent Pallotti Congregation',
                                'telephone' => '',
                                'history' => 'St.Vincent Pallotti E.M. School was started in 2001 by the then the Provincial  Lillia Cappretti on the request of Most Rev.Thumma Bala, the Bishop of Warangal. This school was started to give all-round  formation to  the children, with a special reference to Catholics.'
                            ],
                            [
                                'id' => 'JyothiEMSchool',
                                'name' => 'JYOTHI ENGLISH MEDIUM SCHOOL',
                                'year' => '2010',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Parkal, Warangal',
                                'address' => 'Jyothi E/M School, Bhoopalapally Road, Parkal 506 164, Warangal (Dt)',
                                'principal' => 'Sr. Joice Maria S.D. / Sr. Maria Rose .S.D.',
                                'managed_by' => 'Sisters of the Destitute',
                                'telephone' => '',
                                'history' => 'There are many private Eng. Med. Schools in Parkal. But they all aimed at making money. Villagers approached us to start an Eng. Med. School. The Bishop also felt the need of an Eng. Med. School, to give better education to the poor children in Parkal and surrounding villages. With this intention Jyothi Eng. Medium School was opened in 2010.'
                            ],
                            [
                                'id' => 'StJohnDeBrittoHighSchool',
                                'name' => 'ST. JOHN DE BRITTO HIGH SCHOOL',
                                'year' => '',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Kadavendi, Warangal',
                                'address' => 'St. John De Britto High School Kadavendi - 506302, Warangal District',
                                'principal' => 'Fr. T. Antony Joseph, SVD',
                                'managed_by' => 'Fathers of SVD Society',
                                'telephone' => '',
                                'history' => 'At the request of the poor and marginalized people of Kadavendi and nearby villages, Fr. Antony Samy, SVD established St. John De Britto High School, in the year 2003. The main aim of establishing this institution in the remote area is to eradicate the darkness of ignorance among the poor and marginalized people of this area and to proclaim the gospel and form new communities. The school was constructed with the help of the donation, received from Fr. John Schubert SVD, a missionary in Japan.'
                            ],
                            [
                                'id' => 'StAnthonysHighSchool',
                                'name' => 'ST. ANTHONY’S HIGH SCHOOL',
                                'year' => '',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Dharmasagar, Warangal',
                                'address' => 'St. Anthony’s High School Dharmasagar Village & Post, Via: Madikonda Warangal District - 506142',
                                'principal' => 'S. Leena Mary',
                                'managed_by' => 'Franciscan Sisters of the Immaculate Heart of Mary',
                                'telephone' => '',
                                'history' => 'The invitation of most Rev. Thumma Bala, the Bishop of Warangal and people of Dharmasagar, our St. Anthony’s E/M School was inaugurated on 09.06.2009. The provincial superior S. Anselm Theresa and S. Tiburcia Mary were the instrumental in opening this institution. The main purpose to educate the poor children of this area to “bring out inform potentials” and “to lead” them from darkness to light from ignore to know knowledge both to catholic and non Catholics.'
                            ],
                            [
                                'id' => 'NotreDameHighSchool',
                                'name' => 'NOTRE DAME HIGH SCHOOL',
                                'year' => '',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Theegarajupally, Sangem, Warangal',
                                'address' => 'Notre Dame E.M. School, Theegarajupally, Sangem (M), Warangal - 506310',
                                'principal' => 'SN. Mary Daisy. SND / Sr. Mary Ranjana Joseph, SND',
                                'managed_by' => 'Sisters of Notre Dame (Visitation Province, Bangalore)',
                                'telephone' => '',
                                'history' => 'Notre Dame E.M. School at Teegarajupally was started in the year 2007 with just 20 students. At the request of most Rev. Bishop Thumma Bala, the sister of notre dame of the visitation province, Bangalore, especially the then provincial superior, Sn. Mary Gayanti; took keen interest in opening the school for the less privileged and backward children of the area.

                                    The motlo of our school is “ story to god, service to all” our schoo9l is committed to impart quality education along with extra curricular activities. Discipline along with character formation is given prime importance. Presently we have classes from nursery to class – III. Our dream is to make this institution a fully pledged high school. As Notre dame education, it is our earnest concern to develop is our students a true love of god and a caring and loving relationship with one another.'
                            ],
                            [
                                'id' => 'StMarysSchoolDantalapally',
                                'name' => 'ST. MARY’S SCHOOL',
                                'year' => '2007',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Dantalapally, Narasimhulapet, Warangal',
                                'address' => 'St. Mary’s School, Dantalapally, Narasimhulapet Mdl, Warangal',
                                'principal' => 'Fr. Sagar Jose IMS / Sr. Divya Maria CMC',
                                'managed_by' => 'The Indian Missionary Society',
                                'telephone' => '',
                                'history' => 'Dantalapally is situated on the Warangal-Khammam Road, 72 Kms from Warangal city. It comes under Thorrur Parish. Dantalapally and its surroundings areas are basically backward rural area inhabited mostly by poor and uneducated farmers The school was started by the Indian Missionary Society in collaboration with the Sisters of the Congregation of the Mother of Carmel in 2007 in order to impart standard E/M education to the children of this area at an affordable cost.. Based on the Gospel values, the school gives preference to the children of the downtrodden and oppressed classes and gives concession in fees accordingly. The school was started with classes Nursery to III Std. in 2007 with the aim of upgrading year by year to Xth Std. Presently the School is up to Vth Std. The first Correspondent and the Head Mistress of the school continue in their posts till date.'
                            ],
                        ];

                        ?>
                        <?php foreach ($primaryschools as $school): ?>
                            <div class="card mb-4">
                                <div class="row no-gutters align-items-stretch" data-aos="fade-up"
                                    data-aos-anchor-placement="center-bottom"
                                    data-aos-duration="1000">
                                    <!-- Image -->
                                    <div class="col-lg-4 col-md-12">
                                        <img src="<?= base_url($school['image']) ?>" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="<?= $school['name'] ?>">
                                    </div>

                                    <!-- Info -->
                                    <div class="col-lg-8 col-md-12">
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
                                                            <span class="fw-bold">Principal/Correspondent</span><br><?= $school['principal'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Managed By -->
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="row text-secondary align-items-center">
                                                        <div class="col-3 pr-0">
                                                            <img class="img-fluid" src="<?= base_url('public/assets/images/icons/managment-icon2.jpg') ?>">
                                                        </div>
                                                        <div class="col-9" style="word-break: break-word;">
                                                            <span class="fw-bold">MANAGED BY</span><br><?= $school['managed_by'] ?>
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
                    </div>

                    <!-- Upper Primary School -->
                    <div class="tab-pane fade" id="btech" role="tabpanel" aria-labelledby="btech-tab">
                        <!-- <div class="academic_inn_head">
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
                        </div> -->

                        <?php
                        $upperschools = [
                            [
                                'id' => 'PrasentationupperPrimarySchool',
                                'name' => 'Prasentation Upper Primary School',
                                'year' => '1998',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'H.M/Correspondent,Presentation Upper Primary School,Cherial Village & P.O,Warangal Dt. - 506 223',
                                'principal' => 'Sr. Shyni Thomas/Sr. Jessy Thomas',
                                'managed_by' => 'Daughters of Presentation of Mary in the Temple',
                                'telephone' => ' (08710) 222512',
                                'history' => 'Presentation Primary School was started on 15th June, 1998 by Sr. Lorenza, the Regional Superior of the Presentation Sisters at Cherial  at the ivnitation of Most Rev. Thumma Bala. There are  5 Sisters who are rendering their services at Cherial.  About 450 students are studying in this school. It was established with the purpose of educating rural catholic and non-catholic children.'
                            ],
                            [
                                'id' => 'SacredHeartUpperPrimarySchool',
                                'name' => 'Sacred Heart Upper Primary School',
                                'year' => '1992',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'H.M./Correspondent Sacred Heart U.P. Primary School, Kanchanapally, Vil, Via Raghunathpalli, Warangal Dt. - 506 244',
                                'principal' => 'Sr. Lucy/Sr. Arogya',
                                'managed_by' => 'Catechist Sisters of St. Ann',
                                'telephone' => '(08716) 230647',
                                'history' => 'St. Joseph’s Girls’ Vocational Training Centre was started at Kumarapally with the consent of Most Rev. Thumma Bala, D.D. by Catechist Sisters of St. Ann in the Year 1992. It offers four trades. 1. Cutting and Tailoring; 2. Typing and Stenography; 3. Electronics (Mechanism T.V. & Radio); 4. Computers. This Institution is recognised by the State Government since 1992 and affiliated to the National Council for Vocational Training- Delhi as I.T.I.'
                            ],
                            [
                                'id' => 'StTheresasUPSchoolTM',
                                'name' => 'St.Theresa’ s U . P School(T . M)',
                                'year' => '1950',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'H.M/Correspondent,Presentation St.Theresa’ s U . P School(T . M) Thimmaraopet(P . O),
                                Chennaraopet Mandal,
                                Warangal Dt . -506 332',
                                'principal' => 'Sr. Monica',
                                'managed_by' => 'Catechist Sister of St.Ann',
                                'telephone' => '(08716) 230647',
                                'history' => 'St. Theresa’s Upper Primary School aims at imparting quality education both to catholic and non-catholic children in the rural area. It was established in 1950 by C.S.A. Sisters, when our former Bishop Most Rev. Alphonsus Beretta was the Bishop of Hyderabad and Sr. Enrichetta was the Mother General. There is a boarding attached to the school. Bishop Thumma Bala inaugurated the new school building on 31st July, 1998'
                            ]
                        ];
                        ?>
                        <?php foreach ($upperschools as $school): ?>
                            <div class="card mb-4">
                                <div class="row no-gutters align-items-stretch" data-aos="fade-up"
                                    data-aos-anchor-placement="center-bottom"
                                    data-aos-duration="1000">
                                    <!-- Image -->
                                    <div class="col-lg-4 col-md-12">
                                        <img src="<?= base_url($school['image']) ?>" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="<?= $school['name'] ?>">
                                    </div>

                                    <!-- Info -->
                                    <div class="col-lg-8 col-md-12">
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
                                                            <span class="fw-bold">Principal/Correspondent</span><br><?= $school['principal'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Managed By -->
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="row text-secondary align-items-center">
                                                        <div class="col-3 pr-0 text-center fs-4">
                                                            <i class="fas fa-building custom-icon"></i>
                                                        </div>
                                                        <div class="col-9" style="word-break: break-word;">
                                                            <span class="fw-bold">MANAGED BY</span><br><?= $school['managed_by'] ?>
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

                    </div>

                    <!-- High School -->
                    <div class="tab-pane fade" id="mtech" role="tabpanel" aria-labelledby="mtech-tab">
                        <!-- first row school -->
                        <!-- <div class="academic_inn_head">
                            <h3>ASSISI HIGH SCHOOL </h3>
                            <hr>
                        </div> -->
                        <div class="card mb-4" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom"
                            data-aos-duration="2000">
                            <div class="row no-gutters align-items-stretch" id="schoolCard">
                                <!-- Image Side -->
                                <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                                    <img src="<?= base_url('public/assets/images/education/Assisi-high-school2.jpg') ?>" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <!-- Info Side -->
                                <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                                    <div class="card-body">
                                        <!-- <div class="row apoicons">
                                           
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
                                                        <span>MANAGED BY</span><br>
                                                        Sisters of Charity of Sts. Barthalomea Copitanio and Vincenza Gerosa
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

                                        </div> -->
                                        <div class="row apoicons">
                                            <h5 class="card-title text-center">ASSISI HIGH SCHOOL</h5>
                                            <hr>
                                            <!-- Formed On -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>"></div>
                                                    <div class="col-9"><span class="fw-bold">Formed on</span><br>1973</div>
                                                </div>
                                            </div>

                                            <!-- Place -->
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/church-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9"><span class="fw-bold">Place</span><br>Warangal</div>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Address</span><br>
                                                        Assisi High School, Assisi Nagar, Mill Colony, Warangal(Dist) - 506 013
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Principal/Correspondent -->
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Principal/Correspondent</span><br>
                                                        Sr. Moksha Salomon / Sr. A. Celestina
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Managed By -->
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0 text-center fs-4">
                                                        <i class="fas fa-building custom-icon"></i>
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span class="fw-bold">MANAGED BY</span><br>
                                                        Sisters of Charity of Sts. Barthalomea Copitanio and Vincenza Gerosa
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Telephone -->
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Telephone</span><br>-
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- View History Button -->
                                        <div class="text-center ">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#historyModal">View History <i class="fas fa-arrow-right ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>


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
                        <!-- Second row school -->



                        <!-- <div class="academic_inn_head">
                            <h3>BISHOP BERETTA E.M. HIGH SCHOOL
                                (1990)</h3>
                            <hr>
                        </div> -->
                        <div class="card mb-4" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom"
                            data-aos-duration="2000">
                            <div class="row no-gutters align-items-stretch" id="schoolCard">
                                <!-- Image Side -->
                                <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                                    <img src="<?= base_url('public/assets/images/education/BISHOP-BERETTA-E_M-HIGHS-CHOOL.jpg') ?>" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <!-- Info Side -->
                                <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                            <h5 class="card-title text-center">BISHOP BERETTA E.M. HIGH SCHOOL</h5>
                                            <hr>
                                            <!-- Info items (shortened for brevity) -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>"></div>
                                                    <div class="col-9"><span class="fw-bold">Formed on</span><br>1990</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/church-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Place</span><br>Warangal
                                                    </div>
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
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Principal</span><br>
                                                        Rev. Fr. T.Yaga Reddy
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <!-- <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/mail-icon.jpg') ?>">
                                                    </div> -->
                                                    <div class="col-3 pr-0 text-center fs-4">
                                                        <i class="fas fa-building custom-icon"></i>
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span class="fw-bold">MANAGED BY</span><br>
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
                                            <!-- Add other info items here -->
                                        </div>

                                        <!-- View History Button -->
                                        <div class="text-center ">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#BishopBerettaSchoolModal">View History <i class="bi bi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- History Modal -->
                        <div class="modal fade" id="BishopBerettaSchoolModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="historyModalLabel">BISHOP BERETTA E.M. HIGH SCHOOL (1990) - History</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Bishop Beretta School (E.M.) was started by Most Rev. Thumma Bala at Fatimanagar in 1990. The primary aim is to provide education in English Medium
                                            to the Diocesan Catholic Children at an affordable cost. It was named so in recognition of the valuable services for 33 years of late Rt. Rev. Alphonsus
                                            Beretta, the first Bishop of Warangal. It began in the residential quarters on the road side at Fatimanagar. Later, the school was shifted in 1995 to the
                                            new building, which was built beside the B.Ed. College. It was blessed and inaugurated by Most Rev. Thumma Bala on 18th September 1995. The school was
                                            up-graded into high school. Owing to the growing strength, a separate building for Kindergarten was built in 2000 in memory of late Fr. Massimo, Milan,
                                            financially helped by his parents, Erika Bignetti & Piero Cappretti, Venegono Superiore, Italy through the instrumentality of Fr. T.Augustine,
                                            the then H.M. & Correspondent. Due to the increasing demand, a third section was opened in June 2001.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Third school -->

                        <div class="card mb-4" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom"
                            data-aos-duration="2000">
                            <div class="row no-gutters align-items-stretch" id="schoolCard">
                                <!-- Image Side -->
                                <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                                    <img src="<?= base_url('public/assets/images/education/Carmel-Integrate-school2.jpg') ?>" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <!-- Info Side -->
                                <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                            <h5 class="card-title text-center">CARMEL CONVENT SCHOOL (School for the Blind)
                                                (1993)</h5>
                                            <hr>
                                            <!-- Info items (shortened for brevity) -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>"></div>
                                                    <div class="col-9"><span class="fw-bold">Formed on</span><br>1993</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/church-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Place</span><br>Karimnagar
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Address</span><br>
                                                        Carmel Integrated School
                                                        Elukaturthy(P.O.) Karimnagar
                                                        Dt.-505476
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Principal</span><br>
                                                        Sr. Regina
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <!-- <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/mail-icon.jpg') ?>">
                                                    </div> -->
                                                    <div class="col-3 pr-0 text-center fs-4">
                                                        <i class="fas fa-building custom-icon"></i>
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span class="fw-bold">MANAGED BY</span><br>
                                                        Congregation of the / Mother of Carmel
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Telephone</span><br>-
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add other info items here -->
                                        </div>

                                        <!-- View History Button -->
                                        <div class="text-center">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#CARMELCONVENTSCHOOLModal">View History <i class="bi bi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- History Modal -->
                        <div class="modal fade" id="CARMELCONVENTSCHOOLModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="historyModalLabel">CARMEL CONVENT SCHOOL (1993) - History</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Carmel Convent Integrated School for visually handicapped is yet another initiative of Most Rev.Thumma Bala. Sr. Alfreda, the then Regional Superior,
                                            came forward to open this school. It was started on 5th July 1993. Fr. Matthew Manayathumary,MSFS, the then Parish Priest of Elukaturthy, was instrumental
                                            in paving the way forward to this school. There is also boarding facility for the children. The boarding was built in 1997 and it was blessed by Bishop
                                            Thumma Bala on 1st Jan. 1998. The new school building was blessed by Bishop Thumma Bala on 7th June, 1999.At present we have 75 children in the boarding
                                            and out of them 36 are visually challenged receiving free education.The children are being moulded in the hands of the sisters who try impart moral education
                                            through their dedicated service
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fourth School -->
                        <div class="card mb-4" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom"
                            data-aos-duration="2000">
                            <div class="row no-gutters align-items-stretch" id="schoolCard">
                                <!-- Image Side -->
                                <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                                    <img src="<?= base_url('public/assets/images/education/Carmel-Integrate-school2.jpg') ?>" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <!-- Info Side -->
                                <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                            <h5 class="card-title text-center">DON BOSCO ENGLISH MEDIUM SCHOOL(1993)</h5>
                                            <hr>
                                            <!-- Info items (shortened for brevity) -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>"></div>
                                                    <div class="col-9"><span class="fw-bold">Formed on</span><br>1993</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/church-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Place</span><br>Karimnagar
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Address</span><br>
                                                        Don Boso High School (E.M.)
                                                        Mariapuram, Post Box-4
                                                        Warangal Dt.
                                                        Dt.-506005
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Principal/Correspondent</span><br>
                                                        Fr.Joseph Abraham /
                                                        Fr. Benny Mathew
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <!-- <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/mail-icon.jpg') ?>">
                                                    </div> -->
                                                    <div class="col-3 pr-0 text-center fs-4">
                                                        <i class="fas fa-building custom-icon"></i>
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span class="fw-bold">MANAGED BY</span><br>
                                                        Salesians of Don Bosco
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Telephone</span><br>(0870) 2685104
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add other info items here -->
                                        </div>

                                        <!-- View History Button -->
                                        <div class="text-center">
                                            <a href=""></a>
                                            <button class="btn btn-outline-primary btn-sm">View Website <i class="bi bi-arrow-right ms-1"></i></button>
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#DONBOSCOENGLISHMEDIUMSCHOOLModal">View History <i class="bi bi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- History Modal -->
                        <div class="modal fade" id="DONBOSCOENGLISHMEDIUMSCHOOLModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="historyModalLabel">DON BOSCO ENGLISH MEDIUM SCHOOL (1993) - History</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Don Bosco School at Mariapuram was started in the year 1993. Every year, one class was added to the existing ones.
                                            The school aims at all round development of students from all strata of life in the Society. Academic success is
                                            the constant aim of the classroom. But more important than the academic success is the building up of character.
                                            Honesty, truthfulness, integrity and piety are inculcated in the children by the well-regulated discipline.
                                            Moral instruction, which is essencial for character formation, is imparted to all the pupils.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fifth school -->


                        <div class="card mb-4" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom"
                            data-aos-duration="2000">
                            <div class="row no-gutters align-items-stretch" id="schoolCard">
                                <!-- Image Side -->
                                <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                                    <img src="<?= base_url('public/assets/images/education/Carmel-Integrate-school2.jpg') ?>" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <!-- Info Side -->
                                <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                            <h5 class="card-title text-center">FATIMA GIRLS T.M. & E.M. HIGH SCHOOL (1953)</h5>
                                            <hr>
                                            <!-- Info items (shortened for brevity) -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>"></div>
                                                    <div class="col-9"><span class="fw-bold">Formed on</span><br>1953</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/church-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Place</span><br>Karimnagar
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Address</span><br>
                                                        Fatima Girls’ High School
                                                        Fatimanagar Warangal - 506 004
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Principal/Correspondent</span><br>
                                                        Sr. Sleeva.T, FMM
                                                        /Sr.G.Theresamma, FMM
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <!-- <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/mail-icon.jpg') ?>">
                                                    </div> -->
                                                    <div class="col-3 pr-0 text-center fs-4">
                                                        <i class="fas fa-building custom-icon"></i>
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span class="fw-bold">MANAGED BY</span><br>
                                                        Franciscan Missionaries of Mary
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Telephone</span><br>(0870) 2459355
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add other info items here -->
                                        </div>

                                        <!-- View History Button -->
                                        <div class="text-center">
                                            <a href=""></a>
                                            <button class="btn btn-outline-primary btn-sm">View Website <i class="bi bi-arrow-right ms-1"></i></button>
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#FATIMAGIRLSHIGHSCHOOLModal">View History <i class="bi bi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- History Modal -->
                        <div class="modal fade" id="FATIMAGIRLSHIGHSCHOOLModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="historyModalLabel">FATIMA GIRLS T.M. & E.M. HIGH SCHOOL (1953) - History</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            To promote women’s development, Most Rev. Alphonsus Beretta invited Franciscan Missionaries of Mary to open
                                            an educational institution for girls and to take up pastoral and social work. The then Provincial Mother Rymond
                                            Lulla sent a group of FMM Sisters in June 1953 to Fatimanagar. In the same year, they opened Fatima Girls’ School
                                            in huts and sheds with fifty orphans in a forest-like area. It deserves to mention that this was the first
                                            educational institution in Fatimanagar. Under the able guidance of Mother Clemens, the superior of the Mission,
                                            the Mother Jean Louis, the principal, with the help of Bro. Sala, the architect and builder, completed the new
                                            school building in 1958. In its long history of service, nearly 11,250 catholic girls were educated out of
                                            35,284 students.It is interestisng to note that this was the first longest building in Warangal Town, then.
                                            The school is committed to impart qulaity education along with extra curricular activities such as singing,
                                            dancing, quiz, dramatizing, social service etc. Character formation is given prime importance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- SIxsth School -->


                        <div class="card mb-4" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom"
                            data-aos-duration="1000">
                            <div class="row no-gutters align-items-stretch" id="schoolCard">
                                <!-- Image Side -->
                                <div class="col-lg-4 col-md-12 transition-col" id="imageCol">
                                    <img src="<?= base_url('public/assets/images/education/Carmel-Integrate-school2.jpg') ?>" class="img-fluid h-100 w-100" alt="EEE" style="object-fit: cover;">
                                </div>

                                <!-- Info Side -->
                                <div class="col-lg-8 col-md-12 transition-col" id="infoCol">
                                    <div class="card-body">
                                        <div class="row apoicons">
                                            <h5 class="card-title text-center">FATIMA ENGLISH MEDIUM HIGH SCHOOL (1980)</h5>
                                            <hr>
                                            <!-- Info items (shortened for brevity) -->
                                            <div class="col-sm-6 mb-3">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0"><img class="img-fluid" src="<?= base_url('public/assets/images/icons/est-icon.jpg') ?>"></div>
                                                    <div class="col-9"><span class="fw-bold">Formed on</span><br>1980</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/church-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Place</span><br>Karimnagar
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/place-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Address</span><br>
                                                        Fatima High School
                                                        Mahabubabad - 506 101
                                                        Warangal Dt.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center apodir">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/vicar-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Principal/Correspondent</span><br>
                                                        Sr. Anasthasia / Sr. Josphine
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <!-- <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/mail-icon.jpg') ?>">
                                                    </div> -->
                                                    <div class="col-3 pr-0 text-center fs-4">
                                                        <i class="fas fa-building custom-icon"></i>
                                                    </div>
                                                    <div class="col-9" style="word-break: break-word;">
                                                        <span class="fw-bold">MANAGED BY</span><br>
                                                        Catechist Sisters of St. Ann
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 mb-4">
                                                <div class="row text-secondary align-items-center">
                                                    <div class="col-3 pr-0">
                                                        <img class="img-fluid" src="<?= base_url('public/assets/images/icons/phone-icon.jpg') ?>">
                                                    </div>
                                                    <div class="col-9">
                                                        <span class="fw-bold">Telephone</span><br>-
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add other info items here -->
                                        </div>

                                        <!-- View History Button -->
                                        <div class="text-center">
                                            <a href=""></a>
                                            <button class="btn btn-outline-primary btn-sm">View Website <i class="bi bi-arrow-right ms-1"></i></button>
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#FATIMAENGLISHMEDIUMHIGHSCHOOLModal">View History <i class="bi bi-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- History Modal -->
                        <div class="modal fade" id="FATIMAENGLISHMEDIUMHIGHSCHOOLModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="historyModalLabel">FATIMA ENGLISH MEDIUM HIGH SCHOOL (1980) - History</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Fatima School, English Medium, was established in 1980 by the Catechist Sisters of St. Ann during the time of Most Rev.
                                            Alphonsus Beretta and Rev. Sr. Celestine Gali, the then Superior General. Fr. Y. Sebastian, the then Parish Priest here,
                                            was intrumental in procuring the land in its initial stage.

                                            The main purpose of establishing this institution is to impart quality education to the tribal children in the surrounding
                                            areas of Mahabubabad. Owing to the selfless services of many Sisters, the school grew up, meeting the needs of the Society.
                                            Thus so far, 1100 students studied & left the portals of Fatima, of whom 60 are Catholics. In course of time,
                                            it turned into an instrument of christian witness and service to the tribals. The present school building was inaugurated
                                            by Bishop Thumma Bala on 1st February 1995.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $schools = [
                            [
                                'id' => 'GANDHICENTENARYGIRLSTELUGUMEDIUMHIGHSCHOOL',
                                'name' => 'GANDHI  CENTENARY GIRLS’ TELUGU MEDIUM HIGH SCHOOL',
                                'year' => '1967',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'Gandhi Centenary T.M. High School, Lourdunagar Karimnagar - 505002',
                                'principal' => 'Sr. B. Sundari /Sr. Lourdu Mary',
                                'managed_by' => 'Catechist Sisters of St. Ann',
                                'telephone' => '-',
                                'history' => 'Gandhi Centenary T.M.High School was started in the year 1967 by Catechist Sisters of St. Ann at Lourdunagar during the time of Most Rev. Alphonsus Beretta and Rev. Sr. Enrichetta, the then Mother General.

                                             The Main purpose of establishing the school is to impart good education and all-round formation of the poor children of Karimnagar District. As a result of the services of many Sisters, who worked in this institution, adequate progress has been made towards fulfilling this objective. There were about 3,518 students who have studied so far in this school and 1,875 among them are Catholics.'
                            ],
                            [
                                'id' => 'INFANTJESUSCONVENTHIGHSCHOOL ',
                                'name' => 'INFANT JESUS CONVENT HIGH SCHOOL ',
                                'year' => '1991',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'Infant Jesus Convent High School Reddipalem Vil, Mogilicherla P.O. Warangal Dt. - 506 006',
                                'principal' => 'Sr. Lydiya, SD / Rev. Sr. Aggie, SD',
                                'managed_by' => 'Sisters of the Destitute (S.D.)',
                                'telephone' => '-',
                                'history' => 'Most Rev. Thumma Bala felt the need of a school for the physically handicapped in Warangal Diocese and entrusted that duty to the Congregation of the Sisters of the Destitute under with the initiative of                   Sr. Petite Terese, the then Mother Superior of the Congregation. Fr.  Thomas Ampatt OFM Cap  was instrumental in bringing the Sisters and helping them in their initial stage of this school in 1991. It is an integrated school for the physically handicapped children. Normal children from 13 surrounding villages are also the beneficiaries of this institution. Bishop Thumma Bala blessed and inaugurated the boarding home on 16th March, 1994 and school building on 11th June, 1996.

                                                 The main purpose of establishing this institution is to impart good education to both Catholics and Non-catholics and especially to the physically handicapped children.'
                            ],
                            [
                                'id' => 'LITTLEFLOWERHIGHSCHOOLFORTHEDEAFANDDUMP',
                                'name' => 'LITTLE FLOWER HIGH SCHOOL FOR THE DEAF AND DUMP',
                                'year' => '1990',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'Little Flower High School for
                                                the Deaf Karunapuram,
                                                Peddapendial( P.O) Warangal
                                                Dt.- 506 151',
                                'principal' => 'Sr. Pius Mary',
                                'managed_by' => 'Assisi Sisters of Mary Immaculate',
                                'telephone' => '( 08711) 243121',
                                'history' => 'At the request of Most  Rev. Thumma Bala,  the Provincial, Sr. Celestine Francis, of Assisi Sisters of Mary Immaculate of Sacred Heart Province started this school for deaf and dumb on 6th August 1990. The boarding was blessed on 3rd July, 1994 and new school building was blessed and inaugurated on 21st September 1995 by Bishop Thumma Bala.

                                                        The main purpose of this institution is to give education to the hearing impaired children in the area of Warangal Diocese. This is the first and the only catholic educational institution which serves  the deaf and dumb children in Warangal Diocese.
                                                    .'
                            ],
                            [
                                'id' => 'LITTLEFLOWEREMHIGHSCHOOL',
                                'name' => 'LITTLE FLOWER E. M. HIGH SCHOOL',
                                'year' => 'June 26th, 1994',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'Little Flower High School Raya-Chinnapuram Mulugu, Warangal Dt. - 506 343',
                                'principal' => 'Sr. Victoria /
                                                Sr. Jessy Jacob',
                                'managed_by' => 'Missionary Sisters of Mary Help of Christians (MSMHC)',
                                'telephone' => '-',
                                'history' => 'Little Flower School was started on June 26th, 1994 at the invitation  of Most  Rev. Thumma Bala by Sr. Elsa Puthenpuraka, the Provincial of Tezpur, Assam. Fr. A. Prakash was instrumental in procuring the land and in getting the Sisters.The purpose of establishing this school is to serve and bear witness to Christ through the apostolate of education. It imparts moral, social cultural and academic studies to the children. The needy children, both catholics and non-catholics are given concessions and free education.'
                            ],
                            [
                                'id' => 'LOYOLATMHIGHSCHOOL',
                                'name' => 'LOYOLA  T.M. HIGH SCHOOL',
                                'year' => '1980',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'Loyola High School Rekurthy,
                                                Malkapur (Post) Karimnagar
                                                Dt.- 505 451',
                                'principal' => 'Rev. Fr. Wilson / Fr.Inna Reddy',
                                'managed_by' => 'Andhra Jesuit Province',
                                'telephone' => '( 0878)  2256808',
                                'history' => 'At the invitation of Most Rev. Alphonsus Beretta, of Mr. K.S. Shrarma, the District Collector of Karimnagar and of the People of the locality, Fr. Elias Arockiasamy, SJ, was delegated in 1980 to venture on establishing a school. Later, Fr. William Thomas joined him to pave the way for opening of Loyola High School at Lourdunagar in the buildings provided by the Diocese. In 1985, the school was shifted to Rekurthy. Besides academic excellence and discipline, the school is known for the extra curricular activities such as literacy programmes for nearby villages. The purpose of this school is to impart education to the poor village children, making them knowledgeable and wise  citizens of India. It aims to form children to be the leaders in all walks of life and will serve their fellow men in Justice and truth. Hostel facility is provided for the students coming from distant places.'
                            ],
                            [
                                'id' => 'MARIARANITMHIGHSCHOOLPrimarySchoolEM',
                                'name' => 'MARIA RANI  T.M. HIGH SCHOOL & Primary School E.M.',
                                'year' => '1991 & 1999',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'Maria Rani High School Karunapuram, Peddapendial P.O. Warangal Dt. - 506 151',
                                'principal' => 'Sr. Lilly Michael / Sr. Amala Rani',
                                'managed_by' => 'Missionaries of Mary Mediatrix',
                                'telephone' => '-',
                                'history' => 'Maria Rani School, Telugu Medium, was established on 12th June 1991 at Karunapuram with  the encouragement of  Most Rev. Thumma Bala  and at the initiative of Rev. Sr. Anne Narikattu, the then Delegate Superior.  Bishop Thumma Bala blessed Mariarani boarding home on 3rd July, 1993 and new school building on 6th July, 1996.

                                    The main aim of this institution is to focus on the promotion of education of the underprivileged female children and the upliftment of the women folk. It provides educational opportunity and all-round formation for girls. The school has boarding facility. It provides good opportunity to the children from the neighbouring villages.Maria Rani E/M was established on 12th June 1999.The present school building was inagurated by bishop Thumma Bala on 22nd Agust 2008.'
                            ],


                            [
                                'id' => 'MOUNTCARMELEMHIGHSCHOOL',
                                'name' => 'MOUNT CARMEL  E.M. HIGH SCHOOL',
                                'year' => '1996',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'Mount Carmel High School Karimnagar Dt.- 505 455',
                                'principal' => 'Sr. Rincy',
                                'managed_by' => 'Congregation of Mother of Carmel',
                                'telephone' => '(08742) 223893',
                                'history' => 'At the request of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial, Sr. Dominic of Congregation of Mother of Carmel, decided to open a school to create good educational facility to the Town people of Jagtial. Thus, Mount Carmel High School was started in June, 1996 at Dharur, Jagtial, Karimnagar Dt. The school was blessed and inaugurated by Bishop Thumma Bala on 2nd April, 1998.'
                            ],

                            [
                                'id' => 'NIRMALAEMTMHIGHSCHOOL',
                                'name' => 'NIRMALA  E.M. & T.M. HIGH SCHOOL',
                                'year' => '1966',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'Nirmala High School
                                            Dornakal - 506 381
                                            Warangal Dt.',
                                'principal' => 'Sr.Vilma / Sr.Venancia',
                                'managed_by' => 'Missionary Sisters of the Immaculate',
                                'telephone' => '-',
                                'history' => 'This Institution was established in June, 1966 by Nirmala Sisters at Dornakal at the request of Most Rev. Alphonsus Beretta.  Rev. Sr. Rita Maggioni was the then Regional Superior of Region. The primary purpose of establishing this institution was to impart quality education and all-round formation to both catholic and non-catholic students of Dornakal Town, especially to the children of railway employees.  It has both English & Telugu Media. With the services of several Headmistresses and the Staff, the school has steadily grown to the present status.  The present school building was blessed and inaugurated by Bishop Thumma Bala on 29th June, 1996.'
                            ],
                            [
                                'id' => 'NIRMALAHIGHSCHOOLTM',
                                'name' => 'NIRMALA HIGH SCHOOL  (T.M.)',
                                'year' => '1978',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'Nirmala High School Shanthinagar,
                                        P.B.No. 2 Vemulawada (Mandal)
                                        Karimnagar Dt. - 505 302',
                                'principal' => 'Sr. Ancy Jourge / Sr.Thomasamma.',
                                'managed_by' => 'Missionary Sisters of the Immaculate',
                                'telephone' => '-',
                                'history' => 'Shantinagar and its surrounding villages in Karimnagar District are socially and economically backward with a less number of christian population. Literacy was at the lowest percentage.  Becoming aware of the situation and in order to uplift the people, on the invitation of late Most Rev. alphonsus Beretta, the Bishop of Warangal then, Sr. Carla Reboldi, the then Regional Superior of the Missionary Sisters of the Immaulate, started Nirmala Primary School at Shanthinagar in 1978.  In 1999 it was up-graded into a High School.'
                            ],
                            [
                                'id' => 'ROSAMYSTICACONVENTSCHOOL',
                                'name' => 'ROSA MYSTICA CONVENT SCHOOL',
                                'year' => '1993',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'Rosa Mystica High School Kamalapuram( P.O.) Warangal Dt. - 506 172',
                                'principal' => 'Sr. Paulina / Sr. Andria',
                                'managed_by' => 'Congregation of the Carmelite Sisters',
                                'telephone' => '-',
                                'history' => 'At the request of A.P.Rayons and at the invitation of Bishop Thumma Bala, Sisters of the Congregation of Carmelite Religious opened a Convent at Kamalapuram in 1992 to run & manage the Thapar Vidya Vihar, owned by the A.P. Rayons. A year later, they opened an independent school by name Rosa Mystica Convent School in the Church Compound at Kamalapuram on 13th June 1993. Sr. Mary Euphrecia,  Regional Superior at the time of its establishment, took a lot of initiative in realizing the project.The aim of the school is  to provide educational service to this most backward mission tribal & forest area of the Diocese.'
                            ],


                            [
                                'id' => 'SACREDHEARTGIRLSTMEMHIGHSCHOOL',
                                'name' => 'SACRED HEART GIRLS’  T.M. & E.M.  HIGH SCHOOL',
                                'year' => '1966',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'Sacred Heart Girls’ High School Godavarikhani - 505 209 Karimnagar Dt.',
                                'principal' => 'Sr. M.Appalonia / Sr.Elizabeth',
                                'managed_by' => 'Franciscan Missionaries of Mary',
                                'telephone' => '( 08728) 244352',
                                'history' => 'This institution was established in the year 1966 by F.M.M. Sisters at Godavarikhani during the time of  Most Rev. Alphonsus Beretta and Rev. Sr. Mary Law, the Provincial, at that time. The main purpose of establishing this institution was to impart good education and all-round formation  both to catholic and non-catholic children of the employees of Singareni Coal Mines. From June, 1966 to 1978, the school  remained as a upper primary school and in 1979 it was up-graded to high school. 5,000 students have studied in the school so far and 600 of them are Catholics.'
                            ],
                            [
                                'id' => 'STALPHONESESHIGHSCHOOL',
                                'name' => 'ST. ALPHONESE"S HIGH SCHOOL',
                                'year' => '1986',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'H.M./Correspondent ,ST.
                                                ALPHONESE"S HIGH SCHOOL,Lourdunagar,Jyothinagar
                                                ,Karimnagar-505 002',
                                'principal' => 'Rev.Fr.P.Raja',
                                'managed_by' => 'Warangal Diocese Educational Society',
                                'telephone' => '-',
                                'history' => 'St. Alphone’s High School (T.M) was started as a tutorial school in August, 1986 by Warangal Diocesan Society during the time of Msgr.K.Joseph, the then Administrator of the Diocese. Later in March 1987, Bishop Bala made a serious study of the viability of running a regular school mainly to educate the catholic children. Having received a positive report, the Diocese established this school from VI to IX at a time. The same year, the school, got the approval of the Govt. of A.P.Fr.B.Anthony was the first Correspondent. An attached boarding for boys was opened simultaneously Fr.Basani Prakash was appointed the first Director of the boarding. He also taught regularly in the school. In 1992 a primary section T.M. was opened, hoping to serve the needs of the rural children. The main purpose of establishing this institution was to accommodate the catholic boys of the Diocese and to impart quality education in the light of gospel values. As there was no strength in the primary section, it had to be closed down in a few year’s time. In 1998, English Medium was started to meet the growing local needs. The new School block for this English medium was inaugurated and blessed by Bishop Thumma Bala on 10th July, 1999

                                        Till date, 900 students received S.S.C. Certificates from the School of whom 300 were Catholics. It has to be noted that the Jesuits ran Loyola high school in these premises earlier for some time...'
                            ],
                            [
                                'id' => 'STANNSEMGIRLSHIGHSCHOOL ',
                                'name' => 'ST. ANN’S E.M. GIRLS’ HIGH SCHOOL ',
                                'year' => '1964',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. Ann’s Girls’ High School Kazipet P.O. Warangal - 506 003    ',
                                'principal' => 'Sr. Antonoa / Sr. Sally Joseph',
                                'managed_by' => 'Sisters of St. Ann of Providence',
                                'telephone' => '(0870) 2576320',
                                'history' => 'St. Ann’s English Medium School  was established in 1964 during the time of Most Rev. Alphonsus Beretta and Sr. Mary Alessandra, the then Provincial of the Sisters of St. Ann. Prior to the establishment of this institution, they had worked in Railway School for two academic years from 1962 to 1964.
                                    The purpose of starting this school is to provide  all-round education to every student admitted in it, irrespective of caste. creed and social status,  with a preference to the  catholic children and  to the children of the nearby villages.'
                            ],
                            [
                                'id' => 'STANNSGIRLSHIGHSCHOOLTM',
                                'name' => 'ST. ANN’S GIRLS’ HIGH SCHOOL T.M',
                                'year' => '1933',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. Ann’s High School
                                            Reddipalem( P.O.) Via  Wardhannapet Warangal- Dt. - 506 313',
                                'principal' => 'Sr. Prabhavathi/ Sr. Pushpa',
                                'managed_by' => 'Catechist Sisters of St. Ann',
                                'telephone' => '-',

                                'history' => 'St. Ann’s School is one of the oldest schools in the Diocese. It was established in the year 1933 by Catechist Sisters of St. Ann as a primary school with the support of Most Rev. Vismara, PIME, the then Bishop of Hyderabad.
                                            The main purpose of establishing this school is to impart quality education and all-round development both to catholic and non-catholic girls of this rural area. Living up to its motive and purpose, this school has served to 6,594 rural catholic girls and boys out of 9,496 that passed through the school, so far.'
                            ],
                            [
                                'id' => 'STANNSGIRLSEMHIGHSCHOOL',
                                'name' => 'ST. ANN’S GIRLS’ E.M. HIGH SCHOOL ',
                                'year' => '1993',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'St. Ann’s High School Rangampalli (Vill.) Peddapalli (P.O.) Karimnagar Dt. - 505 172',
                                'principal' => 'Sr. Anni/ Sr. Cicily',
                                'managed_by' => 'Sisters of St. Ann of Providence',
                                'telephone' => '(08728) 222288',
                                'history' => 'Rev. Fr. L. Delissandri, PIME, the then Parish Priest of Appannapeta, seeing the educational needs of the people of Pedapalli town and surrounding villages, bought the land, constructed the school building in the year 1993 and invited Sisters of St. Ann of Provindence with the permission of Bishop Thumma Bala. They opened a school in June, 1993. The school’s objective is to provide quality education on christian principles to children and youth.'
                            ],
                            // spacess
                            [
                                'id' => 'StAUGUSTINESHIGHSCHOOLEM',
                                'name' => 'St.AUGUSTINE’S HIGH SCHOOL (E.M.)',
                                'year' => '1994',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. Augustine’s High School Sevanagar, Maripeda (P.O.) Warangal Dt. - 506 315',
                                'principal' => 'Sr. Tessina / Sr. Alphonsa Abraham',
                                'managed_by' => 'Franciscan Clarist Province',
                                'telephone' => '-',
                                'history' => 'At the Invitation of  Most Rev. Thumma Bala,  the Bishop of Warangal, the then  Provincial Sr. Fatima, F.C.C., estabilished St. Augustine’s School in 1994 at Maripeda.  The School is situated in the rural area, where most of the people are tribals and illiterate.  Fr. M.P. Joseph has been instumental to get the land, in getting Sisters and in all the constructions there. The purpose of this school is to bring the people / children out of their ignorance and also proclaim the Good News through the medium of education.'
                            ],
                            [
                                'id' => 'StFRANCISDESALESHIGHSCHOOLEM',
                                'name' => 'St. FRANCIS DE SALES HIGH SCHOOL (E.M.)',
                                'year' => '1995',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'S.F.S. School                     Francis Nagar, Korutla - 505 326 Karimnagar Dt.',
                                'principal' => 'Rev. Fr. John.V.V / Rev. Fr. G. Sandeep Reddy, MSFS',
                                'managed_by' => 'Missionaries of St. Francis de Sales',
                                'telephone' => '-',
                                'history' => 'The S.F.S. School was started in June 1995 under the patronage of Most Rev. Thumma Bala and Rev. Fr. Mani Panthalani, MSFS, Provincial of the Visakhapatnam Province of the Missionaries of St. Francis de Sales for the purpose of Mission Work, for Christian Presence and influence through education apostolate. It is for the spiritual and  all-round upliftment of the rural and remote population eventually.'
                            ],
                            [
                                'id' => 'StJOHNSHIGHSCHOOLEM',
                                'name' => 'St. JOHN’S HIGH SCHOOL ( E.M.)',
                                'year' => '1963',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'St. John’s High School Lourdunagar Karimnagar - 505 002',
                                'principal' => 'Sr. B. Sundari / Sr. Margaret',
                                'managed_by' => 'Catechist Sisters of St. Ann',
                                'telephone' => '-',
                                'history' => 'St. John’s E.M. School was established in 1963 by Catechist Sisters of St. Ann   at the invitation of Most Rev. Alphonsus Beretta and during the time Sr. Enrichetta, the then Mother General. At first, it was started in Thukkarao’s Compound as a primary school. Later in 1967,  the school was shifted to the present site, Lourdunagar. Gradually, it was up-graded into a High School.
                                                The main purpose of establishing this institution is to impart good education and all-round formation to both catholic and non-catholic students through English Medium. Till today, 8000 students have been educated, of whom 2500 are Catholics.'
                            ],
                            [
                                'id' => 'StAnthonysHighSchoolTM',
                                'name' => "St Anthony's High School(T . M)",
                                'year' => '1990',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => "St.Anthony's HIgh School (T.M),Dharmasagar,Vill & PO Via:Madikonda,Warangal Dt. - 506 142",
                                'principal' => 'Sr.Maria',
                                'managed_by' => 'Franciscan Sisters of the Immaculate Heart of Mary',
                                'telephone' => '(0870) 2581362',
                                'history' => 'St. Anthony’s School was established on 21st June, 1993 by the Franciscan Sisters of the Immaculate Heart of Mary, on the invitation of Most Rev. Thumma Bala, Bishop of Warangal. The Provincial Superior, Sr.Arogya Mary, and Sr. Irudhaya Mary, the first Headmistress, were instrumental in opening this institution. The main Purpose of establishing this school is to impart good education to the rural children of this locality and give all-round formation both to Catholics and non-Catholics. The school building was blessed and inaugurated by Bishoip Thumma Bala on 18th January 1999.'
                            ],
                            [
                                'id' => 'StAnthonysHighSchoolEM',
                                'name' => "St Anthony’ s High School(E . M)",
                                'year' => '1986',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'H.M / Correspondent,
                                    St Anthony’s High School(E . M),
                                L . M . D . Colony,
                                Karimnagar - 505 527',
                                'principal' => 'Rev.Fr.N.Bala Swamy',
                                'managed_by' => 'Warangal Diocesan Society',
                                'telephone' => '(0870) 2223235',
                                'history' => 'St. Anthony’s E.M School for boys and girls is 8kms from Karimnagar on Karimnagar-Hyderabad Highway. It was started by one Boyapati Showreddy, a Catholic, in 1986. Keeping in view of the needs of the catholic children of Karimnagar, Most Rev. Thumma Bala purchased the school together with the land in June 1990. Ever since, it is being managed by the Warangal Diocesan Society. Gradually, the school was up-graded to SSC with boarding facilities for boys. So far, five batches of X class and 10 batches of VII class passed successfully from the school.

                                        The boarding was blessed by Bishop Thumma Bala on 11th April, 1997. The school surmounted the difficulties of acute water scarcity and poor financial position due to low fee structure. There was scarcity and poor financial position due to low fee structure. There was a time when the Management gave notice to the parents that the school was going to be shifted to the premises of St.Alphone’s High School in Karimnagar Town. The realization of the needed co-operation from the parents and timely water source and Fr.Joji’s able & proper handling as correspondent, saved the situation.'
                            ],
                            [
                                'id' => 'StCLAIREEMCONVENTSCHOOL',
                                'name' => 'St. CLAIRE E.M.CONVENT SCHOOL',
                                'year' => '1984',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'St. Claire Convent School NTPC,
                                            Jyothinagar- Ramagundam
                                            Karimanagar Dt. - 505 215',
                                'principal' => 'Fr. Casmir D, Souza',
                                'managed_by' => 'Franciscan Missionaries of Mary',
                                'telephone' => '(08728) 271813',
                                'history' => 'St. Claire Convent School was started with the encouragement of Most Rev. A.Beretta  and the effort of Sr. Sophia Pais, the Provincial of FMM in 1984 at NTPC, Ramagundam. The main purpose of taking up this school is to give education to the children of Employees there and to the poor children of this locality.
                                                This Institution will be taken over by the Society of Divine Word Missionaries from May/June 2003.'
                            ],
                            [
                                'id' => 'StGabrielsHighSchoolTMEM)',
                                'name' => 'St.Gabriel’ s High School(T . M & E . M)',
                                'year' => '1985',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'H.M/Correspondent,St.Gabriel High School Fathiminagar Waranga l- 506004',
                                'principal' => 'Bro.Roque',
                                'managed_by' => 'Montfort Brother of Gabriel',
                                'telephone' => '(0870) 2459241',
                                'history' => 'St. Gabriel’s High School T.M & E.M for Boys, Fathimanagar, is a Minority Institution established by Provincial Rev. Bro. Louis Beaureau of the Society of the Brothers of St. Gabriel in June. 1995 at the invitation of most Rev. Alphonsus Beretts. The Diocese handed-over the land and existing structures in the campus to the Brothers of St.Gabriel’s. It is one of the first educational institutions established at Fathimanagar & also in the Diocese of Warangal after its erection and also to commemorate the centenary celebrations of All Saint’s High School, Hyderabad. Bro .Vincent was its founder Principal. The school, initially, had only from class VI both in English & Telugu media. A Primary section was added in 1977 at the initiative of Bro. Berchmans, the then principal St.Gabriel’s school, which was exclusively for boys during the first three decades, became co-educational in June 1985 during the tenure of Bro. Alexander. Today the school has 2 sections from Classes LKG to IV and 3 sections from classes V to X English Medium and one section V to X TM. Bishop Thumma Bala and many Priests of the Diocese Studied in this school. A hostel is attached to the school, which caters to the rural population of Telangana.

                                            In Keeping with the school’s Motto “Lead Kindly Light” , its priorities in education are not only academic excellence, but also formation of the children in discipline, hard work , moral and religious Values.'
                            ],
                            [
                                'id' => 'StJOHNSHIGHSCHOOLTMEM',
                                'name' => 'St. JOHN’S HIGH SCHOOL ( T.M.& E.M)',
                                'year' => '1982',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. John’s High School Ookal (H), Via Dharmaram Warangal Dt. - 506 330',
                                'principal' => 'Sr. Shyni / Sr. Maggie',
                                'managed_by' => 'Sisters of our Lady of Fatima',
                                'telephone' => '(0870) 2581362',
                                'history' => 'St. John’s School was started on 14th June, 1982  on the initiative of Fr. B.Anthony, the then Parish Priest of Ookal, with the encouragement  of Bishop Alphonsus Beretta.  In 1986, it was handed over  to the  Sisters of our Lady of Fatima.  Sr. Archangela Cheeran was the Superior Genera then. The main purpose of establishing this institution is to impart good education and to cater to the ever growing needs of students with high aspirations by providing opportunities both to catholic and non-catholic rural children. There were about 451 students who had, so far, successfully completed their S.S.C. Examinations. Among them 81 were Catholics.'
                            ],
                            [
                                'id' => 'StJOSEPHSGIRLSHIGHSCHOOLTMEM',
                                'name' => 'St. JOSEPH’S GIRLS’ HIGH SCHOOL T.M./E.M',
                                'year' => '1967',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. Joseph’s Girls’ High School Kumarapally, Hanamkonda Warangal - 506 001',
                                'principal' => 'Sr.Seligree John / Sr. Jesintha',
                                'managed_by' => 'Catechist Sisters of St. Ann',
                                'telephone' => '(0870) 2450543',
                                'history' => 'St. Joseph’s T.M. School was started in the year 1967  by the Catechist Sisters of St. Ann, during the time of  Most Rev. Alphonsus Beretta and  Sr. Enrichetta, the then Mother General. English Medium was introduced in the year 1990. The primary purpose of establishing the school is to impart good education to the poor and neglected children apart from teaching catechism to catholic children.'
                            ],
                            [
                                'id' => 'StPAULSHIGHSCHOOLEM',
                                'name' => 'St. PAUL’S HIGH SCHOOL (E.M) ',
                                'year' => '1999',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. Paul’s High School
                                                Near Nehru Park
                                                Jangaon (P.O.)Warangal Dt. - 506 167',
                                'principal' => 'Fr. T. Augustine Reddy',
                                'managed_by' => 'Warangal Diocesan Society',
                                'telephone' => '(08716) 221027',
                                'history' => 'At the request of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial, Sr. Dominic of Congregation of Mother of Carmel, decided to open a school to create good educational facility to the Town people of Jagtial. Thus, Mount Carmel High School was started in June, 1996 at Dharur, Jagtial, Karimnagar Dt. The school was blessed and inaugurated by Bishop Thumma Bala on 2nd April, 1998.'
                            ],
                            [
                                'id' => 'STPAULSEMHIGHSCHOOL',
                                'name' => 'ST. PAUL’S E.M. HIGH SCHOOL',
                                'year' => '1991',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. Paul’s High School Pradeepthi Nagar, Thorrur ( P.O.) Warangal Dt. - 506 163',
                                'principal' => 'Sr. Irudaya Mary/ Sr. Shamala',
                                'managed_by' => 'Sisters of St. John the Baptist',
                                'telephone' => '(08719) 231263',
                                'history' => 'At the request of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial, Sr. Dominic of Congregation of Mother of Carmel, decided to open a school to create good educational facility to the Town people of Jagtial. Thus, Mount Carmel High School was started in June, 1996 at Dharur, Jagtial, Karimnagar Dt. The school was blessed and inaugurated by Bishop Thumma Bala on 2nd April, 1998.'
                            ],
                            [
                                'id' => 'VIDYANIKETANTMHIGHSCHOOL ',
                                'name' => 'VIDYA NIKETAN T.M. HIGH SCHOOL ',
                                'year' => '1990',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Warangal',
                                'address' => 'St. Mary’s School, Dantalapally, Narasimhulapet Mdl  warangal',
                                'principal' => 'Fr. D.Prashanth Reddy',
                                'managed_by' => 'Warangal Diocesan Society',
                                'telephone' => '(08711) 243129',
                                'history' => 'At the request of Most Rev. Thumma Bala, the Bishop of Warangal, the then Provincial, Sr. Dominic of Congregation of Mother of Carmel, decided to open a school to create good educational facility to the Town people of Jagtial. Thus, Mount Carmel High School was started in June, 1996 at Dharur, Jagtial, Karimnagar Dt. The school was blessed and inaugurated by Bishop Thumma Bala on 2nd April, 1998.'
                            ],
                            [
                                'id' => 'STTHOMASHIGHSCHOOLEM',
                                'name' => 'ST. THOMAS HIGH SCHOOL E/M',
                                'year' => '1994',
                                'image' => 'public/assets/images/education/Carmel-Integrate-school2.jpg',
                                'place' => 'Karimnagar',
                                'address' => 'St. Thomas High School K. Abadi, Jammikunta Karimnagar Dt. 505129',
                                'principal' => 'Rev. Fr.Maria Joseph',
                                'managed_by' => 'Warangal Diocesan Society',
                                'telephone' => '-',
                                'history' => 'At the Invitation of  Most Rev. Thumma Bala,  the Bishop of Warangal, the then  Provincial Sr. Fatima, F.C.C., estabilished St. Augustine’s School in 1994 at Maripeda.  The School is situated in the rural area, where most of the people are tribals and illiterate.  Fr. M.P. Joseph has been instumental to get the land, in getting Sisters and in all the constructions there. The purpose of this school is to bring the people / children out of their ignorance and also proclaim the Good News through the medium of education.'
                            ],



                        ];
                        ?>





                        <!-- Dynamic Looping OF code  -->

                        <?php foreach ($schools as $school): ?>
                            <div class="card mb-4">
                                <div class="row no-gutters align-items-stretch" data-aos="fade-up"
                                    data-aos-anchor-placement="center-bottom"
                                    data-aos-duration="1000">
                                    <!-- Image -->
                                    <div class="col-lg-4 col-md-12">
                                        <img src="<?= base_url($school['image']) ?>" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="<?= $school['name'] ?>">
                                    </div>

                                    <!-- Info -->
                                    <div class="col-lg-8 col-md-12">
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
                                                            <span class="fw-bold">Principal/Correspondent</span><br><?= $school['principal'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Managed By -->
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="row text-secondary align-items-center">
                                                        <div class="col-3 pr-0 text-center fs-4">
                                                            <i class="fas fa-building custom-icon"></i>
                                                        </div>
                                                        <div class="col-9" style="word-break: break-word;">
                                                            <span class="fw-bold">MANAGED BY</span><br><?= $school['managed_by'] ?>
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


                    </div>


                    <!-- College -->
                    <div class="tab-pane fade" id="mba" role="tabpanel" aria-labelledby="mba-tab">
                        <div class="academic_inn_head">
                            <h3>COllege</h3>
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
                        <?php
                        $technicalschools = [
                            [
                                'id' => 'FatimaIndustrialTrainingInstitution',
                                'name' => 'FATIMA INDUSTRIAL TRAINING INSTITUTION',
                                'year' => '1969',
                                'image' => 'public/assets/images/education/dummyschool2.jpg',
                                'place' => 'Fatimanagar, Warangal',
                                'address' => 'Fatima Industrial Training Centre, Fatimanagar, Warangal - 506 004',
                                'principal' => 'Bro. Antony',
                                'managed_by' => 'Montfort Brothers of St. Gabriel',
                                'telephone' => '',
                                'history' => 'Fatima Industrial Institute was established in Fatimanagar in the Year 1969 by Montfort Brothers of St. Gabriel at the invitation of Most Rev. Alphonsus Beretta, PIME, Bishop of Warangal. The main purpose of the this Institution was to give Job-oriented Technical Training to the Youth mainly of Warangal Diocese with a special reference to Catholics. This Vocational Training was taken up by Bro. Anthony Francisco, the then Provincial with the encouragement and support of Most Rev. Alphonsus Beretta to help immediately those who could not pursue  their higher School Education and also for the poor Students.
                                                The total number of the Students who have been trained in this Centre so far are : 946. Of these, 615 are Catholics. Indeed, it has given a great scope for the Catholic Students.

                                        '
                            ],
                            [
                                'id' => 'StJosephsIndustrialTrainingInstitute',
                                'name' => 'St. JOSEPH’S INDUSTRIAL TRAINING INSTITUTE (I.T.I.)',
                                'year' => '1992',
                                'image' => 'public/assets/images/education/dummyschool2.jpg',
                                'place' => 'Kumarapalli, Hanamkonda, Warangal',
                                'address' => 'St. Joseph’s I.T.I., Kumarapalli, Hanamkonda, Warangal – 506 001',
                                'principal' => 'Sr. Theresa',
                                'managed_by' => 'Catechist Sisters of St. Ann',
                                'telephone' => '0870-2450274',
                                'history' => 'St. Joseph’s Girls’ Vocational Training Centre was started at Kumarapally with the consent of Most Rev. Thumma Bala, D.D. by Catechist Sisters of St. Ann in the Year 1992. It offers four trades. 1. Cutting and Tailoring; 2. Typing and Stenography; 3. Electronics (Mechanism T.V. & Radio); 4. Computers. This Institution is recognised by the State Government since 1992 and affiliated to the National Council for Vocational Training- Delhi as I.T.I.'
                            ],
                            [
                                'id' => 'ImmaculateTechnicalSchool',
                                'name' => 'IMMACULATE TECHNICAL SCHOOL',
                                'year' => '1968',
                                'image' => 'public/assets/images/education/dummyschool2.jpg',
                                'place' => 'Subedari Road, Hanamkonda, Warangal',
                                'address' => 'Immaculate Convent, H.No: 1-7-641, Subedari Road, Hanamkonda, Warangal - 500 002',
                                'principal' => 'Fr. Reddem Cecilla, FMM',
                                'managed_by' => 'Franciscan Missionaries of Mary (FMM)',
                                'telephone' => '0870-2575436',
                                'history' => 'Immaculate Technical School was established in the year 1968 by Franciscan Missionaries of  Mary at Subedari in Hanamkonda, Warangal during the time of his Lordship Alphonsus Beretta and Rev. Sr. Mary Law, the then FMM Provincial. The purpose of establishing the institute was to give Job-Oriented Technical Training to the School-dropped Young Girls and women of the locality in Needle Works, Cutting and Tailoring, Home Science, Hygiene, Gardening, etc. The Embroidery Section was temporarily discontinued for two years between 1994-96 and it got resumed again.

'
                            ]
                        ];

                        ?>

                        <?php foreach ($technicalschools as $school): ?>
                            <div class="card mb-4 " data-aos="fade-up"
                                data-aos-anchor-placement="center-bottom"
                                data-aos-duration="1000">
                                <div class="row no-gutters align-items-stretch">
                                    <!-- Image -->
                                    <div class="col-lg-4 col-md-12">
                                        <img src="<?= base_url($school['image']) ?>" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="<?= $school['name'] ?>">
                                    </div>

                                    <!-- Info -->
                                    <div class="col-lg-8 col-md-12">
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
                                                            <span class="fw-bold">Principal/Correspondent</span><br><?= $school['principal'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Managed By -->
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="row text-secondary align-items-center">
                                                        <div class="col-3 pr-0">
                                                            <img class="img-fluid" src="<?= base_url('public/assets/images/icons/managment-icon2.jpg') ?>">
                                                        </div>
                                                        <div class="col-9" style="word-break: break-word;">
                                                            <span class="fw-bold">MANAGED BY</span><br><?= $school['managed_by'] ?>
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

                    </div>

                    <!--training institute -->
                    <div class="tab-pane fade" id="traininginstitute" role="tabpanel" aria-labelledby="traininginstitute-tab">
                        <?php
                        $trainingchools = [
                            [
                                'id' => 'BalavikasaInformationTechnologyCenter',
                                'name' => 'BALAVIKASA INFORMATION TECHNOLOGY CENTER (ITC)',
                                'year' => '3rd June, 2000',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Fatimanagar, Warangal',
                                'address' => 'Bala Vikasa Information Technology Centre, Fatimanagar, Warangal - 506 004',
                                'principal' => 'Mrs. S. Sunitha',
                                'managed_by' => 'Bala Vikasa',
                                'telephone' => '0870 - 2430357',
                                'history' => 'Bala Vikasa Information Technology Center is a branch of Bala Vikasa social Service Society. It was established on 3rd June, 2000. The purpose of this Center was to serve the economically poor students by the Job-Oriented Training in Advanced Courses with less tution fee. This Helps the Poor to Compete in the national/international IT Market. The Institute also aims at conducting research to make the IT benefits available to the Rural Areas, So that many rural Poor will get benefited.'
                            ],
                            [
                                'id' => 'DonBoscoIndustrialTrainingInstitute',
                                'name' => 'DON BOSCO INDUSTRIAL TRAINING INSTITUTE',
                                'year' => '1992',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Mariapuram, Warangal',
                                'address' => 'Don Bosco Industrial Training Centre, Mariapuram, P.O. Box. 4, Warangal - 500 002',
                                'principal' => 'Fr. Joseph Abraham / Fr. M. Rayappa',
                                'managed_by' => 'Salesians of Don Bosco',
                                'telephone' => '-',
                                'history' => 'A Non-formal Training Centre was a real need in the Diocese for the School Drop-outs and poor  Students in and around this Area. To meet this need, Bishop Thumma Bala invited Salesians of Don Bosco into the Diocese. Responding to this Invitation, Fr. Pudota Benjamin, the then Provincial of Hyderabad Salesian Province, came forward to take-up the Mission at Mariapuram in 1992. Keeping the Charism of their Founder in mind, the Salesians soon planned for a Technical Institute for the Poor Rural Youth to assert themselves as useful Citizens. It is heartening to know that after completing the Training, most of them have settled well with some job or the other. At present, there are three Trades in this Centre.'
                            ],
                            [
                                'id' => 'NirmalaHandicraftTrainingCentre',
                                'name' => 'NIRMALA HANDI-CRAFT TRAINING CENTRE',
                                'year' => '1st June 1975',
                                'image' => 'public/assets/images/education/dummyschool.jpg',
                                'place' => 'Fatimanagar, Warangal',
                                'address' => 'Nirmala Handi-craft Centre, Fatimanagar, Warangal - 506 004',
                                'principal' => 'Fr. G. Bala Martine',
                                'managed_by' => 'Vishwa Karuna Sangam',
                                'telephone' => '-',
                                'history' => 'Fatima Tailoring Centre was started on 1st June 1975 by Fr. Colombo, PIME. Sr. Thomasin (Presentation Congregation) was the first Principal of this Tailoring Institute. In the beginning, there were 40 Students.  The main work of this Centre is teaching Embroidery, Machine-embroidery, Lace and Fabric-painting. Earlier there was even tailoring but now this is shifted to Navajeevan, Karunapuram. After 2 years of learning, they go for Government Exams and get Government Certificates, with which they easily get Jobs in Schools or they can start something privately for their livelyhood. This Institution provides Training for Self-employment to Young Girls from this locality and from surrounding Villages.'
                            ]
                        ];

                        ?>

                        <?php foreach ($trainingchools as $school): ?>
                            <div class="card mb-4">
                                <div class="row no-gutters align-items-stretch" data-aos="fade-up"
                                    data-aos-anchor-placement="center-bottom"
                                    data-aos-duration="1000">
                                    <!-- Image -->
                                    <div class="col-lg-4 col-md-12">
                                        <img src="<?= base_url($school['image']) ?>" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="<?= $school['name'] ?>">
                                    </div>

                                    <!-- Info -->
                                    <div class="col-lg-8 col-md-12">
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
                                                            <span class="fw-bold">Principal/Correspondent</span><br><?= $school['principal'] ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Managed By -->
                                                <div class="col-12 col-sm-6 mb-3">
                                                    <div class="row text-secondary align-items-center">
                                                        <div class="col-3 pr-0">
                                                            <img class="img-fluid" src="<?= base_url('public/assets/images/icons/managment-icon2.jpg') ?>">
                                                        </div>
                                                        <div class="col-9" style="word-break: break-word;">
                                                            <span class="fw-bold">MANAGED BY</span><br><?= $school['managed_by'] ?>
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
                    </div>

                </div><!-- tab-content -->
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
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