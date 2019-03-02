@extends('layouts.front-app')

@section('tite', 'Compte: {{ $account->description }}')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="card mb-3 {{ $account->is_positif ? 'border-success' : 'brder-danger' }}">
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
            @foreach($account->entries as $entry)
            <div class="card mb-3 {{ $entry->is_positif ? 'border-success' : 'brder-danger' }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $entry->description }}</h5>
                    <p class="card-text display-4">
                        <p>{{ $entry->amount }} €</p>
                    </p>
                    <p class="card-text">créé le {{ $entry->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection 