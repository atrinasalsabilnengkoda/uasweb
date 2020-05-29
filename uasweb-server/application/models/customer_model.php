<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class customer_model extends CI_Model {
    public function getCustomer($id = null){
        if($id===null){
            return $this->db->get('tb_customer')->result_array();
        }else{
            return $this->db->get_where('tb_customer',['id' => $id])->result_array();
        }
    }

    public function deleteCustomer($id){
        $this->db->delete('tb_customer', ['id'=>$id]);
        return $this->db->affected_rows();
    }

    public function createCustomer($data){
        $this->db->insert('tb_customer', $data);
        return $this->db->affected_rows();
    }

    public function updateCustomer($data, $id){
        $this->db->update('tb_customer', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}


/* End of file customer_model.php */

?>