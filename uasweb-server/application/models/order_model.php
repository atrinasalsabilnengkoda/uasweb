<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {
    public function getOrder($order_id = null){
        if($order_id===null){
            return $this->db->get('tb_order')->result_array();
        }else{
            return $this->db->get_where('tb_order',['order_id' => $order_id])->result_array();
        }
    }

    public function deleteOrder($order_id){
        $this->db->delete('tb_order', ['order_id'=>$order_id]);
        return $this->db->affected_rows();
    }

    public function createOrder($data){
        $this->db->insert('tb_order', $data);
        return $this->db->affected_rows();
    }

    public function updateOrder($data, $order_id){
        $this->db->update('tb_order', $data, ['order_id' => $order_id]);
        return $this->db->affected_rows();
    }
}


/* End of file order_model.php */

?>