<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
require APPPATH.'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Customer extends REST_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model','customer');
    }
    
    public function index_get()
    {
        $id = $this->get('id');
        if($id===null){
            $customer = $this->customer->getCustomer();
        }else{
            $customer = $this->customer->getCustomer($id);
        }

        if($customer){
            $this->response([
                'status' => true,
                'data' => $customer
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
        $id =  $this->delete('id');

        if($id===null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->customer->deleteCustomer($id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
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
            'name' => $this->post('name'),
            'address' => $this->post('address'),
            'email' => $this->post('email'),
            'email_verified_at' => $this->post('email_verified_at'),
            'password' => $this->post('password'),
            'remember_token' => $this->post('remember_token'),
            'created_at' => $this->post('created_at'),
            'updated_at' => $this->post('updated_at'),
        ];

        if($this->customer->createCustomer($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new customer has been created'
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
        $id =  $this->put('id');
        $data = [
            'name' => $this->post('name'),
            'address' => $this->post('address'),
            'email' => $this->post('email'),
            'email_verified_at' => $this->post('email_verified_at'),
            'password' => $this->post('password'),
            'remember_token' => $this->post('remember_token'),
            'created_at' => $this->post('created_at'),
            'updated_at' => $this->post('updated_at'),
        ];

        if($this->customer->updateCustomer($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data customer has been updated'
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

/* End of file Customer.php */
?>