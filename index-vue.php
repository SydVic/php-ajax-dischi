<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dischi vue api</title>
  <!-- AXIOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJS -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="root">
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
            <div v-for="disc in discs" class="my_disc-card text-center mt-4 pt-3">
              <div class="my_card-wrapper h-100 px-3 pt-3">
                <div class="my_disc-img-wrapper">
                  <img :src="disc.poster" :alt="disc.author + ' ' + disc.title">
                </div>
                <h4 class="my_disc-title text-uppercase mt-3">
                  {{ disc.title }}
                </h4>
                <div class="my_disc-author pt-3">
                {{ disc.author }}
                </div>
                <div class="my_disc-year pb-2">
                {{ disc.year }}
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
  </div>

  <script src="./js/script.js"></script>

</body>
</html>