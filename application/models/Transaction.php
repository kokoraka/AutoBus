<?php
  class Transaction extends CI_MODEL {
    public function __construct() {
      parent::__construct();
      $this->load->database();
    }


    public function get_transaction() {
      $qry = "SELECT * FROM `transaction`";
      return $this->db->query($qry)->result_object();
    }

   public function get_transaction_id($id) {
     $qry = "SELECT * FROM `transaction` WHERE transaction_id='$id'";
     return $this->db->query($qry)->result_object();
   }

   public function get_transaction_username($id) {
     $qry = "SELECT * FROM `transaction` WHERE user_username='$id'";
     return $this->db->query($qry)->result_object();
   }

   public function get_transaction_detil($id) {
     $qry = "SELECT * FROM transactiondetail WHERE transaction_id='$id'";
     return $this->db->query($qry)->result_object();
   }

   public function insert($data) {
     $field = array(
       'transaction_id' => $data['transactionid'],
       'user_username' => $data['transactionusername']
     );

     $try = $this->db->insert('transaction', $field);
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }

   public function insert_detil($data) {
     $try = $this->db->insert_batch('transactiondetail', $data);
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }

  public function delete($id) {
    $this->db->where('transaction_id', $id);
    $try = $this->db->delete('transaction');
    if ($try) {
      return TRUE;
    }
    return FALSE;
  }

  }
?>
