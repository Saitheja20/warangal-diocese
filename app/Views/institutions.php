<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
<style>
    .accordion-button {
        background: #f8f9fa;
        color: #333;
        font-weight: 500;
        padding: 1rem;
        border: none;
        border-bottom: 1px solid #e0e0e0;
        position: relative;
    }

    .accordion-button::after {
        content: '\25be';
        /* ▾ caret */
        position: absolute;
        right: 1rem;
        transition: transform 0.3s;
    }

    .accordion-button.collapsed::after {
        transform: rotate(-90deg);
    }
    .accordion-button:hover {
        background: #e9ecef;
    }
    .accordion-collapse {
        transition: max-height 0.35s ease, padding 0.35s ease;
        overflow: hidden;
    }
    .accordion-collapse.show .accordion-body {
        padding: 1rem;
    }
    .accordion-header h3 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
    }
    .accordion-button .badge {
        background: #007bff;
        color: #fff;
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
        position: absolute;
        right: 3rem;
        top: 50%;
        transform: translateY(-50%);
    }
</style>

<section id="seminors" style="min-height: 100vh;">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mb-5">
                <h3>Seminors</h3>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                1.St.PIUS X SEMINARY - 1956
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>St. Pius X Seminary</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Warangal Diocesan Society</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev. Fr. T. Yaga Reddy</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Rector, St. Pius X Seminary, Fatimanagar, Warangal - 506 004, Tel. (0870) 2459506</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="1">
                                                        St. Pius X Seminary, Fatimanagar, is Warangal Diocesan Apostolic & Minor Seminary...
                                                    </span>
                                                    <span class="history-full" data-id="1" style="display: none;">
                                                        St. Pius X Seminary, Fatimanagar, is Warangal Diocesan Apostolic & Minor Seminary. To foster & promote local vocations to the priesthood, Most Rev. Alponsus Beretta, PIME, the former Bishop of Warangal, laid the foundation stone for St. Pius X Seminary in 1954. Fr. Finelli, PIME, and Fr. Guido Tirinzoni, PIME, played key roles in stabilizing this Seminary, adding wings to the building and starting the Minor Seminary in 1961. Latin, English, Bible, Church History, etc. were taught. Several priests and PIME fathers contributed to teaching and spiritual formation.

                                                        Over the years, the system evolved with changes post-Vatican Council II. Intermediate studies were introduced in 1971. Since 1995, Fr. M. Yagaiah has served as the confessor and spiritual guide.

                                                        The seminary has helped form 95 local priests serving in Warangal, Nalgonda, and Khammam — including Bishop Thumma Bala.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="1">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                2.ST.XAVIER'S MAJOR SEMINARY -1999
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>St.Francis Xavier's Major Seminary</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Warangal Diocesan Society</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev. Fr. Y.Thomos Kiran</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>St. Xavier's Major Seminary, Karunapuram, Peddapendial (P.O.), Warangal Dt. 506151, Tel: (08711)243140, (08711)243146.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="2">
                                                        St.Xavier's Major Seminary -1999
                                                        Religious and priestly formation at the Philosophy cum Degree stage...
                                                    </span>
                                                    <span class="history-full" data-id="2" style="display: none;">
                                                        St.Xavier's Major Seminary -1999
                                                        Religious and priestly formation at the Philosophy cum Degree stage, existing at Don Bosco, Karunapuram witnessed increasing number of seminarians from the Dioceses and religious congregations. There was a felt -need for yet another seminary to be established basically to impart priestly formation at Andhra Pradesh. Hence Bishop Thumma Bala, Bishop of Warangal, took the initiative to study the feasibility of starting a separate major seminary to accommodate the growing number of seminarians. As a result, by God's grace, the Diocese of Warangal established St. Xavier's Major Seminary at Karunapuram in the year 1999, adjacent to Vishwa Jyothi Don Bosco College of Philosophy. Within a year, construction work was completed and by June 2000, moved into the new seminary. It was blessed and inaugurated on 29th June, 2000 by Bishop Thumma Bala.

                                                        Twelve years down the line, we are happy that we could render committed and quality priestly and religious formation to the seminarians from different dioceses of Andhra Pradesh and Orissa, and religious congregations namely the Fathers of the Precious Blood, The Salvatorians, the Fathers of Holy Cross and the Society of the Holy spirit.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="2">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                3.DON BOSCO PHILOSOPHATE( 1997)
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Salesians of Don Bosco - SDB</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Salesians of Don Bosco,Hyderabad Province</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev.Fr.Mallavarapu Rayanna SDB</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>Don Bosco Philosophate, Karunapuram, Peddapendial (P.O.), Warangal Dt. 506151, Tel::(0870)243 144 (Rector),(0870)243 145 (Community),(0870)243 146 (College),(0870)243 147 (Administrator).</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="3">
                                                        Don Bosco Philosophate ( Vishwa Jyothi College)
                                                        From the beginning, this formation house was a collaborative venture with the Diocese of Warangal...
                                                    </span>
                                                    <span class="history-full" data-id="3" style="display: none;">
                                                        Don Bosco Philosophate ( Vishwa Jyothi College)
                                                        From the beginning, this formation house was a collaborative venture with the Diocese of Warangal. The diocesan students resided with the Salesians as one community for
                                                        the first two years. Later, it was realized that it is important to make provisions to meet the distinct formation needs of the Diocesan Students as well of the young Salesians.
                                                        Hence St.Xavier’s Major Seminary was started to cater to the formation needs of the Diocesan Students. They go to Vishwa Jyothi for their study of Philosophy. In the meantime the Mill
                                                        Hill Missionaries have shifted their Formation House to Karunapuram and are sending their Students here. The Junior Sisters from different Congregations also have their Formation House
                                                        at karunapuram and send their Students to study along side the candidates to the Priesthood. The Salesians from Hyderabad, Dimapur and Guwahati Provinces have their Students here.


                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="3">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                4.FR.BERNHARD BENDEL SEMINARY
                            </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Fr.Bernhard Bendel Seminary</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>Fr. Bernhard Bendel seminary, Karunapuram, Peddapendial (P.O.), Warangal Dt. 506151, Tel:08706453739.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="4">
                                                        Fr.Bernhard Bendel Seminary
                                                        Religious and priestly formation at the Philosophy cum Degree stage, existing at Don Bosco, Karunapuram...
                                                    </span>
                                                    <span class="history-full" data-id="4" style="display: none;">
                                                        Fr.Bernhard Bendel Seminary
                                                        Religious and priestly formation at the Philosophy cum Degree stage, existing at Don Bosco, Karunapuram witnessed
                                                        increasing number of seminarians from the Dioceses and religious congregations. There was a felt -need for yet
                                                        another seminary to be established basically to impart priestly formation at Andhra Pradesh. Hence Bishop Thumma Bala,
                                                        Bishop of Warangal, took the initiative to study the feasibility of starting a separate major seminary to accommodate
                                                        the growing number of seminarians. As a result, by God's grace, the Diocese of Warangal established St. Xavier's Major
                                                        Seminary at Karunapuram in the year 1999, adjacent to Vishwa Jyothi Don Bosco College of Philosophy. Within a year,
                                                        construction work was completed and by June 2000, moved into the new seminary. It was blessed and inaugurated on 29th June, 2000
                                                        by Bishop Thumma Bala.

                                                        Twelve years down the line, we are happy that we could render committed and quality priestly and religious formation to
                                                        the seminarians from different dioceses of Andhra Pradesh and Orissa, and religious congregations namely the Fathers of the Precious
                                                        Blood, The Salvatorians, the Fathers of Holy Cross and the Society of the Holy spirit

                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="4">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>
<!-- men religious accordion -->
<section class="mt-2 py-5 bg-light" id="men-religious" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mb-5">
                <h3>MEN RELIGOUS FORMATION HOUSES</h3>
                <div class="accordion accordion-flush" id="menreligiousaccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="men-religious-head-one">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#men-religious-collapse-one" aria-expanded="true" aria-controls="men-religious-collapse-one">
                                1.HOLY CROSS STUDENT-HOME
                            </button>
                        </h2>
                        <div id="men-religious-collapse-one" class="accordion-collapse collapse show" aria-labelledby="men-religious-head-one" data-bs-parent="#menreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Holy Cross Student-Home</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Fathers of the Holy Cross</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev. Fr. Joby,CSC</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Rector,Holy Cross Student-Home,Station Ghanpur,Warangal - 506 144,Tel. (08711) 221193.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="5">
                                                        Holy Cross Student-Home
                                                        At the invitation & encouragement of Bishop Thumma Bala, ‘Holy Cross Student-Home’ has been started...
                                                    </span>
                                                    <span class="history-full" data-id="5" style="display: none;">
                                                        Holy Cross Student-Home
                                                        At the invitation & encouragement of Bishop Thumma Bala, ‘Holy Cross Student-Home’ has been started by
                                                        Rev.Fr.Tony Thampi Kayala,CSC, Provincial of the Fathers of Holy Cross, Bangalore Province, on 1st June,
                                                        2002 temporarily at Station Ghanpur. Fr. Joepsh Gaspar, CSC, has been appointed as its Rector. There are
                                                        8 Candidates this year. They go to Karunapuram for thier Intermediate studies.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="5">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="men-religious-head-two">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#men-religious-collapse-two" aria-expanded="false" aria-controls="men-religious-collapse-two">
                                2.Mill Hill FORMATION HOUSE - 1999
                            </button>
                        </h2>
                        <div id="men-religious-collapse-two" class="accordion-collapse collapse" aria-labelledby="men-religious-head-two" data-bs-parent="#menreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Mill Hill Formation House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td> Mill Hill Missionaries</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev. Fr.Yesudas Nayak,MHM</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>Mill Hill Formation House, Karunapuram, Peddapendial (P.O.), Warangal Dt. 506 151, Tel:(08711) 223371.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="6">
                                                        Mill Hill FORMATION HOUSE - 1999
                                                        The Mill Hill Missionaries opened their Formation House in the Diocese of Warangal in 1999...
                                                    </span>
                                                    <span class="history-full" data-id="6" style="display: none;">
                                                        Mill Hill FORMATION HOUSE - 1999
                                                        The Mill Hill Missionaries opened their Formation House in the Diocese of Warangal in 1999 at Karunapuram at the invitation of
                                                        BishopThumma Bala. Fr. Tim Greenway is the local Mill Hill Society Representative. The purpose of this house is principally to
                                                        enable their Candidates to study at Don Bosco Philosophate as part of their Formation. They also have a year of Spiritual Orientation.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="6">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="men-religious-head-three">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#men-religious-collapse-three" aria-expanded="false" aria-controls="men-religious-collapse-three">
                                3.MISSIONARIES OF THE POOR (M.O.P.)
                            </button>
                        </h2>
                        <div id="men-religious-collapse-three" class="accordion-collapse collapse" aria-labelledby="men-religious-head-three" data-bs-parent="#menreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Christ the King House of Formation</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Missionaries of the Poor</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev.Bro.Birendra”Patrick”Xess, M.O.P</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>Christ the King House of Formation Missionaries of the Poor,Fatimanagar,Warangal - 506 004.Tel. (0870) 2459839 / 2453234.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="7">
                                                        MISSIONARIES OF THE POOR (M.O.P.)
                                                        At the invitation of Most Rev. Thumma Bala, the Founder, Rev. Fr. Richard Ho Lund of the Missionaries...
                                                    </span>
                                                    <span class="history-full" data-id="7" style="display: none;">
                                                        MISSIONARIES OF THE POOR (M.O.P.)
                                                        At the invitation of Most Rev. Thumma Bala, the Founder, Rev. Fr. Richard Ho Lund of the Missionaries of the Poor,
                                                        which is of Jamaican origin, West Indies, started their Christ the King House of Formation in Warangal Diocese at Fatimangar
                                                        in 1992. It is the first house of their Society in India. Fr. Hayden Augustine and Bro. Philip were the Pioneers of this new Mission.
                                                        The Charism of the Society is to bring joy to the anawin of Yahweh very similar to that of Mother Theresa of Calcutta. This institution
                                                        was opened to cater to the services of the Society in Warangal and also to recruit Candidates for their Congregation from all parts of India.
                                                        The aspiring Candidates from all over India are recruited and a spiritual formation is given for a year before they are sent to Jamaica
                                                        for further studies and formation. Bishop Thumma Bala officially inaugurated this Formation House on 10th July, 1993.

                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="7">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="men-religious-head-four">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#men-religious-collapse-four" aria-expanded="false" aria-controls="men-religious-collapse-four">
                                4.ST. GABRIEL’S JUNIORATE (S.G.)
                            </button>
                        </h2>
                        <div id="men-religious-collapse-four" class="accordion-collapse collapse" aria-labelledby="men-religious-head-four" data-bs-parent="#menreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>St. Gabriel’s Juniorate</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Montfort Brothers of St.Gabriel</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Bro.Marianand</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Director,St.Gabriel’s Juniorate,Fatimanagar, Warangal Dt. 506004, Tel:(0870) 2459777.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="8">
                                                        St. Gabriel’s Juniorate (S.G.)
                                                        At the encouragement and support of Bishop Alphonsus Beretta, ...
                                                    </span>
                                                    <span class="history-full" data-id="8" style="display: none;">
                                                        St. Gabriel’s Juniorate (S.G.)
                                                        At the encouragement and support of Bishop Alphonsus Beretta, the then provincial Bro.Louis Bureau (Eleazar)
                                                        started St.Gabriel’s Formation House in Warangal Diocese at Fatimanagar in 1957. The main purpose of this institute
                                                        is to promote vocations for their Province of Central India and give them basic Spiritual Orientation. Candidates
                                                        are recruited from all over the Country.

                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="8">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- From 5th onwords -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="men-religious-head-five">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#men-religious-collapse-five" aria-expanded="false" aria-controls="men-religious-collapse-five">
                                5.SALVATORIAN FORMATION HOUSE


                            </button>
                        </h2>
                        <div id="men-religious-collapse-five" class="accordion-collapse collapse" aria-labelledby="men-religious-head-five" data-bs-parent="#menreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Jordan Philosophy Study House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td> Salvatorians</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev.Fr.Alex,SBS</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Rector,Salvatorians, Ganapuram,Peddapendial (P.O.), Warangal Dt. 506151, Tel:-.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="9">
                                                        SALVATORIAN FORMATION HOUSE
                                                        At the encouragement and support of Bishop Alphonsus Beretta, the then provincial Bro.Louis Bureau...
                                                    </span>
                                                    <span class="history-full" data-id="9" style="display: none;">
                                                        SALVATORIAN FORMATION HOUSE
                                                        At the encouragement and support of Bishop Alphonsus Beretta, the then provincial Bro.Louis Bureau (Eleazar)
                                                        started St.Gabriel’s Formation House in Warangal Diocese at Fatimanagar in 1957. The main purpose of this institute
                                                        is to promote vocations for their Province of Central India and give them basic Spiritual Orientation. Candidates
                                                        are recruited from all over the Country.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="9">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="men-religious-head-six">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#men-religious-collapse-six" aria-expanded="false" aria-controls="men-religious-collapse-six">
                                6.KRISTU JYOTHI ASHRAM
                            </button>
                        </h2>
                        <div id="men-religious-collapse-six" class="accordion-collapse collapse" aria-labelledby="men-religious-head-six" data-bs-parent="#menreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Kristu Jyothi Ashram</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td> Rev. Fr.Christu Raj, SHS</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Director, Kristu Jyothi Ashram, Karunapuram, Peddapendial(P.O.), Dharmasagar(M),WARANGAL - 506 151, A.P. Tel No.: 08711-223106.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="10">
                                                        Kristu Jyothi Ashram
                                                        With the blessings and encouragement of Most Rev. Thumma Bala, Bishop of Warangal,...
                                                    </span>
                                                    <span class="history-full" data-id="10" style="display: none;">
                                                        Kristu Jyothi Ashram
                                                        With the blessings and encouragement of Most Rev. Thumma Bala, Bishop of Warangal,Rev.Fr. Vijay Kumar took the initiative and keen interest
                                                        in starting Kristu Jyothi Ashram in Karunapuram, Peddapendial in the year 1992. Rev. Fr .Colombo provided the necessary land for this Ashram
                                                        in Karunapuram. Kristu Jyothi Ashram had its humble beginning in a thatched shed which was blessed by Bishop Thumma Bala and was inaugurated
                                                        by Most Rev .A. Beretta, PIME, the former Bishop of Warangal , on April 3rd, 1993.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="10">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="men-religious-head-seven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#men-religious-collapse-seven" aria-expanded="false" aria-controls="men-religious-collapse-seven">
                                7.JEEVADHARA DIVINE CENTRE
                            </button>
                        </h2>
                        <div id="men-religious-collapse-seven" class="accordion-collapse collapse" aria-labelledby="men-religious-head-seven" data-bs-parent="#menreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Jeevadhara Divine Centre</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev. Fr.Christu Raj, SHS</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Director,Jeevadhara Divine Centre, Station Pendial, Rampur,C/o Kristu Jyothi Ashram, Karunapuram, Peddapendial(P.O.),Dharmasagar(M), WARANGAL - 506 151, A.P.Tel No.: 08711-200541;</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="11">
                                                        Jeevadhara Divine Centre
                                                        The Parish of Rampur was bifurcated from Karunapuram Parish by Most Rev.Thumma Bala, Bishop of Warangal...
                                                    </span>
                                                    <span class="history-full" data-id="11" style="display: none;">
                                                        Jeevadhara Divine Centre
                                                        The Parish of Rampur was bifurcated from Karunapuram Parish by Most Rev.Thumma Bala, Bishop of Warangal, on the 10th of April,2005 with four substations, which were part of Karunapuram.. Fr.Yeruva Inna Reddy was appointed as the First Parish Priest. When Gnanapuram was erected in 2007, two substations were allocated to that Parish. Now there are only two substations under Rampur Parish, namely - Pedda Rampur and Chinna Rampur. Earlier, Fr.A.Colombo,PIME, had built a Chapel and it was blessed by His Lordship Thumma Bala on the 25th of December, 1999.
                                                        Fr.Colombo had also started a school for kindergarten children with the help of sisters of Mary Mediatrix on an experimental basis, but was found later to become unviable.

                                                        In Feb 2007, the Diocese gave this premises consisting only of a school building with few bathroom/toilets, and a chapel with a presbytery, to Frs.Christuraj, SHS and Cyril Doss, SHS
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="11">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- women religious accordion -->
<section id="women-religious" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5 mb-5">
                <h3>WOMEN RELIGOUS FORMATION HOUSES</h3>
                <div class="accordion accordion-flush" id="womenreligiousaccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="women-religious-head-one">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#women-religious-collapse-one" aria-expanded="true" aria-controls="women-religious-collapse-one">
                                1.ADORATION FORMATION HOUSE (SABS)
                            </button>
                        </h2>
                        <div id="women-religious-collapse-one" class="accordion-collapse collapse show" aria-labelledby="women-religious-head-one" data-bs-parent="#womenreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Adoration Formation House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Sisters of Adoration of the Blessed Sacrament</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev. Sr. Elsin
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td> The Mistress,Aradhana Bhavan,Fatimanagar,Warangal - 506 004,Tel.(0870) 2459492.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="12">
                                                        Adoration Formation House
                                                        The Formation House was inaugurated on 1st October 1998 by Bishop Thumma Bala...
                                                    </span>
                                                    <span class="history-full" data-id="12" style="display: none;">
                                                        Adoration Formation House
                                                        The Formation House was inaugurated on 1st October 1998 by Bishop Thumma Bala in the presence of the Provincial
                                                        Mother Angrace. Sr. Phlo palithottam was the first Mistress with a batch of 6 Postulants. In the year of 1999, the number
                                                        of the Postulants were nine. During their postulancy, the Candidates also help the Sisters for Adoration in Fatima Cathedral.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="12">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="women-religious-head-two">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#women-religious-collapse-two" aria-expanded="false" aria-controls="women-religious-collapse-two">
                                2.ASSISI FORMATION HOUSE(A.S.M.I.)
                            </button>
                        </h2>
                        <div id="women-religious-collapse-two" class="accordion-collapse collapse" aria-labelledby="women-religious-head-two" data-bs-parent="#womenreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Assisi Formation House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Assisi Sisters of Mary Immaculate</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Sr. Ushes</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>Assisi Formation House, Fatimanagar,Warangal - 506 004, Tel:(08712) 2576 718.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="13">
                                                        ASSISI FORMATION HOUSE (A.S.M.I.)
                                                        The April 27th, 1993 was a memorable day for the Assisi Sisters of Mary Immaculate...
                                                    </span>
                                                    <span class="history-full" data-id="13" style="display: none;">
                                                        ASSISI FORMATION HOUSE (A.S.M.I.)
                                                        The April 27th, 1993 was a memorable day for the Assisi Sisters of Mary Immaculate in the Diocese of Warangal.
                                                        By God’s providence, a Formation House was opened at Fatimanagar by the then Provincial Superior, Sr. Celestine,
                                                        and it was blessed and consecrated to the
                                                        Sacred Heart of Jesus by Bishop Thumma Bala on 27th April, 1993. Sr. Augusta was appointed the first Superior of
                                                        the Formation House. Fr. Y. Joji supervised the construction of this house.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="13">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="women-religious-head-three">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#women-religious-collapse-three" aria-expanded="false" aria-controls="women-religious-collapse-three">
                                3.MARY MEDIATRIX FORMATION HOUSE(MMM)
                            </button>
                        </h2>
                        <div id="women-religious-collapse-three" class="accordion-collapse collapse" aria-labelledby="women-religious-head-three" data-bs-parent="#womenreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Mary Mediatrix Formation House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Missionaries of Mary Mediatrix</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Sr.M.Denise</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Mistress,Mary Mediatrix Formation House,Karunapuram, Peddapendiayal (P.O.),Warangal Dt. - 506 151,Tel.08711—223277.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="14">
                                                        Mary Mediatrix FORMATION HOUSE (MMM)
                                                        The Missionaries of Mary Mediatrix are of Spanish Origin. The Congregation of Missionaries...
                                                    </span>
                                                    <span class="history-full" data-id="14" style="display: none;">
                                                        Mary Mediatrix FORMATION HOUSE (MMM)
                                                        The Missionaries of Mary Mediatrix are of Spanish Origin. The Congregation of Missionaries of Mary Mediatrix was
                                                        founded by late Rev. Mother Rosario Fernandez Pereira and Rev. Extaben Vigil in the year 1939 with the intention of spreading
                                                        Good News and assisting the most needy people of the Mission Areas. The Society opened a house at Karunapuram in 1983. Eventually,
                                                        finding the locality to be condusive for Formation, the Society started a Formation House at Karunapuram in the year 1998.
                                                        In additon to the Formation of Candidates, this Institute caters to the needs of Junior
                                                        Sisters with seminars and other spiritual courses. Candidates are recruited from all-over Andhra Pradesh. Some are doing Intermediate studies in the adjacent J.M.J. College.

                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="14">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="women-religious-head-four">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#women-religious-collapse-four" aria-expanded="false" aria-controls="women-religious-collapse-four">
                                4.NAVAJEEVAN ASPIRANCY HOUSE
                            </button>
                        </h2>
                        <div id="women-religious-collapse-four" class="accordion-collapse collapse" aria-labelledby="women-religious-head-four" data-bs-parent="#womenreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Navajeevan Aspirancy House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Daughters of the Presentation of Mary in the Temple</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Mistres</th>
                                                <td>Sr.Theresa Bairapaka</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td> The Mistress,Navajeevan Aspirantate, Karunapuram, Peddapendial ( P.O.), Warangal Dt. - 506 151, Tel. (08711) - 243104.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="15">
                                                        Navajeevan Aspirancy House
                                                        This house is started on 9th July, 2002 with the blessings of Most Rev. Thumma Bala....
                                                    </span>
                                                    <span class="history-full" data-id="15" style="display: none;">
                                                        Navajeevan Aspirancy House
                                                        This house is started on 9th July, 2002 with the blessings of Most Rev. Thumma Bala.
                                                        The purpose of this house is to give orientation to the young Girls who join the Presentation
                                                        Sisters with a desire to become the Daughters of Presentation. They spend here their first three years
                                                        of formation: one year of orientation and two years of academic studies (Intermediate).



                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="15">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- From 5th onwords -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="women-religious-head-five">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#women-religious-collapse-five" aria-expanded="false" aria-controls="women-religious-collapse-five">
                                5.PRESENTATION FORMATION HOUSE(DPM)


                            </button>
                        </h2>
                        <div id="women-religious-collapse-five" class="accordion-collapse collapse" aria-labelledby="women-religious-head-five" data-bs-parent="#womenreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Presentation Formation House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Daughters of the Presentation of Mary in the Temple</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Mistress</th>
                                                <td>Sr. Tessy Thomas</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Mistress,Presentaiton Formation House, Karunapuram,Peddapendial (P.O.), Warangal Dt. 506151, Tel-(08711) 243122.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="16">
                                                        Presentation Formation House
                                                        The dream of a Formation House in A.P. is actualized in 1993, June 24th with the blessings...
                                                    </span>
                                                    <span class="history-full" data-id="16" style="display: none;">
                                                        Presentation Formation House
                                                        The dream of a Formation House in A.P. is actualized in 1993, June 24th with the blessings of the Bishop Thumma Bala. Initially,
                                                        the institute was run in Fr. Colombo’s residence and on 24th June, 1995, it was moved into its permanent Building of their Regional House,
                                                        Karunapuram. The purpose of this house is to form the young girls during their Postulancy to become the Daughters of Presentation
                                                        according to its Charism and Mission. At present, there are 10 Postulants. Sr. Preetha accompanies them. The beautiful Campus,
                                                        the people around in the villages, co-operation,
                                                        friendly relations and mutual support among the Institutions help the young Girls to form themselves into strong personalities and to broaden their Vision and Mission.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="16">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="women-religious-head-six">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#women-religious-collapse-six" aria-expanded="false" aria-controls="women-religious-collapse-six">
                                6.SACRED HEART HOME - FORMATION HOUSE
                            </button>
                        </h2>
                        <div id="women-religious-collapse-six" class="accordion-collapse collapse" aria-labelledby="women-religious-head-six" data-bs-parent="#womenreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>Sacred Heart Home-Formation House</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Daughters of Mary Help of Christians.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Mistress</th>
                                                <td>Sr. Margaret Pathi</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td> The Mistress, Sacred Heart Home- Formation House, Karunapuram, Peddapendial (P.O.), Warangal Dt. 506151, Tel:(08711)223.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="17">
                                                        Sacred Heart Home-Formation House
                                                        After the redimension of Chennai Province in the year 1993, the Bangalore Province was on the lookout...
                                                    </span>
                                                    <span class="history-full" data-id="17" style="display: none;">
                                                        Sacred Heart Home-Formation House
                                                        After the redimension of Chennai Province in the year 1993, the Bangalore Province was on the lookout for
                                                        a suitable place for the formation house close to the Salesian House. In the year 1998 we approached the Bishop
                                                        Rt. Rev. Thumma Bala requesting a piece of land at Karunapuram. He was gracious enough to gift us with 4 acres of Land
                                                        through the kind instrumentality of Rev. Fr. Augusto Colombo PIME. On 18th October 2003, the gift deed was executed
                                                        between the diocese and Rev. Sr. Cecily Thomas, the then Provincial of Bangalore. On 27th August 2006 Rev. Fr. Augusto
                                                        Colombo laid the foundation stone at the new site in the presence of Rev. Sr. Rosy Malayaty, the provincial. 31st May 2007
                                                        was a memorable historic event. On the feast of visitation, the 15th birthday of our province, Rt. Rev.
                                                        Thumma Bala inaugurated and Blessed the new house. Sr. Margaret Pathi, the animator, Sr. Mercy Sebastian,
                                                        Sr. Mini Leon, Sr. Sangeetha, Sr. Leema Rose and 21 Young and energetic candidates are the pioneers of this budding centre.
                                                        This is also considered to be the study house for the young sisters and candidates since there is the possibility to pursue higher studies.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="17">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="women-religious-head-seven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#women-religious-collapse-seven" aria-expanded="false" aria-controls="women-religious-collapse-seven">
                                7.St. ANN’S SADHANASHRAM (CSA)
                            </button>
                        </h2>
                        <div id="women-religious-collapse-seven" class="accordion-collapse collapse" aria-labelledby="women-religious-head-seven" data-bs-parent="#womenreligiousaccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" style="width: 200px;">Name of the Institution</th>
                                                <td>St. Ann’s Sadhanashram</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Management</th>
                                                <td>Catechist Sisters of St. Ann's</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Name of the Rector</th>
                                                <td>Rev. Sr. N.lourdu Mary</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address</th>
                                                <td>The Mistress, St.Ann’s Sadhanashram, Kumarapally- Hanamkonda, Warangal - 506 001.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">History</th>
                                                <td>
                                                    <span class="history-short" data-id="18">
                                                        St.ANN’S SADHANASHRAM (CSA)
                                                        The Formation House of the C.S.A. Candidates was formerly at Reddipalem and was shifted to Kumarapalli...
                                                    </span>
                                                    <span class="history-full" data-id="18" style="display: none;">
                                                        St.ANN’S SADHANASHRAM (CSA)
                                                        The Formation House of the C.S.A. Candidates was formerly at Reddipalem and was shifted to Kumarapalli,
                                                        Hanamkonda in the year 1975. Later, a new Building, called Sadhanashram, was built for the Aspirants in the year 1982. It was blessed by
                                                        Most Rev. A. Beretta, PIME. Of late the Aspirantate is shifted to Ananthapur and Sadhanashram is used for the Candidates to
                                                        study Intermediate, which is also a part of their Formation.
                                                    </span>
                                                    <br>
                                                    <button class="btn btn-sm btn-link p-0 read-more-btn" data-id="18">Read more</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <script>
    function toggleHistory() {
        const shortText = document.getElementById("history-short");
        const fullText = document.getElementById("history-full");
        const btn = document.getElementById("readMoreBtn");

        if (fullText.style.display === "none") {
            fullText.style.display = "inline";
            shortText.style.display = "none";
            btn.textContent = "Read less";
        } else {
            fullText.style.display = "none";
            shortText.style.display = "inline";
            btn.textContent = "Read more";
        }
    }
</script> -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".read-more-btn");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                const id = this.getAttribute("data-id");
                const shortText = document.querySelector(`.history-short[data-id="${id}"]`);
                const fullText = document.querySelector(`.history-full[data-id="${id}"]`);

                if (!shortText || !fullText) {
                    console.warn("Missing elements for data-id:", id);
                    return;
                }

                const isHidden = fullText.style.display === "none";

                fullText.style.display = isHidden ? "inline" : "none";
                shortText.style.display = isHidden ? "none" : "inline";
                this.textContent = isHidden ? "Read less" : "Read more";
            });
        });
    });
</script>




<?= view('layouts/footer') ?>