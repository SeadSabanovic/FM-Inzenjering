<?php
    include "../lang/config.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FM INŽENJERING - O Nama</title>
  <link rel="shortcut icon" type="image/png" href="../img/fm-favicon.png">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <style>
    .aboutLink {
      color: #9A3229 !important;
    }
  </style>
</head>

<body class="fixed">

  <!--Nav-->
  <?php require '../php/nav.php'?>

  <div class="page-header about">
    <h1>FM INŽENJERING</h1>
    <h2><?php echo $lang['naslov6'] ?></h2>
  </div>

  <main>

    <div class="main-wrap">


      <div class="about-sec red">

        <div class="section-title">
          <h2 id="title1">FM INŽENJERING</h2>
        </div>

        <div class="content split">
          <p id="para1"><?php echo $lang['text5'] ?></p>
          <p id="para2"><?php echo $lang['text6'] ?></p>
        </div>
        <p class="sto" id="para3">
        <?php echo $lang['text7'] ?>
        </p>
      </div>
      <div class="about-sec redtop">

        <div class="custom-shape-divider-top-1605097212">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
          </svg>
        </div>

        <div class="section-title">
          <h2 id="title2"><?php echo $lang['naslov7'] ?></h2>
        </div>

        <div class="content middle">
          <p class="sub"><?php echo $lang['text8'] ?></p>
          <ul>
            <li id="list1"><i class="fas fa-circle-notch"></i> <?php echo $lang['list1'] ?></li>
            <li id="list2"><i class="fas fa-circle-notch"></i> <?php echo $lang['list2'] ?></li>
            <li id="list3"><i class="fas fa-circle-notch"></i> <?php echo $lang['list3'] ?></li>
            <li id="list4"><i class="fas fa-circle-notch"></i> <?php echo $lang['list4'] ?></li>
            <li id="list5"><i class="fas fa-circle-notch"></i> <?php echo $lang['list5'] ?></li>
            <li id="list6"><i class="fas fa-circle-notch"></i> <?php echo $lang['list6'] ?></li>
            <li id="list8"><i class="fas fa-circle-notch"></i> <?php echo $lang['list7'] ?></li>
            <li id="list9"><i class="fas fa-circle-notch"></i> <?php echo $lang['list8'] ?></li>
          </ul>
        </div>
      </div>
      <div class="about-sec blue">

        <div class="custom-shape-divider-top-1605097706">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
          </svg>
        </div>

        <div class="section-title" id="title3">
          <h2><?php echo $lang['naslov8'] ?></h2>
        </div>

        <div class="content split" id="content">
          <p><?php echo $lang['text100'] ?></p>

        </div>
      </div>

      <div class="about-sec bluetop">

        <!-- <div class="custom-shape-divider-top-1605289782">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
          </svg>
        </div> -->


        <div class="call2action">
          <h2><?php echo $lang['title'] ?></h2>
          <p><?php echo $lang['subtitle'] ?></p>
          <a href="./projekti"><?php echo $lang['btn4'] ?></a>
        </div>
      </div>

    </div>

  </main>


  <?php require '../php/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

  <script>
    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: '#title1',
        start: 'center bottom'
      }
    });
    let tl2 = gsap.timeline({
      scrollTrigger: {
        trigger: '#title2',
        start: 'center bottom'
      }
    });
    let tl3 = gsap.timeline({
      scrollTrigger: {
        trigger: '#title3',
        start: 'center bottom'
      }
    });

    tl.from('#title1', {
      y: 100,
      opacity: 0,
      duration: 1
    }).from('#para1', {
      x: -100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#para2', {
      x: 100,
      opacity: 0,
      duration: 1
    }, '-=1').from('#para3', {
      y: 200,
      opacity: 0,
      duration: 1
    }, '-=.8');


    tl2.from('#title2', {}).from('#list1', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#list2', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#list3', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#list4', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#list5', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#list6', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#list8', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8').from('#list9', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8');



    tl3.from('#title3', {
      y: 100,
      opacity: 0,
      duration: 1
    }).from('#content', {
      y: 100,
      opacity: 0,
      duration: 1
    }, '-=.8')
  </script>

</body>

</html>