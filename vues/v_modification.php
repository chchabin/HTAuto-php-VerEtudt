<HTML>
<HEAD>
<TITLE>Modification d'une voiture</TITLE>
<BODY>
<DIV ALIGN='center'><h1>Mettre à jour une voiture </B></DIV>
<FORM action="index.php?uc=modifier" method='POST'>
<BR><h4>Numero d'immatriculation : <BR><INPUT TYPE='text' NAME='NUMIMMA' SIZE=20 MAXLENGTH=40 value='<?php echo $val[0]?>'><BR></h4>
<h4>Marque : <BR><INPUT TYPE='text' NAME='MARQUE' SIZE=20 MAXLENGTH=40 value='<?php echo $val[1]?>'><BR></h4>
<h4>Type: <BR><INPUT TYPE='text' NAME='TYPE' SIZE=10 MAXLENGTH=10 value='<?php echo $val[2]?>'><BR></h4>
<h4>Année: <BR><INPUT TYPE='text' NAME='ANNEE' SIZE=10 MAXLENGTH=10 value='<?php echo $val[3]?>'><BR></h4>
<h4>Puissance: <BR><INPUT TYPE='text' NAME='PUISS' SIZE=10 MAXLENGTH=10 value='<?php echo $val[4]?>'><BR></h4>
<h4>Couleur: <BR><INPUT TYPE='text' NAME='COUL' SIZE=10 MAXLENGTH=10 value='<?php echo $val[5]?>'><BR></h4>
<h4>Photo: <BR><INPUT TYPE='file' NAME='PHOTO' SIZE=10 MAXLENGTH=10 value='<?php echo $val[6]?>'><BR></h4>
<INPUT TYPE='hidden' NAME='ancienIm' SIZE=20 MAXLENGTH=40 value='<?php echo $val[0]?>'>

<INPUT TYPE='reset' VALUE='Annuler' >
<INPUT TYPE='submit' name='modifier'>
</FORM>
</BODY>
<a href="index.php?uc=controle">Retour à la liste des voitures</a>
