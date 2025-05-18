<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Tableau de bord - Duo Learn</title>
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
                    <a href="../dashboard/explore.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
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
                    <a href="./profil.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-user text-lg w-6"></i>
                        <span class="ml-3">Profil</span>
                    </a>
                    <a href="dashboard.html" class="flex items-center px-4 py-3 text-violet-600 bg-violet-50 rounded-xl">
                        <i class="fas fa-chart-line text-lg w-6"></i>
                        <span class="ml-3 font-medium">Tableau de bord</span>
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
                <a href="./explore.php" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-compass text-xl"></i>
                    <span class="text-xs mt-1">Explorer</span>
                </a>
                <a href="dashboard.html" class="flex flex-col items-center py-3 text-violet-600">
                    <i class="fas fa-chart-line text-xl"></i>
                    <span class="text-xs mt-1">Tableau</span>
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

                <!-- Dashboard Header -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Tableau de bord</h1>
                        <p class="text-gray-500">Suivez votre progression et vos statistiques d'apprentissage</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-2">
                        <div class="relative">
                            <select class="appearance-none bg-white border border-gray-200 rounded-xl py-2 pl-4 pr-10 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-violet-600 focus:border-transparent">
                                <option>Tous les temps</option>
                                <option>Cette semaine</option>
                                <option>Ce mois</option>
                                <option>Cette année</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                        <button class="p-2 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-download"></i>
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Total XP -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-violet-100 text-violet-600 flex items-center justify-center">
                                <i class="fas fa-star text-xl"></i>
                            </div>
                            <span class="text-sm text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>
                                12%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm">XP Total</h3>
                        <p class="text-2xl font-bold text-gray-800">4,250</p>
                        <div class="mt-2 text-xs text-gray-500">
                            <span class="text-green-500">+350</span> depuis le mois dernier
                        </div>
                    </div>
                    
                    <!-- Streak -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-turquoise-100 text-turquoise-600 flex items-center justify-center">
                                <i class="fas fa-fire text-xl"></i>
                            </div>
                            <span class="text-sm text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>
                                3 jours
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm">Série actuelle</h3>
                        <p class="text-2xl font-bold text-gray-800">8 jours</p>
                        <div class="mt-2 text-xs text-gray-500">
                            Record personnel: <span class="font-medium">15 jours</span>
                        </div>
                    </div>
                    
                    <!-- Lessons Completed -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center">
                                <i class="fas fa-book text-xl"></i>
                            </div>
                            <span class="text-sm text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>
                                8%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm">Leçons terminées</h3>
                        <p class="text-2xl font-bold text-gray-800">87</p>
                        <div class="mt-2 text-xs text-gray-500">
                            <span class="text-green-500">+12</span> depuis le mois dernier
                        </div>
                    </div>
                    
                    <!-- Vocabulary -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-xl bg-violet-100 text-violet-600 flex items-center justify-center">
                                <i class="fas fa-language text-xl"></i>
                            </div>
                            <span class="text-sm text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i>
                                15%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm">Vocabulaire appris</h3>
                        <p class="text-2xl font-bold text-gray-800">1,245</p>
                        <div class="mt-2 text-xs text-gray-500">
                            <span class="text-green-500">+180</span> depuis le mois dernier
                        </div>
                    </div>
                </div>

                <!-- Main Dashboard Content -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Left Column -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Activity Chart -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                                <h3 class="font-semibold text-gray-800">Activité d'apprentissage</h3>
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-xs rounded-full bg-violet-100 text-violet-600 font-medium">Jour</button>
                                    <button class="px-3 py-1 text-xs rounded-full text-gray-500 hover:bg-gray-100 transition-colors">Semaine</button>
                                    <button class="px-3 py-1 text-xs rounded-full text-gray-500 hover:bg-gray-100 transition-colors">Mois</button>
                                </div>
                            </div>
                            <div class="p-6">
                                <!-- Chart Placeholder -->
                                <div class="h-80 bg-gray-50 rounded-xl flex items-center justify-center">
                                    <div class="w-full px-6">
                                        <div class="flex justify-between mb-2">
                                            <div class="text-xs text-gray-500">XP par jour</div>
                                            <div class="text-xs font-medium">Mai 2025</div>
                                        </div>
                                        <div class="flex items-end h-60 space-x-2">
                                            <div class="flex-1 bg-violet-500 rounded-t-md h-40" title="Lun: 80 XP"></div>
                                            <div class="flex-1 bg-violet-500 rounded-t-md h-32" title="Mar: 65 XP"></div>
                                            <div class="flex-1 bg-violet-500 rounded-t-md h-48" title="Mer: 95 XP"></div>
                                            <div class="flex-1 bg-violet-500 rounded-t-md h-36" title="Jeu: 70 XP"></div>
                                            <div class="flex-1 bg-violet-500 rounded-t-md h-52" title="Ven: 105 XP"></div>
                                            <div class="flex-1 bg-violet-500 rounded-t-md h-44" title="Sam: 90 XP"></div>
                                            <div class="flex-1 bg-violet-500 rounded-t-md h-56" title="Dim: 115 XP"></div>
                                        </div>
                                        <div class="flex justify-between mt-2">
                                            <div class="text-xs text-gray-500">L</div>
                                            <div class="text-xs text-gray-500">M</div>
                                            <div class="text-xs text-gray-500">M</div>
                                            <div class="text-xs text-gray-500">J</div>
                                            <div class="text-xs text-gray-500">V</div>
                                            <div class="text-xs text-gray-500">S</div>
                                            <div class="text-xs text-gray-500">D</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-500">Moyenne quotidienne</p>
                                        <p class="text-xl font-bold text-gray-800">85 XP</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-500">Total cette semaine</p>
                                        <p class="text-xl font-bold text-gray-800">620 XP</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-500">Meilleur jour</p>
                                        <p class="text-xl font-bold text-gray-800">Dimanche</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Language Progress -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Progression par langue</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-6">
                                    <!-- Anglais -->
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <div class="flex items-center">
                                                <span class="w-8 h-8 rounded-full flex items-center justify-center bg-turquoise-100 text-turquoise-600 text-xs font-bold">EN</span>
                                                <span class="ml-3 font-medium">Anglais</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-sm text-gray-500 mr-4">2,100 XP</span>
                                                <span class="px-2 py-1 text-xs rounded-full bg-turquoise-100 text-turquoise-600">B2</span>
                                            </div>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-gradient-to-r from-turquoise-500 to-turquoise-600 rounded-full" style="width: 75%"></div>
                                        </div>
                                        <div class="flex justify-between mt-1 text-xs text-gray-500">
                                            <span>Progression vers C1: 75%</span>
                                            <span>750 XP restants</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Espagnol -->
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <div class="flex items-center">
                                                <span class="w-8 h-8 rounded-full flex items-center justify-center bg-violet-100 text-violet-600 text-xs font-bold">ES</span>
                                                <span class="ml-3 font-medium">Espagnol</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-sm text-gray-500 mr-4">1,250 XP</span>
                                                <span class="px-2 py-1 text-xs rounded-full bg-violet-100 text-violet-600">A2</span>
                                            </div>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-gradient-to-r from-violet-500 to-violet-600 rounded-full" style="width: 45%"></div>
                                        </div>
                                        <div class="flex justify-between mt-1 text-xs text-gray-500">
                                            <span>Progression vers B1: 45%</span>
                                            <span>1,500 XP restants</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Japonais -->
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <div class="flex items-center">
                                                <span class="w-8 h-8 rounded-full flex items-center justify-center bg-rose-100 text-rose-600 text-xs font-bold">JP</span>
                                                <span class="ml-3 font-medium">Japonais</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-sm text-gray-500 mr-4">900 XP</span>
                                                <span class="px-2 py-1 text-xs rounded-full bg-rose-100 text-rose-600">A1</span>
                                            </div>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-gradient-to-r from-rose-500 to-rose-600 rounded-full" style="width: 20%"></div>
                                        </div>
                                        <div class="flex justify-between mt-1 text-xs text-gray-500">
                                            <span>Progression vers A2: 20%</span>
                                            <span>3,600 XP restants</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <!-- Weekly Goals -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Objectifs hebdomadaires</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <p class="text-sm font-medium">Atteindre 500 XP cette semaine</p>
                                            <span class="text-xs text-gray-500">80%</span>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-violet-500 rounded-full" style="width: 80%"></div>
                                        </div>
                                        <div class="flex justify-between mt-1 text-xs text-gray-500">
                                            <span>400/500 XP</span>
                                            <span>2 jours restants</span>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <p class="text-sm font-medium">Compléter 5 leçons d'espagnol</p>
                                            <span class="text-xs text-gray-500">60%</span>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-violet-500 rounded-full" style="width: 60%"></div>
                                        </div>
                                        <div class="flex justify-between mt-1 text-xs text-gray-500">
                                            <span>3/5 leçons</span>
                                            <span>2 jours restants</span>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <p class="text-sm font-medium">Pratiquer la prononciation 3 fois</p>
                                            <span class="text-xs text-gray-500">33%</span>
                                        </div>
                                        <div class="h-2 bg-gray-100 rounded-full">
                                            <div class="h-2 bg-violet-500 rounded-full" style="width: 33%"></div>
                                        </div>
                                        <div class="flex justify-between mt-1 text-xs text-gray-500">
                                            <span>1/3 sessions</span>
                                            <span>2 jours restants</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 px-4 py-2 text-violet-600 rounded-xl font-medium hover:bg-violet-50 transition-colors">
                                    Définir de nouveaux objectifs
                                </button>
                            </div>
                        </div>

                        <!-- Vocabulary Stats -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Statistiques de vocabulaire</h3>
                            </div>
                            <div class="p-6">
                                <div class="grid grid-cols-2 gap-4 mb-6">
                                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                                        <p class="text-2xl font-bold text-turquoise-600">685</p>
                                        <p class="text-xs text-gray-500">Mots anglais</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                                        <p class="text-2xl font-bold text-violet-600">420</p>
                                        <p class="text-xs text-gray-500">Mots espagnols</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                                        <p class="text-2xl font-bold text-rose-600">140</p>
                                        <p class="text-xs text-gray-500">Mots japonais</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4 text-center">
                                        <p class="text-2xl font-bold text-gray-800">92%</p>
                                        <p class="text-xs text-gray-500">Taux de rétention</p>
                                    </div>
                                </div>
                                
                                <div class="space-y-2">
                                    <p class="text-sm font-medium">Mots appris par catégorie</p>
                                    <div class="flex items-center">
                                        <div class="w-full bg-gray-100 rounded-full h-2">
                                            <div class="bg-turquoise-500 h-2 rounded-l-full" style="width: 35%"></div>
                                            <div class="bg-violet-500 h-2" style="width: 25%; margin-top: -8px;"></div>
                                            <div class="bg-rose-500 h-2" style="width: 20%; margin-top: -8px;"></div>
                                            <div class="bg-gray-400 h-2 rounded-r-full" style="width: 20%; margin-top: -8px;"></div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                                        <span>Quotidien (35%)</span>
                                        <span>Voyage (25%)</span>
                                        <span>Affaires (20%)</span>
                                        <span>Autre (20%)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Achievements -->
                        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-6 border-b border-gray-100">
                                <h3 class="font-semibold text-gray-800">Réalisations récentes</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-full bg-turquoise-100 text-turquoise-600 flex items-center justify-center">
                                            <i class="fas fa-fire"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium">Série de 7 jours</p>
                                            <p class="text-xs text-gray-500">Il y a 1 jour</p>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="px-2 py-1 text-xs rounded-full bg-turquoise-100 text-turquoise-600">+50 XP</span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium">Niveau A2 en espagnol</p>
                                            <p class="text-xs text-gray-500">Il y a 3 jours</p>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="px-2 py-1 text-xs rounded-full bg-violet-100 text-violet-600">+100 XP</span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center">
                                            <i class="fas fa-book"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium">100 mots japonais appris</p>
                                            <p class="text-xs text-gray-500">Il y a 5 jours</p>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="px-2 py-1 text-xs rounded-full bg-rose-100 text-rose-600">+75 XP</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 px-4 py-2 text-violet-600 rounded-xl font-medium hover:bg-violet-50 transition-colors">
                                    Voir toutes les réalisations
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