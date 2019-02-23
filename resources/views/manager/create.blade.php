@extends('layouts.front-app')

@section('title', 'Création d\'un compte')

@section('content')
<div class="container">
    <div class="row mt-5">

        <div class="col-md-8 jumbotron  mx-auto">
            <h4 class="display-4">Création d'un nouveau compte</h4>
                @if($errors->any() || session('errorMsg'))
                    @include('layouts.errors')
                @endif
                <form action="{{ route('managers.store', $mainAccount->id) }}" method="POST" class="text-center my-4">
                    @csrf
                    <input type="hidden" name="mainAccount" value="{{ $mainAccount->id }}">

                    <div class="form-group offset-md-3 col-md-5">
                        <label for="total">Nom du compte</label>
                        <div class="input-group">
                            <input type="text" name="description" id="description" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="from">Date de début</label>
                        <input type="date" name="from" id="from" ario-describedby="helpBlockFrom">
                        <small id="helpBlockFrom" class="text-form text-muted">La date de début pour la commencement du compte</small>
                    </div>

                    <div class="form-group">
                        <label for="to">Date de fin</label>
                        <input type="date" name="to" id="to" aria-describedby="helpBlockTo">
                        <small id="helpBlockTo" class="text-form text-muted">La date de fin pour la cloture du compte</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                
        </div>

    </div>
</div>
@endsection
