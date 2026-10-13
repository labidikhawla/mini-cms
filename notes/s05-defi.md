# Session 05 - Défi : articles récents sur l'accueil

latestPosts contient au plus 3 articles : oui / non
oui
Seuls les articles publiés sont transmis à la vue : oui / non
oui
home.blade.php utilise x-post-card et @forelse : oui / non
oui
Le nouveau test passe et php artisan test est vert : oui / non
oui

Pourquoi get() et pas paginate(3) sur la page d'accueil ?
get() est plus adapté sur la page d'accueil car on souhaite afficher uniquement un bloc fixe des 3 derniers articles récents sans ajouter de navigation de pagination.