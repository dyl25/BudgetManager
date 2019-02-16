@extends('layouts.front-app')

@section('title', 'Création du compte principal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="form-group">
                    <div class="input-group">
                        <label for="total">Somme de départ</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="prependTotal">€</span>
                        </div>
                        <input type="number" name="total" id="total" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection
