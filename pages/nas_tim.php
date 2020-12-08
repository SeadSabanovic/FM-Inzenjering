<?php
    include "../lang/config.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FM INŽENJERING - Naš Tim</title>
  <link rel="shortcut icon" type="image/png" href="../img/fm-favicon.png">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <style>
    .teamLink {
      color: #9A3229 !important;
    }
  </style>
</head>

<body class="fixed">

  <!--Nav-->
  <?php require '../php/nav.php'?>

  <div class="page-header team">
    <h1>FM INŽENJERING</h1>
    <h2><?php echo $lang['naslov9'] ?></h2>
  </div>

  <main>
    <div class="members-sec1">
      <div class="main-wrap">
        <div class="member">
          <div class="member-text">
            <div id="title1">
              <h3>Faruk Medošević</h3>
              <h5><?php echo $lang['faruk1'] ?> <br> <i class="fas fa-phone"></i> +387 63 895 242 <br> <i
                  class="fas fa-envelope"></i> faruk.medosevic@gmail.com </h5>
            </div>

            <div class="flex">
              <div class="box" id="box1">
                <p><?php echo $lang['faruk2'] ?></p>
              </div>
              <div class="box" id="box2">
                <p><?php echo $lang['faruk3'] ?></p>
              </div>
            </div>
            <!-- -->
          </div>

        </div>

      </div>
    </div>

    <div class="members-sec2">
      <div class="main-wrap">
        <div class="member">
          <div class="member-text">
            <div id="title4">
              <h3>Selvedin Mujić</h3>
              <h5><?php echo $lang['selvedin1'] ?> <br><i class="fas fa-phone"></i> +387 63 998 362<br> <i
                  class="fas fa-envelope"></i> selvedin.mujicfmi@gmail.com </h5>
            </div>

            <div class="flex">
              <div class="box" id="box7">
                <p><?php echo $lang['selvedin2'] ?></p>
              </div>
              <div class="box" id="box8">
                <p><?php echo $lang['selvedin3'] ?></p>
              </div>
            </div>



          </div>

        </div>

      </div>
    </div>

    <div class="members-sec1">
      <div class="main-wrap">
        <div class="member">
          <div class="member-text">
            <div id="title3">
              <h3>Alaga Husić</h3>
              <h5><?php echo $lang['alaga1'] ?> <br><i class="fas fa-phone"></i> +387 61 105 806<br> <i
                  class="fas fa-envelope"></i> alaga.husicfmi@gmail.com </h5>
            </div>
            <div class="flex">
              <div class="box" id="box5">
                <p><?php echo $lang['alaga2'] ?></p>
              </div>
              <div class="box" id="box6">
                <p><?php echo $lang['alaga3'] ?></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="members-sec2">
      <div class="main-wrap">
        <div class="member">
          <div class="member-text">

            <div id="title2">
              <h3>Muamer Đulović</h3>
              <h5><?php echo $lang['muamer1'] ?> <br> <i class="fas fa-phone"></i> +387 63 894 529<br> <i
                  class="fas fa-envelope"></i> muamer.dulovicfmi@gmail.com </h5>
            </div>


            <div class="flex">
              <div class="box" id="box3">
                <p><?php echo $lang['muamer2'] ?></p>
              </div>
              <div class="box" id="box4">
                <p><?php echo $lang['muamer3'] ?></p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="members-sec1">
      <div class="main-wrap">
        <div class="member">
          <div class="member-text">
            <div id="title5">
              <h3>Nezir Šarić</h3>
              <h5><?php echo $lang['nezir1'] ?><br> <i class="fas fa-phone"></i> +387 63 895 923<br> <i
                  class="fas fa-envelope"></i> nezir.saricfmi@gmail.com </h5>
            </div>
            <div class="flex">
              <div class="box" id="box9">
                <p><?php echo $lang['nezir2'] ?></p>
              </div>
              <div class="box" id="box10">
                <p><?php echo $lang['nezir3'] ?></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="members-sec2">
      <div class="main-wrap">
        <div class="member">
          <div class="member-text">
            <div id="title6">
              <h3>Bojan Jelić</h3>
              <h5><?php echo $lang['bojan1'] ?><br> <i class="fas fa-phone"></i> +387 63 676 421 <br> <i
                  class="fas fa-envelope"></i> bojan.jelicfmi@gmail.com </h5>
            </div>
            <div class="flex">
              <div class="box" id="box11">
                <p><?php echo $lang['bojan2'] ?></p>
              </div>
              <div class="box" id="box12">
                <p><?php echo $lang['bojan3'] ?></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="call2action">
      <h2><?php echo $lang['title'] ?></h2>
      <p><?php echo $lang['subtitle'] ?></p>
      <a href="./projekti"><?php echo $lang['btn4'] ?></a>
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
    })
    let tl2 = gsap.timeline({
      scrollTrigger: {
        trigger: '#title2',
        start: 'center bottom'
      }
    })
    let tl3 = gsap.timeline({
      scrollTrigger: {
        trigger: '#title3',
        start: 'center bottom'
      }
    })
    let tl4 = gsap.timeline({
      scrollTrigger: {
        trigger: '#title4',
        start: 'center bottom'
      }
    })
    let tl5 = gsap.timeline({
      scrollTrigger: {
        trigger: '#title5',
        start: 'center bottom'
      }
    })
    let tl6 = gsap.timeline({
      scrollTrigger: {
        trigger: '#title6',
        start: 'center bottom'
      }
    })

    tl.from('#title1', {
      y: 200,
      opacity: 0,
      duration: 1
    }).from('#box1', {
      x: -100,
      opacity: 0,
      duration: 1
    }, '-=.7').from('#box2', {
      x: 100,
      opacity: 0,
      duration: 1
    }, '-=1');
    tl2.from('#title2', {
      y: 200,
      opacity: 0,
      duration: 1
    }).from('#box3', {
      x: -100,
      opacity: 0,
      duration: 1
    }, '-=.7').from('#box4', {
      x: 100,
      opacity: 0,
      duration: 1
    }, '-=1');
    tl3.from('#title3', {
      y: 200,
      opacity: 0,
      duration: 1
    }).from('#box5', {
      x: -100,
      opacity: 0,
      duration: 1
    }, '-=.7').from('#box6', {
      x: 100,
      opacity: 0,
      duration: 1
    }, '-=1');
    tl4.from('#title4', {
      y: 200,
      opacity: 0,
      duration: 1
    }).from('#box7', {
      x: -100,
      opacity: 0,
      duration: 1
    }, '-=.7').from('#box8', {
      x: 100,
      opacity: 0,
      duration: 1
    }, '-=1');
    tl5.from('#title5', {
      y: 200,
      opacity: 0,
      duration: 1
    }).from('#box9', {
      x: -100,
      opacity: 0,
      duration: 1
    }, '-=.7').from('#box10', {
      x: 100,
      opacity: 0,
      duration: 1
    }, '-=1');
    tl6.from('#title6', {
      y: 200,
      opacity: 0,
      duration: 1
    }).from('#box11', {
      x: -100,
      opacity: 0,
      duration: 1
    }, '-=.7').from('#box12', {
      x: 100,
      opacity: 0,
      duration: 1
    }, '-=1');
  </script>

</body>

</html>