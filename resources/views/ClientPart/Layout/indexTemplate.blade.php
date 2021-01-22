<!DOCTYPE html>
<html lang="en">

<head>

    @include('ClientPart.Partials.index.head')

</head>

<body>

  <!-- Navigation -->
  @include('ClientPart.Partials.index.nav')

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Bienvenue sur KeySold !</h1>
      <p class="lead">Achète tes clés CD à bas prix et joue à tes jeux favoris !!</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Jeu 1</h4>
            <p class="card-text">Description...</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">En savoir plus...</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Jeu 2</h4>
            <p class="card-text">Description...</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">En savoir plus...</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Jeu 3</h4>
            <p class="card-text">Description...</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">En savoir plus...</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Jeu 4</h4>
            <p class="card-text">Description...</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">En savoir plus...</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('ClientPart.Partials.index.footer')

  <!-- Bootstrap core JavaScript -->
  @include('ClientPart.Partials.index.footer-script')

</body>

</html>
