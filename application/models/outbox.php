<?php


class Outbox extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'outbox';
    	
    var $id;
    var $SendingDateTime;
    var $DestinationNumber;
    var $TextDecoded;

   
	function __construct() {
 		// Call the Model constructor
   	parent::__construct();
		$this->caller =& get_instance();
 	}

 
	function get_data () {
  	$data = array(
			'contact_id' => $this->contact_id,
			'contact_name' => $this->contact_name,
			'contact_number' => $this->contact_number,
			'group_id' => $this->group_id,
			'group_name' => $this->group_name,
			'message' => $this->message,
			'timestamp' => $this->timestamp,
			'time_epoch' => $this->time_epoch,
			'status' => $this->status,
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
			$this->contact_id = $row->contact_id;
			$this->contact_name = $row->contact_name;
			$this->contact_number = $row->contact_number;
			$this->group_id = $row->group_id;
			$this->group_name = $row->group_name;
    	$this->message = $row->message;
    	$this->timestamp = $row->timestamp;
    	$this->time_epoch = $row->time_epoch;
    	$this->status = $row->status;

		}
	}
    
	function add_thru_post ( ) {
		// get the information first and update the model
		$contact = $this->caller->input->post('contact');
		$contact_number = $this->caller->input->post('contact_number');

		$contact_ex = explode(",", $contact);
    if ($contact_ex[0] == "None") {
			if ( $contact_number != "") {
				$this->contact_number = $contact_number;
				$this->group_id = 0;
				$this->contact_id = 0;
				$this->contact_name = "N/A";
				$this->group_name = "N/A";

			} 
		} else {
				$this->contact_number = $contact_ex[1];
				$this->contact_name = $contact_ex[0];
				$this->contact_id = $contact_ex[2];

				$this->caller->load->model('contact');
				$contact = new contact();
				$contact->id = $contact_ex[2];
				$contact->get();
				$this->group_id = $contact->group_id;
				$this->group_name = $contact->group_name;
				$text = $this->caller->input->post('message');
				$count = strlen($text);
				$exec_str = "/usr/bin/gammu-smsd-inject TEXT " . $contact_ex[1]  . " -len " . $count ." -text '" . $text ."'";
				exec($exec_str);


		}

		$this->message = $this->caller->input->post('message');
		$this->time_epoch = time();
		$this->status = "queue";

		// then add the instance of that model
		$id = $this->add();
		return $id;
	}
		
	function update_thru_post () {
		// get the information first and update the model
		$this->id = $this->caller->input->get('id');
		$this->contact_name = $this->caller->input->post('contact_name');
		$this->contact_number = $this->caller->input->post('contact_number');
		$this->notes = $this->caller->input->post('notes');
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
		$this->caller->load->model('contact');
		$contact = new contact();
		
    foreach ($query->result() as $row) {
		
			$temp = $contact->findContactNumber($row->DestinationNumber)	;
			if (is_null($temp)) {
				$row->group_name = "none";
				$row->contact_name = "none";
			} else {
				$row->group_name = $temp->group_name;
				$row->contact_name = $temp->contact_name;
			}
      $data[] = $row;
    }
    return $data;
  }

  function getAllStat ( $status) {
    $query = $this->caller->db->query("SELECT * FROM $this->table_name WHERE status LIKE '%$status%'");
    $total = $this->caller->db->affected_rows();
    $data = array();
    foreach ($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }


  function getAllFilteredAsCSV (  ) {
    $filter_arr = [];

		$search_group = $this->caller->input->post('search_group');
    if ($search_group != "Search group") {
			#$filter_arr[] = " group_name LIKE '%". $search_group ."%' ";
		}

		$search_name = $this->caller->input->post('search_name');
    if ($search_name != "Search name") {
			#$filter_arr[] = " contact_name LIKE '%". $search_name ."%' ";
		}

		$search_number = $this->caller->input->post('search_number');
    if ($search_number != "Search number") {
			$filter_arr[] = " DestinationNumber LIKE '%". $search_number ."%' ";
		}

		$search_message = $this->caller->input->post('search_message');
    if ($search_message != "Search message") {
			$filter_arr[] = " TextDecoded LIKE '%". $search_message ."%' ";
		}


		$search_date = $this->caller->input->post('search_date');
    if ($search_date != "Search date") {
			$filter_arr[] = " SendingDateTime LIKE '%". $search_date ."%' ";
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

		$this->caller->load->model('contact');
		$contact = new contact();
    $query = $this->caller->db->query($query_str);
    $total = $this->caller->db->affected_rows();
    $data = array();
		# add header
		$csv_str = "No.,Group,Name,Number,Message,Date\n"; 
		$x = 1;
    foreach ($query->result() as $row) {
		
			$temp = $contact->findContactNumber($row->DestinationNumber)	;
			if (is_null($temp)) {
				$row->group_name = "none";
				$row->contact_name = "none";
			} else {
				$row->group_name = $temp->group_name;
				$row->contact_name = $temp->contact_name;
			}
  
      $data[] = $row;
			$csv_str .= $x . "," . $row->group_name . "," . $row->contact_name . "," . $row->DestinationNumber . ",\"" . $row->TextDecoded . "\"," . $row->SendingDateTime ."\n";
			$x = $x + 1;
    }
    return $csv_str;
  }


}
?>
