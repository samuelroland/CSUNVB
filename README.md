# Cahier des charges, projet CSU-NVB

Ce document décrit les cas d’utilisation de l’application CSU-NVB.

L’objectif du projet est de créer un site web application fonctionnant au moins sur tablettes et permettant aux membres du Centre de Secours et d’Urgences du Nord Vaudois et de la Broie (CSU-NVB) d’effectuer les contrôles journaliers et hebdomadaires usuels.

Le CSU-NVB compte 5 bases : La Vallée-de-Joux, Payerne, Saint-Loup, Sainte-Croix et Yverdon.

Chaque base a 2 ou 3 véhicules (ambulances)

Il y a X secouristes sur l’ensemble du CSU-NVB, chacun(e) étant rattaché(e) à une base. Dans cette application, on considère que tout le monde a le même rôle dans l’organisation.

Le site gère trois types de checklists :

1.	Le stock de stupéfiants par véhicule et par semaine (qu’on appellera « Page Stup » dans ce document)

2.	Les tâches hebdomadaires de la base (qu’on appellera « Page Todo » dans ce document)

3.	La remise de garde quotidienne (qu’on appellera « Page Remise » dans ce document)

# Use Cases

## Se connecter

En arrivant sur le site, le(la) secouriste est invité(e) à se connecter avec son nom d’utilisateur et mot de passe.

Une fois connecté(e), le site montre la base à laquelle le(la) secouriste est rattaché(e) et propose un accès aux trois types de pages (Stup, Todo, Remise), pour la base à laquelle le(la) secouriste est rattaché(e).

Pour les admins, un accès à la page d’administration est proposé.

## Gérer des secouristes (admin)

- Login
- Inscription
- Les admins gèrent les secouristes
  - Donner/Retirer le droit d’administrer (sauf à soi-même)
  - Choix de la base

## Gérer une liste de bases (admin)
- Afficher la liste. Clic -> gérer la base
- Créer
- Renommer
- Supprimer (s’il n’y a plus de données associées)

## Gérer une base (admin)

- Liste des modèles STUP, Todolist et Remise

  - Si le dernier n’a pas encore été utilisé

     - Clic -> édition
     - Bouton permettant de le désigner comme actif
  
  - Si le dernier a été utilisé -> bouton permettant de créer une nouvelle version
- Liste des véhicules
- Archiver les données

## Remplir une Todolist (secouriste, pour une base choisie)
- Liste des todolists clôturées :
  - Date, liste des contributeurs, nom de celui qui a clôturé
  - Clic -> Vue détaillée -> clic bouton download -> format pdf
- S’il n’y a pas de todolist ouverte, un bouton permet d’en ouvrir une. Elle sera basée sur le modèle actif
- S’il y a une todolist ouverte, un bouton permet de passer à la page d’édition
- La page d’édition se présente en 7 colonnes sur un grand affichage et en une colonne sur un petit affichage
- Il y a deux types de cases : toggle et input
- Clic sur une case toggle vierge -> elle devient quittancée par le secouriste
- Clic sur une case toggle déjà quittancée par le secouriste connecté -> elle redevient vierge
- Introduction d’une valeur dans une case input vierge -> elle devient quittancée par le secouriste
- Une case input quittancée par un autre secouriste ne peut pas être modifiée
- Une case input déjà quittancée par le secouriste connecté peut être modifiée. Si la valeur donnée est nulle, la case redevient vierge

## Remplir une page Stup (secouriste, pour une base choisie)
- Liste des pages clôturées
  - Date, liste des contributeurs
  - Clic -> Vue détaillée -> clic bouton download -> format pdf
- S’il n’y a pas de page Stup ouverte, un bouton permet d’en ouvrir une. Elle sera basée sur le modèle actif
- S’il y a une page Stup ouverte, un bouton permet de passer à la page d’édition
- La page d’édition se présente en 7 colonnes sur un grand affichage et en une colonne sur un petit affichage
- Chaque cellule est un input numérique si la journée n’a pas été clôturée
- Un bouton permet d’ajouter une ligne pour un médicament 
- En bas de chaque jour, il y a un bouton qui permet de clore la journée. Ce bouton demande une confirmation
- La feuille complète est clôturée quand chacun des jours a été clôturé

## Remplir une page Remise (secouriste, pour une base choisie)
- Liste des pages clôturées
  - Date, responsable, équipiers, vehicules, pour le jour et pour la nuit
  - Clic -> Vue détaillée -> clic bouton download -> format pdf
- S’il n’y a pas de page Remise ouverte, un bouton permet d’en ouvrir une. Elle sera basée sur le modèle actif
- S’il y a une page Remise ouverte, un bouton permet de passer à la page d’édition
- Une page Remise ouverte peut être fermée sans pour autant être clôturée
- Bouton pour clôturer la page

