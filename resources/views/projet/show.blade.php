@extends('layouts.app')


@section('content')

    <h1>Gestion projet</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $projet->nom }}</td>
        </tr>

        <tr>

            <th>Description:</th>
            <td>{{ $projet->description }}</td>

        </tr>

        <tr>

            <th>Date Debut:</th>
            <td>{{ $projet->dateDebut }}</td>

        </tr>

        <tr>

            <th>Date Fin:</th>
            <td>{{ $projet->dateFin }}</td>

        </tr>

    </table>

@endsection