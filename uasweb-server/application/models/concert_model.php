<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class concert_model extends CI_Model {
    public function getConcert($concert_id = null){
        if($concert_id===null){
            return $this->db->get('tb_concert')->result_array();
        }else{
            return $this->db->get_where('tb_concert',['concert_id' => $concert_id])->result_array();
        }
    }

    public function deleteConcert($concert_id){
        $this->db->delete('tb_concert', ['concert_id'=>$concert_id]);
        return $this->db->affected_rows();
    }

    public function createConcert($data){
        $this->db->insert('tb_concert', $data);
        return $this->db->affected_rows();
    }

    public function updateConcert($data, $concert_id){
        $this->db->update('tb_concert', $data, ['concert_id' => $concert_id]);
        return $this->db->affected_rows();
    }
}


/* End of file concert_model.php */

?>