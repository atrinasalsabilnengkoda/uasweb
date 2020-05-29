<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
require APPPATH.'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Ticket extends REST_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ticket_model','ticket');
    }
    
    public function index_get()
    {
        $ticket_id = $this->get('ticket_id');
        if($ticket_id===null){
            $ticket = $this->ticket->getTicket();
        }else{
            $ticket = $this->ticket->getTicket($ticket_id);
        }

        if($ticket){
            $this->response([
                'status' => true,
                'data' => $ticket
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $ticket_id =  $this->delete('ticket_id');

        if($ticket_id===null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->ticket->deleteTicket($ticket_id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'ticket_id' => $ticket_id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_OK);
            }else{
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'ticket_price' => $this->post('ticket_price'),
            'ticket_class' => $this->post('ticket_class'),
        ];

        if($this->ticket->createTicket($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new ticket has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $ticket_id =  $this->put('ticket_id');
        $data = [
            'ticket_price' => $this->post('ticket_price'),
            'ticket_class' => $this->post('ticket_class'),
        ];

        if($this->ticket->updateTicket($data, $ticket_id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data ticket has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

/* End of file Ticket.php */
?>