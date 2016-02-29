<?php


class Contact extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'contacts';
    	
    var $id;
    var $contact_name;
    var $contact_number;
    var $group_id;
    var $group_name;
    var $notes;

   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}
  
	function get_data () {
  	$data = array(
			'contact_name' => $this->contact_name,
			'contact_number' => $this->contact_number,
			'group_id' => $this->group_id,
			'group_name' => $this->group_name,
			'notes' => $this->notes,
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
    
	function add_thru_post ( ) {
		// get the information first and update the model
		$this->contact_name = $this->caller->input->post('contact_name');
		$this->contact_number = $this->caller->input->post('contact_number');
		$this->notes = $this->caller->input->post('notes');
		$group_contact = $this->caller->input->post('group_contact');
    $temp_split = explode(",", $group_contact);
		$this->group_id = trim($temp_split[1]);
		$this->group_name = trim($temp_split[0]);
		// then add the instance of that model
		$id = $this->add();
		return $id;
	}
		
	function update_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->post('id');
		$this->contact_name = $this->caller->input->post('contact_name');
		$this->contact_number = $this->caller->input->post('contact_number');
		$this->notes = $this->caller->input->post('notes');
		$group_contact = $this->caller->input->post('group_contact');
    $temp_split = explode(",", $group_contact);
		$this->group_id = trim($temp_split[1]);
		$this->group_name = trim($temp_split[0]);
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


  function getAllGroup ( $group_id ) {
    $query = $this->caller->db->query("SELECT * FROM $this->table_name WHERE group_id=$group_id");
    $total = $this->caller->db->affected_rows();
    $data = array();
    foreach ($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }




  function findContactNumber ( $senderNumber ) {
		$num = substr($senderNumber,3);
		$query_str = "SELECT * FROM $this->table_name WHERE contact_number LIKE '%$num' LIMIT 1 ";

    $query = $this->caller->db->query($query_str);
    foreach ($query->result() as $row) {
			return $row;
		}
		return NULL;

	}

  function getAllFilteredAsCSV () {
    $filter_arr = [];

		$search_group = $this->caller->input->post('search_group');
    if ($search_group != "Search group") {
			$filter_arr[] = " group_name LIKE '%". $search_group ."%' ";
		}

		$search_name = $this->caller->input->post('search_name');
    if ($search_name != "Search name") {
			$filter_arr[] = " contact_name LIKE '%". $search_name ."%' ";
		}

		$search_number = $this->caller->input->post('search_number');
    if ($search_number != "Search number") {
			$filter_arr[] = " contact_number LIKE '%". $search_number ."%' ";
		}

		$search_notes = $this->caller->input->post('search_notes');
    if ($search_notes != "Search notes") {
			$filter_arr[] = " notes LIKE '%". $search_notes ."%' ";
		}

		$query_str = "SELECT * FROM $this->table_name ";
    if (count($filter_arr) == 1)  {
			$query_str .= "WHERE " . $filter_arr[0];
		} else if ( count($filter_arr) > 1) {
			$query_str .= "WHERE " ;
			$x = 1;
			foreach ($filter_arr as $filter) {
				if ( $x > 1) {
					$query_str .= " AND " ;
				}
				$query_str .= $filter ;
				$x = $x + 1;
			}
		}

    $query = $this->caller->db->query($query_str);
    $total = $this->caller->db->affected_rows();
    $data = array();
		# add header
		$csv_str = "No.,Group,Name,Number,Notes\n"; 
		$x = 1;
    foreach ($query->result() as $row) {
      $data[] = $row;
			$csv_str .= $x . "," . $row->group_name . "," . $row->contact_name . "," . $row->contact_number . "," . $row->notes . "\n";
			$x = $x + 1;
    }
    return $csv_str;
  }


}
?>
