
<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
  
  <style>
    :root {
      --accordion-bg-inactive: #000000;  
      --accordion-bg-active: #8d0e0e;  
      --accordion-text-inactive: #ffffff;
      --accordion-text-active: #ffffff;
      --priest-name-color: #000000;     
    }

    body {
      font-family: "Comic Sans MS", cursive, sans-serif;
      background: #f9f9f9;
      margin: 30px;
      color: #222;
    }

    .page-title {
      text-align: center;
      font-size: 32px;
      font-weight: bold;
      color: #bd0921;
      margin-bottom: 10px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .side-heading {
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      color: #222;
      margin-top: 10px;
      margin-bottom: 15px;
      padding-bottom: 5px;
    }

    p {
      text-align: center;
      font-size: 15px;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .accordion-item {
      margin-bottom: 12px;
      border-radius: 8px;
      overflow: hidden;
    }

    .accordion-button {
      background-color: var(--accordion-bg-inactive);
      color: var(--accordion-text-inactive);
      font-weight: bold;
      position: relative;
      transition: all 0.3s ease;
    }

    .accordion-button:not(.collapsed) {
      background-color: var(--accordion-bg-active);
      color: var(--accordion-text-active);
    }

    .accordion-button::after {
      flex-shrink: 0;
      width: 1.25rem;
      height: 1.25rem;
      content: "";
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='%23ffffff' stroke-width='2' viewBox='0 0 24 24'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
      transform: rotate(0deg);
      transition: transform 0.3s ease, background-image 0.3s ease;
    }

    .accordion-button:not(.collapsed)::after {
      transform: rotate(180deg);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='%23000000' stroke-width='2' viewBox='0 0 24 24'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
    }

    .accordion-body ul {
      padding-left: 20px;
      margin: 0;
    }

    .accordion-body li {
      margin-bottom: 5px;
      color: var(--priest-name-color);
    }
.accordion-button:not(.collapsed)::after {
    transform: rotate(180deg); /* Flip it like a superhero cape */
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='%23FFFFFF' stroke-width='2' viewBox='0 0 24 24'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E"); /* White arrow screaming: I’m ACTIVE! */
    transition: transform 0.3s ease; /* Smooth as your Friday vibes */
}
  </style>

<div class="container">
  <div class="row">
    <div class="col-12">

      <div class="page-title">Commissions</div>
      <div class="side-heading">WARANGAL DIOCESAN PRESBYTERAL COUNCIL</div>
      <p>Click to reveal the holy members of each commission! 🕊️</p>

      <div class="accordion" id="commissionsAccordion">

        <!-- Commission 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              Commission for Evangelization / Small Christian Communities & Charismatic renewal
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. G. Kamal</li>
                <li>Fr. D. Joseph</li>
                <li>Fr. Allam Inna</li>
                <li>Fr. A. Prakash</li>
                <li>Fr. G. Ranjith</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              Commission for Catechetics
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. G. Kamal</li>
                <li>Fr. A. Vincent</li>
                <li>Fr. Y. Bala</li>
                <li>Fr. G. Chinnapu Reddy (Jr)</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
              Commission for Family
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. Y. Chinnappa</li>
                <li>Fr. Y. Inna</li>
                <li>Fr. T. Santhosh</li>
                <li>Fr. S. Mahipaul</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
              Commission for Liturgy
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. S. Inna</li>
                <li>Fr. A. Bala</li>
                <li>Fr. R. Thomas</li>
                <li>Fr. G. Naveen</li>
                <li>Fr. V. Simon</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
              Commission for Education
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. M. Jaya Paul</li>
                <li>Fr. B. Prakash</li>
                <li>Fr. R. Inna</li>
                <li>Fr. T. Augustine</li>
                <li>Fr. T. Joseph</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 6 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
              Commission for Bible
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. D. Raja</li>
                <li>Fr. P. Prakash</li>
                <li>Fr. Basani Chinnappa</li>
                <li>Fr. P. Dasaiah</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 7 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
              Commission for S.C. and S.T.
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. K. Vijay Kumar</li>
                <li>Fr. T. Jerome</li>
                <li>Fr. N. Surender</li>
                <li>Fr. G. Prashanth</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 8 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
              Commission for Vocations, Seminary, Clergy and Religious
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. D. Prashanth</li>
                <li>Fr. Thomas Kiran</li>
                <li>Fr. A. Raja</li>
                <li>Fr. M. Praveen</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 9 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine">
              Commission for Health
            </button>
          </h2>
          <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. Y. Joji</li>
                <li>Fr. P. John Paul</li>
                <li>Fr. G. Prakash</li>
                <li>Fr. S. Prabhakar</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 10 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen">
              Commission for Youth
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. G. Thomas (Jr.)</li>
                <li>Fr. M. Naveen</li>
                <li>Fr. Kasu Marreddy</li>
                <li>Fr. B. J. Praveen</li>
                <li>Fr. T. Sheran Teja</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 11 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven">
              Commission for Labour, Justice & Peace
            </button>
          </h2>
          <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. D. Vijaya Paul</li>
                <li>Fr. G. Bala Martin</li>
                <li>Fr. T. Kiran</li>
                <li>Fr. E. Vijay</li>
                <li>Fr. A. Sravan</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 12 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwelve">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve">
              Commission for Women
            </button>
          </h2>
          <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. S. Bala Showry</li>
                <li>Fr. Y. Lourdu</li>
                <li>Fr. N. Bala Swamy</li>
                <li>Fr. Gangarapu Suresh</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 13 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThirteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen">
              Commission for Ecumenism & Dialogue
            </button>
          </h2>
          <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. M. Anand</li>
                <li>Fr. Gali Rayappa</li>
                <li>Fr. G. Rayappa</li>
                <li>Fr. T. Ashok</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 14 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFourteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen">
              Commission for Social Communications
            </button>
          </h2>
          <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. Y. Kiran Kumar</li>
                <li>Fr. K. Joseph</li>
                <li>Fr. G. Joseph</li>
                <li>Fr. D. Prathap</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 15 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFifteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen">
              Commission for Laity
            </button>
          </h2>
          <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. P. Raja</li>
                <li>Fr. P. Chinnaiah</li>
                <li>Fr. N. Maria Joseph</li>
                <li>Fr. P. Suresh</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Commission 16 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSixteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen">
              Commission for Migrants
            </button>
          </h2>
          <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#commissionsAccordion">
            <div class="accordion-body">
              <ul>
                <li>Fr. G. Sudhakar</li>
                <li>Fr. T. Yaga Reddy</li>
                <li>Fr. Kasu Showreddy</li>
                <li>Fr. N. Sampath</li>
              </ul>
            </div>
          </div>
        </div>

      </div> <!-- End Accordion -->

    </div>
  </div>
</div>
<?= view('layouts/footer') ?>


