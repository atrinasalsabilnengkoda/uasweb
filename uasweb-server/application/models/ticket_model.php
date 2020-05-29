<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ticket_model extends CI_Model {
    public function getTicket($ticket_id = null){
        if($ticket_id===null){
            return $this->db->get('tb_ticket')->result_array();
        }else{
            return $this->db->get_where('tb_ticket',['ticket_id' => $ticket_id])->result_array();
        }
    }

    public function deleteTicket($ticket_id){
        $this->db->delete('tb_ticket', ['ticket_id'=>$ticket_id]);
        return $this->db->affected_rows();
    }

    public function createTicket($data){
        $this->db->insert('tb_ticket', $data);
        return $this->db->affected_rows();
    }

    public function updateTicket($data, $ticket_id){
        $this->db->update('tb_ticket', $data, ['ticket_id' => $ticket_id]);
        return $this->db->affected_rows();
    }
}


/* End of file ticket_model.php */

?>