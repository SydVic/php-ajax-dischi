<?php
  require_once __DIR__ . "/database.php";
?>

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

  <!-- HEADER -->
  <header class="my_header d-flex align-items-center ps-4">
    <div class="logo-wrapper">
      <img class="logo" src="./img/logo-small.svg" alt="">
    </div>
  </header>
  <!-- /HEADER -->

  <!-- MAIN -->
  <main>
    <section class="my_main-content pb-5">
      <div class="my_container">
        <!-- ROW -->
        <div class="row row-cols-5 pb-5">
          <?php foreach($database as $key => $value) {
          ?>
          <!-- CARD -->
          <div class="my_disc-card text-center mt-4 pt-3">
            <div class="my_card-wrapper h-100 px-3 pt-3">
              <div class="my_disc-img-wrapper">
                <img src="<?php echo $database[$key]['poster'];?>" alt="<?php echo $database[$key]['author'] . " " . $database[$key]['title'];?>">
              </div>
              <h4 class="my_disc-title text-uppercase mt-3">
                <?php
                  echo $database[$key]['title'];
                ?>
              </h4>
              <div class="my_disc-author pt-3">
                <?php
                  echo $database[$key]['author'];
                ?>
              </div>
              <div class="my_disc-year pb-2">
                <?php
                  echo $database[$key]['year'];
                ?>
              </div>
            </div>
          </div>
          <!-- /CARD -->
          <?php } ?>
        </div>
        <!-- /ROW -->
      </div>
    </section>
  </main>
  <!-- /MAIN -->

</body>
</html>