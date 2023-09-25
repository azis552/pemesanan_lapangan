<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("pemesanan/pemesanan_model");
        $this->load->library('session');
    }

    public function index()
    {
       // echo "hello world";
       $this->load->view('template/header');
       $this->load->view('template/sidebar');
       $this->load->view('dashboard');
       $this->load->view('template/footer');
    }
    function pemesanan_lapangan()
    {
        
       $this->load->view('template/header');
       $this->load->view('template/sidebar');
       $this->load->view('form_input');
       $this->load->view('template/footer');
    }
    public function simpan_data()
    {
        $simpan_data = $this->pemesanan_model;
        $hasil = $simpan_data->save();

        if($hasil){
            $this->session->set_flashdata('message', 'success');
            redirect('pemesanan/pemesanan_lapangan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('pemesanan/pemesanan_lapangan');
        }
    }
    public function data_pemesanan()
    {
        $data = $this->pemesanan_model;
        $hasil['data'] = $data->select();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('data_pemesanan', $hasil);
        $this->load->view('template/footer');
    }
    // berfungsi menampilkan data yang akan di edit
    public function update_pemesanan()
    {
        $data = $this->pemesanan_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('form_update',$hasil);
        $this->load->view('template/footer');
    }
    // berfungsi untuk menyimpan data pemesanan yang di edit
    public function update_data()
    {
        $data = $this->pemesanan_model;
        $update = $data->update();
        
        if($update){
            $this->session->set_flashdata('message', 'success update');
            redirect('pemesanan/data_pemesanan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('pemesanan/data_pemesanan');
        }
    }
    // berfungsi untuk menghapus data pemesanan
    public function delete_pemesanan()
    {
        $data = $this->pemesanan_model;
        $delete = $data->delete($this->input->get('id'));
        if($delete){
            $this->session->set_flashdata('message', 'success delete');
            redirect('pemesanan/data_pemesanan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('pemesanan/data_pemesanan');
        }
    }
}

/* End of file Pemesanan.php and path /application/controllers/pemesanan/Pemesanan.php */
