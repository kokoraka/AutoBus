<?php
  class Ticket extends CI_MODEL {
    public function __construct() {
      parent::__construct();
      $this->load->database();
    }

   public function get_ticket($cat = '*') {
     switch ($cat) {
       case 'today':
         $min = date('Y-m-d');
         $max = date('Y-m-d') . ' ' . date('H:m:s');
         $qry = 'SELECT * FROM ticket WHERE ticket_quantity > 0';
         $qry .= ' AND ticket_date_depart >= "' . $min . '" AND ticket_date_depart <= "' . $max . '" ORDER BY ticket_id DESC LIMIT 0, 7';
         return $this->db->query($qry)->result_object();
       break;
       case 'tomorrow':
         $min = date('Y-m-d', strtotime('+1 days'));
         $max = date('Y-m-d', strtotime('+1 days')) . ' ' . date('H:m:s');
         $qry = 'SELECT * FROM ticket WHERE ticket_quantity > 0';
         $qry .= ' AND ticket_date_depart >= "' . $min . '" AND ticket_date_depart <= "' . $max . '" ORDER BY ticket_id DESC LIMIT 0, 7';
         return $this->db->query($qry)->result_object();
       break;
       default:
         $date = date('Y-m-d');
         $qry = 'SELECT * FROM ticket WHERE ticket_quantity > 0';
         $qry .= ' AND ticket_date_depart >=' . $date . ' ORDER BY ticket_id DESC LIMIT 0, 7';
         return $this->db->query($qry)->result_object();
       break;
     }
   }

   public function get_ticket_id($id) {
     $qry = "SELECT * FROM ticket WHERE ticket_id='$id'";     
     return $this->db->query($qry)->result_object();
   }

  }
?>
