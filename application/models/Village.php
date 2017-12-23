<?php
  class Village extends CI_MODEL {
    public function __construct() {
      parent::__construct();
      $this->load->database();
    }

   public function get_village($cat = '*') {
     switch ($cat) {
       case '*':
        $qry = "SELECT village.*, regency.regency_name, district.district_name FROM village, regency, district WHERE village.district_id=district.district_id AND district.regency_id=regency.regency_id AND regency.regency_id IN('3204','3217','3273') ORDER BY village.village_name ASC";
        return $this->db->query($qry)->result_object();
       break;
       default:
         return $this->db->query($qry)->result_object();
       break;
     }
   }

   public function get_village_name($id) {
     if ($id) {
       $qry = "SELECT village_name FROM village WHERE village_id='$id'";
       return $this->db->query($qry)->row()->village_name;
     }
   }

  }
?>
