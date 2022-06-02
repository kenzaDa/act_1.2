<?php

$articles = [
    [
        'titre' => 'article1',
        'texte' => 'ceci est le texte de article 1',
        'auteur' => 'auteur1',
        'date de publication' => '12 novembre 2020',
    ],
    [
        'titre' => 'article1',
        'texte' => 'ceci est le texte de article 1',
        'auteur' => 'auteur1',
        'date de publication' => '12 novembre 2020',
    ],
    [
        'titre' => 'article2',
        'texte' => 'ceci est le texte de article 2',
        'auteur' => 'auteur2',
        'date de publication' => '24 novembre 1987',
    ],
    [
        'titre' => 'article3',
        'texte' => 'ceci est le texte de article3',
        'auteur' => 'auteur3',
        'date de publication' => '7 janvier 2000',
    ],
];

foreach($articles as $article) {
    echo $article['titre'] . '  : ' .'ecrit par : ' .$article['auteur'] .'publié le' .$article['date de publication'] . PHP_EOL; 