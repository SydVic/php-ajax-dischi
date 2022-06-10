<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php Dischi</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    include_once __DIR__ . "/database.php";
  ?>

  <!-- HEADER -->
  <header class="my_header d-flex align-items-center ps-4">
    <img class="logo" src="./img/logo-small.svg" alt="">
  </header>
  <!-- /HEADER -->

  <!-- MAIN -->
  <main>
    <section class="my_main-content pb-5">
      <div class="my_container">
        <!-- ROW -->
        <div class="row row-cols-5 pb-5">
          <!-- CARD -->
          <div class="my_disc-card text-center mt-4 pt-3">
            <div class="my_card-wrapper h-100 px-3 pt-3">
              <div class="my_disc-img-wrapper">
                <img src="
                  <?php
                    echo $database[0]['poster'];
                  ?>
                " alt="">
              </div>
              <h4 class="my_disc-title text-uppercase mt-3">
                <?php
                 echo $database[0]['title'];
                ?>
              </h4>
              <div class="my_disc-author pt-3">
                <?php
                  echo $database[0]['author'];
                ?>
              </div>
              <div class="my_disc-year pb-2">
                <?php
                  echo $database[0]['year'];
                ?>
              </div>
            </div>
          </div>
          <!-- /CARD -->

          <!-- CARD -->
          <div class="my_disc-card text-center mt-4 pt-3">
            <div class="my_card-wrapper h-100 px-3 pt-3">
              <div class="my_disc-img-wrapper">
                <img src="
                  <?php
                    echo $database[1]['poster'];
                  ?>
                " alt="">
              </div>
              <h4 class="my_disc-title text-uppercase mt-3">
                <?php
                  echo $database[1]['title'];
                ?>
              </h4>
              <div class="my_disc-author pt-3">
                <?php
                  echo $database[1]['author'];
                ?>
              </div>
              <div class="my_disc-year pb-2">
                <?php
                  echo $database[1]['year'];
                ?>
              </div>
            </div>
          </div>
          <!-- /CARD -->

          <!-- CARD -->
          <div class="my_disc-card text-center mt-4 pt-3">
            <div class="my_card-wrapper h-100 px-3 pt-3">
              <div class="my_disc-img-wrapper">
                <img src="
                  <?php
                    echo $database[2]['poster'];
                  ?>
                " alt="">
              </div>
              <h4 class="my_disc-title text-uppercase mt-3">
                <?php
                  echo $database[2]['title'];
                ?>
              </h4>
              <div class="my_disc-author pt-3">
                <?php
                  echo $database[2]['author'];
                ?>
              </div>
              <div class="my_disc-year pb-2">
                <?php
                  echo $database[2]['year'];
                ?>
              </div>
            </div>
          </div>
          <!-- /CARD -->

          <!-- CARD -->
          <div class="my_disc-card text-center mt-4 pt-3">
            <div class="my_card-wrapper h-100 px-3 pt-3">
              <div class="my_disc-img-wrapper">
                <img src="
                  <?php
                    echo $database[3]['poster'];
                  ?>
                " alt="">
              </div>
              <h4 class="my_disc-title text-uppercase mt-3">
                <?php
                  echo $database[3]['title'];
                ?>
              </h4>
              <div class="my_disc-author pt-3">
                <?php
                  echo $database[3]['author'];
                ?>
              </div>
              <div class="my_disc-year pb-2">
                <?php
                  echo $database[3]['year'];
                ?>
              </div>
            </div>
          </div>
          <!-- /CARD -->

          <!-- CARD -->
          <div class="my_disc-card text-center mt-4 pt-3">
            <div class="my_card-wrapper h-100 px-3 pt-3">
              <div class="my_disc-img-wrapper">
                <img src="
                  <?php
                    echo $database[4]['poster'];
                  ?>
                " alt="">
              </div>
              <h4 class="my_disc-title text-uppercase mt-3">
                <?php
                  echo $database[4]['title'];
                ?>
              </h4>
              <div class="my_disc-author pt-3">
                <?php
                  echo $database[4]['author'];
                ?>
              </div>
              <div class="my_disc-year pb-2">
                <?php
                  echo $database[4]['year'];
                ?>
              </div>
            </div>
          </div>
          <!-- /CARD -->
        </div>
        <!-- /ROW -->
      </div>
    </section>
  </main>
  <!-- /MAIN -->

</body>
</html>