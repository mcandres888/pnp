<?php


class incident_types extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'incident_types';
    	
    var $id;
    var $section;
    var $name;

   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}
  
	function get_data () {
  	$data = array(
			'section' => $this->section,
			'name' => $this->name,
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
			$this->section = $row->section;
			$this->name = $row->name;
		}
	}
    
	function add_thru_post ( ) {
		// get the information first and update the model
		$this->section = $this->caller->input->post('section');
		$this->name = $this->caller->input->post('name');
		// then add the instance of that model
		$id = $this->add();
		return $id;
	}
		
	function update_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->post('incident_id');
		$this->section = $this->caller->input->post('section');
		$this->name = $this->caller->input->post('name');

		$this->update();
	}
	
	function delete_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->post('id');
		$this->delete();
	}

	function getAll () {
    $query = $this->caller->db->query("SELECT * FROM $this->table_name ORDER BY name");
    $total = $this->caller->db->affected_rows();
		$data = array();
   	foreach ($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
	}

	function getIncidentJSON () {
    $query = $this->caller->db->query("SELECT * FROM $this->table_name ORDER BY section");
    $total = $this->caller->db->affected_rows();
		$data = array();
   	foreach ($query->result() as $row) {
      $temp_arr = array();
				
    	$query2 = $this->caller->db->query("SELECT * FROM subincident_types WHERE incident_type=" . $row->id );
      foreach ($query2->result() as $row2) {
          $temp_arr[] = array("name" => $row2->subtype, "id" => $row2->id);
			}

      $data[$row->name . ", " . $row->id] = array( "name" => $row->name, "data" => $temp_arr );
      //$data[$row->id] = array( "name" => $row->name, "data" => $temp_arr );

    }
    return $data;
	}



}
?>
