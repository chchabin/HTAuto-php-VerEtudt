<?php

if(!isset($_SESSION))
{
    session_start();
}
?>

<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Connexion</title>
    </head>
    
    <body>
        <h1> Connexion </h1>
        <form action="index.php?uc=controle" method="POST">
        Login : <input type ="text" name ="login">
        Mdp : <input type ="password" name ="mdp">
        <input type="submit" name="valid" value="Valider">
        </form>
        </body>
</html>
