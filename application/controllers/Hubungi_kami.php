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
	}
?>