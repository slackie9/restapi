<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Mahasiswa extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model','mahasiswa');
        $this->methods['index_get']['limit'] = 10000;
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null){
            $mahasiswa = $this->mahasiswa->getMahasiswa();
        } else {
            $mahasiswa = $this->mahasiswa->getMahasiswa($id);

        }
        
        if ($mahasiswa){
            $this->response( [
                'status' => true,
                'data' => $mahasiswa
            ], 200 );
        } else {
            $this->response( [
                'status' => false,
                'message' => 'No Mahasiswa'
            ], 404 );
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id === null ){
            $this->response( [
                'status' => false,
                'message' => 'Provide an id'
            ], 400 );
        } else {
            if ($this->mahasiswa->deleteMahasiswa($id) >0){
                // ok
                $this->response( [
                    'status' => true,
                    'data' => $id,
                    'message' => 'Deleted'
                ], 200 );
            } else {
                // id not found
                $this->response( [
                    'status' => false,
                    'message' => 'id not found'
                ], 400 );
            }
        }
    }

    public function index_post()
    {
        $data = [
            'nrp'=> $this->post('nrp'),
            'nama'=> $this->post('nama'),
            'email'=> $this->post('email'),
            'jurusan'=> $this->post('jurusan')
        ];
        if ($this->mahasiswa->createMahasiswa($data) >0){
            $this->response( [
                'status' => true,
                'message' => 'new mahasiswa has been created'
            ], 201 );
        } else {
            $this->response( [
                'status' => false,
                'message' => 'Fail to create newdata'
            ], 404 );
        }
    }
    
    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'nrp'=> $this->put('nrp'),
            'nama'=> $this->put('nama'),
            'email'=> $this->put('email'),
            'jurusan'=> $this->put('jurusan')
        ];

        if ($this->mahasiswa->updateMahasiswa($data, $id) >0){
            $this->response( [
                'status' => true,
                'message' => 'mahasiswa has been updated'
            ], 200 );
        } else {
            $this->response( [
                'status' => false,
                'message' => 'Fail to update data'
            ], 404 );
        }
    }

}



?>