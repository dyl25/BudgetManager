@extends('layouts.front-app')

@section('tite', 'Gestion des comptes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($accounts->isEmpty())
            <h4>Vous n'avez encore créé aucun compte</h4>
            @else
            @foreach($accounts as $account)
            <div class="card mb-3 {{ $account->is_positif ? 'border-success' : 'brder-danger' }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $account->description }}</h5>
                    <p class="card-text display-4">
                        <a href="{{ route('managers.view', $account->id) }}">{{ $account->total }} €</a>
                    </p>
                    <p class="card-text">créé le {{ $account->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            @endforeach
            @endif
            <div class="card text-white bg-success text-center">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <i class="fas fa-plus fa-2x"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text display-5">
                                <a href="{{ route('managers.create', $mainAccount->id) }}" class="text-white"> Créer un nouveau compte</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($accounts as $account)
            <account :data-url="{{ route('managers.view', $account->id) }}" :data-account="{{$account}}"></account>
            @endforeach
        </div>
    </div>
</div>
@endsection 