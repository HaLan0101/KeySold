@extends('Layout.app')
@section('contenu')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">L'information des produits.</p>
                    <a href="{{url('/createproduct')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Créer d'un produit</span>
                    </a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">      
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Produits</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Quantité</th>
                                            <th>Prix</th>
                                            <th>Code</th>
                                            <th>Photo</th>
                                            <th>Avis et note moyenne</th>
                                            <th>Modification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->nom}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->quantite}}</td>
                                            <td>{{$product->prix}}</td>
                                            <td>{{$product->code}}</td>
                                            <td>{{$product->photo}}</td>
                                            <td><a href="">Ici(vers la page d'un product détaillé)</a></td>
                                            <td><a href="">Ici</a></td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
@endsection