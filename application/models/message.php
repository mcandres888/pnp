<?php


class Message extends CI_Model {
	
    
    var $caller ;
    var $table_name = 'messages';
    	
    var $id;
    var $contact_id;
    var $contact_name;
    var $contact_number;
    var $group_id;
    var $group_name;
    var $message;
    var $timestamp;
    var $time_epoch;
    var $status;

   
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
				$text = $this->caller->input->post('message');
				$count = strlen($text);
        $this->sendmessageToModem ( $contact_number, $count, $text);


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
        $this->sendmessageToModem ( $contact_ex[1], $count, $text);


		}

		$this->message = $this->caller->input->post('message');
		$this->time_epoch = time();
		$this->status = "queue";

		// then add the instance of that model
		$id = $this->add();
		return $id;
	}


function getNetwork ( $number ) {
    $smart_numbers = ["0813", "0938", "0939", "0907", "0908",
                      "0946", "0909", "0947", "0910", "0948",
                      "0911", "0949", "0912", "0970", "0913",
                      "0914", "0918", "0919", "0920", "0981",
                      "0921", "0989", "0998", "0999", "0928",
                      "0929", "0930", "0813", "0947", "0998",
                      "0911", "0913", "0914", "0970", "0981"
    ];
    $globe_numbers = ["0817", "0905", "0906", "0945", "0915",
                      "0975", "0916", "0976", "0917", "0977",
                      "0994", "0995", "0996", "0997", "0926",
                      "0927", "0935", "0936", "0937", "0817",
                      "0994", "0977", "0975", "0995", "0945",
                      "0976"
    ];


    $sun_numbers = [  "0942", "0943", "0922", "0923", "0924",
                      "0932", "0933", "0934", "0934", "0925",
                      "0947"
    ];

    $digits = "";
    $number = trim($number);
    if ($number == "222") {
       return 1;
    }

    if (strlen($number) == 10) {
      $digits = "0" . substr($number,0,3);
    } else if (strlen($number) == 11) {
      $digits = substr($number,0,4);
    }else if (strlen($number) == 12) {
      $digits = "0" . substr($number,2,3);
    }else if (strlen($number) == 13) {
      $digits = "0" . substr($number,3,3);
    }


    if (in_array($digits,$globe_numbers )) {
      return 1;
    } else if (in_array($digits,$smart_numbers )) {
      return 2;
    } else if(in_array($digits,$sun_numbers )) {
      return 3;
    }

    return 1;
 }


  function sendmessageToModem ( $contact, $count, $text) {

     $network = $this->getNetwork($contact);

     if ($network == 1)  {
     		$exec_str = "/usr/bin/gammu-smsd-inject -c /etc/gammu-smsdrc  TEXT " . $contact  . " -len " . $count ." -text '" . $text ."'";
     } else if ($network == 2)  {
     		$exec_str = "/usr/bin/gammu-smsd-inject -c /etc/gammu-smsdrc2  TEXT " . $contact  . " -len " . $count ." -text '" . $text ."'";
     } else if ($network == 3)  {
     		$exec_str = "/usr/bin/gammu-smsd-inject -c /etc/gammu-smsdrc2  TEXT " . $contact  . " -len " . $count ." -text '" . $text ."'";

		  }
     echo $exec_str;
		 exec($exec_str);

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
    foreach ($query->result() as $row) {
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


  function getAllFilteredAsCSV ( $status ) {
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

		$search_message = $this->caller->input->post('search_message');
    if ($search_message != "Search message") {
			$filter_arr[] = " message LIKE '%". $search_message ."%' ";
		}


		$search_date = $this->caller->input->post('search_date');
    if ($search_date != "Search date") {
			$filter_arr[] = " timestamp LIKE '%". $search_date ."%' ";
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

		$query_str .= " AND status LIKE '%$status%'" ;
    $query = $this->caller->db->query($query_str);
    $total = $this->caller->db->affected_rows();
    $data = array();
		# add header
		$csv_str = "No.,Group,Name,Number,Message,Date\n"; 
		$x = 1;
    foreach ($query->result() as $row) {
      $data[] = $row;
			$csv_str .= $x . "," . $row->group_name . "," . $row->contact_name . "," . $row->contact_number . "," . $row->message . "," . $row->timestamp ."\n";
			$x = $x + 1;
    }
    return $csv_str;
  }


}
?>
