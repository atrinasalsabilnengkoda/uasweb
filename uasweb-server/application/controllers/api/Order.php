<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
require APPPATH.'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Order extends REST_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('order_model','order');
    }
    
    public function index_get()
    {
        $order_id = $this->get('order_id');
        if($order_id===null){
            $order = $this->order->getOrder();
        }else{
            $order = $this->order->getOrder($order_id);
        }

        if($order){
            $this->response([
                'status' => true,
                'data' => $order
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
        $order_id =  $this->delete('customer_id');

        if($order_id===null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->order->deleteOrder($order_id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'order_id' => $order_id,
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
            'cust_id' => $this->post('cust_id'),
            'concert_id' => $this->post('concert_id'),
            'ticket_id' => $this->post('ticket_id'),
            'order_quantity' => $this->post('order_quantity'),
            'status' => $this->post('status'),
        ];

        if($this->order->createOrder($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new order has been created'
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
        $order_id =  $this->put('order_id');
        $data = [
            'cust_id' => $this->post('cust_id'),
            'concert_id' => $this->post('concert_id'),
            'ticket_id' => $this->post('ticket_id'),
            'order_quantity' => $this->post('order_quantity'),
            'status' => $this->post('status'),
        ];

        if($this->order->updateOrder($data, $order_id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data order has been updated'
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

/* End of file Order.php */
?>