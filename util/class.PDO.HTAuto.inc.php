<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application HtAuto (adaptation du cas lafleur)
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Patrice Grand
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoHtAuto
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=ht_auto';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoHtAuto = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoHtAuto::$monPdo = new PDO(PdoHtAuto::$serveur.';'.PdoHtAuto::$bdd, PdoHtAuto::$user, PdoHtAuto::$mdp); 
			PdoHtAuto::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoHtAuto::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoHtAuto = PdoHtAuto::getPdoHtAuto();
 * @return l'unique objet de la classe PdoHtAuto
 */
	public  static function getPdoHtAuto()
	{
		if(PdoHtAuto::$monPdoHtAuto == null)
		{
			PdoHtAuto::$monPdoHtAuto=new PdoHtAuto();
		}
		return PdoHtAuto::$monPdoHtAuto;  
	}
/**
 * Retourne toutes les catégories sous forme d'un tableau associatif
 *
 * @return le tableau associatif des catégories 
*/
	public function getLesTypes()
	{
		$req = "select * from type";
                $res=  PdoHtAuto::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}
        
        public function getUser($login,$mdp)
        {
              
                $req="select count(LOGIN) as nb from GESTIONNAIRE where LOGIN='$login' AND MDP='$mdp' ";
                $res =  PdoHtAuto::$monPdo->query($req);
                $ligne= $res->fetch();
                $nb=$ligne['nb'];
                return $nb;
        }

/**
 * Retourne sous forme d'un tableau associatif tous les produits de la
 * catégorie passée en argument
 * 
 * @param $idCategorie 
 * @return un tableau associatif  
*/

	public function getLaVoiture($cleP)
	{
	    $req="select * from VOITURE where numImma = '$cleP'";
            var_dump($req);
		$res=  PdoHtAuto::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes; 
	}

        
        public function getLesVoituresUneMarque($laMarque)
        {
            $req="select voiture.numImma as numImma,voiture.annee as annee,
            marque.libelle as marque, type.libelle as type ,
            voiture.couleur as couleur, voiture.image as image 
            from voiture, marque , type
            where voiture.idMarque = marque.id
            and voiture.idType = type.id
            and  voiture.idMarque = ". $laMarque ;
            var_dump($req);
            $res=  PdoHtAuto::$monPdo->query($req);
            $lesVoitures = $res->fetchAll();
            return $lesVoitures;
        }
        
        public function getLesVoitures()
        {
            $req="select * from voiture";
            $res=  PdoHtAuto::$monPdo->query($req);
            $lesVoitures = $res->fetchAll();
            return $lesVoitures;
        }
        
        public function getLesVoituresUnType($leType)
        {
            $req="select voiture.numImma as numImma,voiture.annee as annee,
            marque.libelle as marque, type.libelle as type ,
            voiture.couleur as couleur, voiture.image as image 
            from voiture, marque , type
            where voiture.idMarque = marque.id
            and voiture.idType = type.id
            and  voiture.idType = ". $leType ;
            var_dump($req);
            $res=  PdoHtAuto::$monPdo->query($req);
            $lesVoitures = $res->fetchAll();
            return $lesVoitures;
        }

        public function getLesMarques()
        {
                $req = "select * from  marque";
               
                $res=  PdoHtAuto::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
        }
        
        
        
        public function nouveauVehicule($numImm, $marque, $type, $annee , $puiss, $coul, $photo)
        {
            $req = "INSERT INTO VEHICULE (NUMIMM,MARQUE,TYPE,ANNEE,PUISS,COUL,PHOTO) VALUES ('$numImm','$marque','$type',$annee,'$puiss','$coul','$photo')";
            $res=  PdoHtAuto::$monPdo->exec($req);
            return $res;
           
        }
        public function modifVehicule($ancienIm,$numImm, $marque, $type, $annee , $puiss, $coul, $photo)
        {
                       
            $req ="update VEHICULE SET NUMIMM='$numImm',MARQUE='$marque',TYPE='$type',ANNEE=$annee,PUISS='$puiss',COUL='$coul',PHOTO='$photo' where NUMIMM='$ancienIm'";
            var_dump($req);
            $res=  PdoHtAuto::$monPdo->exec($req);
            return $res;
            }
           
        public function suprVehicule($ancienIm)
        {
            $req = "delete From VEHICULE Where NUMIMM='$ancienIm'";
            $res = PdoHtAuto::$monPdo->exec($req);
            return $res;
        }

}
?>
