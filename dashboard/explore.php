<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Explorer - Duo Learn</title>
    <link rel="shortcut icon" href="../img/Image1.png" type="image/x-icon">
    <script src="../tailwindcsscdn.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        violet: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7C3AED', // Couleur principale - Violet profond
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        },
                        turquoise: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0EA5E9', // Couleur secondaire - Turquoise vif
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        rose: {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            200: '#fecdd3',
                            300: '#fda4af',
                            400: '#fb7185',
                            500: '#F43F5E', // Couleur d'accent - Rose corail
                            600: '#e11d48',
                            700: '#be123c',
                            800: '#9f1239',
                            900: '#881337',
                        },
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    borderRadius: {
                        'xl': '1rem',
                        '2xl': '1.5rem',
                        '3xl': '2rem',
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-50 min-h-screen font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Navigation -->
        <aside class="hidden md:flex md:flex-col w-64 bg-white shadow-lg z-10">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-r from-violet-600 to-turquoise-600 flex items-center justify-center text-white font-bold text-xl">DL</div>
                    <h1 class="ml-3 text-2xl font-bold bg-gradient-to-r from-violet-600 to-turquoise-600 text-transparent bg-clip-text">DuoLearn</h1>
                </div>
            </div>
            
            <nav class="flex-1 px-4 pb-4">
                <div class="space-y-2">
                    <a href="../index.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-home text-lg w-6"></i>
                        <span class="ml-3">Accueil</span>
                    </a>
                    <a href="./explore.php" class="flex items-center px-4 py-3 text-violet-600 bg-violet-50 rounded-xl">
                        <i class="fas fa-compass text-lg w-6"></i>
                        <span class="ml-3 font-medium">Explorer</span>
                    </a>
                    <a href="./messages.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-comment-alt text-lg w-6"></i>
                        <span class="ml-3">Messages</span>
                    </a>
                    <a href="notifications.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-bell text-lg w-6"></i>
                        <span class="ml-3">Notifications</span>
                    </a>
                    <a href="./profil.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-user text-lg w-6"></i>
                        <span class="ml-3">Profil</span>
                    </a>
                </div>
                
                <div class="mt-8">
                    <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Mes langues</h3>
                    <div class="mt-2 space-y-2">
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                            <span class="w-6 h-6 rounded-full flex items-center justify-center bg-turquoise-100 text-turquoise-600 text-xs font-bold">EN</span>
                            <span class="ml-3">Anglais</span>
                            <span class="ml-auto px-2 py-1 text-xs rounded-full bg-turquoise-100 text-turquoise-600">B2</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                            <span class="w-6 h-6 rounded-full flex items-center justify-center bg-violet-100 text-violet-600 text-xs font-bold">ES</span>
                            <span class="ml-3">Espagnol</span>
                            <span class="ml-auto px-2 py-1 text-xs rounded-full bg-violet-100 text-violet-600">A2</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                            <span class="w-6 h-6 rounded-full flex items-center justify-center bg-rose-100 text-rose-600 text-xs font-bold">JP</span>
                            <span class="ml-3">Japonais</span>
                            <span class="ml-auto px-2 py-1 text-xs rounded-full bg-rose-100 text-rose-600">A1</span>
                        </a>
                    </div>
                </div>
                
                <div class="mt-8">
                    <button class="w-full px-4 py-3 bg-gradient-to-r from-violet-600 to-turquoise-600 text-white rounded-xl font-medium hover:opacity-90 transition-opacity flex items-center justify-center">
                        <i class="fas fa-plus mr-2"></i>
                        Ajouter une langue
                    </button>
                </div>
            </nav>
            
            <div class="p-4 border-t">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full overflow-hidden">
                        <img src="./img/utilisateur.png" alt="Profile" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-3">
                        <p class="font-medium text-gray-800">Mory Quéren</p>
                        <p class="text-xs text-gray-500">Niveau 12 • 3 langues</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Mobile Navigation -->
        <div class="fixed bottom-0 left-0 right-0 bg-white border-t z-10 md:hidden">
            <div class="flex justify-around">
                <a href="index.html" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-home text-xl"></i>
                    <span class="text-xs mt-1">Accueil</span>
                </a>
                <a href="./explore.php" class="flex flex-col items-center py-3 text-violet-600">
                    <i class="fas fa-compass text-xl"></i>
                    <span class="text-xs mt-1">Explorer</span>
                </a>
                <a href="./messages.php" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-comment-alt text-xl"></i>
                    <span class="text-xs mt-1">Messages</span>
                </a>
                <a href="./profil.php" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-user text-xl"></i>
                    <span class="text-xs mt-1">Profil</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 py-6">
                <!-- Mobile Header -->
                <div class="flex items-center justify-between mb-6 md:hidden">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-xl bg-gradient-to-r from-violet-600 to-turquoise-600 flex items-center justify-center text-white font-bold text-sm">DL</div>
                        <h1 class="ml-2 text-xl font-bold bg-gradient-to-r from-violet-600 to-turquoise-600 text-transparent bg-clip-text">DuoLearn</h1>
                    </div>
                    <div class="flex items-center">
                        <button class="p-2 rounded-full bg-gray-100 text-gray-600 mr-2">
                            <i class="fas fa-search text-sm"></i>
                        </button>
                        <button class="p-2 rounded-full bg-gray-100 text-gray-600">
                            <i class="fas fa-bell text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Explore Header -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Explorer</h1>
                        <p class="text-gray-500">Découvrez des personnes, des groupes et des ressources</p>
                    </div>
                    <div class="mt-4 md:mt-0 relative">
                        <input type="text" placeholder="Rechercher..." class="w-full md:w-64 rounded-xl border border-gray-200 py-2 pl-10 pr-4 bg-white focus:outline-none focus:ring-2 focus:ring-violet-600 focus:border-transparent">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>

                <!-- Explore Tabs -->
                <div class="bg-white rounded-2xl shadow-sm mb-6">
                    <div class="flex overflow-x-auto scrollbar-hide">
                        <button class="px-6 py-4 text-violet-600 border-b-2 border-violet-600 font-medium flex-1 whitespace-nowrap">Tout</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Personnes</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Groupes</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Événements</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Ressources</button>
                    </div>
                </div>

                <!-- Featured Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">À la une</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Featured Card 1 -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="h-40 bg-gradient-to-r from-violet-500 to-turquoise-500 relative">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-white text-center">
                                        <i class="fas fa-users text-4xl mb-2"></i>
                                        <h3 class="text-xl font-bold">Café linguistique</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center">
                                        <span class="w-6 h-6 rounded-full flex items-center justify-center bg-turquoise-100 text-turquoise-600 text-xs font-bold">EN</span>
                                        <span class="w-6 h-6 rounded-full flex items-center justify-center bg-violet-100 text-violet-600 text-xs font-bold -ml-1">FR</span>
                                        <span class="ml-2 text-sm text-gray-500">Multilingue</span>
                                    </div>
                                    <span class="text-xs text-gray-500">Jeudi, 18:30</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Rejoignez notre café linguistique hebdomadaire pour pratiquer plusieurs langues dans une ambiance conviviale.</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-500">24 participants</span>
                                    <button class="px-3 py-1 bg-violet-600 text-white rounded-lg text-sm">
                                        Participer
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Card 2 -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="h-40 bg-gradient-to-r from-rose-500 to-violet-500 relative">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-white text-center">
                                        <i class="fas fa-book text-4xl mb-2"></i>
                                        <h3 class="text-xl font-bold">Groupe d'étude japonais</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center">
                                        <span class="w-6 h-6 rounded-full flex items-center justify-center bg-rose-100 text-rose-600 text-xs font-bold">JP</span>
                                        <span class="ml-2 text-sm text-gray-500">Débutants</span>
                                    </div>
                                    <span class="text-xs text-gray-500">42 membres</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Un groupe d'entraide pour les débutants en japonais. Nous nous réunissons en ligne chaque semaine.</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-500">Créé par Akiko T.</span>
                                    <button class="px-3 py-1 bg-violet-600 text-white rounded-lg text-sm">
                                        Rejoindre
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Card 3 -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="h-40 bg-gradient-to-r from-turquoise-500 to-green-500 relative">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-white text-center">
                                        <i class="fas fa-graduation-cap text-4xl mb-2"></i>
                                        <h3 class="text-xl font-bold">Atelier d'écriture</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center">
                                        <span class="w-6 h-6 rounded-full flex items-center justify-center bg-turquoise-100 text-turquoise-600 text-xs font-bold">EN</span>
                                        <span class="ml-2 text-sm text-gray-500">Intermédiaire</span>
                                    </div>
                                    <span class="text-xs text-gray-500">Samedi, 14:00</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Améliorez vos compétences d'écriture en anglais avec notre atelier en ligne animé par des professeurs natifs.</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-500">12 places disponibles</span>
                                    <button class="px-3 py-1 bg-violet-600 text-white rounded-lg text-sm">
                                        S'inscrire
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- People Section -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Personnes à découvrir</h2>
                        <a href="#" class="text-sm text-violet-600 hover:underline">Voir tout</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                        <!-- Person Card 1 -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-4 text-center">
                                <div class="w-20 h-20 rounded-full overflow-hidden mx-auto mb-3">
                                    <img src="../img/utilisateur.png" alt="Emma Laurent" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-medium text-gray-800">Emma Laurent</h3>
                                <p class="text-xs text-gray-500 mb-2">Paris, France</p>
                                <div class="flex flex-wrap justify-center gap-1 mb-3">
                                    <span class="px-2 py-0.5 text-xs rounded-full bg-turquoise-100 text-turquoise-600">Anglais C1</span>
                                    <span class="px-2 py-0.5 text-xs rounded-full bg-violet-100 text-violet-600">Espagnol B2</span>
                                </div>
                                <button class="w-full px-3 py-2 bg-violet-600 text-white rounded-xl text-sm hover:bg-violet-700 transition-colors">
                                    Ajouter
                                </button>
                            </div>
                        </div>

                        <!-- Person Card 2 -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-4 text-center">
                                <div class="w-20 h-20 rounded-full overflow-hidden mx-auto mb-3">
                                    <img src="../img/utilisateur.png" alt="Thomas Garcia" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-medium text-gray-800">Thomas Garcia</h3>
                                <p class="text-xs text-gray-500 mb-2">Lyon, France</p>
                                <div class="flex flex-wrap justify-center gap-1 mb-3">
                                    <span class="px-2 py-0.5 text-xs rounded-full bg-rose-100 text-rose-600">Japonais B1</span>
                                    <span class="px-2 py-0.5 text-xs rounded-full bg-turquoise-100 text-turquoise-600">Anglais B2</span>
                                </div>
                                <button class="w-full px-3 py-2 bg-violet-600 text-white rounded-xl text-sm hover:bg-violet-700 transition-colors">
                                    Ajouter
                                </button>
                            </div>
                        </div>

                        <!-- Person Card 3 -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-4 text-center">
                                <div class="w-20 h-20 rounded-full overflow-hidden mx-auto mb-3">
                                    <img src="../img/utilisateur.png" alt="Sophia Chen" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-medium text-gray-800">Sophia Chen</h3>
                                <p class="text-xs text-gray-500 mb-2">Bordeaux, France</p>
                                <div class="flex flex-wrap justify-center gap-1 mb-3">
                                    <span class="px-2 py-0.5 text-xs rounded-full bg-violet-100 text-violet-600">Français C2</span>
                                    <span class="px-2 py-0.5 text-xs rounded-full bg-rose-100 text-rose-600">Chinois Natif</span>
                                </div>
                                <button class="w-full px-3 py-2 bg-violet-600 text-white rounded-xl text-sm hover:bg-violet-700 transition-colors">
                                    Ajouter
                                </button>
                            </div>
                        </div>

                        <!-- Person Card 4 -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-4 text-center">
                                <div class="w-20 h-20 rounded-full overflow-hidden mx-auto mb-3">
                                    <img src="./img/utilis