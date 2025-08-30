<head>
  <link rel="stylesheet" href="http://localhost/diocese/public/assets/css/Seminarians.css">
<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
</head>
<body>
  <div class="container my-4">
    <div class="card p-4 shadow-lg rounded">
      <h2 class="heading">SEMINARIANS OF WARANGAL DIOCESE – 2020-2021</h2>
      <p class="sub-text">
        The mighty roster of future holy heroes ⚔️ <br>
        (Like Pokémon, but instead of powers they’ve got seminaries, theology years, and parishes.)
      </p>

      <!-- Holy Scrollable Table -->
      <div class="table-responsive" id="holyScroll">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Name</th>
              <th>Seminary</th>
              <th>Study</th>
              <th>Village & Parish</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>Gangarapu Anu Kiran</td><td>St. John's - Hyderabad</td><td>4th Year Theology</td><td>Dharmasagar</td></tr>
            <tr><td>2</td><td>Mettu Sravan</td><td>St. John's - Hyderabad</td><td>4th Year Theology</td><td>Agapeta, Narimetta</td></tr>
            <tr><td>3</td><td>Yeruva Ajith</td><td>St. John's - Hyderabad</td><td>2nd Year Theology</td><td>Subedari</td></tr>
            <tr><td>4</td><td>Ramancha Sharath Kumar</td><td>St. John's - Hyderabad</td><td>2nd Year Theology</td><td>Unikicherla</td></tr>
            <tr><td>5</td><td>Kotte Sudheer Kumar</td><td>Kesamudram</td><td>Regency</td><td>Dharmasagar</td></tr>
            <tr><td>6</td><td>Pedela Umesh Chandra</td><td>Mahabubabad</td><td>Regency</td><td>Athmakur</td></tr>
            <tr><td>7</td><td>Basani Bala Dheeraj</td><td>St. Xavier's - Karunapuram</td><td>2nd Year Philosophy</td><td>Bandampalli, Mangudona</td></tr>
            <tr><td>8</td><td>Bochu Amarender</td><td>St. Xavier's - Karunapuram</td><td>2nd Year Philosophy</td><td>Parkala</td></tr>
            <tr><td>9</td><td>Gangarapu Sravan Kumar</td><td>St. Xavier's - Karunapuram</td><td>2nd Year Philosophy</td><td>Dharmasagar</td></tr>
            <tr><td>10</td><td>Sinagareddy Anurag</td><td>St. Xavier's - Karunapuram</td><td>2nd Year Philosophy</td><td>Kota Venkatapur, Ookal</td></tr>
            <tr><td>11</td><td>Beereddy Anurag</td><td>St. Xavier's - Karunapuram</td><td>1st Year Philosophy</td><td>Mallakapalli</td></tr>
            <tr><td>12</td><td>Kotte Aravind</td><td>St. Xavier's - Karunapuram</td><td>1st Year Philosophy</td><td>Dharmasagar</td></tr>
            <tr><td>13</td><td>Gade Chohen Xavier</td><td>St. Xavier's - Karunapuram</td><td>1st Year Phil & BTech. 2nd Year</td><td>Fatima Cathedral</td></tr>
            <tr><td>14</td><td>Golamari Ravi Teja</td><td>St. Paul's - Nuzvid</td><td>Spiritual Orientation</td><td>Mariapuram, Ookal</td></tr>
            <tr><td>15</td><td>Thumma Joseph Vishal</td><td>St. Paul's - Nuzvid</td><td>Spiritual Orientation</td><td>Kothapalli, Ranipuram Parish</td></tr>
            <tr><td>16</td><td>Yeruva Sathwik Reddy</td><td>St. Paul's - Nuzvid</td><td>Spiritual Orientation</td><td>Fatima Cathedral</td></tr>
            <tr><td>17</td><td>Gayam Rajasekhharreddy</td><td>St. Paul's - Nuzvid</td><td>Spiritual Orientation</td><td>Mariapuram, Narimetta</td></tr>
            <tr><td>18</td><td>Asarapu Akhil</td><td>St. Pius X - Karunapuram</td><td>Inter 2nd Year</td><td>Chagal, Ghanpur</td></tr>
            <tr><td>19</td><td>Dasari Ashwanth Kumar</td><td>St. Pius X - Karunapuram</td><td>Inter 2nd Year</td><td>Thimmaropet</td></tr>
            <tr><td>20</td><td>Gade Bala Abhishek Reddy</td><td>St. Pius X - Karunapuram</td><td>Inter 2nd Year</td><td>Begumpet, Dacharam</td></tr>
            <tr><td>21</td><td>Bhukya Anil Kumar</td><td>St. Pius X - Karunapuram</td><td>Inter 1st Year</td><td>Eedulapusapally, Mahabubabad</td></tr>
            <tr><td>22</td><td>Bochu Deekshith</td><td>St. Pius X - Karunapuram</td><td>Inter 1st Year</td><td>Battupalli, Fatima Cathedral</td></tr>
            <tr><td>23</td><td>Mekala Bala Shobith</td><td>St. Pius X - Karunapuram</td><td>Inter 1st Year</td><td>Huzurabad, Shanthipuram</td></tr>
            <tr><td>24</td><td>Gade Avinash</td><td>St. Pius X - Karunapuram</td><td>Orientation</td><td>Ramachandrapuram, Palakurthy</td></tr>
            <tr><td>25</td><td>Kotte Syril</td><td>St. Pius X - Karunapuram</td><td>Orientation</td><td>Dharmasagar</td></tr>
            <tr><td>26</td><td>Kommareddy Hemanth</td><td>St. Pius X - Karunapuram</td><td>Orientation</td><td>Raghunathapalli, Kanchanpalli</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    // Holy Drag Scroll Script
    const holyScroll = document.getElementById("holyScroll");
    let isDown = false;
    let startX;
    let scrollLeft;

    holyScroll.addEventListener("mousedown", (e) => {
      isDown = true;
      holyScroll.classList.add("active");
      startX = e.pageX - holyScroll.offsetLeft;
      scrollLeft = holyScroll.scrollLeft;
    });

    holyScroll.addEventListener("mouseleave", () => {
      isDown = false;
    });

    holyScroll.addEventListener("mouseup", () => {
      isDown = false;
    });

    holyScroll.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - holyScroll.offsetLeft;
      const walk = (x - startX) * 2; // drag speed multiplier
      holyScroll.scrollLeft = scrollLeft - walk;
    });
  </script>
  <?= view('layouts/footer') ?>
</body>
</html>
