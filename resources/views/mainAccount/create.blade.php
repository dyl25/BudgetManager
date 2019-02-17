@extends('layouts.front-app')

@section('title', 'Création du compte principal')

@section('content')
<div class="container">
    <div class="row mt-5">

        <div class="col-md-8 jumbotron  mx-auto">
            <h4 class="display-4">Création de votre compte principal</h4>
                @if($errors->any())
                    @include('layouts.errors')
                @endif
                <form action="{{ route('mainaccounts.store') }}" method="POST" class="text-center my-4">
                    @csrf
                    <div class="row">
                        <div class="form-group offset-md-3 col-md-5">
                            <label for="total">Somme de départ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="prependTotal">€</span>
                                </div>
                                <input type="number" name="total" id="total" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                
        </div>

    </div>
</div>
@endsection
