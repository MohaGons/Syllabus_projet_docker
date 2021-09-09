<?php 
include 'header.html';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Docker</title>
</head>
<body>
</body>
</html>

<?php
require "database.php";
$reponse = $db->query('SELECT pseudo FROM users');
while ($donnees = $reponse->fetch())
{
   ?>
   <div class="mx-auto" style="width: 200px;">
   <table class="table align-middle">
   <thead>
     <tr>
       <th scope="col">Pseudo</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td><?php echo $donnees['pseudo'] ?></td> 
     </tr>
     </tr>
   </tbody>
 </table> 
</div>
</body>
 <?php
}
include 'footer.php';

?>