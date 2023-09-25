<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pemesanan_model extends CI_Model 
{
    // ini deklarasi nama table
    private $table = 'pemesanan';

    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    } 
    // ini function  menyimpan data pemesanan
    public function save()
    {
        $data = array(
            "nama_lapangan" => $this->input->post('nama_lapangan'),
            "lebar_lapangan" => $this->input->post('lebar_lapangan'),
            "bola" => $this->input->post('bola'),
            "jenis_rumput" => $this->input->post('jenis_rumput'),
            "tanggal_pemesanan" => $this->input->post('tanggal_pemesanan'),
            'jam_pemesanan' => $this->input->post('jam_pemesanan')
        );
        
        return $this->db->insert($this->table, $data);
    }                       
    
    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function update()
    {
        $data = array(
            "nama_lapangan" => $this->input->post('nama_lapangan'),
            "lebar_lapangan" => $this->input->post('lebar_lapangan'),
            "bola" => $this->input->post('bola'),
            "jenis_rumput" => $this->input->post('jenis_rumput'),
            "tanggal_pemesanan" => $this->input->post('tanggal_pemesanan'),
            'jam_pemesanan' => $this->input->post('jam_pemesanan')
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update($this->table,$data);
    } 
    // berfungsi untuk menghapus data
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }                  
}


/* End of file Pemesanan_model.php and path /application/models/pemesanan/Pemesanan_model.php */
