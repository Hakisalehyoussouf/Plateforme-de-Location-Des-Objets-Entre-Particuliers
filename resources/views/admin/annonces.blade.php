@extends('layouts/admin/admin')

@section('contenu')

            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Liste des annonces</p>
                            <div class="table-responsive">
                                <table id="recent-purchases-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Annonce Num</th>
                                            <th>Categories</th>
                                            <th>Ville</th>
                                            <th>Prix</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($annonces as $annonce)
                                        <tr>
                                            <td>{{ $annonce->id_annonce }}</td>
                                            <td>{{ $annonce->Categorie }}</td>
                                            <td>{{ $annonce->ville }}</td>
                                            <td>{{ $annonce->prix }} Dhrs</td>
                                            <td>{{ $annonce->status }}</td>
                                            <td>
                                                <a href="#" role="button" class="btn btn-outline-success">Editer</a>
                                                <a href="{{ route('/supprimerannonce',['id_annonce' => $annonce->id_annonce]) }}" role="button" class="btn btn-outline-danger">Supprimer</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  


@endsection