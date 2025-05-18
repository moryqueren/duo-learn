<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Profil - Duo Learn</title>
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
                    <a href="./explore.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-compass text-lg w-6"></i>
                        <span class="ml-3">Explorer</span>
                    </a>
                    <a href="./messages.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-comment-alt text-lg w-6"></i>
                        <span class="ml-3">Messages</span>
                    </a>
                    <a href="notifications.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-bell text-lg w-6"></i>
                        <span class="ml-3">Notifications</span>
                    </a>
                    <a href="./profil.php" class="flex items-center px-4 py-3 text-violet-600 bg-violet-50 rounded-xl">
                        <i class="fas fa-user text-lg w-6"></i>
                        <span class="ml-3 font-medium">Profil</span>
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
                        <img src="../img/utilisateur.png" alt="Profile" class="w-full h-full object-cover">
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
                <a href="./explore.php" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-compass text-xl"></i>
                    <span class="text-xs mt-1">Explorer</span>
                </a>
                <a href="./messages.php" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-comment-alt text-xl"></i>
                    <span class="text-xs mt-1">Messages</span>
                </a>
                <a href="./profil.php" class="flex flex-col items-center py-3 text-violet-600">
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

                <!-- Profile Header -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-6">
                    <div class="h-48 bg-gradient-to-r from-violet-500 to-turquoise-500 relative">
                        <button class="absolute top-4 right-4 p-2 bg-white bg-opacity-20 rounded-full text-white hover:bg-opacity-30 transition-colors">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    <div class="px-6 pb-6 relative">
                        <div class="flex flex-col md:flex-row md:items-end">
                            <div class="w-24 h-24 rounded-full border-4 border-white bg-white overflow-hidden -mt-12 md:w-32 md:h-32 md:-mt-16">
                                <img src="../img/utilisateur.png" alt="Mory Quéren" class="w-full h-full object-cover">
                            </div>
                            <div class="mt-4 md:mt-0 md:ml-6 md:mb-2 flex-1">
                                <h1 class="text-2xl font-bold text-gray-800">Mory Quéren</h1>
                                <p class="text-gray-500">Membre depuis Septembre 2020 • Antananarivo, Madagascar</p>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <span class="px-3 py-1 text-xs rounded-full bg-turquoise-100 text-turquoise-600">Anglais C2</span>
                                    <span class="px-3 py-1 text-xs rounded-full bg-violet-100 text-violet-600">Espagnol B2</span>
                                    <span class="px-3 py-1 text-xs rounded-full bg-rose-100 text-rose-600">Japonais A2  </span>
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0 flex space-x-2">
                                <button class="px-4 py-2 bg-gradient-to-r from-violet-600 to-turquoise-600 text-white rounded-xl font-medium hover:opacity-90 transition-opacity">
                                    Modifier le profil
                                </button>
                                <button class="p-2 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 transition-colors">
                                    <i class="fas fa-cog"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-wrap gap-6 text-center">
                            <div>
                                <p class="text-2xl font-bold text-gray-800">12</p>
                                <p class="text-sm text-gray-500">Niveau</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">3</p>
                                <p class="text-sm text-gray-500">Langues</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">4,250</p>
                                <p class="text-sm text-gray-500">XP Total</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">42</p>
                                <p class="text-sm text-gray-500">Amis</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-gray-800">15</p>
                                <p class="text-sm text-gray-500">Défis complétés</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Tabs -->
                <div class="bg-white rounded-2xl shadow-sm mb-6">
                    <div class="flex overflow-x-auto scrollbar-hide">
                        <button class="px-6 py-4 text-violet-600 border-b-2 border-violet-600 font-medium flex-1 whitespace-nowrap">Tableau de bord</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Activité</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Amis</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Badges</button>
                        <button class="px-6 py-4 text-gray-500 hover:text-gray-700 flex-1 whitespace-nowrap">Statistiques</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Content -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Language Progress -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                                <h3 class="font-semibold text-gray-800">Progression des langues</h3>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-xs rounded-full bg-violet-100 text-violet-600 font-medium">Semaine</button>
                                    <button class="px-3 py-1 text-xs rounded-full text-gray-500 hover:bg-gray-100 transition-colors">Mois</button>
                                    <button class="px-3 py-1 text-xs rounded-full text-gray-500 hover:bg-gray-100 transition-colors">Année</button>
                                </div>
                            </div>
                            <div class="p-6">
                                <!-- Chart Placeholder -->
                                <div class="h-64 bg-gray-50 rounded-xl flex items-center justify-center mb-4">
                                    <div class="w-full px-6">
                                        <!-- Anglais -->
                                        <div class="mb-6">
                                            <div class="flex justify-between items-center mb-2">
                                                <div class="flex items-center">
                                                    <span class="w-4 h-4 rounded-full bg-turquoise-500"></span>
                                                    <span class="ml-2 text-sm font-medium">Anglais</span>
                                                </div>
                                                <span class="text-sm text-gray-500">750 XP</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full">
                                                <div class="h-2 bg-turquoise-500 rounded-full" style="width: 75%"></div>
                                            </div>
                                        </div>
                                        
                                        <!-- Espagnol -->
                                        <div class="mb-6">
                                            <div class="flex justify-between items-center mb-2">
                                                <div class="flex items-center">
                                                    <span class="w-4 h-4 rounded-full bg-violet-500"></span>
                                                    <span class="ml-2 text-sm font-medium">Espagnol</span>
                                                </div>
                                                <span class="text-sm text-gray-500">450 XP</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full">
                                                <div class="h-2 bg-violet-500 rounded-full" style="width: 45%"></div>
                                            </div>
                                        </div>
                                        
                                        <!-- Japonais -->
                                        <div>
                                            <div class="flex justify-between items-center mb-2">
                                                <div class="flex items-center">
                                                    <span class="w-4 h-4 rounded-full bg-rose-500"></span>
                                                    <span class="ml-2 text-sm font-medium">Japonais</span>
                                                </div>
                                                <span class="text-sm text-gray-500">200 XP</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full">
                                                <div class="h-2 bg-rose-500 rounded-full" style="width: 20%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                                        <p class="text-2xl font-bold text-turquoise-600">1,400</p>
                                        <p class="text-sm text-gray-500">XP ce mois</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                                        <p class="text-2xl font-bold text-violet-600">8</p>
                                        <p class="text-sm text-gray-500">Jours consécutifs</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                                        <p class="text-2xl font-bold text-rose-600">5</p>
                                        <p class="text-sm text-gray-500">Défis cette semaine</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Activité récente</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-6">
                                    <!-- Activity 1 -->
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="w-10 h-10 rounded-full bg-turquoise-100 text-turquoise-600 flex items-center justify-center">
                                                <i class="fas fa-trophy"></i>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-gray-800">Vous avez complété le défi <span class="font-medium">Conversation quotidienne</span> en anglais</p>
                                            <p class="text-sm text-gray-500">Il y a 2 heures • +25 XP</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Activity 2 -->
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="w-10 h-10 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-gray-800">Vous avez atteint le niveau <span class="font-medium">A2</span> en espagnol</p>
                                            <p class="text-sm text-gray-500">Hier • +100 XP</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Activity 3 -->
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="w-10 h-10 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-gray-800">Vous avez rejoint le groupe <span class="font-medium">Débutants en japonais</span></p>
                                            <p class="text-sm text-gray-500">Il y a 2 jours</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Activity 4 -->
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="w-10 h-10 rounded-full bg-turquoise-100 text-turquoise-600 flex items-center justify-center">
                                                <i class="fas fa-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-gray-800">Vous avez terminé la leçon <span class="font-medium">Vocabulaire de voyage</span> en anglais</p>
                                            <p class="text-sm text-gray-500">Il y a 3 jours • +15 XP</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-6 px-4 py-2 text-violet-600 rounded-xl font-medium hover:bg-violet-50 transition-colors">
                                    Voir toute l'activité
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="space-y-6">
                        <!-- Streak Calendar -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Votre série</h3>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center justify-center mb-4">
                                    <div class="w-16 h-16 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center">
                                        <div class="text-center">
                                            <p class="text-xl font-bold">8</p>
                                            <p class="text-xs">jours</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="text-center text-sm text-gray-600 mb-4">Vous êtes sur une série de 8 jours consécutifs d'apprentissage !</p>
                                
                                <div class="grid grid-cols-7 gap-2 mb-4">
                                    <div class="text-center text-xs text-gray-500">L</div>
                                    <div class="text-center text-xs text-gray-500">M</div>
                                    <div class="text-center text-xs text-gray-500">M</div>
                                    <div class="text-center text-xs text-gray-500">J</div>
                                    <div class="text-center text-xs text-gray-500">V</div>
                                    <div class="text-center text-xs text-gray-500">S</div>
                                    <div class="text-center text-xs text-gray-500">D</div>
                                </div>
                                
                                <div class="grid grid-cols-7 gap-2">
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-violet-500"></div>
                                    <div class="h-8 rounded-md bg-gray-100"></div>
                                    <div class="h-8 rounded-md bg-gray-100"></div>
                                    <div class="h-8 rounded-md bg-gray-100"></div>
                                    <div class="h-8 rounded-md bg-gray-100"></div>
                                    <div class="h-8 rounded-md bg-gray-100"></div>
                                    <div class="h-8 rounded-md bg-gray-100"></div>
                                </div>
                                
                                <div class="mt-4">
                                    <p class="text-sm text-gray-600">Record personnel: <span class="font-medium">15 jours</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Badges -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                                <h3 class="font-semibold text-gray-800">Badges récents</h3>
                                <a href="#" class="text-sm text-violet-600 hover:underline">Voir tous</a>
                            </div>
                            <div class="p-6">
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="text-center">
                                        <div class="w-16 h-16 mx-auto rounded-full bg-turquoise-100 text-turquoise-600 flex items-center justify-center">
                                            <i class="fas fa-fire text-2xl"></i>
                                        </div>
                                        <p class="mt-2 text-xs font-medium">Série de 7 jours</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="w-16 h-16 mx-auto rounded-full bg-violet-100 text-violet-600 flex items-center justify-center">
                                            <i class="fas fa-star text-2xl"></i>
                                        </div>
                                        <p class="mt-2 text-xs font-medium">1000 XP</p>
                                    </div>
                                    <div class="text-center">
                                        <div class="w-16 h-16 mx-auto rounded-full bg-rose-100 text-rose-600 flex items-center justify-center">
                                            <i class="fas fa-graduation-cap text-2xl"></i>
                                        </div>
                                        <p class="mt-2 text-xs font-medium">Niveau A2</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Learning Goals -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Objectifs d'apprentissage</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <p class="text-sm font-medium">Atteindre le niveau B1 en espagnol</p>
                                            <span class="text-xs text-gray-500">60%</span>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-violet-500 rounded-full" style="width: 60%"></div>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <p class="text-sm font-medium">Apprendre 500 mots en japonais</p>
                                            <span class="text-xs text-gray-500">25%</span>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-rose-500 rounded-full" style="width: 25%"></div>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <p class="text-sm font-medium">Série de 30 jours consécutifs</p>
                                            <span class="text-xs text-gray-500">27%</span>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-turquoise-500 rounded-full" style="width: 27%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 px-4 py-2 text-violet-600 rounded-xl font-medium hover:bg-violet-50 transition-colors">
                                    Ajouter un objectif
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