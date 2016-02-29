<?php


class reference extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'reference';
    	
    var $id;
    var $reference;

   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}
  
	function get_data () {
  	$data = array(
			'reference' => $this->reference,
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
			$this->reference = $row->reference;
		}
	}
    
	function add_thru_post ( ) {
		// get the information first and update the model
		$this->reference = $this->caller->input->post('reference');
		// then add the instance of that model
		$id = $this->add();
		return $id;
	}
		
	function update_thru_post () {
		// get the information first and update the model
		$this->id = 1;
		$this->reference = $this->caller->input->post('reference');

		$this->update();
	}
		function updateRef ( $reference ) {
		// get the information first and update the model
		$this->id = 1;
		$this->reference = $reference;

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

	function getReference () {
    $query = $this->caller->db->query("SELECT * FROM $this->table_name WHERE id=1");
    $total = $this->caller->db->affected_rows();
   	foreach ($query->result() as $row) {
      return $row->reference;
    }
	}



}
?>
