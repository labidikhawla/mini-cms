# Session 04 - Défi x-page-header

@props déclare title (obligatoire) et subtitle (par défaut null) : oui / non
oui

Le paragraphe ne s'affiche que si subtitle est fourni : oui / non
oui

Le composant remplace le h1 de a-propos.blade.php et de posts/index.blade.php : oui / non
oui

Aucune URL écrite à la main : oui / non
oui

Sur /posts/archive/2025, quel titre affiche x-page-header, et d'où vient-il ?
affiche « Articles de 2025 ». Ce titre est construit par PostController::archive dans $heading, puis transmis au composant avec :title