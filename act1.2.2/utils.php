
<?php

$articles = [
    
 
    [
        'titre' => 'article1',
        'texte' => 'L’Ukraine a accordé la citoyenneté au journaliste russe Alexandre Nevzorov
        Anton Gerashchenko, conseiller du ministre ukrainien de l’intérieur, a déclaré sur Telegram que les autorités de Kiev avaient accordé la citoyenneté au journaliste russe Alexandre Nevzorov et à son épouse, Lydia. Le journaliste avait fui la Russie en mars avec sa femme après avoir dénoncé l’invasion de l’Ukraine par le Kremlin. La Russie avait demandé l’arrestation de M. Nevzorov, l’accusant de diffuser de fausses informations.
        
        M. Nevzorov a confirmé qu’il avait reçu la citoyenneté ukrainienne dans une déclaration sur Telegram, dans laquelle il a déclaré :
        
        Il y a un criminel et il y a une victime d’un crime. Il y a un tueur et il y a quelqu’un qu’il tue ou essaie de tuer.
        L’auteur est la Russie. La victime est l’Ukraine. Elle ne peut être ni contestée ni réfutée. C’est un fait. Et bien, chacun fait son choix : aider le criminel ou sauver sa victime. (…)
        Je prends le parti de la victime.
        Et je suis sacrément reconnaissant envers le peuple ukrainien tourmenté, désespéré et ensanglanté qui m’a permis de prendre ma place parmi eux',
        'auteur' => 'auteur1',
        'date de publication' => '12-7-2020',
    ],
    [
        'titre' => 'Roland-Garros en direct : un premier set arraché par Nadal face à Zverev, après une heure trente de jeu',
        'texte' => 'Le match entre l’Espagnol, déjà treize fois vainqueur porte d’Auteuil, et l’Allemand, troisième joueur mondial, s’annonce comme une finale avant l’heure des Internationaux de France.',
        'auteur' => 'auteur2',
        'date de publication' => '24-11-1987',
    ],
    [
        'titre' => 'Les Etats-Unis et l’Union européenne renforcent leur coopération avec Taïwan',
        'texte' => 'A vingt-quatre heures d’intervalle, Taïwan est parvenu à renforcer ses liens économiques avec les Etats-Unis, mais aussi, dans une moindre mesure, avec l’Union européenne (UE). Mercredi 1er juin, la représentante adjointe au commerce des Etats-Unis, Sarah Bianchi, et le ministre taïwanais sans portefeuille chargé des négociations, John Deng, se sont rencontrés « virtuellement » et ont lancé « l’Initiative Etats-Unis-Taïwan sur le commerce du XXIe siècle ». Objectif : développer des moyens concrets d’approfondir les relations économiques et commerciales, selon un communiqué de l’ambassadrice américaine au commerce (USTR). Cette initiative entend faciliter les échanges, permettre d’adopter « des pratiques saines et transparentes » ou encore de coopérer en faveur de l’environnement ou de l’action climatique, a détaillé l’USTR',
        'auteur' => 'auteur3',
        'date de publication' => '15-08-2010',
    ],
    [
        'titre' => 'A Marseille, Emmanuel Macron entame sa « révolution culturelle » dans les écoles',
        'texte' => 'En visite dans des établissements pilotes d’une expérimentation scolaire, avec le ministre de l’éducation nationale, Pap Ndiaye, le chef de l’Etat a défendu jeudi une « nouvelle approche » censée donner plus de liberté et d’autonomie aux établissements et aux enseignants.',
        'auteur' => 'auteur4',
        'date de publication' => '7-03-2003',
    ],
    [
        'titre' => 'Incidents au Stade de France : Anne Hidalgo parle de « honte pour notre pays », Emmanuel Macron renouvelle sa « confiance » en Gérald Darmanin et Didier Lallement',
        'texte' => 'La maire socialiste de Paris a dénoncé la doctrine de maintien de l’ordre en vigueur, tandis que Xavier Bertrand, le président des Hauts-de-France, demande davantage d’« autorité » dans le pays.',
        'auteur' => 'auteur5',
        'date de publication' => '28-04-1998',
    ],
];

//foreach($articles as $article) {
    //echo $article['titre'] . '  : ' .'ecrit par : ' .$article['auteur']  . ' le contenu de cet article est : ' .$article['texte'] .'publie le'. $article['date de publication'] . PHP_EOL; 

    function date_compare($element1, $element2) {
       $datetime1 = strtotime($element1['date de publication']);
       $datetime2 = strtotime($element2['date de publication']);
     return $datetime1 - $datetime2;
    } 
      
   // Sort the array 
    usort($articles, 'date_compare');
      
     //Print the array
     function  getArticles($n=null){
        $array=array();
          global $articles;
          foreach($articles as $article){
              if(($article['date de publication']) < time()){
                  $tab[] = $article;
              }
          }
          if ($n===null || $n>count($tab)){
              return($tab);
          }
          for ($i=0 ; $i< $n ; $i++) {
           $array[]=  $tab[$i];
             
              }
           return $array;
      }
    
   




   ?>
