
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<h1>Liste des posts</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Actif ?</th>
      <th scope="col">Crée le</th>
      <th scope="col">Commentaire</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($recipes as $recipe) {
        ?>
        <tr>
        <td><?php echo $recipe['id'];?></td>
        <td><?php echo $recipe['title'];?></td>
        <td><?php echo $recipe['description'];?></td>
        <td><?php echo $recipe['active'];?></td>
        <td><?php echo $recipe['created_at'];?></td>
        <td><a href='index.php?action=comments-list&id=<?php echo $recipe['id']; ?>'>Voir</a></td>
        </tr>
        <?php
    }  
    ?>
  </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>