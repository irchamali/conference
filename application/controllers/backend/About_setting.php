<?php

class About_setting extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Setting_model','setting_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$data = $this->setting_model->get_about_data()->row();
		$x['about_id'] = $data->about_id;
		$x['about_img'] = $data->about_image;
		$x['about_desc'] = $data->about_description;
		$x['title'] = "About";
		$x['head'] = $this->load->view('backend/layouts/head2', $x, TRUE);
		$x['navbar'] = $this->load->view('backend/layouts/navbar', $x, TRUE);
		$x['sidebar'] = $this->load->view('backend/layouts/sidebar', $x, TRUE);
		$this->load->view('backend/v_about_setting',$x);
	}

	function update(){
		$about_id = htmlspecialchars($this->input->post('about_id',TRUE),ENT_QUOTES);
		$description = $this->input->post('description',TRUE);
		
		$config['upload_path'] = './assets/frontend/images/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = FALSE;

	    $this->upload->initialize($config);
	    if(!empty($_FILES['img_about']['name'])){
	    	if ($this->upload->do_upload('img_about')){
	            $img_about = $this->upload->data();
	            $image=$img_about['file_name'];
	        }
	        $this->setting_model->update_information_about($about_id,$description,$image);
	        $this->session->set_flashdata('msg','success');
	        redirect('backend/about_setting');

	    }else{
	    	$this->setting_model->update_information_about_noimg($about_id,$description);
	        $this->session->set_flashdata('msg','success');
	        redirect('backend/about_setting');
	    }
	}

}