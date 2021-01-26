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
    @include('flash::message')

    <!-- Jumbotron Header -->
    <div class="jumbotron my-4">
      <h1 class="display-4">Mon compte</h1>
    </div>

    <!-- Page Feature -->
    <div class="text-center">

      <div class="mb-5">
        <div class="text-center">
          <div class="card-body">
            <p class="card-text">Nom : (Valeur)</p>
            <p class="card-text">Prenom : (Valeur)</p>
            <p class="card-text">email : (Valeur)</p>
            <p class="card-text">Date de naissance : (Valeur)</p>
          </div>
            <a href="{{ url('/updatemembre/{id}') }}" class="btn btn-primary">Modifier les informations du compte</a> {{-- Faire en sorte que lien fonctione par "ID" --}}
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
