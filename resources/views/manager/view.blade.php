@extends('layouts.front-app')

@section('tite', 'Compte: {{ $account->description }}')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-3 {{ $account->is_positif ? 'border-success' : 'border-danger' }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $account->description }}</h5>
                    <p class="card-text display-4">
                        <p>{{ $account->total }} €</p>
                    </p>
                    <p class="card-text">créé le {{ $account->created_at->format('d/m/Y') }}</p>
                </div>
            </div>

            @if($account->entries->isEmpty())
            <h4>Vous n'avez encore aucune entrée</h4>
            @else
            <entries :data-account-id="{{ $account->id }}"></entries>
            @endif


        </div>
    </div>
</div>
@endsection 