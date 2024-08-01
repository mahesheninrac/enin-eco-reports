<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <style>
    .online-event {
      background-color: #3d45d3;
      color: white;
      font-size: 0.75rem;
      font-weight: 500;
      text-align: center;
      padding: 0.12rem;
      width: 90%;
      border-radius: 2px
    }

    .line-clamp {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .event-block {
      color: black;
      height: 14rem;
      background-color: #e2e5f0;
      margin: 2rem;
      width: 80%;
    }

    .event-block-text {
      padding: 4rem 3rem;
      width: 80%;
      justify-content: center;
    }

    .event-block .time-date {
      font-size: 1.3125rem;
      font-weight: 400;
      line-height: 140%;
      min-width: 8.125rem;
    }

    .event-block .image-holder img {
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .grow {
      text-align: left;
      width: 60%;

    }

    .grow .description {
      font-size: .87rem;
      font-weight: 400;
      line-height: 150%
    }

    .grow .title {
      font-size: 1.75rem;
      font-weight: 400;
      line-height: 145%;
    }
  </style>


</head>

<body style="background-color: wheat;">

  <script>
    console.log("started");
     fetch("http://192.168.29.131/ci/assets/js/dummy.json")
      .then((response) => response.json())
      .then((result) => {
        console.log(result);
      })
      .catch((err) => {
        console.log("error", err);
      });
  </script>



</body>

</html>