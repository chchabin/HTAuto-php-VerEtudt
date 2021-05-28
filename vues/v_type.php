<html>
<head>
<title>Consultations par Types</title>
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

foreach ($LesVoituresT as $uneVoitureType)
{
    ?>
  <tr><!-- ligne 1 -->
      <td><?php echo $uneVoitureType['numImma'];?></td>
      <td><?php echo $uneVoitureType['marque']?></td>
      <td><?php echo $uneVoitureType['type']?></td>
      <td><?php echo $uneVoitureType['annee']?></td>
      <td><?php echo $uneVoitureType['couleur']?></td>
      <td><img src = "images/<?php echo $uneVoitureType['image']; ?>" alt="image" /> </td>
  </tr>
<?php 

}


    
    
?>


</table>
</html>