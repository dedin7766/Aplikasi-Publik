<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
function __construct(){
  parent::__construct();
}

  public function index()
  {
    $this->load->view('login');
  }

  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');

    if($this->form_validation->run() != false){
      $where = array('username'=>$username, 'password'=>md5($password));

      $data = $this->M_kursus->edit_data($where,'admin');
      $d = $this->M_kursus->edit_data($where,'admin')->row();
      $cek = $data->num_rows();

      if($cek > 0)
      {
        $session = array('id' => $d->id_admin,'nama' => $d->nama_admin,'status' =>'login');
        $this->session->set_userdata($session);
        redirect(base_url().'admin');
      


 }else{             
    $where = array('username'=>$username, 'password'=>md5($password));
     $dt = $this->M_kursus->edit_data($where, 'admin'); 
     $hasil = $this->M_kursus->edit_data($where, 'admin')->row();  
     $proses = $dt->num_rows(); 
 
                if($proses > 0)
                  {                     $session = array('id_agt' => $hasil->id_admin, 'nama_agt' => $hasil->nama_admin, 'status' => 'login');                    
                   $this->session->set_userdata($session);                  
                      redirect(base_url().'login_admin');                 
                  }else{                    
                   $this->session->set_flashdata('alert', 'Login gagal! Username atau password salah.');                     redirect(base_url().'login_admin');                 }             }         }else{
                                $this->session->set_flashdata('alert', 'Anda Belum mengisi Username atau Password'); 
                    $this->load->view('login');
      }
    }
}


