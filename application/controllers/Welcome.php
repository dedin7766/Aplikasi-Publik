<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function __construct(){
	   parent::__construct();
  
  }

  function index(){
  	$data['wifi'] = $this->M_kursus->get_data('wifi')->result();
    $this->load->view('publik/header.php');
    $this->load->view('publik/index.php',$data);
    $this->load->view('publik/footer.php');
  }

  function detail_wifi($id){
        $where = array('id' =>$id);
        $data['wifi'] = $this->db->query("select * from wifi where id='$id'")->result();

        $this->load->view('publik/header2');
        $this->load->view('publik/detail_wifi',$data);
        $this->load->view('publik/footer');
      }

          public function cari_data()
  {
    $data2['cari'] = $this->M_kursus->cari_data();
    $this->load->view('publik/header2');
    $this->load->view('publik/hasil', $data2);
  }
  


}
  