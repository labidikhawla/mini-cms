# Session 08 - Défi

La route posts.tag utilise {tag:slug} : oui / non
oui
La page d'un tag n'affiche ni brouillon ni article d'un autre tag : oui / non
oui
Les tags des cartes sont des liens : oui / non
oui
L'accueil n'affiche que les tags qui ont au moins un article publié : oui / non
oui
Les trois nouveaux tests passent et php artisan test est vert : oui / non
oui

Pourquoi filtrer les tags vides après get() plutôt que d'afficher (0) ?
Pour des raisons d'UX (expérience utilisateur) et de SEO. Afficher un tag qui contient 0 article amène l'utilisateur vers une page vide, ce qui nuit à l'expérience de navigation et au référencement du site.
Combien de requêtes ajoute la liste des tags populaires, et pourquoi pas une par tag ?
Elle ajoute 1 seule requête SQL (en utilisant withCount() ou une agrégation GROUP BY), Pour éviter le problème du N+1. Faire une requête par tag dans une boucle exécuterait autant de requêtes SQL qu'il y a de tags, ce qui ralentirait inutilement l'application.