<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <style>
    .line-clamp {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    a {
      color: black;
    }
  </style>
</head>

<body style="background-color: wheat;">

  <center>
    <a href="">
      <div class="d-flex flex gap-4" style=" height:14rem;background-color: #e2e5f0; margin:2rem">

        <div class="d-flex flex" style="padding: 4rem 3rem; width:80%;">
          <div class="time-date" style="min-width: 8.125rem;">
            <p style="background-color: #3d45d3; color:white; font-size :0.75rem;font-weight: 500; text-align:center; padding:0.12rem; width:90%; border-radius:2px;">online event</p>
            <p style="font-size: 1.3125rem; font-weight:400; line-height: 140%;">31 July 2024</p>
          </div>

          <div class="grow" style="text-align: justify; width: 60%;">
            <div class="title line-clamp" style="font-size: 1.75rem; font-weight:400; line-height:145%;">
              2024 EV & battery market slowdown: Temporary setback or long-term trend?
            </div>
            <p class="line-clamp" style="font-size: .87rem; font-weight:400;line-height:150%">Register now for our latest webinar on the EV and battery market slowdown: Temporary setback or Long-Term Trend? Join our expert analyst team as they review the EV and battery markets, reflecting on trends from the first half of 2024 and discussing potential developments for the rest of the year.</p>
          </div>

        </div>



        <div class="image-holder" style="width:20%;">
          <img src="<?= base_url('assets/images/event-card.png') ?>" alt="" style="height: 100%; width: 100%;object-fit: cover;">
        </div>


      </div>
    </a>
  </center>



</body>

</html>