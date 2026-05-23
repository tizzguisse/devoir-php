<php
$fichier = 'colis.json';
if(!file_exists($fichier)) {
    file_put_contents($fichier, json_encode([]));
}
if (isset($-post["ajouter"])){
    $numero =$_POST[numero];
    $client =$_POst["client];
    $telephone =$_POST["telephone"];
    $description =$_POST["description"];
    $statut=$_POST["statut"];
    
    $nouveauColis=[
      "numero" => $numero,"
      "client" => $client,
      "telephone"=>$telephone,
      "description"=>$description,
      "statut" =>$statut
      ]
    
      $cotenue = file_get_contents($fichier);
      $colis = json_decode($cotenue, true);
      $colis[]=$nouveauColis;
        file_put_contents($fichier, json_encode($colis, JSON_PRETTY_PRINT));
}
$cotenue=file_get_contents($fichier);
$colis=json_decode($cotenue,true)
$ recherche "";
if (isset($_GET["recherche"])){
  $recherche = $_GET["recherche"];
}
?>
<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suivi de colis</title>
     <style>
        body{
            font-family:arial;
            margin:30px
        }
        h2{
            color:blue;
        }
        form{
            margin-bottom:20px;
        }
        inupt,textearea,select{
            padding:5px;
            margin-bottom:10px;
            width:100%;
        }
        </style>
</head>
<body>
    <h2>ajouter un colis</h2>
    <form method=POST
    <label>numero de suivi:</label><br>
    <input type="text" name="numero" required><br>
    <label>nom du client:</label><br>
    <inupt type="text name="client"required><br>
    <label>Description:</label><br>
    <textera name"description required><texterea><br>
    <label> Statut:</label><break

    <select name="statut" required>
    <option value="en cours">en cours</option>
    <option value="livré">livré</option>
    <option value="annulé">annulé</option>
</select>
<br>

<button type="submit" name"ajouter"><ajouter</button>
</form>
<hr>
<h2>rechercher un colis</h2>
<form method="GET">
    <input type="text" name="recherche" placeholder="numero ">
    <button type="submit">rechercher</button>
</form>
<h2>listes de colis </h2>
<table>
    <tr>
        <th>numero </th>
        <th> client</th>
        <th>description</th>
        <th>statut</th>
    </tr>
<?php
foreach($colis as $c){
  if($recherche ==""
     $c["numero"]==$recherche 
      $c["telephone"]==$recherche
      ){
      ?>
      <tr>
          <td><?php echo $c["numero"];?></td>
          <td><?php echo $c["client"];?></td>
          <td><?php echo $c["telephone"];?></td>
          <td><?php echo $c["description"];?></td>
          <td><?php echo $c["status"];?></td>
      </tr>
    <?php
}
}
?>
</table>
</body>
</html>
    
