<?php
  class Bus extends CI_MODEL {
    public function __construct() {
      parent::__construct();
      $this->load->database();
    }

   public function get_bus($cat = '*') {
     switch ($cat) {
       case '*':
        $qry = "SELECT * FROM bus";
        return $this->db->query($qry)->result_object();
       break;
       default:
         return $this->db->query($qry)->result_object();
       break;
     }
   }

   public function get_bus_id($id) {
     if ($id) {
       $qry = "SELECT * FROM bus WHERE bus_id='$id'";
       return $this->db->query($qry)->row();
     }
   }

   public function insert_bus($data) {
     $field = array(
       'bus_name' => $data['busname'],
       'bus_capacity' => $data['buscapacity'],
     );

     $try = $this->db->insert('bus', $field);
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }

   public function delete_bus($id) {
     $this->db->where('bus_id', $id);
     $try = $this->db->delete('bus');
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }

   public function change_bus($data) {
     $field = array(
      'bus_name' => $data['busname'],
      'bus_capacity' => $data['buscapacity'],
     );

     $this->db->set($field);
     $this->db->where('bus_id', $data['busid']);
     $try = $this->db->update('bus', $field);
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }

  }
?>
