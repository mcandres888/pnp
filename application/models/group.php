<?php


class Group extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'groups';
    	
    var $id;
    var $group_name;
    var $description;

   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}
  
	function get_data () {
  	$data = array(
			'group_name' => $this->group_name,
			'description' => $this->description,
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
			$this->group_name = $row->group_name;
			$this->description = $row->description;
		}
	}
    
	function add_thru_post ( ) {
		// get the information first and update the model
		$this->group_name = $this->caller->input->post('group_name');
		$this->description = $this->caller->input->post('description');

		// then add the instance of that model
		$id = $this->add();
		return $id;
	}
		
	function update_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->get('id');
		$this->group_name = $this->caller->input->post('group_name');
		$this->description = $this->caller->input->post('description');
		$this->update();
	}
	
	function delete_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->post('id');
		$this->delete();
	}

	function sendToGroup ( ) {
		$group = $this->caller->input->post('group');
		$group_arr = explode(",",$group);
 		$this->caller->load->model('contact');
 		$this->caller->load->model('message');
   	$contact = new contact();
   	$mess = new message();
		$group_list = $contact->getAllGroup(trim($group_arr[1]));
		foreach ($group_list as $group_data) {
			$text = $this->caller->input->post('message');
     	$count = strlen($text);
      $mess->sendmessageToModem ( $group_data->contact_number, $count, $text);

		}
	}


	function sendToGroupId ($group_id, $text ) {
 		$this->caller->load->model('contact');
 		$this->caller->load->model('message');
   	$contact = new contact();
   	$mess = new message();
		$group_list = $contact->getAllGroup(trim($group_id));
		foreach ($group_list as $group_data) {
     	$count = strlen($text);
      $mess->sendmessageToModem ( $group_data->contact_number, $count, $text);
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

}
?>
