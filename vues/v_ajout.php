<HTML>
<HEAD>

<TITLE>Ajout d'une voiture</TITLE>

</HEAD>


<BODY>
<h1><B>Une nouvelle voiture</B></h1>
<FORM method="POST" action="index.php?uc=ajout">
<BR><h4>Numero d'immatriculation : <BR><INPUT TYPE='text' NAME='NUMIMMA' SIZE=20 MAXLENGTH=40 value=><BR></h4>
<h4>Marque : <BR><INPUT TYPE='text' NAME='MARQUE' SIZE=20 MAXLENGTH=40 value=><BR></h4>
<h4>Type: <BR><INPUT TYPE='text' NAME='TYPE' SIZE=10 MAXLENGTH=10 value=><BR></h4>
<h4>Année: <BR><INPUT TYPE='text' NAME='ANNEE' SIZE=10 MAXLENGTH=10 value=><BR></h4>
<h4>Puissance: <BR><INPUT TYPE='text' NAME='PUISS' SIZE=10 MAXLENGTH=10 value=><BR></h4>
<h4>Couleur: <BR><INPUT TYPE='text' NAME='COUL' SIZE=10 MAXLENGTH=10 value=><BR></h4>
<h4>Photo: <BR><INPUT TYPE='file' NAME='PHOTO' SIZE=10 MAXLENGTH=10 value=><BR></h4>

</select><BR>



<INPUT TYPE="reset" VALUE="Annuler" >
<INPUT TYPE="submit" VALUE="Valider">
</FORM>
<br>
<a href="index.php?uc=controle">Retour à la liste des voitures</a>
</BODY>
</HTML>