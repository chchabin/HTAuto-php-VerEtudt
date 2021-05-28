<html>
<head>
<title>Liste des voitures</title>
</head>
<body>
<h1 >Les Voitures</h1>
<h2>
    <?php
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        $_SESSION['message']="";
    }
    ?>
        
</h2>

<table width="76%" border="1" height="93" align="center">
  <tr><!-- ligne 1 -->
	<td>Numero d'immatriculation</td>
        <td>Marque</td>
        <td>Type</td>
        <td>Annee</td>
        <td>Puissance</td>
        <td>Couleur</td>
        <td>Photo</td>
        <td>Modification</td>
        <td>Suppression</td>
    
  </tr>
 

<?php

foreach ($lesVoitures as $val)
{
    ?>
  <tr><!-- ligne 1 -->
      <td><?php  echo $val[0];?></td>
      <td><?php echo $val[1]?></td>
      <td><?php echo $val[2]?></td>
      <td><?php echo $val[3]?></td>
      <td><?php echo $val[4]?></td>
      <td><?php echo $val[5]?></td>
      <td><?php echo "<img src=$val[6]	alt=$val[6] title=$val[6]/>"; ?> </td>
      <td><a href="index.php?uc=modification&cleP=<?php echo $val[0]?>">Modification</td>
      <td><a href="index.php?uc=suppression&cleP=<?php echo $val[0]?>">Suppression</td>
  </tr>
<?php 

}


    
    
?>


</table>
<a href="index.php?uc=ajouter&cleP=<?php echo $val[0]?>">Ajouter une voiture</a>
</html>