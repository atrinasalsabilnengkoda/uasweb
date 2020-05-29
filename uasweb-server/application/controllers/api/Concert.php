<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
require APPPATH.'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Concert extends REST_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('concert_model','concert');
    }
    
    public function index_get()
    {
        $concert_id = $this->get('concert_id');
        if($concert_id===null){
            $concert = $this->concert->getConcert();
        }else{
            $concert = $this->concert->getConcert($concert_id);
        }

        if($concert){
            $this->response([
                'status' => true,
                'data' => $concert
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
        $concert_id =  $this->delete('customer_id');

        if($concert_id===null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->concert->deleteConcert($concert_id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'concert_id' => $concert_id,
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
            'concert_title' => $this->post('concert_title'),
            'concert_venue' => $this->post('concert_venue'),
            'concert_date' => $this->post('concert_date'),
        ];

        if($this->concert->createConcert($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new concert has been created'
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
        $concert_id =  $this->put('concert_id');
        $data = [
            'concert_title' => $this->post('concert_title'),
            'concert_venue' => $this->post('concert_venue'),
            'concert_date' => $this->post('concert_date'),
        ];

        if($this->customer->updateConcert($data, $concert_id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data concert has been updated'
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

/* End of file Concert.php */
?>