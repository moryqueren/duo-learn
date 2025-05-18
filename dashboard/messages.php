<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Messages - Duo Learn</title>
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
                    <a href="./messages.php" class="flex items-center px-4 py-3 text-violet-600 bg-violet-50 rounded-xl">
                        <i class="fas fa-comment-alt text-lg w-6"></i>
                        <span class="ml-3 font-medium">Messages</span>
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
                <a href="./explore.php" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-compass text-xl"></i>
                    <span class="text-xs mt-1">Explorer</span>
                </a>
                <a href="./messages.php" class="flex flex-col items-center py-3 text-violet-600">
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
        <main class="flex-1 overflow-hidden bg-gray-50 flex flex-col">
            <!-- Mobile Header -->
            <div class="md:hidden flex items-center justify-between p-4 border-b bg-white">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-xl bg-gradient-to-r from-violet-600 to-turquoise-600 flex items-center justify-center text-white font-bold text-sm">DL</div>
                    <h1 class="ml-2 text-xl font-bold bg-gradient-to-r from-violet-600 to-turquoise-600 text-transparent bg-clip-text">DuoLearn</h1>
                </div>
                <div class="flex items-center">
                    <button class="p-2 rounded-full bg-gray-100 text-gray-600 mr-2">
                        <i class="fas fa-search text-sm"></i>
                    </button>
                    <button class="p-2 rounded-full bg-gray-100 text-gray-600">
                        <i class="fas fa-edit text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="flex-1 flex overflow-hidden">
                <!-- Conversations List -->
                <div class="w-full md:w-80 bg-white border-r border-gray-200 flex flex-col">
                    <div class="p-4 border-b border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-bold text-gray-800">Messages</h2>
                            <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                        <div class="relative">
                            <input type="text" placeholder="Rechercher des conversations..." class="w-full rounded-xl border border-gray-200 py-2 pl-10 pr-4 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-violet-600 focus:border-transparent">
                            <div class="absolute left-3 top-2.5 text-gray-400">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-y-auto flex-1">
                        <div class="p-2">
                            <!-- Active Conversation -->
                            <div class="p-3 rounded-xl bg-violet-50 border border-violet-100 cursor-pointer">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Sophie Martin" class="w-full h-full object-cover">
                                        </div>
                                        <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-green-500 border-2 border-white"></div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-gray-800">Sophie Martin</h3>
                                            <span class="text-xs text-gray-500">10:42</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm text-gray-600 truncate">Bonjour ! Comment vas-tu aujourd'hui ?</p>
                                            <span class="w-5 h-5 rounded-full bg-violet-600 text-white text-xs flex items-center justify-center">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Other Conversations -->
                            <div class="p-3 rounded-xl hover:bg-gray-50 cursor-pointer mt-1">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Thomas Dubois" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-gray-800">Thomas Dubois</h3>
                                            <span class="text-xs text-gray-500">Hier</span>
                                        </div>
                                        <p class="text-sm text-gray-500 truncate">Tu as vu le nouveau cours d'espagnol ?</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-3 rounded-xl hover:bg-gray-50 cursor-pointer mt-1">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Groupe d'étude japonais" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-gray-800">Groupe d'étude japonais</h3>
                                            <span class="text-xs text-gray-500">Lun</span>
                                        </div>
                                        <p class="text-sm text-gray-500 truncate">Akiko: N'oubliez pas la session de demain !</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-3 rounded-xl hover:bg-gray-50 cursor-pointer mt-1">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Marie Leclerc" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-gray-800">Marie Leclerc</h3>
                                            <span class="text-xs text-gray-500">28 avr</span>
                                        </div>
                                        <p class="text-sm text-gray-500 truncate">Merci pour ton aide avec la prononciation !</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-3 rounded-xl hover:bg-gray-50 cursor-pointer mt-1">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Pierre Moreau" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-gray-800">Pierre Moreau</h3>
                                            <span class="text-xs text-gray-500">25 avr</span>
                                        </div>
                                        <p class="text-sm text-gray-500 truncate">On se retrouve au café linguistique jeudi ?</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-3 rounded-xl hover:bg-gray-50 cursor-pointer mt-1">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full overflow-hidden">
                                            <img src="./img/utilisateur.png" alt="Échange linguistique EN-FR" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-gray-800">Échange linguistique EN-FR</h3>
                                            <span class="text-xs text-gray-500">20 avr</span>
                                        </div>
                                        <p class="text-sm text-gray-500 truncate">John: Does anyone want to practice tomorrow?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chat Area -->
                <div class="hidden md:flex flex-1 flex-col bg-gray-50">
                    <!-- Chat Header -->
                    <div class="p-4 border-b border-gray-200 bg-white flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-full overflow-hidden">
                                    <img src="./img/utilisateur.png" alt="Sophie Martin" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-green-500 border-2 border-white"></div>
                            </div>
                            <div class="ml-3">
                                <h3 class="font-medium text-gray-800">Sophie Martin</h3>
                                <p class="text-xs text-gray-500">En ligne • Anglais C1, Espagnol B2</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600 transition-colors">
                                <i class="fas fa-phone"></i>
                            </button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600 transition-colors">
                                <i class="fas fa-video"></i>
                            </button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600 transition-colors">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Chat Messages -->
                    <div class="flex-1 overflow-y-auto p-4">
                        <div class="space-y-4">
                            <!-- Date Separator -->
                            <div class="flex items-center justify-center">
                                <div class="bg-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">
                                    Aujourd'hui
                                </div>
                            </div>
                            
                            <!-- Received Message -->
                            <div class="flex items-end">
                                <div class="w-8 h-8 rounded-full overflow-hidden flex-shrink-0">
                                    <img src="./img/utilisateur.png" alt="Sophie Martin" class="w-full h-full object-cover">
                                </div>
                                <div class="ml-2 max-w-xs md:max-w-md bg-white rounded-t-xl rounded-r-xl p-3 shadow-sm">
                                    <p class="text-gray-800">Bonjour ! Comment vas-tu aujourd'hui ? J'espère que tu as fait des progrès avec ton espagnol.</p>
                                    <p class="text-right text-xs text-gray-500 mt-1">10:30</p>
                                </div>
                            </div>
                            
                            <!-- Sent Message -->
                            <div class="flex items-end justify-end">
                                <div class="max-w-xs md:max-w-md bg-violet-600 text-white rounded-t-xl rounded-l-xl p-3 shadow-sm">
                                    <p>Salut Sophie ! Ça va bien, merci. Oui, j'ai travaillé sur les temps du passé cette semaine. C'est un peu difficile mais je progresse !</p>
                                    <p class="text-right text-xs text-violet-200 mt-1">10:35</p>
                                </div>
                            </div>
                            
                            <!-- Received Message -->
                            <div class="flex items-end">
                                <div class="w-8 h-8 rounded-full overflow-hidden flex-shrink-0">
                                    <img src="./img/utilisateur.png" alt="Sophie Martin" class="w-full h-full object-cover">
                                </div>
                                <div class="ml-2 max-w-xs md:max-w-md bg-white rounded-t-xl rounded-r-xl p-3 shadow-sm">
                                    <p class="text-gray-800">Super ! Les temps du passé en espagnol sont effectivement un défi. Si tu veux, on peut pratiquer ensemble ? Je pourrais t'aider avec quelques exercices.</p>
                                    <p class="text-right text-xs text-gray-500 mt-1">10:38</p>
                                </div>
                            </div>
                            
                            <!-- Received Message -->
                            <div class="flex items-end">
                                <div class="w-8 h-8 rounded-full overflow-hidden flex-shrink-0">
                                    <img src="./img/utilisateur.png" alt="Sophie Martin" class="w-full h-full object-cover">
                                </div>
                                <div class="ml-2 max-w-xs md:max-w-md bg-white rounded-t-xl rounded-r-xl p-3 shadow-sm">
                                    <p class="text-gray-800">J'ai trouvé ce site avec des exercices très utiles. Regarde :</p>
                                    <div class="mt-2 p-3 bg-gray-50 rounded-lg border border-gray-200">
                                        <p class="text-sm font-medium text-violet-600">Exercices de conjugaison espagnole</p>
                                        <p class="text-xs text-gray-500">www.ejercicios-espanol.com</p>
                                    </div>
                                    <p class="text-right text-xs text-gray-500 mt-1">10:42</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Chat Input -->
                    <div class="p-4 border-t border-gray-200 bg-white">
                        <div class="flex items-end">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-gray-600 transition-colors mr-2">
                                <i class="fas fa-paperclip"></i>
                            </button>
                            <div class="flex-1 relative">
                                <textarea placeholder="Écrivez votre message..." class="w-full rounded-xl border border-gray-200 py-3 px-4 max-h-32 focus:outline-none focus:ring-2 focus:ring-violet-600 focus:border-transparent resize-none"></textarea>
                                <div class="absolute right-3 bottom-3 flex space-x-2">
                                    <button class="p-1 rounded-full hover:bg-gray-100 text-gray-600 transition-colors">
                                        <i class="far fa-smile"></i>
                                    </button>
                                    <button class="p-1 rounded-full hover:bg-gray-100 text-gray-600 transition-colors">
                                        <i class="fas fa-microphone"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="ml-2 p-3 bg-gradient-to-r from-violet-600 to-turquoise-600 text-white rounded-full hover:opacity-90 transition-opacity">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Empty State (for mobile) -->
                <div class="md:hidden flex-1 flex flex-col items-center justify-center p-6 text-center">
                    <div class="w-20 h-20 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center mb-4">
                        <i class="fas fa-comment-alt text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Vos conversations</h3>
                    <p class="text-gray-500 mb-6">Sélectionnez une conversation pour commencer à discuter</p>
                    <button class="px-4 py-2 bg-gradient-to-r from-violet-600 to-turquoise-600 text-white rounded-xl font-medium hover:opacity-90 transition-opacity">
                        Nouvelle conversation
                    </button>
                </div>
            </div>
        </main>
    </div>

    <script src="./tailwindcsscdn.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>