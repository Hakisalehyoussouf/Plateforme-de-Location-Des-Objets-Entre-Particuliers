@extends('layouts/admin/admin')

@section('contenu')

            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Liste des partenaires</p>
                            <div class="table-responsive">
                                <table id="recent-purchases-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($partenaires as $partenaire)
                                        <tr>
                                            <td>{{ $partenaire->NOM }}</td>
                                            <td>{{ $partenaire->PRENOM }}</td>
                                            <td>{{ $partenaire->EMAIL }}</td>
                                            <td>
                                                <a href="{{ route('/supprimerpartenaire',['email_par'=>$partenaire->EMAIL]) }}" role="button" class="btn btn-outline-danger">Supprimer</a>
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