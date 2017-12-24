<?php
  class Order extends CI_MODEL {
    public function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->model('transaction');
    }

    public function get_order_status($type) {
        switch ($type) {
          case 'W':
            return 'Menunggu Konfirmasi';
          break;
          case 'P':
            return 'Menunggu Pembayaran';
          break;
          case 'D':
            return 'Selesai';
          break;
          default:break;
        }
    }

    public function get_order() {
      $qry = "SELECT * FROM `order`";
      return $this->db->query($qry)->result_object();
    }

   public function get_order_id($id) {
     $qry = "SELECT * FROM `order` WHERE order_id='$id'";
     return $this->db->query($qry)->result_object();
   }

   public function get_order_username($id) {
     $qry = "SELECT * FROM `order` WHERE user_username='$id'";
     return $this->db->query($qry)->result_object();
   }

   public function get_order_detil($id) {
     $qry = "SELECT * FROM orderdetail WHERE order_id='$id'";
     return $this->db->query($qry)->result_object();
   }

   public function insert() {
     $field = array(
       'order_status' => 'W',
       'user_username' => $this->session->userdata('user_username')
     );

     $try = $this->db->insert('order', $field);
     if ($try) {
       $insert_id = $this->db->insert_id();
       return $insert_id;
     }
     return FALSE;
   }


  public function insert_detil($data) {
    $try = $this->db->insert('orderdetail', $data);
    if ($try) {
      return TRUE;
    }
    return FALSE;
  }

  public function delete($id) {
    $this->db->where('order_id', $id);
    $try = $this->db->delete('order');
    if ($try) {
      return TRUE;
    }
    return FALSE;
  }


   public function change($data) {
     $data['orderstatus'] = $this->get_order_id($data['orderid'])[0]->order_status;
     switch ($data['orderstatus']) {
       case 'W':
         $field = array(
           'order_status' => 'P',
         );
       break;
       case 'P':
         $field = array(
           'order_status' => 'D',
         );
         $data['transactionid'] = $data['orderid'];
         $data['transactionusername'] = $this->get_order_id($data['orderid'])[0]->user_username;
         $this->transaction->insert($data);

         $detils = $this->get_order_detil($data['transactionid']);
         foreach ($detils as $key => $value) {
           $orderdetil[] = array(
            'transaction_id' => $data['transactionid'],
            'transactiondetail_quantity' => $value->orderdetail_quantity,
            'ticket_id' => $value->ticket_id
           );
         }
         $this->transaction->insert_detil($orderdetil);
         $this->delete($data['orderid']);
       break;
       case 'D':
         $field = array(
           'order_status' => 'D',
         );
         $data['transactionid'] = $data['orderid'];
         $data['transactionusername'] = $this->get_order_id($data['orderid'])[0]->user_username;
         $this->transaction->insert($data);

         $detils = $this->get_order_detil($data['transactionid']);
         foreach ($detils as $key => $value) {
           $orderdetil[] = array(
             'transaction_id' => $data['transactionid'],
             'transactiondetail_quantity' => $value->orderdetail_quantity,
             'ticket_id' => $value->ticket_id
           );
         }
         $this->transaction->insert_detil($orderdetil);
         $this->delete($data['orderid']);
       break;
       default:break;
     }

     $this->db->set($field);
     $this->db->where('order_id', $data['orderid']);
     $try = $this->db->update('order', $field);
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }


  }
?>
