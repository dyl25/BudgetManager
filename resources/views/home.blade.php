@extends('layouts.front-app')

@section('tite', 'Gestion des comptes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Vous n'avez encore créé aucun compte</h4>
            <div class="card bg-success text-center">
                <div class="card-body">
                    <div class="card-text text-white">
                        <a href="#" class="text-white"><i class="fas fa-plus fa-3x"></i> Créer un nouveau compte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
