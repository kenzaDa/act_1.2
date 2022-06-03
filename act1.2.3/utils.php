
<?php

$articles = [
    
 
    [
        'titre' => 'article1',
        'texte' => 'ceci est le texte de article 1',
        'auteur' => 'auteur1',
        'date de publication' => '12-7-2020',
    ],
    [
        'titre' => 'article2',
        'texte' => 'ceci est le texte de article 2',
        'auteur' => 'auteur2',
        'date de publication' => '24-11-1987',
    ],
    [
        'titre' => 'article3',
        'texte' => 'ceci est le texte de article3',
        'auteur' => 'auteur3',
        'date de publication' => '7-01-2000',
    ],
];

foreach($articles as $article) {
    echo $article['titre'] . '  : ' .'ecrit par : ' .$article['auteur'] .'publie le' .$article['date de publication'] . PHP_EOL; 

  
    }
    function date_compare($element1, $element2) {
        $datetime1 = strtotime($element1['date de publication']);
        $datetime2 = strtotime($element2['date de publication']);
        return $datetime1 - $datetime2;
    } 
      
    // Sort the array 
    usort($articles, 'date_compare');
      
    // Print the array
    print_r($articles);