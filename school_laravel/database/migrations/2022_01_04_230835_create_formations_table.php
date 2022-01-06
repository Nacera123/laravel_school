<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id('id_formation');
            $table->text('description');
            $table->string('intitule');
            $table->string('nbre_d_heure');
            $table->string('image');
            // $table->bigInteger('id_utilisateur')->unsigned()->index();
            // $table->foreign ('id_utilisateur')->references('id_utilisateur')->on('utilisateurs');
            $table->timestamps();
        });




        DB::table('formations')->insert(

            [
                'description'=>'
                - Créer des pages en HTML5 et utiliser les nouvelles balises
                - Mettre en page et en forme avec CSS3
                - Utiliser les nouvelles API JavaScript
                - Gérer la mobilité et maîtriser le responsive web design
                - Présenter les différentes fonctionnalités afin de vous permettre de maîtriser Bootstrap
                - Être à même d’adapter vous-même le code source de Bootstrap
                - Intégrer votre propre design à Bootstrap
                - L’utiliser comme socle fondateur dans vos sites web',

                'intitule'=>'HTML5 – CSS3 - BOOTSTRAP',
                'nbre_d_heure'=>'70 heures',
                'image'=>''
                // 'id_utilisateur'=>1
            ]
        );

        DB::table('formations')->insert(

            [
                'description'=>"
                - Acquérir les bases JavaScript nécessaires pour développer des pages web plus conviviales et interactives.
                - Comprendre comment rajouter de l'interactivité sur les pages et formulaires Web
                - Savoir manipuler dynamiquement des objets HTML
                - Manipuler le contenu de la page : animer son aspect graphique, mettre en place l'aspect interactif grâce aux événements déclenchés par l'utilisateur, continuer à dialoguer avec le serveur sans recharger la page (AJAX)",

                'intitule'=>'javascript & JQuery',
                'nbre_d_heure'=>'150 heures',
                'image'=>''
                // 'id_utilisateur'=>2
            ]
        );

        DB::table('formations')->insert(

            [
                'description'=>"
                - Modéliser les entités relationnelles et générer les données d’une base de données.
                - Écrire du code SQL basé sur les normes ANSI/ISO afin de construire et de maintenir des structures de bases de données
                - Mettre à jour le contenu d'une base de données avec SQL et la gestion des transactions
                - Récupérer des données à partir d'une ou plusieurs table(s)
                - Traiter des données ligne par ligne en utilisant des agrégations",

                'intitule'=>'Merise & SQL',
                'nbre_d_heure'=>'150 heures',
                'image'=>''
                // 'id_utilisateur'=>1
            ]
        );

        DB::table('formations')->insert(

            [
                'description'=>'
                - Découvrir les possibilités offertes par la plateforme PHP
                - Architecturer une application pour une évolution aux effets de bords
                contrôlés
                - Communiquer avec les SGBD
                - Sécuriser ses applications
                - Atteindre un niveau avancé en PHP
                - Comprendre les techniques de développement avec PHP
                - Interagir avec les bases de données et les flux',

                'intitule'=>'PHP',
                'nbre_d_heure'=>'150 heures',
                'image'=>''
                // 'id_utilisateur'=>1
            ]
        );

        DB::table('formations')->insert(

            [
                'description'=>"
                - Installer et configurer un serveur Node.js
                - Développer des applications JavaScript côté serveur
                - Mettre en oeuvre les concepts de la programmation événementielle et asynchrone
                - Mettre en place un gestionnaire de routes
                - Manipuler l'API de Node.js
                - Gérer la persistance dans une base de données NoSQL",

                'intitule'=>'NodeJS',
                'nbre_d_heure'=>'80 heures',
                'image'=>''
                // 'id_utilisateur'=>2
            ]
        );

        DB::table('formations')->insert(

            [
                'description'=>"
                - Découvrir ReactJS et son fonctionnement
                - Écrire des composants avec les nouvelles syntaxes JSX et ES6
                - Comprendre et intégrer l'architecture Flux
                - Mettre en place un environnement de développement pour ReactJS",

                'intitule'=>'ReactJS',
                'nbre_d_heure'=>'120 heures',
                'image'=>''
                // 'id_utilisateur'=>1
            ]
        );

        DB::table('formations')->insert(

            [
                'description'=>"
                - Créer une application Android et IOS avec Ionic 4
                - Comprendre le soutien d'Angular 7 dans Ionic 4
                - Être capable d'utiliser des éléments GUI natifs
                - Gérer les thèmes en utilisant SASS
                - Comprendre les listes et la récupération de données JSON
                - Gérer le stockage de données
                - Comment accéder aux fonctions des périphériques natifs",

                'intitule'=>'Ionic',
                'nbre_d_heure'=>'100 heures',
                'image'=>''
                // 'id_utilisateur'=>2
            ]
        );



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
