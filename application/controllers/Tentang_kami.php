<?php
	class Tentang_kami extends CI_Controller{
        public function __construct(){
            parent::__construct();
            //Model
        }
		
        public function index(){
			$this->load->view("tentang_kami");
            $this->load->view("common/footer");
		}
	}
?>