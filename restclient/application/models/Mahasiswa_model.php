<?php 

use GuzzleHttp\Client;
class Mahasiswa_model extends CI_Model{

    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'https://localhost/rest-api/restserver/api/',
            'auth' =>['admin', '1234'],
        ]);
    }
    
    public function getAllMahasiswa()
    {
        
    
        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'slack-key' => 'rahasia'
        ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getMahasiswaById($id)
    {
        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'slack-key' => 'rahasia',
                'id' => $id
                

        ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function hapusDataMahasiswa($id)
    {   
        $response = $this->_client->request('DELETE', 'mahasiswa', [
            'form_params' => [
                'slack-key' => 'rahasia',
                'id' => $id
            ]
            ]);
            $result = json_decode($response->getBody()->getContents(), true);
            return $result;
    }
    public function tambahDataMahasiswa()
    {   
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            'slack-key' => 'rahasia',
        ];
        $response = $this->_client->request('POST', 'mahasiswa', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function ubahDataMahasiswa()
    {
        $data = [  
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "id" => $this->input->post('id', true),
            'slack-key' => 'rahasia',
            
        ];
        $response = $this->_client->request('PUT', 'mahasiswa', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    
    

    // public function tambahDataMahasiswa()
    // {   
    //     $data = [
    //         "nama" => $this->input->post('nama', true),
    //         "nim" => $this->input->post('nim', true),
    //         "email" => $this->input->post('email', true),
    //         "jurusan" => $this->input->post('jurusan', true),
    //     ];
    //     $this->db->insert('mahasiswa', $data);
        
    // }
    
    // public function hapusDataMahasiswa($id)
    // {   
    //     $this->db->where('id', $id);
    //     $this->db->delete("mahasiswa");
    //     // $this->db->delete("mahasiswa", ['id' => $id]);
        
    // }
    
    // public function getMahasiswaById($id)
    // {
    //     return $this->db->get_where('mahasiswa', ['id'=> $id ])->row_array();
    // }
    
    // public function ubahDataMahasiswa()
    // {
    //     $data = [  
    //         "nama" => $this->input->post('nama', true),
    //         "nim" => $this->input->post('nim', true),
    //         "email" => $this->input->post('email', true),
    //         "jurusan" => $this->input->post('jurusan', true),
    //     ];
    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('mahasiswa', $data);

    // }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }


}





?>