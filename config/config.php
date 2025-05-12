// Script pour Duo Learn

document.addEventListener('DOMContentLoaded', function() {
    // Gestion des menus déroulants pour les posts
    const menuButtons = document.querySelectorAll('.post-menu-btn');
    
    menuButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const menuContent = this.nextElementSibling;
            
            // Fermer tous les autres menus
            document.querySelectorAll('.post-menu-content').forEach(menu => {
                if (menu !== menuContent) {
                    menu.classList.add('hidden');
                    menu.classList.remove('show');
                }
            });
            
            // Basculer l'affichage du menu actuel
            menuContent.classList.toggle('hidden');
            
            // Ajouter l'animation si le menu est visible
            if (!menuContent.classList.contains('hidden')) {
                menuContent.classList.add('show');
            } else {
                menuContent.classList.remove('show');
            }
        });
    });
    
    // Fermer les menus lorsqu'on clique ailleurs
    document.addEventListener('click', function() {
        document.querySelectorAll('.post-menu-content').forEach(menu => {
            menu.classList.add('hidden');
            menu.classList.remove('show');
        });
    });
    
    // Gestion des boutons "J'aime"
    const likeButtons = document.querySelectorAll('.like-btn');
    
    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Basculer la classe active
            this.classList.toggle('active');
            
            // Changer l'icône
            const icon = this.querySelector('i');
            if (this.classList.contains('active')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                icon.classList.add('text-rose-500');
                
                // Incrémenter le compteur de likes
                const postStats = this.closest('.bg-white').querySelector('.px-6.py-3.border-t.border-gray-100.text-sm');
                const likesText = postStats.firstElementChild.textContent;
                const likesCount = parseInt(likesText);
                postStats.firstElementChild.textContent = (likesCount + 1) + ' j\'aime';
            } else {
                icon.classList.remove('fas');
                icon.classList.remove('text-rose-500');
                icon.classList.add('far');
                
                // Décrémenter le compteur de likes
                const postStats = this.closest('.bg-white').querySelector('.px-6.py-3.border-t.border-gray-100.text-sm');
                const likesText = postStats.firstElementChild.textContent;
                const likesCount = parseInt(likesText);
                postStats.firstElementChild.textContent = (likesCount - 1) + ' j\'aime';
            }
        });
    });
    
    // Simulation de la création d'un post
    const createPostButton = document.querySelector('.px-4.py-2.bg-gradient-to-r.from-violet-600');
    const postInput = document.querySelector('input[placeholder="Partagez vos connaissances linguistiques..."]');
    
    if (createPostButton && postInput) {
        createPostButton.addEventListener('click', function() {
            const postContent = postInput.value.trim();
            
            if (postContent) {
                // Créer un nouveau post (simulation)
                const postsContainer = document.querySelector('.space-y-6');
                const firstPost = postsContainer.querySelector('.bg-white.rounded-2xl');
                
                // Cloner le premier post et modifier son contenu
                if (firstPost) {
                    const newPost = firstPost.cloneNode(true);
                    
                    // Modifier le contenu du post
                    const contentDiv = newPost.querySelector('.px-6.py-2, .px-6.py-3');
                    contentDiv.innerHTML = `<p class="text-gray-800">${postContent}</p>`;
                    
                    // Réinitialiser les stats
                    const statsDiv = newPost.querySelector('.px-6.py-3.border-t.border-gray-100.text-sm');
                    statsDiv.innerHTML = `
                        <div>0 j'aime</div>
                        <div>0 commentaires • 0 partages</div>
                    `;
                    
                    // Supprimer les tags s'ils existent
                    const tagsDiv = newPost.querySelector('.px-6.py-2 .flex.flex-wrap.gap-2');
                    if (tagsDiv) {
                        tagsDiv.parentNode.remove();
                    }
                    
                    // Supprimer la bannière de modération si elle existe
                    const moderationBanner = newPost.querySelector('.px-6.py-2.bg-gradient-to-r');
                    if (moderationBanner) {
                        moderationBanner.remove();
                    }
                    
                    // Supprimer l'image si elle existe
                    const imageDiv = newPost.querySelector('.px-6 .rounded-xl.overflow-hidden');
                    if (imageDiv) {
                        imageDiv.parentNode.remove();
                    }
                    
                    // Supprimer la carte d'événement si elle existe
                    const eventCard = newPost.querySelector('.mx-6.mb-4.p-4.bg-gray-50');
                    if (eventCard) {
                        eventCard.remove();
                    }
                    
                    // Réinitialiser les boutons like
                    const likeBtn = newPost.querySelector('.like-btn');
                    likeBtn.classList.remove('active');
                    const likeIcon = likeBtn.querySelector('i');
                    likeIcon.classList.remove('fas', 'text-rose-500');
                    likeIcon.classList.add('far');
                    
                    // Ajouter le nouveau post au début du conteneur
                    postsContainer.insertBefore(newPost, postsContainer.firstChild);
                    
                    // Réinitialiser l'input
                    postInput.value = '';
                    
                    // Ajouter les événements au nouveau post
                    const newMenuBtn = newPost.querySelector('.post-menu-btn');
                    newMenuBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const menuContent = this.nextElementSibling;
                        
                        document.querySelectorAll('.post-menu-content').forEach(menu => {
                            if (menu !== menuContent) {
                                menu.classList.add('hidden');
                                menu.classList.remove('show');
                            }
                        });
                        
                        menuContent.classList.toggle('hidden');
                        
                        if (!menuContent.classList.contains('hidden')) {
                            menuContent.classList.add('show');
                        } else {
                            menuContent.classList.remove('show');
                        }
                    });
                    
                    const newLikeBtn = newPost.querySelector('.like-btn');
                    newLikeBtn.addEventListener('click', function() {
                        this.classList.toggle('active');
                        
                        const icon = this.querySelector('i');
                        if (this.classList.contains('active')) {
                            icon.classList.remove('far');
                            icon.classList.add('fas');
                            icon.classList.add('text-rose-500');
                            
                            const postStats = this.closest('.bg-white').querySelector('.px-6.py-3.border-t.border-gray-100.text-sm');
                            const likesText = postStats.firstElementChild.textContent;
                            const likesCount = parseInt(likesText);
                            postStats.firstElementChild.textContent = (likesCount + 1) + ' j\'aime';
                        } else {
                            icon.classList.remove('fas');
                            icon.classList.remove('text-rose-500');
                            icon.classList.add('far');
                            
                            const postStats = this.closest('.bg-white').querySelector('.px-6.py-3.border-t.border-gray-100.text-sm');
                            const likesText = postStats.firstElementChild.textContent;
                            const likesCount = parseInt(likesText);
                            postStats.firstElementChild.textContent = (likesCount - 1) + ' j\'aime';
                        }
                    });
                    
                    // Faire défiler vers le haut pour voir le nouveau post
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            } else {
                alert('Veuillez entrer du contenu pour votre post.');
            }
        });
    }
    
    // Animation pour les barres de progression
    const progressBars = document.querySelectorAll('.bg-gradient-to-r.from-turquoise-500, .bg-gradient-to-r.from-violet-500');
    
    progressBars.forEach(bar => {
        const originalWidth = bar.style.width;
        bar.style.width = '0';
        
        setTimeout(() => {
            bar.style.transition = 'width 1s ease-in-out';
            bar.style.width = originalWidth;
        }, 300);
    });
});