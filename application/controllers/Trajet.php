<?php
/**
* 
*/
class Trajet extends CI_Controller{
	
	public function __construct() {
		parent::__construct();			
		$this->load->model('util_model');

		$this->load->model('trajet_model');

		$this->load->library('trajet_lib');

		$this->load->helper(array('form', 'url')); 
	}

	public function index(){
		$data['contents']='trajets';
		try{
			$data['trajets']=$this->rechercher();
			$data['erreur']=null;
		} catch(Exception $ex){
			$data['erreur']=$ex;
			$data['trajets']=array();
		}
 		$this->load->view('template',$data); 
 	}	 

	// public function creation_trajet(){
	// 	$data['allBus']=$this->util_model->findAll("bus");
	// 	$data['allChauffeur']=$this->util_model->findAll("chauffeur");
	// 	$data['allVille']=$this->util_model->findAll("ville");  	
 // 		$data['contents']='admin/squelette/ajout-trajet';
 // 		$this->load->view('admin/template-admin',$data);
 // 	}

 	public function creation_trajet(){
 		$data['allBus']=$this->util_model->findAll("bus");
		$data['allChauffeur']=$this->util_model->findAll("chauffeur");
		$data['allVille']=$this->util_model->findAll("ville");
		if($_POST){
			$bus=$this->input->post('bus'),
        	$chauffeur=$this->input->post('chauffeur'),
            $tarif=$this->input->post('tarif'),
            $source=$this->input->post('source'),
            $destination=$this->input->post('arrivee'),          
            $datedepart=$this->input->post('datedepart'),
            $heuredepart=$this->input->post('heuredepart'),
			try {
				$this->trajet_lib->initialize(0,$chauffeur,$bus,$source,$destination,$datedepart,$heuredepart,$tarif);
				 $donnee = array(
	            	'idbus'=>$this->trajet_lib->getBus(),
	            	'idchauffeur'=>$this->trajet_lib->getChauffeur(),
	                'tarif'=>$this->trajet_lib->getTarif(),
	                'source'=>$this->trajet_lib->getSource(),
	                'destination'=>$this->trajet_lib->getDestination(),          
	                'datedepart'=>$this->trajet_lib->getdateDepart(),
	                'heuredepart'=>$this->trajet_lib->getHeure(),
	            );
				$this->trajet_model->addtrajet($donnee);
				$this->session->set_flashdata('success_message',"Ligne inserée");
				redirect('trajet/lister_trajet','refresh');

			} catch (Exception $ex) {
				$data['error_message']= $ex->getMessage();
				$data['contents']='admin/squelette/ajout-trajet';
	 			$this->load->view('admin/template-admin',$data);
			}

		}else{
			$data['error_message']= null;
			$data['contents']='admin/squelette/ajout-trajet';
 			$this->load->view('admin/template-admin',$data);
		}  	
 	}
 	
	 // public function creationTrajet(){
 	// 	$trajet=new Trajet_Model();
 	// 	if($_POST){ 			
  //           $data = array(
  //           	'idbus'=>$this->input->post('bus'),
  //           	'idchauffeur'=>$this->input->post('chauffeur'),
  //               'tarif'=>$this->input->post('tarif'),
  //               'source'=>$this->input->post('source'),
  //               'destination'=>$this->input->post('arrivee'),          
  //               'datedepart'=>$this->input->post('datedepart'),
  //               'heuredepart'=>$this->input->post('heuredepart'),
  //           );
  //           //ajouter trajet
  //           $this->trajet_model->addtrajet($data);
		// 	redirect('trajet/lister_trajet','refresh');
 	// 	}
 	// }

	 private function rechercher(){
		 $this->load->model('Client_Model');
		 $depart=$this->input->get("depart");
		 $destination=$this->input->get("destination");
		 $date=$this->input->get("date");
		 $ret=$this->recherche($date,$depart,$destination);
		 return $ret;
	 }

	 public function lister_trajet(){
		$data['allTrajets']=$this->trajet_model->getAllTrajet();
 		$data['contents']='admin/squelette/liste-trajet';
 		$this->load->view('admin/template-admin',$data);
	 }

	public function detail($id=0){
		$data['contents']='detail';
		$detail=$this->detailTrajet($id);
		$data['detail']=$detail;

		
		$this->load->model('Bus_Model');
		$this->load->model('Trajet_Model');

		$places=$this->Bus_Model->findplaces($detail->idbus);
		$occupe=$this->Trajet_Model->findoccupe($id);

		for($i=count($places)-1;$i>2;$i-=4){ 
			$places[$i]->classe="ta";
			$places[$i-1]->classe="ta2";
			$places[$i-2]->classe="ta";
			$places[$i-3]->classe="ta";
		}
		$places[1]->classe="ta";
		$places[0]->classe="ta2";

		for($i=count($places)-1;$i>0;$i--){ 
			for($j=0;$j<count($occupe);$j++){
				if($places[$i]->idplace==$occupe[$j]->idplace) $places[$i]->classe="ta0";
			}
		}

		$data['places']=$places;
 		$this->load->view('template',$data);
 	}

	private function detailTrajet($id){
		 $this->load->model('Trajet_Model');
		 $ret=Trajet_Model::findbyid($id);
		 return $ret[0];
	}

	public function reservation(){
		if(isset($this->session->userdata['client']['idclient'])){
			$idclient=$this->session->userdata['client']['idclient'];	
			$place=$this->input->post('placebus');
			$trajet=$this->input->post('idtrajet');
			$liste=array();
			echo $place;
			$j=0;
			for($i=0;$i<$place;$i++){
				if($this->input->post("c$i")!=null){
					$liste[$j]=$this->input->post("c$i");
					$j++;
				}
			}
			$this->reserver($idclient,$trajet,$liste);
			redirect("pannier","refresh");
		}else{
			redirect("connexion","refresh");
		}
	}
	
	public function reserver($client,$trajet,$placeIdList){ 
            $this->load->model('Reservation_Model');
            $this->load->model('ReservationPlace_Model');
            // Obtenir la date d'aujourd'hui
            date_default_timezone_set('Europe/Moscow');
            $aujourdhui=date('d-m-Y');
            // ouvrir la transaction
            $this->db->trans_start();
            try{
                // insert reservation
                Reservation_Model::add($client,$aujourdhui);
				$reservation=$this->db->insert_id();
				var_dump($placeIdList);
                // insert detail_reservation
                for($i=0;$i<count($placeIdList);$i++){
                    ReservationPlace_Model::add($trajet,$reservation,$placeIdList[$i]);
                }
                // commit
                $this->db->trans_commit();
            } catch(Exception $ex){
                throw $ex;
                $this->db->trans_rollback();
            } 
            // fermer la transaction
            $this->db->trans_complete();
        }

        private function validationRecherche($date,$depart,$destination){            
            // Verifier si la date est deja passer
            date_default_timezone_set('Europe/Moscow');
            $aujourdhui=date('d-m-Y');
            if($date<$aujourdhui && $date!=null) throw new Exception("La date que vous avez entre est deja passee");
            // Verifier si le depart est different de l'arrive
            if(strcmp(strtolower($depart),strtolower($destination))==0) throw new Exception("Le lieu de depart et le lieu de destination sont identiques");
        }

        public function recherche($date,$depart,$destination){
            $this->load->model('Trajet_Model');
            // Validation
            self::validationRecherche($date,$depart,$destination);
            // Select au niveau de la base
            $ret=Trajet_Model::findtrajet($date,$depart,$destination);
            // Verifier si le resultat est vide
            if(count($ret)==0) throw new Exception("Aucun resultat disponible pour votre recherche");
            // Retourner la liste des trajets
            return $ret;
        }

        public static function rechercheAvancee($date,$depart,$destination){
            self::$load->model('Trajet_Model');
            // Validation
            self::validationRecherche();
            // Select au niveau de la base
            $ret=Trajet_Model::findtrajet($date,$depart,$destination);
            // Verifier si le resultat est vide
            if(count($ret)==0) throw new Exception("Aucun resultat disponible pour votre recherche");
            // Retourner la liste des trajets
            return $ret;
        }

}