<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Quiz - Duo Learn</title>
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
                    <a href="../dashboard/explore.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-compass text-lg w-6"></i>
                        <span class="ml-3">Explorer</span>
                    </a>
                    <a href="../dashboard/explore.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-comment-alt text-lg w-6"></i>
                        <span class="ml-3">Messages</span>
                    </a>
                    <a href="notifications.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-bell text-lg w-6"></i>
                        <span class="ml-3">Notifications</span>
                    </a>
                    <a href="../dashboard/profil.php" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl transition-colors">
                        <i class="fas fa-user text-lg w-6"></i>
                        <span class="ml-3">Profil</span>
                    </a>
                    <a href="quiz.html" class="flex items-center px-4 py-3 text-violet-600 bg-violet-50 rounded-xl">
                        <i class="fas fa-question-circle text-lg w-6"></i>
                        <span class="ml-3 font-medium">Quiz</span>
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
                <a href="../dashboard/explore.php" class="flex flex-col items-center py-3 text-gray-500">
                    <i class="fas fa-compass text-xl"></i>
                    <span class="text-xs mt-1">Explorer</span>
                </a>
                <a href="../fonctionnalite/quiz.php" class="flex flex-col items-center py-3 text-violet-600">
                    <i class="fas fa-question-circle text-xl"></i>
                    <span class="text-xs mt-1">Quiz</span>
                </a>
                <a href="../dashboard/profil.php" class="flex flex-col items-center py-3 text-gray-500">
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

                <!-- Quiz Header -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-6">
                    <div class="p-6 flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center mb-4 md:mb-0">
                            <div class="w-12 h-12 rounded-xl bg-violet-100 text-violet-600 flex items-center justify-center">
                                <i class="fas fa-question-circle text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <h1 class="text-2xl font-bold text-gray-800">Quiz d'espagnol</h1>
                                <p class="text-gray-500">Niveau A2 • Temps du passé</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex items-center mr-6">
                                <div class="w-8 h-8 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <span class="ml-2 text-gray-600">10:00</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-turquoise-100 text-turquoise-600 flex items-center justify-center">
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="ml-2 text-gray-600">25 XP</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-3 flex items-center">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-violet-600 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <span class="ml-3 text-sm text-gray-600">4/10</span>
                    </div>
                </div>

                <!-- Quiz Question -->
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-6">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-6">Complétez la phrase avec la forme correcte du verbe au passé composé :</h2>
                        
                        <div class="bg-gray-50 rounded-xl p-6 mb-6">
                            <p class="text-lg text-gray-800 text-center">
                                Ayer, nosotros ____________ (ir) al cine con nuestros amigos.
                            </p>
                        </div>
                        
                        <div class="space-y-3">
                            <button class="w-full p-4 rounded-xl border border-gray-200 text-left hover:bg-gray-50 transition-colors">
                                <span class="font-medium">A.</span> hemos ido
                            </button>
                            <button class="w-full p-4 rounded-xl border border-gray-200 text-left hover:bg-gray-50 transition-colors">
                                <span class="font-medium">B.</span> fuimos
                            </button>
                            <button class="w-full p-4 rounded-xl border border-violet-200 bg-violet-50 text-left">
                                <span class="font-medium">C.</span> íbamos
                            </button>
                            <button class="w-full p-4 rounded-xl border border-gray-200 text-left hover:bg-gray-50 transition-colors">
                                <span class="font-medium">D.</span> vamos
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Quiz Navigation -->
                <div class="flex justify-between">
                    <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-xl font-medium hover:bg-gray-300 transition-colors flex items-center">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Précédent
                    </button>
                    <button class="px-6 py-3 bg-gradient-to-r from-violet-600 to-turquoise-600 text-white rounded-xl font-medium hover:opacity-90 transition-opacity flex items-center">
                        Suivant
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <script src="./tailwindcsscdn.js"></script>
    <script src="./js/script.js"></script>
    <script>
        // Quiz timer functionality
        let timeLeft = 600; // 10 minutes in seconds
        
        function updateTimer() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            
            // Format the time as MM:SS
            const formattedTime = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            
            // Update the timer display
            document.querySelector('.fas-clock').parentElement.nextElementSibling.textContent = formattedTime;
            
            if (timeLeft > 0) {
                timeLeft--;
                setTimeout(updateTimer, 1000);
            } else {
                // Time's up - submit the quiz automatically
                alert('Temps écoulé ! Votre quiz sera soumis automatiquement.');
                // Here you would add code to submit the quiz
            }
        }
        
        // Start the timer when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            updateTimer();
            
            // Add click event listeners to the answer buttons
            const answerButtons = document.querySelectorAll('.rounded-xl.border');
            
            answerButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove any previous selections
                    answerButtons.forEach(btn => {
                        btn.classList.remove('border-violet-200', 'bg-violet-50');
                        btn.classList.add('border-gray-200');
                    });
                    
                    // Mark this button as selected
                    this.classList.remove('border-gray-200');
                    this.classList.add('border-violet-200', 'bg-violet-50');
                });
            });
        });
    </script>
</body>
</html>