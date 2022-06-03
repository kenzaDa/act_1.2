
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
        'texte' => 'ceci est le texte de article 3',
        'auteur' => 'auteur3',
        'date de publication' => '15-08-2010',
    ],
    [
        'titre' => 'article4',
        'texte' => 'ceci est le texte de article 4',
        'auteur' => 'auteur4',
        'date de publication' => '7-03-2003',
    ],
    [
        'titre' => 'article5',
        'texte' => 'ceci est le texte de article 5',
        'auteur' => 'auteur5',
        'date de publication' => '28-04-1998',
    ],
];

foreach($articles as $article) {
    echo $article['titre'] . '  : ' .'ecrit par : ' .$article['auteur']  . ' le contenu de cet article est : ' .$article['texte'] .'publie le'. $article['date de publication'] . PHP_EOL; 

  
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


    $t= array_slice($articles,0,3);
    print_r($t);