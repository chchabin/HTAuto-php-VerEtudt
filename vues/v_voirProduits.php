<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<FORM method ="POST" action="index.php?uc=marque">
    Marque :
    <SELECT name="marque">
        <?php
        foreach($LesMarques as $laMarque)
        {
        ?>
        <OPTION value='<?php echo $laMarque['id'];?>'><?php echo $laMarque['libelle'];?></OPTION>
        <?php
        }
        ?>
        </SELECT>
    <input type="submit" value="valider">
</FORM>

<FORM method ="POST" action="index.php?uc=type">
    Type :
    <SELECT name="type">
        <?php
        foreach($LesTypes as $leType)
        {
        ?>
        <OPTION value='<?php echo $leType['id'];?>'><?php echo $leType['libelle'];?></OPTION>
        <?php
        }
        ?>
        </SELECT>
    <input type="submit" value="valider">
</FORM>