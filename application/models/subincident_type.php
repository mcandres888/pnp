<?php


class subincident_type extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'subincident_types';
    	
    var $id;
    var $incident_type;
    var $subtype;

   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}
  
	function get_data () {
  	$data = array(
			'incident_type' => $this->incident_type,
			'subtype' => $this->subtype,
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
			$this->incident_type = $row->incident_type;
			$this->subtype = $row->subtype;
		}
	}
    
	function add_thru_post ( ) {
		// get the information first and update the model
		$this->incident_type = $this->caller->input->post('incident_type');
		$this->subtype = $this->caller->input->post('subtype');
		// then add the instance of that model
		$id = $this->add();
		return $id;
	}
		
	function update_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->get('id');
		$this->incident_type = $this->caller->input->post('incident_type');
		$this->subtype = $this->caller->input->post('subtype');

		$this->update();
	}
	
	function delete_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->post('id');
		$this->delete();
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

	function getAllWithIncidentType ( $id ) {
    $query = $this->caller->db->query("SELECT * FROM $this->table_name WHERE incident_type=$id");
    $total = $this->caller->db->affected_rows();
		$data = array();
   	foreach ($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
	}


}
?>
