@extends('layouts.app')


@section('content')


    <h1>Modifier projet</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('projet/'. $projet->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $projet->nom }}">

        </div>

        <div class="form-group mb-3">

            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Entrer Telephone" name="description" value="{{ $projet->description }}">

        </div>

        <div class="form-group mb-3">

            <label for="dateDebut">Date Debut:</label>
            <input type="date" class="form-control" id="dateDebut" placeholder="Entrer date debut" name="dateDebut" value="{{ $projet->dateDebut }}">

        </div>

        <div class="form-group mb-3">

            <label for="dateFin">date Fin:</label>
            <input type="date" class="form-control" id="dateFin" placeholder="Entrer date fin" name="dateFin" value="{{ $projet->dateFin }}">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection