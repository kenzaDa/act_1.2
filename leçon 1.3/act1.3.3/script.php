<?php
if(isset($_POST['submit'])){
 
 $new_Article = array(
    "titre" => $_POST['titre'],
    "texte" => $_POST['texte'],
    "auteur" => $_POST['auteur'],
    "date" => $_POST['date']
 );

 if(filesize("article.json") == 0){
    $first_record = array($new_Article);
    $data_to_save = $first_record;
 }
 else{
    $old_records = json_decode(file_get_contents("article.json"));
    array_push($old_records, $new_Article);
    $data_to_save = $old_records;
 }

 $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);

 if(!file_put_contents("article.json", $encoded_data, LOCK_EX)){
    $error = "Erreur lors de l'ajout de l'article, merci de réessayer";
 }else{
    $success =  "Article ajouté avec succés";
 }
}
?>