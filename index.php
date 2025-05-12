<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Duo Learn - Apprenez ensemble</title>
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
                    <a href="index.html" class="flex items-center px-4 py-3 text-violet-600 bg-violet-50 rounded-xl">
                        <i class="fas fa-home text-lg w-6"></i>
                        <span class="ml-3 font-medium">Accueil</span>
                    </a>
                    <a href="explore.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-compass text-lg w-6"></i>
                        <span class="ml-3">Explorer</span>
                    </a>
                    <a href="messages.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-comment-alt text-lg w-6"></i>
                        <span class="ml-3">Messages</span>
                    </a>
                    <a href="notifications.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-bell text-lg w-6"></i>
                        <span class="ml-3">Notifications</span>
                    </a>
                    <a href="profile.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
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
                        <img src="https://via.placeholder.com/40" alt="Profile" class="w-full h-full object-cover">
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
                <a href="index.html" class="flex flex-col items-center py-3 text-violet-600">
                    <i class="fas fa-home text-xl"></i>
                    <span class="text-xs mt-1">Accueil</span>
                </a>
                <a href="explore.html" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-compass text-xl"></i>
                    <span class="text-xs mt-1">Explorer</span>
                </a>
                <a href="messages.html" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-comment-alt text-xl"></i>
                    <span class="text-xs mt-1">Messages</span>
                </a>
                <a href="profile.html" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-user text-xl"></i>
                    <span class="text-xs mt-1">Profil</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50">
            <div class="max-w-5xl mx-auto px-4 py-6">
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

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Feed -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Daily Challenge -->
                        <div class="bg-gradient-to-r from-violet-600 to-turquoise-600 rounded-2xl shadow-lg overflow-hidden">
                            <div class="p-6 text-white">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-xl font-semibold">Défi du jour</h2>
                                    <span class="px-3 py-1 bg-white bg-opacity-20 rounded-full text-sm">+25 XP</span>
                                </div>
                                <p class="mt-2">Pratiquez votre espagnol en décrivant votre journée idéale en 5 phrases.</p>
                                <button class="mt-4 px-4 py-2 bg-white text-violet-600 rounded-xl font-medium hover:bg-opacity-90 transition-opacity">
                                    Commencer le défi
                                </button>
                            </div>
                        </div>

                        <!-- Create Post -->
                        <div class="bg-white rounded-2xl shadow-sm p-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full overflow-hidden">
                                    <img src="./img/utilisateur.png" alt="Profile" class="w-full h-full object-cover">
                                </div>
                                <input type="text" placeholder="Partagez vos connaissances linguistiques..." class="w-full rounded-xl border border-gray-200 py-3 px-4 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-violet-600 focus:border-transparent">
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex items-center gap-2">
                                    <button class="flex items-center px-3 py-2 rounded-xl hover:bg-gray-50 text-gray-600 transition-colors">
                                        <i class="fas fa-image text-turquoise-600 mr-2"></i>
                                        Photo
                                    </button>
                                    <button class="flex items-center px-3 py-2 rounded-xl hover:bg-gray-50 text-gray-600 transition-colors">
                                        <i class="fas fa-video text-rose-500 mr-2"></i>
                                        Vidéo
                                    </button>
                                    <button class="flex items-center px-3 py-2 rounded-xl hover:bg-gray-50 text-gray-600 transition-colors">
                                        <i class="fas fa-poll text-violet-600 mr-2"></i>
                                        Sondage
                                    </button>
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-violet-600 to-turquoise-600 text-white rounded-xl font-medium hover:opacity-90 transition-opacity">
                                    Publier
                                </button>
                            </div>
                        </div>

                        <!-- Feed Posts -->
                        <div class="space-y-6">
                            <!-- Post 1 -->
                            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                                <!-- Post Header -->
                                <div class="p-6 pb-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full overflow-hidden">
                                                <img src="./img/utilisateur.png" alt="Marie Dupont" class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <div class="flex items-center">
                                                    <h3 class="font-semibold text-gray-800">Marie Dupont</h3>
                                                    <span class="ml-2 px-2 py-0.5 text-xs rounded-full bg-turquoise-100 text-turquoise-600">Anglais C1</span>
                                                </div>
                                                <p class="text-xs text-gray-500">Il y a 2 heures</p>
                                            </div>
                                        </div>
                                        <div class="relative post-menu">
                                            <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600 post-menu-btn">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg hidden post-menu-content z-10">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-t-xl">Masquer ce post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Bloquer Marie Dupont</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-rose-500 hover:bg-gray-50 rounded-b-xl">
                                                    <i class="fas fa-flag mr-2"></i> Signaler
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post Content -->
                                <div class="px-6 py-2">
                                    <p class="text-gray-800">J'ai découvert une nouvelle méthode d'apprentissage des langues basée sur la musique ! C'est incroyable comme la mélodie aide à mémoriser le vocabulaire. Qui veut essayer avec moi ? 🎵🗣️</p>
                                </div>

                                <!-- Post Tags -->
                                <div class="px-6 py-2">
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 text-xs rounded-full bg-violet-100 text-violet-600">#ApprentissageLangues</span>
                                        <span class="px-3 py-1 text-xs rounded-full bg-violet-100 text-violet-600">#Musique</span>
                                        <span class="px-3 py-1 text-xs rounded-full bg-violet-100 text-violet-600">#Mémorisation</span>
                                    </div>
                                </div>

                                <!-- Post Stats -->
                                <div class="px-6 py-3 border-t border-gray-100 text-sm text-gray-500 flex items-center justify-between">
                                    <div>42 j'aime</div>
                                    <div>8 commentaires • 3 partages</div>
                                </div>

                                <!-- Post Actions -->
                                <div class="px-6 py-3 border-t border-gray-100 flex items-center justify-between">
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors like-btn">
                                        <i class="far fa-heart mr-2"></i>
                                        J'aime
                                    </button>
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors">
                                        <i class="far fa-comment mr-2"></i>
                                        Commenter
                                    </button>
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-share mr-2"></i>
                                        Partager
                                    </button>
                                </div>
                            </div>

                            <!-- Post 2 (with moderation) -->
                            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                                <!-- Post Header -->
                                <div class="p-6 pb-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full overflow-hidden">
                                                <img src="./img/utilisateur.png" alt="Thomas Martin" class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <div class="flex items-center">
                                                    <h3 class="font-semibold text-gray-800">Thomas Martin</h3>
                                                    <span class="ml-2 px-2 py-0.5 text-xs rounded-full bg-rose-100 text-rose-600">Espagnol B2</span>
                                                </div>
                                                <p class="text-xs text-gray-500">Il y a 5 heures</p>
                                            </div>
                                        </div>
                                        <div class="relative post-menu">
                                            <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600 post-menu-btn">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg hidden post-menu-content z-10">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-t-xl">Masquer ce post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Bloquer Thomas Martin</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-rose-500 hover:bg-gray-50 rounded-b-xl">
                                                    <i class="fas fa-flag mr-2"></i> Signaler
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content Moderation Banner -->
                                <div class="px-6 py-2 bg-gradient-to-r from-turquoise-600 to-turquoise-500 text-white text-sm flex items-center">
                                    <i class="fas fa-shield-alt mr-2"></i>
                                    Contenu vérifié par nos modérateurs
                                </div>

                                <!-- Post Content -->
                                <div class="px-6 py-3">
                                    <p class="text-gray-800">Voici mon parcours d'apprentissage de l'espagnol en 3 mois. J'ai utilisé une combinaison d'applications, de podcasts et d'échanges linguistiques. Swipe pour voir mes progrès ! 📈🇪🇸</p>
                                </div>

                                <!-- Post Image -->
                                <div class="px-6">
                                    <div class="rounded-xl overflow-hidden">
                                        <img src="https://via.placeholder.com/600x400" alt="Post content" class="w-full max-h-96 object-cover">
                                    </div>
                                </div>

                                <!-- Post Stats -->
                                <div class="px-6 py-3 border-t border-gray-100 text-sm text-gray-500 flex items-center justify-between mt-3">
                                    <div>128 j'aime</div>
                                    <div>24 commentaires • 15 partages</div>
                                </div>

                                <!-- Post Actions -->
                                <div class="px-6 py-3 border-t border-gray-100 flex items-center justify-between">
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors like-btn">
                                        <i class="far fa-heart mr-2"></i>
                                        J'aime
                                    </button>
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors">
                                        <i class="far fa-comment mr-2"></i>
                                        Commenter
                                    </button>
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-share mr-2"></i>
                                        Partager
                                    </button>
                                </div>
                            </div>

                            <!-- Post 3 -->
                            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                                <!-- Post Header -->
                                <div class="p-6 pb-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full overflow-hidden">
                                                <img src="./img/utilisateur.png" alt="Sophie Leclerc" class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <div class="flex items-center">
                                                    <h3 class="font-semibold text-gray-800">Sophie Leclerc</h3>
                                                    <span class="ml-2 px-2 py-0.5 text-xs rounded-full bg-violet-100 text-violet-600">Japonais A2</span>
                                                </div>
                                                <p class="text-xs text-gray-500">Il y a 1 jour</p>
                                            </div>
                                        </div>
                                        <div class="relative post-menu">
                                            <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600 post-menu-btn">
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg hidden post-menu-content z-10">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-t-xl">Masquer ce post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Bloquer Sophie Leclerc</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-rose-500 hover:bg-gray-50 rounded-b-xl">
                                                    <i class="fas fa-flag mr-2"></i> Signaler
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post Content -->
                                <div class="px-6 py-3">
                                    <p class="text-gray-800">Qui veut rejoindre mon groupe d'étude pour le TOEFL ? On se retrouve tous les mardis soir en ligne. Nous utilisons des ressources gratuites et nous nous entraidons pour les exercices. 🌍📚</p>
                                </div>

                                <!-- Event Card -->
                                <div class="mx-6 mb-4 p-4 bg-gray-50 rounded-xl border border-gray-100">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 rounded-xl bg-violet-100 text-violet-600 flex flex-col items-center justify-center">
                                            <span class="text-xs font-semibold">MAR</span>
                                            <span class="text-lg font-bold">15</span>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="font-medium">Groupe d'étude TOEFL</h4>
                                            <p class="text-sm text-gray-500">19:00 - 21:00 • En ligne</p>
                                        </div>
                                        <button class="ml-auto px-3 py-1 bg-violet-600 text-white rounded-lg text-sm">
                                            Rejoindre
                                        </button>
                                    </div>
                                </div>

                                <!-- Post Stats -->
                                <div class="px-6 py-3 border-t border-gray-100 text-sm text-gray-500 flex items-center justify-between">
                                    <div>56 j'aime</div>
                                    <div>32 commentaires • 4 partages</div>
                                </div>

                                <!-- Post Actions -->
                                <div class="px-6 py-3 border-t border-gray-100 flex items-center justify-between">
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors like-btn">
                                        <i class="far fa-heart mr-2"></i>
                                        J'aime
                                    </button>
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors">
                                        <i class="far fa-comment mr-2"></i>
                                        Commenter
                                    </button>
                                    <button class="flex-1 text-gray-600 flex items-center justify-center py-2 rounded-xl hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-share mr-2"></i>
                                        Partager
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="hidden lg:block space-y-6">
                        <!-- Progress Card -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Votre progression</h3>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <span class="w-8 h-8 rounded-full flex items-center justify-center bg-turquoise-100 text-turquoise-600 text-xs font-bold">EN</span>
                                        <span class="ml-3 font-medium">Anglais</span>
                                    </div>
                                    <span class="text-sm text-gray-500">B2</span>
                                </div>
                                <div class="w-full h-2 bg-gray-100 rounded-full mb-2">
                                    <div class="h-2 bg-gradient-to-r from-turquoise-500 to-turquoise-600 rounded-full" style="width: 75%"></div>
                                </div>
                                <div class="flex justify-between text-xs text-gray-500">
                                    <span>750 XP cette semaine</span>
                                    <span>1000 XP objectif</span>
                                </div>

                                <div class="mt-6 flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <span class="w-8 h-8 rounded-full flex items-center justify-center bg-violet-100 text-violet-600 text-xs font-bold">ES</span>
                                        <span class="ml-3 font-medium">Espagnol</span>
                                    </div>
                                    <span class="text-sm text-gray-500">A2</span>
                                </div>
                                <div class="w-full h-2 bg-gray-100 rounded-full mb-2">
                                    <div class="h-2 bg-gradient-to-r from-violet-500 to-violet-600 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-between text-xs text-gray-500">
                                    <span>450 XP cette semaine</span>
                                    <span>1000 XP objectif</span>
                                </div>

                                <button class="w-full mt-6 px-4 py-3 bg-gray-50 text-violet-600 rounded-xl font-medium hover:bg-gray-100 transition-colors">
                                    Voir tous mes progrès
                                </button>
                            </div>
                        </div>

                        <!-- Suggestions d'amis -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Suggestions d'amis</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-5">
                                    <!-- Friend 1 -->
                                    <div class="flex items-start">
                                        <div class="w-10 h-10 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Camille Bernard" class="w-full h-full object-cover">
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <h4 class="font-medium text-gray-800">Camille Bernard</h4>
                                            <p class="text-xs text-gray-500">4 amis en commun</p>
                                            <div class="flex flex-wrap gap-1 mt-1">
                                                <span class="px-2 py-0.5 text-xs rounded-full bg-turquoise-100 text-turquoise-600">Anglais</span>
                                                <span class="px-2 py-0.5 text-xs rounded-full bg-rose-100 text-rose-600">Espagnol</span>
                                            </div>
                                        </div>
                                        <button class="p-2 rounded-full text-violet-600 hover:bg-violet-50 transition-colors">
                                            <i class="fas fa-user-plus"></i>
                                        </button>
                                    </div>

                                    <!-- Friend 2 -->
                                    <div class="flex items-start">
                                        <div class="w-10 h-10 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Lucas Moreau" class="w-full h-full object-cover">
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <h4 class="font-medium text-gray-800">Lucas Moreau</h4>
                                            <p class="text-xs text-gray-500">2 amis en commun</p>
                                            <div class="flex flex-wrap gap-1 mt-1">
                                                <span class="px-2 py-0.5 text-xs rounded-full bg-violet-100 text-violet-600">Allemand</span>
                                                <span class="px-2 py-0.5 text-xs rounded-full bg-turquoise-100 text-turquoise-600">Italien</span>
                                            </div>
                                        </div>
                                        <button class="p-2 rounded-full text-violet-600 hover:bg-violet-50 transition-colors">
                                            <i class="fas fa-user-plus"></i>
                                        </button>
                                    </div>

                                    <!-- Friend 3 -->
                                    <div class="flex items-start">
                                        <div class="w-10 h-10 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Emma Petit" class="w-full h-full object-cover">
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <h4 class="font-medium text-gray-800">Emma Petit</h4>
                                            <p class="text-xs text-gray-500">7 amis en commun</p>
                                            <div class="flex flex-wrap gap-1 mt-1">
                                                <span class="px-2 py-0.5 text-xs rounded-full bg-rose-100 text-rose-600">Japonais</span>
                                                <span class="px-2 py-0.5 text-xs rounded-full bg-violet-100 text-violet-600">Coréen</span>
                                            </div>
                                        </div>
                                        <button class="p-2 rounded-full text-violet-600 hover:bg-violet-50 transition-colors">
                                            <i class="fas fa-user-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <button class="w-full mt-4 px-4 py-2 text-violet-600 rounded-xl font-medium hover:bg-violet-50 transition-colors">
                                    Voir plus
                                </button>
                            </div>
                        </div>

                        <!-- Upcoming Events -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Événements à venir</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex flex-col items-center justify-center">
                                            <span class="text-xs font-semibold">JEU</span>
                                            <span class="text-lg font-bold">10</span>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-medium">Café linguistique</h4>
                                            <p class="text-xs text-gray-500">18:30 • Café des Langues, Paris</p>
                                            <div class="mt-1 flex items-center text-xs text-gray-500">
                                                <i class="fas fa-users mr-1"></i>
                                                <span>24 participants</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="w-12 h-12 rounded-xl bg-turquoise-100 text-turquoise-600 flex flex-col items-center justify-center">
                                            <span class="text-xs font-semibold">SAM</span>
                                            <span class="text-lg font-bold">12</span>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="font-medium">Atelier d'écriture en anglais</h4>
                                            <p class="text-xs text-gray-500">14:00 • En ligne</p>
                                            <div class="mt-1 flex items-center text-xs text-gray-500">
                                                <i class="fas fa-users mr-1"></i>
                                                <span>12 participants</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="w-full mt-4 px-4 py-2 text-violet-600 rounded-xl font-medium hover:bg-violet-50 transition-colors">
                                    Voir tous les événements
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="./tailwindcsscdn.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>