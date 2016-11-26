<?php
	class Hubungi_kami extends CI_Controller{
        public function __construct(){
            parent::__construct();
            //Model
        }
		
        public function index(){
			$this->load->view("Hubungi_kami");
            $this->load->view("common/footer");
		}
	}
?>