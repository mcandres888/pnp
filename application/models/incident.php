<?php


class Incident extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'incident';
    	
    var $id;
    var $reference_number;
    var $group;
    var $group_id;
    var $incident_type;
    var $incident_type_id;
		var $location;
		var $location_id;
		var $victim_name;
		var $suspect_name;
		var $details;
		var $report_from;
		var $date;
		var $time;
		var $status;

    var $sms_data;	// text
    var $incident_sub_type; // int
    var $operation_type; //int
    // counts
    var $govt_official ;
    var $civilian ;
    var $pnp ;
    var $afp ;
    var $security_guard ;
    var $caa ;
    var $foreign_national ;
    var $other_category ;
    var $hpfa_machine_gun ;
    var $hpfa_machine_pistol ;
    var $hpfa_grenade_launcher ;
    var $hpfa_rifle ;
    var $hpfa_pistol ;
    var $hpfa_revolver ;
    var $lffa_shotgun ;
    var $lffa_rifle ;
    var $lffa_pistol ;
    var $lffa_revolver ;
    var $lffa_sumpak ;
    var $oi_fareplica;
    var $oi_bladed;
    var $oi_grenade;
    var $oi_explosives;
    var $oi_ammo;
    var $shabu_sachets;
    var $shabu_kgs;
    var $shabu_grams;
    var $shabu_packs;
    var $mj_sachets;
    var $mj_bricks;
    var $mj_leaves;
    var $mj_rolls;
    var $mj_plants;
    var $mj_seeds;
    var $mj_kgs;
    var $coke_sachets;
    var $coke_grams;
    var $coke_kgs;
    var $oid_kgs;
    var $ddb_value;

// added attributes
    var $pro;  
    var $prov;
    var $tag;
    var $otherlea;
    var $bjmp;
    var $bfp;
    var $asg;
    var $biff;
    var $npa;
    var $milf;
    var $mnlf;
    var $pags;
    var $other_suspects_killed;
    var $other_suspects_large;
    var $total_victims_of_elected_official;
    var $total_victims_civilian;
    var $total_victims_pnp;
    var $total_victims_afp;
    var $total_victims_sg;
    var $total_victims_caa;
    var $total_victims_foreign;
    var $total_victims_others;
    var $arresting_unit;
    var $arrested_person;
    var $cat_of_other_suspects;
    var $date_reported;
    var $time_reported;






   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}

 
	function get_data () {
  	$data = array(
     'reference_number' => $this->reference_number,
     'group' => $this->group,
     'group_id' => $this->group_id,
     'incident_type' => $this->incident_type,
     'incident_type_id' => $this->incident_type_id,
		 'location' => $this->location,
		 'location_id' => $this->location_id,
		 'victim_name' => $this->victim_name,
		 'suspect_name' => $this->suspect_name,
		 'details' => $this->details,
		 'report_from' => $this->report_from,
		 'date' => $this->date,
		 'time' => $this->time,
		 'status' => $this->status,
    'sms_data' => $this->sms_data,
    'incident_sub_type' => $this->incident_sub_type,
    'operation_type' => $this->operation_type,
    'govt_official' => $this->govt_official ,
    'civilian' => $this->civilian ,
    'pnp' => $this->pnp ,
    'afp' => $this->afp ,
    'security_guard' => $this->security_guard ,
    'caa' => $this->caa ,
    'foreign_national' => $this->foreign_national ,
    'other_category' => $this->other_category ,
    'hpfa_machine_gun' => $this->hpfa_machine_gun ,
    'hpfa_machine_pistol' => $this->hpfa_machine_pistol ,
    'hpfa_grenade_launcher' => $this->hpfa_grenade_launcher ,
    'hpfa_rifle' => $this->hpfa_rifle ,
    'hpfa_pistol' => $this->hpfa_pistol ,
    'hpfa_revolver' => $this->hpfa_revolver ,
    'lffa_shotgun' => $this->lffa_shotgun ,
    'lffa_rifle' => $this->lffa_rifle ,
    'lffa_pistol' => $this->lffa_pistol ,
    'lffa_revolver' => $this->lffa_revolver ,
    'lffa_sumpak' => $this->lffa_sumpak ,
    'oi_fareplica' => $this->oi_fareplica,
    'oi_bladed' => $this->oi_bladed,
    'oi_grenade' => $this->oi_grenade,
    'oi_explosives' => $this->oi_explosives,
    'oi_ammo' => $this->oi_ammo,
    'shabu_sachets' => $this->shabu_sachets,
    'shabu_kgs' => $this->shabu_kgs,
    'shabu_grams' => $this->shabu_grams,
    'shabu_packs' => $this->shabu_packs,
    'mj_sachets' => $this->mj_sachets,
    'mj_bricks' => $this->mj_bricks,
    'mj_leaves' => $this->mj_leaves,
    'mj_rolls' => $this->mj_rolls,
    'mj_plants' => $this->mj_plants,
    'mj_seeds' => $this->mj_seeds,
    'mj_kgs' => $this->mj_kgs,
    'coke_sachets' => $this->coke_sachets,
    'coke_grams' => $this->coke_grams,
    'coke_kgs' => $this->coke_kgs,
    'oid_kgs' => $this->oid_kgs,
    'ddb_value' => $this->ddb_value,
    'pro' => $this->pro,
    'prov' => $this->prov,
    'tag' => $this->tag,
    'otherlea' => $this->otherlea,
    'bjmp' => $this->bjmp,
    'bfp' => $this->bfp,
    'asg' => $this->asg,
    'biff' => $this->biff,
    'npa' => $this->npa,
    'milf' => $this->milf,
    'mnlf' => $this->mnlf,
    'pags' => $this->pags,
    'other_suspects_killed' => $this->other_suspects_killed,
    'other_suspects_large' => $this->other_suspects_large,
    'total_victims_of_elected_official' => $this->total_victims_of_elected_official,
    'total_victims_civilian' => $this->total_victims_civilian,
    'total_victims_pnp' => $this->total_victims_pnp,
    'total_victims_afp' => $this->total_victims_afp,
    'total_victims_sg' => $this->total_victims_sg,
    'total_victims_caa' => $this->total_victims_caa,
    'total_victims_foreign' => $this->total_victims_foreign,
    'total_victims_others' => $this->total_victims_others,
    'arresting_unit' => $this->arresting_unit,
    'arrested_person' => $this->arrested_person,
    'cat_of_other_suspects' => $this->cat_of_other_suspects,
    'date_reported' => $this->date_reported,
    'time_reported' => $this->time_reported,
    );
		return $data;
	}
   
	function add ( ) {
    // database insert
		$this->caller->db->insert($this->table_name, $this->get_data());
		// get the id from the last insert
		$this->id  = $this->caller->db->insert_id();
		return $this->id;		 
 	}
    
	function update ( ) {
		$this->caller->db->where('id', $this->id);
		// database update
		$this->caller->db->update($this->table_name, $this->get_data());    	
	}
    
	function delete ( ) {
		$query = $this->db->query("DELETE FROM $this->table_name WHERE id='$this->id'");
	}

	function get ( ) {
		$query = $this->caller->db->query("SELECT * FROM $this->table_name WHERE id='$this->id' LIMIT 1");
   	foreach ($query->result() as $row) {
			$this->id = $row->id;
      $this->reference_number = $row->reference_number;
      $this->group = $row->group;
      $this->group_id = $row->group_id;
      $this->incident_type = $row->incident_type;
      $this->incident_type_id = $row->incident_type_id;
		  $this->location = $row->location;
		  $this->location_id = $row->location_id;
		  $this->victim_name = $row->victim_name;
		  $this->suspect_name = $row->suspect_name;
		  $this->details = $row->details;
		  $this->report_from = $row->report_from;
		  $this->date = $row->date;
		  $this->time = $row->time;
		  $this->status = $row->status;


      $this->sms_data = $row->sms_data;	
      $this->incident_sub_type = $row->incident_sub_type;
      $this->operation_type = $row->operation_type;
      $this->govt_official = $row->govt_official ;
      $this->civilian = $row->civilian ;
      $this->pnp = $row->pnp ;
      $this->afp = $row->afp ;
      $this->security_guard = $row->security_guard ;
      $this->caa = $row->caa ;
      $this->foreign_national = $row->foreign_national ;
      $this->other_category = $row->other_category ;
      $this->hpfa_machine_gun = $row->hpfa_machine_gun ;
      $this->hpfa_machine_pistol = $row->hpfa_machine_pistol ;
      $this->hpfa_grenade_launcher = $row->hpfa_grenade_launcher ;
      $this->hpfa_rifle = $row->hpfa_rifle ;
      $this->hpfa_pistol = $row->hpfa_pistol ;
      $this->hpfa_revolver = $row->hpfa_revolver ;
      $this->lffa_shotgun = $row->lffa_shotgun ;
      $this->lffa_rifle = $row->lffa_rifle ;
      $this->lffa_pistol = $row->lffa_pistol ;
      $this->lffa_revolver = $row->lffa_revolver ;
      $this->lffa_sumpak = $row->lffa_sumpak ;
      $this->oi_fareplica = $row->oi_fareplica;
      $this->oi_bladed = $row->oi_bladed;
      $this->oi_grenade = $row->oi_grenade;
      $this->oi_explosives = $row->oi_explosives;
      $this->oi_ammo = $row->oi_ammo;
      $this->shabu_sachets = $row->shabu_sachets;
      $this->shabu_kgs = $row->shabu_kgs;
      $this->shabu_grams = $row->shabu_grams;
      $this->shabu_packs = $row->shabu_packs;
      $this->mj_sachets = $row->mj_sachets;
      $this->mj_bricks = $row->mj_bricks;
      $this->mj_leaves = $row->mj_leaves;
      $this->mj_rolls = $row->mj_rolls;
      $this->mj_plants = $row->mj_plants;
      $this->mj_seeds = $row->mj_seeds;
      $this->mj_kgs = $row->mj_kgs;
      $this->coke_sachets = $row->coke_sachets;
      $this->coke_grams = $row->coke_grams;
      $this->coke_kgs = $row->coke_kgs;
      $this->oid_kgs = $row->oid_kgs;
      $this->ddb_value = $row->ddb_value;

      $this->pro = $row->pro;  
      $this->prov = $row->prov;
      $this->tag = $row->tag;
      $this->otherlea = $row->otherlea;
      $this->bjmp = $row->bjmp;
      $this->bfp = $row->bfp;
      $this->asg = $row->asg;
      $this->biff = $row->biff;
      $this->npa = $row->npa;
      $this->milf = $row->milf;
      $this->mnlf = $row->mnlf;
      $this->pags = $row->pags;
      $this->other_suspects_killed = $row->other_suspects_killed;
      $this->other_suspects_large = $row->other_suspects_large;
      $this->total_victims_of_elected_official = $row->total_victims_of_elected_official;
      $this->total_victims_civilian = $row->total_victims_civilian;
      $this->total_victims_pnp = $row->total_victims_pnp;
      $this->total_victims_afp = $row->total_victims_afp;
      $this->total_victims_sg = $row->total_victims_sg;
      $this->total_victims_caa = $row->total_victims_caa;
      $this->total_victims_foreign = $row->total_victims_foreign;
      $this->total_victims_others = $row->total_victims_others;
      $this->arresting_unit = $row->arresting_unit;
      $this->arrested_person = $row->arrested_person;
      $this->cat_of_other_suspects = $row->cat_of_other_suspects;
      $this->date_reported = $row->date_reported;
      $this->time_reported = $row->time_reported;



		}
	}
    
	function add_thru_post ( ) {
		// get the information first and update the model

		$this->reference_number = $this->caller->input->post('reference_number');
    $group = explode(",",$this->caller->input->post('group'));
  
    $this->group = $group[0];
    $this->group_id = $group[1];

    $incident_type = explode(",",$this->caller->input->post('incident_type'));
    $this->incident_type = $incident_type[0];
    $this->incident_type_id = $incident_type[1];

		$location = explode(",",$this->caller->input->post('location'));
		$this->location = $location[0];
		$this->location_id = $location[1];

		$this->victim_name = $this->caller->input->post('victim_name');
		$this->suspect_name = $this->caller->input->post('suspect_name');
		$this->details = $this->caller->input->post('details');
		$this->report_from = $this->caller->input->post('report_from');

    $_date = explode("/",$this->caller->input->post('date'));
		$this->date =$_date[2] . "-" . $_date[0]. "-" . $_date[1] ;
		$this->time = $this->caller->input->post('time');
		$this->status = "sent";



    $this->sms_data = $this->caller->input->post('sms_data');
    $this->incident_sub_type = $this->caller->input->post('incident_sub_type'); 
    $this->operation_type = $this->caller->input->post('operation_type'); 
    $this->govt_official = $this->caller->input->post('govt_official') ;
    $this->civilian = $this->caller->input->post('civilian') ;
    $this->pnp = $this->caller->input->post('pnp') ;
    $this->afp = $this->caller->input->post('afp') ;
    $this->security_guard = $this->caller->input->post('security_guard') ;
    $this->caa = $this->caller->input->post('caa') ;
    $this->foreign_national = $this->caller->input->post('foreign_national') ;
    $this->other_category = $this->caller->input->post('other_category') ;
    $this->hpfa_machine_gun = $this->caller->input->post('hpfa_machine_gun') ;
    $this->hpfa_machine_pistol = $this->caller->input->post('hpfa_machine_pistol') ;
    $this->hpfa_grenade_launcher = $this->caller->input->post('hpfa_grenade_launcher') ;
    $this->hpfa_rifle = $this->caller->input->post('hpfa_rifle') ;
    $this->hpfa_pistol = $this->caller->input->post('hpfa_pistol') ;
    $this->hpfa_revolver = $this->caller->input->post('hpfa_revolver') ;
    $this->lffa_shotgun = $this->caller->input->post('lffa_shotgun') ;
    $this->lffa_rifle = $this->caller->input->post('lffa_rifle') ;
    $this->lffa_pistol = $this->caller->input->post('lffa_pistol') ;
    $this->lffa_revolver = $this->caller->input->post('lffa_revolver') ;
    $this->lffa_sumpak = $this->caller->input->post('lffa_sumpak') ;
    $this->oi_fareplica = $this->caller->input->post('oi_fareplica');
    $this->oi_bladed = $this->caller->input->post('oi_bladed');
    $this->oi_grenade = $this->caller->input->post('oi_grenade');
    $this->oi_explosives = $this->caller->input->post('oi_explosives');
    $this->oi_ammo = $this->caller->input->post('oi_ammo');
    $this->shabu_sachets = $this->caller->input->post('shabu_sachets');
    $this->shabu_kgs = $this->caller->input->post('shabu_kgs');
    $this->shabu_grams = $this->caller->input->post('shabu_grams');
    $this->shabu_packs = $this->caller->input->post('shabu_packs');
    $this->mj_sachets = $this->caller->input->post('mj_sachets');
    $this->mj_bricks = $this->caller->input->post('mj_bricks');
    $this->mj_leaves = $this->caller->input->post('mj_leaves');
    $this->mj_rolls = $this->caller->input->post('mj_rolls');
    $this->mj_plants = $this->caller->input->post('mj_plants');
    $this->mj_seeds = $this->caller->input->post('mj_seeds');
    $this->mj_kgs = $this->caller->input->post('mj_kgs');
    $this->coke_sachets = $this->caller->input->post('coke_sachets');
    $this->coke_grams = $this->caller->input->post('coke_grams');
    $this->coke_kgs = $this->caller->input->post('coke_kgs');
    $this->oid_kgs = $this->caller->input->post('oid_kgs');
    $this->ddb_value = $this->caller->input->post('ddb_value');


    $this->pro = $this->caller->input->post('pro');  
    $this->prov = $this->caller->input->post('prov');
    $this->tag = $this->caller->input->post('tag');
    $this->otherlea = $this->caller->input->post('otherlea');
    $this->bjmp = $this->caller->input->post('bjmp');
    $this->bfp = $this->caller->input->post('bfp');
    $this->asg = $this->caller->input->post('asg');
    $this->biff = $this->caller->input->post('biff');
    $this->npa = $this->caller->input->post('npa');
    $this->milf = $this->caller->input->post('milf');
    $this->mnlf = $this->caller->input->post('mnlf');
    $this->pags = $this->caller->input->post('pags');
    $this->other_suspects_killed = $this->caller->input->post('other_suspects_killed');
    $this->other_suspects_large = $this->caller->input->post('other_suspects_large');
    $this->total_victims_of_elected_official = $this->caller->input->post('total_victims_of_elected_official');
    $this->total_victims_civilian = $this->caller->input->post('total_victims_civilian');
    $this->total_victims_pnp = $this->caller->input->post('total_victims_pnp');
    $this->total_victims_afp = $this->caller->input->post('total_victims_afp');
    $this->total_victims_sg = $this->caller->input->post('total_victims_sg');
    $this->total_victims_caa = $this->caller->input->post('total_victims_caa');
    $this->total_victims_foreign = $this->caller->input->post('total_victims_foreign');
    $this->total_victims_others = $this->caller->input->post('total_victims_others');
    $this->arresting_unit = $this->caller->input->post('arresting_unit');
    $this->arrested_person = $this->caller->input->post('arrested_person');
    $this->cat_of_other_suspects = $this->caller->input->post('cat_of_other_suspects');

    $_date2 = explode("/",$this->caller->input->post('date_reported'));
		$this->date_reported =$_date2[2] . "-" . $_date2[0]. "-" . $_date2[1] ;
    $this->time_reported = $this->caller->input->post('time_reported');





    $this->caller->load->model('group');
    $grp = new group();
    $grp->sendToGroupId($group[1],$this->details);

		// then add the instance of that model
		$id = $this->add();
		return $id;
	}
		
	function update_thru_post () {



    $group = explode(",",$this->caller->input->post('group'));
  
    $this->group = $group[0];
    $this->group_id = $group[1];

    $incident_type = explode(",",$this->caller->input->post('incident_type'));
    $this->incident_type = $incident_type[0];
    $this->incident_type_id = $incident_type[1];

		$location = explode(",",$this->caller->input->post('location'));
		$this->location = $location[0];
		$this->location_id = $location[1];




		// get the information first and update the model
		$this->id = $this->caller->input->post('incident_id');
		$this->reference_number = $this->caller->input->post('reference_number');
		$this->victim_name = $this->caller->input->post('victim_name');
		$this->suspect_name = $this->caller->input->post('suspect_name');
		$this->details = $this->caller->input->post('details');
		$this->report_from = $this->caller->input->post('report_from');

    $_date = explode("/",$this->caller->input->post('date'));
		$this->date =$_date[2] . "-" . $_date[0]. "-" . $_date[1] ;
		$this->time = $this->caller->input->post('time');
		$this->status = $this->caller->input->post('status');


    $this->sms_data = $this->caller->input->post('sms_data');
    $this->incident_sub_type = $this->caller->input->post('incident_sub_type'); 
    $this->operation_type = $this->caller->input->post('operation_type'); 
    $this->govt_official = $this->caller->input->post('govt_official') ;
    $this->civilian = $this->caller->input->post('civilian') ;
    $this->pnp = $this->caller->input->post('pnp') ;
    $this->afp = $this->caller->input->post('afp') ;
    $this->security_guard = $this->caller->input->post('security_guard') ;
    $this->caa = $this->caller->input->post('caa') ;
    $this->foreign_national = $this->caller->input->post('foreign_national') ;
    $this->other_category = $this->caller->input->post('other_category') ;
    $this->hpfa_machine_gun = $this->caller->input->post('hpfa_machine_gun') ;
    $this->hpfa_machine_pistol = $this->caller->input->post('hpfa_machine_pistol') ;
    $this->hpfa_grenade_launcher = $this->caller->input->post('hpfa_grenade_launcher') ;
    $this->hpfa_rifle = $this->caller->input->post('hpfa_rifle') ;
    $this->hpfa_pistol = $this->caller->input->post('hpfa_pistol') ;
    $this->hpfa_revolver = $this->caller->input->post('hpfa_revolver') ;
    $this->lffa_shotgun = $this->caller->input->post('lffa_shotgun') ;
    $this->lffa_rifle = $this->caller->input->post('lffa_rifle') ;
    $this->lffa_pistol = $this->caller->input->post('lffa_pistol') ;
    $this->lffa_revolver = $this->caller->input->post('lffa_revolver') ;
    $this->lffa_sumpak = $this->caller->input->post('lffa_sumpak') ;
    $this->oi_fareplica = $this->caller->input->post('oi_fareplica');
    $this->oi_bladed = $this->caller->input->post('oi_bladed');
    $this->oi_grenade = $this->caller->input->post('oi_grenade');
    $this->oi_explosives = $this->caller->input->post('oi_explosives');
    $this->oi_ammo = $this->caller->input->post('oi_ammo');
    $this->shabu_sachets = $this->caller->input->post('shabu_sachets');
    $this->shabu_kgs = $this->caller->input->post('shabu_kgs');
    $this->shabu_grams = $this->caller->input->post('shabu_grams');
    $this->shabu_packs = $this->caller->input->post('shabu_packs');
    $this->mj_sachets = $this->caller->input->post('mj_sachets');
    $this->mj_bricks = $this->caller->input->post('mj_bricks');
    $this->mj_leaves = $this->caller->input->post('mj_leaves');
    $this->mj_rolls = $this->caller->input->post('mj_rolls');
    $this->mj_plants = $this->caller->input->post('mj_plants');
    $this->mj_seeds = $this->caller->input->post('mj_seeds');
    $this->mj_kgs = $this->caller->input->post('mj_kgs');
    $this->coke_sachets = $this->caller->input->post('coke_sachets');
    $this->coke_grams = $this->caller->input->post('coke_grams');
    $this->coke_kgs = $this->caller->input->post('coke_kgs');
    $this->oid_kgs = $this->caller->input->post('oid_kgs');
    $this->ddb_value = $this->caller->input->post('ddb_value');



    $this->pro = $this->caller->input->post('pro');  
    $this->prov = $this->caller->input->post('prov');
    $this->tag = $this->caller->input->post('tag');
    $this->otherlea = $this->caller->input->post('otherlea');
    $this->bjmp = $this->caller->input->post('bjmp');
    $this->bfp = $this->caller->input->post('bfp');
    $this->asg = $this->caller->input->post('asg');
    $this->biff = $this->caller->input->post('biff');
    $this->npa = $this->caller->input->post('npa');
    $this->milf = $this->caller->input->post('milf');
    $this->mnlf = $this->caller->input->post('mnlf');
    $this->pags = $this->caller->input->post('pags');
    $this->other_suspects_killed = $this->caller->input->post('other_suspects_killed');
    $this->other_suspects_large = $this->caller->input->post('other_suspects_large');
    $this->total_victims_of_elected_official = $this->caller->input->post('total_victims_of_elected_official');
    $this->total_victims_civilian = $this->caller->input->post('total_victims_civilian');
    $this->total_victims_pnp = $this->caller->input->post('total_victims_pnp');
    $this->total_victims_afp = $this->caller->input->post('total_victims_afp');
    $this->total_victims_sg = $this->caller->input->post('total_victims_sg');
    $this->total_victims_caa = $this->caller->input->post('total_victims_caa');
    $this->total_victims_foreign = $this->caller->input->post('total_victims_foreign');
    $this->total_victims_others = $this->caller->input->post('total_victims_others');
    $this->arresting_unit = $this->caller->input->post('arresting_unit');
    $this->arrested_person = $this->caller->input->post('arrested_person');
    $this->cat_of_other_suspects = $this->caller->input->post('cat_of_other_suspects');

    $_date2 = explode("/",$this->caller->input->post('date_reported'));
		$this->date_reported =$_date2[2] . "-" . $_date2[0]. "-" . $_date2[1] ;
    $this->time_reported = $this->caller->input->post('time_reported');






		$this->update();
	}
	
	function delete_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->post('id');
		$this->delete();
	}


  function checkDuplicates ( ) {
    $_date2 = explode("/",$this->caller->input->post('date'));
		$date =$_date2[2] . "-" . $_date2[0]. "-" . $_date2[1] ;
    $time = $this->caller->input->post('time');

    $pro = $this->caller->input->post('pro');
		$incident_type = $this->caller->input->post('incident_type');
    

		$victim_name = $this->caller->input->post('victim_name');
		$suspect_name = $this->caller->input->post('suspect_name');

    $l_incident_type = explode("," , $incident_type);


    $query_str = "SELECT * FROM $this->table_name ";
    $query_str .= " WHERE date='$date' AND ";
    $query_str .= " time='$time:00' AND ";
    $query_str .= " pro LIKE '%" .$pro ."%' AND ";
    if ($victim_name != "" ) {
        $query_str .= " victim_name LIKE '%" .$victim_name ."%' AND ";
    }

    if ($suspect_name != "" ) {
        $query_str .= " suspect_name LIKE '%" .$suspect_name ."%' AND ";
    }


    $query_str .= " incident_type LIKE '%". $l_incident_type[0] ."%'";
 #   echo $query_str;
    $query = $this->caller->db->query($query_str);
    $total = $this->caller->db->affected_rows();
    $data = array();

    $duplicate_data = "";
		
    foreach ($query->result() as $row) {
      $data[] = $row;
      $duplicate_data .= "Ref. No.: " . $row->reference_number . "\n";
      $duplicate_data .= "Victim Name: " . $row->victim_name . "\n";
      $duplicate_data .= "Arrested Person: " . $row->arrested_person . "\n\n";
      
    }
    if (count($data) > 0)  {
        echo "Error !!! Found duplicate entry.\n";
        echo "Number of duplicates : " . count($data) . "\n";
        echo $duplicate_data;
   



    } else {
        echo "Found no duplicate entry.";
    }
  }






  function getAll () {
    $query = $this->caller->db->query("SELECT * FROM $this->table_name");
    $total = $this->caller->db->affected_rows();
    $data = array();
		
    foreach ($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }

  function exportAsCSV () {
		$select = "SELECT * FROM $this->table_name";
		$export = mysql_query ( $select ) or die ( "Sql error : " . mysql_error( ) );
		$fields = mysql_num_fields ( $export );
		for ( $i = 0; $i < $fields; $i++ )
		{
    	$header .= mysql_field_name( $export , $i ) . ",";
		}
		while( $row = mysql_fetch_row( $export ) )
		{
  		  $line = '';
    		foreach( $row as $value )
    		{                                            
        	if ( ( !isset( $value ) ) || ( $value == "" ) ) {
            $value = ",";
       		 } else {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . ",";
       		 }
        	$line .= $value;
    		}
   		 $data .= trim( $line ) . "\n";
		}
		$data = str_replace( "\r" , "" , $data );

		if ( $data == "" )
		{
    	$data = "\n(0) Records Found!\n";                        
		}

    return "$header\n$data";
	}

}
?>
