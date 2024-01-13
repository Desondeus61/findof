@extends('admin_dashbord.components.app')
@section('page_titre')
    Les clients non validés
@endsection
@section('page_container')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Les clients non validés</h2>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Clients non validés</h5>
                        </div>
                        @if ($clients->count() > 0)
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-nowrap text-center">Numero de compte</th>
                                                <th class="text-nowrap text-center">Nom</th>
                                                <th class="text-nowrap text-center">Prenom</th>
                                                <th class="text-nowrap text-center">Email</th>
                                                <th class="text-nowrap text-center">Telephone</th>
                                                <th class="text-nowrap text-center">civilite</th>
                                                <th class="text-nowrap text-center">Pays</th>
                                                <th class="text-nowrap text-center">Adresse</th>
                                                <th class="text-nowrap text-center">Ville</th>
                                                <th class="text-nowrap text-center">Piece</th>
                                                <th class="text-nowrap text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clients as $client)
                                            <tr>
                                                <td class="text-center">{{$client->numero_compte}}</td>
                                                <td class="text-center">{{$client->nom}}</td>
                                                <td class="text-center">{{$client->prenom}}</td>
                                                <td class="text-center">{{$client->email}}</td>
                                                <td class="text-center">{{$client->telephone}}</td>
                                                <td class="text-center">{{$client->civilite}}</td>
                                                <td class="text-center">{{$client->pays}}</td>
                                                <td class="text-center">{{$client->adresse}}</td>
                                                <td class="text-center">{{$client->ville}}</td>
                                                <td class="text-center"><a href="{{Storage::url($client->piece)}}" target="_blank" rel="noopener noreferrer">Piece</a>  </td>
                                                <td class="text-center">
                                                    <div class="d-flex">
                                                        <a href="/admin/valide-client/{{$client->id}}" class="btn btn-primary">
                                                            valider
                                                        </a>
                                                        <button class="btn btn-danger mx-2" data-toggle="modal"
                                                                data-target="#delete_modal_{{ $client->id }}">Supprimer</button>
                                                    </div>
                                                </td>
                                                {{-- supreeeion de client  --}}
                                                <div class="modal " id="delete_modal_{{ $client->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Supprimer
                                                                    {{ $client->nom }} </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">
                                                                    <i class="anticon anticon-close"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Êtes vous sur de vouloir supprimer cet
                                                                utilisateur?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-success m-r-10"
                                                                    data-dismiss="modal">Non</button>
                                                                <a href="/admin/delete-client/{{ $client->id }}"
                                                                    class="btn btn-danger">
                                                                    Supprimer
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- fin suppression de client  --}}

                                                 </tr>

                                                 @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <div class="card" style="height: 200px">
                                        <div class="card-body shadow">
                                            <div class="d-flex h-100 flex-column justify-content-center align-items-center">
                                                <a href="#" class="text-primary "><i class="mdi mdi-account-plus"
                                                        style="font-size: 100px"></i></a>
                                                <p class="text-center mt-2 font-weight">
                                                    Pas de client non validé
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content goes Here -->
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->

    <!-- Footer END -->
@endsection
