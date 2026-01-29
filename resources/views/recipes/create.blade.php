<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une recette</title>
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
    <main class="max-w-4xl mx-auto py-6 px-4">
        
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Ajouter une nouvelle recette</h2>
            <p class="text-gray-600 mt-2">Remplissez le formulaire ci-dessous pour partager votre recette</p>
        </div>

        <!-- Formulaire -->
        <div class="bg-white rounded-lg shadow-md p-8">
            
            <form action="#" method="POST">
                
                <!-- Titre -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Titre de la recette *
                    </label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Ex: Tajine marocain"
                    >
                </div>

                <!-- Catégorie -->
                <div class="mb-6">
                    <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">
                        Catégorie *
                    </label>
                    <select 
                        id="category" 
                        name="category" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                        <option value="">Sélectionnez une catégorie</option>
                        <option value="Entrée">Entrée</option>
                        <option value="Plat principal">Plat principal</option>
                        <option value="Dessert">Dessert</option>
                        <option value="Boisson">Boisson</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                        Description *
                    </label>
                    <textarea 
                        id="description" 
                        name="description" 
                        rows="4" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Décrivez votre recette en quelques phrases..."
                    ></textarea>
                </div>

                <!-- Ingrédients -->
                <div class="mb-6">
                    <label for="ingredients" class="block text-sm font-semibold text-gray-700 mb-2">
                        Ingrédients *
                    </label>
                    <textarea 
                        id="ingredients" 
                        name="ingredients" 
                        rows="6" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Listez les ingrédients (un par ligne ou séparés par des virgules)"
                    ></textarea>
                </div>

                <!-- Étapes -->
                <div class="mb-6">
                    <label for="steps" class="block text-sm font-semibold text-gray-700 mb-2">
                        Étapes de préparation *
                    </label>
                    <textarea 
                        id="steps" 
                        name="steps" 
                        rows="8" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Décrivez les étapes de préparation..."
                    ></textarea>
                </div>

                <!-- Image URL -->
                <div class="mb-6">
                    <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">
                        URL de l'image (optionnel)
                    </label>
                    <input 
                        type="url" 
                        id="image" 
                        name="image"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="https://exemple.com/image.jpg"
                    >
                </div>

                <!-- Boutons -->
                <div class="flex gap-4">
                    <button 
                        type="submit"
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-200"
                    >
                        ✅ Enregistrer la recette
                    </button>
                    
                    <a 
                        href="/"
                        class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg font-semibold hover:bg-gray-300 transition duration-200 text-center"
                    >
                        ❌ Annuler
                    </a>
                </div>

            </form>

        </div>

    </main>

</body>
</html>