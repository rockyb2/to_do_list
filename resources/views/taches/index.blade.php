@extends('layout')

@section('title', 'tâches')

@section('content')
    <h1 class="text-3xl text-violet-400 m-2">Liste des tâches</h1>
    <ul>
        @foreach($taches as $tache)
            <li>
                <a href="{{ route('taches.show', $tache) }}">{{ $tache->nom }}</a>
            </li>
        @endforeach
    </ul>
@endsection
