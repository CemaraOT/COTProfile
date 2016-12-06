<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Hubungi_kami extends CI_Controller{
        public function __construct(){
            parent::__construct();
            //Model
        }
		
        public function index(){
			$this->load->view("hubungi_kami");
            $this->load->view("common/footer");
		}

		public function submit(){
			$data = array('nama'=>$this->input->post('nama'),
						'email'=>$this->input->post('email'),
						'pesan'=>$this->input->post('pesan'));
			print_r($data);
		}
	}
?>