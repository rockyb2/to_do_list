<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'my task')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="flex" >
        <div class="w-1/5 bg-slate-100 flex h-screen flex-col">
        <p class="text-3xl text-violet-400 m-2">Menu</p>
        <div>
            <nav class="m-2 flex-grow">
            <ul class="flex flex-col h-full">
                @auth
                    <li class="flex-grow"><a href="{{ route('taches.create') }}" class="block h-full">Ajouter une tâche</a></li>
                @else
                    <li class="flex-grow"><a href="#" onclick="showLoginPopup()" class="block h-full">Ajouter une tâche</a></li>
                    <a href="{{ route('login') }}" class="m-2">Connexion</a>
                <a href="{{ route('register') }}" class="m-2">Inscription</a>
                @endauth

                <li class="flex-grow"><a href="{{ route('taches.index') }}" class="block h-full">Liste des tâches</a></li>
                <li class="flex-grow"><a href="{{ route('taches.today') }}" class="block h-full">Aujourd'hui</a></li>

                <li class="flex-grow"><a href="{{ route('taches.index') }}" class="block h-full">A venir</a></li>
            </ul>
            </nav>
        </div>
        <div>
            <p class="text-3xl text-violet-400 m-2">Tags</p>
            <nav class="m-2 flex-grow">
                <ul>
                <li><a href="{{ route('taches.index') }}" class="block">Tag 1</a></li>
                <li><a href="{{ route('taches.index') }}" class="block">Tag 2</a></li>
                <li><a href="{{ route('taches.index') }}" class="block">Tag 3</a></li>
            </ul>
            </nav>

        </div>
        <div>
            <p class="text-3xl text-violet-400 m-2">Projets</p>
            <nav class="m-2 flex-grow">
                <ul>
                <li><a href="{{ route('taches.index') }}" class="block">Projet 1</a></li>
                <li><a href="{{ route('taches.index') }}" class="block">Projet 2</a></li>
                <li><a href="{{ route('taches.index') }}" class="block">Projet 3</a></li>
            </ul>
            </nav>

        </div>

    </div>
        <div class="w-4/5">
            @yield('content')
        </div>
    </section>
</body>
<script>
        function showLoginPopup() {
            alert('Veuillez vous connecter pour créer un article.');
        }
    </script>



</html>
