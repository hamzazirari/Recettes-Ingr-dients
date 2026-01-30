<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Recettes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-red-50 min-h-screen">
    
    <!-- Navigation Header -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo & Title -->
                <div class="flex items-center space-x-3">
                    <div class="bg-gradient-to-r from-orange-500 to-red-600 p-3 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">
                            Recettes & Ingrédients
                        </h1>
                        <p class="text-xs text-gray-500">Partagez vos meilleures recettes</p>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-gray-700 hover:text-orange-600 font-medium transition duration-300">
                        Accueil
                    </a>
                    <a href="#" class="text-gray-700 hover:text-orange-600 font-medium transition duration-300">
                        Catégories
                    </a>
                    <a href="#" class="text-gray-700 hover:text-orange-600 font-medium transition duration-300">
                        À propos
                    </a>
                    
                    <a href="/recipes/create">
                        <button  class="bg-gradient-to-r from-orange-500 to-red-600 text-white px-6 py-2.5 rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-300">
                        + Ajouter une recette 
                    </button>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-5xl font-bold mb-4 animate-fade-in">
                    Découvrez des Recettes Incroyables
                </h2>
                <p class="text-xl text-orange-100 mb-8 max-w-2xl mx-auto">
                    Explorez notre collection de recettes délicieuses partagées par notre communauté de passionnés de cuisine
                </p>
                
                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher une recette, un ingrédient..." 
                               class="w-full px-6 py-4 rounded-full text-gray-800 shadow-2xl focus:outline-none focus:ring-4 focus:ring-orange-300 transition duration-300 pr-14">
                        <button class="absolute right-2 top-2 bg-gradient-to-r from-orange-500 to-red-600 text-white p-3 rounded-full hover:shadow-lg transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transform hover:scale-105 transition duration-300">
                <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-800">{{ count($recipes) }}</h3>
                <p class="text-gray-600 font-medium">Recettes disponibles</p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transform hover:scale-105 transition duration-300">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-800">1,234</h3>
                <p class="text-gray-600 font-medium">Membres actifs</p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transform hover:scale-105 transition duration-300">
                <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-800">5,678</h3>
                <p class="text-gray-600 font-medium">Recettes favorites</p>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
        <div class="flex flex-wrap gap-3 justify-center">
            <button class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-300">
                🍽️ Toutes
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold shadow-md hover:shadow-lg hover:bg-gray-50 transform hover:-translate-y-0.5 transition duration-300">
                🥗 Entrées
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold shadow-md hover:shadow-lg hover:bg-gray-50 transform hover:-translate-y-0.5 transition duration-300">
                🍝 Plats
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold shadow-md hover:shadow-lg hover:bg-gray-50 transform hover:-translate-y-0.5 transition duration-300">
                🍰 Desserts
            </button>
            <button class="px-6 py-3 bg-white text-gray-700 rounded-full font-semibold shadow-md hover:shadow-lg hover:bg-gray-50 transform hover:-translate-y-0.5 transition duration-300">
                🥤 Boissons
            </button>
        </div>
    </div>

    <!-- Main Content - Recipes Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Recettes Populaires</h2>
            <div class="h-1 w-24 bg-gradient-to-r from-orange-500 to-red-600 rounded-full"></div>
        </div>

        @if(count($recipes) > 0)
        <!-- Grid de recettes -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @foreach($recipes as $recipe)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 group">
                
                <!-- Image -->
                <div class="relative overflow-hidden h-56">
                    @if($recipe->image)
    <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
@else
    <div class="w-full h-48 bg-gradient-to-r from-orange-400 to-red-500 flex items-center justify-center">
        <span class="text-white text-6xl">🍳</span>
    </div>
@endif
                    
                    <!-- Badge Catégorie -->
                    <div class="absolute top-4 right-4">
                        <span class="bg-white/90 backdrop-blur-sm text-gray-800 text-xs px-4 py-2 rounded-full font-bold shadow-lg">
                            {{ $recipe->category }}
                        </span>
                    </div>

                    <!-- Favorite Icon -->
                    <button class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm p-2 rounded-full shadow-lg hover:bg-red-500 hover:text-white transition duration-300 group/fav">
                        <svg class="w-5 h-5 text-gray-600 group-hover/fav:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>

                <!-- Contenu -->
                <div class="p-6">
                    <!-- Titre -->
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition duration-300">
                        {{ $recipe->title }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        {{ Str::limit($recipe->description, 100) }}
                    </p>

                    <!-- Meta Info -->
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>30 min</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span>4 pers</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>4.8</span>
                        </div>
                    </div>

                    <!-- Bouton Voir -->
                    <button class="w-full bg-gradient-to-r from-orange-500 to-red-600 text-white py-3 rounded-xl font-semibold shadow-md hover:shadow-xl transform hover:-translate-y-0.5 transition duration-300">
                        Voir la recette
                    </button>
                </div>
            </div>
            @endforeach

        </div>

        @else
        <!-- Message si aucune recette -->
        <div class="bg-white rounded-2xl shadow-xl p-12 text-center max-w-2xl mx-auto">
            <div class="bg-orange-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Aucune recette pour le moment</h3>
            <p class="text-gray-600 mb-8">Soyez le premier à partager une délicieuse recette avec notre communauté !</p>
            <button class="bg-gradient-to-r from-orange-500 to-red-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-300">
                + Ajouter ma première recette
            </button>
        </div>
        @endif

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <h4 class="text-lg font-bold mb-4 text-orange-400">Recettes & Ingrédients</h4>
                    <p class="text-gray-400 text-sm">
                        Votre plateforme de partage de recettes culinaires. Découvrez, partagez et savourez !
                    </p>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Navigation</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-orange-400 transition">Accueil</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Recettes</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Catégories</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">À propos</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Catégories</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-orange-400 transition">Entrées</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Plats principaux</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Desserts</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Boissons</a></li>
                    </ul>
                </div>

                <!-- Social -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-orange-600 transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-orange-600 transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-orange-600 transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2026 Recettes & Ingrédients. Tous droits réservés. | Fait avec ❤️ par vous</p>
            </div>
        </div>
    </footer>

</body>
</html>