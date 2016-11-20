<?php
	class Main extends CI_Controller{
        public function __construct() {
            parent::__construct();

            //Model
        }
        public function index(){
			$this->load->view("main");
            $this->load->view("common/footer");
		}
	}
?>