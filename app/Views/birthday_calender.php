<head>
<link rel="stylesheet" href="http://localhost/diocese/public/assets/css/birthday_calender.css">

<?= view('layouts/header') ?>
<?= view('layouts/header-link') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


</head>
<body>
  <section class="birthday_section">

  <div class="container birthday_container">
    <div class="heading">
      <h4>Birthday Calendar & Reminders</h4>
    </div>
    <div class="update_birthdays">
      <div class="sub_heading">
        <h2 id="dynamicHeading">Birthdays in —</h2>
      </div>
      <div class="birthday-section">
        <div class="birthday-cards" id="birthdayCards"></div>
        <div class="calendar">
          <div class="month-nav">
            <button class="btn btn-sm btn-outline-primary" onclick="changeMonth(-1)"><i class="bi bi-arrow-left-circle-fill"></i></button>
            <h5 id="monthName" class="m-0"></h5>
            <button class="btn btn-sm btn-outline-primary" onclick="changeMonth(1)"><i class="bi bi-arrow-right-circle-fill"></i></button>
          </div>
          <div class="calendar-grid" id="calendarGrid"></div>
        </div>
      </div>
   
    <div class="members-list">
      <h4>👥 All Members</h4>
      <ul id="membersList"></ul>
    </div>
     </div>
  </div>
 </section>
  <script>
    const people = [
      { name: "Akhil", dob: "1996-08-29", img: "<?= base_url('public/assets/images/birthday/person1.png') ?>" },
      { name: "Sneha", dob: "2002-08-10", img: "<?= base_url('public/assets/images/birthday/person1.png') ?>" },
      { name: "Akhil", dob: "1996-08-28", img: "<?= base_url('public/assets/images/birthday/person2.png') ?>" },
      { name: "Sneha", dob: "2002-08-31", img: "<?= base_url('public/assets/images/birthday/person1.png') ?>" },
      { name: "Akhil", dob: "1996-08-30", img: "<?= base_url('public/assets/images/birthday/person2.png') ?>" },
      { name: "Sita", dob: "1990-01-05", img: "https://i.pravatar.cc/300?img=3" },
      { name: "Rahul", dob: "1989-01-21", img: "https://i.pravatar.cc/300?img=4" },
      { name: "Priya", dob: "1992-02-14", img: "https://i.pravatar.cc/300?img=5" },
      { name: "Vikram", dob: "1994-02-28", img: "https://i.pravatar.cc/300?img=6" }
    ];

    let currentMonth = new Date().getMonth();
    const today = new Date();

    function monthName(m) {
      return new Date(today.getFullYear(), m, 1).toLocaleString('default', { month: 'long' });
    }

    function renderHeading() {
      document.getElementById('dynamicHeading').textContent =
        `Birthdays in ${monthName(currentMonth)}`;
    }

    function renderBirthdays() {
      const cards = document.getElementById("birthdayCards");
      cards.innerHTML = "";
      const filtered = people.filter(p => new Date(p.dob).getMonth() === currentMonth);
      const year = today.getFullYear();

      if(filtered.length === 0) {
        // Display message if no birthdays
        cards.innerHTML = `<div class="no-birthday-message">🎈 No birthdays this month! Take a moment to celebrate life and cherish memories. 🎉</div>`;
        document.getElementById("monthName").innerText =
          new Date(today.getFullYear(), currentMonth).toLocaleString("default", { month: "long", year: "numeric" });
        return;
      }

      const sorted = filtered.sort((a, b) => {
        const dobA = new Date(a.dob);
        const dobB = new Date(b.dob);
        const thisYearA = new Date(year, dobA.getMonth(), dobA.getDate());
        const thisYearB = new Date(year, dobB.getMonth(), dobB.getDate());

        let diffA = Math.ceil((thisYearA - today) / (1000 * 60 * 60 * 24));
        let diffB = Math.ceil((thisYearB - today) / (1000 * 60 * 60 * 24));

        function getPriority(diff) {
          if(diff === 0) return 1;
          if(diff > 0 && diff <= 7) return 2;
          if(diff > 7) return 3;
          return 4;
        }

        const prA = getPriority(diffA);
        const prB = getPriority(diffB);
        if(prA !== prB) return prA - prB;
        return thisYearA - thisYearB;
      });

      sorted.forEach(person => {
        const dob = new Date(person.dob);
        const dateText = `${dob.getDate()} ${dob.toLocaleString('default',{month:'short'})}`;
        const thisYearBday = new Date(year, dob.getMonth(), dob.getDate());
        let diffDays = Math.ceil((thisYearBday - today) / (1000*60*60*24));
        let badgeText = "", badgeClass = "";
        if(diffDays === 0) { badgeText = "Today 🎉"; badgeClass = "today"; }
        else if(diffDays > 0) { badgeText = diffDays + " days left"; badgeClass = "upcoming"; }
        else { badgeText = Math.abs(diffDays) + " days ago"; badgeClass = "passed"; }

        cards.innerHTML += `
          <div class="person-card">
            <img src="${person.img}" alt="${person.name}">
            <div class="date-badge">${dateText}</div>
            <div class="status-badge ${badgeClass}">${badgeText}</div>
            <div class="card-info">
              <h5>${person.name}</h5>
              <small>Born ${dob.getFullYear()}</small>
            </div>
          </div>
        `;
      });

      document.getElementById("monthName").innerText =
        new Date(today.getFullYear(), currentMonth).toLocaleString("default", { month: "long", year: "numeric" });
    }

    function renderCalendar() {
      const grid = document.getElementById("calendarGrid");
      grid.innerHTML = "";
      const firstDay = new Date(today.getFullYear(), currentMonth, 1).getDay();
      const daysInMonth = new Date(today.getFullYear(), currentMonth + 1, 0).getDate();
      const birthdays = people.filter(p => new Date(p.dob).getMonth() === currentMonth).map(p => new Date(p.dob).getDate());

      for(let i=0;i<firstDay;i++) grid.innerHTML += `<div></div>`;
      for(let d=1; d<=daysInMonth; d++){
        let classes = "";
        if(birthdays.includes(d)) classes += " highlight";
        if(today.getDate()===d && today.getMonth()===currentMonth) classes += " today";
        grid.innerHTML += `<div class="${classes}">${d}</div>`;
      }
    }

    function renderMembersList() {
      const list = document.getElementById("membersList");
      list.innerHTML = "";
      people.forEach(p => {
        const dob = new Date(p.dob);
        list.innerHTML += `
          <li>
            <img src="${p.img}" alt="${p.name}">
            <div>
              <strong>${p.name}</strong><br>
              <small>${dob.getDate()} ${dob.toLocaleString('default',{month:'short'})} ${dob.getFullYear()}</small>
            </div>
          </li>
        `;
      });
    }

    function changeMonth(step){
      currentMonth += step;
      if(currentMonth < 0) currentMonth = 11;
      if(currentMonth > 11) currentMonth = 0;
      renderBirthdays();
      renderCalendar();
      renderHeading();
    }

    renderBirthdays();
    renderCalendar();
    renderMembersList();
    renderHeading();
  </script>
    
<?= view('layouts/footer') ?>
</body>
</html>
