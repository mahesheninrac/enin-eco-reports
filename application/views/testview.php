<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <style>

  </style>



</head>

<body style="background-color: wheat;">
  <!-- drop-down -->

  <!-- <div class="market-sizing">
  <div class="py-4">
    <h1 class="h5 fw-bold text-uppercase">Market Sizing</h1>
  </div>
  <div class="d-flex flex-column py-1 gap-4 mx-4 align-items-start">
    <label for="evReportDropdown" class="h5">Choose EV Report:</label>
    <select id="evReportDropdown" class="form-select">
      <option value="report1">EV & Battery Quarterly Outlook 1</option>
      <option value="report2">EV & Battery Quarterly Outlook 2</option>
    </select>
  </div>
  <div id="report1" class="report-content">
    <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
      <img src="https://placehold.co/25" class="">
      <div class="text-content d-flex flex-column">
        <p class="h5">EV & Battery Quarterly Outlook 1</p>
        <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
      </div>
      <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
    </div>
  </div>
  <div id="report2" class="report-content" style="display: none;">
    <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
      <img src="https://placehold.co/25" class="">
      <div class="text-content d-flex flex-column">
        <p class="h5">EV & Battery Quarterly Outlook 2</p>
        <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
      </div>
      <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
    </div>
  </div>
</div> -->

  <!-- load more -->



  <div class="market-sizing">
      <div class="py-4">
          <h1 class="h5 fw-bold text-uppercase">Market Sizing</h1>
        </div>
      <div class="d-flex flex-column py-1 gap-4 mx-4 align-items-start">
          <label for="evReportDropdown" class="h5">Choose EV Report:</label>
          <select id="evReportDropdown" class="form-select">
              <option value="report1">EV & Battery Quarterly Outlook 1</option>
              <option value="report2">EV & Battery Quarterly Outlook 2</option>
              <option value="report3">EV & Battery Quarterly Outlook 3</option>
              <option value="report4">EV & Battery Quarterly Outlook 4</option>
            </select>
        </div>
      <div id="report1" class="report-content">
          <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                  <p class="h5">EV & Battery Quarterly Outlook 1</p>
                  <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
              <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
            </div>
        </div>
      <div id="report2" class="report-content" style="display: none;">
          <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                  <p class="h5">EV & Battery Quarterly Outlook 2</p>
                  <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
              <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
            </div>
        </div>
      <div id="report3" class="report-content" style="display: none;">
          <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                  <p class="h5">EV & Battery Quarterly Outlook 3</p>
                  <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
              <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
            </div>
        </div>
      <div id="report4" class="report-content" style="display: none;">
          <div class="d-flex flex py-1 gap-4 mx-4 align-items-start">
              <img src="https://placehold.co/25" class="">
              <div class="text-content d-flex flex-column">
                  <p class="h5">EV & Battery Quarterly Outlook 4</p>
                  <p>Quarterly report • PDF & Excel • Includes access to our analysts</p>
                </div>
              <a href="">Learn More <i class="icofont-long-arrow-right"></i></a>
            </div>
        </div>
      <button id="readMoreBtn" class="btn btn-primary mt-3 mx-4">Read More</button>
  </div>

  <script>
    // console.log("started");
    //  fetch("http://192.168.29.131/ci/assets/js/dummy.json")
    //   .then((response) => response.json())
    //   .then((result) => {
    //     console.log(result);
    //   })
    //   .catch((err) => {
    //     console.log("error", err);
    //   });






    // document.getElementById('evReportDropdown').addEventListener('change', function () {
    //   document.querySelectorAll('.report-content').forEach(function (content) {
    //     content.style.display = 'none';
    //   });
    //   document.getElementById(this.value).style.display = 'block';
    // });

    // more

    document.getElementById('evReportDropdown').addEventListener('change', function() {
      document.querySelectorAll('.report-content').forEach(function(content) {
        content.style.display = 'none';
      });
      document.getElementById(this.value).style.display = 'block';
    });

    let reportsDisplayed = 0;
    document.getElementById('readMoreBtn').addEventListener('click', function() {
      let allReports = document.querySelectorAll('.report-content');
      for (let i = reportsDisplayed; i < reportsDisplayed + 2 && i < allReports.length; i++) {
        allReports[i].style.display = 'block';
      }
      reportsDisplayed += 2;
      if (reportsDisplayed >= allReports.length) {
        this.style.display = 'none';
      }
    });
  </script>



</body>

</html>