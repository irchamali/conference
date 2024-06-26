<?php

class Subscriber extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Subscribe_model','subscribe_model');
		$this->load->helper('text');
	}

	function index(){
		$data['data'] = $this->subscribe_model->get_subscribers();
		$data['title'] = "Subscribers";
		$data['head'] = $this->load->view('backend/layouts/head', $data, TRUE);
		$data['navbar'] = $this->load->view('backend/layouts/navbar', $data, TRUE);
		$data['sidebar'] = $this->load->view('backend/layouts/sidebar', $data, TRUE);
		$this->load->view('backend/v_subscriber',$data);
	}

	function update(){
		$id = $this->input->post('kode',TRUE);
		$this->subscribe_model->update_status($id);
		$this->session->set_flashdata('msg','success');
		redirect('backend/subscriber');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->subscribe_model->delete_email($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('backend/subscriber');
	} 

	function decrease(){
		$id = $this->uri->segment(4);
		$this->subscribe_model->decrease_rating($id);
		redirect('backend/subscriber');
	}

	function increase(){
		$id = $this->uri->segment(4);
		$this->subscribe_model->increase_rating($id);
		redirect('backend/subscriber');
	}
}