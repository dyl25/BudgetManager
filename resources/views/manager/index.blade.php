@extends('layouts.front-app')

@section('tite', 'Gestion des comptes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($accounts->isEmpty())
            <h4>Vous n'avez encore créé aucun compte</h4>
            @endif
            <div class="card text-white bg-success text-center">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <i class="fas fa-plus fa-2x"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text display-5">
                                <a href="{{ route('managers.create') }}" class="text-white"> Créer un nouveau compte</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
