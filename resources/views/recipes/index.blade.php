<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des recettes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">
            <h1 class="text-3xl font-bold text-gray-900">🍽️ Ma Plateforme de Recettes</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 px-4">
        
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Liste des recettes</h2>
            <p class="text-gray-600 mt-2">{{ count($recipes) }} recette(s) disponible(s)</p>
        </div>

        <!-- Grid de recettes -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach($recipes as $recipe)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                
                <!-- Image -->
                @if($recipe->image)
                    <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-r from-orange-400 to-red-500 flex items-center justify-center">
                        <span class="text-white text-6xl">🍳</span>
                    </div>
                @endif

                <!-- Contenu -->
                <div class="p-6">
                    <!-- Titre -->
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $recipe->title }}</h3>
                    
                    <!-- Catégorie -->
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-semibold">
                        {{ $recipe->category }}
                    </span>

                    <!-- Description -->
                    <p class="text-gray-600 mt-4 line-clamp-3">
                        {{ Str::limit($recipe->description, 100) }}
                    </p>

                    <!-- Bouton -->
                    <div class="mt-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">
                            Voir la recette →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <!-- Message si aucune recette -->
        @if(count($recipes) == 0)
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-yellow-700">
                        Aucune recette disponible pour le moment. Ajoutez votre première recette !
                    </p>
                </div>
            </div>
        </div>
        @endif

    </main>

</body>
</html>