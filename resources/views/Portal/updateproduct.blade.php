<!DOCTYPE html>
<html lang="en">

<head>

    @include('Partials.head')

</head>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Modifier d'un produit</h1>
                                    </div>
                                    <form class="user" action="/updateproduct" method="post">
                                    {{csrf_field()}}
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="hidden" name="id" 
                                                placeholder="" value="{{$product->id}}" label="Id" id="InputId" >
                                        </div>
                                      
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="InputNom">Nom: </label>
                                            <input type="text" name="nom" class="form-control form-control-user" 
                                                placeholder="" value="{{$product->nom}}" label="Nom" id="InputNom" aria-describedby="nomHelp">
                                            @if($errors->has('nom'))
                                            <small id="nomHelp" class="form-text text-muted">{{$errors->first('nom')}}</small>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="InputDescription">Description: </label>
                                            <input type="text" name="description" class="form-control form-control-user" 
                                                placeholder="" value="{{$product->description}}" label="Description" id="InputDescription" aria-describedby="descriptionHelp">
                                            @if($errors->has('description'))
                                            <small id="descriptionHelp" class="form-text text-muted">{{$errors->first('description')}}</small>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="InputPrix">Prix: </label>
                                            <input type="text" name="prix" class="form-control form-control-user" 
                                                placeholder="" value="{{$product->prix}}" label="Prix" id="InputPrix" aria-describedby="prixHelp">
                                            @if($errors->has('prix'))
                                            <small id="prixHelp" class="form-text text-muted">{{$errors->first('prix')}}</small>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="InputQuantite">Quantite: </label>
                                            <input type="text" name="quantite" class="form-control form-control-user" 
                                                placeholder="" value="{{$product->quantite}}" label="Quantite" id="InputQuantite" aria-describedby="quantiteHelp">
                                            @if($errors->has('quantite'))
                                            <small id="quantiteHelp" class="form-text text-muted">{{$errors->first('quantite')}}</small>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="InputCode">Code: </label>
                                            <input type="text" name="code" class="form-control form-control-user" 
                                                placeholder="" value="{{$product->code}}" label="Code" id="InputCode" aria-describedby="codeHelp">
                                            @if($errors->has('code'))
                                            <small id="codeHelp" class="form-text text-muted">{{$errors->first('code')}}</small>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="InputPhoto">Photo: </label>
                                            <input type="file" name="photo" value="{{$product->photo}}">
                                        </div>
                                        <hr>
                                        <input type="submit" value="Modifier" class="btn btn-primary btn-user btn-block">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('Partials.footer-script')

</body>

</html>