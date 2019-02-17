@extends('layouts.front-app')

@section('title', 'Gestion des comptes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        @if(is_null($mainAccount))
            <h4>Vous n'avez encore créé aucun compte</h4>
            <div class="card bg-success text-center">
                <div class="card-body">
                    <div class="card-text text-white">
                        <a href="{{ route('mainaccounts.create') }}" class="text-white"><i class="fas fa-plus fa-3x"></i> Créer un nouveau compte princiapl</a>
                    </div>
                </div>
            </div>
        @else
            <div class="card text-white {{ $statusClassIndicator }}">
                <div class="card-body text-center">
                    <h5 class="card-title">Compte principal</h5>
                    <p class="card-text display-4">
                        <a href="{{ route('managers.index') }}">{{ $mainAccount->total }} €</a>
                    </p>
                    <p class="card-text">créé le {{ $mainAccount->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
        @endif
        </div>
    </div>
</div>
@endsection
