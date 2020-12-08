<?php
    include "../lang/config.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FM INŽENJERING - Referentni Projekti</title>
  <link rel="shortcut icon" type="image/png" href="../img/fm-favicon.png">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <style>
    .projectsLink {
      color: #9A3229 !important;
    }
  </style>
</head>

<body class="fixed">

  <!--Nav-->
  <?php require '../php/nav.php'?>

  <div class="page-header projects">
    <h1>FM INŽENJERING</h1>
    <h2><?php echo $lang['naslov16'] ?></h2>
  </div>

  <main>
    <div class="project-sec">
      <div class="main-wrap">

        <ul class="accordion">
          <li>
            <a><?php echo $lang['projekt1'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 150 mil €</h5>
              <h5><?php echo $lang['angazman1'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['duzina'] ?> 6,0 km</small>

              <h5><?php echo $lang['tuneli'] ?></h5>
              <small><?php echo $lang['tunel'] ?> Pečuj 850m<br></small>
              <small><?php echo $lang['tunel'] ?> Ričice 500m<br></small>
              <small>Cut and Cover <?php echo $lang['tunel'] ?> 180m<br></small>

              <h5><?php echo $lang['objekti'] ?></h5>
              <small><?php echo $lang['vijadukt'] ?> Klopče 200m<br></small>
              <small><?php echo $lang['vijadukt'] ?> Klopačke Stijene 250m <br></small>
              <small><?php echo $lang['vijadukt'] ?> Babina Rijeka 550m<br></small>

              <h5><?php echo $lang['trasa'] ?></h5>
              <small><?php echo $lang['trasa1'] ?><br></small>
              <small><?php echo $lang['trasa2'] ?><br></small>
              <small><?php echo $lang['trasa3'] ?><br></small>
              <small><?php echo $lang['trasa4'] ?><br></small>
              <small><?php echo $lang['trasa5'] ?><br></small>

              <p><?php echo $lang['text15'] ?></p>

              <div class="flex-gallery">
                <div class="item">
                  <img src="../img/gra.jpg" alt="Donja Gračanica" loading="lazy">
                </div>
                <div class="item">
                  <img src="../img/gra2.jpg" alt="Donja Gračanica" loading="lazy">
                </div>
              </div>
            </div>
          </li>
          <li>
            <a><?php echo $lang['projekt2'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 70 mil €</h5>
              <h5><?php echo $lang['angazman2'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['duzina'] ?> 3,5 km<br></small>
              <small><?php echo $lang['dvostrani'] ?><br></small>
              <small><?php echo $lang['iskop'] ?><br></small>
              <h5><?php echo $lang['objekti'] ?></h5>
              <small><?php echo $lang['potputnjak'] ?> Ponirak<br></small>
              <small><?php echo $lang['propust'] ?><br></small>

              <p><?php echo $lang['text16'] ?></p>

              <div class="flex-gallery">
                <div class="item">
                <img src="../img/tz5.jpg" alt="Tunel Zenica" loading="lazy">
                </div>
                <div class="item">
                <img src="../img/tz4.png" alt="Tunel Zenica" loading="lazy">
                </div>
              </div>
            </div>
          </li>
          <li>
            <a><?php echo $lang['projekt3'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 66 mil €</h5>
              <h5><?php echo $lang['angazman3'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['duzina'] ?> 10,1 km<br></small>
              <h5><?php echo $lang['tuneli'] ?></h5>
              <small><?php echo $lang['tunel'] ?> Počitelj 1150m<br></small>
              <small>Cut and Cover <?php echo $lang['tunel'] ?> 145m<br></small>
              <h5><?php echo $lang['objekti'] ?></h5>
              <small><?php echo $lang['potputnjak'] ?> Bivolje Brdo<br></small>
              <small><?php echo $lang['potputnjak'] ?> <?php echo $lang['petlja'] ?> Počitelj<br></small>
              <small><?php echo $lang['potputnjak'] ?> Ševaš Njive<br></small>
              <small><?php echo $lang['natputnjak'] ?> Gradina<br></small>
              <small><?php echo $lang['mostovi'] ?> M2, M3 i M4<br></small>
              <small><?php echo $lang['potputnjak'] ?> Orlovača<br></small>
              <small><?php echo $lang['ab'] ?><br></small>
              <h5><?php echo $lang['trasa'] ?></h5>
              <small><?php echo $lang['trasa6'] ?><br></small>
              <small><?php echo $lang['trasa7'] ?><br></small>
              <small><?php echo $lang['trasa8'] ?><br></small>
              <small><?php echo $lang['trasa9'] ?><br></small>
              <small><?php echo $lang['petlja'] ?> Počitelj<br></small>
              <small><?php echo $lang['trasa10'] ?><br></small>
              <small><?php echo $lang['trasa11'] ?><br></small>

              <div class="flex-gallery">
                <div class="item">
                  <img src="../img/zvirovici.jpg" alt="zvirovici" loading="lazy">
                </div>
                <div class="item">
                  <img src="../img/zvirovici2.jpg" alt="zvirovici" loading="lazy">
                </div>
              </div>
            </div>
          </li>
          <li>
            <a><?php echo $lang['projekt4'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 8 mil €</h5>
              <h5><?php echo $lang['angazman1'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['duzina'] ?> 1300m<br></small>
              <h5><?php echo $lang['objekti'] ?></h5>
              <small><?php echo $lang['trasa12'] ?><br></small>
              <small><?php echo $lang['trasa13'] ?><br></small>
              <small><?php echo $lang['trasa14'] ?><br></small>
              <h5><?php echo $lang['trasa'] ?></h5>
              <small><?php echo $lang['trasa15'] ?><br></small>
              <small><?php echo $lang['trasa16'] ?><br></small>
              <small><?php echo $lang['trasa17'] ?><br></small>
              <small><?php echo $lang['trasa18'] ?><br></small>
              <small><?php echo $lang['trasa19'] ?><br></small>

              <p><?php echo $lang['text17'] ?></p>

              <div class="flex-gallery">
                <div class="item">
                  <img src="../img/grb.jpg" alt="grbavica" loading="lazy">
                </div>
                <div class="item">
                  <img src="../img/grb3.jpg" alt="grbavica" loading="lazy">
                </div>
              </div>
            </div>
          </li>
          <li>
            <a><?php echo $lang['projekt5'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 23 mil €</h5>
              <h5><?php echo $lang['angazman1'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['duzina'] ?> 3,0 km<br></small>
              <h5><?php echo $lang['objekti'] ?></h5>
              <small><?php echo $lang['vijadukt'] ?> Bojnik<br></small>
              <small><?php echo $lang['potputnjak'] ?> Osijek<br></small>
              <small><?php echo $lang['natputnjak'] ?> Treševine<br></small>
              <h5><?php echo $lang['trasa'] ?></h5>
              <small><?php echo $lang['trasa20'] ?><br></small>
              <small><?php echo $lang['trasa21'] ?><br></small>
              <small><?php echo $lang['trasa22'] ?><br></small>
              <small><?php echo $lang['trasa23'] ?><br></small>
              <small><?php echo $lang['trasa5'] ?><br></small>

              <p><?php echo $lang['text18'] ?></p>

                <div class="flex-gallery">
                <div class="item">
                  <img src="../img/butila1.jpeg" alt="butila">
                </div>
                <div class="item">
                  <img src="../img/butila2.jpeg" alt="butila">
                </div>
              </div>
            </div>
          </li>
          <li>
            <a><?php echo $lang['projekt6'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 370 mil €</h5>
              <h5><?php echo $lang['angazman4'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['duzina'] ?> 20,3 km<br></small>
              <h5><?php echo $lang['tuneli'] ?></h5>
              <small><?php echo $lang['tunel'] ?> Gaj 850m<br></small>
              <small><?php echo $lang['tunel'] ?> Igman 350m<br></small>
              <small><?php echo $lang['tunel'] ?> Vis 880m<br></small>
              <small><?php echo $lang['tunel'] ?> 25. novembar 2800m<br></small>
              <small><?php echo $lang['tunel'] ?> Grab 400m<br></small>
              <h5><?php echo $lang['objekti'] ?></h5>
              <small><?php echo $lang['vijadukt'] ?> Vlakovo 390m<br></small>
              <small><?php echo $lang['vijadukt'] ?> Gladno Polje 350m<br></small>
              <small><?php echo $lang['vijadukt'] ?> Šamin Gaj 350m<br></small>
              <small><?php echo $lang['vijadukt'] ?> Podgaj 65m<br></small>
              <small><?php echo $lang['most'] ?> Lepenica 1 240m<br></small>
              <small><?php echo $lang['most'] ?> Lepenica 2 220m<br></small>
              <small><?php echo $lang['most'] ?> Bijela 90m<br></small>
              <h5><?php echo $lang['trasa'] ?></h5>
              <small><?php echo $lang['petlja'] ?> Vlakovo<br></small>
              <small><?php echo $lang['petlja'] ?> Lepenica<br></small>
              <small><?php echo $lang['petlja'] ?> Tarčin<br></small>
              <small><?php echo $lang['trasa24'] ?><br></small>
              <small><?php echo $lang['trasa25'] ?><br></small>
              <small><?php echo $lang['trasa26'] ?><br></small>
              <small><?php echo $lang['trasa22'] ?><br></small>
              <small><?php echo $lang['trasa23'] ?><br></small>
              <small><?php echo $lang['trasa27'] ?><br></small>

              <p><?php echo $lang['text19'] ?></p>

              <div class="project-images">
                
               
              </div>
              <div class="flex-gallery">
                <div class="item">
                  <img src="../img/tar1.jpg" alt="grbavica" loading="lazy">
                </div>
                <div class="item">
                  <img src="../img/tar2.jpg" alt="grbavica" loading="lazy">
                </div>
              </div>
            </div>
          </li>
          <li>
            <a><?php echo $lang['projekt7'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 57,6 mil €</h5>
              <h5><?php echo $lang['angazman5'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['tunela'] ?><br></small>
              <small><?php echo $lang['trasa28'] ?><br></small>
              <small><?php echo $lang['trasa29'] ?><br></small>
              <small><?php echo $lang['trasa30'] ?><br></small>
              <small><?php echo $lang['trasa31'] ?><br></small>
              <small><?php echo $lang['trasa32'] ?><br></small>
              <small><?php echo $lang['trasa33'] ?><br></small>
              <small><?php echo $lang['trasa34'] ?><br></small>
              <small><?php echo $lang['trasa35'] ?><br></small>

              <div class="flex-gallery">
                <div class="item">
                  <img src="../img/ivan2.jpg" alt="ivan">
                </div>
                <div class="item">
                  <img src="../img/ivan4.jpg" alt="ivan">
                </div>
              </div>
            </div>
          </li>
          <li>
            <a><?php echo $lang['projekt8'] ?></a>
            <div class="content">
              <h5><?php echo $lang['vrijednost1'] ?> 77,9 mil €</h5>
              <h5><?php echo $lang['angazman5'] ?></h5>
              <h5 style="margin-top:20px"><?php echo $lang['karakteristike'] ?></h5>
              <small><?php echo $lang['duzina'] ?> 4,9 km<br></small>
              <small><?php echo $lang['trasa30'] ?><br></small>
              <small><?php echo $lang['trasa31'] ?><br></small>
              <small><?php echo $lang['trasa32'] ?><br></small>
              <small><?php echo $lang['trasa33'] ?><br></small>
              <small><?php echo $lang['trasa34'] ?><br></small>
              <small><?php echo $lang['trasa35'] ?><br></small>
              <h5><?php echo $lang['objekti'] ?></h5>
              <small><?php echo $lang['most'] ?> Raštelica 1<br></small>
              <small><?php echo $lang['most'] ?> Raštelica 2<br></small>
              <small><?php echo $lang['potputnjak'] ?><br></small>
              <h5><?php echo $lang['trasa'] ?></h5>
              <small><?php echo $lang['trasa36'] ?><br></small>
              <small><?php echo $lang['trasa37'] ?><br></small>
              <small><?php echo $lang['trasa3'] ?><br></small>
              <small><?php echo $lang['trasa4'] ?><br></small>
              <small><?php echo $lang['trasa5'] ?><br></small>

              <div class="flex-gallery">
                <div class="item">
                  <img src="../img/tarcin_ivan1.jpg" alt="ivan">
                </div>
                <div class="item">
                  <img src="../img/tarcin_ivan2.jpg" alt="ivan">
                </div>
              </div>
            </div>
          </li>
          
        </ul> <!-- / accordion -->

        <div class="other-proj">
          <li>
            <a><?php echo $lang['projekt9'] ?></a>
            <small><br><?php echo $lang['angazman6'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt10'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt11'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt12'] ?></a>
            <small><br>Project management</small>
          </li>

          <li>
            <a><?php echo $lang['projekt13'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt14'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt15'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt16'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt17'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt18'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt19'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt20'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt21'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt22'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt23'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt24'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt25'] ?></a>
            <small><br>Project management</small>
          </li>
          <li>
            <a><?php echo $lang['projekt26'] ?></a>
            <small><br><?php echo $lang['angazman7'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt27'] ?></a>
            <small><br><?php echo $lang['angazman8'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt28'] ?></a>
            <small><br><?php echo $lang['angazman9'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt29'] ?></a>
            <small><br><?php echo $lang['angazman10'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt30'] ?></a>
            <small><br><?php echo $lang['angazman11'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt31'] ?></a>
            <small><br><?php echo $lang['angazman11'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt32'] ?></a>
            <small><br><?php echo $lang['angazman7'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt33'] ?></a>
            <small><br><?php echo $lang['angazman7'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt34'] ?></a>
            <small><br><?php echo $lang['angazman13'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt35'] ?></a>
            <small><br><?php echo $lang['angazman11'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt36'] ?></a>
            <small><br><?php echo $lang['angazman11'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt37'] ?></a>
            <small><br><?php echo $lang['angazman7'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt38'] ?></a>
            <small><br><?php echo $lang['angazman8'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt39'] ?></a>
            <small><br><?php echo $lang['angazman12'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt40'] ?></a>
            <small><br><?php echo $lang['angazman14'] ?></small>
          </li>
          <li>
            <a><?php echo $lang['projekt41'] ?></a>
            <small><br><?php echo $lang['angazman15'] ?></small>
          </li>
        </div>

      </div>
    </div>
  </main>


  <?php require '../php/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
  <script>

  </script>

</body>

</html>