<html>
<head>
<title>Consultations par Marques</title>
</head>
<body>
<h1 >Voitures</h1>

<table width="76%" border="1" height="93" align="center">
  <tr><!-- ligne 1 -->
	<td>Numero d'immatriculation</td>
        <td>Marque</td>
        <td>Type</td>
        <td>Annee</td>
        <td>Couleur</td>
        <td>Photo</td>
    
  </tr>
 

<?php

foreach ($LesVoituresM as $uneVoitureMarque)
{
    ?>
  <tr><!-- ligne 1 -->
      <td><?php  echo $uneVoitureMarque['numImma'];?></td>
      <td><?php echo $uneVoitureMarque['marque']?></td>
      <td><?php echo $uneVoitureMarque['type']?></td>
      <td><?php echo $uneVoitureMarque['annee']?></td>
      <td><?php echo $uneVoitureMarque['couleur']?></td>
      <td><img src = "images/<?php echo $uneVoitureMarque['image']; ?>" alt="image" /> </td>
     
  </tr>
<?php 

}


    
    
?>


</table>
</html>