@extends('layout')

@section('content')
    <h1 class="text-3xl text-violet-400 m-2">Aujourd'hui</h1>
    <ul>
        @foreach($taches as $tache)
            <li>
                {{ $tache->titre }} - {{ $tache->date_limite }}
            </li>
        @endforeach
    </ul>
@endsection
