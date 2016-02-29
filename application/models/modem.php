<?php


class Modem extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'phones';
    	
    var $id;
    var $ID;
    var $IMEI;
    var $Signal;
    var $TimeOut;
    var $Sent;
    var $Recieved;

   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}
  
  function get_data () {
  	$data = array(
   		'IMEI' => $this->IMEI,
    	'Signal' => $this->Signal,
    	'TimeOut' => $this->TimeOut,
    	'Sent' => $this->Sent,
    	'Recieved' => $this->Recieved
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
			$this->contact_name = $row->contact_name;
			$this->contact_number = $row->contact_number;
			$this->group_id = $row->group_id;
			$this->group_name = $row->group_name;
    	$this->notes = $row->notes;
		}
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

}
?>
