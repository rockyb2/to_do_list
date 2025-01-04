@extends('layout')

@section('title', 'Créer une tâche')

@section('content')
 <div class="flex justify-center items-center">
    <div class
    ="w-1/2">
        <h1 class="text-3xl text-violet-400 m-2">Créer une tâche</h1>
    <form action="{{ route('taches.store') }}" method="post">
        @csrf
        <div class="m-2">

            <input type="text" name="nom" id="nom" placeholder="nom de la tâche" class="border border-slate-200 rounded-xl ">
        </div>
        <div class="m-2">

            <input type="text" name="description" id="description" placeholder="description" class="border border-slate-200 rounded-xl ">
        </div>
        <div class="m-2">

            <input type="date" name="date" id="date" class="border border-slate-200 p-1 rounded-xl">
        </div>
        <div class="m-2">
            <button type="submit" class="bg-violet-400 text-white px-4 py-1 hover:text-violet-400
             hover:bg-slate-300 hover:border-violet-400">Créer</button>
        </div>
    </form>
    </div>
 </div>

@endsection
