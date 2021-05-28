<?php
session_start();
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
require_once("util/class.PDO.HTAuto.inc.php");

if(!isset($_REQUEST['uc']))
{
     $uc = 'accueil';
}
else
{
	$uc = $_REQUEST['uc'];
/*//Utile lors de l'utilisation de la base de données
 * $pdo = PdoLafleur::getPdoLafleur();	 
 */
}
$pdo=  PdoHtAuto::getPdoHtAuto();

switch($uc)
{
	case 'accueil':
        {
                include("vues/v_accueil.php");
        }
                break;
        
        
	case 'voirProduits' :
        {   
                $LesMarques=$pdo->getLesMarques();
                $LesTypes=$pdo->getLesTypes();
                include("vues/v_voirProduits.php");
        }
                break;
        
        
        case 'marque' :
        {
            $laMarqueS=$_POST['marque'];
            $LesVoituresM=$pdo->getLesVoituresUneMarque($laMarqueS);   
            include("vues/v_marque.php");
        }
            break;
        
        
        case 'type' :
        {   
            $leTypeS=$_POST['type'];
            $LesVoituresT=$pdo->getLesVoituresUnType($leTypeS);
            include("vues/v_type.php");
        }
                break;
        case 'controle' :
           
            if(!isset($_SESSION['utilisateur']))
            {            
                $check=$pdo->getUser($_POST['login'], $_POST['mdp']);
                if ($check==1)
                {
                    $_SESSION['utilisateur']=$_POST['login'];

                    $lesVoitures=$pdo->getLesVoitures();
                    include ('vues/v_listeVoituresAdmin.php');
                }
                else
                {
                    $_GET['message']="Erreur, identifiants incorrects.";
                    include ('vues/v_connexion.php');
                }
            }
            else 
            {
                    $lesVoitures=$pdo->getLesVoitures();
                    include ('vues/v_listeVoituresAdmin.php');
            }
            break;
        
	case 'administrer' :
        { 
                include ("vues/v_connexion.php");
        }
                break; 
                      
       case 'suppression' :
        { 
                $cleP=$_GET['cleP'];
                $supp=$pdo->suprVehicule($cleP);
                if($supp==1)
            {
                $message="La suppression s'est effectuée avec succès";
            }
            else 
            {
                $message="La suppression a échoué";
            }
            $_SESSION['message'] = $message;
            $go_page="index.php?uc=controle";
            header("location:".$go_page);
        }
                break;
                
        case 'modification' :
        {
                $cleP=$_GET['cleP'];
                $val=$pdo->getLaVoiture($cleP);
                include("vues/v_modification.php");
        }
                break; 
            
        case 'modifier' :
        {
            $ancienIm=$_POST['ancienIm'];
            $numImma=$_POST['NUMIMMA'];
            $Marque=$_POST['MARQUE'];
            $Type=$_POST['TYPE'];
            $Annee=$_POST['ANNEE'];
            $Puissance=$_POST['PUISS'];
            $Couleur=$_POST['COUL'];
            $Photo=$_POST['PHOTO'];
            $nbVehiculeModif=$pdo->modifVehicule($ancienIm,$numImma, $Marque, $Type, $Annee , $Puissance, $Couleur, $Photo);
            if($nbVehiculeModif==1)
            {
                $message="La modification s'est effectuée avec succès";
            }
            else 
            {
                $message="La modification a échoué";
            }
            $_SESSION['message'] = $message;
            $go_page="index.php?uc=controle";
            header("location:".$go_page);
        }
                break;
            
       case 'ajouter' :
        { 
                $cleP=$_GET['cleP'];
                $val=$pdo->getLaVoiture($cleP);
                include ('vues/v_ajout.php');
        }
                break;
            
        case 'ajout' :
        { 
            $numImma=$_POST['NUMIMMA'];
            $Marque=$_POST['MARQUE'];
            $Type=$_POST['TYPE'];
            $Annee=$_POST['ANNEE'];
            $Puissance=$_POST['PUISS'];
            $Couleur=$_POST['COUL'];
            $Photo=$_POST['PHOTO'];
            $ajoutVoiture=$pdo->nouveauVehicule($numImma, $Marque, $Type, $Annee , $Puissance, $Couleur, $Photo);
            if($ajoutVoiture==1)
            {
                $message="L'ajout s'est effectué avec succès";
            }
            else 
            {
                $message="L'ajout a échoué";
            }
            $_SESSION['message'] = $message;
            $go_page="index.php?uc=controle";
            header("location:".$go_page);
        }
                break; 
            
        
        
}
include("vues/v_pied.php") ;


?>
