<?php
	if (isset($this->session->userdata['client'])) {
		$this->load->view("templates/header-deconnexion");
	}else{
		$this->load->view("templates/header");
	}
		$this->load->view($contents);
		$this->load->view("templates/footer");

?>